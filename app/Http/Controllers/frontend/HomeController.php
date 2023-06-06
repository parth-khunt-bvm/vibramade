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
        $data['title'] = Config::get( 'constants.PROJECT_NAME' );
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " || Vibramade is a professional Website Design & Software Development Company in Surat, Gujarat, India offers Web designing, Web Development, Software Development, E-Commerce Solution, Inventory stock management software services in Surat, Gujarat, India.";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " || Website designing, software development, E-commerce website development, website designing company, web development company, CRM Software Development, ERP Software development company in Surat, Gujarat, India.";
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
        $data['title'] = Config::get( 'constants.PROJECT_NAME' );
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " || Contact Vibramade website designing company Surat provide profession web designing services, E commerce web development, Software development like CRM, ERP, MLM, Online Examination, Stock management and SEO services across Surat city and near by area of Gujarat.";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " || Website design company, web development company, web design & development company, E-commerce web design company, Software development company, CRM Software Development Company, ERP Software development company, MLM Software development company, web development company, Website design company in Surat, Gujarat, India.";
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
        $data['title'] = Config::get( 'constants.PROJECT_NAME' );
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " || Software Development company in Surat, Software Company in Surat, CRM Software Surat, ERP Software Surat, MLM Software Surat, Online Exam Software, Stock management software, Vibramade Software Company in Surat, Software development services in Surat, Gujarat, India";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " || India offering All types of Software development services in Surat like ERP Software, CRM Software, MLM Software, Online Exam Software, Stock managment Software, Inventory Software in Surat, Gujarat, India.";
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
        $data['title'] = Config::get( 'constants.PROJECT_NAME' );
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " || Vibramade is a tablet app development company in Surat, India. India offering iPhone application development services as per the requirements of our clients to provide them with 100% satisfaction &amp; tap into the iPhone market. We have experienced and qualified iPad app | iPhone App | iOS App | Tablet App | Android App developers and specialists to develop and customize applications for all models of iPad | iPhone | iOS | Tablet | Android.";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " || iPhone Application Development | iOS App Development | iPad Application Development | Tablet Application Developers | Android App Developmen Services";
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
        $data['title'] = Config::get( 'constants.PROJECT_NAME' );
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " || We create a unique, responsive, and user-friendly UI design for app and web development. We provide the best UI for our clients.";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " || Website designing company in Surat, Website Designing services in Surat, Static website designing, Dynamic Website Designing, Responsive website designing, Surat, Web Designing company in Surat, Website designing services in Surat, Gujarat, India.";
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
        $data['title'] = Config::get( 'constants.PROJECT_NAME' );
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " || Custom Software Development";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " || Custom Software Development";
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
        $data['title'] = Config::get( 'constants.PROJECT_NAME' );
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " || SEO is not usually associated with QA testing. In fact, at most companies, SEO analysts and QA testers work completely separately in different departments. While we’re not advocating for QA testers to replace SEO specialists, it can be extremely beneficial for QA to learn the basics of SEO — and incorporate this knowledge when testing websites.";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " || Manual Testing | Automated Testing | Performance Testing | Website Testing | Mobile App Testing All Type Mindful QA Software Testing Services
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
        $data['title'] = Config::get( 'constants.PROJECT_NAME' );
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " || Portfolio of Vibramade website designing company Surat provide profession web designing services, E commerce web development, Software development like CRM, ERP, MLM, Online Examination, Stock management and SEO services across Surat city and near by area of Gujarat.";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " || Website design company portfolio, web development company, web design & development company,E-commerce web design company, Software development company, CRM Software Development Company, ERP Software development company, web development company, Website design company in Surat, Gujarat, India.";
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
        $data['title'] = Config::get( 'constants.PROJECT_NAME' );
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
        $data['title'] = Config::get( 'constants.PROJECT_NAME' );
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) . " || About Vibramade website designing company Surat provide profession web designing services, E commerce web development, Software development like CRM, ERP, MLM, Online Examination, Stock management and SEO services across Surat city and near by area of Gujarat.";
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) . " || Website design company, web development company, web design & development company, E-commerce web design company, Software development company, CRM Software Development Company, ERP Software development company in India,";
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
