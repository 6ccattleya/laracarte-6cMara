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

if(! function_exists('set_active_route')){

    function set_active_route($route){
        return Route::is($route) ? 'active' : '';
    }
}
