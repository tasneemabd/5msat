<?php
    session_start();
    include '../Connect.php';
    if(!isset($_SESSION['user'])){
        header('location:../../../Login.php');
        exit();
    }else{
        $stm = "SELECT * FROM users WHERE EMAIL=:EmailVal";
        $q = $conn->prepare($stm);
        $q->bindParam('EmailVal',$_SESSION['user']['email']);
        $q->execute();
        $data = $q->fetch();

        if($data['Account_Type'] === 'vendor'){
            
          ?>
                <script>
                    document.querySelector('#vendor').checked = true;
                </script>
            <?php
        }
    
    }

?>
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
<body>
    <section>
        <h3>ملفي الشخصي</h3>
        <div class='personal_info d-flex justify-content-between'>
            <div class='Account col-5'>
                <img src='' alt='personal_image' class='border rounded-circle'/>
                <hr/>
                <div>
                    <p><span>تعديل الحساب</span><i class="fa-solid fa-right-from-bracket"></i></p>
                </div>
            </div>
            <form class='d-flex flex-column'>
                <p>نوع الحساب</p>
                <div>
                    <div>
                        <input type="checkbox" name="buyer" id="buyer">
                        <labe>مشتري</labe>
                    </div>
                    <p>أبحث عن خدمات لشرائها</p>
                </div>
                <div>
                    <div>
                        <input type="checkbox" name="vendor" id="vendor">
                        <labe>بائع</labe>
                    </div>
                    <p>أتطلع لعرض خدماتي على المستخدمين</p>
                </div>
                <div>
                    <p>النبذه التعريفية</p>
                    <textarea class='w-100' name="MyPref" id="MyPref"  rows="10"></textarea>
                    <p>المعلومات التي ستظهر في
                         <a href='' class='text-dark'>صفحة حسابك</a>
                         لباقي المستخدمين. لا تدخل روابط أو وسائل تواصل خارجية.</p>
                </div>
                <input type='submit' value='حفظ' />
            </form>
        </div>
    </section>
 
        <?php 
           
        ?>
    
</body>
</html>