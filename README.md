<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## คู่มือการใช้งาน

เมื่อได้ไฟล์ไปแล้วต้องการทดสอบระบบ ให้ทำการ สร้าง Database Name Demo collation utf8_general_ci


ให้เราเข้าไปแก้ไขใน UserTableSeeder.php

        $admin = User::create([
            'name' => 'Kraivit User',
            "email" => 'kraivit@.com',
            'password' => Hash::make('password@')
        ]);
        $employee = User::create([
            'name' => 'employee User',
            "email" => 'employee@employee.com',
            'password' => Hash::make('password@')
        ]);
        $user = User::create([
            'name' => 'User User',
            "email" => 'user@user.com',
            'password' => Hash::make('password@')
        ]);
        
$ composer i
$ composer dump-autoload
$ php artisan migrate
$ php artisan db::seed
$ php artisan serve


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# laravel-7.6.2-Authentication
