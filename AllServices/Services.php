<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خمسات للخدمات</title>
    <style>
        .list:not(:first-of-type){
            display: none;
        }
    </style>
</head>
<body class='services'>
    <?php include('../Vendor_Profile/VendorHeader.php');?>
    <section class='sectionServices d-flex justify=content-between align-items-start gap-5 w-100'>
        <div class='d-flex flex-column justify-content-start align-items-start p-3 gap-2 col-4 servicess-filter'>
        <div class='d-flex flex-column justify-content-end align-items-end gap-4 w-100'>
            <form class='search d-flex justify-content-center align-items-center w-100 mb-2'>
                <input type='text' placeholder='بحث...' class='w-100'/>
            </form>
        </div>
        <p>الأقسام</p>
        <div class='lists w-100'>
            <div class='w-100'>
                <div class='ser ser_1 d-flex justify-content-between mb-3 w-100'><b><span>أعمال</span></b><i class="fa-solid fa-chevron-up"></i></div>
                <ul class='list list_1 w-100'>
                    <li class='list-style-none'><a href=''>تخطيط الأعمال</a></li>
                    <li class='list-style-none'><a href=''>إدارة الأعمال</a></li>
                    <li class='list-style-none'><a href="">خدمات قانونية</a></li>
                    <li class='list-style-none'><a href="">خدمات مالية ومحاسبية</a></li>
                    <li class='list-style-none'><a href="">التجارة الإلكترونية</a></li>
                    <li class='list-style-none'><a href="">المبيعات وخدمة العملاء</a></li>
                    <li class='list-style-none'><a href="">مساعد افتراضي</a></li>
                    <li class='list-style-none'><a href="">اخرى</a></li>
                </ul>
            </div>
            <div class='w-100'>
                <div class='ser ser_2 d-flex justify-content-between mb-3 w-100'><b><span>برمجة وتطوير</span><i class="fa-solid fa-chevron-up"></i></b></div>
                <ul class=' list list_2 w-100'>
                    <li class='list-style-none'><a href=''>تطوير المواقع</a></li>
                    <li class='list-style-none'><a href=''>وردبريس</a></li>
                    <li class='list-style-none'><a href=''>إنشاء متجر إلكتروني</a></li>
                    <li class='list-style-none'><a href=''>تطوير البرمجيات</a></li>
                    <li class='list-style-none'><a href=''>لغات البرمجة</a></li>
                    <li class='list-style-none'><a href=''>برمجة تطبيفات الجوال</a></li>
                    <li class='list-style-none'><a href=''>تطوير الألعاب</a></li>
                </ul>
            </div>
            <div class='w-100'>
                <div class='ser ser_3 d-flex justify-content-between mb-3 w-100'><b><span>تسويق رقمي</span></b><i class="fa-solid fa-chevron-up"></i></div>
                <ul class=' list list_3 w-100'>
                    <li class='list-style-none'><a href=''>التسويق عبر مواقع التواصل الإجتماعي</a></li>
                    <li class='list-style-none'><a href=''>تحين محركات البحث SEO</a></li>   
                    <li class='list-style-none'><a href=''>تحليل الويب</a></li>    
                    <li class='list-style-none'><a href=''>أساليب التسويق</a></li>    
                    <li class='list-style-none'><a href=''>الإعلانلات الممولة لمواقع التواصل</a></li>    
                </ul>
            </div>
            <div class='w-100'>
                <div class='ser_4 ser d-flex justify-content-between mb-3 w-100'><b><span>تعليم عن بعد</span></b><i class="fa-solid fa-chevron-up"></i></div>
                <ul class=' list list_4 w-100'>
                    <li class='list-style-none'><a href=''>تعلم اللغات</a></li>    
                    <li class='list-style-none'><a href=''>تعلم المهارات الرقمية</a></li>    
                    <li class='list-style-none'><a href=''>تعلم العلوم المتخصصة</a></li>    
                    <li class='list-style-none'><a href=''>تدريب وحل واجبات</a></li>    
                </ul>
            </div>
            <div class='w-100'>
                <d class='ser_5 ser d-flex justify-content-between mb-3 w-100'><b><span>تسويق رقمي</span></b><i class="fa-solid fa-chevron-up"></i></div>
                <ul class='list list_5 w-100'>
                    <li class='list-style-none'><a href=''>تعلم اللغات</a></li>    
                    <li class='list-style-none'><a href=''>تعلم المهارات الرقمية</a></li>    
                    <li class='list-style-none'><a href=''>تعلم العلوم المتخصصة</a></li>    
                    <li class='list-style-none'><a href=''>تدريب وحل واجبات</a></li>    
                </ul>
            </div>
            <div class='w-100'>
                <div class='ser_6 ser d-flex justify-content-between mb-3 w-100'><b><span>فيديو وأنيمشن</span></b><i class="fa-solid fa-chevron-up"></i></div>
                <ul class='list list_6 w-100'>
                    <li class='list-style-none'><a href=''>تحرير الفيديو</a></li>    
                    <li class='list-style-none'><a href=''>أنيميشن وموشن جرافيك</a></li>    
                    <li class='list-style-none'><a href=''>تصميم فيديوهات شرح وتعليم</a></li>    
                    <li class='list-style-none'><a href=''>تصميم فيديوهات تسويقية</a></li> 
                    <li class='list-style-none'><a href=''>دعوات وتهنئة ومعايدات</a></li>    
                    <li class='list-style-none'><a href=''>تصميم فيديو بالذكاء الاصطناعي</a></li>    
                </ul>
            </div>
        </div>
        </div>
        <div class='rows_content d-flex gap-3 flex-wrap'>
                    <div class="span3 d-flex  flex-column align-items-center col-3 card border border-0">
                        <img src="../img/audio.jpg" alt="" class='w-100'/>
                        <div class="caption d-flex flex-column text-items-end">
                            <h4><a href='./ServicesView.php'>موشن جرافيك اخترافي</a></h4>
                            <p><span>فيديو وانيمشن</span>/<span>مونتاج فيديو</span></p>
                            <a class="btn btn-mini" href="#"><b>تبدأمن </b>5.00$</a>
                        </div>
                    </div>
                    <div class="span3 d-flex  flex-column align-items-center col-3 card border border-0">
                        <img src="../img/audio.jpg" alt="" class='w-100'/>
                        <div class="caption d-flex flex-column text-items-end">
                            <h4><a href='./ServicesView.php'>موشن جرافيك اخترافي</a></h4>
                            <p><span>فيديو وانيمشن</span>/<span>مونتاج فيديو</span></p>
                            <a class="btn btn-mini" href="#"><b>تبدأمن </b>5.00$</a>
                        </div>
                    </div>
                    <div class="span3 d-flex  flex-column align-items-center col-3 card border border-0">
                        <img src="../img/audio.jpg" alt="" class='w-100'/>
                        <div class="caption d-flex flex-column text-items-end">
                            <h4><a href='./ServicesView.php'>موشن جرافيك اخترافي</a></h4>
                            <p><span>فيديو وانيمشن</span>/<span>مونتاج فيديو</span></p>
                            <a class="btn btn-mini" href="#"><b>تبدأمن </b>5.00$</a>
                        </div>
                    </div>
                    <div class="span3 d-flex  flex-column align-items-center col-3 card border border-0">
                        <img src="../img/audio.jpg" alt="" class='w-100'/>
                        <div class="caption d-flex flex-column text-items-end">
                            <h4><a href='./ServicesView.php'>موشن جرافيك اخترافي</a></h4>
                            <p><span>فيديو وانيمشن</span>/<span>مونتاج فيديو</span></p>
                            <a class="btn btn-mini" href="#"><b>تبدأمن </b>5.00$</a>
                        </div>
                    </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $('.ser_1').on('click',()=>{
            $('.list_1').slideToggle();
        });
        $('.ser_2').on('click',()=>{
            $('.list_2').slideToggle();
        });
        $('.ser_3').on('click',()=>{
            $('.list_3').slideToggle();
        });
        $('.ser_4').on('click',()=>{
            $('.list_4').slideToggle();
        });
        $('.ser_5').on('click',()=>{
            $('.list_5').slideToggle();
        });
        $('.ser_6').on('click',()=>{
            $('.list_6').slideToggle();
        });
        fetch('')
    </script>
</body>
</html>