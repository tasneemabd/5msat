<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .signHeader{
            color:black !important;
        }
        header div.container{
            width: 100%;
    background-color: #e2bebe;
    padding-bottom: 10px;
}
        
    </style>
</head>
<body>
    <header class='pb-3 mb-5 signHeader'>
    <div class='d-flex justify-content-between align-items-center w-100'>
            <a href='../User_Profile/Profile.php' class='d-flex justify-content-center align-items-center'>
                    <img src='../img/logo.png' alt='logo' class='logo'/>
                    <h3 class='fs-5 text-dark'>خمسة للخدمات المصغرة</h3>
            </a>
            <img src='../img/DigitalImage.jpg' alt='' class='digital'/>
        </div>
        <div class='container d-flex flex-column justify-content-between align-items-center'>
        
            <div class='left d-flex align-items-center column-gap-4 mt-3'>
                <div class='account  d-flex justify-content-center align-items-center column-gap-2'>
                    <button class='login  d-flex justify-content-center align-items-center btn  border border-dark gap-1'>
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <a href='./Login.php' class='text-dark'>دخول</a>
                    </button>
                    <button class='signIn  d-flex justify-content-center align-items-center btn  border border-dark gap-1'>
                        <i class="fa-solid fa-user-plus"></i>
                        <a href='./Register.php' class='text-dark'>حساب جديد</a>
                    </button>
                </div>
            </div>   
        </div>
    </header>
</body>
</html>