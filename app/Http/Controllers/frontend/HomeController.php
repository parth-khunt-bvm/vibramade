<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;

class HomeController extends Controller
{
    function index(){
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
        $data['silder'] = Config::get( 'constants.slider' );
        $data['course'] = Config::get( 'constants.course' );
        return view('frontend.pages.index', $data);
    }
}
