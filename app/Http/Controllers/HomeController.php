<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LogAtividades;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function LogAtividades()
    {
        $logs = LogAtividades::LogAtividadesLists();
        return view('LogAtividades',compact('logs'));
    }
}
