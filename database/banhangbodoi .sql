-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2021 lúc 02:38 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhangbodoi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`username`, `password`, `type`) VALUES
('a1', '123', 0),
('a2', '123', 0),
('aaaaaa', '123456', 0),
('admin', 'admin', 1),
('ngvanthanh', '123', 0),
('test', 'test', 0),
('x123', '123', 0),
('xx', 'xx', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `username` varchar(50) NOT NULL,
  `tenkh` varchar(40) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `sodt` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `donhang` text NOT NULL,
  `soluong` text NOT NULL,
  `total` text NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`username`, `tenkh`, `diachi`, `sodt`, `email`, `donhang`, `soluong`, `total`, `type`) VALUES
('a1', 'rghfghfgjfg', '123 ldkfgjkldfjkl', '984561324654', 'Test@gmail.com', 'GVN Fury S | GVN Viper M | ', '3', '87.000.000 ₫', 'Thanh toán khi nhận hàng'),
('a2', 'rghfghfgjfg', '4k5345km', '0136265', 'Test@gmail.com', 'Asus Vivobook A512FA | GVN Hera S | ', '7', '57.000.000 ₫', 'Đặt trước'),
('ngvanthanh', 'rfgdfg', '123 ldkfgjkldfjkl', '0136265', 'ghjghjghj', 'GVN Tinker | GVN Tinker | ', '0', '', ''),
('test', 'fghkfghk;', '123.dfgjhfdgjdflkj', '321321654654', 'qwesadasd', 'GVN Hera  | ', '0', '', ''),
('x123', 'Test ', '123 ldkfgjkldfjkl', '1900561252', 'Test@gmail.com', 'GAREN 2070 |  Asus ROG STRIX G G531 | GVN Hera  | ', '6', '225.000.000 ₫', ''),
('xx', 'rfgdfg', '4k5345km', '23423', 'ghjghjghj@torijy.fom', 'GAREN 2070 | ', '1', '50.000.000đ', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `laptop`
--

CREATE TABLE `laptop` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `MoTa` text NOT NULL,
  `Anh` varchar(100) NOT NULL,
  `Gia` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `laptop`
--

INSERT INTO `laptop` (`MaSP`, `TenSP`, `MoTa`, `Anh`, `Gia`) VALUES
(1, 'Asus Vivobook S531FL', 'CPU :Intel Core i7-10510U 1.8GHz up to 4.9GHz 8MB\r\nRAM :8GB DDR4 2400MHz\r\nỔ cứng :512GB SSD M.2 PCIE G3X2\r\nCard đồ họa :	NVIDIA GeForce MX250 2GB GDDR5 + Intel UHD Graphics\r\nMàn hình :	15.6\" FHD (1920 x 1080) IPS, Anti-Glare with 45% NTSC', 'asus_vivobook-s531fl.jpg', 24000000),
(2, 'Acer Predator Triton 500', 'CPU :	Intel Core i7-9750H 2.6GHz up to 4.5GHz 12MB\r\nRAM :	16GB (8GB x2) DDR4 2666MHz (2x SO-DIMM socket, up to 32GB SDRAM)\r\nỔ cứng :	1TB SSD PCIE G3X4 (Support RAID 0) (2 slots)\r\nCard đồ họa :	NVIDIA GeForce RTX 2070 8GB GDDR6\r\nMàn hình :	15.6\" FHD (1920 x 1080) IPS Narrow Border, 300Hz G-Sync, 3ms, 300nits', 'Acer_Predator_Triton_500.jpg', 59999999),
(3, ' Asus ROG STRIX G G531', 'CPU :	Intel Core i5-9300H 2.4GHz up to 4.1GHz 8MB\r\nRAM :	8GB DDR4 2666MHz (2x SO-DIMM socket, up to 32GB SDRAM)\r\nỔ cứng :	512GB SSD PCIE G3X4\r\nCard đồ họa :	NVIDIA GeForce GTX 1050 4GB GDDR5 + Intel UHD Graphics 630\r\nMàn hình :	15.6\" FHD (1920 x 1080) IPS, 120Hz, Wide View, Narrow Bezel', 'G531.jpg', 20000000),
(4, 'ASUS ZenBook Pro Duo', 'CPU	Intel Core i7-9750H 2.6GHz up to 4.5GHz 12MB\r\nRAM	32GB DDR4 2666MHz\r\nỔ cứng	1TB SSD M.2 PCIE G3X4\r\nCard đồ họa	NVIDIA GeForce RTX 2060 6GB GDDR6\r\nMàn hình	15.6” OLED 4K (3840 x 2160) TouchScreen, 178° wide-view technology, 100% DCI-P3\r\nScreenPad™ Plus	\r\n14” 4K (3840 x 1100) Touch display + Display 178˚ wide-view technology', 'asus-zenbook-duo-ux481fl.jpg', 75000000),
(5, 'Asus Vivobook A512FA', 'CPU :	Intel® Core™ i3-8145U (2.10Ghz upto 3.90GHz, 2Cores, 4Threads, 4MB Cache, FSB 4GT/s)\r\nRAM :	4GB DDR4 2400MHz Onboard , 1x SO-DIMM socket, up to 12GB SDRAM)\r\nỔ cứng:1TB HDD 5400rpm + 1 slot SSD M.2\r\nCD/DVD : None\r\nCard VGA: Intel® UHD Graphics 620\r\nMàn hình: 15.6-inch FHD (1920x1080), LED backlit, 60Hz, Anti-Glare, 45% NTSC', 'vivobook-asus-ej117.jpg', 12000000),
(6, 'Dell Inspiron G7 15 N7588G', 'CPU :8th Generation Intel® Core™ i5-8300H Processor (Quad-Core, 8MB Cache, up to 4.0GHz w/ Turbo Boost)\r\nMàn hình:15.6-inch FHD (1920 x 1080) IPS Anti-Glare LED-Backlit Display\r\nCard VGA:      NVIDIA GeForce® GTX 1050Ti 4GB GDDR5\r\nRAM :	8GB, 2x4GB, DDR4, 2666MHz\r\nỔ cứng:	128GB SSD M.2 + 1TB HDD', 'dell_inspiron_7588.jpg', 23999999),
(7, 'Asus Vivobook S531FL', 'CPU Intel Core i7-10510U 1.8GHz up to 4.9GHz 8MB\r\nRAM	8GB DDR4 2400MHz\r\nỔ cứng	512GB SSD M.2 PCIE G3X2\r\nCard đồ họa	NVIDIA GeForce MX250 2GB GDDR5 + Intel UHD Graphics\r\nMàn hình	15.6\" FHD (1920 x 1080) IPS, Anti-Glare with 45% NTSC', 'asus_vivobook-s531fl.jpg', 24000000),
(8, 'Asus Vivobook S531FL', 'CPU Intel Core i7-10510U 1.8GHz up to 4.9GHz 8MB\r\nRAM	8GB DDR4 2400MHz\r\nỔ cứng	512GB SSD M.2 PCIE G3X2\r\nCard đồ họa	NVIDIA GeForce MX250 2GB GDDR5 + Intel UHD Graphics\r\nMàn hình	15.6\" FHD (1920 x 1080) IPS, Anti-Glare with 45% NTSC', 'asus_vivobook-s531fl.jpg', 24000000),
(9, 'Asus Vivobook S531FL', 'CPU :Intel Core i7-10510U 1.8GHz up to 4.9GHz 8MB\r\nRAM :	8GB DDR4 2400MHz\r\nỔ cứng:	512GB SSD M.2 PCIE G3X2\r\nCard đồ họa:	NVIDIA GeForce MX250 2GB GDDR5 + Intel UHD Graphics\r\nMàn hình:15.6\" FHD (1920 x 1080) IPS, Anti-Glare with 45% NTSC', 'asus_vivobook-s531fl.jpg', 24000000),
(24, 'TEST 03', 'TEst Update', '250_34019_dsc09480.jpg', 654789123),
(26, 'TEST 02', 'TEST 0.05', '250_4756_v____case_cmaster_h11.jpg', 123456789),
(27, 'Dell Inspiron G7 15 N7588G', 'CPU :8th Generation Intel® Core™ i5-8300H Processor (Quad-Core, 8MB Cache, up to 4.0GHz w/ Turbo Boost)\r\nMàn hình:15.6-inch FHD (1920 x 1080) IPS Anti-Glare LED-Backlit Display\r\nCard VGA:      NVIDIA GeForce® GTX 1050Ti 4GB GDDR5\r\nRAM :	8GB, 2x4GB, DDR4, 2666MHz\r\nỔ cứng:	128GB SSD M.2 + 1TB HDD', 'dell_inspiron_7588.jpg', 23999999);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pc`
--

CREATE TABLE `pc` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `MoTa` text NOT NULL,
  `Anh` varchar(100) NOT NULL,
  `Gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `pc`
--

INSERT INTO `pc` (`MaSP`, `TenSP`, `MoTa`, `Anh`, `Gia`) VALUES
(1, 'GAREN 2070', 'Mainboard:MSI MAG Z390 \r\nCPU 	 :INTEL Core i7 9700 8C8T 12M3.0GHz\r\nRAM 	 :G.SKILL Trident Z RGB 2x8 BUS3000\r\nVGA      :ROG Strix GeForce® RTX 2070 SUPER \r\nSSD      :SEAGATE Maxtor Z1 240GB\r\nPSU      :COOLER MASTER MWE 750 BRONZE\r\nCase     :DEEPCOOL MATREXX 55 RGB', 'garen_2070s.jpg', 50000000),
(2, 'GVN Fury S', 'Mainboard:Asus TUF B365M-Plus \r\nCPU 	 :INTEL Core i5 9400F 6C6T 9M 2.9GHz\r\nRAM 	 :Kingston HyperX Fury Black 1x8 BUS \r\nVGA 	 :ASUS TUF Gaming GeForce® GTX 1660 SUPER\r\nSSD  	 :PNY SSD CS900 120G 2.5\" Sata 3\r\nPSU 	 :Gigabyte GP - PB500 80 Plus Bronze \r\nCase 	 :Xigmatek Gemini ( Mid - Tower )', 'gvn_fury_s.jpg', 40000000),
(3, 'GVN Hera ', 'Mainboard:Asus TUF B365M-Plus \r\nCPU 	 :INTEL Core i5 9400F 6C6T 9M 2.9GHz\r\nRAM 	 :Kingston HyperX Fury Black 1x8 BUS \r\nVGA 	 :ASUS TUF Gaming GeForce® GTX 1660 SUPER\r\nSSD  	 :PNY SSD CS900 120G 2.5\" Sata 3\r\nPSU 	 :Gigabyte GP - PB500 80 Plus Bronze \r\nCase 	 :Xigmatek Gemini ( Mid - Tower )', 'gvn_hera_s2.jpg', 35000000),
(4, 'GVN Tinker', 'Mainboard:Asus TUF B365M-Plus \r\nCPU 	 :INTEL Core i5 9400F 6C6T 9M 2.9GHz\r\nRAM 	 :Kingston HyperX Fury Black 1x8 BUS \r\nVGA 	 :ASUS TUF Gaming GeForce® GTX 1660 SUPER\r\nSSD  	 :PNY SSD CS900 120G 2.5\" Sata 3\r\nPSU 	 :Gigabyte GP - PB500 80 Plus Bronze \r\nCase 	 :Xigmatek Gemini ( Mid - Tower )', 'gearvn_tinker_1660s.jpg', 19000000),
(5, 'GVN Viper M', 'Mainboard:Asus TUF B365M-Plus \r\nCPU 	 :INTEL Core i5 9400F 6C6T 9M 2.9GHz\r\nRAM 	 :Kingston HyperX Fury Black 1x8 BUS \r\nVGA 	 :ASUS TUF Gaming GeForce® GTX 1660 SUPER\r\nSSD  	 :PNY SSD CS900 120G 2.5\" Sata 3\r\nPSU 	 :Gigabyte GP - PB500 80 Plus Bronze \r\nCase 	 :Xigmatek Gemini ( Mid - Tower )', 'gvn_viper_1660.jpg', 7000000),
(6, 'GVN Hera S', 'Mainboard:Asus TUF B365M-Plus \r\nCPU 	 :INTEL Core i5 9400F 6C6T 9M 2.9GHz\r\nRAM 	 :Kingston HyperX Fury Black 1x8 BUS \r\nVGA 	 :ASUS TUF Gaming GeForce® GTX 1660 SUPER\r\nSSD  	 :PNY SSD CS900 120G 2.5\" Sata 3\r\nPSU 	 :Gigabyte GP - PB500 80 Plus Bronze \r\nCase 	 :Xigmatek Gemini ( Mid - Tower )', 'gvn_hera_s2.jpg', 3000000),
(7, 'GVN Fury S', 'Mainboard:Asus TUF B365M-Plus \r\nCPU 	 :INTEL Core i5 9400F 6C6T 9M 2.9GHz\r\nRAM 	 :Kingston HyperX Fury Black 1x8 BUS \r\nVGA 	 :ASUS TUF Gaming GeForce® GTX 1660 SUPER\r\nSSD  	 :PNY SSD CS900 120G 2.5\" Sata 3\r\nPSU 	 :Gigabyte GP - PB500 80 Plus Bronze \r\nCase 	 :Xigmatek Gemini ( Mid - Tower )', 'gvn_fury_s.jpg', 40000000),
(8, 'GVN Viper M', 'Mainboard:Asus TUF B365M-Plus \r\nCPU 	 :INTEL Core i5 9400F 6C6T 9M 2.9GHz\r\nRAM 	 :Kingston HyperX Fury Black 1x8 BUS \r\nVGA 	 :ASUS TUF Gaming GeForce® GTX 1660 SUPER\r\nSSD  	 :PNY SSD CS900 120G 2.5\" Sata 3\r\nPSU 	 :Gigabyte GP - PB500 80 Plus Bronze \r\nCase 	 :Xigmatek Gemini ( Mid - Tower )', 'gvn_viper_1660.jpg', 7000000),
(9, 'GAREN 2070', 'Mainboard:MSI MAG Z390 \r\nCPU 	 :INTEL Core i7 9700 8C8T 12M3.0GHz\r\nRAM 	 :G.SKILL Trident Z RGB 2x8 BUS3000\r\nVGA      :ROG Strix GeForce® RTX 2070 SUPER \r\nSSD      :SEAGATE Maxtor Z1 240GB\r\nPSU      :COOLER MASTER MWE 750 BRONZE\r\nCase     :DEEPCOOL MATREXX 55 RGB', 'garen_2070s.jpg', 50000000),
(10, 'GVN Tinker', 'Mainboard:Asus TUF B365M-Plus \r\nCPU 	 :INTEL Core i5 9400F 6C6T 9M 2.9GHz\r\nRAM 	 :Kingston HyperX Fury Black 1x8 BUS \r\nVGA 	 :ASUS TUF Gaming GeForce® GTX 1660 SUPER\r\nSSD  	 :PNY SSD CS900 120G 2.5\" Sata 3\r\nPSU 	 :Gigabyte GP - PB500 80 Plus Bronze \r\nCase 	 :Xigmatek Gemini ( Mid - Tower )', 'gearvn_tinker_1660s.jpg', 19000000),
(13, 'OVO Volzok', 'Mainboard:MSI MAG Z390 \r\nCPU 	 :INTEL Core i7 9700 8C8T 12M3.0GHz\r\nRAM 	 :G.SKILL Trident Z RGB 2x8 BUS3000\r\nVGA      :ROG Strix GeForce® RTX 2070 SUPER \r\nSSD      :SEAGATE Maxtor Z1 240GB\r\nPSU      :COOLER MASTER MWE 750 BRONZE\r\nCase     :DEEPCOOL MATREXX 55 RGB', '250_4756_v____case_cmaster_h11.jpg', 19899000),
(14, 'OVO Xerath', '	\r\nMainboard:Asus TUF B365M-Plus \r\nCPU 	 :INTEL Core i5 9400F 6C6T 9M 2.9GHz\r\nRAM 	 :Kingston HyperX Fury Black 1x8 BUS \r\nVGA 	 :ASUS TUF Gaming GeForce® GTX 1660 SUPER\r\nSSD  	 :PNY SSD CS900 120G 2.5\" Sata 3\r\nPSU 	 :Gigabyte GP - PB500 80 Plus Bronze \r\nCase 	 :Xigmatek Gemini ( Mid - Tower )', '250_34019_dsc09480.jpg', 32900000),
(16, 'TEST cap nhat', 'TEst cap nhat \r\nTEst cap nhat \r\nTEst cap nhat \r\nTEst cap nhat ', 'gift.jpg', 123769),
(17, 'TEST cap nhat ', 'TEST CAP NHAT', 'banner-laptop-2.png', 654231);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sphot`
--

CREATE TABLE `sphot` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `MoTa` text NOT NULL,
  `Anh` varchar(100) NOT NULL,
  `Gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sphot`
--

INSERT INTO `sphot` (`MaSP`, `TenSP`, `MoTa`, `Anh`, `Gia`) VALUES
(3, 'Asus Vivobook S531FL', 'CPU :Intel Core i7-10510U 1.8GHz up to 4.9GHz 8MB\r\nRAM :8GB DDR4 2400MHz\r\nỔ cứng :512GB SSD M.2 PCIE G3X2\r\nCard đồ họa :	NVIDIA GeForce MX250 2GB GDDR5 + Intel UHD Graphics\r\nMàn hình :	15.6\" FHD (1920 x 1080) IPS, Anti-Glare with 45% NTSC', 'asus_vivobook-s531fl.jpg', 24000000),
(4, 'GVN Viper M', 'Mainboard:Asus TUF B365M-Plus \r\nCPU 	 :INTEL Core i5 9400F 6C6T 9M 2.9GHz\r\nRAM 	 :Kingston HyperX Fury Black 1x8 BUS \r\nVGA 	 :ASUS TUF Gaming GeForce® GTX 1660 SUPER\r\nSSD  	 :PNY SSD CS900 120G 2.5\" Sata 3\r\nPSU 	 :Gigabyte GP - PB500 80 Plus Bronze \r\nCase 	 :Xigmatek Gemini ( Mid - Tower )', 'gvn_viper_1660.jpg', 7000000),
(5, 'GAREN 2070', 'Mainboard:MSI MAG Z390 \r\nCPU 	 :INTEL Core i7 9700 8C8T 12M3.0GHz\r\nRAM 	 :G.SKILL Trident Z RGB 2x8 BUS3000\r\nVGA      :ROG Strix GeForce® RTX 2070 SUPER \r\nSSD      :SEAGATE Maxtor Z1 240GB\r\nPSU      :COOLER MASTER MWE 750 BRONZE\r\nCase     :DEEPCOOL MATREXX 55 RGB', 'garen_2070s.jpg', 50000000),
(6, 'GVN Tinker', 'Mainboard:Asus TUF B365M-Plus \r\nCPU 	 :INTEL Core i5 9400F 6C6T 9M 2.9GHz\r\nRAM 	 :Kingston HyperX Fury Black 1x8 BUS \r\nVGA 	 :ASUS TUF Gaming GeForce® GTX 1660 SUPER\r\nSSD  	 :PNY SSD CS900 120G 2.5\" Sata 3\r\nPSU 	 :Gigabyte GP - PB500 80 Plus Bronze \r\nCase 	 :Xigmatek Gemini ( Mid - Tower )', 'gearvn_tinker_1660s.jpg', 19000000),
(7, 'ASUS ZenBook Pro Duo', 'Mainboard:Asus TUF B365M-Plus \r\nCPU 	 :INTEL Core i5 9400F 6C6T 9M 2.9GHz\r\nRAM 	 :Kingston HyperX Fury Black 1x8 BUS \r\nVGA 	 :ASUS TUF Gaming GeForce® GTX 1660 SUPER\r\nSSD  	 :PNY SSD CS900 120G 2.5\" Sata 3\r\nPSU 	 :Gigabyte GP - PB500 80 Plus Bronze \r\nCase 	 :Xigmatek Gemini ( Mid - Tower )', 'asus-zenbook-duo-ux481fl.jpg', 75000000),
(8, 'Dell Inspiron G7 15 N7588G', 'CPU :8th Generation Intel® Core™ i5-8300H Processor (Quad-Core, 8MB Cache, up to 4.0GHz w/ Turbo Boost)\r\nMàn hình:15.6-inch FHD (1920 x 1080) IPS Anti-Glare LED-Backlit Display\r\nCard VGA:      NVIDIA GeForce® GTX 1050Ti 4GB GDDR5\r\nRAM :	8GB, 2x4GB, DDR4, 2666MHz\r\nỔ cứng:	128GB SSD M.2 + 1TB HDD', 'dell_inspiron_7588.jpg', 23999999),
(9, 'GVN Hera S', 'Mainboard:Asus TUF B365M-Plus \r\nCPU 	 :INTEL Core i5 9400F 6C6T 9M 2.9GHz\r\nRAM 	 :Kingston HyperX Fury Black 1x8 BUS \r\nVGA 	 :ASUS TUF Gaming GeForce® GTX 1660 SUPER\r\nSSD  	 :PNY SSD CS900 120G 2.5\" Sata 3\r\nPSU 	 :Gigabyte GP - PB500 80 Plus Bronze \r\nCase 	 :Xigmatek Gemini ( Mid - Tower )', 'gvn_hera_s2.jpg', 35000000),
(10, 'GVN Fury S', 'Mainboard:Asus TUF B365M-Plus \r\nCPU 	 :INTEL Core i5 9400F 6C6T 9M 2.9GHz\r\nRAM 	 :Kingston HyperX Fury Black 1x8 BUS \r\nVGA 	 :ASUS TUF Gaming GeForce® GTX 1660 SUPER\r\nSSD  	 :PNY SSD CS900 120G 2.5\" Sata 3\r\nPSU 	 :Gigabyte GP - PB500 80 Plus Bronze \r\nCase 	 :Xigmatek Gemini ( Mid - Tower )', 'gvn_fury_s.jpg', 40000000),
(11, 'Asus Vivobook A512FA', 'CPU :	Intel® Core™ i3-8145U (2.10Ghz upto 3.90GHz, 2Cores, 4Threads, 4MB Cache, FSB 4GT/s)\r\nRAM :	4GB DDR4 2400MHz Onboard , 1x SO-DIMM socket, up to 12GB SDRAM)\r\nỔ cứng:	1TB HDD 5400rpm + 1 slot SSD M.2\r\nCD/DVD	None\r\nCard VGA:	Intel® UHD Graphics 620\r\nMàn hình:	15.6-inch FHD (1920x1080), LED backlit, 60Hz, Anti-Glare, 45% NTSC', 'vivobook-asus-ej117.jpg', 12000000),
(12, 'Acer Predator Triton 500', 'CPU :	Intel Core i7-9750H 2.6GHz up to 4.5GHz 12MB\r\nRAM :	16GB (8GB x2) DDR4 2666MHz (2x SO-DIMM socket, up to 32GB SDRAM)\r\nỔ cứng :	1TB SSD PCIE G3X4 (Support RAID 0) (2 slots)\r\nCard đồ họa :	NVIDIA GeForce RTX 2070 8GB GDDR6\r\nMàn hình :	15.6\" FHD (1920 x 1080) IPS Narrow Border, 300Hz G-Sync, 3ms, 300nits', 'Acer_Predator_Triton_500.jpg', 59999999),
(13, ' Asus ROG STRIX G G531', 'CPU :	Intel Core i5-9300H 2.4GHz up to 4.1GHz 8MB\r\nRAM :	8GB DDR4 2666MHz (2x SO-DIMM socket, up to 32GB SDRAM)\r\nỔ cứng :	512GB SSD PCIE G3X4\r\nCard đồ họa :	NVIDIA GeForce GTX 1050 4GB GDDR5 + Intel UHD Graphics 630\r\nMàn hình :	15.6\" FHD (1920 x 1080) IPS, 120Hz, Wide View, Narrow Bezel', 'G531.jpg', 20000000),
(14, 'GAREN 2070', 'Mainboard:MSI MAG Z390 \r\nCPU 	 :INTEL Core i7 9700 8C8T 12M3.0GHz\r\nRAM 	 :G.SKILL Trident Z RGB 2x8 BUS3000\r\nVGA      :ROG Strix GeForce® RTX 2070 SUPER \r\nSSD      :SEAGATE Maxtor Z1 240GB\r\nPSU      :COOLER MASTER MWE 750 BRONZE\r\nCase     :DEEPCOOL MATREXX 55 RGB', 'garen_2070s.jpg', 50000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tongsp`
--

CREATE TABLE `tongsp` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `MoTa` text NOT NULL,
  `Anh` varchar(100) NOT NULL,
  `Gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`MaSP`);

--
-- Chỉ mục cho bảng `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`MaSP`);

--
-- Chỉ mục cho bảng `sphot`
--
ALTER TABLE `sphot`
  ADD PRIMARY KEY (`MaSP`);

--
-- Chỉ mục cho bảng `tongsp`
--
ALTER TABLE `tongsp`
  ADD PRIMARY KEY (`MaSP`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `laptop`
--
ALTER TABLE `laptop`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `pc`
--
ALTER TABLE `pc`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `sphot`
--
ALTER TABLE `sphot`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tongsp`
--
ALTER TABLE `tongsp`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
