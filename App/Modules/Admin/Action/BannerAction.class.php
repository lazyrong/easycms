<?php
/**
 * 后台文章类
 * @author   <[c@easycms.cc]>
 */
class BannerAction extends CommonAction{
		public function index() {
		//列表过滤器，生成查询Map对象
		$map = $this->_search('banner');

		$model = M('banner');
		if (!empty($model)) {
			$this->_list($model, $map);
		}
		$this->display();
		return;
	}

	/**
	 * 根据表单生成查询条件
	 * 进行列表过滤
	 * @param string $name 数据对象名称
	 * @return HashMap
	 */
	protected function _search($name='') {
		//生成查询条件
		if (empty($name)) {
			$name = $this->getActionName();
		}
		$model = M($name);
		$map = array();
		foreach ($model->getDbFields() as $key => $val) {
			if (substr($key, 0, 1) == '_')
				continue;
			if (isset($_REQUEST[$val]) && $_REQUEST[$val] != '') {
				$map[$val] = $_REQUEST[$val];
			}
		}
		return $map;
	}

		public function edit() {
		$model = D('banner');
		$id = $_REQUEST[$model->getPk()];
		$vo = $model->find($id);
		$this->assign('vo', $vo);
		$this->display();
	}
	

		public function insert(){
		$url = $this->upload();
		$model = D('banner');
		unset ( $_POST [$model->getPk()] );
		
		if (false === $model->create()) {
			$this->error($model->getError());
		}
		//设置URL属性
		$model->url = $url;
		//保存当前数据对象
		if ($result = $model->add()){ //保存成功
			// 回调接口
			if (method_exists($this, '_tigger_insert')) {
				$model->id = $result;
				$this->_tigger_insert($model);
			}
			//成功提示
			$this->success(L('新增成功'));
		} else {
			//失败提示
			$this->error(L('新增失败').$model->getLastSql());
		}
	}

		public function delAll(){
    	$name='banner';
		$model = M($name);
    	$pk=$model->getPk();  
		$data[$pk]=array('in', $_POST['ids']); 
		$file_path = $model->where($data)->getField('url',true);
		$model->where($data)->delete();
		//同时删除对应图片
		for($i=0;$i<count($file_path);$i++)
			unlink($file_path[$i]);

		$this->success('更新成功');

	}

    Public function upload(){
    import('ORG.Net.UploadFile');
    $upload = new UploadFile();// 实例化上传类
    $upload->maxSize  = 3145728 ;// 设置附件上传大小
    $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->savePath =  './Uploads/Picture/banner/';// 设置附件上传目录
    if(!$upload->upload()) {// 上传错误提示错误信息
    $this->error($upload->getErrorMsg());
    }else{// 上传成功 获取上传文件信息
    $info =  $upload->getUploadFileInfo();
    }

    //返回上传图片路径
    return $url = $info[0]['savepath'].$info[0]['savename'];
    }
	

	function jsonString($str)
	{
		return preg_replace("/([\\\\\/'])/",'\\\$1',$str);
	}
	
	function formatBytes($bytes) {
		if($bytes >= 1073741824) {
			$bytes = round($bytes / 1073741824 * 100) / 100 . 'GB';
		} elseif($bytes >= 1048576) {
			$bytes = round($bytes / 1048576 * 100) / 100 . 'MB';
		} elseif($bytes >= 1024) {
			$bytes = round($bytes / 1024 * 100) / 100 . 'KB';
		} else {
			$bytes = $bytes . 'Bytes';
		}
		return $bytes;
	}

	

	/**
	 * 根据表单生成查询条件
	 * 进行列表过滤
	 * @param Model $model 数据对象
	 * @param HashMap $map 过滤条件
	 * @param string $sortBy 排序
	 * @param boolean $asc 是否正序
	 */
	protected function _list($model ,$map = array(), $sortBy = '', $asc = false) {
		//排序字段 默认为主键名
		if (!empty($_REQUEST['_order'])) {
			$order = $_REQUEST['_order'];
		} else {
			$order = !empty($sortBy)?$sortBy:$model->getPk();
		}
		
		//排序方式默认按照倒序排列
		//接受 sort参数 0 表示倒序 非0都 表示正序
		if (!empty($_REQUEST['_sort'])) {
			$sort = $_REQUEST['_sort'] == 'asc'?'asc':'desc';
		} else {
			$sort = $asc ? 'asc' : 'desc';
		}

		//取得满足条件的记录数
		$count = $model->where($map)->count();
		
		//每页显示的记录数
			$listRows = '5';
		

		//设置当前页码
		if(!empty($_REQUEST['pageNum'])) {
			$nowPage=$_REQUEST['pageNum'];
		}else{
			$nowPage=1;
		}
		$_GET['p']=$nowPage;
		
		//创建分页对象
		import("ORG.Util.Page");
		$p = new Page($count, $listRows);
		
		
		//分页查询数据
		//$list = $model->where($map)->order($order . ' ' . $sort)->select();
		$list = $model->where($map)->order($order.' '.$sort)
						->limit($p->firstRow.','.$p->listRows)
						->select();		

		//回调函数，用于数据加工，如将用户id，替换成用户名称
		if (method_exists($this, '_tigger_list')) {
			$this->_tigger_list($list);
		}
		//分页跳转的时候保证查询条件
		foreach ($map as $key => $val) {
			if (!is_array($val)) {
				$p->parameter .= "$key=" . urlencode($val) . "&";
			}
		}
	
		//分页显示
		$page = $p->show();
		
		//列表排序显示
		$sortImg = $sort;                                 //排序图标
		$sortAlt = $sort == 'desc' ? '升序排列' : '倒序排列';   //排序提示
		$sort = $sort == 'desc' ? 1 : 0;                  //排序方式
		
		
		//模板赋值显示
		$this->assign('list', $list);
		$this->assign('sort', $sort);
		$this->assign('order', $order);
		$this->assign('sortImg', $sortImg);
		$this->assign('sortType', $sortAlt);
		$this->assign("page", $page);
		
		$this->assign("search",			$search);			//搜索类型
		$this->assign("values",			$_POST['values']);	//搜索输入框内容
		$this->assign("totalCount",		$count);			//总条数
		$this->assign("numPerPage",		$p->listRows);		//每页显多少条
		$this->assign("currentPage",	$nowPage);			//当前页码
	}
}
