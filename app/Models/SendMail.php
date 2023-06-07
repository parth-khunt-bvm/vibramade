<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Config;
use Illuminate\Support\Facades\DB;
use Mail;

class SendMail extends Model
{
    use HasFactory;

    public function sendMailltesting(){
        $mailData['data']='';
        $mailData['subject'] = Config::get('constants.PROJECT_NAME');
        $mailData['attachment'] = array();
        $mailData['template'] ="emailtemplate.test";
        $mailData['mailto'] = 'vinitkumardevani@gmail.com';
        $sendMail = new Sendmail();
        return $sendMail->sendSMTPMail($mailData);
    }

    public function sendContactMail($requestData){
        $mailData['data']['name']= $requestData['name'];
        $mailData['data']['email']= $requestData['email'];
        $mailData['data']['phone']= $requestData['phone'];
        $mailData['data']['subject']= $requestData['subject'];
        $mailData['data']['message']= $requestData['message'];
        $mailData['subject'] = Config::get('constants.PROJECT_NAME')." - Inquiry mail";
        $mailData['attachment'] = array();
        $mailData['template'] ="emailtemplate.contactMail";
        $mailData['mailto'] = 'vinitkumardevani@gmail.com';
        $sendMail = new Sendmail();
        return $sendMail->sendSMTPMail($mailData);
    }

    public function sendSMTPMail($mailData)
    {
        $pathToFile = $mailData['attachment'];
        $mailsend = Mail::send($mailData['template'], ['data' => $mailData['data']], function ($m) use ($mailData,$pathToFile) {
            $m->from('info@vibramade.com', Config::get('constants.PROJECT_NAME'));
            $m->to($mailData['mailto'], Config::get('constants.PROJECT_NAME'))->subject($mailData['subject']);
            if($pathToFile != ""){
            }
        });

        if($mailsend){
            // return true;
        }else{
            // return false;
        }
    }

}
