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
                        <h2>Thông tin về phần kiểm tra </h2>
                        <hr>
                        <h3>Cấu trúc bộ đề thi 200 (bằng A1) và 450 (bằng A2) câu hỏi lý thuyết lái xe</h3>
                        <p>Bắt đầu từ tháng 8/2020 bộ Giao thông vận tải đã thay đổi bộ đề thi lý thuyết A1 từ 150 câu lên bộ đề
                            mới 200 câu hỏi. Trong số những câu hỏi này sẽ được lựa chọn ra một bộ câu là những câu hỏi điểm
                            liệt khi xuất hiện trong bài thi yêu cầu học viên phải làm đúng.</p>
                        <h3>📌Cấu trúc bộ đề thi 200 câu lý thuyết như sau:</h3>
                        <ul>
                            <li><b>Phần 1: </b>Câu hỏi về các quy tắc giao thông đường bộ và văn hóa giao thông.</li>
                            <li><b>Phần 2: </b>Câu hỏi về hệ thống biển báo giao thông đường bộ</li>
                            <li><b>Phần 3: </b>Câu hỏi về sa hình lái xe và kỹ năng xử lý tình huống giao thông</li>
                        </ul>
                        <h3>📌Cấu trúc bài thi sát hạch lý thuyết lái xe:</h3>
                        <p>Bộ đề thi lý thuyết bằng lái xe mới sẽ có thay đổi hơn so với cũ khi không còn đánh đố học viên, mỗi
                            câu hỏi sẽ chỉ chọn 1 đáp án đúng so với trước đây là chọn 2 – 3 đáp án đúng.</p>
                        <p style="color: red; font-weight: bold;">⚠️ Bộ đề thi mới lại yêu cầu học viên phải làm chính xác câu
                            điểm liệt, nếu sai câu điểm liệt sẽ đánh rớt ngay lập tức.</p>
                        <h4>✍️ Thông tin về bài thi sát hạch lý thuyết như sau:</h4>
                        <ul>
                            <li>Số câu hỏi mỗi đề thi: 25 câu</li>
                            <li>Số đáp án đúng yêu cầu: 21/25 (đối với bằng A1) và 23/25 (đối với bằng A2).</li>
                            <li>Thời gian làm bài: 19 phút</li>
                            <li>Yêu cầu bắt buộc: <i style="color:red;">Không sai câu điểm liệt</i></li>
                        </ul>
                        <b class="tag-b"><u>Lưu ý</u>: </b>Trong bài thi sát hạch lý thuyết lái xe sẽ được bố trí từ 2- 4 câu
                        điểm liệt (thông thường chỉ 2 câu). Yêu cầu học viên phải làm đúng những câu này không được sai.

                        <h3>📌Hướng dẫn bài thi thực hành: </h3>
                        <image src="../assets/img/image16.png" style="margin: 10px 70px 0px 70px; width: 600px; height: 400px;">
                            <p style="text-align: center; font-size: 14;"><i>Sơ đồ thi thực hành lái xe mô tô A1</i> </p>
                        </image>
                        <h5 style="color:red;">Công tác chuẩn bị:</h5>
                        <ul>
                            <li>Ngồi chờ tại vị trí chờ thi, khi loa thông báo đến tên thì tiến ra khu vực nhận xe.</li>
                            <li>Đội mũ bảo hiểm và cài quai đúng cách – (Bỏ khẩu trang để máy ảnh trên xe thiết bị quét và chụp
                                ảnh)</li>
                            <li>Nghe hiệu lệnh của giám khảo để biết mình lên xe số mấy. (ví dụ : giám khảo thông báo anh :
                                Nguyễn Văn An chuẩn bị thi và lên xe số 01 – thì anh An phải tìm xe số 01)</li>
                            <li>Đỗ thẳng xe trước vạch chờ XUẤT PHÁT để nghe hiệu lệnh và xe đã nổ máy.</li>
                        </ul>
                        <p style="color: red; font: 16;">💡Chuẩn bị tâm lý thật tốt để thi.</p>
                        <h5>Các bước thực hiện : (Tổng điểm là 100 điểm – bạn sẽ bị trừ dần điểm nếu mắc lỗi)</h5>
                        <table border="1" style="border-collapse: collapse;">
                            <thead>
                                <th>Tên bài thực hành </th>
                                <th>Hình vẽ mô phỏng </th>
                                <th>Các lỗi trừ điểm </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <b>Bài số 1: Đi qua hình số 8 <br>Hướng dẫn cách thi: </b>
                                        <ul>
                                            <li>Bạn phải nghe hiệu lệnh từ giám khảm phát trên Loa. Khi có lệnh xuất phát mới
                                                được cho xe chạy.</li>
                                            <li>Khi có hiệu lệnh xuất phát, điều khiển xe tiến đến cửa vào hình số 8, rẽ phải đi
                                                một vòng hình số 8 (vạch đứt xanh đậm).</li>
                                            <li>Sau đó đi hình số 3 ngược (hình nét đứt xanh nhạt)</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <image src="../assets/img/image12.png" style="height: 450px;"></image>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>Chạm vạch một lần trừ 05 điểm</li>
                                            <li>Chống chân 01 lần trừ 05 điểm</li>
                                            <li>Xe chết máy mỗi lần trừ 05 điểm</li>
                                            <li>Đi ngược hình trừ 25 điểm trượt luôn</li>
                                            <li>Hai bánh ra khỏi hình thi trừ 25 điểm trượt luôn</li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b>Bài thi số 2 : Đi qua vạch đường thẳng <br>
                                            Hướng dẫn cách thi:
                                        </b>
                                        <ul>
                                            <li>Phải cho bánh đè qua vạch vàng</li>
                                            <li>Đi thẳng theo hình mũi tên</li>
                                            <li>Giữ đều ga và thẳng lái (tốc độ < 20 km/h) </li>
                                            <li>Tiến vào bài thi tiếp theo</li>
                                        </ul>
                                    </td>
                                    <td><img src="../assets/img/image13.png" style="height: 270px;"></td>
                                    <td>
                                        <ul>
                                            <li>Chạm vạch một lần trừ 05 điểm</li>
                                            <li>chống chân 01 lần trừ 05 điểm</li>
                                            <li>Xe chết máy mỗi lần trừ 05 điểm</li>
                                            <li>Hai bánh ra khỏi hình thi trừ 25 điểm trượt luôn</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Bài thi số 3 : Đi qua đường có vạch cản <br>Hướng dẫn cách thi:</b>
                                        <ul>
                                            <li>Phải cho bánh đè qua vạch vàng</li>
                                            <li>Đi theo hình mũi tên</li>
                                            <li>Tránh các vạch cản trắng (tốc độ < 20 km/h) </li>
                                            <li>Tiến vào bài thi tiếp theo</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <img src="../assets/img/image13.png" alt="">
                                    </td>
                                    <td>
                                        <ul>
                                            <li>Chạm vạch một lần trừ 05 điểm</li>
                                            <li>chống chân 01 lần trừ 05 điểm</li>
                                            <li>Xe chết máy mỗi lần trừ 05 điểm</li>
                                            <li>Hai bánh ra khỏi hình thi trừ 25 điểm trượt luôn</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Bài thi số 4 : Đi qua đường gồ ghề và kết thúc <br>Hướng dẫn cách thi:</b>
                                        <ul>
                                            <li>Phải cho bánh đè qua vạch vàng</li>
                                            <li>Giữ đều ga, thẳng lái theo hình mũi tên</li>
                                            <li>Tiến xe qua vạch kết thúc</li>
                                            <li><i>Lưu ý :</i> đi theo đường gồ ghề nên cần giữ tay lái chắc 1 chút , nếu thấy
                                                xe yếu cần thêm chút ga để cho xe vượt qua các vạch cản. Khi đi qua vạch kết
                                                thúc nếu Trên Loa thông báo :” XE SỐ X THI ĐẠT” thì xin chúc mừng bạn đã qua
                                                phần thi thực hành lái xe mô tô A1</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <img src="../assets/img/image15.png" alt="">
                                    </td>
                                    <td>
                                        <ul>
                                            <li>Chạm vạch một lần trừ 05 điểm</li>
                                            <li>chống chân 01 lần trừ 05 điểm</li>
                                            <li>Xe chết máy mỗi lần trừ 05 điểm</li>
                                            <li>Hai bánh ra khỏi hình thi trừ 25 điểm trượt luôn</li>
                                            <li>Không hoàn thành bài thi trừ 25 điểm trượt luôn</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="font: 18;">✅ĐẠT ⮕ Nếu kết quả của 4 bài thi đạt từ 80 điểm trở lên. </p>
                        <p style="font: 18;">❌KHÔNG ĐẠT ⮕ Nếu kết quả của 4 bài thi dưới 80 điểm.</p>
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