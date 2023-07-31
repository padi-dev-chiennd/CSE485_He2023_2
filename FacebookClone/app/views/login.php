<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <!-- Đường dẫn đến Bootstrap CSS qua CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <!-- Phần bên trái -->
            <div class="col-md-6">
                <div class="mb-4">
                    <h1 class="facebook-text">Facebook</h1>
                    <!-- <h2 class="logo"><img src="../public/images/logo.png" alt="Facebook Image"></h2> -->
                    <p>Chia sẻ và kết nối với bạn bè và gia đình.</p>
                </div>
                <div class="mb-4">
                    <h4>Đăng nhập gần đây</h4>
                    <ul>
                        <!-- <li>Người dùng A</li>
                        <li>Người dùng B</li>
                        <li>Người dùng C</li> -->
                        <!-- Thêm các người dùng gần đây khác vào đây -->
                    </ul>
                </div>
            </div>
            <!-- Phần bên phải -->
            <div class="col-md-3">
                <h2 class="mb-4">Đăng nhập</h2>
                <!-- Form đăng nhập -->
                <form method="post" action="login_process.php">
                    <div class="form-group">
                        <label for="username">Tài khoản:</label>
                        <input type="text" class="form-control form-control-sm" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" class="form-control form-control-sm" id="password" name="password" required>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                    </div>
                    <div class="mt-3">
                        <a href="#">Quên mật khẩu</a>
                    </div>
                    <div class="mt-3">
                        <!-- Điều hướng đến trang register.php -->
                        <a href="register.php" class="btn btn-success btn-block">Tạo tài khoản mới</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
