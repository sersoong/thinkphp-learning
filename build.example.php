<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/**
 * php think build 自动生成应用的目录结构的定义示例
 */
return [
    // 需要自动创建的文件
    '__file__'   => [],
    // 需要自动创建的目录
    '__dir__'    => ['controller', 'model', 'view'],
    // 需要自动创建的控制器
    'controller' => ['Index'],
    // 需要自动创建的模型
    'model'      => ['User'],
    // 需要自动创建的模板
    'view'       => ['index/index'],
];
