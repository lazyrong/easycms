<?php 
/**
* 前台2级列表页
* @author  <[c@easycms.cc]>
*/
class ListAction extends CommonAction
{
	
	Public function index(){
		$catsid=I('catsid','','intval');
		$cats=M('Category')->find($catsid);
		$this->assign('catName',$cats['name']);

		//左侧菜单
		$pid = $cats['pid'];
		if ( intval($pid,10) > 0) {
			$menu = M('Category')->where("pid=$pid")->order('sort asc')->select();
			$this->assign('menu',$menu);
		}

		//数据分页
		import('ORG.Util.Page');// 导入分页类
   		$count=M('article')->where("tid=$catsid and islock=0")->count();//获取数据的总数
   		$page=new Page($count,5);
   		$page->setConfig('theme', '<ul class="pagination"><li>%upPage%</li><li>%downPage%</li><li>%prePage%</li><li>%linkPage%</li><li>%nextPage%</li><li>%end%</li></ul>');
   		$show=$page->show();//返回分页信息
		$articles=M('article')->where("tid=$catsid and islock=0")->order('article_id desc')->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('show',$show);
		$this->assign('count',$count);
		$this->assign('list',$articles);

		// $urlName = "list".$catsid;
		// $this->buildHtml($urlName,'','list_article','utf8');	
		switch($cats['modelid']) {
			case 0:
				$this->display('list_article');
				break;
			case 1:
				$this->display('list_card');
				break;
			case 2:
				$this->display('list_about');
				break;
		}
	}
}