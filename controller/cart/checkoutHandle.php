<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT']."/model/sanpham.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['cart']) && is_array($data['cart'])) {
        $_SESSION['gioHang'] = []; // Làm mới giỏ hàng trong session
        $tongtien = 0;

        foreach ($data['cart'] as $item) {
            $CTSP = getSPById($item['id']); // Lấy thông tin sản phẩm từ DB
            $tongtien += $CTSP['gia'] * $item['quantity'];

            // Cập nhật session giỏ hàng
            $_SESSION['gioHang'][] = [
                'id' => $item['id'],
                'soLuong' => $item['quantity'],
                'ten_sp' => $CTSP['ten_sp'],
                'gia' => $CTSP['gia'],
                'anh_sp' => $CTSP['anh_sp'],
            ];
        }

        // Phản hồi thành công
        echo json_encode([
            "success" => true,
            "message" => "Dữ liệu giỏ hàng đã được cập nhật!",
            "total" => $tongtien,
        ]);
    } else {
        echo json_encode([
            "success" => false,
            "message" => "Dữ liệu không hợp lệ!",
        ]);
    }
    exit;
}
?>
