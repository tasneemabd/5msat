<?php

@session_start(); 
    include '../Connect.php';
    if(!isset($_SESSION['user'])){
        header('location:Login.php');
        exit();
    }
    else{
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
    <title>Document</title>
</head>
<body>
    

    <form action="Testing.php" method='POST' id='AddService'>
                        <div class='d-flex flex-column gap-4 p-4'>
                            <div class='d-flex flex-column'>
                                <label>عنوان الخدمة</label>
                                <input type='text' class='p-2 mt-3' name='title'/>
                                <p>أدخل عنواناً واضحاً باللغة العربية يصف الخدمة التي تريد أن تقدمها. لا تدخل رموزاً أو كلمات مثل "حصرياً"، "لأول مرة"، "لفترة محدود".. الخ.</p>
                            </div>
                            <div class='d-flex flex-column'>
                                <label>التصنيفات</label>
                                <div class='d-flex gap-1 mt-3'>
                                    <select id="category" class='col-6 p-2' name='main_service'>
                                        <option value="اختر التصنيف" disabled selected hidden>اختر التصنيف: </option>
                                        <option value="أعمال">أعمال</option>
                                        <option value="برمجة وتطوير">برمجة وتطوير</option>
                                        <option value="تسويق رقمي">تسويق رقمي</option>
                                        <option value="تعليم عن بعد">تعليم عن بعد</option>
                                        <option value="فيديو و أنيميشن">فيديو و أنيميشن</option>
                                        <option value="تصميم">تصميم</option>
                                        <option value="هندسة وعمارة">هندسة وعمارة</option>
                                        <option value="صوتيات">صوتيات</option>
                                        <option value="كتابة وترجمة">كتابة وترجمة</option>
                                        <option value="بيانات">بيانات</option>
                                        <option value="أسلوب حياة">أسلوب حياة</option>
                                    </select>
                                    <select id="Subcategory" class='col-6 p-2' name='sub_service'>
                                        <option value="اختر التصنيف الفرعي" disabled selected hidden>اختر التصنيف الفرعي : </option>
                                        <optgroup label="التسويق عبر مواقع التواصل الإجتماعي">
                                            <option value="التسويق عبر مواقع التواصل الاجتماعي">
                                                التسويق عبر مواقع التواصل الاجتماعي
                                            </option>
                                            <option value="التسويق على فيسبوك">
                                                التسويق على فيسبوك
                                            </option>
                                            <option value="التسويق عبر تويتر">
                                                التسويق عبر تويتر
                                            </option>
                                            <option value="التسويق عبر اليوتيوب">
                                                التسويق عبر اليوتيوب
                                            </option>
                                            <option value="التسويق عبر تيك توك">
                                                التسويق عبر تيك توك
                                            </option>
                                            <option value="التسويق عبر الإنستغرام">
                                                التسويق عبر الإنستغرام
                                            </option>
                                            <option value="التسويق عبر الواتساب">
                                                التسويق عبر الواتساب
                                            </option>
                                            <option value="التسويق عبر التليجرام">
                                                التسويق عبر التليجرام
                                            </option>
                                            <option value=" التسويق عبر بنترست">
                                                التسويق عبر بنترست
                                            </option>
                                        </optgroup>
                                        <optgroup label="الإعلانات الممولة لمواقع التواصل">
                                            <option value="إعلانات فيس بوك">
                                                إعلانات فيس بوك
                                            </option>
                                            <option value="إعلانات تويتر">
                                                إعلانات تويتر
                                            </option>
                                            <option value="إعلانات انستغرام">
                                                إعلانات انستغرام
                                            </option>
                                            <option value="إعلانات سناب شات">
                                                إعلانات سناب شات                                                
                                            </option>
                                            <option value="إعلانات تيك توك">
                                                إعلانات تيك توك
                                            </option>
                                            <option value="إعلانات اليوتيوب">
                                                إعلانات اليوتيوب
                                            </option>              
                                        </optgroup>
                                        <optgroup label="تحسين محركات البحث SEO">
                                            <option value=" باك لينك">
                                                باك لينك
                                            </option>
                                            <option value="جيست بوست">
                                                جيست بوست
                                            </option>
                                            <option value="تحليل سيو شامل">
                                                تحليل سيو شامل
                                            </option>
                                            <option value="بحث كلمات مفتاحية">
                                                بحث كلمات مفتاحية
                                            </option>
                                            <option value="تحليل منافسي SEO">
                                                تحليل منافسي SEO
                                            </option>
                                            <option value="سيو المتجر الإلكترونية">
                                                سيو المتجر الإلكترونية
                                            </option>
                                            <option value=" السيو المحلي Local SEO">
                                                السيو المحلي Local SEO
                                            </option>
                                            <option value="سيو اليوتيوب">
                                                سيو اليوتيوب
                                            </option>
                                            <option value="خدمات سيو أخرى">
                                                خدمات سيو أخرى
                                            </option>        
                                        </optgroup>
                                        <optgroup label="أساليب التسويق">
                                            <option value="إعلانات المواقع">
                                                إعلانات المواقع
                                            </option>
                                            <option value="الإضافة لأدلة المواقع">
                                                الإضافة لأدلة المواقع
                                            </option>
                                            <option value="التسويق عبر المنتديات">
                                                التسويق عبر المنتديات
                                            </option>
                                            <option value="تسويق قواعد البيانات">
                                                تسويق قواعد البيانات
                                            </option>
                                            <option value="تسويق تطبيقات الجوال">
                                                تسويق تطبيقات الجوال
                                            </option>
                                            <option value="التسويق عبر البريد الإلكتروني">
                                                التسويق عبر البريد الإلكتروني
                                            </option>
                                            <option value="التسويق عبر الشبكات الإعلانية">
                                                التسويق عبر الشبكات الإعلانية
                                            </option>
                                            <option value="التسويق عبر محركات البحث SEM">
                                                التسويق عبر محركات البحث SEM
                                            </option>      
                                        </optgroup>
                                        <optgroup label="خطط واستشارات تسويقية">
                                            <option value="خطط تسويقية">
                                                خطط تسويقية
                                            </option>
                                            <option value="استشارات تسويقية">
                                                استشارات تسويقية
                                            </option>     
                                        </optgroup>
                                        <optgroup label="تحليل الويب">
                                            <option value="إضافة أكواد التتبع">
                                                إضافة أكواد التتبع
                                            </option>
                                            <option value="تقارير تحليل المواقع">
                                                تقارير تحليل المواقع
                                            </option>     
                                        </optgroup>
                                        <option value="أخرى">أخرى</option>
                                    </select>
                                </div>
                            </div>
                            <div class='d-flex flex-column'>
                                <label>وصف الخدمة</label>
                                <textarea class='mt-3' name='service_description'></textarea>
                                <p>أدخل وصف الخدمة بدقة يتضمن جميع المعلومات والشروط . يمنع وضع البريد الالكتروني، رقم الهاتف أو أي معلومات اتصال أخرى.</p>
                            </div>
                            <div class='d-flex flex-column'>
                                <label>معرض الخدمة</label>
                                <textarea class='mt-3'></textarea>
                                <p>أضف صور أو فيديو مصمم بشكل جيد لتظهر خدمتك بشكل احترافي وتزيد من مبيعاتك.</p>
                            </div>
                            <div class='d-flex gap-1'>
                                <div class='d-flex flex-column col-6'>
                                    <label>سعر الخدمة</label>
                                    <select id="ServicePrice" class='p-2 mt-3' name='service_price'>
                                        <option value="5.00">$5.00</option>
                                        <option value="10.00">$10.00</option>
                                    </select>
                                </div>
                                <div class='d-flex flex-column col-6 '>
                                    <label>مدة التسليم</label>
                                    <select  id="Deadline" class='p-2 mt-3' name='submit_time'>
                                        <option value="يوم واحد" default> 
                                            يوم واحد 
                                        </option>
                                        <option value="يومين">
                                            يومين
                                        </option>
                                        <option value="ثلاثة أيام">
                                            ثلاثة أيام
                                        </option>
                                        <option value="أربعة أيام">
                                            أربعة أيام
                                        </option>
                                        <option value="خمسة أيام">
                                            خمسة أيام
                                        </option>
                                        <option value="ستة أيام">
                                            ستة أيام
                                        </option>
                                        <option value="أسبوع">
                                            أسبوع
                                        </option>
                                        <option value="أسبوعين">
                                            أسبوعين
                                        </option>
                                        <option value="ثلاثة أسابيع">
                                            ثلاثة أسابيع
                                        </option>
                                        <option value="شهر">
                                            شهر
                                        </option>
                                    </select>
                                    <p>يحق للمشتري إلغاء الخدمة مباشرة بحال التأخر عن الموعد المحدد.</p>
                                </div>
                            </div>
                            <div class='d-flex flex-column'>
                                <label>كلمات مفتاحية</label>
                                <input type='text' class='p-2 mt-3' class='keywords' name='keywords'/>
                            </div>
                            <div class='d-flex flex-column'>
                                <label>تعليمات للمشتري</label>
                                <textarea class='mt-3' name='instruction_service'></textarea>
                                <p>المعلومات التي تحتاجها من المشتري لتنفيذ الخدمة. تظهر هذه المعلومات بعد شراء الخدمة فقط.</p>
                            </div>
                            <div class='DevlopServiceType'>
                                <p>أضف تطويراً لهذه الخدمة</p>
                                <div class="d-flex flex-column gap-4">

                                </div>
                            </div>
                            <div class='d-flex justify-content-end align-items-center'>
                            <div class='DevelopService border border-1 p-2 pe-3 ps-3'>
                                    <i class="fa-solid fa-plus rounded-circle p-2"></i>
                                    <span>أضف تطويراً لهذه الخدمة</span>
                            </div> 
                            </div>
                        </div>
                        <div class='AgreeToAddService mt-5'>
                            <p class='p-3 pe-4 ps-4 m-0'>تأكيد الشروط</p>
                            <hr class='m-1'/>
                            <div class='p-3 pe-4 ps-4 d-flex flex-column gap-3'>
                                <div>
                                    <input type='checkbox' id='cond_1' value='1' name='Condition_1'/>
                                    <label for='cond_1'>عنوان ووصف الخدمة من صياغتي الخاصة وليس منسوخ من أي مكان آخر</label>
                                </div>
                                <div>
                                    <input type='checkbox' id='cond_2'  value='1' name='Condition_2'/>
                                    <label for='cond_2'>جميع الأعمال بمعرض الخدمة نفذتها بنفسي ولدي الصلاحية لنشرها</label>
                                </div>
                                <div>
                                    <input type='checkbox' id='cond_3' value='1' name='Condition_3'/>
                                    <label for='cond_3'>الخدمة لا تحتوي أي وسائل تواصل خارجي ومتوافقة مع 
                                        <a href=''>شروط الاستخدام</a></label>
                                </div>
                            </div>
                        </div>
                    <input type='submit' value='أضف الخدمة' name='submit' class='btn mt-4 p-2 text-light mb-5'/>
    </form>

    <script>
        document.querySelector('#AddService').onsubmit = (e)=>{
            (e).preventDefault();

            let formData = new FormData(document.querySelector('#AddService'));

            fetch('http://localhost/5msat/User/Api/AddData.php',{
                method:'POST',
                body:formData
            }).then(response=>response.json()).then(data=>{
                console.log(data.message);
            })
        }
    </script>
</body>
</html>