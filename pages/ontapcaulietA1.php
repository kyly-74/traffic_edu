<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ôn tập câu liệt A1</title>
    <link rel="stylesheet" href="../assets/css/middle.css" />
</head>

<body>
    <div class="main-content">
        <?php include './widget/header.php'; ?>
        <h2>BỘ ĐỀ ÔN TẬP THI THỬ BẰNG LÁI XE A1 </h2>
        <div class="exam-container">
            <!-- Cột bên trái -->

            <!-- Cột bên phải -->
            <?php
            include "../includes/config.php";
            $critical_questions = [
                21 => [3, 5, 12, 28, 29, 30, 33, 53, 54, 79, 104, 108, 129, 135, 152, 153, 154, 177, 179, 701]
            ];
            $set_id = 21;
            $limit = 20;
            if (!isset($critical_questions[$set_id]))
                return [];

            $ids = implode(',', $critical_questions[$set_id]);

            $sql = "SELECT * 
        FROM questions q 
        JOIN answers a ON q.question_id = a.question_id 
        WHERE q.question_id IN ($ids) 
        AND a.is_correct = 1 
        LIMIT $limit";
            $result = mysqli_query($conn, $sql);

            $questions = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $row['is_critical'] = 1;
                $questions[] = $row;
            }
            $count = 1;
            foreach ($questions as $q) {
                echo '<div class="question-box">';
                echo "<h3>Câu $count: {$q["question_text"]}</h3>";
                if (!empty($q['question_image'])) {
                    $filename = basename($q['question_image']);
                    $correctPath = "../assets/img/" . $filename;
                    if (file_exists($correctPath)) {
                        echo "<img src='$correctPath' alt='Hình minh họa'>";
                    }
                }
                echo "<h3>✅ Đáp án đúng: <span style='color: green'>{$q["answer_text"]}</span></h3>";
                echo "<h3>💡 Giải thích: {$q['explanation']}</h3>";
                echo '</div>';
                $count++;
            }

            ?>
        </div>
        <div class="finish-btn">
            <button onclick="location.href='chondeA1.php'">Kết thúc</button>
        </div>
        <?php include './widget/footer.php'; ?>

    </div>

</body>

</html>