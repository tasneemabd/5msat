<?php 
   session_start();
   if(isset($_POST['submit'])){
         include '../Connect.php';

        $FirstName = filter_var($_POST['fName'],FILTER_SANITIZE_STRING);
        $LastName = filter_var($_POST['lName'],FILTER_SANITIZE_STRING);
        $Email = filter_var($_POST['Email'],FILTER_SANITIZE_EMAIL);
        $Password = filter_var($_POST['Pass'],FILTER_SANITIZE_STRING);
        $agree = @$_POST['Agree'];

        $hashPass = sha1($Password);

        $stm = "SELECT Email FROM Users WHERE email='$Email'";
        $q = $conn->prepare($stm);
        $q->execute();
        $data = $q->fetch();

        if($data){
             $message='البريد الالكتروني موجود';
        }
        else{
            
            if($agree == '1'){
                $SECURITY_CODE = md5(date("h:i:s"));
                $stm = "INSERT INTO Users (FirstName,LastName,Email,Password,Agree,Security_Code) VALUES ('$FirstName','$LastName','$Email','$hashPass','$agree','$SECURITY_CODE')";
                $conn->prepare($stm)->execute();
                
                $stm = "SELECT * FROM users WHERE Email='$Email'";

                $q = $conn->prepare($stm);
                $q->execute();
                $data = $q->fetch();

                require_once '../phpmailer-master/mail.php';
                
                $mail->addAddress($Email);  

                $mail->Subject = 'تفعيل الحساب';
                mail->Body    = "'مرحباً'.' '.$data['FirstName'].' '.$data['LastName'].',
                    <br><div>
                    </div>نحن سعداء بانضمامك وبقي خطوة واحدة فقط لتفعيل حسابك. يرجى الضغط على الزر التالي لتفعيل حسابك لتتمكن بعدها من تسجيل الدخول اليه:'.
                    "<button><a href='localhost/5msat/User_Profile/Profile.php?code=".$SECURITY_CODE."' style='background-color:green;'>".'تفعيل</a></button><br>
                    وصلتك هذه الرسالة لأنك سجّلت في خمسات. إن لم تنشئ حسابًا أو تظن أن هذه الرسالة وصلتك بالخطأ بإمكانك تجاهلها..<br>
                    أطيب التحيات,<br>
                    فريق خمسات
                ';

                 $mail->Body = "<h1>مرحباً</h1>";
                $mail->setFrom('testing11comp@gmail.com', 'Khamsat');
                $mail->send();


                $_SESSION['user']=[
                        "ID"=>$data['UserID'],
                        "name"=>$data['FirstName']." ".$data['LastName'],
                        "email"=>$Email
                ];
                
                $message='تم إنشاء الحساب ، قم بتفعيله من خلال البريد الالكتروني';
            }
            else{
                $message= 'تأكد من تعبئة';
            }
            
        }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body class='Rigister_Body'>
     <?php include('./Rigister_Login_Header.php'); ?>
     <div class='error_message'></div>
    <div id='Rigister' class='container p-3 pt-5 pb-5 d-flex flex-column gap-4 bg-light mb-5'>
        <h3>إنشاء حساب جديد</h3>
        <div class='social d-flex justify-content-around align-items-center '>
            <a href=''>
                <i class="fa-brands fa-google"></i>
                <span>بإستخدام جوجل</span>
            </a>
            <a href=''>
                <i class="fa-brands fa-windows"></i>
                <span>بإستخدام مايكروسوفت</span>
            </a>
        </div>
        <div class='another_choice text-center'><span class='line left_l ms-2'></span>أو<span class='line right_l me-2'></span></div>
        <form action="Register.php" method='POST' class='d-flex flex-column row-gap-3 ps-3 pe-3'>
            <div class='d-flex gap-2'>
                <span class="col-6">
                    <div class='mb-1'><label for="">الأسم</label><span>*</span></div>
                    <input type="text" placeholder='أكتب أسمك باللغة العربية' name='fName'/>
                </span>
                <span class="col-6">
                    <div class='mb-1'><label for="">اسم العائلة</label><span>*</span></div>
                    <input type="text" placeholder='أكتب اسم العائلة هنا باللغة العربية' name='lName'/>
                </span>
            </div>
            <div>
                <div class='mb-1'><label for="">البريد الإلكتروني</label><span>*</span></div>
                <input type="email" placeholder='أدخل البريد الإلكتروني الخاص بك' name='Email'/>
            </div>
            <div>
                <div class='mb-1'><label for="">كلمة المرور</label><span>*</span></div>
                <input type="password" placeholder='أدخل كلمة المرور الخاصة بك' name='Pass'/>
            </div>
            <div class='d-flex justify-content-start align-items-center text-center gap-2'>
                <input id="condition" name='Agree' value="1" type="checkbox">
                <label for="condition" class='Condition_Text text-center'>قرأت وأوافق على 
                    <a href=''>شروط الإستخدام</a>
                    و
                    <a href=''>بيان الخصوصية</a>
                </label>
            </div>
            <div class='d-grid col-3'><input type='submit' name='submit' value='تسجيل' class='btn btn-primary btn-lg rounded-0'/></div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
   <script>
        document.querySelector('.error_message').append('<?php echo $message ;?>');
   </script>
</body>
</html>
