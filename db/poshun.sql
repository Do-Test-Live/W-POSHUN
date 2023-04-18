-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 01:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poshun`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `ip` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(15) NOT NULL DEFAULT 'sales',
  `status` int(11) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `ip`, `image`, `email`, `password`, `role`, `status`, `updated_at`) VALUES
(2, 'Super Admin', '103.107.160.134', 'assets/admin/69281_avatar.png', 'admin@poshun.com', '@BCD1234', 'admin', 1, '2023-04-16 07:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `icon` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `c_name`, `image`, `icon`, `status`, `inserted_at`, `updated_at`) VALUES
(2, 'Rechargeable Mini Metal Torch', 'assets/images/category/image/23617_Rechargeable Mini Metal Torch.jpg', 'assets/images/category/icon/191_Mini-Metal-Torch.png', 1, '2023-04-18 14:07:24', '0000-00-00 00:00:00'),
(3, 'Rechargeable Spotlight', 'assets/images/category/image/73986_Rechargeable Spotlight.jpg', 'assets/images/category/icon/30275_Search-Light.png', 1, '2023-04-18 14:08:34', '0000-00-00 00:00:00'),
(4, 'Rechargeable Search Light (Plastic)', 'assets/images/category/image/11504_Search Light (Plastic).jpg', 'assets/images/category/icon/19254_Search-Light-icon.png', 1, '2023-04-18 14:08:50', '0000-00-00 00:00:00'),
(5, 'Rechargeable Machined Aircraft Aluminium Torch', 'assets/images/category/image/5358_Machined Aircraft Aluminium Torch.jpg', 'assets/images/category/icon/3615_Aircraft-Aluminium-Torch.png', 1, '2023-04-18 14:09:22', '0000-00-00 00:00:00'),
(6, 'Rechargeable Emergency Lantern (Plastic)', 'assets/images/category/image/8401_Emergency Lantern (Plastic).jpg', 'assets/images/category/icon/32298_emergency-lantern-icon.png', 1, '2023-04-18 14:09:38', '0000-00-00 00:00:00'),
(7, 'Rechargeable Emergency Fluorescent Lamp', 'assets/images/category/image/52859_Emergency Fluorescent Lamp.jpg', 'assets/images/category/icon/53881_fluorescent-lamp-icon.png', 1, '2023-04-18 14:10:04', '0000-00-00 00:00:00'),
(8, 'Rechargeable Headlight (Plastic)', 'assets/images/category/image/43072_Headlight (Plastic).jpg', 'assets/images/category/icon/344_Rechargeable-Headlight-icon.png', 1, '2023-04-18 14:10:41', '0000-00-00 00:00:00'),
(9, 'LED Bulb', 'assets/images/category/image/7798_led bulb.jpg', 'assets/images/category/icon/93677_led-bulb.png', 1, '2023-04-18 14:10:57', '0000-00-00 00:00:00'),
(10, 'Radio', 'assets/images/category/image/86205_radio.jpg', 'assets/images/category/icon/28748_radio.png', 1, '2023-04-18 14:11:46', '0000-00-00 00:00:00'),
(11, 'Other Home Appliance', 'assets/images/category/image/17987_other.jpg', 'assets/images/category/icon/82301_other.png', 1, '2023-04-18 14:12:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `p_image` varchar(500) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `inserted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `product_code`, `p_name`, `description`, `p_image`, `status`, `inserted_at`, `updated_at`) VALUES
(1, 2, '#PS-3829', 'Rechargeable LED Mini Metal Torch', '<p>#PS-3829 Rechargeable Mini Metal Torch<br />\r\n- Aircraft Aluminum material<br />\r\n- Real Save Energy, LED long life guarantee (50,000 hrs), high-tech of optical lighting,<br />\r\n- Using 1 pc LUMILEDS LED<br />\r\n- Voltage: AC 100~240V 50/60Hz<br />\r\n- Battery: AA size *2 pcs<br />\r\n- Battery Quick Charger *1 pc<br />\r\n- Charge Time: 2 hrs<br />\r\n- Continuous Operation Time: 1~1.5 hrs<br />\r\n- Luminous Flux:<br />\r\n- LED Power: 1W~3W<br />\r\n*With soft hand belt and AC Adaptor for accessory<br />\r\n<br />\r\nApplication:<br />\r\n<br />\r\n1. Outdoor lighting<br />\r\n2. Emergency use<br />\r\n<br />\r\nBenefit:<br />\r\n(New style: LED version, compare with traditional bulb)<br />\r\n<br />\r\n1. Cost saving<br />\r\n2. Lower energy consumption<br />\r\n3. Lower maintenance cost<br />\r\n4. Longer life Span<br />\r\n5. Environmental protection<br />\r\n6. Portable<br />\r\n7. Water resistance<br />\r\n8. Gift box packing design<br />\r\n<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/87030_1.jpg', 1, '2023-04-18 15:15:18', '0000-00-00 00:00:00'),
(2, 2, '#PS-3830', 'Rechargeable LED Mini Metal Torch', '<p>#PS-3830 Rechargeable Mini Metal Torch<br />\r\n- Real Save Energy, LED long life guarantee (50,000 hrs), High-tech of optical lighting,<br />\r\n- Using 1 pc LUMILEDS LED<br />\r\n- Voltage: AC 100~240V 50/60Hz<br />\r\n- Battery: AA size *2 pcs and 1/2AA size * 2pcs<br />\r\n- Battery Quick Charger *1 pc<br />\r\n- Extra Barrel to exchange the torch size *1 pc<br />\r\n- Charge Time: 2 hrs (AA cells)/1 hr (1/2AA cells)<br />\r\n- Continuous Operation Time: 1~1.5 hrs (AA cells)/1 hr (1/2AA cells)<br />\r\n- Luminous Flux:<br />\r\n- LED Power: 1W~3W<br />\r\n* With a soft hand belt and AC Adaptor for accessory<br />\r\n<br />\r\nApplication:<br />\r\n<br />\r\n1. Outdoor lighting<br />\r\n2. Emergency use<br />\r\n<br />\r\nBenefit:<br />\r\n(New style: LED version, compare with traditional bulb)<br />\r\n<br />\r\n1. Cost saving<br />\r\n2. Lower energy consumption<br />\r\n3. Lower maintenance cost<br />\r\n4. Longer life Span<br />\r\n5. Environmental protection<br />\r\n6. Portable<br />\r\n7. Water resistance<br />\r\n8. The length of the barrel can be adjusted<br />\r\n9. Gift box packing design<br />\r\n<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/20217_2.jpg', 1, '2023-04-18 15:15:46', '0000-00-00 00:00:00'),
(3, 2, '#PS-502', 'Rechargeable LED Mini Metal Torch', '<p>#PS-502 Rechargeable Mini Metal Torch<br />\r\n- Aircraft Aluminum material<br />\r\n- Real Save Energy, LED long life guarantee (50,000 hrs), High-tech of optical lighting,<br />\r\n- Using 1 pc LUMILEDS LED<br />\r\n- Voltage: AC 100~240V 50/60Hz<br />\r\n- Battery: 1.6V 1500mAh Ni-Zn Rechargeable Battery (Green Battery in AA size) *1 pc<br />\r\n- Battery Quick Charger *1 pc<br />\r\n- Charge Time: 6 hrs<br />\r\n- Continuous Operation Time: 1.5 hrs<br />\r\n* Completed Accessories with Round Plug, Soft hand belt &amp; Torch Case<br />\r\n<br />\r\nApplication:<br />\r\n<br />\r\n1. Outdoor lighting<br />\r\n2. Emergency use<br />\r\n<br />\r\nBenefit:<br />\r\n(New style: LED version, compare with traditional bulb)<br />\r\n<br />\r\n1. Cost saving<br />\r\n2. Lower energy consumption<br />\r\n3. Lower maintenance cost<br />\r\n4. Longer life Span<br />\r\n5. Environmental protection<br />\r\n6. Portable<br />\r\n7. Water resistance<br />\r\n8. The length of the barrel can be adjusted<br />\r\n9. Gift box packing design<br />\r\n<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/28082_3.jpg', 1, '2023-04-18 15:16:09', '0000-00-00 00:00:00'),
(4, 3, 'NL-802', 'Professional Rechargeable Spotlight', '<p>NL-802 Professional Rechargeable Spotlight<br />\r\n- Uses 12V~30W bulb,<br />\r\n- Rechargeable time: approx. 10 hrs after completely discharged<br />\r\n- Operating time afterfully charged:<br />\r\n- approx 1.6 hrs (full light)<br />\r\n- approx 3.2 hrs (normal light)<br />\r\n- High quality aluminium reflector,<br />\r\n- Hyper bright power, penetrates smoke, rain &amp; fog easily,<br />\r\n- Portable &amp; water resistance,<br />\r\n- Built-in lead acid batteries (6V4.5Ah x 2)<br />\r\n<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/1279_1.jpg', 1, '2023-04-18 15:16:56', '0000-00-00 00:00:00'),
(5, 3, 'NL-804', 'Professional Rechargeable Spotlight', '<p>NL-804 Professional Rechargeable Spotlight<br />\r\n- Using 12V-30W Bulb &amp; 5W U-Tube<br />\r\n- Recharging Time: Approx. 10hrs after fully discharged<br />\r\n- High quality aluminium reflector,<br />\r\n- Hyper bright power, penetrates smoke, rain &amp; fog easily,<br />\r\n- Portable &amp; water resistance,<br />\r\n- Built-in lead acid batteries (6V4.5Ah x 2)<br />\r\n- Operating Time after fully charged:<br />\r\nApprox. 1.8hrs (both Bulb &amp; U-Tube)<br />\r\nApprox. 3.6hrs (Bulb)<br />\r\nApprox. 18hrs (U-Tube)<br />\r\n<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/22454_2.jpg', 1, '2023-04-18 15:17:24', '0000-00-00 00:00:00'),
(6, 3, 'NL-805', 'Professional Rechargeable Spotlight', '<p>NL-805 Professional Rechargeable Spotlight<br />\r\n- 1200 Meter Long-range Illumination,<br />\r\n- High quality aluminium reflector,<br />\r\n- Hyper bright power, penetrates smoke, rain &amp; fog easily,<br />\r\n- Portable &amp; water resistance,<br />\r\n- Built-in lead acid batteries (6V4.5Ah x 2)<br />\r\n<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/41539_3.jpg', 1, '2023-04-18 15:17:56', '0000-00-00 00:00:00'),
(7, 4, 'PS-3000A', 'Searchlight', '<p>- Working Voltage: AC 220V-240V~50/60Hz<br />\r\n- Using: high power LED (1 pc) &amp; SC size rechargeable battery (3 pcs)<br />\r\n- Charging Time: 12 ~14 hrs<br />\r\n- Continuous Operation Time: 2.5 hrs ~ 3 hrs<br />\r\n- Colour: Any<br />\r\n- Accessory: AC adaptor, hand strap<br />\r\n- Can adjust the angle of torch head<br />\r\n- Red LED indicator for charging in progress</p>\r\n', 'assets/images/products/650/17898_1.jpg', 1, '2023-04-18 15:21:23', '0000-00-00 00:00:00'),
(8, 4, '#59', 'Rechargeable Twin Search Light', '<p>#59 Rechargeable Twin Search Light<br />\r\n- AC 220~240V<br />\r\n- Twin Search Light, 2 in 1 Light with Lantern<br />\r\n- 1.2V AA size 750mAH Rechargeable Battery (4pcs)<br />\r\n- 4V Halogen Bulb (2pcs) &amp; 4W Stright Tube (1pc)<br />\r\n- Completed Accessories with Carrying Strap, Red Cover &amp; AC Socket Adaptor</p>\r\n', 'assets/images/products/650/2343_2.jpg', 1, '2023-04-18 15:21:46', '0000-00-00 00:00:00'),
(9, 4, '#333', 'Rechargeable Search Light (Single Light)', '<p>#333 Rechargeable Search Light (Single Light)<br />\r\n- AC 220~240V<br />\r\n- Single Search Light<br />\r\n- 1.2V 1300mAh Rechargeable Battery (5pcs)<br />\r\n- 5.5V 1A Halogen Bulb (2pcs)<br />\r\n- Completed Accessories with Carrying Strap, Red Cover &amp; AC Socket Adaptor</p>\r\n', 'assets/images/products/650/91767_3.jpg', 1, '2023-04-18 15:22:09', '0000-00-00 00:00:00'),
(10, 4, '#610', 'Rechargeable Search Light', '<p>#610 Rechargeable Search Light<br />\r\n- AC 220~240V<br />\r\n- 1.2V 800mAh Rechargeable Battery (3pcs)<br />\r\nOr 1.2V 750mAh Rechargeable Battery (3pcs)<br />\r\n- 3.6V Xenon Bulb (2pcs)<br />\r\n- Complete Accessories with Carrying Strap, Red Cover &amp; AC Socket Adaptor</p>\r\n', 'assets/images/products/650/58660_4.jpg', 1, '2023-04-18 15:22:37', '0000-00-00 00:00:00'),
(11, 4, '#633', 'Rechargeable Search Light', '<p>#633 Rechargeable Search Light<br />\r\n- AC 220~240V<br />\r\n- 1.2V 800mAh Rechargeable Battery (4pcs)<br />\r\nOr 1.2V 700mAh Rechargeable Battery (4pcs)<br />\r\n- 4.8V Halogen Bulb (1pc)</p>\r\n', 'assets/images/products/650/38609_5.jpg', 1, '2023-04-18 15:23:02', '0000-00-00 00:00:00'),
(12, 4, '#634', 'Rechargeable Search Light', '<p>#634 Rechargeable Search Light<br />\r\n- AC 220~240V<br />\r\n- 1.2V 800mAh Rechargeable Battery (2pcs)<br />\r\nOr 1.2V 700mAh Rechargeable Battery (2pcs)<br />\r\n- 2.4V Krypton Bulb</p>\r\n', 'assets/images/products/650/96491_6.jpg', 1, '2023-04-18 15:23:30', '0000-00-00 00:00:00'),
(13, 4, '#635', 'Rechargeable Search Light', '<p>#635 Rechargeable Search Light<br />\r\n- AC 220~240V<br />\r\n- 1.2V 1300mAh Rechargeable Battery (4pcs)<br />\r\n- 4.8V Halogen Bulb (2pcs)<br />\r\n- Completed Accessories with Carrying Strap, Red Cover &amp; AC Socket Adaptor</p>\r\n', 'assets/images/products/650/50621_7.jpg', 1, '2023-04-18 15:23:50', '0000-00-00 00:00:00'),
(14, 4, '#650', 'Rechargeable Search Light', '<p>#650 Rechargeable Search Light<br />\r\n- AC 220~240V<br />\r\n- 1.2V 800mAh Rechargeable Battery (3pcs)<br />\r\nOr 1.2V 600mAh Rechargeable Battery (3pcs)<br />\r\n- 3.6V Xenon Bulb (2pcs)<br />\r\n- Complete Accessories with Carrying Strap, Red Cover &amp; AC Socket Adaptor</p>\r\n', 'assets/images/products/650/73626_8.jpg', 1, '2023-04-18 15:24:09', '0000-00-00 00:00:00'),
(15, 5, 'SL-123', 'Metal Rechargeable Torch', '<p>SL-123 Metal Rechargeable Torch<br />\r\n- Using 3.6V 0.82A X&#39;ENON Bulb,<br />\r\n- 3 x AA size (3.6V) Rechargeable Battery,<br />\r\n- Operated Complete with AC/DC Adaptor,<br />\r\n- With Spare Bulb &amp; Instruction Manual added,<br />\r\n- In a Printed Gift Box.<br />\r\n- Carrying belt can be attached if required<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/37562_1.jpg', 1, '2023-04-18 15:24:56', '0000-00-00 00:00:00'),
(16, 5, 'SL-678', 'Metal Rechargeable Torch', '<p>SL-678 Metal Rechargeable Torch<br />\r\n- Using 5.5V 1A Halogen Bulb,<br />\r\n- 5 x SC size (6V) Battery,<br />\r\n- Operated Complete with AC/DC Adaptor,<br />\r\n- With Spare Bulb &amp; Instruction Manual added,<br />\r\n- In a Printed Gift Box<br />\r\n- Carrying belt can be attached if required<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/11406_2.jpg', 1, '2023-04-18 15:25:19', '0000-00-00 00:00:00'),
(17, 5, 'SL-789', 'Metal Rechargeable Torch', '<p>SL-789 Metal Rechargeable Torch<br />\r\n- Using 5.5V 1A Halogen Bulb,<br />\r\n- 5 x C size (6V) Battery,<br />\r\n- Operated complete with AC/DC Adaptor,<br />\r\n- With Spare Bulb &amp; Instruction Manual added,<br />\r\n- In a Printed Gift Box,<br />\r\n- Carrying belt can be attached if required<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/67212_3.jpg', 1, '2023-04-18 15:25:40', '0000-00-00 00:00:00'),
(18, 5, 'SL-790', 'Metal Rechargeable Torch', '<p>SL-790 Metal Rechargeable Torch<br />\r\n- Using 5.5V 1A Halogen Bulb,<br />\r\n- 5 x C size (6V) Battery,<br />\r\n- Operated Complete with AC/DC Adaptor,<br />\r\n- With Spare Bulb &amp; Instruction Manual added<br />\r\n- In a Printed Gift Box.<br />\r\n- Carrying belt can be attached if required<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/30909_4.jpg', 1, '2023-04-18 15:26:00', '0000-00-00 00:00:00'),
(19, 5, 'SL-800', 'Metal Rechargeable Torch', '<p>SL-800 Metal Rechargeable Torch<br />\r\n- Using 5.5V 1A Halogen Bulb,<br />\r\n- 5 x 1/2D size (6V) Rechargeable Battery,<br />\r\n- Operated Complete with AC/DC Adaptor,<br />\r\n- With Spare Bulb &amp; Instruction Manual added<br />\r\n- In a Printed Gift Box.<br />\r\n- Carrying belt can be attached if required<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/27407_5.jpg', 1, '2023-04-18 15:26:23', '0000-00-00 00:00:00'),
(20, 5, 'SL-900', 'Rechargeable Emergency Torch', '<p>SL-900 Metal Rechargeable Torch<br />\r\n- Using 5.5V 1A Halogen Bulb,<br />\r\n- 5 x 1/2D size (6V) Rechargeable Battery,<br />\r\n- Operated Complete with AC/DC Adaptor,<br />\r\n- With Spare Bulb &amp; Instruction Manual added<br />\r\n- In a Printed Gift Box.<br />\r\n- Carrying belt can be attached if required<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/87465_6.jpg', 1, '2023-04-18 15:26:47', '0000-00-00 00:00:00'),
(21, 6, 'PS-641', 'Hanging Lantern', '<p>- Working Voltage: AC 110V-240V~50/60Hz<br />\r\n- Power: 2W<br />\r\n- Using: high power SMD LED (7 pcs) &amp; AA size rechargeable battery (3 pcs)<br />\r\n- Charging Time: 8~14 hrs<br />\r\n- Continuous Operation Time: 1.6 hrs ~ 4 hrs (Strong) / 6 hrs ~ 16 hrs (Normal)<br />\r\n- Accessory: iron hook for hanging up<br />\r\n- For indoor / outdoor use<br />\r\n- Function: strong / normal / flash</p>\r\n', 'assets/images/products/650/70179_1.jpg', 1, '2023-04-18 15:28:00', '0000-00-00 00:00:00'),
(22, 6, 'PS-642', 'Hanging Lantern', '<p>- Working Voltage: AC 110V-240V~50/60Hz<br />\r\n- Power: 3W<br />\r\n- Using: low power SMD LED (35 pcs) &amp; AA size rechargeable battery (3 pcs)<br />\r\n- Charging Time: 8~14 hrs<br />\r\n- Continuous Operation Time: 1.6 hrs ~ 4 hrs (Strong) / 6 hrs ~ 16 hrs (Normal)<br />\r\n- Accessory: iron hook for hanging up<br />\r\n- For indoor / outdoor use<br />\r\n- Function: strong / normal / flash</p>\r\n', 'assets/images/products/650/63580_2.jpg', 1, '2023-04-18 15:28:23', '0000-00-00 00:00:00'),
(23, 6, '#560U', 'Rechargeable Emergency Lantern', '<p>AC 220~240V<br />\r\n6V 4.5AH Lead-Acid Rechargeable Battery (1pc)<br />\r\nOsram U-tube (1pc)<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/89926_3.jpg', 1, '2023-04-18 15:28:46', '0000-00-00 00:00:00'),
(24, 6, '#710C', 'Rechargeable Emergency Lantern', '<p>#710C Emergency Lantern<br />\r\n- using Osram U-tube &amp; Krypton Bulb (2pcs)<br />\r\n- Power Input Voltage(AC): 220~240V 50/60Hz<br />\r\n- Battery: 6V 4.5Ah Lead-Acid Rechargeable Battery<br />\r\n- Charge Time: 18 ~ 24 Hrs<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/62415_4.jpg', 1, '2023-04-18 15:29:08', '0000-00-00 00:00:00'),
(25, 6, '#835', 'Rechargeable Emergency Lantern', '<p>SINGLE &amp; DOUBLE LAMP SELECTED.<br />\r\nIC VERSION 220-240V AC FOR<br />\r\nRECHARGE CIRCUIT 6V DC<br />\r\n(6V 4A BATTERY) OPERATED.<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/78914_5.jpg', 1, '2023-04-18 15:29:31', '0000-00-00 00:00:00'),
(26, 6, '#906', 'Rechargeable Emergency Lantern', '<p>#906 Rechargeable Emergency Lantern<br />\r\n- Rechargeable emergency lantern and search light<br />\r\n- AC 220~240V<br />\r\n- 6V 4.5AH Lead-Acid Rechargeable Battery (1pc)<br />\r\n- Osram U-Tube (1pc)<br />\r\n- China Bulb (1pc)<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/30267_6.jpg', 1, '2023-04-18 15:29:52', '0000-00-00 00:00:00'),
(27, 6, '#907', 'Rechargeable Emergency Lantern', '<p>#907 Rechargeable Emergency Lantern<br />\r\n- Rechargeable emergency twin light lantern<br />\r\n- AC 220~240V<br />\r\n- 6V 4.5AH Lead-Acid Rechargeable Battery (1pc) with twin illumination<br />\r\n- Osram U-Tube (1pc)<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/59749_7.jpg', 1, '2023-04-18 15:30:15', '0000-00-00 00:00:00'),
(28, 6, '#908', 'Rechargeable Emergency Lantern', '<p>AC 220~240V<br />\r\n6V 4.5AH Lead-Acid Rechargeable Battery (1pc)<br />\r\nOsram U-Tube (1pc)<br />\r\n6V 0.83A Bulb (1pc)<br />\r\nLED Version Is Available</p>\r\n', 'assets/images/products/650/95011_8.jpg', 1, '2023-04-18 15:30:57', '0000-00-00 00:00:00'),
(29, 7, '#1711', 'Rechargeable Emergency Fluorescent Lamp', '<p>#1711 Rechargeable Emergency fluorescent lamp<br />\r\n- AC 220~240V<br />\r\n- 6V 4.5Ah Lead-Acid Rechargeable Battery (1pc)<br />\r\n- 18W Straight Tube (1pc)</p>\r\n', 'assets/images/products/650/33175_1.jpg', 1, '2023-04-18 15:31:50', '0000-00-00 00:00:00'),
(30, 8, 'PS-H001', 'Headlight', '<p>- Working Voltage: AC 220V-240V~50/60Hz<br />\r\n- Using: high power LED (1 pc) &amp; 1/2A size rechargeable battery (2 pcs)<br />\r\n- Charging Time: 6~8 hrs<br />\r\n- Continuous Operation Time: 2 hrs ~ 3 hrs (Strong) / 8 hrs ~ 12 hrs (Normal)<br />\r\n- Function: strong / normal / flash<br />\r\n- Colour: Any</p>\r\n', 'assets/images/products/650/85032_1.jpg', 1, '2023-04-18 15:32:28', '0000-00-00 00:00:00'),
(31, 8, 'PS-H002', 'Headlight', '<p>- Working Voltage: AC 220V-240V~50/60Hz<br />\r\n- Using: high power LED (1 pc) &amp; SC size rechargeable battery (1 pc)<br />\r\n- Charging Time: 10 hrs<br />\r\n- Continuous Operation Time: 3 hrs (Strong) / 12 hrs (Normal)<br />\r\n- Function: strong / normal / flash<br />\r\n- Colour: Any</p>\r\n', 'assets/images/products/650/29344_2.jpg', 1, '2023-04-18 15:32:47', '0000-00-00 00:00:00'),
(32, 9, 'PS-003', 'LED Bulb', '<p>- Working Voltage: AC 110V-240V~50/60Hz<br />\r\n- Power: 5W<br />\r\n- Luminous: 280lm<br />\r\n- Using: high power LUMILEDS LED (3 pcs)<br />\r\n- LED has 50,000 average lifetime hours<br />\r\n- Lamp base: E27 / B22<br />\r\n- Colour temperature: Cool White / Warm White</p>\r\n', 'assets/images/products/650/5822_1.jpg', 1, '2023-04-18 15:33:27', '0000-00-00 00:00:00'),
(33, 9, 'PS-005', 'LED Bulb', '<p>- Working Voltage: AC 110V-240V~50/60Hz<br />\r\n- Power: 7W<br />\r\n- Luminous: 600lm<br />\r\n- Using: high power LUMILEDS LED (3 pcs)<br />\r\n- LED has 50,000 average lifetime hours<br />\r\n- Lamp base: E27 / B22<br />\r\n- Colour temperature: Cool White / Warm White</p>\r\n', 'assets/images/products/650/3423_2.jpg', 1, '2023-04-18 15:33:45', '0000-00-00 00:00:00'),
(34, 10, 'ICF-J1', '3-Bands Portable Radio', '<p>FM/MW/SW 3 BANDS PORTABLE RADIO, IC VERSION, 3V (UM1X2) OPERATED COMPLETE WITH CARRYING BELT AND LEATHER CASE.</p>\r\n', 'assets/images/products/650/50095_1.jpg', 1, '2023-04-18 15:34:31', '0000-00-00 00:00:00'),
(35, 10, 'ICF-J40', '4-Bands World Wide Portable Radio', '<p>FM/MW/SW1/SW2 4 BANDS WORLD WIDE PORTABLE RADIO, DC ONLY, IC VERSION, 4.5V (UM1X3) OPERATED WITH CARRYING BELT &amp; LEATHER CASE.<br />\r\n<br />\r\nFM/MW/SW1/SW2 4 BANDS WORLD WIDE PORTABLE RADIO, AC/DC ONLY, IC VERSION, 4/5V (UM1X3) OPERATED COMPLETE WITH CARRYING BELT &amp; LEATHER CASE.</p>\r\n', 'assets/images/products/650/54709_2.jpg', 1, '2023-04-18 15:34:52', '0000-00-00 00:00:00'),
(36, 10, 'R-218', '2 or 3 Band Radio', '<p>2 Band Radio (MW/FM)<br />\r\nOr 3 Band Radio (MW/FM/SW)</p>\r\n', 'assets/images/products/650/63685_3.jpg', 1, '2023-04-18 15:35:12', '0000-00-00 00:00:00'),
(37, 10, 'R-234', '4 Band Radio', '<p>4 Band Radio (MW/FM/SW1/SW2)</p>\r\n', 'assets/images/products/650/41379_4.jpg', 1, '2023-04-18 15:35:33', '0000-00-00 00:00:00'),
(38, 10, 'R-562D', '3 Band Radio', '<p>3 Band Radio (MW/FM/SW)</p>\r\n', 'assets/images/products/650/25730_5.jpg', 1, '2023-04-18 15:35:55', '0000-00-00 00:00:00'),
(39, 11, 'PS-166', 'Stainless Steel Cordless Kettle', '<p>PS166 STAINLESS STEEL CORDLESS KETTLE<br />\r\n- 1.7 LITRES<br />\r\n- 2000W<br />\r\n- 220V-240V<br />\r\n- 360 DEGREE LOCATION</p>\r\n', 'assets/images/products/650/59245_1.jpg', 1, '2023-04-18 15:36:54', '0000-00-00 00:00:00'),
(40, 11, 'SL-23AWT', 'Dry Iron', '<p>SI-23AWT DRY IRON<br />\r\n- SURE GLIDE<br />\r\n- AUTOMATIC INDICATOR LIGHT<br />\r\n- 220-240V 50-60HZ<br />\r\n- 1000W</p>\r\n', 'assets/images/products/650/49711_2.jpg', 1, '2023-04-18 15:37:14', '0000-00-00 00:00:00'),
(41, 11, 'PS-IK001', 'Insect Killer', '<p>- Product dimension: 23.50 X 29.0 X 12.1 CM<br />\r\n- Working Voltage: AC 230V/50Hz<br />\r\n- Power: 20W<br />\r\n- Black light tube with 3,000 average lifetime hours<br />\r\n- Effective Area: 20 square meters<br />\r\n- Accessory: An iron chain and an iron hook for hanging up<br />\r\n- 3 trays holders<br />\r\n- For indoor / outdoor use</p>\r\n', 'assets/images/products/650/30579_3.jpg', 1, '2023-04-18 15:37:35', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
