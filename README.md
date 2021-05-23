# 1092-WebDeveopment


## Login and logout with Session
主要介紹登入與登出，共分為三個頁面：login.php (登入表單), index.php (後台), logout.php (登出)

login.php 說明如何防範 SQL Injection。例如在表單欄位中輸入 'OR 1=1 意圖非法登入，導致 sql 變成：
$sql = "select * from users where username= ''OR 1=1' and password= ''OR 1=1' ";
透過mysqli_real_escape_string，避免攻擊者在SQL查詢命令中夾雜惡意命令，保護資料不被更動、刪除或者竊取。

登入後透過 session 紀錄。
倘若登入成功，則進入後台 (index.php)，倘若失敗則跳出帳號密碼輸入錯誤對話框。 (如下圖所示)
![image](https://user-images.githubusercontent.com/60165269/119243865-4366c400-bb9d-11eb-9d25-4b0a753b349f.png)

登入後，來到後台，會有歡迎訊息。在此一頁面，建議判斷是否有人在未登入的情形下 (沒有 session)，直接透過此一網址進入，倘若有則立刻轉回登入表單頁面。
此外，在下方提供登出連結，讓使用者決定是否登出 (logout.php)，一旦登出，則銷毀 session。

## File uploading permision
有些人透過 PHP 建置上傳檔案服務，卻發現圖片上傳，卻無法開啟，可能與權限問題有關。
建議第一次建置上船服務時，先修訂 php.ini 檔案。
1. 找尋 php.ini

![image](https://user-images.githubusercontent.com/60165269/119244045-19160600-bb9f-11eb-903b-04f23643e27a.png)
2. 修改 php.ini 的 upload_tmp_dir (記得把前方註解拿掉，並且確認原本所設定的 temp 資料夾是否有權限可以開啟，倘若該資料夾無法開啟，可另於其他定方建置 temp 資料夾，並且將upload_tmp_dir設置為該路徑位置 。 

![image](https://user-images.githubusercontent.com/60165269/119244052-1f0be700-bb9f-11eb-9af5-c4d067021161.png)
3. 重啟 Apache

![image](https://user-images.githubusercontent.com/60165269/119244073-482c7780-bb9f-11eb-8fef-3a84cf99af69.png)

上傳檔案之程式如 upload.php 所示。

