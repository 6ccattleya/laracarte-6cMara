<?php

if(! function_exists('page_title')){

    function page_title($title){
        if($title === ''){
            return env('APP_NAME');
        }else{
            return $title.' | '.env('APP_NAME');
        }
    }
}
