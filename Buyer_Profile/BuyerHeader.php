<header class='pb-3'>
    <div class='container d-flex justify-content-between align-items-center'>
        <div class='right d-flex align-items-center column-gap-3'>
            <i class="fa-solid fa-bars mt-3 fs-4"></i>
            <a href='./Profile.php'><img src='../img/logo.png' alt='logo'/></a>
            <a href=''><div class='categories d-flex justify-content-center align-items-center mt-3 gap-2'>
                <i class="fa-solid fa-boxes-stacked"></i>
                <span>التصنيفات</span>
            </div></a>
            <a href=''><div class='categories d-flex justify-content-center align-items-center mt-3 gap-2'>
                <i class="fa-regular fa-folder-open"></i>
                <span>المشتريات</span>
            </div></a>
        </div>
        <div class='left d-flex align-items-center column-gap-4 mt-3'>
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-solid fa-envelope"></i>
            <i class="fa-solid fa-bell"></i>
            <div class='d-inline-block position-relative'>
                <img src='../<?php echo $data["Profile_Image"]?>' alt='Profile_img' class='border rounded-circle'/>
                <div class='User_Menu position-absolute z-3 d-flex  flex-column justify-content-center align-items-start gap-2 start-0 pe-3 ps-3 bg-light'>
                    <div><a href='./UserProfile.php' class='d-flex gap-1 text-align-center text-dark'><i class="fa-solid fa-user"></i><span><?php echo $data['UserName']?></span></a></div>
                    <div><a href='' class='d-flex gap-1 text-align-center text-dark'><i class="fa-solid fa-bookmark"></i><span>مجموعاتي</span></a></div>
                    <div><a href='' class='d-flex gap-1 text-align-center text-dark'><i class="fa-solid fa-dollar-sign"></i><span>الرصيد</span></a></div>
                    <div><a href='' class='d-flex gap-1 text-align-center text-dark'><i class="fa-solid fa-wrench"></i><span>الإعدادات</span></a></div>
                    <hr class='m-0'/>
                    <div><a href='' class='d-flex gap-1 text-align-center text-dark'><i class="fa-regular fa-pen-to-square"></i><span>تعديل الحساب</span></a></div>
                    <div><a href='' class='d-flex gap-1 text-align-center text-dark'><i class="fa-solid fa-handshake-angle"></i><span>مساعدة</span></a></div>
                    <hr class='m-0'/>
                    <div><a href='./Logout.php' class='d-flex gap-1 text-align-center text-dark'><i class="fa-solid fa-arrow-right-from-bracket"></i><span>خروج</span></a></div>
                </div>
            </div>
        </div>   
    </div>
</header>
