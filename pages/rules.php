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
            <li><a href="../index.php">Trang chủ </a></li>
            <li><a href="rules.php">Luật giao thông </a></li>
            <li><a href="signs.php"> Biển báo </a></li>
            <li><a href="penalties.php"> Xử phạt </a> </li>
            <li><a href="quiz.php"> Kiểm tra </a></li>
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
                <h2>Luật Giao thông Đường bộ </h2>
                <hr>
                <p>Luật Giao thông Đường bộ là một bộ quy tắc và quy định được thiết lập để điều chỉnh hành vi của người
                    tham gia giao thông trên đường bộ. Mục tiêu chính của luật này là đảm bảo an toàn cho tất cả các
                    phương tiện và người tham gia giao thông, bao gồm cả người đi bộ, xe đạp, xe máy, ô tô và các loại
                    phương tiện khác.</p>
                <div>
                    <h3>🔸 Các quy tắc cơ bản</h3>
                    <ul>
                        <li>Người tham gia giao thông phải tuân thủ các biển báo và tín hiệu giao thông; phải chú ý quan
                            sát, giữ khoảng cách an toàn và đi đúng phần đường quy định.</li>
                        <li>Người lái xe phải có giấy phép lái xe hợp lệ và phương tiện phải được đăng ký và kiểm định.
                        </li>
                        <li>Các phương tiện giao thông phải chạy đúng làn đường và tốc độ quy định; chấp hành đúng các
                            quy định khi qua nơi giao nhau. </li>
                        <li>Không được lái xe khi đã uống rượu bia hoặc sử dụng chất kích thích.</li>
                    </ul>
                </div>
                <div>
                    <image
                        src="https://cdn-blog.saladin.vn/contents/2025/01/04220416/luat-giao-thong-2025-tang-muc-xu-phat-vi-pham-giao-thong-tu-ngay-01-01-2025.jpg"
                        style="width: 100%; height: 500px; display: block; margin: 5px;"></image>
                    <p style="font-size: 18px; text-align: center;"><i>Ảnh người dân tham gia giao thông.</i></p>
                </div>
                <div>
                    <h3>🔸 Quy tắc lưu thông cơ bản </h3>
                    <ol>
                        <li><b>Phần đường và làn đường: </b>Người và phương tiện tham gia giao thông đường bộ đi về bên
                            phải theo chiều đi của mình, đi đúng làn đường, phần đường quy định.</li>
                        <li><b>Vận tốc và khoảng cách: </b>Người lái xe phải giữ khoảng cách an toàn phù hợp với xe chạy
                            liền trước để tránh va chạm khi xe trước chuyển hướng hoặc dừng đột ngột.</li>
                        <li><b>Vượt xe:</b> Xe phải vượt về bên trái, trừ trường hợp đặc biệt. Xe bị vượt không được
                            tăng tốc độ và phải giảm tốc độ khi cần thiết.</li>
                        <li><b>Dừng và đỗ xe: </b> Không dừng xe, đỗ xe trên phần đường xe chạy, đường giao nhau, đường
                            bộ trong hầm, đường cao tốc, tại nơi đường cong hoặc nơi tầm nhìn bị che khuất.</li>
                    </ol>
                </div>
                <div>
                    <image src="../assets/img/anh1.png" style="width: 100%; height: 450px; margin-top: 5px;"></image>
                </div>
                <div
                    style="background-color: rgb(217, 246, 241); border-left: 5px solid  rgb(5, 123, 104); margin: 10px 0; padding: 10px;">
                    <b>🔸 Quy định về nồng độ cồn:</b> Người điều khiển phương tiện giao thông đường bộ mà trong máu
                    hoặc hơi thở có nồng độ cồn sẽ bị xử phạt theo quy định của pháp luật. Đối với xe ô tô, máy kéo, xe
                    máy chuyên dùng thì không được phép có nồng độ cồn.
                </div>
                <div>
                    <h3>🔸 Quy định về tốc độ tối đa</h3>
                    <img src="https://cdn.thuvienphapluat.vn//uploads/tintuc/2022/03/02/toc-do-toi-da-cua-cac-loai-xe.jpg"
                        style="width: 100%; height: 450px; margin: 3px"></image>
                    <p style="font-size: 18px; text-align: center; "><i>Tốc độ tối đa của các loại xe khi tham gia giao
                            thông năm 2024.</i></p><br>
                    <ol>
                        <li>
                            <p><b>Tốc độ tối đa của xe máy (xe mô tô) khi tham gia giao thông </b></p>
                            <p>- Tốc độ tối đa của xe máy <b>trong khu vực đông dân cư:</b></p>
                            <p> + Đường đôi; đường một chiều có từ hai làn xe cơ giới trở lên: 60 km/h.</p>
                            <p> + Đường hai chiều; đường một chiều có một làn xe cơ giới: 50 km/h.</p>
                            <p>- Tốc độ tối đa của xe máy <b>ngoài khu vực đông dân cư:</b></p>
                            <p> + Đường đôi, đường một chiều có từ hai làn xe cơ giới trở lên: 70km/h.</p>
                            <p> + Đường hai chiều, đường một chiều có một làn xe cơ giới: 60km/h.</p>
                        </li>
                        <li>
                            <p><b>Tốc độ tối đa của xe gắn máy khi tham gia giao thông </b></p>
                            <p> Tốc độ không quá 40km/h.</p>
                        </li>
                        <li>
                            <p><b>Tốc độ tối đa của xe ô tô khi tham gia giao thông </b></p>
                            <p>- Tốc độ tối đa cuae xe ô tô <b>trong khu vực đông dân cư </b>(trừ đường cao tốc): </p>
                            <p> + Đường đôi, đường một chiều có từ hai làn xe cơ giới trở lên: 60km/h.</p>
                            <p> + Đường hai chiều, đường một chiều có một làn xe cơ giới: 50km/h.</p>
                            <p>- Tốc độ tối đa của xe ô tô <b>ngoài khu khực đông dân cư </b>(trừ đường cao tốc):</p>
                            <table border="1" style="border-collapse: collapse; width: 100%; text-align: center;">
                                <!-- border-collapse: collapse; chỉ còn khung đường viền bên ngoài  -->
                                <thead>
                                    <tr>
                                        <th rowspan="2">Loại xe</th>
                                        <th colspan="2">Tốc độ tối đa (km/h)</th>
                                    </tr>
                                    <tr>
                                        <td>Đường đôi; đường một chiều có từ hai làn xe cơ giới trở lên</td>
                                        <td>Đường hai chiều; đường một chiều có một làn xe cơ giới</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Xe ô tô con, xe ô tô chở người đến 30 chỗ (trừ xe buýt); ô tô tải có trọng
                                            tải nhỏ hơn hoặc bằng 3,5 tấn.</td>
                                        <td>90</td>
                                        <td>80</td>
                                    </tr>
                                    <tr>
                                        <td>Xe ô tô chở người trên 30 chỗ (trừ xe buýt); ô tô tải có trọng tải trên 3,5
                                            tấn (trừ ô tô xi téc).</td>
                                        <td>80</td>
                                        <td>70</td>
                                    </tr>
                                    <tr>
                                        <td>Ô tô buýt; ô tô đầu kéo kéo sơ mi rơ moóc; ô tô chuyên dùng (trừ ô tô trộn
                                            vữa, ô tô trộn bê tông).</td>
                                        <td>70</td>
                                        <td>60</td>
                                    </tr>
                                    <tr>
                                        <td>Ô tô kéo rơ moóc; ô tô kéo xe khác; ô tô trộn vữa, ô tô trộn bê tông, ô tô
                                            xi téc.</td>
                                        <td>60</td>
                                        <td>50</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>- Tốc độ tối đa của xe ô tô <b>trên đường cao tốc </b>không vượt quá 120km/h.</p>
                        </li>
                    </ol>
                </div>
                <div>
                    <h3>🔸 Quy định về đèn tín hiệu giao thông</h3>
                    <p>Người tham gia giao thông phải tuân thủ các tín hiệu đèn giao thông như sau:</p>
                    <table border="1"
                        style="border-collapse : collapse; width: 100%; text-align: center;  background-color: rgb(228, 225, 225); margin: 10px;">
                        <thead>
                            <th>Màu đèn </th>
                            <th>Ý nghĩa </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color: red;">Đỏ </td>
                                <td>Tất cả các phương tiện phải dừng lại trước vạch dừng</td>
                            </tr>
                            <tr>
                                <td style="color: yellow;">Vàng </td>
                                <td>Các phương tiện phải dừng lại trước vạch dừng, trừ khi không thể dừng lại an toàn
                                </td>
                            </tr>
                            <tr>
                                <td style="color: green;">Xanh </td>
                                <td>Các phương tiện được phép di chuyển, nhưng phải chú ý quan sát và nhường đường cho
                                    các phương tiện khác</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <image src="../assets/img/anh.png" style="margin: 10px 60px 0px 60px; width: 600px; height: 400px;">
                </image>
                <p style="font-size: 18px; text-align: center;"><i>Đèn giao thông có quy chuẩn mới từ năm 2025.</i></p>
                <div>
                    <h3>🔸 Quy định về biển báo giao thông</h3>
                    <p>Biển báo hiệu đường bộ gồm 6 nhóm chính sau: </p>
                    <ul>
                        <li><b>Biển báo cấm:</b> Cấm đi vào, cấm dừng đỗ.</li>
                        <li><b>Biển báo chỉ dẫn:</b> Chỉ dẫn đường đi, hướng đi.</li>
                        <li><b>Biển báo nguy hiểm:</b> Cảnh báo nguy hiểm trên đường.</li>
                        <li><b>Biển hiệu lệnh:</b> Biểu thị các hiệu lệnh phải chấp hành.</li>
                        <li><b>Biển báo phụ:</b> Bổ sung ý nghĩa của biển chính.</li>
                        <li><b>Biển Vạch kẻ đường: </b>Giúp hướng dẫn, điều khiển. </li>
                    </ul>
                </div>
                <div
                    style="background-color: rgb(235, 235, 193); border-left: 5px solid rgb(182, 44, 44); margin: 10px; padding: 1px 10px;">
                    <p><b>Lưu ý quan trọng: </b>Người tham gia giao thông phải tuân thủ các biển báo giao thông. Trong
                        trường hợp, khi có người điều khiển giao thông thì người tham gia giao thông phải chấp hành hiệu
                        lệnh của người điều khiển giao thông, ngay cả khi hiệu lệnh đó trái với tín hiệu của đèn hoặc
                        biển báo hiệu đường bộ.</p>
                </div>
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
                    <li><a href="sat_hach_ly_thuyet_A1.php">Sát hạch lý thuyết (Xem ngay)</a></li>
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