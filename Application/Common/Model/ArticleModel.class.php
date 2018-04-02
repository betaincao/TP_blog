<?php

/**
 * Created by PhpStorm.
 * User: w-pc
 * Date: 2017/03/01
 * Time: 23:25
 */

namespace Common\Model;
use Think\Model;

class ArticleModel extends Model{

    private $_db = '';

    public function __construct() {
        $this->_db = M('article');
    }
    /**获取文章列表信息
     * @return mixed 返回文章列表
     */
    public function getArticleByList(){
        $list = $this->_db->where()->select();
        return $list;
    }

    /**根据a_id返回单篇文章的信息
     * @param $a_id 文章a_id
     * @return mixed 返回单篇文章
     */
    public function getArticleByOne($a_id){
        $where['a_id'] = $a_id;
        $article = $this->_db->where($where)->find();
        return $article;
    }
    /**修改文章
     * @param $id 要修改文章的id
     * @param $data 修改的文章
     */
    public function set_UpdateArticle($a_id,$data){
        $where['a_id'] = $a_id;
        $this->_db->where($where)->save($data);
    }
    /**添加文章
     * @param $data 要添加的文章
     */
    public function set_InsertArticle($data){
        $data = $this->get_EncodeBase64($data);
        $this->_db->add($data);
    }

    /**文章置顶
     * @param $a_id
     */
    public function set_Stick($a_id){
        $where['a_id'] = $a_id;
        $data = $this->getArticleByOne($a_id);
        if($data['a_state']!=2) {
            $data['a_state'] = 2;
        }else{
            $data['a_state'] = 1;
        }
        $this->_db->where($where)->save($data);
    }
}