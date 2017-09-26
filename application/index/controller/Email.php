<?php
namespace  app\index\controller;
use think\Controller;
use Nette\Mail\Message;
class  Email extends  Controller{
     public  function  index(){
         $toemail='1391996539@qq.com';
         $name='910893851';
         $subject='QQ邮件发送测试';
         $content='恭喜你，邮件测试成功。';
         dump(send_mail($toemail,$name,$subject,$content));
     }
     public function email(){
         $mail = new Message;
//         var_dump($mail);exit;
         $mail->setFrom('910893851@qq.com')
             ->addTo('1391996539@qq.com')
//             ->addTo('jack@example.com')
             ->setSubject('测试')
             ->setBody("测试成功");
//     配置邮件服务器
         $mailer = new \Nette\Mail\SmtpMailer([
             'host' => 'smtp.qq.com',
             'username' => '1391996539@qq.com',
             'password' => '91089songlei',
            // 'secure' => 'ssl',
       'context' =>  [
//                 'ssl' => [
//                     'capath' => '/path/to/my/trusted/ca/folder',
//                 ],
            ],
         ]);
         $mailer->send($mail);
     }
}