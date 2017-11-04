<?php

namespace App\Helpers;
use Request;
use App\LogAtividades as LogAtividadesModel;

class LogAtividades
{

    public static function addToLog($subject)
    {
    	$log = [];
    	$log['subject'] = $subject;
    	$log['url'] = Request::fullUrl();
    	$log['method'] = Request::method();
    	$log['ip'] = Request::ip();
    	$log['agent'] = Request::header('user-agent');
    	$log['user_id'] = auth()->check() ? auth()->user()->id : 1;
    	LogAtividadesModel::create($log);
    }

    public static function LogAtividadesLists()
    {
    	return LogAtividadesModel::latest()->get();
    }

}
