<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . " || Home";
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " || Home";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " || Home";
        $data['css'] = array(
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
        );
        $data['js'] = array(
        );
        $data['funinit'] = array(
        );
        return view('home', $data);
    }
}
