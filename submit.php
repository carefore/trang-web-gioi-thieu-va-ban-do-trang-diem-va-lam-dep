<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];

// Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO products (name, price) VALUES ('$productName', '$productPrice')";

if ($conn->query($sql) === TRUE) {
    echo "Thêm sản phẩm thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
