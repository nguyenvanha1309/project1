-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 06:24 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlytruonghoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE `dangky` (
  `MaMon` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenMon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoTinChi` int(10) DEFAULT NULL,
  `SoTiet` int(10) DEFAULT NULL,
  `tuchon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `batbuoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaSv` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dangky`
--

INSERT INTO `dangky` (`MaMon`, `TenMon`, `SoTinChi`, `SoTiet`, `tuchon`, `batbuoc`, `MaSv`) VALUES
('MAT05', 'Đại Số', 3, 45, 'x', NULL, 6612);

-- --------------------------------------------------------

--
-- Table structure for table `giaovu`
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
-- Dumping data for table `giaovu`
--

INSERT INTO `giaovu` (`MaGv`, `HoTen`, `NgaySinh`, `DiaChi`, `SDT`, `CMND`, `Email`, `MaKhoa`) VALUES
(1, 'Trần Thu Hà', '05-11-1960', 'Hà Nội', 357999999, 357864210, 'tranthuha@gmail.com', 'CNTT'),
(2, 'Trần Văn Bình', '09-10-1962', 'Hà Nam', 357888889, 357864210, 'tranvanbinh@gmail.com', 'MATH'),
(3, 'Phạm Minh Trí', '24/04/1969', 'Hà Đông', 3556644, 1246854, 'phamminhtri@gmail.com', 'CTXH');

-- --------------------------------------------------------

--
-- Table structure for table `k`
--

CREATE TABLE `k` (
  `MaK` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenK` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `k`
--

INSERT INTO `k` (`MaK`, `TenK`) VALUES
('66', 'Khóa 66'),
('67', 'Khóa 67'),
('68', 'Khóa 68'),
('69', 'Khóa 69');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhoa` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`) VALUES
('CNTT', 'Công Nghệ Thông Tin'),
('CTXH', 'Công Tác Xã Hội'),
('MATH', 'Toán');

-- --------------------------------------------------------

--
-- Table structure for table `lichthi`
--

CREATE TABLE `lichthi` (
  `MaMon` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `GioThi` time DEFAULT NULL,
  `BuoiThi` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgayThi` date DEFAULT NULL,
  `PhongThi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SBD` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lichthi`
--

INSERT INTO `lichthi` (`MaMon`, `GioThi`, `BuoiThi`, `NgayThi`, `PhongThi`, `SBD`) VALUES
('COM01', '07:30:00', 'Sáng', '2019-08-20', 'C-408', NULL),
('COM02', '09:30:00', 'Sáng', '2019-08-21', 'C-409', NULL),
('CTX01', '07:30:00', 'Sáng', '2019-07-21', 'K-504', NULL),
('CTX02', '07:30:00', 'Sáng', '2019-07-30', 'C-310', NULL),
('MAT01', '01:30:00', 'Chiều', '2019-08-22', 'C-407', NULL),
('MAT02', '03:30:00', 'Chiều', '2019-08-24', 'C-408', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `MaLop` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `TenLop` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`) VALUES
('01', 'A'),
('02', 'B'),
('03', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMon` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenMon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoTinChi` int(10) DEFAULT NULL,
  `SoTiet` int(10) DEFAULT NULL,
  `tuchon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `batbuoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ky` int(10) NOT NULL,
  `Makhoa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMon`, `TenMon`, `SoTinChi`, `SoTiet`, `tuchon`, `batbuoc`, `Ky`, `Makhoa`) VALUES
('COM01', 'Tin học đại cương', 2, 30, NULL, 'x', 1, 'CNTT'),
('COM02', 'Lập trình C++', 3, 45, NULL, 'x', 2, 'CNTT'),
('COM03', 'Lập trình JAVA', 2, 30, NULL, 'x', 3, 'CNTT'),
('COM04', 'Lập trình C', 2, 30, NULL, 'x', 3, 'CNTT'),
('COM05', 'Lập trình Pascal', 2, 30, 'x', NULL, 1, 'CNTT'),
('COM06', 'Mạng máy tính 1', 3, 45, NULL, 'x', 3, 'CNTT'),
('COM07', 'Mạng máy tính nâng cao', 2, 30, 'x', NULL, 4, 'CNTT'),
('COM08', 'Lập trình mạng 1', 2, 30, NULL, 'x', 2, 'CNTT'),
('COM09', 'Lập trình mạng 2', 3, 45, 'x', NULL, 2, 'CNTT'),
('COM10', 'Tiếng Anh chuyên ngành 1', 2, 30, NULL, 'x', 2, 'CNTT'),
('CTX01', 'CTXH-1', 2, 30, 'x', NULL, 1, 'CTXH'),
('CTX02', 'CTXH-02', 3, 45, NULL, 'x', 1, 'CTXH'),
('CTX03', 'CTXH-03', 3, 45, NULL, 'x', 2, 'CTXH'),
('CTX04', 'CTXH-04', 2, 30, 'x', '', 3, 'CTXH'),
('CTX05', 'CTXH-05', 3, 45, NULL, 'x', 2, 'CTXH'),
('CTX06', 'CTXH-06', 2, 30, 'x', '', 3, 'CTXH'),
('CTX07', 'CTXH-07', 4, 60, NULL, 'x', 3, 'CTXH'),
('CTX08', 'CTXH-08', 2, 30, 'x', '', 4, 'CTXH'),
('CTX09', 'CTXH-09', 3, 45, NULL, 'x', 4, 'CTXH'),
('CTX10', 'CTXH-10', 4, 60, 'x', '', 3, 'CTXH'),
('MAT01', 'Giải tích 1', 3, 45, NULL, 'x', 1, 'MATH'),
('MAT02', 'Giải tích 2', 2, 30, 'x', NULL, 2, 'MATH'),
('MAT03', 'Toán cao cấp', 2, 30, NULL, 'x', 1, 'MATH'),
('MAT04', 'Hình học tuyến tính', 3, 45, NULL, 'x', 3, 'MATH'),
('MAT05', 'Đại số ', 3, 45, 'x', NULL, 4, 'MATH'),
('MAT06', 'Toán tiểu học', 3, 45, 'x', NULL, 2, 'MATH'),
('MAT07', 'Toán THCS', 4, 60, NULL, 'x', 1, 'MATH'),
('MAT08', 'Toán THPT', 4, 60, NULL, 'x', 3, 'MATH'),
('MAT09', 'Tích phân 1', 2, 30, 'x', NULL, 2, 'MATH'),
('MAT10', 'Tích phân 2', 3, 45, NULL, 'x', 3, 'MATH');

-- --------------------------------------------------------

--
-- Table structure for table `num`
--

CREATE TABLE `num` (
  `Ky` int(10) NOT NULL,
  `MaMon` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaSv` int(50) NOT NULL,
  `DiemCC` double DEFAULT NULL,
  `DiemGK` double DEFAULT NULL,
  `DiemCK` double DEFAULT NULL,
  `DiemTB` double DEFAULT NULL,
  `DiemChu` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `num`
--

INSERT INTO `num` (`Ky`, `MaMon`, `MaSv`, `DiemCC`, `DiemGK`, `DiemCK`, `DiemTB`, `DiemChu`) VALUES
(1, 'COM01', 6601, 10, 10, 10, 10, 'A'),
(1, 'COM01', 6602, 10, 10, 9, 9.4, 'A'),
(1, 'COM01', 6603, 10, 8, 8, 8.2, 'B+'),
(2, 'COM02', 6603, 10, 8, 8, 8.2, 'B+'),
(3, 'COM03', 6604, 10, 8, 7, 7.6, 'B'),
(3, 'COM03', 6601, 10, 8, 7, 7.6, 'B'),
(3, 'COM03', 6602, 10, 7, 7, 7.3, 'B'),
(2, 'COM02', 6605, 10, 6, 5, 5.8, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
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
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MaSv`, `HoTen`, `NgaySinh`, `GioiTinh`, `QuocTich`, `SDT`, `CMND`, `Email`, `MaKhoa`, `MaK`, `MaLop`, `MaMon`) VALUES
(6601, 'Nguyễn Văn Anh', '14-01-1998', 'Nam', 'Việt Nam', 123456, 123456, 'nguyenvananh@gmail.com', 'CNTT', '66', '01', NULL),
(6602, 'Nguyễn Văn Mạnh', '14-07-1998', 'Nam', 'Việt Nam', 123446, 123446, 'nguyenvanmanh@gmail.com', 'CNTT', '66', '02', NULL),
(6603, 'Nguyễn Thi Quýt', '12-07-1999', 'Nữ', 'Việt Nam', 123436, 123346, 'nguyenthiquyt@gmail.com', 'CNTT', '66', '01', NULL),
(6604, 'Nguyễn Văn Cam', '03-04-1998', 'Nam', 'Việt Nam', 3154894, 3154894, 'nguyenvancam@gmail.com', 'CNTT', '66', '03', NULL),
(6605, 'Nguyễn Văn Linh', '03-05-1998', 'Nam', 'Việt Nam', 3154864, 3154864, 'nguyenvanlinh@gmail.com', 'CNTT', '66', '02', NULL),
(6606, 'Nguyễn Thị Khánh Linh', '13-05-1999', 'Nữ', 'Việt Nam', 3132864, 3132864, 'nguyenthikhanhlinh@gmail.com', 'CNTT', '67', '02', NULL),
(6607, 'Nguyễn Nhật Khang', '26-09-1998', 'Nam', 'Việt Nam', 985246, 985246, 'khangnn@gmail.com', 'MATH', '66', '02', NULL),
(6608, 'Nguyễn Nhật Minh', '02-09-1998', 'Nam', 'Việt Nam', 985546, 9855246, 'minhnguyen@gmail.com', 'MATH', '66', '01', NULL),
(6609, 'Nguyễn Thị Hồng', '02-04-1998', 'Nữ', 'Việt Nam', 9855461, 98552461, 'hongnguyen@gmail.com', 'MATH', '66', '03', NULL),
(6610, 'Nguyễn Thị Sen', '12-04-1998', 'Nữ', 'Việt Nam', 9853451, 98345461, 'nguyếnn@gmail.com', 'CTXH', '66', '01', NULL),
(6611, 'Nguyễn Văn Quyết', '12-06-1998', 'Nam', 'Việt Nam', 9853231, 98342361, 'quyet123@gmail.com', 'CTXH', '66', '01', NULL),
(6612, 'Nguyễn Văn Hùng', '11-06-1998', 'Nam', 'Việt Nam', 9853641, 98346461, 'hunga123@gmail.com', 'CTXH', '66', '02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sukien`
--

CREATE TABLE `sukien` (
  `date` date NOT NULL,
  `tieude` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sukien`
--

INSERT INTO `sukien` (`date`, `tieude`, `noidung`, `id`) VALUES
('2019-04-26', 'Xử lí trùng lịch thi', 'Để giải quyết việc trùng lịch thi của sinh viên, nhà trường hướng dẫn Khoa và sinh viên thực hiện các công việc sau:\r\n\r\n1. Sinh viên trùng lịch thi có thể lựa chọn học phần thi môn chung hoặc môn chuyên ngành. Đối với môn chung, SV làm đơn (theo mẫu) và nộp tại P.209 - Hiệu bộ. Đối với môn chuyên ngành, sinh viên làm đơn nộp cho cán bộ giáo vụ khoa phụ trách học phần này để đăng ký thời gian thi.\r\n\r\n2. Cán bộ giáo vụ khoa tiếp nhận đơn và thông báo ngay cho sinh viên ngày giờ sinh viên được bố trí thi. Thời gian được Khoa tính toán và sắp xếp cùng thời gian với một học phần nào đó. Đề thi được sử dụng là đề thi số hai của học phần này.\r\n\r\n3. Mẫu đơn có thể tải tại đây', 1),
('2019-08-23', 'Một số thông tin về đào tạo chương trình 2', '\r\n1.Sinh viên học hết học kỳ một có thể đăng ký học thêm chương trình thứ 2, sinh viên phải đăng ký trên cổng thông tin, mục Đăng ký học chương trình 2. Sau đó đóng lệ phí xét tuyển tại khoa đăng ký học CT2.\r\n2.Mỗi năm sẽ có 2 học kỳ được đăng ký học CT2. Tùy thuộc vào điều kiện đào tạo của từng khoa, nhà trường sẽ xét duyệt chỉ tiêu cho từng ngành.\r\n3.Các học phần chung (cùng tên, cùng mã) sẽ được tự động chuyển đổi điểm từ CT1 sang CT2.\r\nCác học phần có thể chuyển đổi (Tùy thuộc vào từng ngành CT1 và CT2) và do Trưởng khoa CT2 quyết định, P.ĐT sẽ chuyển đổi điểm các học phần tương đương này.\r\n4.Sinh viên học CT2 đăng ký học cùng với SV của CT1, không phân biệt lớp tín chỉ.\r\n5.Sinh viên phải đăng ký học ở CT1, tuy nhiên có thể đăng ký tín chỉ hoặc không đăng ký môn học cho CT2\r\n6.Sinh viên CT2 được bảo lưu điểm TTSP1 và phải đi TTSP2\r\n7.Đối với CT2 ngành TA. Nếu SV học ngoại ngữ (NN) chung ở CT1 là Tiếng Anh sẽ phải học NN là Tiếng Nga, Tiếng Pháp hoặc Tiếng Trung ở CT2, nếu đã học TP, TT, TN thì được bảo lưu kết quả', 2),
('2018-08-10', 'Trắc nghiệm phong cách của bạn', 'Mỗi người có một phong cách học khác nhau, điều này ảnh hưởng trực tiếp đến kết quả học tập của bạn. Khảo sát này sẽ cho bạn biết phong cách học của bạn là gì, từ đó đưa ra lời khuyên cho bạn để bạn có thể tự điều chỉnh cách học của mình sao cho đạt hiệu quả cao nhất. Hãy điền tên đầy đủ của mình. Kết quả sẽ được thông báo cho bạn sau khi bạn hoàn thành các câu hỏi dưới đây.', 3),
('2018-07-25', 'Quy chế đào tạo ĐH, CĐ hệ chính quy theo HTTC', 'Ban hành ngày 7/12/2017>\r\nQUY CHẾ\r\n\r\nĐào tạo đại học và cao đẳng hệ chính quy\r\ntheo hệ thống tín chỉ của Trường Đại học Sư phạm Hà Nội\r\n\r\n(Ban hành kèm theo Quyết định số 9779/QĐ-ĐHSPHN-ĐT\r\n\r\nngày 07 tháng 12 năm 2017 của Hiệu trưởng trường Đại học Sư phạm Hà Nội)\r\n\r\n \r\n\r\nChương I\r\n\r\n NHỮNG QUI ĐỊNH CHUNG\r\n\r\nĐiều 1. Phạm vi điều chỉnh và đối tượng áp dụng\r\n\r\n1. Quy chế này quy định đào tạo đại học và cao đẳng hệ chính quy theo hệ thống tín chỉ, bao gồm: tổ chức đào tạo; kiểm tra và thi học phần; xét và công nhận tốt nghiệp.\r\n\r\n2. Quy chế này áp dụng đối với sinh viên các khoá đào tạo hệ chính quy ở trình độ đại học và cao đẳng trong Trường Đại học Sư phạm Hà Nội thực hiện theo hình thức tích luỹ tín chỉ.\r\n\r\nĐiều 2. Chương trình đào tạo, đề cương chi tiết học phần\r\n\r\n1. Chương trình đào tạo (sau đây gọi tắt là chương trình) quy định: trình độ đào tạo; đối tượng đào tạo, chuẩn đầu ra, điều kiện nhập học và điều kiện tốt nghiệp; mục tiêu đào tạo, chuẩn kiến thức, kỹ năng của người học khi tốt nghiệp; khối lượng kiến thức lý thuyết, thực hành, thực tập; kế hoạch đào tạo theo thời gian thiết kế; phương pháp và hình thức đào tạo; cách thức đánh giá kết quả học tập; các điều kiện thực hiện chương trình.\r\n\r\n2. Chương trình được xây dựng trên cơ sở chuẩn đầu ra và mục tiêu đào tạo được nhà trường xác định dựa trên chuẩn nghề nghiệp, yêu cầu của thị trường lao động. Mỗi chương trình gắn với một ngành (kiểu đơn ngành) hoặc với một vài ngành (kiểu song ngành, kiểu ngành chính - ngành phụ, kiểu 2 văn bằng).\r\n\r\n3. Đề cương chi tiết của từng học phần phải thể hiện rõ số lượng tín chỉ, điều kiện tiên quyết (nếu có), nội dung lý thuyết và thực hành, cách thức đánh giá học phần, giáo trình, tài liệu tham khảo và điều kiện thí nghiệm, thực hành, thực tập phục vụ học phần.\r\n\r\n4. Khối lượng kiến thức của mỗi chương trình đào tạo:\r\n\r\na) Chương trình đào tạo Đại học: từ 130 tín chỉ đến 155 tín chỉ (được quy định cụ thể trong từng chương trình đào tạo).\r\n\r\nb) Chương trình đào tạo Cao đẳng: 110 tín chỉ.\r\n\r\nĐiều 3. Học phần và Tín chỉ\r\n\r\n1. Học phần là khối lượng kiến thức tương đối trọn vẹn, thuận tiện cho sinh viên tích luỹ trong quá trình học tập. Kiến thức trong mỗi học phần gắn với một mức trình độ theo năm học thiết kế và được kết cấu riêng như một phần của môn học hoặc được kết cấu dưới dạng tổ hợp từ nhiều môn học. Mỗi học phần được kí hiệu bằng một mã số riêng do trường quy định.\r\n\r\n2. Có hai loại học phần: học phần bắt buộc và học phần tự chọn.\r\n\r\na) Học phần bắt buộc là học phần chứa đựng những nội dung kiến thức chính yếu của mỗi chương trình và bắt buộc sinh viên phải tích lũy;\r\n\r\nb) Học phần tự chọn là học phần chứa đựng những nội dung kiến thức cần thiết, nhưng sinh viên được tự chọn theo hướng dẫn của trường nhằm đa dạng hoá hướng chuyên môn hoặc được tự chọn tuỳ ý để tích luỹ đủ số tín chỉ quy định cho mỗi chương trình.         \r\n\r\n3. Tín chỉ được sử dụng để tính khối lượng học tập của sinh viên. Một tín chỉ được quy định bằng 15 tiết chuẩn, cụ thể như sau:\r\n\r\na) Một tiết chuẩn tương đương với 01 tiết lí thuyết hoặc 02 tiết bài tập, thực hành hoặc 03 tiết thảo luận. Tỉ lệ số tiết lí thuyết, bài tập, thực hành và thảo luận đối với từng học phần do Trưởng khoa đề xuất và được Hiệu trưởng phê duyệt. Các học phần khoa học Mác Lênin: thực hiện theo quy định số 52/2008/QĐ-BGDĐT ngày 18/09/2008 của Bộ Giáo dục và Đào tạo.\r\n\r\nb) Để tiếp thu 01 tín chỉ sinh viên cần 30 giờ tự học, tự nghiên cứu.\r\n\r\n4. Một tiết lên lớp được tính bằng 50 phút.\r\n\r\nĐiều 4. Thời gian hoạt động giảng dạy\r\n\r\nThời gian hoạt động giảng dạy của trường được tính từ 7 giờ đến 20 giờ hằng ngày.\r\n\r\nTuỳ theo số lượng sinh viên, số lớp học cần tổ chức và điều kiện cơ sở vật chất của trường, phòng đào tạo sắp xếp thời khóa biểu hàng ngày cho các lớp trong khoảng thời gian trên.\r\n\r\nĐiều 5. Đánh giá kết quả học tập\r\n\r\nKết quả học tập của sinh viên được đánh giá sau từng học kì qua các tiêu chí sau:\r\n\r\n1. Số tín chỉ của các học phần mà sinh viên đăng kí học vào đầu mỗi học kì (gọi tắt là khối lượng học tập đăng ký).\r\n\r\n2. Điểm trung bình chung học kì là điểm trung bình có trọng số của các học phần theo thang điểm 4 mà sinh viên đăng kí học trong học kì đó, với trọng số là số tín chỉ tương ứng của từng học phần.\r\n\r\n3. Khối lượng kiến thức tích lũy là khối lượng tính bằng tổng số tín chỉ của những học phần đã được tích lũy (đạt điểm A, B, B+, C, C+, D, D+ theo thang điểm chữ) tính từ đầu khóa học.\r\n\r\n4. Điểm trung bình chung tích lũy là điểm trung bình theo thang điểm 4 của các học phần đã được tích lũy (đạt điểm A, B, B+, C, C+, D, D+ theo thang điểm chữ) tính từ đầu khóa học cho tới thời điểm được xem xét vào lúc kết thúc mỗi học kì.\r\n\r\nChương II\r\n TỔ CHỨC ĐÀO TẠO\r\nĐiều 6. Thời gian và kế hoạch đào tạo\r\n\r\n1. Trường tổ chức đào tạo theo khoá học, năm học và học kì.\r\n\r\na) Khoá học là thời gian thiết kế để sinh viên hoàn thành một chương trình cụ thể. Khoá học được quy định như sau:\r\n\r\n- Đào tạo trình độ cao đẳng được thực hiện trong ba năm học;\r\n\r\n- Đào tạo trình độ đại học được thực hiện trong bốn năm học.\r\n\r\nb) Một năm học có hai học kì chính, mỗi học kì chính có từ 13 tuần đến 15 tuần thực học và 3 tuần thi. Ngoài hai học kỳ chính, tùy theo điều kiện cụ thể của từng năm học Hiệu trưởng xem xét quyết định tổ chức thêm một kỳ học phụ để sinh viên có điều kiện được học lại, học bù hoặc học vượt. Học kỳ phụ có ít nhất 5 tuần thực học và 1 tuần thi. Việc đăng ký học ở học kỳ phụ (nếu có) là tự nguyện và không bắt buộc đối với sinh viên.\r\n\r\nc) Thời gian và kế hoạch đào tạo được công bố cho cán bộ và sinh viên vào đầu năm học.\r\n\r\n2. Thời gian tối đa hoàn thành chương trình bao gồm: thời gian thiết kế cho chương trình quy định tại khoản 1 của Điều này cộng với 4 học kì chính.\r\n\r\nĐối với những trường hợp đặc biệt, Hiệu trưởng có thể quy định thêm thời gian tối đa cho mỗi chương trình, nhưng không vượt quá hai lần so với thời gian thiết kế cho chương trình đó.\r\n\r\nCác đối tượng được hưởng chính sách ưu tiên theo quy định tại Quy chế tuyển sinh đại học, cao đẳng hệ chính quy không bị hạn chế về thời gian tối đa để hoàn thành chương trình.\r\n\r\nĐiều 7. Đăng kí nhập học\r\n\r\n1. Khi đăng ký nhập học, sinh viên phải nộp các giấy tờ theo quy định tại Quy chế tuyển sinh đại học, cao đẳng hệ chính quy hiện hành (được ghi đầy đủ trong giấy báo nhập học). Tất cả giấy tờ khi sinh viên nhập học được xếp vào túi hồ sơ của từng cá nhân do các khoa quản lý.\r\n\r\n2. Sau khi xem xét thấy đủ điều kiện nhập học, căn cứ danh sách trúng tuyển, phòng Đào tạo tiến hành cấp cho sinh viên:\r\n\r\nThẻ sinh viên;\r\nTài liệu hướng dẫn học tập: trong đó cung cấp đầy đủ các thông tin về mục tiêu, nội dung và kế hoạch học tập của các chương trình đào tạo, quy chế đào tạo, nghĩa vụ và quyền lợi sinh viên.\r\n3. Mọi thủ tục đăng kí nhập học được hoàn thành trong thời hạn theo quy định tại Quy chế tuyển sinh đại học, cao đẳng hệ chính quy hiện hành.\r\n\r\nĐiều 8. Sắp xếp sinh viên vào học các chương trình hoặc ngành đào tạo\r\n\r\n1. Trường xác định điểm trúng tuyển theo ngành đào tạo trong kì tuyển sinh, những thí sinh trúng tuyển được trường sắp xếp vào học theo ngành đào tạo đã đăng ký.\r\n\r\n2. Trường có thể tổ chức kiểm tra một số môn như ngoại ngữ, tin học,... để phân loại trình độ, xếp lớp học các môn này và xét miễn học các học phần tương ứng cho sinh viên.\r\n\r\nĐiều 9. Tổ chức lớp học\r\n\r\nCác sinh viên khi nhập học sẽ được tổ chức thành lớp sinh hoạt và sau đó là lớp học phần.\r\n\r\n1. Lớp sinh hoạt được tổ chức theo khóa tuyển sinh của ngành đào tạo. Lớp sinh hoạt duy trì trong cả khóa học, có mã số, có hệ thống cán bộ lớp, cán bộ đoàn, hội sinh viên và cố vấn học tập riêng (tương tự như giáo viên chủ nhiệm trước đây).\r\n\r\n2. Lớp học phần được tổ chức theo từng học phần ở từng học kì. Mỗi lớp học phần có mã số lớp riêng và thời khóa biểu quy định cụ thể về thời gian, giảng đường, giảng viên đảm nhiệm…\r\n\r\nĐiều 10. Đăng kí khối lượng học tập\r\n\r\n1. Trong học kì đầu khi mới nhập học, sinh viên học theo thời khóa biểu do nhà trường sắp xếp cho từng lớp. Trong các học kì tiếp theo, sinh viên tự chọn và đăng kí các môn học phù hợp với điều kiện cá nhân với sự hướng dẫn của cố vấn học tập. Việc đăng kí các môn học được thực hiện trực tuyến trên mạng máy tính.\r\n\r\n2. Việc đăng kí học được thực hiện từ 2 tuần trước khi học kì bắt đầu. Thời điểm bắt đầu đăng kí của từng sinh viên được nhà trường công bố trên mạng máy tính. Trong 2 tuần đầu tiên của học kì chính hoặc trong tuần đầu của học kỳ phụ (nếu có) sinh viên được đăng kí thêm học phần nhưng không được rút bớt học phần đã đăng ký.\r\n\r\nSau 2 tuần kể từ khi học kì chính bắt đầu, nếu sinh viên không đăng kí học thì coi như sinh viên đã tự ý bỏ học.\r\n\r\nNếu sinh viên đăng kí không đủ khối lượng tín chỉ tối thiểu quy định ở khoản 3 điều này thì sinh viên sẽ không được tham gia học trong học kì đó và phải làm đơn để nhà trường xét nghỉ học tạm thời. Trường hợp sinh viên làm đơn mà không được nhà trường chấp nhận (do không có lí do chính đáng) hoặc không làm đơn xin nghỉ học tạm thời thì coi như tự ý bỏ học.\r\n\r\nTrường hợp số lượng sinh viên đăng kí thấp hơn số lượng tối thiểu do Trường quy định thì lớp học phần sẽ bị hủy và sinh viên phải đăng kí học lớp khác (có thể cùng hoặc khác học phần với lớp bị hủy) nếu chưa đảm bảo đủ khối lượng học tập tối thiểu cho mỗi học kì quy định tại khoản 3 Điều này.\r\n\r\nSinh viên đăng ký đi thực tập sư phạm sẽ không được đăng ký học các học phần khác trong học kỳ đó.\r\n\r\n3. Khối lượng học tập mỗi sinh viên phải đăng kí trong mỗi học kì được quy định như sau (trừ học kỳ sinh viên đăng ký đi thực tập sư phạm):\r\n\r\na) Đối với sinh viên xếp hạng học lực bình thường (quy định tại khoản 2 điều 14) phải đăng ký tối thiểu 14 tín chỉ cho mỗi học kì chính, trừ học kì cuối khóa học;\r\n\r\nb) Đối với sinh viên xếp hạng học lực yếu phải đăng kí tối thiểu 10 tín chỉ cho mỗi học kì chính, trừ học kì chính cuối khóa học và không quá 16 tín chỉ;\r\n\r\n c) Không quy định khối lượng học tập tối thiểu đối với sinh viên ở học kỳ phụ.\r\n\r\n4. Việc đăng kí các học phần sẽ học cho từng học kì phải bảo đảm điều kiện tiên quyết của từng học phần và trình tự học tập quy định tại mỗi chương trình cụ thể. Điều kiện tiên quyết của học phần là những học phần mà sinh viên phải tham gia học trước đồng thời được đánh giá đủ điều kiện được dự thi kết thúc học phần đó (xem quy định cụ thể ở mục c khoản 1 Điều 20).\r\n\r\nĐiều 11. Rút bớt học phần đã đăng ký\r\n\r\n1. Việc rút bớt học phần trong khối lượng học tập đã đăng kí được thực hiện trong tuần thứ 3 của học kỳ. Việc rút bớt học phần do sinh viên thực hiện trên mạng máy tính. Ngoài thời hạn quy định, học phần vẫn được giữ nguyên và nếu sinh viên không đi học học phần này sẽ được xem như tự ý bỏ học học phần này và phải nhận điểm F.\r\n\r\n2. Việc rút bớt học phần đã đăng kí không được vi phạm khoản 3 Điều 10 Quy chế này.\r\n\r\nĐiều 12. Học lại và học cải thiện\r\n\r\n1. Học lại\r\n\r\na) Sinh viên có học phần bắt buộc bị cấm thi (không đủ điều kiện dự thi kết thúc học phần) hoặc bị điểm F phải đăng ký học lại học phần đó ở một trong các học kì tiếp theo cho đến khi đạt điểm từ D trở lên.\r\n\r\nb) Sinh viên có học phần tự chọn bị cấm thi (không đủ điều kiện dự thi kết thúc học phần) hoặc bị điểm F phải đăng ký học lại học phần đó hoặc có thể đổi sang học phần tự chọn tương đương khác.\r\n\r\n2. Học cải thiện\r\n\r\nSinh viên được phép đăng ký học các học phần đã đạt (học phần đạt điểm D trở lên) để cải thiện điểm. Điểm chính thức của học phần là điểm cao nhất trong các lần học.\r\n\r\nĐiều 13. Nghỉ ốm\r\n\r\nSinh viên xin nghỉ ốm trong quá trình học hoặc trong đợt thi, phải viết đơn xin phép gửi trưởng khoa trong vòng một tuần kể từ ngày ốm, kèm theo giấy chứng nhận của cơ quan y tế trường, y tế địa phương hoặc của bệnh viện.\r\n\r\nĐiều 14. Xếp hạng năm đào tạo và học lực\r\n\r\n1. Sau mỗi học kì, căn cứ vào khối lượng kiến thức tích lũy, sinh viên được xếp hạng năm đào tạo như sau:\r\n\r\na) Sinh viên năm thứ nhất:\r\n\r\nNếu khối lượng kiến thức tích lũy dưới 35 tín chỉ;\r\n\r\nb) Sinh viên năm thứ hai:\r\n\r\nNếu khối lượng kiến thức tích lũy từ 35 tín chỉ đến dưới 70 tín chỉ;\r\n\r\nc) Sinh viên năm thứ ba:\r\n\r\nNếu khối lượng kiến thức tích lũy từ 70 tín chỉ trở lên đối với hệ cao đẳng; từ 70 tín chỉ đến dưới 105 tín chỉ đối với hệ đại học;\r\n\r\nd) Sinh viên năm thứ tư:\r\n\r\nNếu khối lượng kiến thức tích lũy từ 105 tín chỉ trở lên đối với hệ đại học.\r\n\r\n2. Sau mỗi học kì, căn cứ vào điểm trung bình chung tích luỹ theo Điều 23 Quy chế này, sinh viên được xếp hạng về học lực như sau:\r\n\r\na) Hạng bình thường: Nếu điểm trung bình chung tích lũy đạt từ 2,00 trở lên, gồm:\r\n\r\n- Loại xuất sắc:         Điểm trung bình chung tích lũy từ 3,60 đến 4,00;\r\n\r\n            - Loại giỏi:                Điểm trung bình chung tích lũy từ 3,20 đến 3,59;\r\n\r\n- Loại khá:                 Điểm trung bình chung tích lũy từ 2,50 đến 3,19;\r\n\r\n- Loại trung bình:     Điểm trung bình chung tích lũy từ 2,00 đến 2,49.\r\n\r\nb) Hạng yếu: Nếu điểm trung bình chung tích lũy đạt dưới 2,00 nhưng chưa rơi vào trường hợp bị buộc thôi học.\r\n\r\nĐiều 15. Nghỉ học tạm thời\r\n\r\n1. Sinh viên được quyền viết đơn gửi Hiệu trưởng xin nghỉ học tạm thời và bảo lưu kết quả đã học trong các trường hợp sau:\r\n\r\na) Được điều động vào các lực lượng vũ trang;\r\n\r\nb) Bị ốm hoặc tai nạn phải điều trị thời gian dài, nhưng phải có giấy xác nhận của Bệnh viện;\r\n\r\nc) Do không đăng kí đủ khối lượng học tập tối thiểu trong một học kì.\r\n\r\nd) Vì nhu cầu cá nhân. Trường hợp này, sinh viên phải học ít nhất một học kì ở trường, không rơi vào các trường hợp bị buộc thôi học quy định tại Điều 16 của Quy chế này và phải đạt điểm trung bình chung tích lũy không dưới 2,00. Thời gian nghỉ học tạm thời vì nhu cầu cá nhân phải được tính vào thời gian học chính thức quy định tại khoản 2 Điều 6 của Quy chế này.\r\n\r\n2. Sinh viên nghỉ học tạm thời, khi muốn trở lại học tiếp tại trường, phải viết đơn nộp tại khoa đào tạo 3 tuần trước khi bắt đầu học kì mới .\r\n\r\nĐiều 16. Bị buộc thôi học\r\n\r\n1. Cảnh báo kết quả học tập được thực hiện theo từng học kỳ, nhằm giúp cho sinh viên có kết quả học tập kém biết và lập phương án học tập thích hợp để có thể tốt nghiệp trong thời hạn tối đa được phép theo học chương trình. Sinh viên thuộc diện bị cảnh báo kết quả học tập nếu rơi vào một trong các trường hợp sau:\r\n\r\na) Có điểm trung bình chung tích lũy đạt dưới 1,20 đối với sinh viên năm thứ nhất; dưới 1,40 đối với sinh viên năm thứ hai; dưới 1,60 đối với sinh viên năm thứ ba hoặc dưới 1,80 đối với sinh viên các năm tiếp theo và cuối khoá;\r\n\r\nb) Có điểm trung bình chung học kì đạt dưới 0,80 đối với học kì đầu của khóa học; đạt dưới 1,00 đối với các học kì tiếp;\r\n\r\nc) Tổng số tín chỉ của các học phần bị điểm F còn tồn đọng tính từ đầu khoá học đến thời điểm xét vượt quá 24 tín chỉ.\r\n\r\n2. Sau mỗi học kỳ, sinh viên bị buộc thôi học nếu thuộc một trong những trường hợp sau đây:\r\n\r\na) Có số lần cảnh báo kết quả học tập vượt quá 3 lần hoặc 2 lần liên tiếp;\r\n\r\nb) Vượt quá thời gian tối đa được phép học tại trường quy định tại khoản 2 Điều 6 Quy chế này; \r\n\r\nc) Tự ý bỏ học;\r\n\r\nd) Bị kỉ luật lần thứ hai vì lí do đi thi hộ hoặc nhờ người thi hộ theo quy định tại khoản 2 Điều 29 của Quy chế này hoặc bị kỉ luật ở mức xoá tên khỏi danh sách sinh viên của trường.\r\n\r\n3. Trong thời hạn một tháng sau khi sinh viên có quyết định buộc thôi học, Trường thông báo quyết định đó cho gia đình và địa phương nơi sinh viên có hộ khẩu thường trú.\r\n\r\nTrường hợp tại thời điểm đó nhà trường có các chương trình đào tạo ở trình độ thấp hơn hoặc chương trình giáo dục thường xuyên tương ứng thì những sinh viên thuộc diện bị buộc thôi học được quy định tại các điểm a, b khoản 2 Điều này có thể làm đơn xin xét chuyển sang học các chương trình đó. Hiệu trưởng xem xét và quyết định đối với từng trường hợp cụ thể.\r\n\r\nSinh viên thuộc diện bị buộc thôi học được quy định tại các điểm a, b khoản 2 Điều này được xin chuyển sang học ở các trường khác có chương trình đào tạo ở trình độ thấp hơn hoặc chương trình giáo dục thường xuyên tương ứng.\r\n\r\nĐiều 17. Học cùng lúc hai chương trình\r\n\r\n1. Học cùng lúc hai chương trình dành cho sinh viên có đủ điều kiện theo quy định tại khoản 2 Điều này và có nhu cầu đăng ký học thêm một chương trình thứ hai để khi tốt nghiệp được cấp hai văn bằng.\r\n\r\n2. Điều kiện để học cùng lúc hai chương trình:\r\n\r\na) Ngành đào tạo chính ở chương trình thứ hai phải khác ngành đào tạo chính ở chương trình thứ nhất;\r\n\r\nb) Sau khi đã kết thúc học kỳ thứ nhất năm học đầu tiên của chương trình thứ nhất và sinh viên không thuộc diện xếp hạng học lực yếu;\r\n\r\nc) Trong quá trình sinh viên học cùng lúc hai chương trình, nếu điểm trung bình chung học kỳ đạt dưới 2,00 thì phải dừng học thêm chương trình thứ hai ở học kỳ tiếp theo;\r\n\r\n3. Thời gian tối đa được phép học đối với sinh viên học cùng lúc hai chương trình là thời gian tối đa quy định cho chương trình thứ nhất, quy định tại khoản 2 Điều 6 của Quy chế này. Khi học chương trình thứ hai, sinh viên được bảo lưu điểm của những học phần có nội dung và khối lượng kiến thức tương đương có trong chương trình thứ nhất.\r\n\r\n4. Sinh viên chỉ được xét tốt nghiệp chương trình thứ hai, nếu có đủ điều kiện tốt nghiệp ở chương trình thứ nhất.\r\n\r\nĐiều 18. Chuyển trường\r\n\r\n1. Sinh viên được xét chuyển trường nếu có các điều kiện sau đây:\r\n\r\na) Trong thời gian học tập, nếu gia đình chuyển nơi cư trú hoặc sinh viên có hoàn cảnh khó khăn, cần thiết phải chuyển đến trường gần nơi cư trú của gia đình để thuận lợi trong học tập;\r\n\r\nb) Xin chuyển đến trường có cùng ngành hoặc thuộc cùng nhóm ngành với ngành đào tạo mà sinh viên đang học;\r\n\r\nc) Được sự đồng ý của Hiệu trưởng trường xin chuyển đi và trường xin chuyển đến.\r\n\r\n2. Sinh viên không được phép chuyển trường trong các trường hợp sau:\r\n\r\na) Sinh viên đã tham dự kì thi tuyển sinh theo đề thi chung, nhưng không trúng tuyển vào trường hoặc có kết quả thi thấp hơn điểm trúng tuyển của trường xin chuyển đến;\r\n\r\nb) Sinh viên năm thứ nhất và năm cuối khóa;\r\n\r\nc) Sinh viên đang trong thời gian bị kỉ luật từ cảnh cáo trở lên.\r\n\r\n3. Thủ tục chuyển trường:\r\n\r\na) Sinh viên xin chuyển trường phải làm hồ sơ xin chuyển trường theo quy định của nhà trường;\r\n\r\nb) Hiệu trưởng trường mà sinh viên xin chuyển đến quyết định tiếp nhận hoặc không tiếp nhận; quyết định việc học tập tiếp tục của sinh viên, công nhận các học phần mà sinh viên chuyển đến được chuyển đổi kết quả và số học phần phải học bổ sung, trên cơ sở so sánh chương trình ở trường sinh viên xin chuyển đi và trường xin chuyển đến.\r\n\r\nChương III\r\n\r\nKIỂM TRA VÀ THI HỌC PHẦN\r\n\r\nĐiều 19.  Đánh giá học phần\r\n\r\n1. Đối với các học phần chỉ có lí thuyết hoặc có cả lí thuyết và thực hành: điểm tổng hợp đánh giá học phần (sau đây gọi tắt là điểm học phần) được tính căn cứ vào các điểm đánh giá bộ phận sau:\r\n\r\n- Điểm chuyên cần;\r\n\r\n- Điểm kiểm tra bộ phận, bao gồm: điểm kiểm tra thường xuyên trong quá trình học tập; điểm đánh giá nhận thức và thái độ tham gia thảo luận; điểm đánh giá phần thực hành; điểm thi giữa học phần; điểm tiểu luận;\r\n\r\n- Điểm thi kết thúc học phần.\r\n\r\nViệc lựa chọn các hình thức kiểm tra bộ phận và trọng số các điểm kiểm tra bộ phận do giảng viên đề xuất, được Hiệu trưởng phê duyệt và được quy định trong đề cương chi tiết của học phần.\r\n\r\n2. Đối với các học phần thực hành: Sinh viên phải tham dự đầy đủ các bài thực hành. Điểm trung bình cộng của điểm các bài thực hành trong học kì được làm tròn đến một chữ số thập phân là điểm của học phần thực hành.\r\n\r\n3. Giảng viên phụ trách học phần trực tiếp ra đề thi, đề kiểm tra và cho điểm đánh giá bộ phận, trừ bài thi kết thúc học phần.\r\n\r\nĐiều 20. Tổ chức kì thi kết thúc học phần\r\n\r\n1. Cuối mỗi học kì, Nhà trường tổ chức một kì thi để thi kết thúc học phần.\r\n\r\n2. Thời gian dành cho ôn thi mỗi học phần tỉ lệ thuận với số tín chỉ của học phần đó và được tính là 2/3 ngày cho một tín chỉ. Hiệu trưởng quy định cụ thể thời gian dành cho ôn thi và thời gian thi cho các kì thi.\r\n\r\n3. Điều kiện được dự thi kết thúc học phần:\r\n\r\nĐiểm chuyên cần: ≥ 5\r\nĐiểm kiểm tra bộ phận: ≥ 3\r\n4. Sinh viên vắng mặt trong kì thi kết thúc học phần, nếu không có lí do chính đáng coi như bỏ thi và phải nhận điểm 0. Sinh viên vắng mặt có lí do chính đáng nếu được Trưởng khoa cho phép sẽ phải đăng ký và dự thi ở kì thi ngay sau đó.\r\n\r\nĐiều 21. Ra đề thi, hình thức thi, chấm thi\r\n\r\n1. Đề thi kết thúc học phần phải phù hợp với nội dung học phần đã quy định trong chương trình. Việc ra đề thi hoặc lấy từ ngân hàng đề thi được thực hiện theo quy định của Hiệu trưởng. Trưởng khoa tổ chức ra đề thi hoặc lấy từ ngân hàng đề thi đối với các học phần do khoa chịu trách nhiệm.\r\n\r\n2. Hình thức thi kết thúc học phần có thể là thi viết (trắc nghiệm hoặc tự luận), vấn đáp, viết tiểu luận, làm bài tập lớn, hoặc kết hợp giữa các hình thức trên. Hiệu trưởng duyệt các hình thức thi thích hợp cho từng học phần.\r\n\r\n3. Việc chấm thi kết thúc các học phần chỉ có lí thuyết và việc chấm tiểu luận, bài tập lớn phải do hai giảng viên đảm nhiệm. Trưởng khoa tổ chức chấm thi kết thúc học phần tại khoa đối với các học phần do khoa tổ chức thi. Trưởng phòng Đào tạo tổ chức chấm thi kết thúc học phần đối với các học phần do phòng tổ chức thi. Việc tổ chức làm phách bài thi trước khi chấm thi phải đảm bảo tuyệt đối  tính bảo mật. Thời hạn hoàn thành chấm thi học phần và công bố kết quả không quá 7 ngày kể từ ngày thi. Thời gian lưu giữ các bài thi viết, tiểu luận, bài tập lớn (tại khoa đối với các học phần do khoa tổ chức thi và tại phòng Đào tạo đối với các học phần do phong Đào tạo tổ chức thi) ít nhất là hai năm, kể từ ngày thi hoặc ngày nộp tiểu luận, bài tập lớn.\r\n\r\n4. Thi vấn đáp kết thúc học phần phải do hai giảng viên thực hiện. Điểm thi vấn đáp được công bố công khai sau mỗi buổi thi. Trong trường hợp hai giảng viên chấm thi không thống nhất được điểm chấm thì các giảng viên chấm thi trình trưởng bộ môn hoặc trưởng khoa quyết định.\r\n\r\n5. Các điểm đánh giá bộ phận và điểm học phần phải được ghi vào bảng điểm theo mẫu thống nhất của nhà trường và làm thành 03 bản. Một bản lưu tại bộ môn, một bản gửi về văn phòng khoa và một bản gửi về phòng đào tạo của trường, chậm nhất một tuần sau khi kết thúc chấm thi học phần.\r\n\r\nĐiều 22. Cách tính điểm đánh giá bộ phận, điểm học phần\r\n\r\n1. Điểm kiểm tra bộ phận và điểm thi kết thúc học phần được chấm theo thang điểm 10 (từ 0 đến 10), làm tròn đến một chữ số thập phân.\r\n\r\n2. Điểm chuyên cần chỉ có 3 mức là 0 hoặc 5 hoặc 10.\r\n\r\n3. Điểm học phần là tổng điểm của tất cả các điểm đánh giá bộ phận của học phần nhân với trọng số tương ứng.\r\n\r\nTrọng số các điểm đánh giá bộ phận được quy định như sau:\r\n\r\n- Điểm chuyên cần: 0,1;\r\n\r\n- Điểm kiểm tra bộ phận: 0,3;\r\n\r\n- Điểm thi kết thúc học phần: 0,6;\r\n\r\nĐiểm học phần làm tròn đến một chữ số thập phân, sau đó được chuyển thành điểm chữ như sau:\r\n\r\na) Loại đạt:\r\n\r\nGiỏi:                           Điểm A: Từ 8,5 đến 10\r\n\r\nKhá:                            Điểm B+: Từ 7,8 đến 8,4;                Điểm B: Từ 7,0 đến 7.7\r\n\r\nTrung bình:               Điểm C+: Từ 6,3 đến 6,9                 Điểm C: Từ 5,5 đến 6,2\r\n\r\nTrung bình yếu:        Điểm D+: Từ 4,8 đến 5,4                 Điểm D: Từ 4,0 đến 4,7\r\n\r\nb) Loại không đạt: F (dưới 4,0)                  Kém\r\n\r\nc) Đối với những học phần chưa đủ cơ sở để đưa vào tính điểm trung bình chung học kì, khi xếp mức đánh giá được sử dụng các kí hiệu sau:\r\n\r\n                             I      Chưa đủ dữ liệu đánh giá\r\n\r\n                             X    Chưa nhận được kết quả thi.\r\n\r\nd) Đối với những học phần được nhà trường cho phép chuyển điểm, khi xếp mức đánh giá được sử dụng kí hiệu R viết kèm với kết quả.\r\n\r\n3. Việc xếp loại các mức điểm A, B+,B, C+,C, D+,D được áp dụng cho các trường hợp sau đây:\r\n\r\n           a) Đối với những học phần mà sinh viên đã có đủ điểm đánh giá bộ phận, kể cả trường hợp bỏ học, bỏ kiểm tra hoặc bỏ thi không có lí do phải nhận điểm 0;\r\n\r\n           b) Chuyển đổi từ mức điểm I qua, sau khi đã có các kết quả đánh giá bộ phận mà trước đó sinh viên được giảng viên cho phép nợ;\r\n\r\n          c) Chuyển đổi từ các trường hợp X qua.\r\n\r\n4. Việc xếp loại ở mức điểm F ngoài những trường hợp như đã nêu ở khoản 3 Điều này, còn áp dụng cho trường hợp sinh viên vi phạm nội quy thi, có quyết định phải nhận mức điểm F.\r\n\r\n5. Việc xếp loại theo mức điểm I được áp dụng cho các trường hợp sau đây:\r\n\r\na) Trong thời gian học hoặc trong thời gian thi kết thúc học kì, sinh viên bị ốm hoặc tai nạn không thể dự kiểm tra hoặc thi, nhưng phải được trưởng khoa cho phép;\r\n\r\nb) Sinh viên không thể dự kiểm tra bộ phận hoặc thi vì những lí do khách quan, được trưởng khoa chấp thuận.\r\n\r\nTrừ các trường hợp đặc biệt do Hiệu trưởng quy định, trước khi bắt đầu học kì mới kế tiếp, sinh viên nhận mức điểm I phải trả xong các nội dung kiểm tra bộ phận còn nợ để được chuyển điểm. Trường hợp sinh viên chưa trả nợ và chưa chuyển điểm nhưng không rơi vào trường hợp bị buộc thôi học thì vẫn được học tiếp ở các học kì kế tiếp.\r\n\r\n6. Việc xếp loại theo mức điểm X được áp dụng đối với những học phần mà phòng đào tạo của trường chưa nhận được báo cáo kết quả học tập của sinh viên từ khoa chuyển lên.\r\n\r\n7. Kí hiệu R được áp dụng cho các trường hợp sau:\r\n\r\na) Điểm học phần được đánh giá ở các mức điểm A, B+,B, C+,C, D+,D trong đợt đánh giá học kì (nếu có) đối với một số học phần được phép thi sớm để giúp sinh viên học vượt;\r\n\r\nb) Những học phần được công nhận kết quả, khi sinh viên chuyển từ trường khác đến hoặc chuyển đổi giữa các chương trình.\r\n\r\n   Điều 23. Cách tính điểm trung bình chung\r\n\r\n1. Để tính điểm trung bình chung học kỳ và điểm trung bình chung tích lũy, mức điểm chữ của mỗi học phần phải được quy đổi qua điểm số như sau:\r\n\r\nA         tương ứng với                        4\r\n\r\nB+       tương ứng với                        3,5\r\n\r\nB         tương ứng với                        3\r\n\r\nC+       tương ứng với                        2,5\r\n\r\nC         tương ứng với                        2\r\n\r\nD+       tương ứng với                        1,5\r\n\r\nD         tương ứng với                        1\r\n\r\nF          tương ứng với                        0\r\n\r\n2. Điểm trung bình chung học kì và điểm trung bình chung tích lũy được tính theo công thức sau và được làm tròn đến 2 chữ số thập phân:    \r\n\r\n                                       \r\n\r\n   Trong đó:\r\n\r\nA là điểm trung bình chung học kì hoặc điểm trung bình chung tích lũy\r\n\r\n   ai  là điểm của học phần thứ i\r\n\r\n   ni  là số tín chỉ của học phần thứ i\r\n\r\n   n  là tổng số học phần.\r\n\r\n   Điểm trung bình chung học kì để xét học bổng, khen thưởng sau mỗi học kì chỉ tính theo kết quả thi kết thúc học phần ở lần thi thứ nhất. Điểm trung bình chung học kì và điểm trung bình chung tích lũy để xét thôi học, xếp hạng học lực sinh viên và xếp hạng tốt nghiệp được tính theo điểm thi kết thúc học phần cao nhất trong các lần thi.\r\n\r\n \r\n\r\nChương IV\r\n\r\nXÉT VÀ CÔNG NHẬN TỐT NGHIỆP\r\n\r\n   Điều 24. Khoá luận tốt nghiệp, học phần chuyên môn thay thế khoá luận tốt nghiệp\r\n\r\nTrước khi tốt nghiệp, sinh viên phải đăng kí làm khoá luận tốt nghiệp hoặc học một số học phần chuyên môn theo quy định sau:\r\n\r\n1) Khoá luận tốt nghiệp: Áp dụng cho sinh viên có điểm trung bình chung tích lũy đạt từ 2,5 trở lên. Trưởng khoa căn cứ tình hình cụ thể của khoa mình để quy định thêm các điều kiện cho sinh viên được làm khóa luận tốt nghiệp.\r\n\r\n2) Học và thi một số học phần chuyên môn: Sinh viên không làm khoá luận tốt nghiệp phải đăng kí học một số học phần chuyên môn để thay thế sao cho tổng số tín chỉ của các học phần chuyên môn không thấp hơn số tín chỉ của khoá luận tốt nghiệp.\r\n\r\nĐiều 25. Chấm khoá luận tốt nghiệp\r\n\r\n1. Hình thức chấm khóa luận tốt nghiệp: Sinh viên phải bảo vệ khóa luận tốt nghiệp trước Hội đồng chấm khóa luận tốt nghiệp. Mỗi Hội đồng ít nhất có 3 thành viên do Hiệu trưởng quyết định. Mỗi khóa luận tốt nghiệp có 1 người phản biện và là thành viên của Hội đồng.\r\n\r\nĐối với các ngành đào tạo đặc thù, trưởng khoa đề xuất hình thức chấm và được Hiệu trưởng phê duyệt.\r\n\r\n2. Điểm của khoá luận tốt nghiệp được chấm theo thang điểm 10 sau đó quy đổi sang thang điểm chữ theo quy định tại các mục a và b, khoản 2, Điều 22 của Quy chế này. Kết quả chấm khóa luận tốt nghiệp được công bố chậm nhất là 3 ngày kể từ ngày sinh viên bảo vệ trước hội đồng.\r\n\r\nĐiểm khoá luận tốt nghiệp được tính vào điểm trung bình chung tích lũy của toàn khoá học.\r\n\r\n3. Sinh viên có khoá luận tốt nghiệp bị điểm F, phải đăng kí làm lại khóa luận tốt nghiệp; hoặc phải đăng kí học một số học phần chuyên môn để thay thế theo quy định tại điểm b khoản 1 Điều 24 Quy chế này.\r\n\r\nĐiều 26. Thực tập sư phạm và thực tập cuối khóa\r\n\r\n- Thực tập sư phạm (đối với các chương trình đào tạo cử nhân sư phạm):\r\n\r\n+ Khối lượng kiến thức tích lũy là 6 tín chỉ và được thực hiện trong 10 tuần và diễn ra trong 1 học kỳ.\r\n\r\n+ Nội dung thực tập sư phạm gồm 2 phần: Thực tập sư phạm 1 và Thực tập sư phạm 2; mỗi phần có khối lượng kiến thức tích lũy là 3 tín chỉ và được thực hiện trong 5 tuần.\r\n\r\n+ Những sinh viên học cùng lúc 2 chương trình mà chương trình thứ nhất và thứ 2 đều thuộc các ngành sư phạm được miễn Thực tập sư phạm 1 trong chương trình thứ 2 và kết quả đánh giá của nội dung này đối với chương trình thứ 2 được bảo lưu từ kết quả Thực tập sư phạm 1 ở  chương trình thứ nhất. Điều kiện để được đi thực tập đối với nội dung thực tập sư phạm ở chương trình thứ 2 của những sinh viên này là đạt đủ các điều kiện tiên quyết quy định trong chương trình đào tạo thứ 2 và hoàn thành xong nội dung thực tập sư phạm ở chương trình đào tạo thứ nhất.\r\n\r\n+ Nhà trường có quy định riêng về nội dung này.\r\n\r\n- Thực tập cuối khóa: Trong một số chương trình đào tạo có quy định thực tập cuối khóa, khối lượng kiến thức tích lũy và nội dung thực tập được quy định cụ thể trong từng chương trình đào tạo.\r\n\r\nĐiều 27. Điều kiện xét tốt nghiệp và công nhận tốt nghiệp\r\n\r\n1. Những sinh viên có đủ các điều kiện sau thì được trường xét và công nhận tốt nghiệp:\r\n\r\na) Cho đến thời điểm xét tốt nghiệp không bị truy cứu trách nhiệm hình sự hoặc không đang trong thời gian bị kỉ luật ở mức đình chỉ học tập;\r\n\r\nb) Tích lũy đủ số học phần bắt buộc và đủ số tín chỉ tối thiểu quy định cho chương trình đào tạo.\r\n\r\nc) Điểm trung bình chung tích lũy của toàn khóa học đạt từ 2,00 trở lên;\r\n\r\nd) Có chứng chỉ giáo dục quốc phòng và an ninh đối với các ngành đào tạo không chuyên về quốc phòng và an ninh và có chứng chỉ giáo dục thể chất đối với các ngành không chuyên về thể dục - thể thao;\r\n\r\ne) Đạt chuẩn đầu ra về năng lực ngoại ngữ theo quy định của trường (đối với sinh viên từ khóa K66 trở về sau)\r\n\r\nf) Có đơn gửi Phòng đào tạo đề nghị được xét tốt nghiệp trong trường hợp đủ điều kiện tốt nghiệp sớm hoặc muộn so với thời gian thiết kế của khoá học.\r\n\r\n2. Sau mỗi học kì, Hội đồng xét tốt nghiệp căn cứ các điều kiện công nhận tốt nghiệp quy định tại khoản 1 Điều này để lập danh sách những sinh viên đủ điều kiện tốt nghiệp.\r\n\r\nHội đồng xét tốt nghiệp trường do Hiệu trưởng hoặc Phó Hiệu trưởng được Hiệu trưởng uỷ quyền làm Chủ tịch, Trưởng phòng Đào tạo làm Thư kí và các thành viên là các trưởng khoa chuyên môn, trưởng phòng Công tác chính trị và học sinh sinh viên.\r\n\r\n3. Căn cứ đề nghị của Hội đồng xét tốt nghiệp, Hiệu trưởng kí quyết định công nhận tốt nghiệp cho những sinh viên đủ điều kiện tốt nghiệp.\r\n\r\nĐiều 28. Cấp bằng tốt nghiệp, bảo lưu kết quả học tập, chuyển chương trình đào tạo và chuyển loại hình đào tạo           \r\n\r\n1. Bằng tốt nghiệp đại học, cao đẳng được cấp theo ngành đào tạo chính (đơn ngành hoặc song ngành) cho những sinh viên được công nhận tốt nghiệp. Hạng tốt nghiệp được xác định theo điểm trung bình chung tích lũy của toàn khoá học, như sau:\r\n\r\na) Loại xuất sắc:         Điểm trung bình chung tích lũy từ 3,60 đến 4,00;\r\n\r\nb) Loại giỏi:               Điểm trung bình chung tích lũy từ 3,20 đến 3,59;\r\n\r\nc) Loại khá:                 Điểm trung bình chung tích lũy từ 2,50 đến 3,19;\r\n\r\nd) Loại trung bình:   Điểm trung bình chung tích lũy từ 2,00 đến 2,49.\r\n\r\n2. Hạng tốt nghiệp của những sinh viên có kết quả học tập toàn khoá loại xuất sắc và giỏi sẽ bị giảm đi một mức nếu bị kỉ luật từ mức cảnh cáo trở lên trong thời gian học.\r\n\r\n3. Kết quả học tập của sinh viên được ghi vào bảng điểm theo từng học phần. Trong bảng điểm phải ghi chuyên ngành (hướng chuyên sâu) hoặc ngành phụ (nếu có).\r\n\r\n4. Sinh viên còn nợ chứng chỉ: chứng chỉ ngoại ngữ (đối với sinh viên từ K66 trở về sau Nhà trường quy định cụ thể thêm chuẩn đầu ra về năng lực ngoại ngữ), chứng chỉ giáo dục quốc phòng và an ninh, chứng chỉ Giáo dục thể chất nhưng đã hết thời gian tối đa được phép học, trong thời hạn 5 năm tính từ ngày phải ngừng học, được trở về trường trả nợ đối với chứng chỉ này để có đủ điều kiện xét tốt nghiệp.\r\n\r\n5. Sinh viên không tốt nghiệp được cấp giấy chứng nhận về các học phần đã học trong chương trình của trường. Những sinh viên này nếu có nguyện vọng, được quyền làm đơn xin chuyển qua các chương trình khác theo quy định tại Điều 16 và Điều 18 Quy chế này.  \r\n\r\nChương V\r\n\r\nXỬ LÍ VI PHẠM\r\n\r\n   Điều 29. Xử lí kỉ luật đối với sinh viên vi phạm các quy định về thi, kiểm tra\r\n\r\n1. Trong khi dự kiểm tra thường xuyên, chuẩn bị tiểu luận, bài tập lớn, thi giữa học phần, thi kết thúc học phần, chuẩn bị khoá luận tốt nghiệp, nếu vi phạm các quy định về thi và kiểm tra, sinh viên sẽ bị xử lí kỉ luật với từng học phần đã vi phạm.\r\n\r\n2. Sinh viên đi thi hộ hoặc nhờ người khác thi hộ, đều bị kỉ luật ở mức đình chỉ học tập một năm đối với trường hợp vi phạm lần thứ nhất và buộc thôi học đối với trường hợp vi phạm lần thứ hai.\r\n\r\n3. Trừ trường hợp như quy định tại khoản 2 của Điều này, mức độ sai phạm và khung xử lí kỉ luật đối với sinh viên vi phạm được thực hiện theo các quy định của Quy chế tuyển sinh đại học, cao đẳng hệ chính quy.', 4),
('2018-04-25', 'Quy định Chuyển đổi điểm/miễn học, miễn thi NN, quy đổi NN tương đương', 'Sinh viên có nguyện vọng đăng ký chuyển điểm ngoại ngữ (theo tinh thần công văn số 385/ĐHSPHN-ĐT ngày 22/8/2016) có thể làm đơn theo mẫu sau:\r\n1. Tải mẫu đơn\r\n2. Hoàn thành đơn, in và xin xác nhận của BCN khoa/bộ môn ngoại ngữ (Tiếng Anh - Tầng 1 nhà D3, Tiếng Nga, Tiếng Trung, Tiếng Pháp - Tầng 8 nhà V,)\r\n3. Nộp về phòng Đào tạo (P.209 - Hiệu bộ)', 5);

-- --------------------------------------------------------

--
-- Table structure for table `thongbao`
--

CREATE TABLE `thongbao` (
  `tieude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thongbao`
--

INSERT INTO `thongbao` (`tieude`, `noidung`, `id`) VALUES
('Mức thu và thời gian thu học phí học kỳ 3 năm học 2018-2019', 'Thời gian nộp học phí: Từ 18/07/2019 đến 29/07/2019\r\n* Sau thời gian trên, những sinh viên chưa nộp đủ học phí (kể cả học phí của các kỳ trước) sẽ không được tham gia dự thi tất cả các môn thi của HK3/2018-2019.\r\n\r\n** Nhà trường chỉ thu học phí 1 đợt duy nhất và sẽ không giải quyết bất cứ trường hợp nộp học phí không đúng hạn nào của sinh viên. \r\n\r\nTrường Đại học Sư phạm Hà Nội quy định mức thu và thời gian thu học phí học kỳ 3 năm học 2018-2019 như sau:\r\n\r\nI. Định mức học phí (theo tín chỉ) hệ đào tạo đai học  như sau:\r\n\r\nCác ngành khoa học xã hội:                                               250.000đ/tín chỉ\r\n\r\nCác ngành khoa học tự nhiên, TDTT, nghệ thuật:              300.000đ/tín chỉ\r\n\r\n    Định mức này được áp dụng chung cho tất cả các hệ đào tạo đại học chính quy bao gồm:\r\n\r\n - Hệ cử nhân ngoài sư phạm\r\n\r\n - Học chương trình thứ hai\r\n\r\n - Học lại và học cải thiện của sinh viên hệ sư phạm\r\n                                                          \r\nII. Hướng dẫn nộp tiền qua ngân hàng:\r\n\r\nKhi đến giao dịch tại ngân hàng (hoặc chuyển khoản qua mạng) sinh viên thực hiện cú pháp sau:\r\n\r\n          Tên người hưởng: Truong Dai Hoc Su Pham Ha Noi\r\n\r\n     Số tài khoản:         3100201025091\r\n\r\n     Tại ngân hàng: Agribank, Chi nhanh Tu Liem, Ha Noi\r\n\r\n      Số tiền:            \r\n\r\n      Nội dung: 675105095 Nguyen Van A nop tien HK3\r\n\r\n                       mã số SV        họ và tên                \r\n\r\nVí dụ cụ thể:\r\n\r\nSinh viên Nguyễn Văn A, khoa CNTT, mã sinh viên 675105095 muốn nộp học phí của HK3/18-19, với số tín chỉ là 25 tín (bao gồm 3 tín chỉ học lại ngành Sư phạm Tin học và 22 tín chỉ học Chương trình 2 ngành Giáo dục tiểu học) thực hiện 01 giao dịch như sau:  \r\n\r\n      * Số tiền phải nộp\r\n\r\n Học phí học lại ngành SP CNTT:               3 tín chỉ x 300.000đ =    900.000đ\r\n\r\n Học phí học CT2 ngành Tiểu học:            22 tín chỉ x 250.000đ = 5.500.000đ\r\n\r\n                                  Tổng số tiền:                                              6.400.000đ\r\n\r\nThực hiện giao dịch:\r\n\r\n          Tên người hưởng: Truong Dai Hoc Su Pham Ha Noi\r\n\r\n     Số tài khoản:          3100201025091\r\n\r\n     Tại ngân hàng: Agribank, Chi nhanh Tu Liem, Ha Noi\r\n\r\n      Số tiền:             6.400.000đ\r\n\r\n      Nội dung: 675105095 Nguyen Van A nop tien HK3\r\n\r\n                       mã số SV        họ và tên                 \r\n\r\n     Lưu ý: Nội dung nộp tiền bắt buộc phải ghi đầy đủ mã sinh viên, họ tên sinh viên để phục vụ công tác quản lý hệ thống. Sinh viên đã nộp tiền giữ lại biên lai nộp tiền để làm căn cứ đối chiếu (khi cần).', 1),
('Mức thu học phí các bậc đào tạo hệ chính quy năm học 2019-2020', 'Năm 2018 – 2019: 1.180.000 đồng/tháng × 10 tháng/năm\r\n\r\nNăm 2019 – 2020: 1.300.000 đồng/tháng × 10 tháng/năm\r\n\r\nNăm 2020 – 2021: 1.430.000 đồng/tháng × 10 tháng/năm', 2),
('Hủy lớp tín chỉ kỳ HK3 năm học 2018 - 2019', 'Lớp có thể đăng ký: CTMS liệt kê những lớp thoả mãn những tiêu chí sau để sinh viên có thể đăng ký:\r\nCho phép đăng ký.\r\nNằm trong chương trình đào tạo áp dụng cho sinh viên đang đăng ký.\r\nSinh viên được chọn đã đạt các môn điều kiện tiên quyết của lớp tín chỉ.\r\nĐã có lịch học (bao gồm thời gian, phòng học)\r\nKhông trùng môn với các lớp tín chỉ vừa đăng ký\r\nKhông trùng lịch học với các lớp tín chỉ vừa đăng ký\r\nNếu thời gian hiện tại nằm trong hạn đăng ký và có số sinh viên đã đăng ký nhỏ hơn số sinh viên tối đa cho phép thì ô đăng ký sẽ hiện biểu tượng Đăng ký (có thể đăng ký). Ngược lại, ô đăng ký sẽ hiện thông báo:\r\n“Chờ ĐK” nếu chưa đến ngày bắt đầu cho đăng ký.\r\n“Hết hạn ĐK” nếu đã qua hạn đăng ký.\r\n“Hết chỉ tiêu” nếu số sinh viên đã đăng ký bằng số sinh viên tối đa cho phép.\r\nLớp vừa đăng ký: CTMS liệt kê những lớp thoả mãn những tiêu chí sau:\r\nLà lớp do sinh viên đăng ký.\r\nCho phép đăng ký và chưa được duyệt thi hành.\r\nNếu thời gian hiện tại trước hạn kết thúc đăng ký 1 ngày thì ô đăng ký sẽ hiện biểu tượng  Đăng ký (cho phép hủy đăng ký). Ngược lại, ô đăng ký sẽ hiện thông báo “Hết hạn hủy” nếu điều kiện thời gian trên không thỏa mãn (hoặc các thông báo như đã liệt kê trong danh sách Lớp có thể đăng ký ở trên).', 3),
('Kết quả phúc khảo các môn chung HK2 năm học 2018-2019', '1. Trong học kì đầu khi mới nhập học, sinh viên học theo thời khóa biểu do nhà trường sắp xếp cho từng lớp. Trong các học kì tiếp theo, sinh viên tự chọn và đăng kí các môn học phù hợp với điều kiện cá nhân với sự hướng dẫn của cố vấn học tập. Việc đăng kí các môn học được thực hiện trực tuyến trên mạng máy tính.\r\n\r\n2. Việc đăng kí học được thực hiện từ 2 tuần trước khi học kì bắt đầu. Thời điểm bắt đầu đăng kí của từng sinh viên được nhà trường công bố trên mạng máy tính. Trong 2 tuần đầu tiên của học kì chính hoặc trong tuần đầu của học kỳ phụ (nếu có) sinh viên được đăng kí thêm học phần nhưng không được rút bớt học phần đã đăng ký.\r\n\r\nSau 2 tuần kể từ khi học kì chính bắt đầu, nếu sinh viên không đăng kí học thì coi như sinh viên đã tự ý bỏ học.\r\n\r\nNếu sinh viên đăng kí không đủ khối lượng tín chỉ tối thiểu quy định ở khoản 3 điều này thì sinh viên sẽ không được tham gia học trong học kì đó và phải làm đơn để nhà trường xét nghỉ học tạm thời. Trường hợp sinh viên làm đơn mà không được nhà trường chấp nhận (do không có lí do chính đáng) hoặc không làm đơn xin nghỉ học tạm thời thì coi như tự ý bỏ học.\r\n\r\nTrường hợp số lượng sinh viên đăng kí thấp hơn số lượng tối thiểu do Trường quy định thì lớp học phần sẽ bị hủy và sinh viên phải đăng kí học lớp khác (có thể cùng hoặc khác học phần với lớp bị hủy) nếu chưa đảm bảo đủ khối lượng học tập tối thiểu cho mỗi học kì quy định tại khoản 3 Điều này.\r\n\r\nSinh viên đăng ký đi thực tập sư phạm sẽ không được đăng ký học các học phần khác trong học kỳ đó.\r\n\r\n3. Khối lượng học tập mỗi sinh viên phải đăng kí trong mỗi học kì được quy định như sau (trừ học kỳ sinh viên đăng ký đi thực tập sư phạm):\r\n\r\na) Đối với sinh viên xếp hạng học lực bình thường (quy định tại khoản 2 điều 14) phải đăng ký tối thiểu 14 tín chỉ cho mỗi học kì chính, trừ học kì cuối khóa học;\r\n\r\nb) Đối với sinh viên xếp hạng học lực yếu phải đăng kí tối thiểu 10 tín chỉ cho mỗi học kì chính, trừ học kì chính cuối khóa học và không quá 16 tín chỉ;\r\n\r\n c) Không quy định khối lượng học tập tối thiểu đối với sinh viên ở học kỳ phụ.', 4),
('Thời gian phúc khảo các môn chung HK2 năm học 2018-2019', 'Chi tiết xin liên hệ giangbh@hnue.edu.vn>\r\nPhòng Đào tạo tiếp nhận đăng ký phúc khảo các môn chung HK2 năm học 2018-2019 vào 01 ngày 18/6/2019. Sinh viên không phải làm đơn.\r\nĐịa điểm: Phòng 209 Nhà Hiệu bộ.', 5),
('ĐĂNG KÝ TÍN CHỈ HỌC KỲ III Năm học (2018 - 2019)', 'Thông tin phản ánh về Email : ngannguyenthimai@hnue.edu.vn>\r\n1. Lịch đăng ký tín chỉ.\r\n\r\n- Từ ngày 21/06/2019 -- >27/06/2019: Sinh viên K65, bắt đầu đăng ký (xem giờ đăng ký chi tiết trên phân mềm).\r\n\r\n- Từ ngày 22/06/2019 -- >28/06/2019: Sinh viên K66, K67, bắt đầu đăng ký (xem giờ đăng ký chi tiết trên phân mềm).\r\n\r\n- Từ ngày 23/06/2019 -- >30/06/2019: Sinh viên K68, bắt đầu đăng ký (xem giờ đăng ký chi tiết trên phân mềm).\r\n\r\nLịch trình đăng ký tín chỉ  TKB kỳ III năm học 2018-2019 (bao gồm đăng ký học đi và học lại).', 6),
('Danh sách sinh viên không đủ điều kiện thi HK2 2018-2019 do nợ học phí', '- Căn cứ Quyết định số 4853/QĐ - ĐHSPHN ngày 16 tháng 07 năm 2018 về việc Quy định mức thu học phí các bậc đào tạo hệ chính quy năm học  2018 – 2019 của Hiệu trưởng Trường Đại học Sư phạm Hà Nội.\r\n\r\n- Căn cứ Thông báo số 11/ĐHSPHN-KHTC ngày  07 tháng  01 năm 2019 về việc Thông báo lịch thu học phí học HK2/2018 - 2019 (lịch thu từ ngày 04/03/2019 đến hết ngày 25/03/2019) và Thông báo số 166/ĐHSPHN ngày 04 tháng 04 năm 2019 về việc Thông báo thu học phí bổ sung HK2/2018-2019 ( lịch thu từ ngày 11 đến hết ngày 18/04/2019).\r\n\r\nTuy nhiên, đến thời điểm hiện nay vẫn còn một số sinh viên chưa hoàn thành nghĩa vụ nộp học phí theo thời hạn đã quy định (có danh sách kèm theo).\r\n\r\n     Đề nghị Ông (Bà) trưởng các khoa thông báo đến các sinh viên của khoa mình có tên trong danh sách kèm theo và thực hiện xóa tên những sinh viên này trong danh sách thi học kỳ 2 năm học 2018- 2019.', 7),
('Lịch thi các môn chung HK2 2018-2019', 'Placerat duis porta explicabo ab nesciunt ac ornare ut excepteur dignissimos voluptatum voluptate habitant velit! Viverra a, vero venenatis! Fringilla? Quae taciti proident diam? Ratione sociis corrupti quis? Eaque curae cillum recusandae vitae accumsan venenatis consequatur exercitation suscipit eiusmod sed rhoncus morbi phasellus cillum, nostrum, habitasse dis potenti semper maecenas minus lobortis nostrud cumque consequat quidem? Eius perspiciatis, error diamlorem feugiat imperdiet voluptates natoque molestias quidem, dignissim necessitatibus ipsa, class! Ultricies dapibus dapibus pulvinar incididunt voluptatum, phasellus fugiat sequi quia nam pretium magni molestiae, voluptate, nam facere interdum, class ex pellentesque natoque!', 8),
('Lịch thi Quản lý Hành chính Nhà nước và Quản lý ngành GD&ĐT', '>\r\nTrường Đại học Sư phạm Hà Nội thông báo.\r\n\r\n \r\nLịch thi Quản lý Hành chính Nhà nước và Quản lý ngành GD&ĐT như sau:\r\n\r\nĐịa điểm thi: Nhà C - Trường Đại học Sư phạm Hà Nội\r\n\r\n                   Các phòng thi lần lượt theo thứ tự: 309-310-405-411-412\r\n\r\nThời gian thi:\r\n\r\n+ 14h00: Đối với các khoa: Ngữ văn, Lịch sử, Giáo dục Tiểu học, Nghệ thuật, Toán - Tin, Công nghệ thông tin, LLCT&GDCD, SP Kỹ thuật, Tiếng Anh\r\n\r\nDSThi_QLHC4.pdf\r\n\r\n+ 15h00:  Đối với các  khoa: Vật lý, Hóa học, Sinh học, Địa lý, Giáo dục Đặc biệt, Giáo dục Mầm non, GD Quốc phòng, Giáo dục Thể chất, Triết học, Tiếng Pháp   \r\n\r\nDSThi_QLHC5.pdf\r\n\r\nChú ý:\r\n\r\nSinh viên khi đi thi phải mang theo thẻ sinh viên hoặc CMND. Nếu không có thẻ hoặc CMND thì không được dự thi.\r\n\r\nThí sinh có mặt tại phòng thi trước giờ thi 15 phút. Đến muộn quá 15 phút không được dự thi.', 9),
('Lịch thi đánh giá năng lực Tiếng Anh ngày 20-4-2019', '>\r\nPhòng Đào tạo thông báo lịch thi đánh giá năng lực Tiếng Anh như sau:\r\n\r\nThời gian thi: ngày 20/04/2019.\r\n\r\nĐịa điểm thi:  nhà V - Trường Đại học Sư phạm Hà Nội - 136 Xuân Thủy, Cầu Giấy, Hà Nội.\r\n\r\nSơ đồ phòng thi dán tại tầng 1 nhà V sáng 20/04/2019 trước giờ thi\r\n\r\n*.  Mã Lớp: CCTA168\r\n\r\n + Sáng 20/04/2019: Thi Nghe, Đọc, Viết:\r\n\r\n   - 7h00 thí sinh có mặt tại phòng thi\r\n\r\n+ Chiều 20/04/2019: Thi Nói:\r\n\r\n   - 13h00 Thí sinh thi nói tại phòng chờ 1 có mặt tại P.401 nhà V\r\n\r\n   - 14h30 Thí sinh thi nói tại phòng chờ 2 có mặt tại P.402 nhà V\r\n\r\nChú ý: \r\n\r\n- Thí sinh không được mang thẻ dự thi và đề thi về. \r\n\r\n- Thí sinh cần mang theo CMTND để kiểm tra trước khi vào phòng thi.\r\n\r\n- Thí sinh phải có mặt tại địa điểm thi đúng ngày, giờ quy định. Thí sinh đến chậm quá 15 phút sau khi đã bóc đề thi không được dự thi. Vắng mặt một buổi thi, không được thi tiếp các buổi sau.   \r\n\r\nXem danh sách phòng thi  tại đây', 10),
('Lịch học QLHCNN & QL ngành GD&ĐT', 'Thông tin xem trong file đính kèm', 11),
('THÔNG BÁO THU HỌC PHÍ BỔ SUNG HK2 NĂM HỌC 2018-2019', '>\r\nĐến thời điểm hiện nay vẫn còn một số sinh viên chưa hoàn thành nghĩa vụ nộp học phí theo thời hạn đã quy định (danh sách kèm theo).\r\n\r\nXét theo đề nghị của một số Ông (Bà) trưởng các khoa đề nghị, Nhà trường xem xét tạo điều kiện thu bổ sung cho các em sinh viên.\r\n\r\nDo vậy nhà trường sẽ tiếp tục thu học phí cho sinh viên toàn trường từ ngày 11/04 đến ngày 18/04/2019 (sinh viên nộp tiền qua ngân hàng theo số tài khoản tại Thông báo 11/ĐHSPHN ngày 07/01/2019). \r\n\r\nNgoài thời gian trên nhà trường không giải quyết bất kỳ trường hợp  nộp học phí không đúng hạn nào của sinh viên. Sinh viên sẽ không được tham gia dự thi tất cả các môn của học kỳ 2/2018-2019 nếu chưa hoàn thành nghĩa vụ nộp học phí trong thời gian quy định (kể cả học phí nợ của các kỳ trước).\r\n\r\nĐề nghị Ông ( Bà) trưởng các khoa thông báo, đôn đốc nhắc nhở sinh viên của khoa mình thực hiện đúng quy chế (Ban hành kèm theo Thông tư số 10/2016/TT-BGDĐT ngày 05/04/2016 của Bộ Giáo dục và Đào tạo), hoàn thành việc nộp học phí đúng thời hạn quy định đồng thời xử lý các sinh viên nộp học phí không đúng hạn theo qui định trong quy chế trên.\r\n\r\nQui trình nộp học phí muộn của sinh viên (đối với tất cả các sinh viên nộp học phí sau ngày 27/03/2019) như sau:\r\n\r\n- Bước 1: Làm đơn xin nộp học phí muộn, xin xác nhận của QLSV (Giáo vụ ) và BCN khoa, nộp cho cán bộ QLSV (Giáo vụ ) của khoa (những sinh viên không có đơn sẽ không được cập nhật học phí).\r\n\r\n- Bước 2: Nộp học phí tại ngân hàng ngày từ ngày 11/04/2019 đến  ngày 18/04/2019\r\n\r\n- Bước 3: QLSV (Giáo vụ ) nộp đơn cho phòng KH-TC vào ngày 19 và ngày 22/04/2019\r\n\r\nLưu ý: Những sinh viên đã nộp học phí từ ngày 28 tháng 3 tại ngân hàng mà chưa được cập nhật thì chỉ cần nộp đơn tại QLSV  và  không phải nộp tiền nữa (nếu đủ tiền và đúng tài khoản).\r\n\r\n', 12),
('Cập nhật học phí học ngoại ngữ 1,2 cho sinh viên học CT2', 'Nhà trường cập nhật phần tính học phí các học phần Ngoại ngữ cho sinh viên học CT2, các em kiểm tra đối chiếu lại trong phần đăng ký học và phần Học phí. Mọi thắc mắc xin liên lạc qua email htbinh@hnue.edu.vn trước ngày 15/3/20019. Học phí thu bổ sung này sẽ được thu cùng học phí học kỳ 2 - 2018-2019. Chi tiết thời gian thu học phí xem ở đây\r\n\r\nDanh sách sinh viên cập nhật và bổ sung học phí:', 13),
('Kết quả phúc khảo các môn chung HK1 năm học 2018-2019', 'Feugiat quaerat tempora litora fringilla commodi dolores metus neque arcu fames. Mauris. Et natoque eiusmod temporibus? Ultricies mauris interdum, culpa ab sit nullam, autem! Integer, ante ullamco. Saepe. Fuga nam? Atque. Officia penatibus curabitur natus ex. Quo elementum aliqua necessitatibus primis quia, ipsam suscipit rerum posuere! Auctor penatibus incididunt pellentesque pharetra? Sequi, ultrices laborum! Pulvinar assumenda, iusto?', 14),
('Thông báo chuyển lớp tín chỉ Phát triển kỹ năng nghe - nói 3', 'Nhà trường ghép 2 lớp phát triển kỹ năng nghe nói 3 và chuyển các sinh viên từ lớp ENG 221-K67.1_LT sang lớp ENG 221-K67.2_LT học vào Thứ 6 tiết 4-5. \r\n\r\nDanh sách lớp ENG 221-K67.1_LT gồm:', 15),
('Thời gian phúc khảo các môn chung HK1 năm học 2018-2019', 'Chi tiết xin liên hệ giangbh@hnue.edu.vn>\r\nPhòng Đào tạo tiếp nhận đăng ký phúc khảo các môn chung HK1 năm học 2018-2019 vào 01 ngày 15/1/2019. Sinh viên không phải làm đơn.\r\n\r\nĐịa điểm: Phòng 209 Nhà Hiệu bộ.', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `anh` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`anh`, `tieude`, `noidung`, `id`, `date`) VALUES
('cap-nhat-hoc-phi-hoc-lai-hoc-cai-thien-hk-1-nam-hoc-2018-2019-2019-1-17-9-53-653.jpg', 'Danh sách SV không đủ điều kiện tham dự Kỳ thi HK 3 năm học ', '- Căn cứ Quyết định số 4853/QĐ - ĐHSPHN ngày 16 tháng 07 năm 2018 về việc Quy định mức thu học phí các bậc đào tạo hệ chính quy năm học  2018 – 2019 của Hiệu trưởng Trường Đại học Sư phạm Hà Nội.\r\n\r\n- Căn cứ Thông báo số 237/ĐHSPHN-KHTC ngày  07 tháng  05 năm 2019 về việc Thông báo lịch thu học phí Học kỳ 3 năm học 2018 - 2019 (lịch thu từ ngày 18/07/2019 đến hết ngày 29/07/2019).\r\n\r\nTuy nhiên, đến thời điểm hiện nay vẫn còn một số sinh viên chưa hoàn thành nghĩa vụ nộp học phí theo thời hạn đã quy định (có danh sách kèm theo).\r\n\r\nĐề nghị Ông (Bà) trưởng các khoa thông báo đến sinh viên của khoa mình có tên trong danh sách kèm theo và thực hiện xóa tên các sinh viên này trong danh sách thi học kỳ 3 năm học 2018- 2019.', 1, '0000-00-00'),
('cap-nhat-hoc-phi-hoc-lai-hoc-cai-thien-hk-1-nam-hoc-2018-2019-2019-1-17-9-53-653.jpg', 'Đối chiếu học phí HK3 năm học 2018-2019', 'Phòng KH-TC đã cập nhật toàn bộ dữ liệu nộp học phí HK3/2018-2019 của sinh viên  qua ngân hàng lên trên phần mềm tín chỉ.\r\n\r\nTuy nhiên vẫn còn một số sinh viên chưa được cập nhật vì sai mã, không có tên........ Vì vậy đề nghị các em đối chiếu nếu thấy có sai sót, nhầm lẫn thì đem biên lai, giấy nộp tiền, chuyển khoản...... lên phòng KH-TC (gặp Cô Nhung, Cô Dung) đối chiếu từ ngày 1/08 đến hết ngày 05/08/2019;  ngoài thời gian trên P. KH-TC sẽ không giải quyết bất kỳ một thắc mắc nào của sinh viên về học phí.\r\n\r\n---------------------------------------------------------------------------\r\n\r\nPhòng KH-TC đã cập nhật toàn bộ dữ liệu nộp học phí của sinh viên qua ngân hàng từ ngày17/7/2019 đến ngày 28/07/2019 lên trên phần mềm tín chỉ.\r\n\r\nTuy nhiên vẫn còn một số sinh viên chưa được cập nhật vì sai mã, không có tên........ Vì vậy đề nghị các em đối chiếu nếu thấy có sai sót, nhầm lẫn thì đem biên lai, giấy nộp tiền, chuyển khoản...... lên phòng KH-TC (gặp Cô Nhung, Cô Dung) đối chiếu từ ngày 30/07 đến hết ngày 02/08/2019;  ngoài thời gian trên P. KH-TC sẽ không giải quyết bất kỳ một thắc mắc nào của sinh viên về học phí.\r\n\r\n---------------------------------------------------------------------------\r\n\r\nPhòng KH-TC đã cập nhật toàn bộ dữ liệu nộp học phí của sinh viên qua ngân hàng từ ngày 17/7/2019 đến ngày 22/07/2019 lên trên phần mềm tín chỉ.\r\n\r\nTuy nhiên vẫn còn một số sinh viên chưa được cập nhật vì sai mã, không có tên...Vì vậy đề nghị các em đối chiếu nếu thấy có sai sót, nhầm lẫn thì đem biên lai, giấy nộp tiền, chuyển khoản...lên phòng KH-TC (gặp Cô Nhung, Cô Dung) đối chiếu từ ngày  24/07 đến hết ngày 29/07/2019; Ngoài thời gian trên P. KH-TC sẽ không giải quyết bất kỳ một thắc mắc nào của sinh viên về học phí.\r\n\r\n \r\n\r\nTrân trọng!', 2, '2019-07-23'),
('thong-bao-doi-chieu-du-lieu-hoc-phi-hk2-nam-hoc-2018-2019-2019-2-18-9-24-426.jpg', 'Đối chiếu đăng ký tín chỉ - học phí học kỳ 3 năm học 2018-2019', 'Nhà trường đã hoàn thành việc tính học phí cho sinh viên HK3 năm học 2018-2019. Sinh viên kiểm tra và xác nhận lại học phí trong trang cá nhân. Mọi thắc mắc về tín chỉ xin liên hệ phòng Đào tạo (e-mail: ngannguyenthimai@hnue.edu.vn) và giải quyết trước ngày 17/07/2019.\r\nLịch thu học phí HK3 năm học 2018-2019 từ ngày 18/07/2019 đến ngày 29/07/2019 (Xem thêm tại đây). Sau thời gian này nếu sinh viên nào chưa nộp học phí sẽ không được dự thi kết thúc học kỳ (tất cả các môn).\r\nLưu ý: ** Nhà trường chỉ thu học phí 1 đợt duy nhất và sẽ không giải quyết bất cứ trường hợp nộp học phí không đúng hạn nào của sinh viên. \r\n\r\nTrân trọng!', 3, '2019-10-07'),
('danh-sach-sinh-vien-con-no-hp-hk2-2018-2019-2019-4-3-9-11-23.jpg', 'Danh sách sinh viên còn nợ HP HK2 2018-2019', 'Danh sách sinh viên còn nợ HP học kỳ 2 năm 2018-2019 tính đến ngày 27/3/2019. Những sinh viên này sẽ thuộc diện cấm thi HK2 2018-2019.\r\n\r\nCác Khoa thông báo cho sinh viên được biết.', 4, '2019-03-04'),
('doi-chieu-hoc-phi-hk1-nam-hoc-2018-2019-2019-3-12-16-51-60.jpg', 'Đối chiếu học phí HK2 năm học 2018-2019', 'Phòng KH-TC đã hoàn thành việc cập nhật dữ liệu nộp học phí HK2/2018-2019 của sinh viên qua ngân hàng đến hết ngày 27/03/2019 lên trên phần mềm tín chỉ.\r\n\r\nTuy nhiên vẫn còn một số sinh viên chưa được cập nhật vì sai mã, không có tên........ Vì vậy đề nghị các em đối chiếu số tiền đã nộp trên trang cá nhân nếu thấy có sai sót, nhầm lẫn thì đem biên lai, giấy nộp tiền, chuyển khoản...... lên phòng KH-TC (gặp Cô Nhung, Cô Dung) đối chiếu từ ngày  29/03 đến hết ngày 05/04/2019;  ngoài thời gian trên P. KH-TC sẽ không giải quyết bất kỳ một thắc mắc nào của sinh viên về học phí.\r\n\r\nTrân trọng!\r\n\r\n+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\r\n\r\nPhòng KH-TC đã cập nhật dữ liệu nộp học phí HK2/2018-2019 của sinh viên qua ngân hàng đến hết ngày 21/03/2019 lên trên phần mềm tín chỉ.\r\n\r\nTuy nhiên vẫn còn một số sinh viên chưa được cập nhật vì sai mã, không có tên........ Vì vậy đề nghị các em đối chiếu nếu thấy có sai sót, nhầm lẫn thì đem biên lai, giấy nộp tiền, chuyển khoản...... lên phòng KH-TC (gặp Cô Nhung, Cô Dung) đối chiếu từ ngày  22/03 đến hết ngày 30/03/2019;  ngoài thời gian trên P. KH-TC sẽ không giải quyết bất kỳ một thắc mắc nào của sinh viên về học phí.\r\n\r\nTrân trọng!\r\n\r\n \r\n++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\r\n\r\nPhòng KH-TC đã cập nhật dữ liệu nộp học phí HK2/2018-2019 của sinh viên qua ngân hàng đến hết ngày 17/03/2019 lên trên phần mềm tín chỉ.\r\n\r\nTuy nhiên vẫn còn một số sinh viên chưa được cập nhật vì sai mã, không có tên........ Vì vậy đề nghị các em đối chiếu nếu thấy có sai sót, nhầm lẫn thì đem biên lai, giấy nộp tiền, chuyển khoản...... lên phòng KH-TC (gặp Cô Nhung, Cô Dung) đối chiếu từ ngày  18/03 đến hết ngày 22/03/2019;  ngoài thời gian trên P. KH-TC sẽ không giải quyết bất kỳ một thắc mắc nào của sinh viên về học phí.\r\n\r\nTrân trọng!\r\n\r\n----------------------------------------------------------------------------------------------------------------------------------------\r\n\r\nPhòng KH-TC đã cập nhật dữ liệu nộp học phí HK2/2018-2019 của sinh viên qua ngân hàng đến hết ngày 10/03/2019 lên trên phần mềm tín chỉ.\r\n\r\nTuy nhiên vẫn còn một số sinh viên chưa được cập nhật vì sai mã, không có tên........ Vì vậy đề nghị các em đối chiếu nếu thấy có sai sót, nhầm lẫn thì đem biên lai, giấy nộp tiền, chuyển khoản...... lên phòng KH-TC (gặp Cô Nhung, Cô Dung) đối chiếu từ ngày  12/03 đến hết ngày 20/03/2019;  ngoài thời gian trên P. KH-TC sẽ không giải quyết bất kỳ một thắc mắc nào của sinh viên về học phí.\r\n\r\nTrân trọng!', 5, '2019-12-03'),
('tuyen-dung-giao-vien-va-cong-tac-vien-2019-2-22-15-47-763.jpg', 'Tuyển dụng giáo viên và cộng tác viên', '1. Giáo viên, cộng tác viên môn Toán ở Tiểu học và THCS\r\n\r\nMô tả công việc:\r\nGiảng dạy Toán bằng Tiếng Anh tại các cấp Tiểu học và THCS.\r\n\r\nChuẩn bị và soạn thảo tài liệu giảng dạy, tổ chức event giáo dục…\r\n\r\nQuyền lợi:\r\nĐược hưởng mức lương hấp dẫn, thưởng theo hiệu quả công việc.\r\n\r\nĐược đào tạo chuyên sâu về kỹ năng và phương pháp dạy Toán tiếng Anh.\r\n\r\nĐược tham khảo kho tài liệu Toán Tiếng Anh khổng lồ\r\n\r\nĐối tượng:\r\nSinh viên đang học tại trường ĐHSP Hà Nội các ngành SP Toán, Cử nhân Toán, Toán Tiếng Anh, ngoài ra sẽ tuyển sinh viên các ngành khác với điều kiện có đam mê về Toán và Tiếng Anh. Sinh viên sẽ làm bài test sơ tuyển tại trường sau khi đăng ký và phỏng vấn trực tiếp nếu qua vòng sơ tuyển.\r\n\r\nĐăng ký qua email htbinh@hnue.edu.vn', 7, '2019-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `KieuUser`, `UserName`, `PassWord`, `MaSv`, `MaGv`) VALUES
(1, 'GV', 'admin1', 'admin1', NULL, 1),
(2, 'GV', 'admin2', 'admin2', NULL, 2),
(3, 'SV', '6601', '6601', 6601, NULL),
(4, 'SV', '6602', '6602', 6602, NULL),
(5, 'SV', '6603', '6603', 6603, NULL),
(6, 'SV', '6604', '6604', 6604, NULL),
(7, 'SV', '6605', '6605', 6605, NULL),
(8, 'SV', '6606', '6606', 6606, NULL),
(9, 'SV', '6607', '6607', 6607, NULL),
(10, 'SV', '6608', '6608', 6608, NULL),
(11, 'SV', '6609', '6609', 6609, NULL),
(12, 'SV', '6610', '6610', 6610, NULL),
(13, 'SV', '6611', '6611', 6611, NULL),
(14, 'SV', '6612', '6612', 6612, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vanbang`
--

CREATE TABLE `vanbang` (
  `MaSv` int(50) NOT NULL,
  `SoHieuVB` int(50) DEFAULT NULL,
  `NamTotNghiep` int(20) DEFAULT NULL,
  `TypeTotNghiep` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vanbang`
--

INSERT INTO `vanbang` (`MaSv`, `SoHieuVB`, `NamTotNghiep`, `TypeTotNghiep`) VALUES
(6601, 100, 2020, 'Giỏi'),
(6602, 101, 2020, 'Khá'),
(6603, 102, 2021, ''),
(6604, 103, 2020, 'Giỏi'),
(6605, 104, 2020, 'Giỏi'),
(6606, 105, 2020, 'Giỏi'),
(6607, 106, 2020, 'Giỏi'),
(6608, 107, 2021, ''),
(6609, 108, 2020, 'Khá'),
(6610, 109, 2020, 'Khá'),
(6611, 110, 2020, 'Giỏi'),
(6612, 111, 2020, 'Giỏi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giaovu`
--
ALTER TABLE `giaovu`
  ADD PRIMARY KEY (`MaGv`),
  ADD KEY `MaKhoa` (`MaKhoa`);

--
-- Indexes for table `k`
--
ALTER TABLE `k`
  ADD PRIMARY KEY (`MaK`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Indexes for table `lichthi`
--
ALTER TABLE `lichthi`
  ADD PRIMARY KEY (`MaMon`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMon`),
  ADD KEY `Makhoa` (`Makhoa`);

--
-- Indexes for table `num`
--
ALTER TABLE `num`
  ADD KEY `MaMon` (`MaMon`),
  ADD KEY `MaSv` (`MaSv`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSv`),
  ADD KEY `MaKhoa` (`MaKhoa`),
  ADD KEY `MaK` (`MaK`),
  ADD KEY `MaLop` (`MaLop`),
  ADD KEY `MaMon` (`MaMon`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaSv` (`MaSv`),
  ADD KEY `MaGv` (`MaGv`);

--
-- Indexes for table `vanbang`
--
ALTER TABLE `vanbang`
  ADD PRIMARY KEY (`MaSv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giaovu`
--
ALTER TABLE `giaovu`
  MODIFY `MaGv` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `MaSv` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6641;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giaovu`
--
ALTER TABLE `giaovu`
  ADD CONSTRAINT `giaovu_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Constraints for table `lichthi`
--
ALTER TABLE `lichthi`
  ADD CONSTRAINT `lichthi_ibfk_1` FOREIGN KEY (`MaMon`) REFERENCES `monhoc` (`MaMon`);

--
-- Constraints for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`Makhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Constraints for table `num`
--
ALTER TABLE `num`
  ADD CONSTRAINT `num_ibfk_1` FOREIGN KEY (`MaMon`) REFERENCES `monhoc` (`MaMon`),
  ADD CONSTRAINT `num_ibfk_2` FOREIGN KEY (`MaSv`) REFERENCES `sinhvien` (`MaSv`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`),
  ADD CONSTRAINT `sinhvien_ibfk_2` FOREIGN KEY (`MaK`) REFERENCES `k` (`MaK`),
  ADD CONSTRAINT `sinhvien_ibfk_3` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`),
  ADD CONSTRAINT `sinhvien_ibfk_4` FOREIGN KEY (`MaMon`) REFERENCES `monhoc` (`MaMon`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`MaSv`) REFERENCES `sinhvien` (`MaSv`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`MaGv`) REFERENCES `giaovu` (`MaGv`);

--
-- Constraints for table `vanbang`
--
ALTER TABLE `vanbang`
  ADD CONSTRAINT `vanbang_ibfk_1` FOREIGN KEY (`MaSv`) REFERENCES `sinhvien` (`MaSv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
