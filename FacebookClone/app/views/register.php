<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng kí</title>
    <!-- Đường dẫn đến Bootstrap CSS qua CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Đăng kí</h2>
        <!-- Form đăng kí -->
        <form method="post" action="register_process.php">
            <div class="form-group">
                <label for="username">Tên người dùng:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Đăng kí</button>
        </form>
    </div>
</body>
</html>
