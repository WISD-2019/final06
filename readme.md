<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# 系統的作用
線上訂票

 •  讓會員享有訂票功能
    
 •  會員擁有優惠方案
    
 •  讓使用者和會員都可以查看目前有哪些電影

# 系統的主要功能
前台

•	讓使用者註冊或登入會員Auth::routes();Route::get('/home', 'HomeController@index')->name('home'); 3A632016林芸卉

•	查詢上映電影資訊Route::get('/movie', 'MovieController@index')->name('movie');   3A632016林芸卉

•	查看常見問題Route::get('QA',function())   3A632016林芸卉

•	查看優惠方案Route::get('cheaper',function())   3A632016林芸卉

•	會員線上訂票  3A632009蘇青雅

•	會員取消訂票  3A632016林芸卉

後台

# 初始專案與DB負責的同學

•	初始專案、資料表建立   3A632016林芸卉

•	資料庫、資料表關連    3A632009蘇青雅

# 系統復原步驟

1.	複製https://github.com/WISD-2019/final06.git 本系統在GitHub的專案，打開Source tree，點選clone後，輸入以下資料
	Source Path : https://github.com/WISD-2019/final06.git
	Destination Path : C:\wagon\uwamp\www\final06
    
2.	打開cmder，切換至專案所在資料夾，cd final06

3.	在cmder輸入以下命令，以復原此系統：
	composer install
	composer run‐script post‐root‐package‐install
	composer run‐script post‐create‐project‐cmd
    
4.	將專案打開 在.env檔案內輸入資料庫主機IP、Port、名稱、與帳密如下：
	DB_HOST=127.0.0.1
	DB_PORT=33060
	DB_DATABASE=final06
	DB_USERNAME=root
	DB_PASSWORD=root
    
5.	在cmder輸入以下命令，將所有資料表產生至final06資料庫內
	php artisan migrate
    
6.	開啟UwAmp，點選PHPMyAdmin，輸入以下資料後並點擊登入，進入MySQL後，建立新資料庫，名稱為final06，將final06.sql(C:\wagon\uwamp\www\database\final06.sql)匯入
	資料庫系統：MYSQL
	伺服器：localhost:33060
	帳號：root
	密碼：root
    
7.	在UwAmp下，點選Apache config，選擇port 8000 ，並在Document Root 輸入{DOCUMENTPATH}/final06/public

# 系統使用帳號

前台-使用者

•	帳號：1234@gmail.com

•	密碼：123456789

後台-管理者

•	帳號：

•	密碼：

# 系統開發人員

•	3A632009 蘇青雅

•	3A632016 林芸卉

