ASTRONOMY


|...................................HƯỚNG DẪN AE TẠO DỰ ÁN LARAVEL MỚI........................................|


BƯỚC 1: ĐẢM BẢO COMPOSER VÀ PHP ĐÃ Ở BIẾN GLOBAL BẰNG CÁCH


- php -v


- composer -v


BƯỚC 2: SỬ DỤNG LỆNH SAU ĐỂ CÀI LARAVEL VÀO MÁY TÍNH :


- composer global require laravel/installer


BƯỚC 3: SỬ DỤNG LỆNH NÀY ĐỂ CÀI ĐẶT LARAVEL VÀO FOLDER MÌNH MUỐN :


- laravel new ten-foleder


 !!!!!! LƯU Ý: TRONG LÚC CÀI LARAVEL SẼ HỎI NHỮNG CÁI NHƯ SỬ DỤNG DATABASE LOẠI NÀO HAY CÀI THÊM THƯ VIỆN GÌ THÌ HÃY CHỌN NHƯ SAU:


- Would you like to install a starter kit? [No starter kit]:


 ---------- [none ] No starter kit


 ---------- [breeze ] Laravel Breeze


 - [jetstream] Laravel Jetstream


.......... CÁI NÀY HÃY CHỌN breeze BẰNG CÁCH GHI CHỮ breeze VÀO RỒI ENTER


- Which Breeze stack would you like to install? [Blade with Alpine]:


 ----------[blade ] Blade with Alpine


 ----------[livewire ] Livewire (Volt Class API) with Alpine


 ----------[livewire-functional] Livewire (Volt Functional API) with Alpine


 ----------[react ] React with Inertia


 ----------[vue ] Vue with Inertia


 ----------[api ] API only


............ CÁI NÀY CHÚNG TA CHỌN BLADE. LÀM NHƯ CÁC TRÊN


- Would you like dark mode support?


 ----------(yes/no) [no]:


............CÁI NÀY CHỌN : YES


- Which testing framework do you prefer?


 ----------[Pest]: [0] Pest [1] PHPUnit


............CÁI NÀY CHỌN 1


- Would you like to initialize a Git repository?


 ----------(yes/no) [no]:


............CÁI NÀY CHỌN : NO


- Which database will your application use?


 ----------[SQLite]:


 ----------[sqlite ] SQLite


 ----------[mysql ] MySQL


 ----------[mariadb] MariaDB


 ----------[pgsql ] PostgreSQL (Missing PDO extension)


 ----------[sqlsrv ] SQL Server (Missing PDO extension)


................CÁI NÀY AI DÙNG XAMPP THÌ CHỌN MYSQL, AI DÙNG LARAGON THÌ CHỌN MARIADB


- Default database updated. Would you like to run the default database migrations?


 ----------(yes/no) [yes]:


............CÁI NÀY CHỌN YES


------------------HƯỚNG DẪN AE KHỞI ĐỘNG DỰ ÁN:-----------------------


Lưu ý khi sử dụng thì mở visual code lên rồi thì bấm ctrl + ` lên và làm theo các bước sau đây là:


1: npm install ( cái này để cài đặt npm )


2: composer install ( cài composer )


3: cp .env.example .env ( sao chép file env.example thành file .env)


4: npm run dev 


5: tạo 1 terminal mới bằng ctrl + shift + `


6: php artisan serve 


7: tạo 1 terminal mới bằng ctrl + shift + `


8: php artisan migrate:rollback 


9: php artisan migrate 


10: php artisan db:seed


11: lên web truy cập vào http://127.0.0.1:8000/


12: nếu nó hiện lên lỗi gì thì chỉ cần chọn generate key gì đó là xong 


|...................................HẾT........................................|