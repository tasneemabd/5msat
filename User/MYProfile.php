<?php
    session_start();
    include('./Connect.php');
    if(!isset($_SESSION['user'])){
        header('location:./');
        exit();
    }

    $stm = 'SELECT * FROM users WHERE email=:EmailVal';
    $q = $conn->prepare($stm);
    $q->bindParam('EmailVal',$_SESSION['user']['email']);
    $q->execute();
    $data = $q->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        if($data['Account_Type']=='vendor'){
            include('./Vendor_Profile/VendorHeader.php');
        }else{
            include('./Buyer_Profile/BuyerHeader.php');
        }
    ?>
    <div class='d-flex flex-column justify-content-center align-items-center w-100 pt-5'>
        <div class='Account d-flex flex-column justify-content-center align-items-center w-100 pt-3'>
            <img src='../<?php echo $data["Profile_Image"]?>' alt='Profile_img' class='border rounded-circle'/>
            <div>
                <h3><?php echo $data['FirstName'].' '.$data['FamilyName']?></h3>
            </div>
        </div>
        <div class='d-flex flex-column justify-content-between align-items-center w-100'>
            <div class='d-flex justify-content-between align-items-center w-100 pe-4 ps-4'>
                <div class="d-flex align-items-center gap-2">
                    <button class='btn d-flex align-items-center gap-1 personal_Profile ProfileBTN p-4 ClickButton'><i class="fa-solid fa-user"></i><span>الملف الشخصي</span></button>
                    <?php 
                          if($data['Account_Type']=='vendor'){
                                echo "<button class='btn d-flex align-items-center gap-1 p-4 personal_Services ProfileBTN'><i class='fa-solid fa-briefcase'></i><span>الخدمات</span></button>";
                          }
                    ?>
                </div>
                <button class='btn d-flex align-items-center gap-1 border border-1 '><a href='./Account_Setting.php' class='text-dark'><i class="fa-solid fa-wrench"></i><span>تعديل الملف الشخصي</span></a></button>
            </div>
            <div class='info w-100 p-5'>
                <?php 
                    include('./Personal_Profile.php');
                ?>
            </div>
        </div>
    </div>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        document.querySelector('.personal_Profile').onclick=()=>{
            $('.personal_Services').removeClass('ClickButton');
            $('.personal_Profile').addClass('ClickButton');
            $('.info').load('./Personal_Profile.php');
        }
        document.querySelector('.personal_Services').onclick=()=>{
            $('.personal_Services').addClass('ClickButton');
            $('.personal_Profile').removeClass('ClickButton');
            $('.info').load('./Personal_Services.php');
        }
    </script>
</body>
</html>