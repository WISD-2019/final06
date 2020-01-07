<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//首頁
Route::get('/', function () {
    return view('welcome');
});
//身分驗證
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//電影資訊
Route::get('/movie', 'MovieController@index')->name('movie');

//訂票
Route::get('/order', 'OrderController@index')->name('order');




//優惠公告
Route::get('cheaper',function(){
    return'
<body bgcolor="#FFF68F">
<div style="font-family: \'微軟正黑體\' ">
<h2><a href="http://localhost:8000/" target="_parent">返回首頁 </a></h2>
<br>

<h1>優惠資訊</h1>
<div style="WIDTH: 900px; text-align: left">

    <font size="5">
    <br>◎持指定信用卡一個月內單筆消費1000元(含)以上實體簽單，週一至週四(非假日)享全票票價6折優惠
    <br>◎優惠期間：109/01/01至109/06/30
    <br>◎優惠時段：週一至週四非假日

    <br>◎活動辦法：憑國泰世華KOKO(COMBO)悠遊聯名白金卡、KOKO(COMBO)icash聯名白金卡
    <br>◎一個月內同卡號之單筆消費NT$1,000元(含)以上刷卡簽單(限實體簽單，電子簽單不適用，每張簽單限單次使用)
    <br>◎刷卡購買當日電影票即享全票票價6折優惠！(含D-BOX、金鑽貴賓廳、尊爵席、ATMOS)\';  
</div>
</div>
';
});

//常見問題
Route::get('QA',function(){
    return'
<body bgcolor="#C1FFC1">
<div style="font-family: \'微軟正黑體\' ">
<h2><a href="http://localhost:8000/" target="_parent">返回首頁</a></h2>
<br>
<h1>常見問題</h1>
<div style="WIDTH: 800px; text-align: left">

<font size="5">
    <br>◎味道嗆辣濃郁食物：漢堡、披薩、滷味、油炸、燒烤食品、臭豆腐、烤玉米、章魚燒、榴槤...等味道嗆辣濃郁食物。
    <br>◎高溫熱燙食物：熱湯、熱麵、泡麵、關東煮、燒仙草、速食店蘋果派...等高溫熱燙食物。
    <br>◎食用時會發出聲響之食物：瓜子、花生、燒酒螺...等食物。

    <br>◎任何含酒精飲料。
    <br>◎若對以上禁止攜入影廳食物有爭議時，將由影城工作人員認定。
    <br>◎以上規定根據行政院新聞局【電影片映演業禁止攜帶外食定型化契約不得記載事項】規定：電影片映演業者不得為禁止消費者攜帶食物進入映演場所食用之揭示，標示或口頭告知，但『味道嗆辣、濃郁、高溫熱湯(飲)食用時會發出聲響之食物，得於映演場所明顯處揭示或標示禁止攜帶』訂定之。
    
</div>
</div>
    ';
});

//訂票成功
Route::get('OrderSuccess',function(){
    return'
<body bgcolor="#FAFAD2">
<br><br><br><br>
<div style="font-family: \'微軟正黑體\' ;text-align:center"><h1>訂票成功!</h1>
<div style="font-family: \'微軟正黑體\' ;text-align:center"><h2><a href="http://localhost:8000/" target="_parent">返回首頁</a></h2>
 </div>
    ';
});


