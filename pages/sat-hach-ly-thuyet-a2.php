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
    <div class="box-container"
        style="width: 800px; border: 2px solid grey; margin-top: 20px; margin-left:400px; padding: 50px; border-radius: 5px; background-image: url('../hinhanh/image2.png');">
        <h3 style="color: darkturquoise;">A2 - Hướng Dẫn Bài Thi Lý Thuyết </h3>
        <img src="../assets/img/image23.jpg" style="width: 500px; height: 350px; margin-left: 100px;" />
        <div>
            <h5>🖥️ Bước 1: Vào giao diện thi: </h5>
            <div>
                <ul>
                    <br>
                    <li>Sau khi nhận số báo danh, bạn sẽ được chỉ định chỗ ngồi tại máy tính. </li>
                    <li>Màn hình sẽ hiển thị yêu cầu <b>nhập mã dự thi</b> hoặc <b>số báo danh</b>.</li>
                </ul>
            </div>
        </div>
        <div>
            <i>📷 Hình ảnh minh họa: </i>
            <div><br><img src="https://daylaixeoto.edu.vn/images/hoc-lai-xe-oto/phan-mem-thi-bang-lai-xe-a1-2.jpg"
                    style="margin-left: 100px; width: 500px; height: 350px;" /></div>
        </div>
        <div>
            <h5>📝Bước 2: Thông tin đề thi A2: </h5><br>
            <div>
                <table border="1" style="border-collapse: collapse; margin-left: 100px;">
                    <thead>
                        <tr>
                            <th>Nội dung </th>
                            <th>Chi tiết </th>
                        </tr>
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
                            <td>Yêu cầu đạt </td>
                            <td>Trả lời đúng <b>23/25 câu</b> trở lên </td>
                        </tr>
                        <tr>
                            <td>Câu điểm liệt </td>
                            <td><b>1 câu </b>- sai là bị loại trực tiếp </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
        <div>
            <i>📷 Hình minh họa giao diện bài thi: </i>
            <div><br><img src="../assets/img/image5.jpg" style="margin-left: 100px; width: 500px; height: 350px;" />
            </div>
        </div>
        <div>
            <h5>Bước 3:🧠 Làm bài thi: </h5>
            <div>
                <ul>
                    <br>
                    <li>Mỗi câu có 1 hoặc 2 đáp án đúng (sẽ được ghi rõ nếu chọn nhiều).</li>
                    <li>Dùng <b>chuột</b> để chọn đáp án, hoặc phím số 1–4.</li>
                    <li>Sử dụng các nút “<b>Tiếp theo</b>” và “<b>Trở lại</b>” để chuyển câu.</li>
                    <li>Mỗi câu hỏi có thời gian gợi ý trung bình ~40 giây.</li>
                </ul>
            </div>
        </div>
        <i>📌 Mẹo làm bài thi: </i>
        <ul>
            <li>Đọc kỹ câu hỏi, chú ý ccas từ như "<b>Không được phép</b>", "<b>nghiêm cấm</b>", "<b>phải</b>".</li>
            <li>Ưu tiên chọn các đáp án đúng theo quy chuẩn an toàn giao thông. </li>
            <li>Đặc biệt cẩn thận với <b>câu điểm liệt. </b></li>
        </ul>
        <h5>🔍 Bước 4: Kiểm tra lại trước khi nộp bài thi: </h5>
        <ul>
            <li>Hệ thống cho phép bạn xem lại các câu đã và chưa chọn đáp án.</li>
            <li>Kiểm tra kỹ câu sai sót hoặc bị bỏ qua.</li>
        </ul>
        <div>
            <i>📷 Minh họa màn hình kiểm tra bài thi:</i>
            <div><br><img
                    src="https://trungtamgdnnlaixesaigon.edu.vn/wp-content/uploads/2022/05/thi-ly-thuyet-bang-lai-xe-a2-1.jpg"
                    style="margin-left: 100px; width: 500px; height: 350px;" /></div>
        </div>


        <br>
        <h5>✅ Bước 5: Nộp bài và xem kết quả: </h5>
        <ul>
            <li>Sau khi bấm "<b>Nộp bài</b>", hệ thống tự động chấm điểm. </li>
            <li>Màn hình sẽ hiên hiểnthij kết quả: <b>Số câu đúng /25</b> và trạng thái <b>ĐẠT /KHÔNG ĐẠT</b>. </li>
        </ul>
        <img src="https://daotaolaixehd.com.vn/wp-content/uploads/2017/01/4.jpg"
            style="margin-left: 100px; width: 500px; height: 350px;" />
        <div>
            <i>📌 Lưu ý: </i>
            <div>
                <ul>
                    <br>
                    <li>Nếu không vượt qua, bạn cần đăng ký thi lại lý thuyết.</li>
                    <li>Nếu đạt, bạn sẽ được hướng dẫn sang khu vực thi thực hành.</li>
                </ul>
            </div>
        </div>



        <i>📌 Để biết thêm chi tiết cách thi lý thuyết trên máy tính, có thể tham khảo video <a
                href="https://www.youtube.com/watch?v=DtUJ9bS2OBY">tại đây</a>.</i>
    </div>
    <?php include '../includes/footer.php'; ?>

</body>

</html>