<?php
//获取用户访问网站的操作系统
function getOS()
{
    $os='';
    $Agent=$_SERVER['HTTP_USER_AGENT'];
    if (eregi('win',$Agent)&&strpos($Agent, '95')){
        $os='Windows 95';
    }elseif(eregi('win 9x',$Agent)&&strpos($Agent, '4.90')){
        $os='Windows ME';
    }elseif(eregi('win',$Agent)&&ereg('98',$Agent)){
        $os='Windows 98';
    }elseif(eregi('win',$Agent)&&eregi('nt 5.0',$Agent)){
        $os='Windows 2000';
    }elseif(eregi('win',$Agent)&&eregi('nt 6.0',$Agent)){
        $os='Windows Vista';
    }elseif(eregi('win',$Agent)&&eregi('nt 6.1',$Agent)){
        $os='Windows 7';
    }elseif(eregi('win',$Agent)&&eregi('nt 5.1',$Agent)){
        $os='Windows XP';
    }elseif(eregi('win',$Agent)&&eregi('nt',$Agent)){
        $os='Windows NT';
    }elseif(eregi('win',$Agent)&&ereg('32',$Agent)){
        $os='Windows 32';
    }elseif(eregi('linux',$Agent)){
        $os='Linux';
    }elseif(eregi('unix',$Agent)){
        $os='Unix';
    }else if(eregi('sun',$Agent)&&eregi('os',$Agent)){
        $os='SunOS';
    }elseif(eregi('ibm',$Agent)&&eregi('os',$Agent)){
        $os='IBM OS/2';
    }elseif(eregi('Mac',$Agent)&&eregi('PC',$Agent)){
        $os='Macintosh';
    }elseif(eregi('PowerPC',$Agent)){
        $os='PowerPC';
    }elseif(eregi('AIX',$Agent)){
        $os='AIX';
    }elseif(eregi('HPUX',$Agent)){
        $os='HPUX';
    }elseif(eregi('NetBSD',$Agent)){
        $os='NetBSD';
    }elseif(eregi('BSD',$Agent)){
        $os='BSD';
    }elseif(ereg('OSF1',$Agent)){
        $os='OSF1';
    }elseif(ereg('IRIX',$Agent)){
        $os='IRIX';
    }elseif(eregi('FreeBSD',$Agent)){
        $os='FreeBSD';
    }elseif($os==''){
        $os='Unknown';
    }
    return $os;
}

//验证码
function verify()
{
    $verify = new \Think\Verify();
    $verify->codeSet = '123456789abcdefghigklmnpqrstuvwxyz';
    $verify->fontSize = '18px';
    $verify->imageW = '150';
    $verify->imageH = '50';
    $verify->length = '4';
    $verify->useCurve = false;
    $verify->useNoise = false;
    $verify->entry();
}

//验证码检验
function checkVerify($code)
{
    $verify = new \Think\Verify();
    return $verify->check($code);
}

//数据＋1,文章浏览数＋1
function plus($id)
{
    $condition = array('aid' => $id);
    $data = D('Article')->getone($condition);
    $data['rnum'] = $data['rnum'] + 1;
    $ret = D('Article')->update($condition,$data);
    return $ret;
}

//发送邮件
function sendMail($to,$title,$content)
{
    vendor('phpmailer.class#phpmailer');
    $mail = new \phpmailer();
    if(C('MAIL_SMTP')){
      $mail = IsSMTP();
    }
    $mail->Host = C('MAIL_HOST');
    $mail->SMTPAuth = C('MAIL_SMTPAUTH');
    $amil->Username = C('MAIL_ACCOUNT');
    $mail->Password = C('MAIL_PASSWORD');
    $mail->SMTPSecure = C('MAIL_SECURE');
    $mail->CharSet = C('MAIL_CHARSET');
    $mail->From = C('MAIL_ACCOUNT');
    $mail->AddAddress($to);
    $mail->FromName = C('MAIL_USERNAME');
    $mail->IsHTML(C('MAIL_ISHTML'));
    $mail->Subject = $title;
    $mail->Body = $content;
    if(!$mail->Send()){
      return FALSE;
    }else{
      return TRUE;
    }
}
