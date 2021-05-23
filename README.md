# 1092-WebDeveopment

login and logout with Session，主要介紹登入與登出，共分為三個頁面：login.php (登入表單), index.php (後台), logout.php (登出)

login.php 說明如何透過mysqli_real_escape_string，避免攻擊者在SQL查詢命令中夾雜惡意命令，保護資料不被更動、刪除或者竊取。
登入後透過 session 紀錄。
倘若登入成功，則進入後台 (index.php)，倘若失敗則跳出帳號密碼輸入錯誤對話框。 (如下圖所示)
![image](https://user-images.githubusercontent.com/60165269/119243865-4366c400-bb9d-11eb-9d25-4b0a753b349f.png)
登入後，來到後台，會有歡迎訊息。在此一頁面，建議判斷是否有人在未登入的情形下 (沒有 session)，直接透過此一網址進入，倘若有則立刻轉回登入表單頁面。
此外，在下方提供登出連結，讓使用者決定是否登出 (logout.php)，一旦登出，則銷毀 session。
