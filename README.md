ASTRONOMY

<br><br><br><br><br><br><br><br>

            HƯỚNG DẪN CHO AE CLONE REPOSITORY VỀ ĐỂ KHỞI ĐỘNG DỰ ÁN         

!!!!!!  Lưu ý : Nhớ clone vào thư mục làm việc của laragon(.www) hoặc XAMPP(.htdocs) để chạy server

!!!!!!  Lưu ý : Khi sử dụng thì mở thử mục clone về bằng visual code rồi bấm ctrl + ` lên và làm theo các bước sau đây:


1:  npm install ( cái này để cài đặt npm )


2:  composer install ( cài composer )


3:  cp .env.example .env ( sao chép file env.example thành file .env)


4:  npm run dev 


5:  tạo 1 terminal mới bằng ctrl + shift + `


6:  php artisan serve 


7:  tạo 1 terminal mới bằng ctrl + shift + `


8:  php artisan migrate:rollback 


9:  php artisan migrate 


10: php artisan db:seed


11: lên web truy cập vào http://127.0.0.1:8000/


12: nếu nó hiện lên lỗi gì thì chỉ cần chọn GENERATE APP KEY là xong.

<br><br><br><br><br><br><br><br>

            CÓ THỂ SỬ DỤNG DEVCONTAINER VÀ DOCKER BẰNG LỆNH : ./vendor/bin/sail up

|..................................................................HẾT..................................................................|