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
                <h2>Xử phạt vi phạm giao thông </h2>
                <hr>
                <p>Chính phủ ban hành Nghị định 168/2024/NĐ-CP quy định xử phạt vi phạm hành chính về trật tự, an toàn
                    giao thông trong lĩnh vực giao thông đường bộ; trừ điểm, phục hồi điểm giấy phép lái xe, có hiệu lực
                    từ 1/1/2025.</p>
                <image
                    src="https://bcp.cdnchinhphu.vn/thumb_w/777/334894974524682240/2024/12/31/phat-173557899144550354085.jpg"
                    style="margin: 10px 70px 50px 70px; width: 600px; height: 400px;"></image>
                <ol>
                    <li><b>Vi phạm nồng độ cồn </b>
                        <table border="1" style="border-collapse: collapse; text-align: center;">
                            <thead>
                                <th>Loại phương tiện </th>
                                <th>Mức nồng độ cồn </th>
                                <th>Mức phạt </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="3">Xe máy </td>
                                    <td>Có nồng độ cồn nhưng chưa vượt quá 50mg/100ml máu hoặc 0,25mg/lít khí thở</td>
                                    <td>2 - 3 triệu đồng</td>
                                </tr>
                                <tr>
                                    <!-- <td>Xe máy </td> -->
                                    <td>50 - 80mg/100ml máu hoặc 0,25 - 0,4mg/lít khí thở</td>
                                    <td>4 - 5 triệu đồng</td>
                                </tr>
                                <tr>
                                    <!-- <td>Xe máy </td> -->
                                    <td>Trên 80mg/100ml máu hoặc trên 0,4mg/lít khí thở</td>
                                    <td>6 - 8 triệu đồng</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">Ô tô </td>
                                    <td>Có nồng độ cồn nhưng chưa vượt quá 50mg/100ml máu hoặc 0,25mg/lít khí thở</td>
                                    <td>7 - 10 triệu đồng</td>
                                </tr>
                                <tr>
                                    <!-- <td>Ô tô </td> -->
                                    <td>50 - 80mg/100ml máu hoặc 0,25 - 0,4mg/lít khí thở</td>
                                    <td>16 - 18 triệu đồng</td>
                                </tr>
                                <tr>
                                    <!-- <td>Ô tô </td> -->
                                    <td>Trên 80mg/100ml máu hoặc trên 0,4mg/lít khí thở</td>
                                    <td>30 - 40 triệu đồng</td>
                                </tr>
                            </tbody>
                        </table>
                    </li>
                    <p><strong>Lưu ý: </strong>Ngoài phạt tiền, người vi phạm còn bị tước giấy phép lái xe từ 1-2 tháng
                        (lần đầu) và từ 3-5 tháng (tái phạm).</p>
                    <li>
                        <b>Vi phạm về tốc độ </b>
                        <table border="1" style="border-collapse: collapse; text-align: center;">
                            <thead>
                                <tr>
                                    <th>Loại phương tiện </th>
                                    <th>Mức nồng độ cồn </th>
                                    <th>Mức phạt </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="3">Xe máy </td>
                                    <td>Vượt từ 5km/h đến dưới 10km/h</td>
                                    <td>800.000 - 1 triệu đồng</td>
                                </tr>
                                <tr>
                                    <td>Vượt từ 10km/h đến 20km/h</td>
                                    <td>1 - 2 triệu đồng</td>
                                </tr>
                                <tr>
                                    <td>Vượt trên 20km/h</td>
                                    <td>2 - 3 triệu đồng</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">Ô tô </td>
                                    <td>Vượt từ 5km/h đến dưới 10km/h</td>
                                    <td>2 - 3 triệu đồng</td>
                                </tr>
                                <tr>
                                    <td>Vượt từ 10km/h đến 20km/h</td>
                                    <td>4 - 6 triệu đồng</td>
                                </tr>
                                <tr>
                                    <td>Vượt trên 20km/h</td>
                                    <td>8 - 12 triệu đồng</td>
                                </tr>
                            </tbody>
                        </table>
                    </li><br>
                    <li>
                        <b>Vi phạm về làn đường </b>
                        <table border="1" style="border-collapse: collapse; text-align: center;">
                            <thead>
                                <tr>
                                    <th>Hành vi vi phạm </th>
                                    <th>Mức phạt </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Đi sai làn đường</td>
                                    <td>400.000 - 600.000 đồng (xe máy), 4 - 6 triệu đồng (ô tô)</td>
                                </tr>
                                <tr>
                                    <td>Chạy ngược chiều</td>
                                    <td>1 - 2 triệu đồng (xe máy), 6 - 8 triệu đồng (ô tô)</td>
                                </tr>
                            </tbody>
                        </table>
                    </li><br>
                    <li>
                        <b>Vi phạm về dừng, đỗ xe </b>
                        <table border="1" style="border-collapse: collapse; text-align: center;">
                            <thead>
                                <tr>
                                    <th>Hành vi vi phạm </th>
                                    <th>Mức phạt </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dừng, đỗ xe không đúng nơi quy định</td>
                                    <td>300.000 - 500.000 đồng (xe máy), 800.000 - 1 triệu đồng (ô tô)</td>
                                </tr>
                                <tr>
                                    <td>Dừng, đỗ xe trên đường cao tốc</td>
                                    <td>6 - 8 triệu đồng (ô tô)</td>
                                </tr>
                            </tbody>
                        </table>
                    </li><br>
                    <li>
                        <b>Vi phạm về giấy tờ </b>
                        <table border="1" style="border-collapse: collapse; text-align: center;">
                            <thead>
                                <tr>
                                    <th>Hành vi vi phạm </th>
                                    <th>Mức phạt </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Không mang giấy phép lái xe</td>
                                    <td>200.000 - 400.000 đồng (xe máy), 4 - 6 triệu đồng (ô tô)</td>
                                </tr>
                                <tr>
                                    <td>Không có giấy phép lái xe</td>
                                    <td>1 - 2 triệu đồng (xe máy), 10 - 12 triệu đồng (ô tô)</td>
                                </tr>
                            </tbody>
                        </table>
                    </li><br>
                    <li>
                        <b>Vi phạm về đội mũ bảo hiểm </b>
                        <table border="1" style="border-collapse: collapse; text-align: center;">
                            <thead>
                                <tr>
                                    <th>Hành vi vi phạm </th>
                                    <th>Mức phạt </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Không đội mũ bảo hiểm khi tham gia giao thông</td>
                                    <td>400.000 - 600.000 đồng</td>
                                </tr>
                            </tbody>
                        </table>
                    </li><br>
                    <li>
                        <b>Vi phạm về vượt đèn đỏ </b>
                        <table border="1" style="border-collapse: collapse; text-align: center;">
                            <thead>
                                <tr>
                                    <th>Hành vi vi phạm </th>
                                    <th>Mức phạt </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Vượt đèn đỏ </td>
                                    <td>800.000 - 1 triệu đồng (xe máy), 4 - 6 triệu đồng (ô tô)</td>
                                </tr>
                            </tbody>
                        </table>
                    </li>
                </ol>
                <strong>Lưu ý quan trọng:</strong>
                <ul>
                    <li>Các mức phạt trên được áp dụng theo quy định mới nhất từ ngày 1/1/2025.</li>
                    <li>Người tham gia giao thông cần tuân thủ nghiêm ngặt các quy định để đảm bảo an toàn cho bản thân
                        và cộng đồng.</li>
                </ul>
            </div>
        </div>
        <div class="right-column">
            <div class="thithu"><a href="thi-bang-lai-xe-a1-online.php">Thi thử</a> </div><br>
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