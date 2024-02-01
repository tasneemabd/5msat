<?php
/*@session_start(); 
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
    }
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خمسة للخدمات المصغرة</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style.css">
    <link rel="stylesheet" href="../style2.css">
 <style>
    header > div.container{
    width: 100%;
    background-color: #e2bebe;
    padding-bottom: 10px;
}
 </style>
</head>
<body id='AddVendorService'>
    <header class='pb-3 w-100'>
        <div class='d-flex justify-content-between align-items-center w-100'>
            <a href='./Profile.php' class='d-flex justify-content-center align-items-center'>
                    <img src='../img/logo.png' alt='logo' class='logo'/>
                    <h3 class='fs-5 text-dark'>خمسة للخدمات المصغرة</h3>
            </a>
            <img src='../img/DigitalImage.jpg' alt='' class='digital'/>
        </div>
        <div class='container d-flex justify-content-between align-items-center'>
            <div class='right d-flex align-items-center column-gap-3 text-dark'>
                <a href='./AddService.php'><div class='categories d-flex justify-content-center align-items-center mt-3 gap-2'>
                    <i class="fa-solid fa-plus text-dark"></i>
                    <span class='text-dark'>أضف خدمة</span>
                </div></a>
                <a href='../AllServices/Services.php'><div class='categories d-flex justify-content-center align-items-center mt-3 gap-2'>
                    <i class="fa-solid fa-boxes-stacked text-dark"></i>
                    <span class='text-dark'>الخدمات</span>
                </div></a>
                <a href=''><div class='categories d-flex justify-content-center align-items-center mt-3 gap-2'>
                    <i class="fa-regular fa-folder-open text-dark"></i>
                    <span class='text-dark'>المشتريات</span>
                </div></a>
                <a href=''><div class='categories d-flex justify-content-center align-items-center mt-3 gap-2'>
                    <i class="fa-solid fa-truck text-dark"></i>
                    <span class='text-dark'>الطلبات الواردة</span>
                </div></a>
                
            </div>
            <div class='left d-flex align-items-center column-gap-4 mt-3'>
                <i class="fa-solid fa-magnifying-glass text-dark"></i>
                <i class="fa-solid fa-cart-shopping text-dark"></i>
                <i class="fa-solid fa-envelope text-dark"></i>
                <i class="fa-solid fa-bell text-dark"></i>
                <img src='../<?php echo $data["Profile_Image"]?>' alt='Profile_img' class='border rounded-circle'/>
            </div>   
        </div>
    </header>
    <main>
        <section id='AddService' class='mt-5'>
            <div class='container d-flex flex-column gap-4'>
                <div class='d-flex justify-content-between align-items-center mt-5'>
                    <h3>أضف خدمة جديدة</h3>
                    <div class='d-flex align-items-center advice btn border-1'>
                        <i class="fa-solid fa-exclamation p-2 me-1 rounded-circle"></i>
                        <span>نصائح لقبول خدماتك</span>
                    </div>
                </div>
                <div class='Service_Content d-flex'>
                    <?php include('./Add_Service_Form.php'); ?>
                    <div class='instruction col-4'></div>
                </div>
            </div>
        </section>
    </main>
    <?php include('../General_Footer.php')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
</body>
</html>