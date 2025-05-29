# 🌌 ASTRONOMY PROJECT  

## 🚀 Hướng dẫn khởi động dự án  

🔹 **Lưu ý**: Hãy clone repository vào thư mục làm việc của **Laragon (.www)** hoặc **XAMPP (.htdocs)** để chạy server.

### 🛠 Cài đặt môi trường  

```bash
1️⃣ npm install         # Cài đặt npm  
2️⃣ composer install    # Cài đặt Composer  
3️⃣ cp .env.example .env  # Sao chép file env.example thành .env  
4️⃣ npm run dev         # Biên dịch assets frontend  
5️⃣ Mở terminal mới: Ctrl + Shift + `  
6️⃣ php artisan serve  # Chạy server Laravel  
7️⃣ Mở terminal mới: Ctrl + Shift + `  
8️⃣ php artisan migrate:rollback  # Hoàn tác migration  
9️⃣ php artisan migrate           # Chạy lại migration  
🔟 php artisan db:seed            # Thêm dữ liệu mẫu  
11️⃣ Mở trình duyệt và truy cập: [http://127.0.0.1:8000/]
12️⃣ Nếu có lỗi, chọn **GENERATE APP KEY** để khắc phục.  

🔹 Khởi động môi trường Docker bằng lệnh:

    ./vendor/bin/sail up

🔄 Mở lại DevContainer

Nhấn Ctrl + Shift + P.

Chọn "Dev Containers : Rebuild and Reopen in containers"

