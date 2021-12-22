<?php
namespace app\admin\controller;

use app\BaseController;
use app\Request;


class Index extends BaseController
{


    public function index($name = 'Word')
    {
        return 'hello,' . $name;
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
