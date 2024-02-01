<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../Style.css">
    <link rel="stylesheet" href="../style2.css">
    <title>خمسات للخدمات</title>
</head>
<body>
    <?php include './VendorHeader.php'?>
     <main>
        <section class='Home position-relative'>
            <div class='intro d-flex flex-column justify-content-center align-items-center gap-1'>
                <h1>أكبر سوق عربي لبيع وشراء الخدمات المصغرة</h1>
                <p>أنجز أعمالك بسهولة وأمان بأسعار تبدأ من 5$ فقط</p>
                <form class='search lh-1 bg-light p-2 w-50 d-flex justify-content-between align-items-center gap-3'>
                    <input  class=' border border-0 w-100 bg-transparent pe-2' type='text' placeholder='جرّب: تصميم شعار أو ترجمة ..'/>
                    <input type='submit' value='بحث' class='p-4 pt-3 pb-3'/>
                </form>
            </div>
        </section>
        <?php include '../General_Departments.php';?>
        <section class="grayBakground How_Work pt-3">
            <div class='container d-flex flex-column justify-content-center align-items-center w-100 gap-5 mt-5 pt-5 pb-5'>
                <h2>كيف يعمل موقع خمسات</h2>
                <div class='work_type d-flex justify-content-center gap-4 w-100'>
                    <div class='work_1 bg-light position-relative d-flex justify-content-center align-items-center gap-3 p-2 w-100'>
                        <img src='' alt='how-1'/>
                        <div>
                            <p>استعرض الخدمات</p>
                            <p>ابحث عن الخدمة التي تحتاجها باستخدام مربع البحث في الأعلى أو عبر التصنيفات.</p>
                        </div>
                        <span class='position-absolute'>1</span>
                    </div>
                    <div class='work_2 bg-light position-relative d-flex justify-content-center align-items-center gap-3 p-2 w-100'>
                        <img src='' alt='how-2'/>
                        <div>
                            <p>اطلب الخدمة</p>
                            <p>ابحث عن الخدمة التي تحتاجها باستخدام مربع البحث في الأعلى أو عبر التصنيفات.</p>
                        </div>
                        <span class='position-absolute'>2</span>
                    </div>
                    <div class='work_3 bg-light position-relative d-flex justify-content-center align-items-center gap-3 p-2 w-100'>
                        <img src='' alt='how-3'/>
                        <div>
                            <p>استلم خدمتك</p>
                            <p>تواصل مع البائع مباشرة داخل موقع خمسات حتى استلام طلبك كاملاً.</p>
                        </div>
                        <span class='position-absolute'>3</span>
                    </div>
                </div>
            </div>
        </section>
        <?php 
            include '../General_Services.php';
        ?>
    </main>
    <?php include '../General_Footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
   
 <script>
    $("#toggle").click(function(){
       $("#menu").slideToggle()
    });
 </script>
</body>

</html>