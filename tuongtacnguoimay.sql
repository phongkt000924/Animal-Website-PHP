-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 17, 2021 lúc 03:03 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tuongtacnguoimay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cites`
--

CREATE TABLE `cites` (
  `CITES_ID` int(11) NOT NULL,
  `CITES_NAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cites`
--

INSERT INTO `cites` (`CITES_ID`, `CITES_NAME`) VALUES
(1, 'Phụ lục 1: các loài bị đe doạ tuyệt chủng và có thể bị ảnh hưởng do thương mại.'),
(2, 'Phụ lục 2: những loài chưa bị đe dọa nhưng có thể dẫn đến tuyệt chủng.'),
(3, 'Phụ lục 3: Các loài không cần phải thuộc diện đe doạ tuyệt chủng trên toàn cầu.'),
(4, 'Không nằm trong danh mục');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class`
--

CREATE TABLE `class` (
  `CLASS_ID` int(11) NOT NULL,
  `CLASS_NAME` varchar(50) NOT NULL,
  `PHYLUM_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `class`
--

INSERT INTO `class` (`CLASS_ID`, `CLASS_NAME`, `PHYLUM_ID`) VALUES
(1, 'Actinopterygii', 6),
(2, 'Amphibia (Linnaeus, 1758)', 6),
(3, 'Appendicularia', 6),
(4, 'Ascidiacea', 6),
(5, 'Aves', 6),
(6, 'Cephalaspidomorphi', 6),
(7, 'Elasmobranchii', 6),
(8, 'Holocephali', 6),
(9, 'Leptocardii', 6),
(10, 'Mammalia', 6),
(11, 'Myxini', 6),
(12, 'Reptilia (LAURENTI, 1768)', 6),
(13, 'Sarcopterygii', 6),
(14, 'Thaliacea', 6),
(15, 'Bivalvia', 18),
(16, 'Caudofoveata', 18),
(17, 'Cephalopoda', 18),
(18, 'Gastropoda', 18),
(19, 'Monoplacophora', 18),
(20, 'Polyplacophora', 18),
(21, 'Scaphopoda', 18),
(22, 'Solenogastres', 18),
(23, 'Aldanellidae', 18),
(24, 'Ambonychidae', 18),
(25, 'Anetshellidae', 18),
(26, 'Bipulvinidae', 18),
(27, 'Bransoniidae', 18),
(28, 'Bucanellidae', 18),
(29, 'Cambridiidae', 18),
(30, 'Camerothecidae', 18),
(31, 'Ceratoconidae', 18),
(32, 'Cliospiridae', 18),
(33, 'Coleolidae', 18),
(34, 'Conocardiidae', 18),
(35, 'Contractenidae', 18),
(36, 'Coreospiridae', 18),
(37, 'Cornulitidae', 18),
(38, 'Crassilinidae', 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `distribution`
--

CREATE TABLE `distribution` (
  `DISTRIBUTION_ID` int(11) NOT NULL,
  `DISTRIBUTION_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `distribution`
--

INSERT INTO `distribution` (`DISTRIBUTION_ID`, `DISTRIBUTION_NAME`) VALUES
(3, 'Ít gặp'),
(1, 'Không còn nhìn thấy'),
(4, 'Phổ biến'),
(2, 'Rất ít gặp'),
(5, 'Rất phổ biến');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `family`
--

CREATE TABLE `family` (
  `FAMILY_ID` int(11) NOT NULL,
  `FAMILY_NAME` varchar(50) NOT NULL,
  `ORDERS_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `family`
--

INSERT INTO `family` (`FAMILY_ID`, `FAMILY_NAME`, `ORDERS_ID`) VALUES
(1, 'Albanerpetontidae', 3),
(2, 'Apoda', 3),
(3, 'Caeciliidae', 3),
(4, 'Chikilidae', 3),
(5, 'Dermophiidae', 3),
(6, 'Eocaeciliaidae', 3),
(7, 'Herpelidae', 3),
(8, 'Ichthyophiidae (Taylor, 1968)', 3),
(9, 'Indotyphlidae', 3),
(10, 'Rhinatrematidae', 3),
(11, 'Scolecomorphidae', 3),
(12, 'Siphonopidae', 3),
(13, 'Typhlonectidae', 3),
(14, 'Allophrynidae', 1),
(15, 'Alsodidae', 1),
(16, 'Alytidae', 1),
(17, 'Aromobatidae', 1),
(18, 'Arthroleptidae', 1),
(19, 'Ascaphidae', 1),
(20, 'Astylosternidae', 1),
(21, 'Batrachylidae', 1),
(22, 'Bombinatoridae', 1),
(23, 'Brachycephalidae', 1),
(24, 'Brevicipitidae', 1),
(25, 'Bufonidae (Gray, 1825)', 1),
(26, 'Calyptocephalellidae', 1),
(27, 'Centrolenidae', 1),
(28, 'Ceratobatrachidae', 1),
(29, 'Ceratophryidae', 1),
(30, 'Ceuthomantidae', 1),
(31, 'Conrauidae', 1),
(32, 'Craugastoridae', 1),
(33, 'Cycloramphidae', 1),
(34, 'Dendrobatidae', 1),
(35, 'Dicroglossidae (Anderson, 1871 )', 1),
(36, 'Eleutherodactylidae', 1),
(37, 'Gobiatidae', 1),
(38, 'Heleophrynidae', 1),
(39, 'Hemiphractidae', 1),
(40, 'Hemisotidae', 1),
(41, 'Hylidae', 1),
(42, 'Hylodidae', 1),
(43, 'Hyperoliidae', 1),
(44, 'Leiopelmatidae', 1),
(45, 'Leptodactylidae', 1),
(46, 'Limnodynastidae', 1),
(47, 'Mantellidae', 1),
(49, 'Micrixalidae', 1),
(50, 'Microhylidae (Cóc miệng nhỏ)', 1),
(51, 'Myobatrachidae', 1),
(52, 'Nasikabatrachidae', 1),
(53, 'Nyctibatrachidae', 1),
(54, 'Odontobatrachidae', 1),
(55, 'Odontophrynidae', 1),
(56, 'Palaeobatrachidae', 1),
(57, 'Pelobatidae', 1),
(58, 'Pelodryadidae', 1),
(59, 'Pelodytidae', 1),
(60, 'Petropedetidae', 1),
(61, 'Phrynobatrachidae', 1),
(62, 'Phrynomeridae', 1),
(63, 'Phyllomedusidae', 1),
(64, 'Pipidae', 1),
(65, 'Pseudidae', 1),
(66, 'Ptychadenidae', 1),
(67, 'Pyxicephalidae', 1),
(68, 'Ranidae (Rafinesque, 1814)', 1),
(69, 'Ranixalidae', 1),
(70, 'Rhacophoridae (Hoffman, 1932)', 1),
(71, 'Rhinodermatidae', 1),
(72, 'Rhinophrynidae', 1),
(73, 'Scaphiopodidae', 1),
(74, 'Sooglossidae', 1),
(75, 'Telmatobiidae', 1),
(76, 'Tregobatrachidae', 1),
(77, 'Triadobatrachidae', 1),
(78, 'Agamidae (Gray, 1827)', 6),
(79, 'Gekkonidae (Gray, 1825)', 6),
(80, 'Lacertidae (Gray, 1825)', 6),
(81, 'Scincidae (Opell, 1811)', 6),
(82, 'Pythonidae (Fitzinger, 1826)', 6),
(83, 'Aigialosauridae', 6),
(84, 'Alopoglossidae', 6),
(85, 'Amblycephalidae', 6),
(86, 'Contogeniidae', 6),
(87, 'Cordylidae', 6),
(88, 'Corytophanidae', 6),
(89, 'Crotalidae', 6),
(90, 'Cylindrophiidae', 6),
(91, 'Dactyloidae', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iucn`
--

CREATE TABLE `iucn` (
  `IUCN_ID` int(11) NOT NULL,
  `IUCN_NAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `iucn`
--

INSERT INTO `iucn` (`IUCN_ID`, `IUCN_NAME`) VALUES
(1, 'EX (tuyệt chủng)'),
(2, 'EW (tuyệt chủng trong tự nhiên)'),
(3, 'CR (cực kỳ nguy cấp, có nguy cơ tuyệt chủng)'),
(4, 'EN (nguy cấp cao)'),
(5, 'VU (bị đe dọa, sắp nguy cấp)'),
(6, 'NT (sắp bị đe dọa hoặc nguy cơ nhẹ)'),
(7, 'LC (ít quan tâm)'),
(8, 'DD (không dủ dữ liệu)'),
(9, 'NE (không phân loại hoặc không đánh giá)');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kingdom`
--

CREATE TABLE `kingdom` (
  `KINGDOM_ID` int(11) NOT NULL,
  `KINGDOM_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `kingdom`
--

INSERT INTO `kingdom` (`KINGDOM_ID`, `KINGDOM_NAME`) VALUES
(9, 'Chưa xác định (Incertae Sedis)'),
(5, 'Nấm (Fungi)'),
(4, 'Tảo (Chromista)'),
(6, 'Thực vật (Plantae)'),
(2, 'Vi khuẩn cổ (Archaea)'),
(3, 'Vi trùng-vi khuẩn (Bacteria)'),
(8, 'Vi-rút (Viruses)'),
(1, 'Động vật (Animalia)'),
(7, 'Động vật nguyên sinh (Protozoa)');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nd32`
--

CREATE TABLE `nd32` (
  `ND32_ID` int(11) NOT NULL,
  `ND32_NAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nd32`
--

INSERT INTO `nd32` (`ND32_ID`, `ND32_NAME`) VALUES
(1, 'Nhóm I: nghiêm cấm khai thác, sử dụng vì mục đích thương mại, gồm những loài thực vật rừng, động vật rừng có giá trị đặc biệt về khoa học, môi trường hoặc có giá trị cao về kinh tế, số luợng quần thể còn rất ít trong tự nhiên hoặc có nguy cơ  tuyệt chủng cao.'),
(2, 'Nhóm II: hạn chế khai thác, sử dụng vì mục đích thương mại, gồm những loài thực vật rừng, động vật rừng có giá trị về khoa học, môi trường hoặc có giá trị cao về kinh tế, số luợng quần thể còn ít trong tự nhiên hoặc có nguy cơ tuyệt chủng.'),
(3, 'Không nằm trong danh mục bảo tồn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `ORDERS_ID` int(11) NOT NULL,
  `ORDERS_NAME` varchar(50) NOT NULL,
  `CLASS_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`ORDERS_ID`, `ORDERS_NAME`, `CLASS_ID`) VALUES
(1, 'Anura (Fischer, 1813)', 2),
(2, 'Caudata', 2),
(3, 'Gymnophiona (Muller, 1832)', 2),
(4, 'Crocodylia', 12),
(5, 'Rhynchocephalia', 12),
(6, 'Squamata (OPPEL, 18411)', 12),
(7, 'Testudines', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phylum`
--

CREATE TABLE `phylum` (
  `PHYLUM_ID` int(11) NOT NULL,
  `PHYLUM_NAME` varchar(50) NOT NULL,
  `KINGDOM_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phylum`
--

INSERT INTO `phylum` (`PHYLUM_ID`, `PHYLUM_NAME`, `KINGDOM_ID`) VALUES
(1, 'Annelida', 1),
(2, 'Arthropoda', 1),
(3, 'Brachiopoda', 1),
(4, 'Bryozoa (Ectoprocta)', 1),
(5, 'Chaetognatha', 1),
(6, 'Động vật có dây sống (Chordata)', 1),
(7, 'Cnidaria', 1),
(8, 'Ctenophora', 1),
(9, 'Cycliophora', 1),
(10, 'Echinodermata', 1),
(11, 'Entoprocta', 1),
(12, 'Gastrotricha', 1),
(13, 'Gnathostomulida', 1),
(14, 'Hemichordata', 1),
(15, 'Kinorhyncha', 1),
(16, 'Loricifera', 1),
(17, 'Micrognathozoa', 1),
(18, 'Mollusca', 1),
(19, 'Nematoda', 1),
(20, 'Nematomorpha', 1),
(21, 'Nemertea', 1),
(22, 'Onychophora', 1),
(23, 'Phoronida', 1),
(24, 'Placozoa', 1),
(25, 'Platyhelminthes', 1),
(26, 'Porifera', 1),
(27, 'Priapulida', 1),
(28, 'Rhombozoa (Dicyemida)', 1),
(29, 'Rotifera', 1),
(30, 'Tardigrada', 1),
(31, 'Xenacoelomorpha', 1),
(32, 'Anthocerotophyta', 6),
(33, 'Bryophyta', 6),
(34, 'Charophyta', 6),
(35, 'Chlorophyta', 6),
(36, 'Cycadophyta', 6),
(37, 'Ginkgophyta', 6),
(38, 'Glaucophyta', 6),
(39, 'Gnetophyta', 6),
(40, 'Lycopodiophyta', 6),
(41, 'Lycophyta', 6),
(42, 'Magnoliophyta', 6),
(43, 'Marchantiophyta', 6),
(44, 'Hepatophyta', 6),
(45, 'Polypodiophyta', 6),
(46, 'Monilophyta', 6),
(47, 'Pinophyta', 6),
(48, 'Coniferophyta', 6),
(49, 'Ascomycota', 5),
(50, 'Basidiomycota', 5),
(51, 'Blastocladiomycota', 5),
(52, 'Chytridiomycota', 5),
(53, 'Glomeromycota', 5),
(54, 'Microsporidia', 5),
(55, 'Neocallimastigomycota', 5),
(56, 'Zygomycota', 5),
(57, 'Amoebozoa', 7),
(58, 'Choanozoa', 7),
(59, 'Euglenozoa', 7),
(60, 'Loukozoa', 7),
(61, 'Metamonada', 7),
(63, 'Percolozoa', 7),
(64, 'Sarcomastigophora', 7),
(65, 'Sulcozoa', 7),
(66, 'Acidobacteria', 3),
(67, 'Actinobacteria', 3),
(68, 'Aquificae', 3),
(69, 'Armatimonadetes', 3),
(70, 'Bacteroidetes', 3),
(71, 'Caldiserica', 3),
(72, 'Chlamydiae', 3),
(73, 'Chlorobi', 3),
(74, 'Chloroflexi', 3),
(75, 'Chrysiogenetes', 3),
(76, 'Cyanobacteria', 3),
(77, 'Deferribacteres', 3),
(78, 'Deinococcus-Thermus', 3),
(79, 'Dictyoglomi', 3),
(80, 'Elusimicrobia', 3),
(81, 'Fibrobacteres', 3),
(82, 'Firmicutes', 3),
(83, 'Fusobacteria', 3),
(84, 'Gemmatimonadetes', 3),
(85, 'Lentisphaerae', 3),
(86, 'Nitrospira', 3),
(87, 'Planctomycetes', 3),
(88, 'Proteobacteria', 3),
(89, 'Spirochaetes', 3),
(90, 'Synergistetes', 3),
(91, 'Tenericutes', 3),
(92, 'Thermodesulfobacteria', 3),
(93, 'Thermotogae', 3),
(94, 'Verrucomicrobia', 3),
(95, 'Crenarchaeota', 2),
(96, 'Euryarchaeota', 2),
(97, 'Korarchaeota', 2),
(98, 'Nanoarchaeota', 2),
(99, 'Thaumarchaeota', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `species`
--

CREATE TABLE `species` (
  `ID` int(11) NOT NULL,
  `ScienceName` varchar(50) DEFAULT NULL,
  `VietnameseName` varchar(50) DEFAULT NULL,
  `LocalName` varchar(50) DEFAULT NULL,
  `Family` int(11) NOT NULL,
  `Image1` varchar(50) DEFAULT NULL,
  `Image2` varchar(50) DEFAULT NULL,
  `Image3` varchar(50) DEFAULT NULL,
  `Image4` varchar(50) DEFAULT NULL,
  `Image5` varchar(50) DEFAULT NULL,
  `Morphological` text DEFAULT NULL,
  `Ecological` text DEFAULT NULL,
  `GTSD` text NOT NULL,
  `IUCN` int(11) NOT NULL,
  `VNRL` int(11) NOT NULL,
  `ND32` int(11) NOT NULL,
  `CITES` int(11) NOT NULL,
  `Distribution` int(11) DEFAULT NULL,
  `COORDINATES1` text DEFAULT NULL,
  `COORDINATES2` text DEFAULT NULL,
  `COORDINATES3` text DEFAULT NULL,
  `COORDINATES4` text DEFAULT NULL,
  `COORDINATES5` text DEFAULT NULL,
  `SPECMEN_CODITION` text DEFAULT NULL,
  `HABITAT` text DEFAULT NULL,
  `LOCATION` text DEFAULT NULL,
  `COLLECTION_DATE` date DEFAULT NULL,
  `COLLECTOR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `species`
--

INSERT INTO `species` (`ID`, `ScienceName`, `VietnameseName`, `LocalName`, `Family`, `Image1`, `Image2`, `Image3`, `Image4`, `Image5`, `Morphological`, `Ecological`, `GTSD`, `IUCN`, `VNRL`, `ND32`, `CITES`, `Distribution`, `COORDINATES1`, `COORDINATES2`, `COORDINATES3`, `COORDINATES4`, `COORDINATES5`, `SPECMEN_CODITION`, `HABITAT`, `LOCATION`, `COLLECTION_DATE`, `COLLECTOR`) VALUES
(1, 'Ichthyophis nguyenorum Nishikawa, Matsui, and Orlo', 'Ếch giun nguyễn', 'Rắn trun đĩa haha', 8, '1SPt5-5-Eu5eLhNXVGMijMrIqagolFZ4i', '1g08XkVrfOuc6Fx7YDp6eA6j14XZnv1Ck', '1G_ygNQQ1GGmHk1AA8y7H5jowamzBUN6g', '1P8mqWYHDDg3gYo65RSS8h8vNiY3DsHTr', '14bhLrXAcrHEU9DyzHabr4kwErBCvOZqw', 'Đặc điểm chẩn loại: cơ thể tròn, dẹt mặt bụng; chóp đuôi cùn, không có dạng mũ; không có đốm màu vàng mặt bụng; đầu rộng nhất ở góc mép miệng, hẹp dần về trước; mút mõm tròn; lỗ mũi nằm gần bờ trước mép miệng; số vòng quanh thân: 312 – 318; sọc vàng rộng chạy liên tục từ sau mắt đến huyệt (Nishikawa et al.,2012). \n	Đặc điểm hình thái: SVL 201,3 mm. Dài đuôi: 2,6 – 3,5; rộng đuôi: 2,8 – 3,5. Rộng đầu (HW: 6,6). Dài đầu hơn rộng đầu (HL/HW: 1,25-1,47). Cơ thể hơi tròn, dài, dạng rắn. Đầu dẹp, láng; rộng nhất ở mép miệng, hẹo về phía đầu. Mút mõm tròn; dài mõm bằng với ngang đầu ở vị trí mắt. Mắt nhỏ, không mi mắt, có một đôi râu (tentacle) ngắn nằm phía trước mắt. Hai bên thân có sọc  màu vàng bắt đầu từ sau mép miệng đến lỗ huyệt. Số nếp gấp quanh thân: 280 – 300; ở đuôi: 7-8. Đuôi ngắn hơi dẹt ở mặt bụng, phần đỉnh cùn, không có đốm màu cam hay vàng  ở mặt bụng. Mặt lưng có màu tím đen, bụng màu hoa cà nhạt, hai bên sườn có sọc màu vàng liên tục, không đứt quãng, chạy từ khoảng giữa hàm trên (mấu xúc - tu) đến gần mút đuôi. Mắt có viền mỏng màu trắng đục.\n	Ghi chú:  Loài Ichthyophis bannanicus phân biệt với Ichthyophis nguyenorum dựa trên các đặc điểm: số nếp vòng quanh cơ thể của I. nguyenorum (312 – 318) ít hơn so với I. bannanicus (340); sọc bên thân của I. nguyenorum kéo dài đến mút đuôi so với sọc bị đứt quãng ở phía sau đuôi của I. bannanicus Nishikawa et al. (2012).', 'Sống ở các vực nước (ao, vũng...) có nhiều bùn và lá mục, hay các khu vực đất nông nghiệp. Thức ăn gồm côn trùng, giun đất, nhện và những loài không xương sống nhỏ khác.', 'Chưa xác định', 7, 5, 3, 4, 4, '9.571639 N, 105.748757 E ', '9.563858 N, 105.742898 E', '9.572843 N, 105.745688 E', '9.571639 N, 105.748757 E', '9.571639 N, 105.748757 E', 'Thu được mẫu', 'Rừng tràm đặc dụng,  rừng tràm trồng', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-13', 'Nguyễn Quang Cường'),
(2, 'Duttaphrynus melanostictus (Schneider, 1799)', 'Cóc nhà', 'Cóc', 25, '11e4vQj953s1KGSkE2yeDnUf6t_OUcfOI', '1Gk5XFK-dObncE5ofYi6deeOr24v_9YsA', '1ho3UAHmYl_v901oVcA7kUpzyilSk-LXw', '1J-l29yz_Fbnb58X2YdTUYt2e9kPvP1nK', '', 'Đặc điểm chẩn loại: Kích thước cơ thể trung bình, mắt khỏe; phía trên ổ mắt, phía sau ổ mắt, phía trên màng nhĩ và phía trước mắt có nhiều gai nhọn; mõm nhọn, tuyến mang tai lớn, có chều dài hơn chiều rộng; cơ thể có nhiều nốt sần lớn và nhỏ; ngón tay thứ I dài hơn ngón tay thứ II; khớp cổ chân chạm giữa tuyến mang tai khi xếp dọc theo thân', 'Duttaphrynus melanostictus là loài phổ biến, được bắt gặp trên sinh cảnh rừng tràm đặc dụng, rừng tràm khai thác; phân bố rộng khắp khu vực khảo sát .Là loài hoạt động về đêm, kiếm mồi trên nền rừng và trú ngụ trong các hốc cây. Đầu mùa mưa thường tập trung ở các vũng nước đọng trong khu vực và các con đực gọi bạn tình suốt từ tối đến khoảng 8 giờ sáng.', 'Làm thực phẩm', 9, 9, 3, 4, 4, '9.567941 N, 105.745900 E', '9.571219 N, 105.746927 E', '9.570929 N, 105.744803 E', '9.566659 N, 105.742109 E', '', 'Thu được mẫu', 'Rừng tràm đặc dụng, rừng tràm khai thác', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-13', 'Nguyễn Quang Cường'),
(3, 'Kaloula pulchra Gray, 1831', 'ỄN ương', 'Ễn ương', 50, '13SdgByNjDXlZm4rEp0qBmgNnQTqpjjff', '1zTKJj4cjMlNnpTCpuUKy6Q8iO3Cv4BH4', '', '', '', 'Đặc điểm chẩn loại: Ngón chi dẹp và đầu ngón tay mở rộng; toàn bộ mặt lưng màu nâu với 2 dãy màu vàng sáng hoặc vàng nâu chạy dọc từ giữa 2 mắt qua phía trên mắt và kéo dai đến háng; trên ngón có vết tích của màng bơi.\nĐặc điểm hình thái: Kích thước trung bình (SVL: 80.3). Cơ thể có hình tam giác khi nhìn từ bên trên, đầu ngắn so với chiều dài thân (HL/SVL: 0,24); chiều dài đầu nhỏ hơn chiều rộng đầu (HL/HW: 0,74); khóe mắt nhỏ; vùng má xiên và hướng lên; mũi tù và ngắn, lỗ mũi nằm gần chóp mỏ và hướng sang 2 bên; khoảng cách giữa hai lỗ mũi tương đương mí mắt trên; màng nhĩ không rõ ràng; nếp gấp mờ vòng qua chẩm đến sau mắt và kết thúc ở ngay trước cánh tay.\nDa trơn láng với các nốt sần rải rác trên lưng, nhiều nhất ở phần dưới của mặt lưng, phía sau đùi và một số trên cánh tay. Mặt lưng màu nâu sẫm. Hai dảy màu vàng sáng được bao bọc bởi viền màu nâu đậm hoặc đen bắt đầu từ giữa hai mắt và kéo dài đến háng; hai dảy màu liền nhau ở giữa 2 mắt, hẹp ở sau mắt và nở rộng trên mặt lưng. Một số cá thể giữa lưng có vệt đen hoặc nâu sậm kéo dài từ giữa 2 mắt đến tận xương cụt. Các nốt sần trên lưng có màu tương tự màu của hai dảy màu trên lưng. Trên các chi có màu không đều, các mảng nhỏ màu vàng sáng không đều xen lẫn trên nền màu nâu sẫm; một vệt màu sáng không liên tục phía trên mặt lưng của ống chân sau. Mặt bụng màu trắng sáng với các hoa văn xám dạng khói, phần da trên cổ họng màu đậm hơn trên bụng.\nCánh tay hơi dài; ngón tay dài và có vết tích của màng bơi; to dần từ gốc ngón đến đầu ngón, đĩa ngón rộng theo chiều ngang. Ngón thứ nhất ngắn hơn ngón thứ 2; củ bàn vừa phải; có 3 củ bàn, củ bàn ngoài dài, củ bàn giữa nhỏ nhất, bàn tay trơn và không có nốt sần phụ. Thứ tự chiều dài tương đối của các ngón tay: III>IV>II>I.\nChân ngắn, chỉ 1/3 xương đùi tự do; cổ chân chạm đến nách khi xếp song song với trục cơ thể. Hai gót chân không chạm nhau khi gập gối và xếp vuông góc trục cơ thể. Bàn chân dài hơn bàn tay nhưng các ngón chân mảnh khảnh hơn; đĩa ngón chân nhỏ tròn, không rộng theo chiều ngang như đĩa ngón tay; ngón chân có vết tích của màng bơi. Có 2 củ bàn chân; củ bàn chân trong dài, nhô cao, cạnh không rõ ràng; củ bàn chân ngoài nhỏ tròn. Thứ tự chiều dài tương đối các ngón chân: IV>III>V>II>I.', 'Một mẫu cái duy nhất của loài này được tìm thấy trên nền rừng trong khu vực rừng tràm Mỹ Phước khai thác vào mùa mưa (tháng 7). Là loài hoạt động về đêm, thường ẩn nấp trong các hốc cây, hoặc bên dưới lớp lá mục trong mùa khô. Thường ra ngoài kiếm ăn khi độ ẩm không khí cao hoặc sau cơn mưa. Sinh sản vào mùa mưa, con đực thường phát tiếng kêu đặc trưng khi đang ngâm mình trên mặt nước (Kalamadi et al. 2002).\nGhi chú: qua phỏng vấn, người dân sinh sống xung quanh khu vực nghiên cứu cho biết trước đây chưa từng tìm thấy loài này trong tự nhiên.', 'Chưa xác định', 9, 9, 3, 1, 3, '9.572816 N, 105.747786 E', '', '', '', '', 'Thu được mẫu', 'Rừng tràm trồng', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-07-03', 'Nguyễn Quang Cường'),
(4, 'Microhyla heymonsii Vogt, 1911', 'Nhái bầu heymon', 'Nhóc nhen', 50, '1dAspuOaa2rVuawgZGO2ZYLt7WlOqO8sW', '1CHHTR93V_xNb53pEwCd_axxOo3G85qum', '1kSxroGIm5vdaB95quJQ3CAPeWCev3KtE', '1T28URxMeDGBxHtFZYvFAt7iHr81zyK0f', '1VO50fyXU8VAbdi0o5DHsMEXpkLYbZp04', 'Kích thước cơ thể nhỏ; lưng phẳng, màu xám hoặc nâu ở trên, thường có đường kẻ giữa lưng và một hoặc 2 đốm đen ở ngay trung tâm của lưng. Mặt bên của đầu và thân có vệt đen kéo dài đến háng. Màng nhĩ ẩn; ba củ bàn tay lớn và rõ ràng; kích thước gần bằng nhau. Hai củ bàn chân, củ bàn ngoài lớn hơn. Màng bơi giữa các ngón nhỏ và mảnh. Đầu ngón mở rộng thành các đĩa', 'Vào mùa mưa, các các thể của Microhyla heymonsi thường được tìm thấy trên nền rừng, trên các thảm lá mục hoặc cỏ. Chúng thường tập trung nhiều ở các vũng nước đọng hoặc các khu vực ngập nước cạn vào mùa mưa. Con đực cótiếng kêu đặc trưng nhờ túi âm ở cổ họng. Các sinh cảnh trong khu vực có sự hiện diện của loài này gồm rừng tràm đặc dụng và rừng tràm khai thác.', 'Chưa xác định', 9, 9, 3, 2, 4, '9.570890 N, 105.747758 E', '9.569821 N, 105.742266 E', '', '', '', 'Thu được mẫu', 'Rừng tràm khai thác, rừng tràm trồng', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-07-04', 'Nguyễn Quang Cường'),
(5, 'Hylarana erythraea (Schlegel, 1837)', 'Chàng xanh', 'Bù tọt', 68, '1u-EnqYum36rkgofdJrBIanPmaMvufy2l', '10lCRsK7vhMTtFm9v5sG6Kt1t1wZLi4du', '14sIJhWFjZuh7PqdEWFsT7CDDgEl8FA9-', '1C_Ctdntw2X6UjdvnzG0MFOW_K7ADo7xS', '1l6ika5QSYBj-vxcmok5wkfU6nwrsKltf', 'Cơ thể có kích thước tương đối lớn, thường có màu xanh với nếp gấp da trên lưng rộng màu vàng, dảy màu đen ở mặt bên của đầu và cơ thể, mũi nhọn và nhô ra, ngón tay mảnh khảnh, ngón thứ nhất hơi ngắn hơn ngón thứ 2, ngón chân gần như có màng bao phủ hoàn toàn, đĩa nhỏ trên đầu ngón, cổ chân chạm chóp mũi, không có hoa văn vòng quanh chi nhưng có các dấu song song chân, có túi thanh âm, con đực có chai sinh dục trên ngón tay thứ 1.', 'Chàng xanh được tìm thấy trên các sinh cảnh rừng tràm đặc dụng, rừng dừa nước và lung ở Rừng tràm Mỹ Phước. Là loài hoạt động về đêm, chúng được tìm thấy nhiều vào mùa mưa ở ven các kênh nước, ao nước nhỏ, trên lớp thực vật nổi hoặc cả trên cành cây cách mặt đất từ 1-1,5m.', 'Chưa xác định', 9, 9, 3, 3, 4, '9.563974 N, 105.742907 E', '9.574045 N, 105.734023 E', '9.575835 N, 105.739572 E', '9.566833 N, 105.733836 E', '', 'Thu được mẫu', 'Rừng tràm đặc dụng, rừng dừa nước, lung', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-17', 'Nguyễn Quang Cường'),
(6, 'Polypedates megacephalus Hallowell, 1861', 'Ếch cây mép trắng', 'Hót cổ', 70, '1P7EV53D8yg3ZOLwaNKtRiQdPLzBSCait', '1gKYR9qHwrxOa-ziZC-5CkrxFWptlALso', '1RI_M7FECV4d7bQhK8S6BzgJSVb5HVHM9', '1R05SImE9fn6gob8sAE8OYUOTjtN_oJIQ', '1witFgiWDofH95NguqHHEHqavvwq_1TCl', ': Loài có kích thước lớn, chiều dài đầu thân lên đến 75mm (Taylor); được đặc trưng bởi phần da trên đầu dính chặt với vùng mũi và xương trán; con đực có túi thanh âm; chiều rộng gian ổ mắt rộng hơn chiều rộng mí mắt trên; màng nhĩ rõ ràng; ngón tay có màng rất ít, ngón chân có màng bao phủ 2/3 hoặc nhiều hơn; chiều rộng đĩa ngón nhỏ hơn màng nhĩ; cổ bàn chân chạm giữa mắt với lỗ mũi hoặc chóp mũi khi gập sát thân; răng lá mía phát triển; hoa văn chữ x trên vùng đầu – vai.', 'Là loài phân bố đa dạng trong các sinh cảnh từ rừng tràm đặc dụng, rừng tràm trồng, rừng dừa nước trong khu vực Rừng tràm Mỹ Phước. Các cá thể được phát hiện ở các vị trí ven các vũng nước nhỏ, trên cành cây hoặc bụi cây cách mặt đất khoảng 1m. Thường tìm thấy nhiều vào mùa mưa, có tập tính đẻ trứng vào các tổ bọt tự tạo bên trên hoặc cạnh các vũng nước.', 'Chưa xác định', 9, 9, 3, 4, 4, '9.562804 N, 105.735163 E', '9.565287 N, 105.742496 E', '9.568298 N, 105.743803 E', '9.567662 N, 105.733728 E', '9.575595 N, 105.746317 E', 'Thu được mẫu', 'Rừng tràm đặc dụng, rừng tràm khai thác, rừng dừa nước', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-14', 'Nguyễn Quang Cường'),
(7, 'Calotes versicolor (Daudin, 1802)', 'Nhông xanh, Nhông hàng rào, Kì nhông', 'Kì nhông', 78, '1yU01M0KhxmBINIkpYgPYr0-FdKHkHr4V', '190aqaXY26T7G0924gyfO9R28LCQqgx5E', '1y8gsVPs_fq2M8Dol_xg1YZmhegYcdEwj', '1Rc6JVKR5of48kUnSn4dvxD2YBKuz_Qax', '1fBrHI93hTLVUyEi5NvPGi7Su8SeHnrlI', 'Chiều dài đầu thân (SVL) đến 95mm (quần thể ở Đông Nam Á); cơ thể mạnh mẽ, dẹp; đầu khá lớn (đặc biệt ở con đực trưởng thành); vảy nhọn ở phía sau và bên trên; không có nếp gấp trước cánh tay hoặc lỗ trước vai, có 2 gai khá rõ trên màng nhĩ; có 40-45 hàng vảy giữa thân. Màu sắc trên thân đa dạng, đầu màu vàng cam hoặc đỏ sáng, con đực có thêm mảng đen ở cổ, và mờ dần đến màu hơi xám ở các thời điểm khác nhau. Con cái cũng có màu vàng đến xám sau khi giao phối', 'Trong khu vực nghiên cứu, Calotes versicolor (DAUDIN, 1802) là loài phổ biến, có mặt ở các sinh cảnh rừng tràm khai thác, rừng tràm đặc dụng; hoạt động ban ngày, thường được phát hiện nhiều nhất trong khoảng thời gian từ 8 giờ sáng đến 10 giờ.  Ban đêm chúng thường ngủ trên các cành cây nhỏ cách mặt đất từ 1m - 3m. Con non được phát hiện nhiều vào đầu mùa mưa trong các tháng 7 và 8.', 'Chưa xác định', 9, 9, 3, 4, 4, '9.575614 N, 105.749954 E', '9.573805 N, 105.751692 E', '9.568964 N, 105.745518 E', '', '', 'Thu được mẫu', 'Rừng tràm khai thác, rừng tràm đặc dụng', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-18', 'Nguyễn Quang Cường'),
(8, 'Gehyra multilata (Weigmann,1835)', 'Thằn lằn 4 móng', 'Thằn lằn nhà', 79, '1dEO2xt0jbV5p4KXXtyIjQ0akIjgpLarq', '1nnFbJiWrhpdt-knfDOAYGKxz-tLO3scw', '1iXwwtDoJBcLKJArg7H6I8VxaPl09ujYt', '1XSKok5YNj-mjm68z4-Badrf5N-gWOTfG', '1K06DEe2wXMymHv9Nz1Bf4Sfh0pi1dFx-', 'Vảy dưới ngón rộng, phân chia, 2 hàng vảy nhỏ hoăc nhiều hơn, màng giữa ngón rất nhỏ, màng giữa ngón chân lớn hơn, 2-3 cặp vảy sau hàm, 25-41 vảy mang lỗ feromol trước huyệt xếp hình vòng cung, giữa tạo thành góc; vảy trên mũi hơi lớn tiếp xúc với các vảy khác ở giữa; đuôi dẹp, thường phẳng ở mặt dưới, mặt bên có nhiều hoặc ít răng cưa, da dễ đứt.', 'Là loài hoạt động về đêm, được tìm thấy trên các thân gỗ lớn, trên các tường và công trình xây dựng nhân tạo trong khu rừng tràm Mỹ Phước. Chia sẻ môi trường sống với các loài Hemidactylus frenatus, Hemidactylus platyurus, Hemidactylus garnotii.', 'Chưa xác định', 9, 9, 3, 4, 4, '9.572150 N, 105.749171 E', '9.571834 N, 105.748832 E', '9.574353 N, 105.750457 E', '', '', 'Thu được mẫu', 'Rừng trồng', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-14', 'Nguyễn Quang Cường'),
(9, 'Hemidactylus garnotii (Conant and Collins, 1991)', 'Thạch sùng garnot', 'Thằn lằn', 79, '1Pv4QpQ-XGXYkW3ledU52ga8n340JEecS', '1W7VhA1EtUeXw0-xz5ZVA0GmNyOnHaqhK', '1uFDKV9_aA4GK4wQaO3Ja7sw2SIm1HKQR', '1dMNhLBobuf6udZnR9OSpzdnilPRZaBXS', '1b6P0ANW6Prltr6lDAkChBN_2t-Or5v2n', 'Đặc điểm chẩn loại:  mút mõm tù, dài mõm-mắt lớn hơn khoảng cách giữa mắt-tai (SnEye 5,13; EyeEar 3,66); lỗ mũi ở giữa tấm mõm.; đường kính tai không quá 1/2 lần đường kính mắt (EarL 1,87; OrbD4,28); 11 tấm mép trên, 10 tấm mép dưới; tấm cằm gấp hai lần tấm mép; tấm mõm rộng bằng cao.\n\nĐặc điểm hình thái: Đầu lớn (HL 7,91; HW 6,43; HH 4,18).  Lỗ tai bé, gần tròn, đường kính tai không quá 1/2 lần đường kính mắt. Tấm cằm có dạng hình tam giác, dài hơn 2 lần các tấm mép bên cạnh. Hai đôi tấm sau cằm, đôi I lớn hơn đôi II và  tiếp xúc nhau. Vảy vùng họng dạng hạt. Đuôi rất dẹp, sắc, có răng cưa ở hai bên, phía trên phủ các vảy nhỏ đồng dạng, mặt dưới phẳng với những vảy lớn xếp gối lên nhau và một hàng vảy ngang mở rộng ở giữa đùi. Thân màu nâu xám với các đốm hoặcvết không rõ ràng, thường có những điểm nhỏ màu trắng; có vạch tối dọc theo haibên đầu. Bụng trắng.  \n', 'Ban ngày thường trú trong các hốc cây nhỏ hoặc bên trong lớp vỏ cây mục, ban đêm kiếm mồi trên thân tràm và các thân gỗ lớn trong khu vực rừng tràm Mỹ Phước. Là loài ít gặp; chia sẻ sinh cảnh với loài Hemidactylys frenatus và Hemidactylus platyurus. ', 'Chưa xác định', 9, 9, 3, 4, 3, '9.570530 N, 105.746281 E', '9.570154 N, 105.745585 E', '', '', '', 'Thu được mẫu', 'Rừng tràm đặc dụng', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-07-03', 'Nguyễn Quang Cường'),
(10, 'Hemidactylus frenatus Schlegel in Duméril & Bibron', 'Thạch sùng đuôi sần', 'Thạch sùng', 79, '1QbchYJMpLVv9Bo7Fz8cXZDgavCVUTe4l', '19imjQ05jJmwpL4m1saUEavpVIiB-aMkU', '1mr6-En-h1ef9_0z9SEzC2zWSu7ynN7Px', '', '', 'Cơ thể được bao phủ bởi các vảy dạng hạt nhỏ lẫn với một vài vảy trơn tròn hoặc hơi có dạng sóng, nốt sần hình nón; con đực có một chuỗi liên tiếp các lỗ trước huyệt, 14-19 lỗ ở mỗi bên; 2 cặp vảy sau môi dưới, cặp bên ngoài lớn tương tự cặp bên trong, cả 2 đều chạm vảy hàm dưới; trên đuôi có các nốt sần dạng gai cao xếp theo hình xoắn ốc ', 'Là loài hoạt động về đêm, sinh sống cùng với con người, thương tìm thấy trong tường nhà hoặc các công trình nhân tạo. Trong tự nhiên, loài này kiếm ăn trên các thân cây gỗ lớn, thức ăn là các loài côn trùng sống trong khu vực. Chúng thường đẻ trứng vào các hốc cây khô, kín đáo, trứng nhỏ, màu trắng ngà và không dính.', 'Chưa xác định', 9, 9, 3, 4, 4, '9.568512 N, 105.745714 E', '9.565689 N, 105.746787 E', '9.572158 N, 105.748482 E', '', '', 'Thu được mẫu', 'Rừng tràm đặc dụng, rừng tràm trồng, nơi ở của con người', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-16', 'Nguyễn Quang Cường'),
(12, 'Ichthyophis nguyenorum Nishikawa, Matsui, and Orlo', 'Ếch giun nguyễn', 'Rắn trun đĩa', 8, '1w1Fz6UOGglW9q-Noy3eg7oKfJshRGUHr', '1pW1Nc0NHa9bAIu2f9mQCeeSTVODE9GPK', '1Gb9g1GIkW7AuNeJ09P8Ko2Kh3eeMpoHF', '1GlHiMXevmRyCBRH69s4eePdxtY0yeUNF', '1pSKpl2Bm9bP9FUEe72dvry9X9Kvy_ns7', 'Đặc điểm chẩn loại: cơ thể tròn, dẹt mặt bụng; chóp đuôi cùn, không có dạng mũ; không có đốm màu vàng mặt bụng; đầu rộng nhất ở góc mép miệng, hẹp dần về trước; mút mõm tròn; lỗ mũi nằm gần bờ trước mép miệng; số vòng quanh thân: 312 – 318; sọc vàng rộng chạy liên tục từ sau mắt đến huyệt.\n	Đặc điểm hình thái: SVL 201,3 mm. Dài đuôi: 2,6 – 3,5; rộng đuôi: 2,8 – 3,5. Rộng đầu (HW: 6,6). Dài đầu hơn rộng đầu (HL/HW: 1,25-1,47). Cơ thể hơi tròn, dài, dạng rắn. Đầu dẹp, láng; rộng nhất ở mép miệng, hẹo về phía đầu. Mút mõm tròn; dài mõm bằng với ngang đầu ở vị trí mắt. Mắt nhỏ, không mi mắt, có một đôi râu (tentacle) ngắn nằm phía trước mắt. Hai bên thân có sọc  màu vàng bắt đầu từ sau mép miệng đến lỗ huyệt. Số nếp gấp quanh thân: 280 – 300; ở đuôi: 7-8. Đuôi ngắn hơi dẹt ở mặt bụng, phần đỉnh cùn, không có đốm màu cam hay vàng  ở mặt bụng. Mặt lưng có màu tím đen, bụng màu hoa cà nhạt, hai bên sườn có sọc màu vàng liên tục, không đứt quãng, chạy từ khoảng giữa hàm trên (mấu xúc - tu) đến gần mút đuôi. Mắt có viền mỏng màu trắng đục.\n	Ghi chú:  Loài Ichthyophis bannanicus phân biệt với Ichthyophis nguyenorum dựa trên các đặc điểm: số nếp vòng quanh cơ thể của I. nguyenorum (312 – 318) ít hơn so với I. bannanicus (340); sọc bên thân của I. nguyenorum kéo dài đến mút đuôi so với sọc bị đứt quãng ở phía sau đuôi của I. bannanicus Nishikawa et al. (2012).', 'Sống ở các vực nước (ao, vũng...) có nhiều bùn và lá mục, hay các khu vực đất nông nghiệp. Thức ăn gồm côn trùng, giun đất, nhện và những loài không xương sống nhỏ khác.', 'Chưa xác định', 7, 5, 2, 2, 4, '9.571639 N, 105.748757 E', '9.563858 N, 105.742898 E', '9.572843 N, 105.745688 E', '9.571639 N, 105.748757 E', '9.571639 N, 105.748757 E', 'Thu được mẫu', 'Rừng tràm đặc dụng, rừng tràm khai thác', ' Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-13', 'Nguyễn Quang Cường'),
(13, 'Fejervarya limnocharis (Gravenhorst, 1829)', 'Nhái Ngóe', 'Nhái ', 35, '14vN4pz76NYcP3dk-gogAWCQdcJC-OHnQ', '11bZoCZofkAdAFC1NRBKsE2F7FH3dzdCc', '18cDrgsu9etfsa2yVIjoHryVqb_POucGZ', '1ahXZxegL8tAY5LLq7M2Oa6778AvUuU6k', '1rY2dEgfC7iTLEfAzG-lpskx-UYgo8zZz', 'Đầu ngón hơi phồng, không hoặc hơi rộng hơn chữa số, ngón đầu tên dài hơn ngón thứ 2, ngón chân có màng bao phủ từ 1/2 tới 2/3, củ bàn chân ngoài tách biệt với màng, củ bàn chân trong dẹp và củ bàn chân ngoài nhỏ, lung có nhiều nếp gấp và nốt sần nhỏ, con đực có túi kêu màu đen', 'Là loài phổ biến trong khu vực rừng tràm Mỹ Phước, thường được tìm thấy trong sinh cảnh rừng tràm khai thác, rừng tràm đặc dụng. Nhái sọc hoạt động ban đêm, thức ăn là các loài côn trùng sống trong khu vực. Xuất hiện nhiều vào đầu mùa mưa, con đực có túi thanh âm phát tiếng kêu đặc trưng thu hút con cái. Con đực và con cái có hiện tượng \"bắt cặp\" khi giao phối; con cái đẻ trứng vào các ao hoặc vũng nước đọng trong khu vực; trứng dính vào nhau thành mảng lớn nổi trên mặt nước.', 'Làm thực phẩm', 7, 9, 3, 4, 4, '9.575814 N, 105.746348 E', '9.575835 N; 105.739632 E', '9.570419 N; 105.732745 E', '9.564791 N; 105.737014 E', '9.563098 N; 105.744053 E', 'Thu được mẫu', 'Rừng tràm khai thác, rừng tràm đặc dụng', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-13', 'Nguyễn Quang Cường'),
(14, 'Fejervarya cancrivora (Gravenhorst, 1829)', 'Ếch cua', 'Ếch', 35, '1KDIOjdWe0WWtjnKOwiOjJQ8ZYMD6YoVT', '1i6ZwiNE05NWNBIjEwBPWcfpt91Fy9Iql', '12wjSL0CgzmmwbnZm3Wo5VhAXJP8J0uZj', '', '', '	Đặc điểm chẩn loại:  lỗ mũi hướng thẳng lên, khoảng gian mắt rộng ½ độ rộng mi mắt. Lỗ mũi lệch về phía mút mõm. Vùng má lõm, xiên. Màng nhĩ rõ. Ngón tay I dài hơn ngón tay II. Khớp cổ bàn tiếp xúc mắt, hai gối chạm nhau khi gập hai chân lại. Mép ngoài các ngón chân có rìa da mỏng, nếp gấp vùng xương cổ bàn mỏng. Củ bàn trong mảnh, dài, không có củ bàn ngoài. Lưng có nhiều nếp da ngắn, gián đoạn; các nếp da ngắn hai bên lưng nối nhau thành hàng. Răng xương lá mía xiên. Màng da ¾ . Giữa vùng trán có một điểm mắt nhỏ, màu trắng. \n\nĐặc điểm hình thái: Cơ thể có kích thước trung bình, đầu hẹp.  (SVL: 48.5-57.5 mm) Dài đầu lớn hơn rộng đầu (HL/HW: 1,13-1,24 ). Mút mõm tròn.  Lỗ mũi hình oval, có van nhỏ. Dài mũi lớn hơn đường kính mắt (ED/SNL: 0,59 – 0,71 mm). Lưỡi lớn; con ngươi mắt tròn. Chủy khóe mắt tròn, vùng gian mắt- mũi lõm, vùng gian ổ mắt phẳng. chiều rộng mi mắt trên lớn hơn khoảng cách giữa 2 hốc mắt (IO/UEW: 0,53-0,64). U lồi vùng thái dương tròn. Đường kính màng nhĩ lớn hơn khoảng cách từ màng nhĩ đến mắt (E-T/TD: 0,48-0,65); đường kính màng nhĩ nhỏ hơn đường kính mắt (TD/ED: 0,7-0,72), có một nếp gấp da chạy từ sau mắt vòng lên trên màng nhĩ và kéo xuống đến trước cánh tay. \nCơ thể có màu nâu, xanh nâu, xám với những vệt đậm, không đều, nằm rải rác quanh mép miệng và chi sau. Bụng có màu trắng đôi khi có những vệt đậm màu nằm rải rác, da trơn, láng. Mặt lưng có nhiều nếp da ngắn, chạy dọc cơ thể. Hai bên đầu và phần hông sau có các mụn tuyến nhỏ. Các ngón tay dài, mút nhọn, một số ngón có rèm da. Thứ tự các ngón chi trước: III>IV>I>II.  Ngón chân dài có màng da và rèm da, độ dài các ngón theo thứ tự: IV>III>V>II>I. \n', 'F. cancrivora là loài lưỡng cư có sự thích nghi cao với nồng độ muối ổn định trong môi trường nước.  Chúng chỉ cần vài giờ để thích nghi với môi trường sống khi chuyển từ nước ngọt sang nước mặn nhờ quá trình tích lũy ure làm tăng nồng độ các chất trong tế bào. F. cancrivora có thể sống ở môi trường có nồng độ muối 650 - 950 mOsm/L trong nhiều tháng. ', 'Làm thực phẩm', 7, 9, 3, 4, 4, '9.566779 N, 105.746481 E', '9.567480 N, 105.740065 E', '9.566335 N, 105.742257 E', '', '', 'Thu được mẫu', 'Rừng tràm đặc dụng, rừng tràm khai thác', ' Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-07-03', 'Nguyễn Quang Cường'),
(15, 'Fejervarya sp.', 'Nhái cơm', 'Nhái cơm', 35, '1KhdSBs0QhUTP4pp0mbAobci_BfPXOFV7', '1xdlBaS3stP-cjsUfqEjn0cm6apbiMpLi', '1QpeM3aeXKcl0pW2yC784tBOgVAvJ77iz', '1y7jYDzTRl7UAM7UL5gRI3Wsu6LgS0X9G', '118lLAeCbOSKtPiWrlv5UsQwZe_vmGKr7', 'Đặc điểm chẩn loại:  Lỗ mũi hướng lên trên; khoảng gian mắt hơi rộng hơn một nữa chiều rộng mi mắt trên; lỗ mũi gần chóp mũi hơn gần mắt; vùng má phẳng, xiên; màng nhĩ rõ ràng; ngón tai thứ I dài hơn ngón thứ II; khớp xương chài chạm vùng má khi xếp chân dọc cơ thể; khi xếp chân 2 đầu gối xếp chồng nhau; có nếp gấp cổ chân mờ; có củ bàn trong chân, không có củ bàn ngoài; nhiều nếp gấp trên lưng; nếp gấp mặt bên trên lưng thấp, dài hơi các nếp gấp ở phần giữa lưng; ngón chân có màng kéo dài đến ¾ chiều dài ngón.\n	Đặc điểm hình thái: Kích thước cơ thể nhỏ (SVL: 48,5-57,5); chiều dài đầu hơi lớn hơn chiều ngang (HL/HW: 1,13 – 1,24). Mũi nhọn; lỗ mũi tròn, có viền xung quanh, gần chóp mũi hơn gần mắt; gốc mắt rõ ràng, vùng má xiên, hơi lõm với một gờ trơn; chiều rộng mi mắt lớn hơn khoảng gian mắt (IO/UEW: 0,53-0,64); nếp gấp bên trên màng nhĩ nhỏ, mở rộng về phía trên màng nhĩ và xéo xuống dưới ở phía sau; đường kính màng nhĩ không lớn hơn khoảng cách mắt tới màng nhĩ (E-T/TD: 0,48-0,65); tuyến gốc mõm dài, thấp, không chạm màng nhĩ.\nDa trên lưng nhiều gờ dạng tuyến, một vài cái có dạng gờ dài, nhiều nốt sần nhỏ; các hàng ở hai bên nhiều hoặc ít rõ ràng. Da cằm, bụng và mặt dưới của đùi trơn; thỉnh thoảng có các nốt sần nhỏ ở mặt sau của đùi; cánh tay ngắn, ngón tay không có màng, đầu ngón hơi phồng thành nốt nhỏ; ngón thứ I hơi dài hơn ngón thứ II; củ ngón rõ ràng; 2 củ bàn rõ ràng, củ dưới ngón tay cái phát triển, chai sinh dục phát triển ở con đực; ngón chân có màng ¾; củ bàn trong dài, rõ ràng, củ bàn ngoài nhỏ, tròn; củ ngón phát triển; chân ngắn, khớp chày chạm vùng má; khi xếp chân vuông góc cơ thể, hai đầu gối chồng lên nhau.\nMặt trên màu nâu đến nâu - vàng nhạt với các đốm màu xám đen; các đốm trên cánh tay và chân ít phân biệt; các vệt ở hàm trên rõ ràng; hầu hết các hàng gờ da lớn ở bên ngoài của phần phía bên lưng; cằm với các đốm đen nhạt không đều dạng lavender, mặt dưới cơ thể màu trắng xám khói; cạnh trước và mặt dưới của bàn chân màu lavender, đầu ngón tay và chân màu kem.\n', 'Chúng có sinh cảnh chung với 2 loài lưỡng cư khác là ếch cua (F. cancrivora) và nhái ngóe (F. limnocharis). Trong khu vực nghiên cứu, đây là loài phổ biến, phân bố trên các sinh cảnh rừng tràm đặc dụng, rừng tràm khai thác. Được tìm thấy nhiều vào đầu mùa mưa trên nền rừng ẩm ướt, ven các kênh dẫn nước hoặc xung quanh các vũng nước đọng.', 'Làm thực phẩm', 9, 9, 3, 4, 4, '9.568883 N, 105.744345 E', '9.563726 N, 105.736029 E', '9.562971 N, 105.743106 E', '9.569341 N, 105.745378 E', '9.575449 N, 105.738078 E', 'Thu được mẫu', 'Rừng tràm đặc dụng, rừng tràm khai thác', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-13', 'Nguyễn Quang Cường'),
(16, 'Hoplobatrachus rugulosus (Wiegmann, 1834)', 'Ếch đồng', 'Ếch', 35, '1kKHDrORLA0tGWmLz6_9vYObrpqSInlt-', '1Q-1PbAvRUkffuLy1oltdCRTtA6K2Ar38', '1N_nQxYPGI-iO8SLnWKFs83ak1shRsgnV', '1foxg6ZqxAE8HLHPy9qyhGXV3LdqDztnV', '', 'Kích thước lớn, chân và tay tương đối ngắn, ngón chân có màng bao phủ gần như hoàn toàn, đầu ngón không có đĩa ngón, hơi phồng ở đầu ngón; không có củ bàn trong ở chân, khoảng 10 hàng nếp gấp da trên lưng, gian ổ mắt nhỏ hơn nhiều so với chiều rộng mi mắt trên.', 'Ếch đồng là loài phổ biến trong khu vực rừng tràm Mỹ Phước; được tìm thấy nhiều vào mùa mưa, đặc biệt vào đầu mùa mưa. Ếch đồng sinh sản vào đầu mùa mưa, con đực phát âm thanh to thu hút con cái. Ếch đực và ếch cái có hiện tượng \"bắt cặp\" khi giao phối. Trong khu vực rừng tràm Mỹ Phước, ếch đồng được tìm thấy trong sinh cảnh rừng tràm khai thác và rừng tràm đặc dụng.', 'Làm thực phẩm', 7, 9, 3, 4, 4, '9.574483 N, 105.735084 E', '9.563477 N, 105.735868 E', '', '', '', 'Thu được mẫu', 'Rừng tràm khai thác, rừng tràm đặc dụng', ' Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-17', 'Nguyễn Quang Cường'),
(17, 'Occidozyga lima (Gravenhorst, 1829)', 'Cóc nước sần', 'Nhái bầu', 25, '1WIFOpTgSWWclAUoCv-t4pPOwytQ7-bfQ', '1dby2whsj8oinnjmIzcII_5McCItYg2MP', '1ATl6DfttZJYHmhSke6pztgIHlEJMpz0R', '', '', 'Là một loài cóc nước nhỏ; lưỡi dài, tự do, đầu lưỡi tròn; ngón tay nhọn, ngón thứ nhất bằng ngón thứ 2, 2 hoặc 3 củ bàn tay; 2 củ bàn chân, và 1 nốt sần rõ ràng ở cuối xương chày; da rất nhám, có nhiều nốt sần hoặc gai nhỏ, có nhiều hàng nốt sần tạo thành các đường dọc hai bên thân, trên lưng và cằm; con đực với túi âm ở trong miệng; các vệt sẫm màu vắt ngang trên đùi và lưng; ngón tay có màng bơi nhỏ trong gốc ngón, ngón chân có màng bơi phủ hết ngón', 'Các mẫu của loài cóc nước sần được tìm thấy trong mùa mưa ở các sinh cảnh rừng tràm đặc dụng, rừng dừa nước, lung. Vào đầu mùa mưa, chúng thường tập trung trong các ao nước nhỏ vào ban đêm, các con đực phát tiếng kêu thu hút con cái. ', 'Chưa xác định', 9, 9, 3, 4, 4, '9.564849 N, 105.737191 E', '9.570315 N, 105.748801 E', '9.577027 N, 105.742940 E', '', '', 'Thu được mẫu', 'Rừng tràm đặc dụng, lung, rừng dừa nước', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-05-05', 'Nguyễn Quang Cường'),
(18, 'Occidozyga martensii (Peters, 1867)', 'Cóc nước marten', 'Nhái nhớt', 35, '17RdKj0wtBxz_4QmV89W9CTNwDU90hUSh', '1UxM_d6ji5K68PlDSQsCPMEiuXrhKw9ab', '1Wetyj-hyzZZcpua0lyM9dkZ29zWwoX0o', '', '', 'Cơ thể có kích thước nhỏ, ngắn và mập; các chi tương đối ngắn; bàn tay không có màng; bàn chân có màng phát triển chạm 2/3 chiều dài ngón; chóp ngón mở rộng thành dạng đệm tròn. Cấu trúc da khá đa dạng từ dạng trơn đến có nhiều nốt sần trên lưng; mặt dưới luôn trơn. Đầu nhỏ, mũi hình tam giác ngắn; màng nhĩ nhỏ vừa đủ nhận biết; nếp gấp trên màng nhĩ rõ ràng. Mắt phồng lên và hướng sang 2 bên. Màu sắc mặt lưng đa dạng; phần lớn màu xám hoặc nâu, thường có sọc màu vàng hoặc cam rõ ràng trên lưng, hoặc một vệt rộng màu xám đen dọc viền đen với 2 sọc cam; phổ biến là màu đỏ - rỉ sét ở sau đầu. Mặt dưới màu trắng sáng, cổ họng có các đốm đen li ti màu xám mờ. Con ngươi hình thoi với mống mắt có các sọc màu đồng xếp đồng quy', 'Occcidozyga martensii là loài phổ biến trong rừng tràm Mỹ Phước, được tìm thấy nhiều vào đầu mùa mưa. Chúng thường được tìm thấy trên nền rừng, xung quanh các vũng nước đọng hoặc ở khu vực nước nông có lớp thực vật nổi dày, rậm rạp. Trong rừng tràm Mỹ Phước chúng phân bố trong các sinh cảnh rừng tràm đặc dụng, rừng tràm khai thác. ', 'Chưa xác định', 7, 9, 3, 4, 4, '9.572058 N, 105.745009 E', '9.568216 N, 105.741847 E', '9.567883 N, 105.733726 E', '', '', 'Thu được mẫu', 'Rừng tràm đặc dụng, rừng tràm khai thác', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-05-06', 'Nguyễn Quang Cường'),
(19, 'Kaloula pulchra Gray, 1831', 'Ễn ương', 'Ễn ương', 50, '1sr_hifnEomBxretJZNPlynvborcwfSjF', '1jSCBUb3ZV76BDmGYPmNIwq6Ajl1RvJt5', '', '', '', 'Đặc điểm chẩn loại: Ngón chi dẹp và đầu ngón tay mở rộng; toàn bộ mặt lưng màu nâu với 2 dãy màu vàng sáng hoặc vàng nâu chạy dọc từ giữa 2 mắt qua phía trên mắt và kéo dai đến háng; trên ngón có vết tích của màng bơi.\n\nĐặc điểm hình thái: Kích thước trung bình (SVL: 80.3). Cơ thể có hình tam giác khi nhìn từ bên trên, đầu ngắn so với chiều dài thân (HL/SVL: 0,24); chiều dài đầu nhỏ hơn chiều rộng đầu (HL/HW: 0,74); khóe mắt nhỏ; vùng má xiên và hướng lên; mũi tù và ngắn, lỗ mũi nằm gần chóp mỏ và hướng sang 2 bên; khoảng cách giữa hai lỗ mũi tương đương mí mắt trên; màng nhĩ không rõ ràng; nếp gấp mờ vòng qua chẩm đến sau mắt và kết thúc ở ngay trước cánh tay.\n\nDa trơn láng với các nốt sần rải rác trên lưng, nhiều nhất ở phần dưới của mặt lưng, phía sau đùi và một số trên cánh tay. Mặt lưng màu nâu sẫm. Hai dảy màu vàng sáng được bao bọc bởi viền màu nâu đậm hoặc đen bắt đầu từ giữa hai mắt và kéo dài đến háng; hai dảy màu liền nhau ở giữa 2 mắt, hẹp ở sau mắt và nở rộng trên mặt lưng. Một số cá thể giữa lưng có vệt đen hoặc nâu sậm kéo dài từ giữa 2 mắt đến tận xương cụt. Các nốt sần trên lưng có màu tương tự màu của hai dảy màu trên lưng. Trên các chi có màu không đều, các mảng nhỏ màu vàng sáng không đều xen lẫn trên nền màu nâu sẫm; một vệt màu sáng không liên tục phía trên mặt lưng của ống chân sau. Mặt bụng màu trắng sáng với các hoa văn xám dạng khói, phần da trên cổ họng màu đậm hơn trên bụng.\n\nCánh tay hơi dài; ngón tay dài và có vết tích của màng bơi; to dần từ gốc ngón đến đầu ngón, đĩa ngón rộng theo chiều ngang. Ngón thứ nhất ngắn hơn ngón thứ 2; củ bàn vừa phải; có 3 củ bàn, củ bàn ngoài dài, củ bàn giữa nhỏ nhất, bàn tay trơn và không có nốt sần phụ. Thứ tự chiều dài tương đối của các ngón tay: III>IV>II>I.\nChân ngắn, chỉ 1/3 xương đùi tự do; cổ chân chạm đến nách khi xếp song song với trục cơ thể. Hai gót chân không chạm nhau khi gập gối và xếp vuông góc trục cơ thể. Bàn chân dài hơn bàn tay nhưng các ngón chân mảnh khảnh hơn; đĩa ngón chân nhỏ tròn, không rộng theo chiều ngang như đĩa ngón tay; ngón chân có vết tích của màng bơi. Có 2 củ bàn chân; củ bàn chân trong dài, nhô cao, cạnh không rõ ràng; củ bàn chân ngoài nhỏ tròn. Thứ tự chiều dài tương đối các ngón chân: IV>III>V>II>I.', 'Một mẫu cái duy nhất của loài này được tìm thấy trên nền rừng trong khu vực rừng tràm khai thác vào mùa mưa (tháng 7). Là loài hoạt động về đêm, thường ẩn nấp trong các hốc cây, hoặc bên dưới lớp lá mục trong mùa khô. Thường ra ngoài kiếm ăn khi độ ẩm không khí cao hoặc sau cơn mưa. Sinh sản vào mùa mưa, con đực thường phát tiếng kêu đặc trưng khi đang ngâm mình trên mặt nước.', 'Chưa xác định', 7, 9, 3, 4, 3, '9.572816 N, 105.747786 E', '', '', '', '', 'Thu được mẫu', 'Rừng tràm khai thác', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-07-03', 'Nguyễn Quang Cường'),
(20, 'Microhyla heymonsii Vogt, 1911', 'Nhái bầu heymon', 'Nhái bầu đỏ', 50, '1vpmtlaFYXaAmxdgm3C54Ii3TEj_uo3mK', '1YlYwKK3K3jlSv9OUk04OZaTQ2tcuo1ON', '1uoUEAL4IYLpLfv-vtTsy1bvO-QdzNLN7', '1CTYH35rff_Zh20EwgAxEzv-mCBXraRtR', '1-Adkb-UzijLfezGYifaJ3q41S6p1L0IF', 'Kích thước cơ thể nhỏ; lưng phẳng, màu xám hoặc nâu ở trên, thường có đường kẻ giữa lưng và một hoặc 2 đốm đen ở ngay trung tâm của lưng. Mặt bên của đầu và thân có vệt đen kéo dài đến háng. Màng nhĩ ẩn; ba củ bàn tay lớn và rõ ràng; kích thước gần bằng nhau. Hai củ bàn chân, củ bàn ngoài lớn hơn. Màng bơi giữa các ngón nhỏ và mảnh. Đầu ngón mở rộng thành các đĩa', 'Nhái bầu đỏ được tìm thấy trong thời gian khảo sát mùa mưa, thường được tìm thấy trên nền rừng trong khu vực rừng tràm khai thác, quanh các vũng nước đọng hoặc gần bờ kênh. Con đực có túi kêu dưới cổ họng, ban đêm thường tập trung quanh khu vực có nước để phát tiếng kêu thu hút con cái. ', 'Chưa xác định', 7, 9, 3, 4, 4, '9.570890 N, 105.747758 E', '9.569821 N, 105.742266 E', '', '', '', 'Thu được mẫu', 'Rừng tràm khai thác', ' Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-07-04', 'Nguyễn Quang Cường'),
(21, 'Hylarana erythraea (Schlegel, 1837)', 'Chàng xanh', 'Bù tọt', 68, '1M1iJZ7xcKWrqhwrexn_Od2R-qabF7EWB', '1UU0PQVUmkNY3UIT_XPWih4dHWsSno6AY', '1XZ4UafzUsZVURbhWYn8kFYQkFN-Xzw2T', '1jFzrqSHNm4KseQqM9Clr1BdC85c5ovG9', '1zLiyaJASoCvOe3uxL3_tZyxy5BeYu8hG', 'Cơ thể có kích thước tương đối lớn, thường có màu xanh với nếp gấp da trên lưng rộng màu vàng, dảy màu đen ở mặt bên của đầu và cơ thể, mũi nhọn và nhô ra, ngón tay mảnh khảnh, ngón thứ nhất hơi ngắn hơn ngón thứ 2, ngón chân gần như có màng bao phủ hoàn toàn, đĩa nhỏ trên đầu ngón, cổ chân chạm chóp mũi, không có hoa văn vòng quanh chi nhưng có các dấu song song chân, có túi thanh âm, con đực có chai sinh dục trên ngón tay thứ I.', 'Chàng xanh là loài hoạt động cả ngày và đêm, ban ngày thường bắt gặp trên các thảm thực vật nổi; ban đêm được tìm thấy trên các cành cây nhỏ, bên trên các bụi rậm. Thức ăn là các loài côn trùng nhỏ sống trong khu vực. Phân bố trên các sinh cảnh rừng tràm đặc dụng, rừng dừa nước, lung.', 'Chưa xác định', 7, 9, 3, 4, 4, '9.563974 N, 105.742907 E', '9.574045 N, 105.734023 E', '9.575835 N, 105.739572 E', '9.566833 N, 105.733836 E', '', 'Thu được mẫu', 'Rừng tràm đặc dụng, rừng dừa nước, lung.', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-17', 'Nguyễn Quang Cường'),
(22, 'Polypedates megacephalus Hallowell, 1861', 'Ếch cây mép trắng', 'Hót cổ', 70, '1SgYKmc-B_-wrXB36WDCJ4YjyeaBfG5ki', '1ukCU2ghJs06SE_HaotSPCz9cN11mXMJO', '1nTcuqCy7ywFdXs8yfpugmjXEsPWp9Uqa', '1coreid3G4uQ0ML6tP3Gz_ZKfca0ej9dY', '1AQ1HkG_xGQUTjyOn0F00CrZh3ZcDdTy9', 'Loài có kích thước lớn, chiều dài đầu thân lên đến 75mm (Taylor); được đặc trưng bởi phần da trên đầu dính chặt với vùng mũi và xương trán; con đực có túi thanh âm; chiều rộng gian ổ mắt rộng hơn chiều rộng mí mắt trên; màng nhĩ rõ ràng; ngón tay có màng rất ít, ngón chân có màng bao phủ 2/3 hoặc nhiều hơn; chiều rộng đĩa ngón nhỏ hơn màng nhĩ; cổ bàn chân chạm giữa mắt với lỗ mũi hoặc chóp mũi khi gập sát thân; răng lá mía phát triển; hoa văn chữ x trên vùng đầu – vai.', 'Ếch cây mép trắng sống chủ yếu trên cây trong các khu vực ẩm độ cao, thức ăn là các loài côn trùng sống trong khu vực. Ếch cây mép trắng phân bố khá phổ biến trong khu vực rừng tràm Mỹ Phước, thường được tìm thấy trong các sinh cảnh rừng tràm đặc dụng, rừng tràm khai thác, rừng dừa nước. Con đực và cái có hiện tượng \"bắt cặp\" khi giao phối. Con cái tiết ra dịch nhầy và dùng chân sau đánh lên thành đám bọt lớn; trứng được đẻ vào trong đám bọt xung quanh các vũng nước hoặc bên trên khu vực có nước.Trứng phát triển thành nòng nọc trong tổ bọt trước khi chúng cọ quậy làm mềm bọt và rơi xuống khu vực nước bên dưới. ', 'Chưa xác định', 7, 9, 3, 4, 4, '9.562804 N, 105.735163 E', '9.565287 N, 105.742496 E', '9.568298 N, 105.743803 E', '9.567662 N, 105.733728 E', '9.575595 N, 105.746317 E', 'Thu được mẫu', 'Rừng tràm đặc dụng, rừng dừa nước, rừng tràm khai thác', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-14', 'Nguyễn Quang Cường'),
(23, 'Calotes versicolor (Daudin, 1802)', 'Nhông hàng rào', 'Kì nhông', 78, '1WoIN1d-QBwRGyT1eqKCcfi-Wp5RauKJS', '1rN9sxEBPp0CfbuMRaWt6E-F0giBR-i4J', '1KDR3vJpcME72Xcp49Ro4nShF6ab2OXx_', '1rtf2vw22gsw6r-X1rk3KBZWEZioqb3ym', '1MxLrhThqJ7JEWQZHZrGv5nLqx6bCUl8G', 'Chiều dài đầu thân (SVL) đến 95mm (quần thể ở Đông Nam Á); cơ thể mạnh mẽ, dẹp; đầu khá lớn (đặc biệt ở con đực trưởng thành); vảy nhọn ở phía sau và bên trên; không có nếp gấp trước cánh tay hoặc lỗ trước vai, có 2 gai khá rõ trên màng nhĩ; có 40-45 hàng vảy giữa thân. Màu sắc trên thân đa dạng, đầu màu vàng cam hoặc đỏ sáng, con đực có thêm mảng đen ở cổ, và mờ dần đến màu hơi xám ở các thời điểm khác nhau. Con cái cũng có màu vàng đến xám sau khi giao phối', 'Kì nhông là loài phổ biến trong rừng tràm Mỹ Phước, chúng thường được tìm thấy trong sinh cảnh rừng tràm đặc dụng, rừng tràm khai thác, trên các nhánh cây thấp từ 1 đến 2m hoặc. Thức ăn của chúng là những loài côn trùng nhỏ sống trong khu vực. Kì nhông hoạt động ban ngày, ban đêm ngủ trên ngọn các cành cây nhỏ. ', 'Chưa xác định', 7, 9, 3, 4, 4, '9.575614 N, 105.749954 E', '9.573805 N, 105.751692 E', '9.568964 N, 105.745518 E', '', '', 'Thu được mẫu', 'Rừng tràm trồng, rừng tràm khai thác', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-18', 'Nguyễn Quang Cường'),
(24, 'Gehyra multilata (Weigmann,1835)', 'Thằn lằn 4 móng', 'Thằn lằn', 79, '1S8ZAHtASf9M_YmaA98dPKDYUPX9Cxu-b', '1RjevrTAeVkBig2J0HBOKy8jUe7_a1CLL', '1uvU2vxc5PDoYmmWi7ReeTPdIdLVa5XnC', '1wCnCBhkFEw5UWmx0EpHYtdBJOF099m1O', '1jmn51f0emnDSXBP63alR1jJAFSM5haI2', 'Đặc điểm chẩn loại:  Tấm mõm chia;  hai tấm mũi tiếp xúc nhau;  lỗ mũi tiếp giáp tấm mõm và tấm môi trên; 8 hay 9 tấm môi trên; 7 tấm môi dưới; 52-54 hàng vảy quanh thân; ngón tay I nhỏ hơn các ngón khác, không có vuốt; 7-8 bản mỏng dưới ngón chân thứ IV; 15 -19 lỗ đùi; đuôi dẹp có răng cưa.\n	Đặc điểm hình thái: SVL 50.7-51.3 mm. Đầu dài hơn rộng (HL/SVL:  0,24 -0,25, HW/HL:  0,79-0,81). Đầu phủ vảy nhỏ hoặc nốt sần.; nếp gấp lưng bụng không rõ. Mặt lưng có màu xám xanh, vàng hay xám, thỉnh thoảng có những đốm trắng sáng và cả những đốm tối, những đốm sáng thường bao quanh những điểm tối; phía sau mắt thường có một sọc tối. Đuôi dẹp, bè rộng, có răng cưa, gốc đuôi hơi thắt eo lại (định loại theo Smith, 1935).', 'Thằn lằn 4 móng là loài phổ biến trong khu vực, thường được tìm thấy xung quanh các công trình xây dựng của con người, trên các thân gỗ lớn. Chúng chia sẻ nơi sống với các loài Hemidactylus frenatus, Hemidactylus platyurus. Là loài hoạt động về đêm, thức ăn của chúng là các loài côn trùng sống trong khu vực.', 'Chưa xác định', 9, 9, 3, 4, 4, '9.572352 N; 105.750249 E', '9.572150 N; 105.749171 E', '9.571834 N; 105.748832 E', '9.574353 N, 105.750457 E ', '', 'Thu được mẫu', 'Rừng tràm khai thác', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-14', 'Nguyễn Quang Cường'),
(25, 'Hemidactylus garnotii (Conant and Collins, 1991)', 'Thạch sùng garnot', 'Thằn lằn', 79, '1aqu-EoDKwT0L91YjnSPBw6F-l1N9DHn5', '1HLtdGR7dsCnWs8IEp6WvCRHmNcl-6yz3', '1MMSYamfD30IZ7nPCJmMNwNETXWPBx14T', '1d1BlyR6zFskZhAml-Gx0phlVSa9EYNzq', '1VNCWT5omdLYrO3vd0kNVjeLtmMGXGl04', 'Đặc điểm chẩn loại:  mút mõm tù, dài mõm-mắt lớn hơn khoảng cách giữa mắt-tai (SnEye 5,13; EyeEar 3,66); lỗ mũi ở giữa tấm mõm.; đường kính tai không quá 1/2 lần đường kính mắt (EarL 1,87; OrbD4,28); 11 tấm mép trên, 10 tấm mép dưới; tấm cằm gấp hai lần tấm mép; tấm mõm rộng bằng cao. \n\nĐặc điểm hình thái: Đầu lớn (HL 7,91; HW 6,43; HH 4,18).  Lỗ tai bé, gần tròn, đường kính tai không quá 1/2 lần đường kính mắt. Tấm cằm có dạng hình tam giác, dài hơn 2 lần các tấm mép bên cạnh. Hai đôi tấm sau cằm, đôi I lớn hơn đôi II và  tiếp xúc nhau. Vảy vùng họng dạng hạt. Đuôi rất dẹp, sắc, có răng cưa ở hai bên, phía trên phủ các vảy nhỏ đồng dạng, mặt dưới phẳng với những vảy lớn xếp gối lên nhau và một hàng vảy ngang mở rộng ở giữa đùi. Thân màu nâu xám với các đốm hoặcvết không rõ ràng, thường có những điểm nhỏ màu trắng; có vạch tối dọc theo hai bên đầu. Bụng trắng.  \n', 'Thằn lằn garnot sinh sống trên các thân cây lớn, thân tràm trong khu vực nghiên cứu. Là loài hoạt động ban đêm, thức ăn là các loài côn trùng sinh sống trong khu vực. Trong khu vực rừng tràm Mỹ Phước, thằn lằn garnot được tìm thấy trong sinh cảnh rừng tràm đặc dụng.', 'Chưa xác định', 9, 9, 3, 4, 3, '9.570530 N, 105.746281 E', '9.570154 N, 105.745585 E', '', '', '', 'Thu được mẫu', 'Rừng tràm đặc dụng', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-07-03', 'Nguyễn Quang Cường'),
(26, 'Hemidactylus frenatus Schlegel in Duméril & Bibron', 'Thạch sùng đuôi sần', 'Thằn lằn', 79, '1PmuUeYwkh7apn2-AoIo74RehQZQF2wpb', '1ORAndIRPUlZ3yvzR0lAjWF1XrRQtnRGZ', '1JQ_FoJfWAPp42Ubr3R96GLpKyvbL27Fq', '', '', 'Cơ thể được bao phủ bởi các vảy dạng hạt nhỏ lẫn với một vài vảy trơn tròn hoặc hơi có dạng sóng, nốt sần hình nón; con đực có một chuỗi liên tiếp các lỗ trước huyệt, 14-19 lỗ ở mỗi bên; 2 cặp vảy sau môi dưới, cặp bên ngoài lớn tương tự cặp bên trong, cả 2 đều chạm vảy hàm dưới; trên đuôi có các nốt sần dạng gai cao xếp theo hình xoắn ốc', 'Thạch sùng đuôi sần là loài phổ biến, sinh sống trong và xung quanh khu vực của con người. Trong tự nhiên, thường được tìm thấy trên các thân gỗ lớn; là loài hoạt động ban đêm; thức ăn là các loài côn trùng sống trong khu vực.', 'Chưa xác định', 7, 9, 3, 4, 4, '9.568512 N, 105.745714 E', '9.565689 N, 105.746787 E', '9.572158 N, 105.748482 E', '', '', 'Thu được mẫu', 'Rừng tràm khai thác, rừng tràm đặc dụng', ' Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-04-16', 'Nguyễn Quang Cường'),
(27, 'Hemidactylus platyurus (Schneider, 1797)', 'Thạch sùng đuôi dẹp', 'Thằn lằn', 79, '121Q2C76_ZrkewlkZ7YqCR2SrKE9O05m4', '1DaePXZTxSIlyaW2K-IOoTqNbpctlzVRa', '15G9c0-fGCYrsj7LokgaCglv4oM24ftrB', '12Vgdh9LAbRXzNfaf9JBcSe_N1f6q5vUf', '', 'Các ngón chân có màng và mở rộng; tấm dưới ngón chân không phân chia; đốt ngón xa dài, mỏng, mọc tại bên trên phần mở rộng của đầu ngón; 2 cặp vảy sau hàm mở rộng, cặp thứ 2 ở bên lớn hơn cặp thứ nhất ở trong; nếp gấp bụng rõ ràng, được vảy nhỏ bao phủ; có màng da rộng ở phía sau chân sau; 16-20 lỗ đùi mỗi bên, xếp thành hàng thẳng và tiếp xúc ở giữa thân', 'Thạch sùng đuôi dẹp là loài phổ biến sinh sống trong hoặc xung quanh khu dân cư. Trong tự nhiên, chúng thường được tìm thấy trên các thân cây gỗ lớn, kiếm ăn cả ngày và đêm; thức ăn là các loài côn trùng nhỏ sinh sống trong khu vực. Trong rừng tràm Mỹ Phước, loài này được tìm thấy trong sinh cảnh rừng tràm khai thác. ', 'Chưa xác định', 9, 9, 3, 4, 4, '9.573264 N, 105.747454 E', '9.571806 N, 105.744368 E', '', '', '', 'Thu được mẫu', 'Rừng tràm khai thác', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-05-07', 'Nguyễn Quang Cường'),
(28, 'Takydromus sexlineatus Daudin, 1802', 'Thằn lằn đuôi dài', 'Thằn lằn đuôi dài', 80, '1XU3dkPM576kAs2TkLOHqocj_4lc0BWGI', '15fCO8EhyeHzrxDSjyi2Cpn06J7oBKgY8', '19fpuTEUgPjW1Ppam_0w_VvwRWBmR2oc_', '1PMXbC30SZqptQLuYU4_Q6KD6PV2h5FiJ', '1tUPqJQbZ9ssxrN3dI_pW5fU8gWx3I5rM', 'Loài thằn lằn cỡ nhỏ, dài đuôi dài gấp sáu lần chiều dài thân. Dài thân 30 - 60mm, dài đuôi 160 - 180mm. Mõm nhọn, tấm mõm rộng. Hai tấm trán ở đỉnh tiếp xúc với nhau, rộng và ngắn hơn tấm trước trán. Tấm đỉnh lớn, cách nhau rõ bởi tấm gian đỉnh và tấm chẩm bé hơn. Có 2 - 3 tấm thái dương chạm tấm đỉnh.Các vảy vùng thái dương nổi gờ rất rõ. Có 3 cặp tấm sau cằm.\n\nThân có 6 hàng vảy dọc, rộng, nổi gờ rõ, 4 hàng vảy ở giữa tiếp tục kéo dài đến đuôi. Vảy bên thân bé, có 12 hàng vảy rộng ở bụng, các vảy này cũng nổi gờ rõ. Từ nếp gấp vai đến bẹn có 26 vảy. Tấm hậu môn lớn và có 2 vảy dài, bé hơn nằm ở hai bên.Ở con đực và con cái đều có 1 lỗ đùi ở mỗi bên. Mép trên có từ 6  -8 tấm vảy và 5 - 8 tấm ở mép dưới mỗi bên.\n\nThân màu xanh xám đến nâu xám, phần đầu có màu thẫm hơn. Cằm và cổ họng có màu trắng đục đến hơi vàng. Mặt trên của các chi và phần sau của gốc đuôi màu xám nhạt. Ở các cá thể đực có một dải hẹp màu trắng xám chạy từ góc sau tấm đỉnh đến giữa thân và mờ dần về phía đuôi. Từ vai đến bẹn là các đốm trắng xám nhỏ hình bầu dục xếp thành hàng dọc.', 'Là loài hoạt động ban ngày, thường kiếm ăn trên các tán cây thấp, thức ăn là các loài côn trùng sinh sống trong khu vực. Hoa văn trên cơ thể có khả năng ngụy trang lẫn vào môi trường xung quanh. Buổi sáng chúng thường phơi nắng hấp thu nhiệt và hoạt động nhiều khi nhiệt độ cao. Ban đêm ngủ trên các nhánh cây thấp và bụi cây.', 'Chưa xác định', 7, 9, 3, 4, 3, '9.575381 N, 105.750288 E', '', '', '', '', 'Thu được mẫu', 'rừng tràm trồng', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng.', '2018-05-08', 'Nguyễn Quang Cường'),
(29, 'Eutropis multifasciata (Kuhl, 1820)', 'Thằn lằn bóng hoa', 'Rắn mối', 81, '1lq79QgaKaanvDmafG4k-gp32yfn09n2D', '1-sV1gpVyiGPg-Cv475h2z8mrv5feaes-', '1-63Btp3O2h-GUsmUxSLxlayR0ChaQ4Az', '1ZG1o4uqJ-lsTFFztDvvMpy2OzAaTKmvU', '1q6pW8AAlbF7i5GJz1pPS56i3ANNjI0WY', 'Vảy trên mũi chạm nhau hoặc hơi tách biệt với nhau; một vảy sau mũi; vảy trước trán tiếp xúc nhau; vảy má thứ nhất không cao hơn vảy má thứ 2; không có đĩa ở dưới mi mắt; vảy thường có 3 sóng, hiếm khi nhiều  hơn; 30-34 hàng vảy giữa thân; các đường trên lưng giữa các vảy thường mờ, tối; hai bên thân màu sậm với nhiều điểm dạng mắt.', 'Là loài phổ biến trong khu vực rừng tràm Mỹ Phước, hoạt động ban ngày, thường được tìm thấy trong sinh cảnh rừng tràm đặc dụng, rừng tràm khai thác. Kiếm ăn trên nền rừng, thức ăn của chúng là những loài côn trùng trong khu vực. Thường có tập tính phơi nắng vào buổi sáng hoặc sau các cơn mưa lớn.', 'Làm thực phẩm', 9, 9, 3, 4, 4, '9.574122 N, 105.751436 E', '', '', '', '', 'Thu được mẫu', 'Rừng tràm trồng', 'Rừng Tràm Mỹ Phước, Mỹ Phước, Mỹ Tú, Sóc Trăng. ', '2018-07-09', 'Nguyễn Quang Cường'),
(30, 'Python molurus (Linnaeus, 1758)', 'Trăn lưới', 'Trăn đất', 82, '1G0p0-MM3GCk9Vg7-i0IkHNake2C401Eq', '1HCD56PjAHYgBe6pOTSRccEgDaeW7lImk', '1lCr_iZtJ-r1-f73GB-oh27uEXgOeetac', '1T_rpZc568T10Psg7iFckyMFIF1y48jZ_', '1f1jIaWVl1DasQdUilcVt2FwmjAmBEKSS', 'Đặc điểm chẩn loại:  Rắn lành cỡ rất lớn trong họ nhà Trăn Pythonidae, dài tới 8m (kích thước trung bình khoảng từ 4 - 6m). Đầu dài, nhỏ. Hai tấm vảy môi trên có trên mỗi tấm vảy một lỗ (lỗ môi là cơ quan cảm giác nhiệt). Có hai cựa nhỏ, hình móng nằm ở hai bên khe huyệt. Cựa trăn cái ngắn, ẩn sâu trong hốc bên khe huyệt. Đầu có màu nâu xám, mặt trên đầu có hoa văn hình mũi mác di từ cổ, mũi nhọn hướng về phía đầu mõm. Mặt trên lưng có màu xám nhạt hay vàng nhạt có một dãy những vết lớn dài, màu nâu đỏ viền đen. Mặt bụng màu vàng hay nâu vàng có những đốm nâu hay đen (Smith 1984).\nĐặc điểm hình thái:  Đầu hình tam giác, chiều dài gần 2 lần chiều rộng. Lỗ mũi tách biệt bởi 2 vảy mũi. Có 2 cặp vảy trước trán, cặp vảy phía sau nhỏ hơn; vảy trán phân chia. Vùng vảy chẩm và vùng vảy thái dương không đều. Có 10 – 13 vảy môi trên, vảy thứ VI hoặc thứ VII ở dưới mắt hoặc tách biệt với mắt bởi hàng vảy dưới mắt; 2 vảy môi trên đầu tiên có các hốc cảm nhiệt rõ ràng. Mắt được bao quanh bởi 2 hoặc 3 vảy trước mắt, 1 vảy trên mắt, 2 hoặc 3, hiếm khi 4 vảy sau mắt, 1, 2 hiếm khi 3 vảy dưới mắt. Các vảy bao quanh mắt, ngoại trừ vảy trên mắt thường hợp nhất hoặc được phân chia bởi đường đứt nhỏ. Vảy môi trên có 2 hố vảy sâu. 16-22 vảy hàm dưới. Vảy cằm  nhỏ và không đều. Rãnh môi dưới rõ ràng. Vảy trơn, 60-75 hàng vảy giữa thân. 256-270 vảy bụng; 65-70 vảy dưới đuôi. Vảy hậu môn phân chia.', 'Đặc điểm sinh thái học: Thường sống ở các rừng thưa, savan, cây bụi hay ven các rừng già, ở các đồi núi thấp có nhiều bụi rậm khô ráo. Chúng ưa sống gần các vực nước, đầm lầy. Có thể leo lên cây và thích cuốn mình vào những cành cây chìa ra trên mặt nước. ở đồng bằng Nam bộ, chúng ưa sống ở những nơi đầm lầy, rừng tràm, rừng sú vẹt ngập nước, đôi khi còn xâm nhập cả vào những khu vực có vườn cây. Chúng chủ yếu đi kiếm mồi vào ban đêm, nhiều nhất vào lúc xẩm tối. Trăn đất ăn những loài thú nhỏ (chủ yếu gặm nhấm, đôi khi cả hươu nai cỡ nhỏ, chim và những loài ếch nhái, bò sát). Sinh sản hàng năm. Ở khu vực Đồng Bằng Sông Cửu Long giao phối từ tháng 10 đến tháng giêng năm sau. Trăn chửa khoảng hai tháng đến ba tháng sáu ngày, đẻ từ 15 đến 60 quả trứng. Trăn mẹ ấp trứng bằng cách cuộn lấy ổ trứng. Sau khoảng hai tháng (56 - 85 ngày) thì trứng nở: Trăn sơ sinh dài khoảng 52 - 61cm và nặng khoảng 80 - 140g. Lột xác lần đầu khoảng 7 - 10 ngày sau khi nở.', 'Làm thực phẩm, đồ thời trang.', 3, 5, 2, 2, 3, '9.575423 N, 105.749730 E', '', '', '', '', 'Quan sát', '', '', NULL, ''),
(34, '1', '1', '1', 78, '1KDR3vJpcME72Xcp49Ro4nShF6ab2OXx_', '1KDR3vJpcME72Xcp49Ro4nShF6ab2OXx_', '1MxLrhThqJ7JEWQZHZrGv5nLqx6bCUl8G', '1MxLrhThqJ7JEWQZHZrGv5nLqx6bCUl8G', '1MxLrhThqJ7JEWQZHZrGv5nLqx6bCUl8G', '1', '1', '1', 7, 5, 3, 2, 4, '9.562804 N, 105.735163 E', '9.562804 N, 105.735163 E', '9.562804 N, 105.735163 E', '9.562804 N, 105.735163 E', '9.562804 N, 105.735163 E', '1', '1', '1', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vnrl`
--

CREATE TABLE `vnrl` (
  `VNRL_ID` int(11) NOT NULL,
  `VNRL_NAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vnrl`
--

INSERT INTO `vnrl` (`VNRL_ID`, `VNRL_NAME`) VALUES
(1, 'EX (tuyệt chủng)'),
(2, 'EW (tuyệt chủng trong tự nhiên)'),
(3, 'CR (cực kỳ nguy cấp, có nguy cơ tuyệt chủng)'),
(4, 'EN (nguy cấp cao)'),
(5, 'VU (bị đe dọa, sắp nguy cấp)'),
(6, 'NT (sắp bị đe dọa hoặc nguy cơ nhẹ)'),
(7, 'LC (ít quan tâm)'),
(8, 'DD (không dủ dữ liệu)'),
(9, 'NE (không phân loại hoặc không đánh giá)');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cites`
--
ALTER TABLE `cites`
  ADD PRIMARY KEY (`CITES_ID`),
  ADD UNIQUE KEY `CITES_NAME` (`CITES_NAME`) USING HASH;

--
-- Chỉ mục cho bảng `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`CLASS_ID`),
  ADD UNIQUE KEY `CLASS_NAME` (`CLASS_NAME`),
  ADD KEY `FK_PHYLUM` (`PHYLUM_ID`);

--
-- Chỉ mục cho bảng `distribution`
--
ALTER TABLE `distribution`
  ADD PRIMARY KEY (`DISTRIBUTION_ID`),
  ADD UNIQUE KEY `DISTRIBUTION_NAME` (`DISTRIBUTION_NAME`);

--
-- Chỉ mục cho bảng `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`FAMILY_ID`),
  ADD UNIQUE KEY `FAMILY_NAME` (`FAMILY_NAME`),
  ADD KEY `FK_ORDERS` (`ORDERS_ID`);

--
-- Chỉ mục cho bảng `iucn`
--
ALTER TABLE `iucn`
  ADD PRIMARY KEY (`IUCN_ID`),
  ADD UNIQUE KEY `IUCN_NAME` (`IUCN_NAME`) USING HASH;

--
-- Chỉ mục cho bảng `kingdom`
--
ALTER TABLE `kingdom`
  ADD PRIMARY KEY (`KINGDOM_ID`),
  ADD UNIQUE KEY `KINGDOM_NAME` (`KINGDOM_NAME`);

--
-- Chỉ mục cho bảng `nd32`
--
ALTER TABLE `nd32`
  ADD PRIMARY KEY (`ND32_ID`),
  ADD UNIQUE KEY `ND32_NAME` (`ND32_NAME`) USING HASH;

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ORDERS_ID`),
  ADD UNIQUE KEY `ORDERS_NAME` (`ORDERS_NAME`),
  ADD KEY `FK_CLASS` (`CLASS_ID`);

--
-- Chỉ mục cho bảng `phylum`
--
ALTER TABLE `phylum`
  ADD PRIMARY KEY (`PHYLUM_ID`),
  ADD UNIQUE KEY `PHYLUM_NAME` (`PHYLUM_NAME`),
  ADD KEY `FK_KINGDOM` (`KINGDOM_ID`);

--
-- Chỉ mục cho bảng `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_FAMILY` (`Family`),
  ADD KEY `FK_IUCN` (`IUCN`),
  ADD KEY `FK_VNRL` (`VNRL`),
  ADD KEY `FK_ND32` (`ND32`),
  ADD KEY `FK_CITES` (`CITES`),
  ADD KEY `FK_DISTRIBUTION` (`Distribution`);

--
-- Chỉ mục cho bảng `vnrl`
--
ALTER TABLE `vnrl`
  ADD PRIMARY KEY (`VNRL_ID`),
  ADD UNIQUE KEY `VNRL_NAME` (`VNRL_NAME`) USING HASH;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cites`
--
ALTER TABLE `cites`
  MODIFY `CITES_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `class`
--
ALTER TABLE `class`
  MODIFY `CLASS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `distribution`
--
ALTER TABLE `distribution`
  MODIFY `DISTRIBUTION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `family`
--
ALTER TABLE `family`
  MODIFY `FAMILY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT cho bảng `iucn`
--
ALTER TABLE `iucn`
  MODIFY `IUCN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `kingdom`
--
ALTER TABLE `kingdom`
  MODIFY `KINGDOM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `nd32`
--
ALTER TABLE `nd32`
  MODIFY `ND32_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `ORDERS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `phylum`
--
ALTER TABLE `phylum`
  MODIFY `PHYLUM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `species`
--
ALTER TABLE `species`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `vnrl`
--
ALTER TABLE `vnrl`
  MODIFY `VNRL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `FK_PHYLUM` FOREIGN KEY (`PHYLUM_ID`) REFERENCES `phylum` (`PHYLUM_ID`);

--
-- Các ràng buộc cho bảng `family`
--
ALTER TABLE `family`
  ADD CONSTRAINT `FK_ORDERS` FOREIGN KEY (`ORDERS_ID`) REFERENCES `orders` (`ORDERS_ID`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_CLASS` FOREIGN KEY (`CLASS_ID`) REFERENCES `class` (`CLASS_ID`);

--
-- Các ràng buộc cho bảng `phylum`
--
ALTER TABLE `phylum`
  ADD CONSTRAINT `FK_KINGDOM` FOREIGN KEY (`KINGDOM_ID`) REFERENCES `kingdom` (`KINGDOM_ID`);

--
-- Các ràng buộc cho bảng `species`
--
ALTER TABLE `species`
  ADD CONSTRAINT `FK_CITES` FOREIGN KEY (`CITES`) REFERENCES `cites` (`CITES_ID`),
  ADD CONSTRAINT `FK_DISTRIBUTION` FOREIGN KEY (`Distribution`) REFERENCES `distribution` (`DISTRIBUTION_ID`),
  ADD CONSTRAINT `FK_FAMILY` FOREIGN KEY (`Family`) REFERENCES `family` (`FAMILY_ID`),
  ADD CONSTRAINT `FK_IUCN` FOREIGN KEY (`IUCN`) REFERENCES `iucn` (`IUCN_ID`),
  ADD CONSTRAINT `FK_ND32` FOREIGN KEY (`ND32`) REFERENCES `nd32` (`ND32_ID`),
  ADD CONSTRAINT `FK_VNRL` FOREIGN KEY (`VNRL`) REFERENCES `vnrl` (`VNRL_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
