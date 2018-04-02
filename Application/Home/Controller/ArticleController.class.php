<?php
/**
 * Created by PhpStorm.
 * User: w-pc
 * Date: 2017/03/01
 * Time: 23:22
 */

namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
        $article_list = D('Article')->getArticleByList();
        $this->assign('menus',get_menu(1));
        $this->assign('article_list',$article_list);
        $this->display();
    }
    public function show(){
        $a_id = request('get','int','a_id');
        $article = D('Article')->getArticleByOne($a_id);
//        var_dump($article);
//        exit();
        $this->assign('menus',get_menu(1));
        $this->assign('article',$article);
        $this->display();
    }
}