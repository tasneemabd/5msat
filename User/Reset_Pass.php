<?php
    if(isset($_POST['submit'])){
         include '../Connect.php';

         $Email = filter_var($_POST['Email'],FILTER_SANITIZE_EMAIL);

         $stm = "SELECT * FROM users WHERE Email='$Email'";

        $q = $conn->prepare($stm);
        $q->execute();
        $data = $q->fetch();

        if(!$data){
            echo 'هذا الحساب غير مفعّل بعد، ستجد معلومات التفعيل في بريدك الإلكتروني.';
        }else{
            require_once '../phpmailer-master/mail.php';
             $mail->setFrom('testing11comp@gmail.com', 'Khamsat');
             $mail->addAddress($Email);  

            $mail->Subject = 'تعليمات إعادة تعيين كلمة المرور';
            $mail->Body    = 'مرحباً'.' '.$data['FirstName'].' '.$data['FamilyName'].',
            <br>لقد طلبت إستعادة كلمة المرور الخاصة بك في خمسات.<br>
            <br>إذا كنت ترغب بتغيير كلمة المرور الخاصة بك يرجى الضغط على الزر التالي:
            <button><a href="localhost/5msat/update_pass.php">إستعادة كلمة المرور</a></button><br>
            إن لم تكن تتوقع وصول هذه الرسالة وتظن أنها وصلتك بالخطأ يمكنك تجاهلها...<br>
            أطيب التحيات,<br>
            فريق خمسات
            ';
            
             $mail->send();

             header('location:Login.php',true);
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