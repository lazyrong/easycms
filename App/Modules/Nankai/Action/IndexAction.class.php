<?php
/**
* 前台首页
* @author  <[c@easycms.cc]>
*/
class IndexAction extends CommonAction
{ 
	Public function index(){
		$cats=D('Category');
		$link=M('link');
		$portrait=M('Member_user');
		$article=M('article');
		
		//首页banner图展示
		 $banner = M('banner')->where('isshow = 1')->order('sort asc')->select();
		$this->assign('banner', $banner);
		$this->assign('ulWidth', count($banner)*20);
		
		//首页7篇文章推荐展示
		$arr = array_merge(getChildrenId('71'),getChildrenId('74'),getChildrenId('75'));
		$map['tid'] = array('in',$arr);	
		$map['ispush'] = 1;
		$map['islock']=0;
		$recArticle=$article->where($map)->order('sort asc')->limit(7)->select();
		$this->assign('recArticle',$recArticle);


		//首页3个项目推荐
		$arr = array_merge(getChildrenId('71'));
		$map['tid'] = array('in',$arr);	
		$map['ispush'] = 1;
		$map['islock']=0;
		$recProject=$article->where($map)->order('sort asc')->limit(3)->select();
		$this->assign('recProject',$recProject);
		
		//首页人物或者机构推荐
		$map['tid'] = 87;	
		$map['ispush'] = 1;
		$map['islock']=0;
		$recOrg=$article->where($map)->order('sort asc')->limit(3)->select();
		$this->assign('recOrg',$recOrg);

		//首页媒体推荐
		$map['tid'] = 85;	
		$map['ispush'] = 1;
		$map['islock']=0;
		$recMedia=$article->where($map)->order('sort asc')->limit(3)->select();
		$this->assign('recMedia',$recMedia);
		
		//显示模板	
		$this->display('index');
	}
}
