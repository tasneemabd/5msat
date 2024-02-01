<?php

if(isset($_POST['submit'])){
         include '../Connect.php';

         $Email = filter_var($_POST['Email'],FILTER_SANITIZE_EMAIL);

         $stm = "SELECT * FROM users WHERE Email='$Email'";

        $q = $conn->prepare($stm);
        $q->execute();
        $data = $q->fetch();

        if(!$data){
            echo 'البريد الالكتروني الذي أدخلته غير معروف';
        }else{
            if($data['Activate']){
                echo 'هذا الحساب مفعّل من قبل، يرجى تسجيل الدخول.';
            }
            else{
                $stm = "SELECT * FROM users WHERE Email='$Email'";

                $q = $conn->prepare($stm);
                $q->execute();
                $data = $q->fetch();

                require_once '../phpmailer-master/mail.php';
                
                $mail->addAddress($Email);  

                $mail->Subject = 'تفعيل الحساب';
                $mail->Body    = 'مرحباً'.' '.$data['FirstName'].' '.$data['FamilyName'].',
                    <br>نحن سعداء بانضمامك وبقي خطوة واحدة فقط لتفعيل حسابك. يرجى الضغط على الزر التالي لتفعيل حسابك لتتمكن بعدها من تسجيل الدخول اليه:'.
                    "<button><a href='localhost/5msat/Profile.php?code=".$SECURITY_CODE."'>".'تفعيل</a></button><br>
                    وصلتك هذه الرسالة لأنك سجّلت في خمسات. إن لم تنشئ حسابًا أو تظن أن هذه الرسالة وصلتك بالخطأ بإمكانك تجاهلها..<br>
                    أطيب التحيات,<br>
                    فريق خمسات
                    ';
                $mail->setFrom('testing11comp@gmail.com', 'Khamsat');
                $mail->send();

                header('location:Login.php');
            }
        }
    }
?>

<form method='POST'>
    <div>
        <div><label for="">البريد الإلكتروني</label><span>*</span></div>
        <input type="email" placeholder='أدخل البريد الإلكتروني الخاص بك' name='Email'/>
    </div>
    <input type='submit' name='submit' value='إرسال'/>
</form>