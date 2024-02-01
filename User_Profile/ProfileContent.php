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
<body id='visitor'>
    <?php
        /*if($data['Account_Type']== 'user'){
            include('../NewUser_Profile/Account_Type.php');
        }else if($data['Account_Type']=='vendor'){
            include('../Vendor_Profile/VendorHeader.php');
        }else{
            include('../Buyer_Profile/BuyerHeader.php');
        }*/
        include('../Vendor_Profile/VendorHeader.php');
         include('./PublicDivInMain.php');
         include('../Footer.php'); 
        /*if($data['Account_Type'] != 'user'){
            echo '<main>';
             include('../User_Profile/PublicDivInMain.php');  
            echo '</main>';
         include('../General_Footer.php'); 
        }*/
    ?>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(()=>{
            $('.search input[type="text"]').on('focus',()=>{
                $('.search').addClass('searchBorder');
            })
            $('.search input[type="text"]').on('focusout',()=>{
                $('.search').removeClass('searchBorder');
            })
        })        
    </script>
</body>
</html>