<?php 
   session_start();
   if(isset($_POST['submit'])){
        include '../Connect.php';

        $Email = filter_var($_POST['Email'],FILTER_SANITIZE_EMAIL);
        $Password = filter_var($_POST['Pass'],FILTER_SANITIZE_STRING);

        $hash_Password = sha1($Password);

        $stm = "SELECT * FROM users WHERE Email='$Email'";

        $q = $conn->prepare($stm);
        $q->execute();
        $data = $q->fetch();

        if(!$data){
            echo 'خطأ في تسجيل الدخول';
        }else{
            if (str_contains($hash_Password,$data['Password'])){
                if($data['Activate']){
                    $_SESSION['user']=[
                        "ID"=>$data['UserID'],
                        "name"=>$data['FirstName']." ".$data['LastName'],
                        "email"=>$Email
                    ];
                    header('location:../User_Profile/Profile.php');
                }
                else{
                    $message= 'الحساب غير مفعل';
                }
            }else{
                 $message='خطأ في تسجيل الدخول';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css"/>

</head>
<body class='Login_body'>
    <?php include('./Rigister_Login_Header.php'); ?>
    <div class='error_message'></div>
    <div id='Login' class='container p-3 pt-5 pb-5 d-flex flex-column gap-4 bg-light mb-5'>
        <h3>تسجيل الدخول</h3>
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
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method='POST' class='d-flex flex-column row-gap-3'>
            <div>
                <div class='mb-1'><label for="">البريد الإلكتروني</label><span>*</span></div>
                <input type="email" placeholder='أدخل البريد الإلكتروني الخاص بك' name='Email'/>
            </div>
            <div>
                <div class='mb-1'><label for="">كلمة المرور</label><span>*</span></div>
                <input type="password" placeholder='أدخل كلمة المرور الخاصة بك' name='Pass'/>
            </div>
            <div class='d-grid col-3' ><input type='submit' name='submit' value='دخول' class='btn btn-primary btn-lg rounded-0'/></div>
        </form>
        <div class='help'>
            <p>مساعدة</p>
            <ul>
                <li><a href="Register.php">لا أملك حساب بعد</a></li>
                <li><a href="Reset_Pass.php">فقدت كلمة المرور</a></li>
                <li><a href="NotSendCode.php">لم يصلني رمز التفعيل</a></li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>document.querySelector('.error_message').append('<?php echo $message ;?>');</script>
</body>
</html>


