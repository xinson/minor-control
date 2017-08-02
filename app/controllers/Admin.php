<?php
namespace App\Controllers;

use Minor\Framework\Application;

class Admin
{
    public function getLogin()
    {
        $view= Application::getShare('view');
        // 渲染视图并输出
        echo $view->make('admin/login',['content' => '111'])->render();
    }
}