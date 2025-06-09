<div class="header">
    <div class="banner">
        <div class="banner-content">
            <img src="../assets/img/logo.svg" width="150" height="100" alt="Banner Image">
        </div>
        <div class="logo">
            <h4>Luyện Thi Bằng Lái Xe Máy A1 - A2 (2025)</h4>
        </div>
        <div class="hotline">
            <h4> HOTLINE: 0392.64.61.46</h4>
        </div>


    </div>
    <div class="navbar">
        <a href="chonchucnang.php" class="active" style="margin-top: 40px">Chọn Phần Ôn Tập</a>
        <a href="./chondeA1.php">Ôn Tập A1</a>
        <a href="./chondeA2.php">Ôn Tập A2</a>
        <a href='./ontapcaulietA1.php'>Ôn 20 câu Điểm Liệt</a>
        <a href="./ontapcaulietA2.php">Ôn 50 Câu Điểm Liệt</a>
        <?php if (isset($_SESSION['user'])): ?> <div class="user-info">
                <i class="fa-solid fa-user-tie"></i><?php echo htmlspecialchars($_SESSION['user']['name']); ?>
                <a href="../includes/logout.php" class="btn btn-logout">Đăng xuất</a>
            </div>
        <?php endif; ?>
    </div>
</div>