<?php
session_start();
 include '../Connect.php';

    if(!isset($_SESSION['user'])){
        header('location:Login.php');
        exit();
    }else{
         $stm = "SELECT * FROM users WHERE Email=:EmailVal";
        $q = $conn->prepare($stm);
        $q->bindParam('EmailVal',$_SESSION['user']['email']);
        $q->execute();
        $data = $q->fetch();  


    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style2.css">
    <link rel="stylesheet" href="../Style.css">

    <title>خمسات للخدمات</title>
</head>
<body class='cart'>
    <?php
       if($data['Account_Type']=='vendor'){
            include('../Vendor_Profile/VendorHeader.php');
        }else{
            include('../Buyer_Profile/BuyerHeader.php');
        }
    ?>
    <div class='w-100'><p class='p-3'>لا توجد خدمات لعرضها</p></div>
    <?php
        include('../General_Footer.php');
    ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>
</html>