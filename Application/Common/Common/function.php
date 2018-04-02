<?php
/**
 * Created by PhpStorm.
 * User: w-pc
 * Date: 2017/02/20
 * Time: 9:56
 * 公用的方法
 * @param $status
 * @param $message
 * @param array $data
 */
function show($status, $message, $data=array()){
    $result = array(
        'status' => $status,
        'message' => $message,
        'data' => $data,
    );

    exit(json_encode($result));
}
function getMd5Password($password){
    return md5($password.C('MD5_PRE'));
}
function getLoginUsername(){
    return session('adminUser');
}
function check_verify($code, $id = ""){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}
function get_menu($num){
    $menu = array(
            array('name'=>'博客首页','href'=>'/index.php?c=index'),
            array('name'=>'文章','href'=>'/index.php?c=article'),
            array('name'=>'随记','href'=>'/index.php?c=diary'),
            array('name'=>'相册','href'=>'/index.php?c=photo'),
            array('name'=>'留言板','href'=>'/index.php?c=message'),
            array('name'=>'关于我','href'=>'/index.php?c=about'),
            array('name'=>'更多功能','href'=>'/index.php?c=more'));
    $menu[$num]['show'] = 'active';
    return $menu;
}

/**
 * @param $class 设置请求类型，post，get
 * @param $type 设置参数类型，str，int
 * @param $name 设置参数名称
 * @param $default 可选参数，设置参数的默认值
 *
 */
function request($class,$type,$name,$default){
    $flag = 1;
    if($class=='get'){
        if(empty($_GET[$name])){
            $flag = 0;
        }else{
            $value = $_GET[$name];
        }
    }else{
        if(empty($_POST[$name])){
            $flag = 0;
        }else{
            $value = $_POST[$name];
        }
    }
    if($type=='str'){
        if($flag==1){
            //          $value = utf8_encode($value);
            //删除字符串两端的空白字符和其他预定义字符
            $value = trim($value);
        }else{
            $value = '';
            if(!empty($default)){
                $value = $default;
            }
        }
    }else{
        if($flag==1){
            //          $value = utf8_encode($value);
            //删除字符串两端的空白字符和其他预定义字符
            $value = trim($value);
        }else{
            $value = 0;
            if(!empty($default)){
                $value = $default;
            }
        }
    }
    return $value;
}