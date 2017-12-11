<?php

class Xqueer_Loader
{


    function __construct()
    {
        spl_autoload_register(array($this, 'load'));
    }


    /**
     * |--------------------------------------------------------------
     * |文件自动加载
     * |--------------------------------------------------------------
     */
    private function load()
    {

    }

}