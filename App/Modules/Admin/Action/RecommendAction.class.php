<?php
/**
 * 首页推荐类
 * @author   <[c@easycms.cc]>
 */
class RecommendAction extends CommonAction{

		public function rec_article() {
		//列表过滤器，生成查询Map对象
		$map = $this->_search('Article');
		$arr = array_merge(getChildrenId('71'),getChildrenId('74'),getChildrenId('75'));
		$map['tid'] = array('in',$arr);	
		$map['ispush'] = 1;
		$map['islock']=0;
		$model = D('Article');
		if (!empty($model)) {
			$this->_list($model, $map,'sort','asc');
		}

		$this->assign('navTabUrl','rec_article');
		$this->display('index');
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

	public function addTo($catsid){
		$m=M('Category');
		$clist = $m->order('sort asc')->where("pid=$catsid")->select();
		$this->assign('catsid',$catsid);
		$this->assign('clist',$clist);
		$this->display();
	}

	public function addCat(){
		$id=$_REQUEST['id'];
		$m=M('Category');
		$where['id']=$id;
		$catinfo=$m->where($where)->find();
		$this->assign('catinfo',$catinfo);
		switch($catinfo['modelid']) {
			case 0:
			$this->display('addNormal');
			break;
			case 1:
			$this->display('addNormal');
			break;
			case 2:
			$this->display('addAbout');
		}

		
	}
		public function edit() {
		$model = D('Article');
		$id = $_REQUEST[$model->getPk()];
		$vo = $model->relation(true)->find($id);
		$this->assign('vo', $vo);
		if($vo['modelid']==0){
			$this->display('editNormal');
		}else{
			$this->display('editCard');
		}
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

		public function update() {
		$model = D('Article');
		if(false === $model->create()) {
			$this->error($model->getError());
		}
		// 更新数据
		if(false !== $model->save()) {
			// 回调接口
			if (method_exists($this, '_tigger_update')) {
				$this->_tigger_update($model);
			}
			//成功提示
			$this->success(L('更新成功'));
		} else {
			//错误提示
			$this->error(L('更新失败'));
		}
	}
	

public function changeState() {
		$model = M("Article"); // 实例化对象
		$pk = $model->getPk();
		$condition[$pk]=$_REQUEST[$pk];
		// 要修改的数据对象属性赋值
		$data['islock'] = ($_REQUEST['islock']==0)?1:0;
		$model->where($condition)->save($data); // 根据条件保存修改的数据
		if(false !== $model->where($condition)->save($data)) {
			//成功提示
			$this->success(L('更新成功'));
		} else {
			//错误提示
			$this->error(L('更新失败'));
		}
	}
	

   public function rubAll(){
    	$name='Article';
		$model = M($name);
    	$pk=$model->getPk ();  
		$data[$pk]=array('in', $_POST['ids']);
		$data1['islock']=1;
		$model->where($data)->save($data1);
		$this->success('更新成功');
	}

	public function delAll(){
    	$name='Article';
		$model = M($name);
    	$pk=$model->getPk ();  
		$data[$pk]=array('in', $_POST['ids']);
		$model->where($data)->delete();
		
		$this->success('更新成功');
	}

   public function recAll(){
    	$name='Article';
		$model = M($name);
    	$pk=$model->getPk ();  
		$data[$pk]=array('in', $_POST['ids']);
		$data1['islock']=0;
		$model->where($data)->save($data1);
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
			$listRows = '10';
		

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
		//$list = $model->where($map)->relation(true)->order($order . ' ' . $sort)->select();
		$list = $model->where($map)->relation(true)->order($order.' '.$sort)
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