<?php
require_once 'config.php';

// Hàm tạo hash mật khẩu
function createPasswordHash($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

// Hàm kiểm tra mật khẩu
function verifyPassword($password, $hashedPassword)
{
    return password_verify($password, $hashedPassword);
}

// Hàm thêm tài khoản người dùng (bao gồm admin)
function addUserAccount($name, $username, $email, $password, $role = 'user')
{
    global $conn;
    $hashed_password = createPasswordHash($password);
    $created_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO `users` (`name`, `username`, `email`, `password`, `role`) 
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sssss", $name, $username, $email, $hashed_password, $role);
        $success = $stmt->execute();
        $stmt->close();
        return $success;
    }
    return false;
}

// Hàm kiểm tra xem username hoặc email đã tồn tại chưa
function checkUserExists($username, $email)
{
    global $conn;
    $sql = "SELECT id FROM users WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $exists = $result->num_rows > 0;
        $stmt->close();
        return $exists;
    }
    return false;
}
