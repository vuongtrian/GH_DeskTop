<?php
$action="index";
if(isset($_GET['act']))
    $action=$_GET['act'];
switch($action){
    case "index":
        include 'view/site/home.php';
        break;
    case "about":
        include 'view/about.php';
        break;
    case "contact":
        include 'view/contact.php';
        break;
        case 'sendmail':
            $mail=$_POST['mail'];
            $name=$_POST['name'];
            $sub=$_POST['subject'];
            $mess=$_POST['mess'];
            sendMail($mail,$name,$sub,$mess);
            include 'view/contact.php';
        break;
    }
    function sendMail($mail,$name,$sub,$mess)
    {
    require_once 'Mail.php';
    require_once 'Mail/mime.php';
    
    $smtp=array();
    $smtp['host']='ssl://smtp.gmail.com';
    $smtp['port']='465';
    $smtp['auth']=true;
    $smtp['username']='levanluyenphu1939@gmail.com';
    $smtp['password']='qsohxwbrvvbuosst';
    
    $mailer=Mail::factory('smtp',$smtp);
    
    $from = "levanluyenphu1939@gmail.com";
    
    $to = "levanluyenphu1939@gmail.com";
    $subject="$sub";
    
    $header = array ('From' => $from,'To' => $to, 'Subject' => $subject);
    $mime = new Mail_mime();
    $body='<h2>Thư liên hệ <span style="color:#82ae46;">HOAQUAFRESH</span> </h2><br>';
    $body.= 'Tên: '.$name.'<br>Email: '.$mail;
    $body.='<br><br>Nội dung:<br>';
    $body.= $mess;
        $mime->setHTMLBody($body);
    
        $mimeparams['text_encoding']="8bit";
        $mimeparams['text_charset']="UTF-8";
        $mimeparams['html_charset']="UTF-8";
        $mimeparams['head_charset']="UTF-8";
        $mimeparams["debug"] = "True";
    
        $body=$mime->get($mimeparams);
        $header = $mime->headers($header);
        $mail=$mailer->send($to, $header ,$body);
        if (PEAR::isError($mail))
    {
        $alert="<p>" . $mail->getMessage() . "</p>";
        return false;
    }
    else
    {
        $alert="<p>Message successfully sent!</p>";
        return true;
    }
    }


?>