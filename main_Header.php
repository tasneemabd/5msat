<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="Style.css">
    <title>خمسات للخدمات</title>
     <style>
        
.burgerMenu{
    height: 100vh;
    padding: 20px 10px;
    width: 260px;
    top: 0;
    right: 0;
    position:fixed;
    background-color:white;
    z-index:10000;
}
.burgerMenu form input:focus{
    outline:none;
}
.freeRegister{
  background-color: green !important;
}
footer a{
    color:white;
    margin-bottom:10px;
}
footer >p{
        background-color: gray;
        padding: 5px;
}
header > div.container{
    width: 100%;
    background-color: #e2bebe;
    padding-bottom: 10px;
}
</style>
</head>
<body>
    <!--<header class='pb-3 w-100'>
    <div class='d-flex justify-content-between align-items-center w-100'>
            <a href='./Profile.php' class='d-flex justify-content-center align-items-center'>
                    <img src='./img/logo.png' alt='logo' class='logo'/>
                    <h3 class='fs-5'>خمسة للخدمات المصغرة</h3>
            </a>
            <img src='./img/DigitalImage.jpg' alt='' class='digital'/>
    </div>
    <div class='container d-flex justify-content-between align-items-center'>
        <div class='right d-flex align-items-center column-gap-3'>
            <div class='d-none'>
                <i class="fa-solid fa-bars mt-3 fs-4"></i>
                <div class='burgerMenu'>
                    <i class="fa-solid fa-xmark fs-4 text-dark"></i>
                    <div class='mt-5'>
                        <form type='POST' action=''>
                            <input type='text' placeholder='أبحث عن...' class='w-100 border border-0 bg-transparent'/>
                        </form>
                        <hr/>
                        <div class='d-flex flex-column justify-content-end'>
                            <div class='login d-flex justify-content-right align-items-center text-dark gap-1 '>
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <a href='./Sign/Login.php' class='text-dark text-decoration-none'>دخول</a>
                            </div>
                            <div class='signIn  d-flex justify-content-right align-items-center text-dark gap-1 mt-3 '>
                                <i class="fa-solid fa-user-plus"></i>
                                <a href='./Sign/Register.php' class='text-dark text-decoration-none'>حساب جديد</a>
                            </div>
                            <div class='categories d-flex justify-content-right align-items-center mt-3 gap-2 text-dark'>
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <span>التصنيفات</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class='categories d-flex justify-content-center align-items-center mt-3 gap-2'>
                <i class="fa-solid fa-boxes-stacked"></i>
                <span>الخدمات</span>
            </div>
        </div>
        <div class='left d-flex align-items-center justify-content-center column-gap-4 mt-3'>
            <div class='d-flex flex-column'>
                <a href="#menu" id="toggle" class='d-flex justify-content-center align-items-center text-light text-decoration-none'><i class="fa-solid fa-magnifying-glass"></i></a>
                <div id="menu" class='position-absolute w-100 end-0  bg-light'>
                    <input type='text' class='w-100' placeholder='أبحث عن ...'/>
                </div>
            </div>    
            <i class="fa-solid fa-cart-shopping"></i>
            <div class='account  d-flex justify-content-center align-items-center column-gap-2'>
                <button class='login  d-flex justify-content-center align-items-center btn text-light border border-light gap-1'>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <a href='./Sign/Login.php' class='text-light text-decoration-none'>دخول</a>
                </button>
                <button class='signIn  d-flex justify-content-center align-items-center btn text-light border border-light gap-1'>
                    <i class="fa-solid fa-user-plus"></i>
                    <a href='./Sign/Register.php' class='text-light text-decoration-none'>حساب جديد</a>
                </button>
            </div>
        </div>   
    </div>
</header>-->
<header class='pb-3 w-100'>
        <div class='d-flex justify-content-between align-items-center w-100'>
            <a href='./Profile.php' class='d-flex justify-content-center align-items-center'>
                    <img src='./img/logo.png' alt='logo' class='logo'/>
                    <h3 class='fs-5'>خمسة للخدمات المصغرة</h3>
            </a>
            <img src='./img/DigitalImage.jpg' alt='' class='digital'/>
        </div>
        <div class='container d-flex justify-content-between align-items-center'>
            <div class='right d-flex align-items-center column-gap-3'>
                <a href='./User/AddService.php'><div class='categories d-flex justify-content-center align-items-center mt-3 gap-2'>
                    <i class="fa-solid fa-plus"></i>
                    <span>أضف خدمة</span>
                </div></a>
                <a href='./AllServices/Services.php'><div class='categories d-flex justify-content-center align-items-center mt-3 gap-2'>
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <span>الخدمات</span>
                </div></a>
                <a href=''><div class='categories d-flex justify-content-center align-items-center mt-3 gap-2'>
                    <i class="fa-regular fa-folder-open"></i>
                    <span>المشتريات</span>
                </div></a>
                <a href=''><div class='categories d-flex justify-content-center align-items-center mt-3 gap-2'>
                    <i class="fa-solid fa-truck"></i>
                    <span>الطلبات الواردة</span>
                </div></a>
                
            </div>
            <div class='left d-flex align-items-center column-gap-4 mt-3 text-dark'>
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-envelope"></i>
                <i class="fa-solid fa-bell"></i>
                <img src='../<?php echo $data["Profile_Image"]?>' alt='Profile_img' class='border rounded-circle'/>
            </div>   
        </div>
    </header>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
 <script>
    $("#toggle").click(function(){
       $("#menu").slideToggle()
    });
 </script>
</body>
</html>

