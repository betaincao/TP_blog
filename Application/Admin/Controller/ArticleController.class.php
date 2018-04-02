<?php
/**
 * Created by PhpStorm.
 * User: w-pc
 * Date: 2017/03/02
 * Time: 22:53
 */

namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    public function index(){
        $article_list = D('Article')->getArticleByList();
        $this->assign('article_list',$article_list);
        $this->display();
    }
    public function show(){
        $a_id = request('get','int','a_id');
        if($a_id!=0){
            $tip = request('get','int','tip');

            if($tip==1){
                $this->redirect('/index.php?c=article&a=show&a_id='.$a_id);
            }else if($tip==2){
                $article = D('Article')->getArticleByOne($a_id);
                $this->assign('article',$article);
//                $this->assign('flag','1');
                $this->display();
            }
        }else{
//            $this->assign('flag','2');
            $this->display();
        }
    }
    public function update(){
        $a_id = request('post','int','a_id');
//        $flag = request('post','int','flag');
        if($a_id!=0){
            $a_title = request('post','str','a_title');
            $a_addtime = request('post','str','a_addtime');
            $a_adduser = request('post','str','a_adduser');
//            $a_photo =
            $a_type = request('post','str','a_type');
            $a_state = request('post','str','a_state');
            $a_begin = request('post','str','a_begin');
            $a_text = request('post','str','a_text');
            $arr['a_title'] = $a_title;
            $arr['a_addtime'] = $a_addtime;
            $arr['a_adduser'] = $a_adduser;
//            $arr['a_photo'] = $a_photo;
            $arr['a_type'] = $a_type;
            if($a_state=='') {$a_state='0';}
            $arr['a_state'] = $a_state;
            $arr['a_begin'] = $a_begin;
            $arr['a_text'] = $a_text;
            $arr['a_id'] = $a_id;
            D('Article')->set_UpdateArticle($a_id,$arr);
            $this->redirect('/admin.php?c=article');
//            var_dump($arr);
//            exit();
        }else{

        }

    }
    public function themes(){
        $a_id = request('get','int','a_id');
        if($a_id!=0){
            $article = D('Article')->getArticleByOne($a_id);
            $this->assign('article',$article);
            $this->display();
        }else{
            $this->display();
        }
    }

    /**
     * 文章置顶
     */
    public function stick(){
        $a_id = request('get','int','a_id');
        D('Article')->set_Stick($a_id);
        $this->redirect('/admin.php?c=article');
    }
}