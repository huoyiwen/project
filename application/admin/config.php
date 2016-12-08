<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [

    'web_site' => 'http://www.tpa51.cn/admin/',
    'web_static_site' => 'http://www.tpa51.cn/static/admin/',
    '__STATIC__' => 'http://www.tpa51.cn/static/',
    define('_STATIC_','http://www.tpa51.cn/static/'),
    define('STATIC_SITE','http://www.tpa51.cn/static/admin/'),
    define('WEB_SITE','http://www.tpa51.cn/admin/'),
    // +----------------------------------------------------------------------
    // | 模板设置
    // +----------------------------------------------------------------------

    'template'               => [
        // 模板引擎类型 支持 php think 支持扩展
        'type'         => 'Think',
        // 模板路径
        'view_path'    => '../application/admin/view/',
        // 模板后缀
        'view_suffix'  => 'html',
        // 模板文件名分隔符
        'view_depr'    => DS,
        // 模板引擎普通标签开始标记
        'tpl_begin'    => '{',
        // 模板引擎普通标签结束标记
        'tpl_end'      => '}',
        // 标签库标签开始标记
        'taglib_begin' => '{',
        // 标签库标签结束标记
        'taglib_end'   => '}',
        'layout_on' => true,
        'layout_name' => 'layout'
    ]


];
