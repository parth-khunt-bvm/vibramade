<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Config;
use App\Models\Contact;
use App\Models\SendMail;
use Redirect;

class HomeController extends Controller
{
    function home(){
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . " - IT Services Provider in India";
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " - IT Services Provider in India offers Web designing & Development, Software Development, CMS software services.";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " - Website designing, software development, E-commerce website development, website designing company, web development company in India.";
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'plugins/validate/jquery.validate.min.js',
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'login.js',
        );
        $data['funinit'] = array(
            'Login.form()'
        );
        $data['silder'] = Config::get( 'constants.slider' );
        $data['course'] = Config::get( 'constants.course' );
        return view('frontend.pages.index', $data);
    }

    function save_contact_details(Request $request){
        $objContact = new Contact();
        $result = $objContact->save_contact_details($request->all());
        if($result){
            $objSendmail = new SendMail();
            $Sendmail = $objSendmail->sendContactMail($request->all());
            $return['status'] = 'success';
            $return['message'] = 'Your Message Was Sent Successfully. Thanks.';
            $return['redirect'] = route('home');
        } else{
            $return['status'] = 'error';
            $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
            $return['message'] = 'Invalid';
        }
        return json_encode($return);
        exit();
    }

    function contact(){
        $data['title'] =  "Contact - IT Services Provider";
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " - Contact Vibramade website designing company Surat provide profession web designing services, Software development and SEO services across Surat city.";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " - Web development company, web design & development company, E-commerce web design company, Software development company in Surat.";
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'plugins/validate/jquery.validate.min.js',
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'login.js',
        );
        $data['funinit'] = array(
            'Login.form()'
        );
        $data['silder'] = Config::get( 'constants.slider' );
        $data['course'] = Config::get( 'constants.course' );
        return view('frontend.pages.contact-us',$data);
    }

    function website_development(){
        $data['title'] = " Website Development - IT Services Provider";
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " - Software Development company, CRM Software Surat, ERP Software Surat, MLM Software Surat, Stock management software, Software development services in Surat.";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " - India offering All types of Software development services in Surat like Web development company, web design & development company in India.";
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
        $data['title'] =" Mobile Application Development - IT Services Provider";
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " - India offering iPhone application development services as per the requirements of our clients to provide them with 100% satisfaction & tap into the iPhone market. We have experienced and qualified App developers and specialists to develop and customize applications for all models";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " - iPhone Application Development | iOS App Development | iPad Application Development | Tablet Application Developers | Android App Developmen Services";
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
        $data['title'] = " UI/UX Graphic Design - IT Services Provider";
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " - We create a unique, responsive, and user-friendly UI design for app and web development. We provide the best UI for our clients.";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " - Website designing company, Static website designing, Dynamic Website Designing, Responsive website designing, Web Designing company in India.";
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
        $data['title'] = " Custom Software Development - IT Services Provider";
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " - Custom Software Development";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " - Custom Software Development";
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
        $data['title'] = " Quality Assurance - IT Services Provider";
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " - SEO is not usually associated with QA testing. In fact, at most companies, SEO analysts and QA testers work completely separately in different departments.";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " - Manual Testing | Automated Testing | Performance Testing | Website Testing | Mobile App Testing All Type Mindful QA Software Testing Services.
Software Testing | ";
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
        $data['title'] = " Portfolio - IT Services Provider";
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " - of Vibramade website designing company Surat provide profession web designing services, E-commerce web development, Software development in India.";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " - web development company, web design & development company,E-commerce web design company, Software development company in India.";
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
        $data['title'] = " Blog - IT Services Provider";
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " || Blog";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " || Blog";
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
        $data['title'] = " About - IT Services Provider";
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " - About Vibramade website designing company Surat provide profession web designing services, E-commerce web development, Software development in India.";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " - web development company, web design & development company, E-commerce web design company, Software development company in India.";
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'plugins/validate/jquery.validate.min.js',
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'login.js',
        );
        $data['funinit'] = array(
            'Login.form()'
        );
        $data['silder'] = Config::get( 'constants.slider' );
        $data['portfolio'] = Config::get( 'constants.portfolio' );
        return view('frontend.pages.about',$data);
    }

//    function send(){
//        $details = [
//            'title' => 'Mail from ItSolutionStuff.com',
//            'body' => 'This is for testing email using smtp'
//        ];
//
//        Mail::to('sanjay.bvminfotech@gmail.com')->send(new ContactMail($details));
//
//        dd("Email is Sent.");
//    }
}
