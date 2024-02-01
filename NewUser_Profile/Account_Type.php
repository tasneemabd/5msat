<?php
   @session_start(); 
    include '../Connect.php';
    if(!isset($_SESSION['user'])){
        header('location:Login.php');
        exit();
    }
    else{
        $stm = "SELECT * FROM users WHERE Email=:EmailVal";
        $q = $conn->prepare($stm);
        $q->bindParam('EmailVal',$_SESSION['user']['email']);
        $q->execute();
        $data = $q->fetch();
        
        if(isset($_POST['submit'])){
            
            $Bayer = @$_POST['bayer'];
            $vendor = @$_POST['vendor'];
            $User_Name = $_POST['userName'];
            $agree = @$_POST['Agree'];

            if(isset($agree)==1){

                if(isset($Bayer)==1){
                    $q = $conn->prepare("UPDATE users SET Account_Type = '$Bayer' WHERE Email=:EmailVal");
                    $q->bindParam('EmailVal',$_SESSION['user']['email']);
                    $q->execute();
                }
                else if(isset($vendor) == 1){
                    $q = $conn->prepare("UPDATE users SET Account_Type = '$vendor' WHERE Email=:EmailVal");
                    $q->bindParam('EmailVal',$_SESSION['user']['email']);
                    $q->execute();
                }
                 
                
                $q = $conn->prepare("UPDATE users SET UserName = '$User_Name' , AgreeToDefineUser = 1 WHERE Email=:EmailVal");
                $q->bindParam('EmailVal',$_SESSION['user']['email']);
                $q->execute();

                if($data['Account_Type'] == 'vendor'){
                    header('location:../ProfileAfterDefineUser.php');
                    exit();
                }
                else if($data['Account_Type'] == 'bayer'){
                    header('location:../ProfileAfterDefineUser.php');
                    exit();
                }else{
                    echo 'الرجاء إختيار نوع المستخدم'
                }

                /*$stm = "SELECT * FROM users WHERE Email=:EmailVal";
                $q = $conn->prepare($stm);
                $q->bindParam('EmailVal',$_SESSION['user']['email']);
                $q->execute();
                $data = $q->fetch();
                echo $data['Account_Type'];*/

               /* header('location:./Profile.php');
                    exit();*/
            }
            else{
                echo 'يجب الموافقة على شروط الإستخدام لتتمكن من التسجيل بالموقع';
            }
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خمسات للخدمات</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body class='Account_Type'>
        <?php include('../Sign/Rigister_Login_Header.php');?>
        <div class='container'>
            <form method='POST' action="Account_Type.php">
                <div class='w-100 mt-4 mb-4'>
                    <h3>بيانات الحساب</h3>
                </div>
                <div class='p-3 pt-5 pb-5 d-flex flex-column justify-content-center align-items-center gap-4 bg-light '>
                    <div class='text-center'>
                        <img src='../img/user_account.png' alt='user_Img' class='border rounded-circle'/>
                        <h3 class='mt-2 mb-3'><?php echo $data['FirstName'].' '.$data['FamilyName'];?></h3>
                    </div>
                    <div class='d-flex justify-content-evenly align-items-center w-100 gap-4 p-3'>
                        <div class='text-center col-6 border p-4'>
                            <p>أنا مشتري</p>
                            <p>أبحث عن خدمات لشرائها</p>
                            <input type="checkbox" value="bayer" name='bayer' class='user_type'/>
                        </div>
                        <div class='text-center col-6 border p-4'>
                            <p>أنا بائع</p>
                            <p>أتطلع لعرض خدماتي على المستخدمين</p>
                            <input type="checkbox" value="vendor" name="vendor" class='user_type'/>
                        </div>  
                    </div>
                    <div class="w-100 d-flex flex-column gap-3 justify-content-end">
                        <div class='ps-4'>
                            <div>
                                <label class='mb-2'>اسم المستخدم</label>
                                <span>*</span>
                            </div>
                            <div class='d-flex col-12'>
                                <input type="text" class='col-9 p-2 text-start' name='userName'/>
                                <input type='text' value='/https://khamsat.com/user'  name="WebsiteLink" readonly class='col-3 p-2 text-start'/>
                            </div>
                        </div>
                        <p>يجب أن يكون فريداً مكونا من احرف انجليزية و أرقام و عوارض سفلية (_) بينهم فقط</p>
                    </div>
                    <div class="w-100 d-flex justify-content-start align-items-center gap-2">
                        <input type="checkbox" name='Agree' value="1"/>
                        <label class='Agree'>
                            قرأت و أوافق على
                            <a href=''>شروط الإستخدام</a> 
                            و
                            <a href="">سياسة الخصوصية</a>
                        </label>
                    </div>
                </div>
                <div class='w-100'><input type="submit" value="أكمل" name='submit' class="p-2 pe-4 ps-4 mt-3 border-0 text-light"/></div>
            </form>
        </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(()=>{
            let bayer = $('input[name="bayer"]');
            let vendor = $('input[name="vendor"]');
            $(vendor).on('click',()=>{
                if($(bayer).is(':checked') == true){
                    $(bayer).prop('checked',false)
                }
            })
           $(bayer).on('click',()=>{
                if($(vendor).is(':checked') == true){
                    $(vendor).prop('checked',false)
                }
            })
        })
    </script>
</body>
</html>