<?php
session_start();
require_once 'db.php'; // File này chứa mã kết nối đến CSDL

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            // Đăng nhập thành công
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("location: welcome.php"); // Chuyển đến trang chào mừng
            exit;
        } else {
            $error = 'Mật khẩu không đúng.';
        }
    } else {
        $error = 'Không tìm thấy người dùng.';
    }
}

if (!empty($error)) {
    echo "<p>$error</p>";
}
?>
