<?php
    @session_start(); 
    include '../Connect.php';
    if(!isset($_SESSION['user'])){
        header('location:Login.php');
        exit();
    }else{
        $stm = "SELECT * FROM testing WHERE Client=:IDVal";
        $q = $conn->prepare($stm);
        $q->bindParam('IDVal',$_SESSION['user']['ID']);
        $q->execute();
        $data = $q->fetch();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

</head>
<body class='PersonalServices w-100 p-5'>
    <div class='content d-flex justify-content-between align-items-center w-100 container'>
        <div class='MyServices w-100 pt-3 pb-3 bg-light'>
            <div class='p-2'>
                <?php
                    if(!$data){
                        echo 'لا توجد خدمات مضافة';
                    }else{
                        echo 'يوجد خدمات';
                    }
                ?>
            </div>
        </div>
    </div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>
</html>