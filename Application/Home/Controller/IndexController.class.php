<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// require 'vendor/autoload.php';

class IndexController extends Controller {
    // public function index(){
    //     $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    // }

    public function index() {
        $this->display("index");
    }

    public function advantages() {
        $this->display("advantages");
    }

    public function products() {
        $this->display("products");
    }

    public function contact() {
        $this->display("contact");
    }

    /* 生成验证码 */
    public function verify()
    {
        //$config = array(
         //   'fontSize' => 19, // 验证码字体大小
        //    'length' => 4, // 验证码位数
            // 'imageH' => 34
       // );
        $Verify = new Verify();
	    $Verify->length = 4;
        $Verify->entry();
    }

    /* 验证码校验 $code, $id = ''*/
    public function check_verify()
    {
        $code = I('post.j_verify');


        $id = '';
        $verify = new \Think\Verify();
        $result = $verify->check($code, $id);
        if ($result) {
            $name = I('post.name');
            $subject = I('post.subject');
            $email = I('post.email');
            $content = I('post.content');
            send_mail('sales@aiermart.com', $subject, $name."<br>".$email."<br>".$content);
            $this->success("send email success, we will contact u as soon as possible");
            # send mail...
        } else {
            $this->error("wrong verify code");
        }

    }


}
