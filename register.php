<?php
require_once 'db.php'; // File này chứa mã kết nối đến CSDL

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Mã hóa mật khẩu
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Kiểm tra xem người dùng đã tồn tại chưa
    $checkUser = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $userResult = mysqli_query($conn, $checkUser);
    if (mysqli_num_rows($userResult) > 0) {
        echo "Người dùng đã tồn tại.";
    } else {
        // Thêm người dùng vào CSDL
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        if (mysqli_query($conn, $query)) {
            echo "Đăng ký thành công. <a href='login.html'>Đăng nhập</a>";
        } else {
            echo "Lỗi: " . $query . "<br>" . mysqli_error($conn);
        }
    }
}
?>
