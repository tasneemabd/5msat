<?php

    if(isset($_POST['submit'])){
        include '../Connect.php';

        $NewPassword = $_POST['NewPass'];
        $q = $conn->prepare("UPDATE users SET Password = '$NewPassword' WHERE ");
        $q->execute();
    }
?>

<form>
    <div>
        <div><label for=""> كلمة المرور الجديدة</label><span>*</span></div>
        <input type="password" placeholder='أدخل كلمة المرور الجديدة' name='NewPass'/>
    </div>
    <div>
        <div><label for=""> تأكيد كلمة المرور الجديدة</label><span>*</span></div>
        <input type="password" placeholder='أدخل تأكيد كلمة المرور الجديدة' name='CheckNewPass'/>
    </div>
    <input type='submit' name='submit' value='تغيير'/>
</form>