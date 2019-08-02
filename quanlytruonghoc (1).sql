-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 02, 2019 lúc 07:29 AM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlytruonghoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `MaMon` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Ky` int(10) NOT NULL,
  `DiemHeMuoi` double DEFAULT NULL,
  `DiemHeBon` double DEFAULT NULL,
  `DiemChu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiemTB` double DEFAULT NULL,
  `MaSv` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovu`
--

CREATE TABLE `giaovu` (
  `MaGv` int(50) NOT NULL,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` int(20) NOT NULL,
  `CMND` int(20) NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaKhoa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giaovu`
--

INSERT INTO `giaovu` (`MaGv`, `HoTen`, `NgaySinh`, `DiaChi`, `SDT`, `CMND`, `Email`, `MaKhoa`) VALUES
(1, 'Trần Thu Hà', '05-11-1960', 'Hà Nội', 357999999, 357864210, 'tranthuha@gmail.com', 'CNTT'),
(2, 'Trần Văn Bình', '09-10-1962', 'Hà Nam', 357888889, 357864210, 'tranvanbinh@gmail.com', 'MATH');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `k`
--

CREATE TABLE `k` (
  `MaK` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenK` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `k`
--

INSERT INTO `k` (`MaK`, `TenK`) VALUES
('66', 'Khóa 66'),
('67', 'Khóa 67'),
('68', 'Khóa 68'),
('69', 'Khóa 69');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhoa` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`) VALUES
('CNTT', 'Công Nghệ Thông Tin'),
('CTXH', 'Công Tác Xã Hội'),
('GDMN', 'Giáo Dục Mầm Non'),
('LIT', 'Ngữ Văn'),
('LS', 'Lịch Sử'),
('MATH', 'Toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichthi`
--

CREATE TABLE `lichthi` (
  `MaMon` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `GioThi` time DEFAULT NULL,
  `BuoiThi` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgayThi` date DEFAULT NULL,
  `PhongThi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SBD` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `TenLop` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`) VALUES
('01', 'A'),
('02', 'B'),
('03', 'C'),
('04', 'K');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMon` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenMon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoTinChi` int(10) DEFAULT NULL,
  `SoTiet` int(10) DEFAULT NULL,
  `KieuMonHoc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMon`, `TenMon`, `SoTinChi`, `SoTiet`, `KieuMonHoc`) VALUES
('ENG01', 'Tiếng Anh 1', 4, 60, 'Không bắt buộc'),
('ENG02', 'Tiếng Anh 2', 2, 30, 'Không bắt buộc'),
('ENG03', 'Tiếng Anh 3', 2, 30, 'Không bắt buộc'),
('ENGCN1', 'Tiếng Anh chuyên ngành 1', 3, 45, 'Bắt buộc'),
('ENGCN2', 'Tiếng Anh chuyên ngành 2', 2, 30, 'Không bắt buộc'),
('KTCN', 'Kiến tập công nghệ', 1, 15, 'Bắt buộc'),
('LTC#', 'Lập trình .NET', 3, 45, 'Bắt buộc'),
('LTC++', 'Lập trình C++', 2, 30, 'Bắt buộc'),
('LTM1', 'Lập trình mạng 1', 2, 30, 'Bắt buộc'),
('LTM2', 'Lập trình mạng 2', 2, 30, 'Không bắt buộc'),
('MMT01', 'Mạng máy tính', 3, 45, 'Bắt buộc'),
('MMT02', 'Mạng máy tính nâng cao', 2, 30, 'Bắt buộc'),
('NNHT', 'Ngôn ngữ hình thức', 3, 45, 'Bắt buộc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSv` int(50) NOT NULL,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `QuocTich` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(20) NOT NULL,
  `CMND` int(20) NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaKhoa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaK` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaLop` char(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaMon` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSv`, `HoTen`, `NgaySinh`, `GioiTinh`, `QuocTich`, `SDT`, `CMND`, `Email`, `MaKhoa`, `MaK`, `MaLop`, `MaMon`) VALUES
(6601, 'Nguyen Van A', '12-03-1998', 'Nam', 'Việt Nam', 123456789, 987654321, 'nguyenvana@gmail.com', 'CNTT', '66', '01', NULL),
(6602, 'Nguyen Van B', '14-04-1998', 'Nam', 'Việt Nam', 128456788, 987688888, 'nguyenvanb@gmail.com', 'CNTT', '67', '03', NULL),
(6603, 'Nguyen Thi C', '13-09-1998', 'Nữ', 'Việt Nam', 128459988, 987699888, 'nguyenthic@gmail.com', 'MATH', '67', '02', NULL),
(6604, 'Nguyen Thi D', '03-04-1998', 'Nữ', 'Việt Nam', 128456777, 987688877, 'nguyenthid@gmail.com', 'CNTT', '66', '04', NULL),
(6605, 'Nguyen Van E', '14-01-1998', 'Nam', 'Việt Nam', 123333788, 987333388, 'nguyenvane@gmail.com', 'CNTT', '66', '01', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `KieuUser` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `UserName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `PassWord` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MaSv` int(50) DEFAULT NULL,
  `MaGv` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID`, `KieuUser`, `UserName`, `PassWord`, `MaSv`, `MaGv`) VALUES
(1, 'SV', '6601', '6601', 6601, NULL),
(2, 'SV', '6602', '6602', 6602, NULL),
(3, 'SV', '6603', '6603', 6603, NULL),
(4, 'SV', '6604', '6604', 6604, NULL),
(5, 'SV', '6605', '6605', 6605, NULL),
(7, 'Giáo vụ', 'admin1', 'admin1', NULL, 1),
(8, 'Giáo vụ', 'admin2', 'admin2', NULL, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vanbang`
--

CREATE TABLE `vanbang` (
  `MaSv` int(50) NOT NULL,
  `SoHieuVB` int(50) DEFAULT NULL,
  `NamTotNghiep` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vanbang`
--

INSERT INTO `vanbang` (`MaSv`, `SoHieuVB`, `NamTotNghiep`) VALUES
(6601, 105, 2021),
(6602, 100, 2019),
(6603, 99, 2018),
(6604, 102, 2020),
(6605, 103, 2020);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`MaMon`),
  ADD KEY `MaSv` (`MaSv`);

--
-- Chỉ mục cho bảng `giaovu`
--
ALTER TABLE `giaovu`
  ADD PRIMARY KEY (`MaGv`),
  ADD KEY `MaKhoa` (`MaKhoa`);

--
-- Chỉ mục cho bảng `k`
--
ALTER TABLE `k`
  ADD PRIMARY KEY (`MaK`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Chỉ mục cho bảng `lichthi`
--
ALTER TABLE `lichthi`
  ADD PRIMARY KEY (`MaMon`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMon`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSv`),
  ADD KEY `MaKhoa` (`MaKhoa`),
  ADD KEY `MaK` (`MaK`),
  ADD KEY `MaLop` (`MaLop`),
  ADD KEY `MaMon` (`MaMon`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaSv` (`MaSv`),
  ADD KEY `MaGv` (`MaGv`);

--
-- Chỉ mục cho bảng `vanbang`
--
ALTER TABLE `vanbang`
  ADD PRIMARY KEY (`MaSv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giaovu`
--
ALTER TABLE `giaovu`
  MODIFY `MaGv` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `MaSv` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6606;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`MaMon`) REFERENCES `monhoc` (`MaMon`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`MaSv`) REFERENCES `sinhvien` (`MaSv`);

--
-- Các ràng buộc cho bảng `giaovu`
--
ALTER TABLE `giaovu`
  ADD CONSTRAINT `giaovu_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Các ràng buộc cho bảng `lichthi`
--
ALTER TABLE `lichthi`
  ADD CONSTRAINT `lichthi_ibfk_1` FOREIGN KEY (`MaMon`) REFERENCES `monhoc` (`MaMon`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`),
  ADD CONSTRAINT `sinhvien_ibfk_2` FOREIGN KEY (`MaK`) REFERENCES `k` (`MaK`),
  ADD CONSTRAINT `sinhvien_ibfk_3` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`),
  ADD CONSTRAINT `sinhvien_ibfk_4` FOREIGN KEY (`MaMon`) REFERENCES `monhoc` (`MaMon`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`MaSv`) REFERENCES `sinhvien` (`MaSv`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`MaGv`) REFERENCES `giaovu` (`MaGv`);

--
-- Các ràng buộc cho bảng `vanbang`
--
ALTER TABLE `vanbang`
  ADD CONSTRAINT `vanbang_ibfk_1` FOREIGN KEY (`MaSv`) REFERENCES `sinhvien` (`MaSv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
