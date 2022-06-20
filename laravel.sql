-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 04:57 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `baidang`
--

CREATE TABLE `baidang` (
  `maBaiDang` int(11) NOT NULL,
  `maChuDe` int(11) NOT NULL,
  `anhBia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tieuDe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noiDung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dinhKem` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maNguoiDang` int(11) NOT NULL,
  `ngayTao` datetime NOT NULL,
  `ngayCapNhat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baidang`
--

INSERT INTO `baidang` (`maBaiDang`, `maChuDe`, `anhBia`, `tieuDe`, `noiDung`, `dinhKem`, `maNguoiDang`, `ngayTao`, `ngayCapNhat`) VALUES
(1, 5, NULL, 'Thông Báo Xử Lí Vi Phạm Cơ Sở ABCXYZ', 'Căn cứ Điều 72 Luật Xử lý vi phạm hành chính, Điều 8 Nghị định số 81/2013/NĐ-CP ngày 19 tháng 7 năm 2013 của Chính phủ quy định chi tiết một số điều và biện pháp thi hành Luật xử lý vi phạm hành chính quy định về công bố công khai trên các phương tiện thông tin đại chúng việc xử phạt đối với cá nhân, tổ chức vi phạm hành chính…Để thực hiện việc công bố công khai các cá nhân, tổ chức vi phạm hành chính về lĩnh vực an toàn thực phẩm theo quy định của pháp luật, Ban Quản lý An toàn thực phẩm cung cấp danh sách cơ sở vi phạm về an toàn thực phẩm trong Tháng hành động vì ATTP năm 2021, như sau:', '', 1, '2022-05-30 11:53:43', '2022-05-30 11:53:43'),
(2, 8, NULL, 'TRIỂN KHAI GIÁM SÁT BẢO ĐẢM AN TOÀN THỰC PHẨM PHỤC VỤ KỲ THI TUYỂN SINH PHỔ THÔNG TRUNG HỌC TRÊN ĐỊA BÀN THÀNH PHỐ ĐÀ NẴNG NĂM 2022', 'Công tác bảo đảm an toàn thực phẩm được triển khai giám sát định kỳ hằng năm không để xảy ra các vụ ngộ độc thực phẩm, kịp thời ngăn ngừa và xử lý các sự cố mất an toàn thực phẩm trước và trong thời gian diễn ra Kỳ thi tuyển sinh vào Phổ thông trung học.\r\n\r\nTrong thời gian từ ngày 08/6/2022 đến hết 12/6/2022, Ban Quản lý An toàn thực phẩm đã thành lập 07 Đoàn kiểm tra, giám sát bảo đảm ATTP phối hợp với cán bộ chuyên trách tại 07 quận, huyện giám sát tại 32 trường tổ chức thi tuyển sinh vào Phổ thông trung học trên địa bàn thành phố Đà Nẵng.  Các Đoàn kiểm tra, giám sát việc chấp hành các quy định của pháp luật về an toàn thực phẩm đối với các cơ sở kinh doanh dịch vụ ăn uống theo quy định tại Luật An toàn thực phẩm số 55/2010/QH12 ngày 17/6/2010; Nghị định số 15/2018/NĐ-CP ngày 02/02/2018 của Chính phủ về Quy định chi tiết thi hành một số điều của Luật An toàn thực phẩm; Nghị định số 155/2018/NĐ-CP ngày 12/11/2018 của Chính phủ về Sửa đổi, bổ sung một số quy định liên quan đến điều kiện đầu tư kinh doanh thuộc phạm vi quản lý nhà nước của Bộ Y tế; Thông tư số 48/2015/TT-BYT ngày 01/12/2015 của Bộ Y tế quy định hoạt động kiểm tra an toàn thực phẩm trong sản xuất, kinh doanh thực phẩm thuộc phạm vi quản lý của Bộ Y tế.\r\n\r\nKết quả kiểm tra tại các khu vực xung quanh trường : Cụ thể tại 89 cơ sở quầy hàng ăn uống và giải khát chủ yếu do tuyến quận, và phường quản lý chiếm đa phần, nên hầu như các hộ không thực hiện các giấy tờ thủ tục hành chính như đăng ký kinh doanh, khám sức khỏe định kỳ hằng năm. Một số quầy hàng do tính chất buôn bán nhỏ lẻ, trên các vỉa hè đường phố nên hầu như các chủ hộ chưa được tập huấn kiến thức an toàn thực phẩm và không lưu lại các hóa đơn mua bán hàng hóa thực phẩm, cũng như một số nguyên liệu thực phẩm chế biến không xuất trình được nguồn gốc mua hàng.\r\n\r\nĐiều kiện cơ sở tại các quầy chủ yếu được bố trí trên vỉa hè, cách xa nguồn ô nhiễm, các quầy hàng đều được trang bị tủ kính chứa đựng thực phẩm. Tuy nhiên, một số quầy, cửa hàng vẫn còn tồn tại Đoàn kiểm tra, giám sát phát hiện như: sử dụng các thùng sơn, vỏ thùng hóa chất để chứa đựng thực phẩm tại quầy, không thực hiện đeo tạp dề, một số chủ thiếu khẩu trang, găng tay trong quá trình chế biến, phục vụ người dân.Các Đoàn kiểm tra, giám sát tiến hành lập biên bản nhắc nhở, yêu cầu cơ sở khắc phục và tăng cường công tác vệ sinh, phải lưu giữ thông tin nguồn gốc xuất xứ mua hàng thực phẩm, thực hiện trang phục đúng quy định trong quá trình kinh doanh và chế biến.. nhằm hạn chế tối đa nguy cơ ô nhiễm thực phẩm phòng ngừa ngộ độc thực phẩm xảy ra trong thời gian diễn ra kỳ thi Phổ thông trung học và thời gian mùa hè đang diễn ra.', '', 1, '2022-06-16 09:59:57', '2022-06-16 09:59:57'),
(3, 7, '', 'CẢNH BÁO SẢN PHẨM THỰC PHẨM CÓ CHỨA DICLOFENAC', 'Căn cứ Công văn số 1301/BQLATTP-TTr ngày 30 tháng 5 năm 2022 của Ban Quản lý An toàn thực phẩm thành phố Hồ Chí Minh về việc thông tin cảnh báo sản phẩm thực phẩm bảo vệ sức khỏe có chứa Diclofenac;\r\n\r\nNgày 02/6/2022, Ban Quản lý An toàn thực phẩm thành phố Đà Nẵng ban hành Thông báo số 537/TB-BQLATTP, thông tin như sau:\r\n\r\n1. Cảnh bảo sản phẩm thực phẩm bảo vệ sức khỏe Viên xương khớp Japan (số lô SX: BX 021901, ngày SX 06/2019, hạn dùng 06/2022) có kết quả kiểm nghiệm dương tính với Diclofenac.\r\n\r\na) Tên công ty: Công ty Cổ phần Dược mỹ phẩm Japan\r\n\r\nb) Địa chỉ: 52/1 đường Đông Hưng Thuận 10, phường Đông Hưng Thuận, quận 12, thành phố Hồ Chí Minh\r\n\r\nc) Nhãn hiệu: Thực phẩm bảo vệ sức khỏe Viên xương khớp Japan\r\n\r\nd) Mô tả sản phẩm: Công dụng bôi trơn khớp, hỗ trợ giảm thoái hóa xương khớp, mỏi khớp, cứng khớp. Hỗ trợ các trường hợp đau xương khớp (Số lô SX: BX 021901, ngày SX 06/2019, hạn dùng 06/2022)\r\n\r\n2. Phòng Y tế các quận, huyện phổ biến thông tin về sản phẩm thực phẩm bảo vệ sức khỏe nêu trên đến các nhà thuốc, quầy thuốc, các cơ sở kinh doanh và người sử dụng thực phẩm bảo vệ sức khỏe trên địa bàn để biết và không kinh doanh, sử dụng; Tiến hành kiểm tra, giám sát đối với các cơ sở kinh doanh thực phẩm bảo vệ sức khỏe, nhà thuốc, quầy thuốc theo phân cấp quản lý về việc lưu hành của các sản phẩm thực phẩm bảo vệ sức khỏe có thông tin nêu trên; Trường hợp phát hiện các sản phẩm này đang lưu hành trên thị trường, đề nghị Phòng Y tế các quận, huyện báo cáo về Ban Quản lý An toàn thực phẩm để phối hợp thực hiện theo quy định.\r\n\r\n3. Các nhà thuốc, quầy thuốc, các cơ sở kinh doanh và sử dụng thực phẩm bảo vệ sức khỏe trên địa bàn thành phố tổ chức tự kiểm tra, rà soát các sản phẩm thực phẩm hiện đang kinh doanh, sử dụng. Trường hợp phát hiện các sản phẩm thực phẩm bảo vệ sức khỏe nêu trên còn bảo quản trong kho hàng, bày bán, lưu hành trên thị trường thì đề nghị không được kinh doanh, sử dụng, yêu cầu Công ty thu hồi ngay và báo cáo về Ban Quản lý An toàn thực phẩm (Thông báo qua số điện thoại đường dây nóng của Ban: 0935.207.237) để phối hợp thực hiện theo quy định của pháp luật.\r\n\r\n4. Phòng Công tác Thanh tra chủ trì, các Đội Quản lý An toàn thực phẩm số 1,2 phối hợp kiểm tra, giám sát các đơn vị thực hiện thông báo này; xử lý những đơn vị vi phạm theo quy định hiện hành.', '', 5, '2022-06-16 10:37:46', '2022-06-16 10:37:46'),
(4, 4, NULL, 'TRẢ LỜI PHẢN ÁNH CỦA NGƯỜI DÂN VỀ SẢN PHẨM SỮA SIMILAC PRO-ADVANCE ', 'Ngày 28/02/2022, Ban Quản lý An toàn thực phẩm có văn bản số 192/BQLATTP-TTra trả lời phản ánh của người dân về sản phẩm sửa Similac Pro-Advance, cụ thể như sau:\r\n\r\nKính gửi: Ông Hồ Thanh Trí (địa chỉ: 75 Lê Phụng Hiểu, quận Sơn Trà, thành phố Đà Nẵng)\r\n\r\nNgày 21 tháng 2 năm 2022, Ban Quản lý An toàn thực phẩm nhận được thông tin phản ánh qua đường dây nóng của ông Hồ Thanh Trí (địa chỉ: 75 Lê Phụng Hiểu, quận Sơn Trà, thành phố Đà Nẵng; số điện thoại 0905834505) về sản phẩm sữa Similac Pro-Advance (trọng lượng 964g) do ông mua ở Cửa hàng tại địa chỉ số 99 Phan Châu Trinh, phường Phước Ninh, quận Hải Châu, thành phố Đà Nẵng không có nhãn phụ bằng Tiếng Việt và thuộc số lô hàng hóa được cảnh báo và thu hồi.\r\n\r\nCăn cứ công văn số 281/ATTP-SP ngày 20 tháng 02 năm 2022 của Cục An toàn thực phẩm về việc cảnh báo sản phẩm thực phẩm về sự cố an toàn thực phẩm liên quan đến việc một số trẻ nhỏ bị nhiễm Cronobacter sakazakii and Salmonella Newport liên quan đến sử dụng sản phẩm dinh dưỡng công thức sản xuất tại nhà máy của Abbott Nutrition’s Sturgis, MI, Hoa Kỳ. Đồng thời, Cục An toàn thực phẩm đề nghị khẩn trương tiến hành thu hồi toàn bộ các lô sản phẩm bị cảnh báo trên thị trường và khuyến cáo người tiêu dùng không sử dụng các sản phẩm có tên và số lô bị cảnh báo, cụ thể:\r\n\r\nTên công ty: Abbott\r\n\r\nNhãn hiệu: Similac, Alimentum, and Ele Care\r\n\r\nMô tả sản phẩm: Sản phẩm dinh dưỡng công thức dạng bột cho trẻ nhỏ\r\n\r\nSản phẩm thuộc diện bị thu hồi có thông tin như sau:\r\n\r\n- Hai số đầu tiên của mã số từ 22 tới 37.\r\n\r\n- Mã số trên bao bì chứa ký hiệu K8, SH, hoặc Z2.\r\n\r\n- Hạn sử dụng từ 01/4/2022 trở về sau.\r\n\r\nSau khi kiểm tra đối chiếu thông tin do ông Hồ Thanh Trí cung cấp thì sản phẩm thuộc số lô hàng hóa được cảnh báo và thu hồi theo công văn số 281/ATTP-SP ngày 20 tháng 02 năm 2022 của Cục An toàn thực phẩm về việc cảnh báo sản phẩm thực phẩm.\r\n\r\nCăn cứ vào các thông tin nêu trên, Ban Quản lý An toàn thực phẩm đã thành lập 01 Đoàn thanh tra đột xuất đối với Hộ kinh doanh Đồ Mỹ.vn tại địa chỉ số 99 Phan Châu Trinh, phường Phước Ninh, quận Hải Châu, thành phố Đà Nẵng để kiểm tra, và tiếp tục làm rõ.\r\n\r\nTại thời điểm thanh tra, Đoàn không phát hiện sản phẩm nhãn hiệu Similac nào tại cơ sở do cơ sở đã tiến hành trả lại cho nhà sản xuất. Ngay khi nhận được thông tin thu hồi, cơ sở đã dừng hoạt động kinh doanh đối với sản phẩm nói trên và thông báo đến khách hàng để tiếp tục thu hồi các sản phẩm nhãn hiệu Similac thuộc diện thu hồi nói trên. Đồng thời, Đoàn thanh tra phát hiện 01 loại sản phẩm Mật ong Kirkalnd Signature Wildflower Honey 2,27 kg với số lượng 4 bình vi phạm quy định về nội dung bắt buộc trên nhãn hàng hóa nhập khẩu có nhãn gốc bằng tiếng nước ngoài nhưng không có nhãn phụ bằng tiếng Việt Nam và đã tiến hành xử phạt vi phạm hành chính theo quy định.\r\n\r\nĐể bảo đảm quyền và nghĩa vụ của người tiêu dùng, Ban Quản lý An toàn thực phẩm thành phố Đà Nẵng đề nghị ông Hồ Thanh Trí không sử dụng sản phẩm sữa Similac Pro-Advance đã mua nói trên, đồng thời mang trả lại cho nhà cung cấp để tiến hành thu hồi sản phẩm theo quy định; không nên lựa chọn, tin dùng các sản phẩm thực phẩm nhập khẩu mà không có nhãn phụ bằng tiếng Việt Nam.\r\n\r\nVậy Ban Quản lý An toàn thực phẩm thành phố Đà Nẵng thông báo kết quả đến ông  Hồ Thanh Trí được biết./.', '', 1, '2022-06-16 10:42:58', '2022-06-16 10:42:58'),
(5, 3, NULL, 'THĂM QUAN NHÀ TRƯNG BÀY HOÀNG SA', 'Nhằm tuyên truyền, giáo dục đoàn viên trẻ, người lao động về truyền thống lịch sử, về chủ quyền biển đảo, đặc biệt là chủ quyền thiêng liêng của Việt Nam đối với quần đảo Hoàng Sa và hưởng ứng Kế hoạch số 01/KH-CĐKCQ ngày 20/04/2022 của Công đoàn Khối chính quyền 1 về tổ chức cuộc thi “Tìm hiểu về biển, đảo, quê hương Việt Nam”, ngày 6 tháng 6 năm 2022, Công đoàn Ban Quản lý An toàn thực phẩm thành phố Đà Nẵng tổ chức chuyến thăm quan, học tập tại Nhà trưng bày Hoàng Sa với sự tham gia của các đoàn viên Công đoàn trẻ của Ban.\r\nNhà Trưng bày Hoàng Sa được chính thức đi vào hoạt động đón khách tham quan từ ngày 28/3/2018. Công trình tọa lạc tại đường Hoàng Sa, phường Thọ Quang thành phố Đà Nẵng, được xây dựng trên tổng diện tích 1.296 m2, với hơn 300 tư liệu, hiện vật. Tại các điểm trưng bày là những tư liệu quý giá về quá trình xác lập chủ quyền, quản lý hành chính liên tục của Việt Nam từ thời nhà Nguyễn đến Việt Nam Cộng hòa. Các tư liệu được chia thành 5 chủ đề: Vị trí địa lý và điều kiện tự nhiên của quần đảo Hoàng Sa; bằng chứng chủ quyền của Việt Nam đối với Hoàng Sa thời các chúa Nguyễn; Hoàng Sa trong thư tịch cổ Việt Nam thời nhà Nguyễn; bằng chứng chủ quyền của Việt Nam đối với Hoàng Sa năm 1945-1975 và bằng chứng giai đoạn từ 1974 đến nay.\r\n\r\nHệ thống các tư liệu bằng hình ảnh động và tĩnh hỗ trợ bởi mỹ thuật, kỹ thuật đa phương tiện kết hợp với hệ thống bản đồ, sa bàn giúp giới thiệu cụ thể tổng quan hơn về vị trí địa lý tự nhiên, hành chính của huyện đảo Hoàng Sa.\r\nTất cả tư liệu, hiện vật đang được trưng bày tại Nhà Trưng bày Hoàng Sa chứng tỏ: Việt Nam là nhà nước đầu tiên trong lịch sử đã thực thi chủ quyền của mình một cách liên tục, hòa bình, hoàn toàn phù hợp với các quy định của luật pháp quốc tế đối với quần đảo Hoàng Sa.', '', 1, '2022-06-16 10:44:20', '2022-06-16 10:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `baocaovipham`
--

CREATE TABLE `baocaovipham` (
  `maBCVP` int(11) NOT NULL,
  `maCSKD` int(11) NOT NULL,
  `maNguoiBaoCao` int(11) NOT NULL,
  `noiDung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayTao` datetime NOT NULL,
  `trangThai` int(2) NOT NULL DEFAULT 1 COMMENT '\r\n1: Chưa xử lý, 2: Đã xử lý'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baocaovipham`
--

INSERT INTO `baocaovipham` (`maBCVP`, `maCSKD`, `maNguoiBaoCao`, `noiDung`, `ngayTao`, `trangThai`) VALUES
(1, 1, 1, 'Quán này nhậu về đi ỉa 3 tuần', '2022-05-30 12:07:31', 1),
(2, 3, 4, 'Đồ ăn không đảm bảo chất lượng', '2022-06-16 10:35:52', 1),
(3, 5, 5, 'Đồ ăn có côn trùng', '2022-06-16 10:36:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

CREATE TABLE `chude` (
  `maChuDe` int(11) NOT NULL,
  `tenChuDe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chude`
--

INSERT INTO `chude` (`maChuDe`, `tenChuDe`) VALUES
(1, 'Hoạt động ban'),
(2, 'Hoạt động địa phương'),
(3, 'Đảng - đoàn thể'),
(4, 'Hoạt động thanh tra kiểm tra'),
(5, 'Kết quả xử lí vi phạm'),
(6, 'Thông báo vi phạm'),
(7, 'Vì sức khoẻ cộng đồng'),
(8, 'Bản tin ATTP');

-- --------------------------------------------------------

--
-- Table structure for table `cosokinhdoanh`
--

CREATE TABLE `cosokinhdoanh` (
  `maCSKD` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `tenCSKD` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maNguoiDung` int(11) NOT NULL,
  `maLoaiCSKD` int(11) NOT NULL,
  `diaChi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maPhuongXa` int(11) NOT NULL,
  `trangThai` int(1) NOT NULL DEFAULT 1 COMMENT '1: Chưa có giấy phép, 2: Đã có giấy phép'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cosokinhdoanh`
--

INSERT INTO `cosokinhdoanh` (`maCSKD`, `tenCSKD`, `maNguoiDung`, `maLoaiCSKD`, `diaChi`, `maPhuongXa`, `trangThai`) VALUES
('CSKD01', 'Quán Nhậu Ông Ích Khiếm', 1, 1, '02 Ông Ích Khiêm', 16, 2),
('CSKD02', 'Địa điểm kinh doanh Thái Phong Lâm - Công ty TNHH Thái Phong Lâm', 5, 4, '43 Nguyễn Tất Thành', 16, 2),
('CSKD03', 'Công ty TNHH Ông Béo Quán', 3, 4, 'Lô 24 khu dân cư B3-1, khu dân cư khách sạn căn hộ và thương mại dịch vụ 2/9', 35, 2),
('CSKD04', 'Địa điểm kinh doanh-Metal-Công tyTNHH Dana Fine Foods', 4, 1, '155A Lê Thanh Nghị', 1, 2),
('CSKD05', 'Nhà hàng Draft Beer 2 - Công ty TNHH Thủy Thiên Thanh', 2, 1, 'Thửa đất số 6, tờ bản đồ số 17, Khu đất HH9, Khu du lịch ven sông Hàn, đường Trần Hưng Đạo', 2, 2),
('CSKD06', 'Công ty TNHH Bình Giang', 3, 2, 'Lô 2+3 A7.3 Khu Công viên Bắc Tương đài', 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dangkygpattp`
--

CREATE TABLE `dangkygpattp` (
  `maDangKy` int(11) NOT NULL,
  `maCSKD` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `maVanBan` int(11) DEFAULT NULL,
  `ngayDangKy` datetime NOT NULL,
  `ghiChu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangThai` int(1) NOT NULL COMMENT '1: Đang chờ duyệt, 2: Đã duyệt, 3: Từ chối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dangkygpattp`
--

INSERT INTO `dangkygpattp` (`maDangKy`, `maCSKD`, `maVanBan`, `ngayDangKy`, `ghiChu`, `trangThai`) VALUES
(1, 'CSKD01', 1, '2022-06-18 09:22:43', '', 2),
(2, 'CSKD02', 1, '2022-06-18 09:23:16', '', 2),
(3, 'CSKD03', 1, '2022-06-18 09:23:16', '', 2),
(4, 'CSKD04', 1, '2022-06-18 09:23:16', '1', 2),
(5, 'CSKD05', 1, '2022-06-18 09:23:16', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dieukhoanvipham`
--

CREATE TABLE `dieukhoanvipham` (
  `maDKVP` int(11) NOT NULL,
  `maKQTT` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `tenviPham` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaiViPham` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayBanHanh` date NOT NULL,
  `ngayHieuLuc` date DEFAULT NULL,
  `mucPhat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dieukhoanvipham`
--

INSERT INTO `dieukhoanvipham` (`maDKVP`, `maKQTT`, `tenviPham`, `loaiViPham`, `ngayBanHanh`, `ngayHieuLuc`, `mucPhat`) VALUES
(1, 'KQTT01', 'Bày bán, chứa đựng thực phẩm trên thiết bị, dụng cụ, vật liệu không bảo đảm vệ sinh', 'Vi phạm hành chính trong lĩnh vực an toàn thực phẩm (ATTP)', '2018-10-20', '2018-10-20', 2500000);

-- --------------------------------------------------------

--
-- Table structure for table `giayphepattp`
--

CREATE TABLE `giayphepattp` (
  `maGiayPhepATTP` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `maCSKD` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `maVanBan` int(11) NOT NULL,
  `ngayCap` date NOT NULL,
  `thoiHan` date NOT NULL,
  `ngayThuHoi` date DEFAULT NULL,
  `trangThai` int(1) NOT NULL DEFAULT 1 COMMENT '1: Có hiệu lực, 2: Hết hiệu lực'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giayphepattp`
--

INSERT INTO `giayphepattp` (`maGiayPhepATTP`, `maCSKD`, `maVanBan`, `ngayCap`, `thoiHan`, `ngayThuHoi`, `trangThai`) VALUES
('GPKDCSKD01', 'CSKD01', 1, '2022-06-18', '2024-06-30', NULL, 1),
('GPKDCSKD02', 'CSKD02', 1, '2022-06-18', '2024-06-30', NULL, 1),
('GPKDCSKD03', 'CSKD03', 1, '2022-06-18', '2024-06-30', NULL, 1),
('GPKDCSKD04', 'CSKD04', 1, '2022-06-18', '2024-06-30', NULL, 1),
('GPKDCSKD05', 'CSKD05', 1, '2022-06-18', '2024-06-30', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `maAnh` int(11) NOT NULL,
  `tenAnh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkAnh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maBaiDang` int(11) DEFAULT NULL,
  `maBCVP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kehoachthanhtra`
--

CREATE TABLE `kehoachthanhtra` (
  `maKHTT` int(11) NOT NULL,
  `maCSKD` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `maNguoiLap` int(11) NOT NULL,
  `maVanBan` int(11) DEFAULT NULL,
  `thoiGianLKHTT` datetime NOT NULL,
  `thoiGianThanhTra` date NOT NULL,
  `maNguoiPheDuyet` int(11) NOT NULL,
  `maNhomThanhTra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kehoachthanhtra`
--

INSERT INTO `kehoachthanhtra` (`maKHTT`, `maCSKD`, `maNguoiLap`, `maVanBan`, `thoiGianLKHTT`, `thoiGianThanhTra`, `maNguoiPheDuyet`, `maNhomThanhTra`) VALUES
(1, 'CSKD01', 2, 1, '2022-06-18 11:54:36', '2022-06-23', 4, 1),
(2, 'CSKD02', 1, 1, '2022-06-18 12:02:05', '2022-06-19', 4, 2),
(3, 'CSKD03', 2, 1, '2022-06-18 12:02:49', '2022-06-20', 4, 2),
(4, 'CSKD04', 2, 1, '2022-06-18 12:03:22', '2022-06-21', 4, 2),
(5, 'CSKD05', 2, 1, '2022-06-18 12:03:22', '2022-06-22', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ketquathanhtra`
--

CREATE TABLE `ketquathanhtra` (
  `maKQTT` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `maKHTT` int(11) NOT NULL,
  `thoiGianThanhTra` datetime NOT NULL,
  `ketQuaThanhTra` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghiChu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangThai` int(11) NOT NULL COMMENT '1. Vi Phạm 2. Không vi phạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ketquathanhtra`
--

INSERT INTO `ketquathanhtra` (`maKQTT`, `maKHTT`, `thoiGianThanhTra`, `ketQuaThanhTra`, `ghiChu`, `trangThai`) VALUES
('KQTT01', 1, '2022-06-23 11:58:51', 'Cơ sở không đảm bảo vệ sinh an toàn thực phẩm', '', 1),
('KQTT02', 2, '2022-06-19 12:04:18', 'Nơi nấu ăn không đảm bảo vệ sinh', '', 1),
('KQTT03', 3, '2022-06-20 12:04:18', 'Nơi nấu ăn không đảm bảo vệ sinh', '', 1),
('KQTT04', 4, '2022-06-21 12:05:11', 'Nơi nấu ăn không đảm bảo vệ sinh', '', 1),
('KQTT05', 5, '2022-06-22 17:05:11', 'Đảm bảo vệ sinh an toàn thực phẩm', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lichsuvipham`
--

CREATE TABLE `lichsuvipham` (
  `maViPham` int(11) NOT NULL,
  `maCSKD` int(11) NOT NULL,
  `maKQTT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lichsuvipham`
--

INSERT INTO `lichsuvipham` (`maViPham`, `maCSKD`, `maKQTT`) VALUES
(1, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `loaicskd`
--

CREATE TABLE `loaicskd` (
  `maLoaiCSKD` int(11) NOT NULL,
  `tenLoaiCSKD` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaicskd`
--

INSERT INTO `loaicskd` (`maLoaiCSKD`, `tenLoaiCSKD`) VALUES
(1, 'Nhà hàng ăn uống'),
(2, 'Cửa hàng ăn uống'),
(3, 'Chợ'),
(4, 'Sản Phẩm Cung Ứng');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `maNguoiDung` int(11) NOT NULL,
  `maQuyen` int(11) NOT NULL DEFAULT 1 COMMENT '1: Thành viên, 2:  Đại diện cơ sở kinh doanh, 3: Ban Thanh Tra, 4: Ban Quản lý',
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `matKhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaySinh` date DEFAULT NULL,
  `gioiTinh` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodt` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diaChi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maPhuongXa` int(11) NOT NULL,
  `trangThai` int(1) NOT NULL DEFAULT 1 COMMENT '1: Bình thường, 2: Đã Khoá',
  `ngayTao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`maNguoiDung`, `maQuyen`, `ten`, `ho`, `matKhau`, `avatar`, `ngaySinh`, `gioiTinh`, `email`, `sodt`, `diaChi`, `maPhuongXa`, `trangThai`, `ngayTao`) VALUES
(1, 1, 'Thiện', 'Phan', '#$@@@@@@@@@', NULL, '0000-00-00', 'Nam', 'neihtben@gmail.com', '0704042964', '46 Cao Thắng', 16, 1, '2022-05-30 11:52:28'),
(2, 4, 'Phước', 'Hồ', '123456', NULL, '2001-06-07', 'Nam', 'thienphuoc@gmail.com', '0234425255', '02 Thanh Sơn', 26, 1, '2022-06-16 10:15:01'),
(3, 2, 'Thiện', 'Phan', 'fsfsdfsdfsfsf', NULL, '1993-06-10', 'Nam', 'neihtben@gmail.com', '0704042966', '02 Thanh Sơn', 26, 1, '2022-06-16 10:22:17'),
(4, 2, 'Việt', 'Lê Ngọc', 'fsfsdfsdfsfsf', NULL, '1995-06-10', 'Nam', 'viet123@gmail.com', '0704023966', '02 Ông Ích Khiêm', 26, 1, '2022-06-16 10:22:17'),
(5, 1, 'Sỹ', 'Bùi', '2345363636', NULL, NULL, 'Nam', 'sibuivan@gmail.com', '0636246262', '02 Cao Thắng', 35, 1, '2022-06-16 10:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `nhomthanhtra`
--

CREATE TABLE `nhomthanhtra` (
  `maNhomThanhTra` int(11) NOT NULL,
  `maNguoiThanhTra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhomthanhtra`
--

INSERT INTO `nhomthanhtra` (`maNhomThanhTra`, `maNguoiThanhTra`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 3),
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `phuongxa`
--

CREATE TABLE `phuongxa` (
  `maPhuongXa` int(11) NOT NULL,
  `tenPhuongXa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maQuanHuyen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phuongxa`
--

INSERT INTO `phuongxa` (`maPhuongXa`, `tenPhuongXa`, `maQuanHuyen`) VALUES
(1, 'Phường Hòa Hiệp Bắc', 490),
(2, 'Phường Hòa Hiệp Nam', 490),
(3, 'Phường Hòa Khánh Bắc', 490),
(4, 'Phường Hòa Khánh Nam', 490),
(5, 'Phường Hòa Minh', 490),
(6, 'Phường Tam Thuận', 491),
(7, 'Phường Thanh Khê Tây', 491),
(8, 'Phường Thanh Khê Đông', 491),
(9, 'Phường Xuân Hà', 491),
(10, 'Phường Tân Chính', 491),
(11, 'Phường Chính Gián', 491),
(12, 'Phường Vĩnh Trung', 491),
(13, 'Phường Thạc Gián', 491),
(14, 'Phường An Khê', 491),
(15, 'Phường Hòa Khê', 491),
(16, 'Phường Thanh Bình', 492),
(17, 'Phường Thuận Phước', 492),
(18, 'Phường Thạch Thang', 492),
(19, 'Phường Hải Châu I', 492),
(20, 'Phường Hải Châu II', 492),
(21, 'Phường Phước Ninh', 492),
(22, 'Phường Hòa Thuận Tây', 492),
(23, 'Phường Hòa Thuận Đông', 492),
(24, 'Phường Nam Dương', 492),
(25, 'Phường Bình Hiên', 492),
(26, 'Phường Bình Thuận', 492),
(27, 'Phường Hòa Cường Bắc', 492),
(28, 'Phường Hòa Cường Nam', 492),
(29, 'Phường Thọ Quang', 493),
(30, 'Phường Nại Hiên Đông', 493),
(31, 'Phường Mân Thái', 493),
(32, 'Phường An Hải Bắc', 493),
(33, 'Phường Phước Mỹ', 493),
(34, 'Phường An Hải Tây', 493),
(35, 'Phường An Hải Đông', 493),
(36, 'Phường Mỹ An', 494),
(37, 'Phường Khuê Mỹ', 494),
(38, 'Phường Hoà Quý', 494),
(39, 'Phường Hoà Hải', 494),
(40, 'Phường Khuê Trung', 495),
(41, 'Phường Hòa Phát', 495),
(42, 'Phường Hòa An', 495),
(43, 'Phường Hòa Thọ Tây', 495),
(44, 'Phường Hòa Thọ Đông', 495),
(45, 'Xã Hòa Bắc', 496),
(46, 'Xã Hòa Liên', 496),
(47, 'Xã Hòa Ninh', 496),
(48, 'Xã Hòa Sơn', 496),
(49, 'Xã Hòa Nhơn', 496),
(50, 'Xã Hòa Phú', 496),
(51, 'Xã Hòa Châu', 496),
(52, 'Xã Hòa Tiến', 496),
(53, 'Xã Hòa Phước', 496),
(54, 'Xã Hòa Khương', 496),
(55, 'Xã Hòa Phong', 496);

-- --------------------------------------------------------

--
-- Table structure for table `quanhuyen`
--

CREATE TABLE `quanhuyen` (
  `maQuanhuyen` int(11) NOT NULL,
  `tenQuanHuyen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quanhuyen`
--

INSERT INTO `quanhuyen` (`maQuanhuyen`, `tenQuanHuyen`) VALUES
(490, 'Quận Liên Chiểu'),
(491, 'Quận Thanh Khê'),
(492, 'Quận Hải Châu'),
(493, 'Quận Sơn Trà'),
(494, 'Quận Ngũ Hành Sơn'),
(495, 'Quận Cẩm Lệ'),
(496, 'Huyện Hoà Vang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baidang`
--
ALTER TABLE `baidang`
  ADD PRIMARY KEY (`maBaiDang`),
  ADD KEY `maChuDe` (`maChuDe`),
  ADD KEY `hinhAnh` (`anhBia`),
  ADD KEY `maNguoiDang` (`maNguoiDang`);

--
-- Indexes for table `baocaovipham`
--
ALTER TABLE `baocaovipham`
  ADD PRIMARY KEY (`maBCVP`),
  ADD KEY `maCSKD` (`maCSKD`),
  ADD KEY `maNguoiBaoCao` (`maNguoiBaoCao`);

--
-- Indexes for table `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`maChuDe`);

--
-- Indexes for table `cosokinhdoanh`
--
ALTER TABLE `cosokinhdoanh`
  ADD PRIMARY KEY (`maCSKD`),
  ADD KEY `maLoaiCSKD` (`maLoaiCSKD`),
  ADD KEY `maPhuongXa` (`maPhuongXa`),
  ADD KEY `maNguoiDung` (`maNguoiDung`);

--
-- Indexes for table `dangkygpattp`
--
ALTER TABLE `dangkygpattp`
  ADD PRIMARY KEY (`maDangKy`),
  ADD KEY `maVanBan` (`maVanBan`),
  ADD KEY `maCSKD` (`maCSKD`);

--
-- Indexes for table `dieukhoanvipham`
--
ALTER TABLE `dieukhoanvipham`
  ADD PRIMARY KEY (`maDKVP`,`maKQTT`),
  ADD KEY `maKQTT` (`maKQTT`);

--
-- Indexes for table `giayphepattp`
--
ALTER TABLE `giayphepattp`
  ADD PRIMARY KEY (`maGiayPhepATTP`),
  ADD KEY `maVanBan` (`maVanBan`),
  ADD KEY `maCSKD` (`maCSKD`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`maAnh`),
  ADD KEY `maBaiDang` (`maBaiDang`),
  ADD KEY `maBCVP` (`maBCVP`);

--
-- Indexes for table `kehoachthanhtra`
--
ALTER TABLE `kehoachthanhtra`
  ADD PRIMARY KEY (`maKHTT`),
  ADD KEY `maCSKD` (`maCSKD`),
  ADD KEY `maNguoiLap` (`maNguoiLap`),
  ADD KEY `maNguoiPheDuyet` (`maNguoiPheDuyet`),
  ADD KEY `maVanBan` (`maVanBan`),
  ADD KEY `maNhomThanhTra` (`maNhomThanhTra`);

--
-- Indexes for table `ketquathanhtra`
--
ALTER TABLE `ketquathanhtra`
  ADD PRIMARY KEY (`maKQTT`),
  ADD KEY `maKHTT` (`maKHTT`);

--
-- Indexes for table `lichsuvipham`
--
ALTER TABLE `lichsuvipham`
  ADD PRIMARY KEY (`maViPham`),
  ADD KEY `maCSKD` (`maCSKD`),
  ADD KEY `maKQTT` (`maKQTT`);

--
-- Indexes for table `loaicskd`
--
ALTER TABLE `loaicskd`
  ADD PRIMARY KEY (`maLoaiCSKD`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`maNguoiDung`),
  ADD KEY `maPhuongXa` (`maPhuongXa`);

--
-- Indexes for table `nhomthanhtra`
--
ALTER TABLE `nhomthanhtra`
  ADD PRIMARY KEY (`maNhomThanhTra`,`maNguoiThanhTra`),
  ADD KEY `maNguoiThanhTra` (`maNguoiThanhTra`);

--
-- Indexes for table `phuongxa`
--
ALTER TABLE `phuongxa`
  ADD PRIMARY KEY (`maPhuongXa`),
  ADD KEY `maQuanHuyen` (`maQuanHuyen`);

--
-- Indexes for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  ADD PRIMARY KEY (`maQuanhuyen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baidang`
--
ALTER TABLE `baidang`
  MODIFY `maBaiDang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `baocaovipham`
--
ALTER TABLE `baocaovipham`
  MODIFY `maBCVP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chude`
--
ALTER TABLE `chude`
  MODIFY `maChuDe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dangkygpattp`
--
ALTER TABLE `dangkygpattp`
  MODIFY `maDangKy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lichsuvipham`
--
ALTER TABLE `lichsuvipham`
  MODIFY `maViPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loaicskd`
--
ALTER TABLE `loaicskd`
  MODIFY `maLoaiCSKD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phuongxa`
--
ALTER TABLE `phuongxa`
  MODIFY `maPhuongXa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baidang`
--
ALTER TABLE `baidang`
  ADD CONSTRAINT `baidang_ibfk_3` FOREIGN KEY (`maNguoiDang`) REFERENCES `nguoidung` (`maNguoiDung`),
  ADD CONSTRAINT `baidang_ibfk_4` FOREIGN KEY (`maChuDe`) REFERENCES `chude` (`maChuDe`);

--
-- Constraints for table `baocaovipham`
--
ALTER TABLE `baocaovipham`
  ADD CONSTRAINT `baocaovipham_ibfk_2` FOREIGN KEY (`maNguoiBaoCao`) REFERENCES `nguoidung` (`maNguoiDung`);

--
-- Constraints for table `cosokinhdoanh`
--
ALTER TABLE `cosokinhdoanh`
  ADD CONSTRAINT `cosokinhdoanh_ibfk_2` FOREIGN KEY (`maPhuongXa`) REFERENCES `phuongxa` (`maPhuongXa`),
  ADD CONSTRAINT `cosokinhdoanh_ibfk_3` FOREIGN KEY (`maNguoiDung`) REFERENCES `nguoidung` (`maNguoiDung`),
  ADD CONSTRAINT `cosokinhdoanh_ibfk_4` FOREIGN KEY (`maLoaiCSKD`) REFERENCES `loaicskd` (`maLoaiCSKD`);

--
-- Constraints for table `dangkygpattp`
--
ALTER TABLE `dangkygpattp`
  ADD CONSTRAINT `dangkygpattp_ibfk_1` FOREIGN KEY (`maCSKD`) REFERENCES `cosokinhdoanh` (`maCSKD`);

--
-- Constraints for table `dieukhoanvipham`
--
ALTER TABLE `dieukhoanvipham`
  ADD CONSTRAINT `dieukhoanvipham_ibfk_1` FOREIGN KEY (`maKQTT`) REFERENCES `ketquathanhtra` (`maKQTT`);

--
-- Constraints for table `giayphepattp`
--
ALTER TABLE `giayphepattp`
  ADD CONSTRAINT `giayphepattp_ibfk_1` FOREIGN KEY (`maCSKD`) REFERENCES `cosokinhdoanh` (`maCSKD`);

--
-- Constraints for table `kehoachthanhtra`
--
ALTER TABLE `kehoachthanhtra`
  ADD CONSTRAINT `kehoachthanhtra_ibfk_1` FOREIGN KEY (`maCSKD`) REFERENCES `cosokinhdoanh` (`maCSKD`),
  ADD CONSTRAINT `kehoachthanhtra_ibfk_2` FOREIGN KEY (`maNguoiLap`) REFERENCES `nguoidung` (`maNguoiDung`),
  ADD CONSTRAINT `kehoachthanhtra_ibfk_3` FOREIGN KEY (`maNguoiPheDuyet`) REFERENCES `nguoidung` (`maNguoiDung`),
  ADD CONSTRAINT `kehoachthanhtra_ibfk_4` FOREIGN KEY (`maNhomThanhTra`) REFERENCES `nhomthanhtra` (`maNhomThanhTra`);

--
-- Constraints for table `ketquathanhtra`
--
ALTER TABLE `ketquathanhtra`
  ADD CONSTRAINT `ketquathanhtra_ibfk_1` FOREIGN KEY (`maKHTT`) REFERENCES `kehoachthanhtra` (`maKHTT`);

--
-- Constraints for table `nhomthanhtra`
--
ALTER TABLE `nhomthanhtra`
  ADD CONSTRAINT `nhomthanhtra_ibfk_1` FOREIGN KEY (`maNguoiThanhTra`) REFERENCES `nguoidung` (`maNguoiDung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
