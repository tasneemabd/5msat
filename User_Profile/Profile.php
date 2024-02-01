<?php
session_start();
 include '../Connect.php';

    if(!isset($_SESSION['user'])){
        header('location:Login.php');
        exit();
    }
    else{
         if(isset($_GET['code'])){
            $Checked = $conn->prepare("UPDATE users SET Activate = 1 , Security_Code=:NEW_SEQURITY  WHERE Security_Code=:SEQURITY_CODE");
            $security=md5(date("h:i:s"));
            $Checked->bindParam("NEW_SEQURITY",$security);
            $Checked->bindParam("SEQURITY_CODE",$_GET['code']);
            $Checked->execute();

            include('./ProfileContent.php');

        }else if(!isset($_GET['code'])){

            $stm = "SELECT * FROM users WHERE Email=:EmailVal";
            $q = $conn->prepare($stm);
            $q->bindParam('EmailVal',$_SESSION['user']['email']);
            $q->execute();
            $data = $q->fetch();  

            if($data['Activate']){
                 include('./ProfileContent.php');
            }
            else{
                header('location:Login.php');
                exit();
            }

        }
        
        
    }
?>
