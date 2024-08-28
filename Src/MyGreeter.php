<?php
/**
 * Created by chenchun
 * User: chenchun
 * Date: 2024/8/27
 * Time: 上午11:33
 */

//命名空间
namespace Src;
class MyGreeter
{
    /**
     * 定义构造函数
     **/
    /*public function __construct()
    {

    }*/

    /**
     * 依据不同的时间输出字符
     * @param string $defaultTime
     * @return bool
     */
    public function greeting($defaultTime = '')
    {
        $hour   = $defaultTime ? date('G', strtotime($defaultTime)) : date('G');
        $retStr = '';
        if ($hour >= 6 && $hour < 12) {
            $retStr = 'Good morning.';
        } elseif ($hour >= 12 && $hour < 18) {
            $retStr = 'Good afternoon.';
        } elseif ($hour >= 18 || $hour < 6) {
            $retStr = 'Good evening.';
        } else {
            $retStr = 'system error.';
        }
        return $retStr;
    }

    public function greet($name = '')
    {
        return "Hello,{$name}";
    }
}