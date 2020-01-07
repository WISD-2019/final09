## 首頁

<p align="center"><img src=https://imgur.com/dkosiHM ></p>

## 電影時刻表

<p align="center"><img src=https://imgur.com/Qk485fd ></p>

## 開始訂票

<p align="center"><img src=https://imgur.com/2yS7SWl ></p>
<p align="center"><img src=https://imgur.com/zFHFYta ></p>

## 後台電影管理

<p align="center"><img src=https://imgur.com/grOQvw5 ></p>
<p align="center"><img src=https://imgur.com/A6FHa58 ></p>

## 後台場次管理

<p align="center"><img src=https://imgur.com/P7ZLs8K ></p>
<p align="center"><img src=https://imgur.com/Y6YZbr0 ></p>

## 電影售票

透過此訂票網站，訪客及會員可以查看現映的電影及時刻，且提供給會員一個方便訂票的環境。

## 系統的主要功能


•	前端
判斷是客戶還是管理者(Route::get('/'))3A632077 林威震

判斷登入後才能進入預約畫面(Route::get('/reservation'))3A632077 林威震

查看電影介紹(Route::get('/'))3A632077 林威震

查看電影時刻(Route::get('/searchtime')) 3A632077 林威震

完成訂票(Route::get('/done')) 3A632077 林威震
•	後端
電影管理

新增電影Route::get('movies/create'))  3A632077 林威震

修改電影Route::patch('movies/{id}')) 3A632077 林威震

刪除電影Route::delete('movies/{id}')) 3A632077 林威震

場次管理

新增場次Route::get('sections/create'))  3A632077 林威震

刪除場次Route::delete('sections/{id}')) 3A632077 林威震

## 初始專案與DB負責的同學

初始專案 3A632077 林威震

資料庫及資料表建立、資料表關連 3A632077 林威震

## 額外使用的套件或樣板

•	前台樣板-Clean shop

-畫面供使用者使用，且使用起來方便且舒適。

•	後台樣板

-簡易操作的畫面，供管理者使用。


## 系統復原步驟
複製https://github.com/WISD-2019/final09.git 本系統在GitHub的專案，打開Source tree，點選clone後，輸入以下資料
複製 https://github.com/WISD-2019/final09.git 本系統在GitHub的專案，打開Source tree，點選clone後，輸入以下資料

Source Path:https://github.com/WISD-2019/final09.git

Destination Path:C:\wagon\uwamp\www\final09

打開cmder，切換至專案所在資料夾，cd final09

在cmder輸入以下命令，以復原此系統：

composer install

composer run‐script post‐root‐package‐install

composer run‐script post‐create‐project‐cmd

將專案打開 在.env檔案內輸入資料庫主機IP、Port、名稱、與帳密如下：

DB_HOST=127.0.0.1 DB_PORT=33060 DB_DATABASE=final09 DB_USERNAME=root DB_PASSWORD=root 在cmder輸入以下命令，將所有資料表產生至final09資料庫內

php artisan migrate 開啟UwAmp，點選PHPMyAdmin，輸入以下資料後並點擊登入，進入MySQL後，建立新資料庫，名稱為final09，將final09.sql(C:\wagon\uwamp\www\final12\database\final12.sql)匯入

資料庫系統:MYSQL 伺服器:localhost:33060 帳號:root 密碼:root 在UwAmp下，點選Apache config，選擇port 8000 ，並在Document Root 輸入{DOCUMENTPATH}/final09/public

## 系統使用帳號
前台-會員 帳號:user@gmail.com 密碼:useruser

後台-管理者 帳號:test@gmail.com 密碼:testtest

## 系統開發人員

•	3A632077 林威震

•	3A632081 梁哲嘉
