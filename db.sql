create database webbansach;
use webbansach;
CREATE TABLE tai_khoan (
    id_user INT PRIMARY KEY,
    username_cli VARCHAR(50) NOT NULL,
    password_cli VARCHAR(100) NOT NULL,
    email_cli VARCHAR(100) NOT NULL,
    ho_ten VARCHAR(100),
    avatar VARCHAR(255),
    dia_chi VARCHAR(255),
    sdt VARCHAR(15),
    role VARCHAR(20)
);

CREATE TABLE hoadon (
    id_hoa_don INT PRIMARY KEY,
    id_nguoidung INT,
    phuongthucthanhtoan VARCHAR(50),
    tinhtrang VARCHAR(50),
    tongtien DECIMAL(10, 2),
    ho_ten VARCHAR(100),
    dia_chi VARCHAR(255),
    so_dt VARCHAR(15),
    FOREIGN KEY (id_nguoidung) REFERENCES tai_khoan(id_user)
);

CREATE TABLE chitiethoadon (
    id INT PRIMARY KEY,
    id_hoadon INT,
    gia DECIMAL(10, 2),
    soluong INT,
    id_sp INT,
    FOREIGN KEY (id_hoadon) REFERENCES hoadon(id_hoa_don),
    FOREIGN KEY (id_sp) REFERENCES san_pham(id_sp)
);

CREATE TABLE binhluan (
    id INT PRIMARY KEY,
    id_sanpham INT,
    id_taikhoan INT,
    noidung TEXT,
    danhgia INT,
    ngaytao DATE,
    FOREIGN KEY (id_sanpham) REFERENCES san_pham(id_sp),
    FOREIGN KEY (id_taikhoan) REFERENCES tai_khoan(id_user)
);

CREATE TABLE kho_anh (
    id_ha INT PRIMARY KEY,
    ten_ha VARCHAR(255),
    id_sp INT,
    FOREIGN KEY (id_sp) REFERENCES san_pham(id_sp)
);

CREATE TABLE danh_muc (
    id_danh_muc INT PRIMARY KEY,
    ten_danh_muc VARCHAR(100) NOT NULL
);

CREATE TABLE san_pham (
    id_sp INT PRIMARY KEY,
    ten_sp VARCHAR(100) NOT NULL,
    gia DECIMAL(10, 2),
    the_loai VARCHAR(50),
    id_danh_muc INT,
    tac_gia VARCHAR(100),
    ngay_xb DATE,
    tinh_trang VARCHAR(50),
    FOREIGN KEY (id_danh_muc) REFERENCES danh_muc(id_danh_muc)
);

CREATE TABLE gio_hang (
    id_giohang INT PRIMARY KEY,
    id_sp INT,
    so_luong INT,
    FOREIGN KEY (id_sp) REFERENCES san_pham(id_sp)
);

CREATE TABLE voucher (
    id_voucher INT PRIMARY KEY,
    ten_voucher VARCHAR(100),
    ngay_bat_dau DATE,
    ngay_ket_thuc DATE,
    kieu_voucher VARCHAR(50),
    dieu_kien TEXT,
    so_tien_giam DECIMAL(10, 2),
    ngay_cap_nhat DATE
);
