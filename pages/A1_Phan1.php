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
                <h1>A1 - Phần 1: Luật trật tự an toàn giao thông đường bộ </h1>
                <hr><br>
                <strong style="text-align: center;">Tài liệu Lý thuyết Mô-tô hạng A1 </strong>
                <p style="text-align: center;">******</p>
                <img src="../assets/img/image21.png" style="width: 500px; height: 500px; margin-left: 110px;" />
                <div>
                    <br>
                    <p><b>Phần I:</b> Luật trật tự, an toàn giao thông đường bộ </p> <br>
                    <iframe src="https://drive.google.com/file/d/1XidKDQgZBrMY1ScRWyVQh9NI0LrVtXGj/preview" width="640"
                        height="480" allow="autoplay"></iframe>
                    <p><b><br>Phần II:</b> Quy chuẩn Kỹ thuật Quốc Gia về Báo hiệu Đường bộ</p><br>
                    <iframe src="https://drive.google.com/file/d/1zY594_CNj-Glem-3tcSDNpOQgz7kg9R9/preview" width="640"
                        height="480" allow="autoplay"></iframe>
                    <p style="text-align: center;">******</p>
                </div>
                <div>
                    <strong><br>Đạo đức người lái xe và văn hóa giao thông </strong><br><br>
                    <img src="../assets/img/image22.jpg" style="width: 500px; height: 300px; margin-left: 110px;" />
                    <iframe src="https://drive.google.com/file/d/1rOuG8EPaNDmnU8_CecyjTC-fMhxZbgiG/preview" width="640"
                        height="480" allow="autoplay"></iframe>
                    <p style="text-align: center;">******</p>
                </div>


            </div>
        </div>

        <div class="right-column">
            <div class="thithu"><a href="thi-bang-lai-xe-a1-online.php">Thi thử</a> </div><br><br>
            <div class="noidung">
                <b>🏍️ Thông tin cần thiết về bằng lái xe A1.</b>
                <hr>
                <img src="../assets/img/image17.png" />
                <a href="https://lapphuongthanh.vn/a1-phan-1-luat-trat-tu-an-toan-giao-thong-duong-bo.htm">A1-Phần 1:
                    Luật trật tự an toàn giao thông đường bộ </a><br><br>
                <img src="../assets/img/image18.png" />
                <a href="https://lapphuongthanh.vn/a1-phan-2-tong-hop-bien-bao-giao-thong.htm">A1-Phần 2: Tổng hợp biển
                    báo giao thông </a><br><br>
                <img src="../assets/img/image19.png" />
                <a href="https://lapphuongthanh.vn/a1-phan-3-bo-cau-hoi-va-phan-mem-on-luyen-ly-thuyet.htm">A1-Phần 3:
                    Bộ câu hỏi và phần mềm ôn luyện lý thuyết </a><br>

                <p>🧪 <i>03 hướng dẫn cực kì quan trọng trong ngày thi, nên chú ý: </i></p>
                <ol>
                    <li><a href="../assets/img/image20.png">Ngày thi sát hạch (Xem ngay) </a></li>
                    <li><a href="sat-hach-ly-thuyet-a1.php">Sát hạch lý thuyết (Xem ngay)</a></li>
                    <li><a href="https://youtu.be/ISJeeUw_xKs">Sát hạch thực hành (Xem ngay)</a></li>
                </ol>
            </div>
            <div>
                <b>🏍️ Thông tin cần thiết về bằng A2. </b>
                <hr>
                <b>🎯 TỔNG HỢP NHANH </b>
                <a href="sat-hach-ly-thuyet-a2.php">Lý thuyết A2</a>

                <table border="1"
                    style="border-collapse: collapse; border-radius: 5px; margin-top: 10px; padding: 10px;">
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
            <div style="border: 0 solid grey; margin-bottom: 30px; background-color: yellowgreen; padding: 30px;">
                <h4>📌 Lưu ý đặc biệt cho A2: </h4>
                <ul>
                    <li>Xe lớn hơn → <b>chân chống, ga, phanh, côn</b> đều mạnh và nhạy hơn.</li>
                    <li>Phải biết <b>cân bằng</b> và <b>vào ga hợp lý</b> để giữ xe không ngã.</li>
                    <li>Tăng kỹ năng luyện <b>hình số 8</b> vì dễ mất thăng bằng nếu không quen xe phân phối lớn. </li>
                </ul>
            </div>
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
    <?php include '../includes/footer.php' ?>
</body>

</html>