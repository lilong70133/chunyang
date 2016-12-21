<?php
/**
 * Created by PhpStorm.
 * User: 'chunyang'
 * Date: 2016/12/20
 * Time: 14:06
 */

if (! function_exists('get_links')) {


    /**
     * @param $url
     * @param $text
     * @return string
     */
    function get_links($url,$text){
        $str =  "<p><a href='%s'>%s</a></p>";
        $str = sprintf($str,$url,$text);
        return $str;
    }
}

if (! function_exists('show_msg')) {

    /**
     * @param string $msg
     * @param string $link
     * @param string $text
     */
    function show_msg($msg='您请求的页面不存在',$link='',$text='前往首页'){
        if(empty($link)){
            $link = url('/');
        }
        $link_str = get_links($link,$text);
        $a = response()->view("common.msg", ['msg' => $msg,'link'=>$link,'link_str'=>$link_str]);
        exit($a->getContent());
    }
}

if (! function_exists('path')) {


    function path($path,$secure=null){
        return app('url')->asset($path, $secure);
    }
}