<!-- 
เครดิต นายไกรวิท มงคลสกุลฤทธิ์ นิสิตชั้นปี 3 (อนุญาต ให้นำข้อมูลไปหากินสร้างรายได้)
> ทำงาน Parttime Backend EdVISORY และรับงานอิสระ ทำยูทูป มังงะ เขียนนิยาย
> เหตุผลที่แจก ความสุขครับ รู้ว่าตัวเองไม่ได้เก่ง วิธีที่ทำให้พัฒนาคือการให้

> ทำไมถึงใช้ภาษาไทย : เนื่องจากการเข้าถึงภาษา สำหรับกลุ่มที่ไม่เก่ง จะต้องมีภาษาที่เข้าถึงกลุ่มเหล่านี้
> สำหรับมือใหม่ ทำตามด้วยครับ

composer create-project --prefer-dist laravel/laravel demo "7.6.2"
> ทำไมต้องกำหนด เวอร์ชั่นด้วย เพราะเดี่ยวมันคาดเคลื่อนแล้วจะได้ไม่ต้องถาม

> .env ทำการ Setting DataBase โดยผมจะตั้ง new Database Demo collation utf8_general_ci
> config database.php Setting เช่นกัน mysql

authentication : https://laravel.com/docs/7.x/authentication
ขออธิบายก่อนว่า Laravel ขยันอัพเดท โคตรขยัน (ในใจก็อยากจะด่า แต่กลัวพวกสาวกปกป้อง) ต้องบอกไว้ก่อนผมไม่ได้เป็นสาวก ภาษาไหนเลยอยากด่าก็ด่า

laravel mix

composer require laravel/ui
php artisan ui vue --auth

กรณีคุณอยากจะใช้ Vue ก็ติดตั้ง
npm i 
npm run dev
composer i 
composer dump-autoload
หากไม่่ใช่ก็กระโดดข้ามมาดูส่วนนี้เลย

php artisan  migrate

https://adminlte.io/themes/v3/index.html โหลดมาเลยจ้าาาาาาาาาาาาาาาาาาาาาาาาาาาาาาา

> resources > views > layouts > app.blade.php

php artisan serve

php artisan make:model Role -m
> migrations เพิ่ม $table->string('name');
php artisan make:migration create_role_user_table
> migrations เพิ่ม $table->integer('role_id')->unsigned(); $table->integer('user_id')->unsigned();

php artisan  migrate

> app > Role.php
> app > User.php
    ส่วนนี้คือการกำหนดสิทธิ์ แบบบุคคล กับ แบบมากกว่าหนึ่งคน


php artisan make:controller \\Admin\\MenageUsersController -r -mUser

> app > http > controllers > auth > RegisterController.php
> app > providers > AuthServiceProvider.php
 
> app > http > controllers > admin > MenageUsersController.php 
สาระน่ารู้ มาอธิบายให้น้อง ๆ หนู ๆ ฟัง use Illuminate\Support\Facades\Gate;
เราจะทำการประกาศ ให้มันรู้จัก Gate มันคืออะไร อธิบายง่าย ๆ ไม่ต้องวิชาการ มันเป็นเหมือน ชั้นบรรยากาศนอก สมุตติตอนนี้เราคือ สร้างโลกที่เอเลี่ยนกำลังบุกเข้ามา ส่วน middleware เป็นชั้นบรรยากาศใน
middleware อย่าลืมว่า สิ่งที่เราจะทำ Roles ก็เป็นชั้นบรรยากาศอีกที ไม่งงเนอะ โดยที่เราให้มันรู้จักกัน ผ่าน Controller 
Gateway: Gateway is just a single entry point for clients to call API services.
Services: Services hold main logics and processing of data to be sent to clients via API.


ในอนาคตเราจะต้องฝึกใช้ Controller -r ทุกครั้ง เพราะอะไรไปดูกัน 
> routes > web.php
use Illuminate\Support\Facades\Auth;
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:admin')->group(function () {
    Route::resource('/manager', 'MenageUsersController', ['except' => ['show', 'create', 'store']]);
});

ทำการสร้างโฟลเดอร์
> resources > views >admin > manager > index.blade.php

composer i 
composer dump-autoload
php artisan  migrate:refresh

php artisan make:seed RolesTableSeed
php artisan make:seed UserTableSeeder
php artisan db:seed




 -->
