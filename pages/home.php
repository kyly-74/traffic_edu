                        <?php
                        session_start();
                        ?>
                        <!DOCTYPE html>

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
                                        <h2>Chào mừng đến với Hệ thống học Lý thuyết Giao thông đường bộ </h2>
                                        <hr>
                                        <p>Hệ thống này được thiết kế để giúp bạn học và nắm vững các kiến thức cần thiết để thi sát hạch lái xe
                                            mô tô. Chúng tôi cung cấp các tài liệu học tập, bài kiểm tra và thông tin hữu ích để bạn tự tin vượt
                                            qua kỳ thi.</p>
                                        <p>Chúng tôi hy vọng rằng hệ thống này sẽ giúp bạn có được những kiến thức cần thiết để lái xe an toàn
                                            và tuân thủ luật giao thông đường bộ. Thông qua bài viết này, bạn có thể:</p>
                                        <ul>
                                            <li>Tìm hiểu về các quy định trong luật giao thông đường bộ.</li>
                                            <li>Học cách nhận biết và hiểu ý nghĩa của các loại biển báo giao thông.</li>
                                            <li>Nắm rõ các mức xử phạt đối với các hành vi vi phạm giao thông.</li>
                                            <li>Tham gia các bài kiểm tra để đánh giá kiến thức của bạn.</li>
                                            <li>Luyện tập xử lí các tình huống giao thông thực tế.</li>
                                            <li>Liên hệ với chúng tôi để được hỗ trợ và tư vấn thêm.</li>
                                        </ul>
                                        <p class="paragraph"><b class="tag-b">💥<u>Lưu ý</u>:</b> Hệ thống này dựa trên Luật Giao thông đường bộ
                                            Việt Nam hiện hành. Hãy thường xuyên cập nhật kiến thức để đảm bảo nắm vững các quy định mới nhất.
                                        </p>
                                        <img src="../assets/img/image3.png" style="width: 500px; height: 350px; margin-left: 100px;" />
                                        <h3>🔍Hệ thống của chúng tôi có gì đặc biệt?</h3>
                                        <ul>
                                            <li>✅<b>Bộ 200 hoặc 450 câu hỏi chuẩn bộ GTVT</b> - được cập nhật đầy đủ năm 2025.</li>
                                            <li>✅<b>Học lý thuyết theo từng chủ đề:</b> biển báo, sa hình, luật giao thông, văn hóa khi tham gia
                                                giao thông,...</li>
                                            <li>✅<b>Thi thử mô phỏng bài thi thật</b>, có đồng hồ bấm giờ, kết quả chấm điểm tức thì.</li>
                                            <li>✅<b>Giải thích chi tiết từng đáp án</b> - giúp bạn hiểu bản chất thay vì học vẹt.</li>
                                            <li>✅<b>Thống kê kết quả thi</b> - giúp bạn theo dõi quá trình học tập của mình.</li>
                                        </ul>
                                        <h3>💡 Vì sao nên học tại đây?</h3>
                                        <ul>
                                            <li>Hệ thống bài kiểm tra đa dạng, sát với thực tế.</li>
                                            <li>Cập nhật liên tục các quy định mới nhất về luật giao thông.</li>
                                            <li><b>Tiện lợi: </b>Hỗ trợ học tập mọi lúc, mọi nơi trên nhiều thiết bị.</li>
                                            <li><b>Miễn phí 100%: </b>Không thu bất kì khoản phí nào cho phần học lý thuyết cơ bản.</li>
                                            <li><b>Hiệu quả cao: </b>Giao diện trực quan, thân thiện, dễ sử dụng, dễ học, dễ nhớ.</li>
                                            <li><b>Có thống ke quá trình học </b><i>(nếu đăng ký tài khoản) </i>để bạn biết mình còn yếu phần
                                                nào và cần luyện thêm.</li>
                                        </ul>
                                        <p>👉<b>Tham gia ngay hôm nay</b> để chinh phục kỳ thi bằng lái mô tô một cách tự tin và dễ dàng!</p>
                                        <hr><br>
                                        <h4>Liên hệ với chúng tôi thông qua: </h4>
                                        <ul>
                                            <li>📧 Email: <a href="mailto:name@email.com">trafficedu@qn.com.vn</a></li>
                                            <li>📞 Điện thoại: <a href="tel:+842563646373">+84 2563 646 373</a></li>
                                            <li>🌐 Website: <a href="https://example.com">www.example.com</a></li>
                                            <li>📍 Địa chỉ: 361 Tây Sơn, Phường Quang Trung, TP Quy Nhơn, Bình Định </li>
                                        </ul>
                                        <hr><br>
                                        <p>🧑‍💻 Chúng tôi luôn sẵn sàng hỗ trợ bạn trong quá trình học tập và thi cử. Hãy liên hệ với chúng tôi
                                            nếu bạn cần bất kỳ sự trợ giúp nào!</p>
                                    </div>
                                </div>
                                <div class="right-column">
                                    <div class="thithu"><a href="thi-bang-lai-xe-a1-online.php" style="text-decoration: none; color: white;">Thi thử</a> </div><br>
                                    <div class="noidung">
                                        <b>🛵 Thông tin cần thiết về bằng A1.</b>
                                        <hr>
                                        <img src="../assets/img/image17.png" style="margin-left: 2px;" />
                                        <a href="A1_Phan1.php">A1-Phần 1: Luật trật tự an toàn giao thông đường bộ </a><br><br>
                                        <img src="../assets/img/image18.png" style="margin-left: 2px;" />
                                        <a href="signs.php">A1-Phần 2: Tổng hợp biển báo giao thông </a><br><br>
                                        <img src="../assets/img/image19.png" style="margin-left: 2px;" />
                                        <a href="chonchucnang.php">A1-Phần 3: Bộ câu hỏi và phần mềm ôn luyện lý thuyết
                                        </a><br><br><br>

                                        <p>🧪 <i>03 hướng dẫn cực kì quan trọng trong ngày thi, nên chú ý: </i></p>
                                        <ol>
                                            <li><a href="../assets/img/image20.png">Ngày thi sát hạch (Xem ngay) </a></li>
                                            <li><a href="sat-hach-ly-thuyet-a1.php">Sát hạch lý thuyết (Xem ngay)</a></li>
                                            <li><a href="https://youtu.be/ISJeeUw_xKs">Sát hạch thực hành (Xem ngay)</a></li><br><br><br>
                                        </ol>
                                    </div>
                                    <div>
                                        <br><b>🏍️ Thông tin cần thiết về bằng A2. </b>
                                        <hr>
                                        <b>🎯 TỔNG HỢP NHANH </b>
                                        <a href="sat-hach-ly-thuyet-a2.php" class="tag-a">Lý thuyết A2</a>

                                        <table border="1" style="padding: 10px; background-color: aliceblue;">
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
                                        </table>
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