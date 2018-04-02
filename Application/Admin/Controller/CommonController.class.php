<?php
/**
 * Created by PhpStorm.
 * User: w-pc
 * Date: 2017/03/02
 * Time: 9:02
 */

namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller{

    public function getLoginUser() {
        return session("adminUser");
    }
}