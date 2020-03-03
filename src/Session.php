<?php
namespace Rentit;

class Session
{
    static function init(){
        session_start();
    }

    static function set($key,$value){
        if(!isset($_SESSION)){
            $_SESSION[$key]=$value;
        }
    }
    static function get($key){
        if(!isset($_SESSION[$key])){
            return $_SESSION[$key];
        }
    }

    static function destroy(){
        session_destroy();
    }
}