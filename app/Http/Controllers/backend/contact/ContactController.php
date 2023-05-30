<?php

namespace App\Http\Controllers\backend\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Models\Contact;

class ContactController extends Controller
{
    function __construct()
    {
        $this->middleware('admin');
    }

    public function list(Request $request)
    {

        $data['title'] = Config::get('constants.PROJECT_NAME') . ' || Contact List';
        $data['description'] = Config::get('constants.PROJECT_NAME') . ' || Contact List';
        $data['keywords'] = Config::get('constants.PROJECT_NAME') . ' || Contact List';
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
            'plugins/custom/datatables/datatables.bundle.css'
        );
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'plugins/custom/datatables/datatables.bundle.js',
            'pages/crud/datatables/data-sources/html.js'
        );
        $data['js'] = array(
            'comman_function.js',
            'contact.js',
        );
        $data['funinit'] = array(
            'Contact.init()'
        );
        $data['header'] = array(
            'title' => 'Contact List',
            'breadcrumb' => array(
                'Dashboard' => route('my-dashboard'),
                'Contact List' => 'Contact List',
            )
        );
        return view('backend.pages.contact.list', $data);
    }

    public function ajaxcall(Request $request){

        $action = $request->input('action');
        switch ($action) {
            case 'getdatatable':
                $objContact = new Contact();
                $list = $objContact->getdatatable();

                echo json_encode($list);
                break;
            
            case 'delete-contact':
                $objContact = new Contact();
                $result = $objContact->deleteContact($request->input('data'));
                if ($result) {
                    $return['status'] = 'success';
                    $return['message'] = 'Department successfully deleted';
                    $return['redirect'] = route('contact-details');
                } else {
                        $return['status'] = 'error';
                        $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                        $return['message'] = 'Something goes to wrong.';
                }
                echo json_encode($return);
                exit;
        }
    }
}
