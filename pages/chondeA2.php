<?php
include '../includes/config.php'; // kết nối cơ sở dữ liệu
session_start();

$category_id = 3;
$category_critical_id = 4;
$limit_18 = 18;

$stmt_18   = $conn->prepare("SELECT * FROM exam_sets WHERE category_id = ? ORDER BY set_id LIMIT ?");
$stmt_18->bind_param("ii", $category_id, $limit_18);
$stmt_18->execute();
$result_18 = $stmt_18->get_result();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ôn tập lý thuyết A2</title>
    <link rel="stylesheet" href="../assets/css/chonde.css" />
</head>

<body>

    <div class="main-content">
        <?php include './widget/header.php'; ?>


        <h2>BỘ ÔN TẬP ĐỀ THI THỬ BẰNG LÁI XE A2</h2>
        <div class="button-group">
            <h4>Chọn đề ôn tập:</h4>

            <!-- Các button câu hỏi điểm liệt -->
            <div class="center-button">
                <button type="button" onclick="location.href='ontapcaulietA2.php?set_id=40'" class="center-button">
                    50 Câu Hỏi Điểm Liệt
                </button>
            </div>

            <div class="exam-grid">

                <?php
                $count = 1;
                if ($result_18->num_rows > 0) {
                    while ($row = $result_18->fetch_assoc()) {
                        if ($count <= 18) {
                            echo  "
                                        <form action='ontapA2.php' method='get' style='display:inline-block; margin: 8px;'>
                                            <input type='hidden' name='set_id' value='{$row['set_id']}'>
                                           <button type='submit'>Đề {$count}</button> 
                                        </form>
                                    ";
                            $count++;
                        } else {
                            break;
                        }
                    }
                }
                ?>
            </div>
            <button class="btn-blue" onclick="location.href='chonchucnang.php'">Trở Về</button>
        </div>
        <div id="content">
            <p>Hãy lựa chọn đề và bắt đầu ôn tập </p>
            <p>Ôn tập đề thi lái xe A2 giúp bạn làm quen với cấu trúc đề thi và các câu hỏi thường gặp.</p>
            <p>Đề ôn tập bao gồm các câu hỏi lý thuyết và thực hành, giúp bạn nắm vững kiến thức cần thiết để vượt qua
                kỳ thi.</p>
            <p>Chúc bạn ôn tập hiệu quả và đạt kết quả cao trong kỳ thi lái xe A2!</p>
        </div>
        <div class="cach" style="gap: 20px;">
            <div class="cach1">
                <h3>Hướng dẫn:</h3>
                <p>Chọn đề ôn tập để bắt đầu làm quen với đề thi.</p>
                <p>Mỗi đề ôn tập gồm 25 câu hỏi, đối với đề ôn tập câu hỏi liệt gồm 20 câu.</p>
                <p>Với mỗi câu hỏi, đáp án và giải thích đã có sẵn bên dưới mỗi câu hỏi, giúp bạn tiết kiệm thời gian,
                    học nhanh học đúng không lan man .</p>
            </div>
        </div>
        <?php include './widget/footer.php'; ?>
    </div>

</body>

</html>