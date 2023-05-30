<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Models\Contact;
use Redirect;

class HomeController extends Controller
{
    function home(){
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

    function save_contact_details(Request $request){
        $objContact = new Contact();
        $result = $objContact->save_contact_details($request->all());
        if($result)
            $messgae = "Your details succesfully sent to admin.We'll contact you soon";
        else
            $messgae = "Something goes to wrong";
        return Redirect::back()->withErrors(['msg' => 'Your details succesfully sent!']);
    }

    function contact(){
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
        return view('frontend.pages.contact-us',$data);
    }

    function website_development(){
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
        return view('frontend.pages.website_development',$data);
    }

    function mobile_application_development(){
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
        return view('frontend.pages.mobile_application_development',$data);
    }

    function ui_ux_graphic_design(){
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
        return view('frontend.pages.ui_ux_graphic_design',$data);
    }

    function custom_software_development(){
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
        return view('frontend.pages.custom_software_development',$data);
    }

    function quality_assurance(){
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
        return view('frontend.pages.quality_assurance',$data);
    }

    function portfolio(){
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
        $data['portfolio'] = Config::get( 'constants.portfolio' );
        return view('frontend.pages.portfolio',$data);
    }

    function blog(){
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
        $data['portfolio'] = Config::get( 'constants.portfolio' );
        return view('frontend.pages.blog',$data);
    }

    function about(){
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
        $data['portfolio'] = Config::get( 'constants.portfolio' );
        return view('frontend.pages.about',$data);
    }
}
