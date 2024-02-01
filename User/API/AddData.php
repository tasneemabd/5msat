<?php
    header("Content-Type:application/json; charset=UTF-8");
    header("Acess-Control-Allow-Methods:POST");
    header("Acess-Control-Max-Age:3600");
    header("Acess-Control-Allow-Header:Content-Type, Access-Control-Allow-Header,Authorization,X-Requested-With");

    include '../../Connect.php';

    session_start();

    include '../Select_User_By_Email.php';

    if(
        isset($_POST['title']) && isset($_POST['main_service']) && 
        isset($_POST['sub_service']) && isset($_POST['service_description']) &&
        isset($_POST['service_price']) && isset($_POST['submit_time']) &&
        isset($_POST['keywords']) && isset($_POST['instruction_service']) &&
        isset($_POST['Condition_1']) && isset($_POST['Condition_2']) &&
        isset($_POST['Condition_3']) 
    ){
        
        $Service_title = $_POST['title'];
        $Main_Description_Service = $_POST['main_service'];
        $Sub_Description_Service = $_POST['sub_service'];
        $Description_Service = $_POST['service_description'];
        $Service_price = $_POST['service_price'];
        $Service_deadline = $_POST['submit_time'];
        $Service_Keywords = $_POST['keywords'];
        $Service_instruction = $_POST['instruction_service'];
        $Condition_A = $_POST['Condition_1'];
        $Condition_B = $_POST['Condition_2'];
        $Condition_C = $_POST['Condition_3'];
        $pname = rand(1000,10000)."-".$_FILES["image"]["name"];
        $tname = $_FILES["image"]["tmp_name"];

          $uploads_dir = 'images';
          move_uploaded_file($tname, $uploads_dir.'/'.$pname);


         $stm = "INSERT INTO testing (	Title,main_category,sub_category,Description,Price,Service_Deadline,Keywords,Service_Instruction,Condition_1,Condition_2,Condition_3,service_img)
        VALUES ('$Service_title','$Main_Description_Service','$Sub_Description_Service','$Description_Service','$Service_price','$Service_deadline','$Service_Keywords','$Service_instruction','$Condition_A','$Condition_B','$Condition_C','$pname')";
         $q= $conn->prepare($stm);
         $q->execute();

         print_r(json_encode(array("message"=>"تم ارسال البيانات")));
    }
?>