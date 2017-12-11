<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

// $message->attach($attachment,['as'=>"=?UTF-8?B?".base64_encode('测试文档')."?=.doc"]);
class MailController extends Controller
{
    public function send()
    {
        // $name = "学院君";
        // $imgPath = 'http://laravelacademy.org/wp-statics/images/carousel/LaravelAcademy.jpg';
        // $flag = Mail::send('emails.test',['name'=>$name,'imgPath'=>$imgPath],function($message){
        //     $to = "75506525@qq.com";
        //     $message->to($to)->subject("测试邮件");
        //     $attachment = public_path()."/uploads/1.docx";
        //     $message->attach($attachment,["as"=>"=?UTF-8?B?".base64_encode("测试文档")."?=.docx"]);
        // });

        // $name = "haha";
        // $flag = Mail::send("emails.test",["name"=>$name],function($message){
        //     $to = "75506525@qq.com";
        //     $message->to($to)->subject("测试");
        //     $attachment = public_path().'/uploads/home-bg.jpg';
        //     $message->attach($attachment,["as"=>"=?UTF-8?B?".base64_encode("测试图片")."?=.jpg"]);
        // });

        // $flag = Mail::send(
        //     'emails.test',
        //     ['name'=>$name],
        //     function($message)
        //     {
        //         $to = "75506525@qq.com";
        //         $message -> to($to) -> subject('测试邮件');
        //     }
        // );
        // if($flag)
        // {
        //     echo "发送邮件成功，请查收";
        // }else {
        //     echo "发送邮件失败，请重试";
        // }

        // Mail::raw("这是一封测试邮件",function($message){
        //     $to = "75506525@qq.com";
        //     $message->to($to)->subject("测试邮件");
        // });
    }
}
