<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح مع طيبة</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <p class="lead fw-normal">للسحب على نسخة مجانية من برنامج</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div>
<!---
 <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور اعلاه</li>
  <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة و أجوبة حرة للجميع</li>
  <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك و أيميلك</li>
  <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
  <li class="list-group-item">الرابح سيحصل على نسخة أصلية من برنامج كامتازيا</li>
</ul>
---->

<div class="position-relative text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form  action="<?php $_SERVER['PHP-SELF'] ?>" method="POST">
  <h3>الرجاء أدخل معلوماتك</h3>

  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الأول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الأخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>">
    <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الألكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
    <div class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>

  <button type="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>
  </div>
  <div class="row mb-5 pb-5">
  <?php foreach($users as $user) : ?>

      <div class="col-sm-6"> 
        <div class="card my-2 bg-light">
        <div class="card-body">
          <h5 class="card-title"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName'])  ?></h5>
          <p class="card-text"><?php echo htmlspecialchars($user['email']) ?></p>
        </div>
        </div>
      </div>
  <?php endforeach; ?>
  </div>
  

<?php include_once './parts/footer.php'; ?>