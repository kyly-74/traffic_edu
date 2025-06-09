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
        <p style="padding-top: 40px;">Nắm vững kiến thức, lái xe an toàn </p>
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
    <div class="box-container"
        style="width: 800px; border: 2px solid grey; margin-top: 20px; margin-left:400px; padding: 50px; border-radius: 5px; background-image: url('../hinhanh/image2.png');">
        <h3 style="color: darkturquoise;">A1 - Hướng Dẫn Bài Thi Lý Thuyết </h3><br><br>
        <img src="https://banglaixeotohanoi.com/wp-content/uploads/2023/09/cach-thi-thu-bang-lai-xe-a1-tren-may-tinh-1.jpg"
            style="width: auto; height: 350px; margin-left: 110px;" />
        <h5>🖥️ Bước 1: Đăng nhập hệ thống</h5>
        <div>
            Khi vào phòng thi, bạn sẽ ngồi vào một máy tính có sẵn và thực hiện:
            <ul>
                <li>Nhập <b>Số báo danh </b> hoặc <b>CMND/CCCD</b> để đăng nhập vào hệ thống. </li>
                <li>Kiểm tra thông tin cá nhân hiển thị trên màn hình xem có đúng hay không. </li>
            </ul>
        </div>
        <i>📷 Hình ảnh minh họa: </i>
        <div><br><img src="https://daylaixeoto.edu.vn/images/hoc-lai-xe-oto/phan-mem-thi-bang-lai-xe-a1-2.jpg" /></div>
        <div>
            <h5>📝Bước 2: Làm bài thi: </h5>
            <div>
                <ul>
                    <br>
                    <li>Bài thi gồm <b>25 câu hỏi trắc nghiệm</b>. </li>
                    <li> ⏳Thời gian làm bài: 19 phút.</li>
                    <li>Giao diện mỗi câu hỏi sẽ có: </li>
                    <ul>
                        <li>Câu hỏi + hình minh họa (nếu có).</li>
                        <li>Các đáp án (từ 2 đến 4 đáp án).</li>
                        <li>Chọn đáp án bằng chuột hoặc bàn phím số. </li>
                    </ul>
                </ul>
            </div>
        </div>
        <div><b class="tag-b">🧠 Lưu ý: </b>Một số câu hỏi bắt buộc đúng, ví dụ: câu điểm liệt. </div>
        <div>
            <i>📷 Hình minh họa giao diện bài thi: </i>
            <div><img src="../assets/img/image5.jpg" style="margin-left: 200px;" /></div>
        </div>
        <div>
            <h5>Bước 3:📚 Kiểm tra lại bài làm:</h5>
            <div>
                <ul>
                    <li>Sau khi làm hết 25 câu, có thể <b>xem lại</b> các câu đã làm.</li>
                    <li>Những câu chưa chọn đáp án sẽ được đánh dấu màu đỏ.</li>
                </ul>
            </div>
        </div>
        <div>
            <h5>✅ Bước 4: Nộp bài thi </h5>
            <div>
                <ul>
                    <li>Khi chắc chắn làm bài xong, chọn nút "<b>Nộp bài</b>".</li>
                    <li>Hệ thống sẽ báo kết quả "<b>Đạt</b>" hoặc "<b>Không đạt</b>" ngay lập tức.</li>
                </ul>
            </div>
        </div>
        <div>
            <i>📷 Hình ảnh minh họa kết quả thi:</i>
            <div><img src="https://daotaolaixehd.com.vn/wp-content/uploads/2017/01/4.jpg" style="margin-left: 200px;" />
            </div>
        </div>
        <br>
        <b>📌 Lưu ý quan trọng khi thi lý thuyết trên máy tính:</b>
        <ul>
            <li>Trước khi thi, hãy chắc chắn rằng bạn đã nắm vững các kiến thức về luật giao thông, biển báo và các quy
                định liên quan.</li>
            <li>Trong quá trình làm bài, hãy đọc kỹ từng câu hỏi và các đáp án trước khi chọn.</li>
            <li>Không nên vội vàng, hãy dành thời gian suy nghĩ để chọn đáp án chính xác nhất.</li>
            <li>Nếu có thắc mắc hoặc cần hỗ trợ, hãy liên hệ với giám thị hoặc nhân viên hướng dẫn trong phòng thi.</li>
        </ul>

        <i>📌 Để biết thêm chi tiết cách thi lý thuyết trên máy tính, có thể tham khảo video <a
                href="https://www.youtube.com/watch?v=sMlu7L8ToCY">tại đây</a>.</i>
    </div>
    <?php include '../includes/footer.php'; ?>
</body>

</html>