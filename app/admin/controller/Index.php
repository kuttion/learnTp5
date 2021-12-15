<?php
namespace app\admin\controller;

use app\BaseController;



class Index extends BaseController
{


    public function index()
    {
        echo 'test234';
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
