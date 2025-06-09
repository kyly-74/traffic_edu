<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lý thuyết toàn diện </title>
    <link rel="stylesheet" href="../assets/css/theory.css">
</head>

<body>
    <header class="header">
        <h1>HỌC LÝ THUYẾT THI LÁI XE MÔ TÔ </h1>
        <p>Nắm vững kiến thức, lái xe an toàn </p>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="../index.php"> Trang chủ </a></li>
            <li><a href="rules.php"> Luật giao thông </a></li>
            <li><a href="signs.php"> Biển báo </a></li>
            <li><a href="penalties.php"> Xử phạt </a></li>
            <li><a href="quiz.php"> Kiểm tra</a> </li>
            <?php if (isset($_SESSION['user'])): ?> <div class="user-info">
                    <i class="fa-solid fa-user-tie"></i><?php echo htmlspecialchars($_SESSION['user']['name']); ?>
                    <a href="../includes/logout.php" class="btn btn-logout">Đăng xuất</a>
                </div>
            <?php endif; ?>
        </ul>
    </nav>
    <div class="box-container">
        <div class="left-column">
            <div class="toc-header">
                <span class="toc-icon">&#9776;</span>
                <span class="toc-title">Mục lục</span>
                <!-- <span class="toc-arrow">&#x25BC;</span> -->
            </div>
            <ol class="toc-list">
                <li><a href="rules.php">Luật giao thông đường bộ </a></li>
                <li><a href="signs.php">Biển báo giao thông </a></li>
                <li><a href="penalties.php">Xử phạt vi phạm giao thông </a></li>
                <li><a href="quiz.php">Quy định thi giấy phép lái xe </a></li>
                <li><a href="chonchucnang.php">Đề ôn tập thi lái xe </a></li>
                <li><a href="thi-bang-lai-xe-a1-online.php">Đề thi thử lái xe </a></li>
                <li><a href="../index.php?sidebar=auth&tab=register">Đăng ký thi bằng lái xe </a></li>
            </ol>
        </div>
        <div class="center-column">
            <div class="content">
                <h2>Biển báo Giao thông </h2>
                <hr>
                <div>
                    <p><b>Biển báo giao thông đường bộ </b>hay còn được gọi là hệ thống báo hiệu đường bộ là hệ thống
                        rất nhiều biển báo giao thông cung cấp thông tin cụ thể cho <b>người tham gia giao thông</b> và
                        được chia thành 6 nhóm chính sau: </p>
                    <p><b>Tác dụng: </b>Đây là loại biển báo giao thông để biểu thị các điều cấm. Người tham gia giao
                        thông phải chấp hành các điều đã được báo trên biển. Nhóm biển báo cấm gồm 39 kiểu, bao gồm các
                        biển báo giao thông được đánh số từ 101 đến 139.</p>
                </div>
                <div>
                    <ol>
                        <li>
                            <b>Biển báo cấm.</b>
                            <p>Biển báo cấm có dạng: Hình tròn, viền đỏ, nền trắng, trên nền có hình vẽ/ chữ số, chữ
                                viết màu đen (ngoại trừ một số trường hợp đặc biệt). Biển báo cấm có mã <i
                                    style="color: red;">P (cấm)</i> và <i style="color: red;">DP (hết cấm)</i>.</p>
                            <image
                                src="https://vantaitruonggiang.vn/wp-content/uploads/2017/10/bi%E1%BB%83n-b%C3%A1o-c%E1%BA%A5m-%C4%91%C6%B0%E1%BB%9Dng-b%E1%BB%99.jpg"
                                style="margin: 10px 70px 50px 70px; width: 600px; height: 500px;"></image>
                        </li>
                        <li>
                            <b>Biển báo nguy hiểm. </b>
                            <p>Biển báo Nguy hiểm có dạng: hình tam giác đều, đường viền đỏ, nền vàng, nội dung và hình
                                vẽ màu đen.</p>
                            <p><b>Tác dụng:</b> Biển báo nguy hiểm để cảnh báo các tình huống nguy hiểm có thể xảy ra
                                được dùng để báo cho người sử dụng đường, chủ yếu là người lái xe cơ giới biết được tính
                                chất của sự nguy hiểm trên tuyến đường phía trước để phòng ngừa. Khi gặp biển báo nguy
                                hiểm người lái xe phải<b> giảm tốc độ.</b></p>
                            <image
                                src="https://bizweb.dktcdn.net/100/415/690/files/cac-nhom-bien-bao-giao-thong-3.jpg?v=1665805557437.jpg"
                                style="margin: 10px 70px 50px 70px; width: 600px; height: 600px;"></image>
                        </li>
                        <li>
                            <p><b>Biển báo hiệu lệnh. </b>Có dạng: Hình tròn, nền xanh lam với hình vẽ màu trắng.</p>
                            <p><b>Tác dụng: </b>Báo các hiệu lệnh cho người tham gia giao thông phải chấp hành các hiệu
                                lệnh trên biển báo (trừ một số trường hợp đặc biệt). Biển báo hiệu lệnh gồm 10 kiểu và
                                được đánh số thứ tự từ 301 đến 310.</p>
                            <image src="https://proauto.vn/wp-content/uploads/2024/04/bien-bao-hieu-lenh-1.png"
                                style="margin: 10px 70px 50px 70px; width: 600px; height: 400px;"></image>
                        </li>
                        <li>
                            <p><b>Biển báo chỉ dẫn. </b></p>
                            <p>Biển báo chỉ dẫn có dạng: Hình vuông hoặc hình chữ nhật, nền xanh, hình vẽ màu trắng.</p>
                            <p><b>Tác dụng: </b>Hướng dẫn cho người tham gia giao thông biết những hướng cần thiết hoặc
                                những điều có ích khác, giúp họ tham gia giao thông thuận lợi trên đường.</p>
                            <image src="https://baogiaothong.mediacdn.vn/files/dung.pham/2016/05/04/11-1539.jpg"
                                style="margin: 10px 70px 40px 70px; width: 600px; height: 600px;"></image>
                        </li>
                        <li>
                            <p><b>Biển báo phụ </b></p>
                            <p>Biển báo phụ Có dạng hình vuông hoặc hình chữ nhật, viền đen, nền trắng, hình vẽ màu đen,
                                thường nằm dưới các biển chính để bổ sung làm rõ ý nghĩa các biển chính.</p>
                            <p>Biển phụ thường được kết hợp cùng với các loại biển báo giao thông khác như biển báo cấm,
                                biển báo nguy hiểm, biển chỉ dẫn và biển báo hiệu lệnh để thuyết minh rõ hơn về các biển
                                đó.</p>
                            <image
                                src="https://vantaitruonggiang.vn/wp-content/uploads/2017/10/Bi%E1%BB%83n-b%C3%A1o-ph%E1%BB%A5.jpg"
                                style="margin: 10px 70px 50px 70px; width: 600px; height: 400px;"></image>
                        </li>
                        <li>
                            <p><b>Biển báo Vạch kẻ đường</b></p>
                            <p>Vạch kẻ đường cũng được coi là một dạng biển báo giao thông nhằm hướng dẫn, điều khiển
                                giao thông trên đường giúp đảm bảo khả năng thông xe cũng như an toàn cho người tham gia
                                giao thông.</p>
                            <p>Vạch kẻ đường có 2 loại là vạch kẻ đường nằm đứng và vạch kẻ đường nằm ngang</p>
                            <image
                                src="https://vantaitruonggiang.vn/wp-content/uploads/2017/10/V%E1%BA%A1ch-k%E1%BA%BB-%C4%91%C6%B0%E1%BB%9Dng.jpg"
                                style="margin: 10px 70px 50px 70px; width: 600px; height: 400px;"></image>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="right-column">
            <div class="thithu"><a href="thi-bang-lai-xe-a1-online.php" style="text-decoration: none; color:white">Thi thử</a> </div><br>
            <div class="noidung">
                <b>🛵 Thông tin cần thiết về bằng lái xe A1.</b>
                <hr>
                <img src="../assets/img/image17.png" style="margin-left: 2px;" />
                <a href="A1_Phan1.php">A1-Phần 1: Luật trật tự an toàn giao thông đường bộ </a><br><br>
                <img src="../assets/img/image18.png" style="margin-left: 2px;" />
                <a href="signs.php">A1-Phần 2: Tổng hợp biển báo giao thông </a><br><br>
                <img src="../assets/img/image19.png" style="margin-left: 2px;" />
                <a href="chonchucnang.php">A1-Phần 3: Bộ câu hỏi và phần mềm ôn luyện lý thuyết
                </a><br>

                <p>🧪 <i>03 hướng dẫn cực kì quan trọng trong ngày thi, nên chú ý: </i></p>
                <ol>
                    <li><a
                            href="https://lapphuongthanh.vn/pic/FileLibrary/images/Neutral%20Colored%20How%20To%20Infographic-4.png">Ngày
                            thi sát hạch (Xem ngay) </a></li>
                    <li><a href="sat-hach-ly-thuyet-a1.php">Sát hạch lý thuyết (Xem ngay)</a></li>
                    <li><a href="https://youtu.be/ISJeeUw_xKs">Sát hạch thực hành (Xem ngay)</a></li>
                </ol>
            </div>
            <div>
                <b>🏍️ Thông tin cần thiết về bằng A2. </b>
                <hr>
                <b>🎯 TỔNG HỢP NHANH </b>
                <a href="sat-hach-ly-thuyet-a2.php">Lý thuyết A2</a>

                <table style="border: 2px solid grey; border-radius: 5px; margin: 3px; padding: 10px;">
                    <thead>
                        <th>Tiêu chí </th>
                        <th>A2 </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Số câu hỏi</td>
                            <td>25 câu hỏi trắc nghiệm</td>
                        </tr>
                        <tr>
                            <td>Thời gian làm bài</td>
                            <td>19 phút</td>
                        </tr>
                        <tr>
                            <td>Yêu cầu đạt</td>
                            <td>Trả lời đúng 23/25 câu trở lên</td>
                        </tr>
                        <tr>
                            <td>Câu điểm liệt</td>
                            <td>Sai 1 câu điểm liệt là bị loại trực tiếp</td>
                        </tr>
                        <tr>
                            <td>Hình thức thi</td>
                            <td>Trắc nghiệm trên máy tính</td>
                        </tr>
                    </tbody>
                </table><br>
                <br>
            </div>
            <div style="border: 0 solid grey; margin-bottom: 10px; background-color: yellowgreen; padding: 30px;">
                <h4>📌 Lưu ý đặc biệt cho A2: </h4>
                <ul>
                    <li>Xe lớn hơn → <b>chân chống, ga, phanh, côn</b> đều mạnh và nhạy hơn.</li>
                    <li>Phải biết <b>cân bằng</b> và <b>vào ga hợp lý</b> để giữ xe không ngã.</li>
                    <li>Tăng kỹ năng luyện <b>hình số 8</b> vì dễ mất thăng bằng nếu không quen xe phân phối lớn. </li>
                </ul>
            </div><br>
            <div class="free">
                # CHƯƠNG TRÌNH KHUYẾN MÃI #
                <br>
                👉 Đăng ký hồ sơ học lái xe ngay hôm nay để nhận ngay ƯU ĐÃI CỰC LỚN #
                <br>
                👉 Nhận ngay ưu đãi khi học viên <a href="../index.php?sidebar=auth&tab=register"><b>đăng ký</b></a> học
                tại trung tâm.
                <br>
            </div>
        </div>
    </div>
    <?php include '../includes/footer.php'; ?>
</body>

</html>