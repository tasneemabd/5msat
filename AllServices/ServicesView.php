
<?php 
session_start();
 include '../Connect.php';

    if(!isset($_SESSION['user'])){
        header('location:Login.php');
        exit();
    }
    else{
         if(isset($_GET['code'])){
            $Checked = $conn->prepare("UPDATE users SET Activate = true , Security_Code=:NEW_SEQURITY  WHERE Security_Code=:SEQURITY_CODE");
            $security=md5(date("h:i:s"));
            $Checked->bindParam("NEW_SEQURITY",$security);
            $Checked->bindParam("SEQURITY_CODE",$_GET['code']);
            $Checked->execute();
         }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./ViewProductStyle.css">
    <title>خمسات للخدمات</title>
</head>
<body>
    <?php include('../Vendor_Profile/VendorHeader.php');?>
    <main>
  <div class="service container">
    <div class="grid product">
      <div class="column-xs-12 column-md-7">
        <div class="product-gallery">
          <div class="product-image">
            <img class="active" src="" alt="image_service">
          </div>
          <ul class="image-list">
            <li class="image-item"><img src=""  alt="image_service"></li>
            <li class="image-item"><img src=""  alt="image_service"></li>
            <li class="image-item"><img src=""  alt="image_service"></li>
          </ul>
        </div>
        <div class="description"></div>
      </div>
      <div class="column-xs-12 column-md-5">
        <div class="d-flex justify-content-between align-items-center">
          <h1>بطاقة الخدمة</h1>
          <button class="add-to-cart"><a href=''>اشتري الخدمة</a></button>
        </div>
        <div class="description">
          <P><span>التقيمات</span></P>
          <P><span>متوسط سرعة الرد</span></P>
          <P><span>المشترين</span></P>
          <P><span>طلبات جاري التنفيذ</span></P>
          <P><span>سعر الخدمة يبدأ من</span></P>
          <P><span>مدة التسليم</span></P>
        </div>
        <div class="description w-100">
          <h2>صاحب الخدمة</h2>
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-center align-items-center">
              <img src="../img/bussiness-2.jpg" alt="Personal-img" class="Personal_img rounded-circle border border-1"/>
              <span class="me-2">User Name</span>
            </div>
            <button class="add-to-cart"><a href=''>تواصل معي</a></button>
          </div>
        </div>
      </div>
    </div>
    <div class="w-100">
      <h2>اشتري الخدمة</h2>
      <div class="description">
        <form>
          <input type="number" value="1" />
          <input type="submit" class="add-to-cart" value="أضاف إلى السلة" />
        </form>
      </div>
    </div>
    <!--<div class="grid related-products">
      <div class="column-xs-12">
        <h3>You may also like</h3>
      </div>
      <div class="column-xs-12 column-md-4">
        <img src="https://source.unsplash.com/miziNqvJx5M">
        <h4>Succulent</h4>
        <p class="price">$19.99</p>
      </div>
      <div class="column-xs-12 column-md-4">
        <img src="https://source.unsplash.com/2y6s0qKdGZg">
        <h4>Terranium</h4>
        <p class="price">$19.99</p>
      </div>
      <div class="column-xs-12 column-md-4">
        <img src="https://source.unsplash.com/6Rs76hNbIWE">
        <h4>Cactus</h4>
        <p class="price">$19.99</p>
      </div>
    </div>-->
  </div>
</main>
    <?php include('../General_Footer.php');?>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>
</html>