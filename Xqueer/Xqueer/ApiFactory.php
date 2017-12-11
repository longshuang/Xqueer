<?php

/**
 * |----------------------------------------------
 * |Created by PhpStorm.
 * |User: Administrator
 * |Date: 2017/12/11
 * |Time: 8:16
 * |-----------------------------------------------
 */
class Xqueer_ApiFactory
{

    /**
     * |------------------------------------------
     * @var $instance单例
     * |------------------------------------------
     */
    protected $instance;

    public static function createApi()
    {

        return new Xqueer_Api();
    }

}