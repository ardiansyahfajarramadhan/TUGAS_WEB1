<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Contoh login sederhana (bisa diubah sesuai kebutuhan)
    if ($email == "root@gmail.com" && $password == "root") {
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Login Berhasil</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet'>
            <style>
                body { 
                    background: linear-gradient(135deg, #667eea, #764ba2); 
                    min-height: 100vh; 
                    font-family: 'Segoe UI', sans-serif;
                }
                .success-box {
                    max-width: 500px;
                    margin: 120px auto;
                    padding: 50px;
                    background: white;
                    border-radius: 15px;
                    text-align: center;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
                }
            </style>
        </head>
        <body>
            <div class='success-box'>
                <h1 style='color: green;'>✅ Login Berhasil!</h1>
                <h3>Selamat datang</h3>
                <p>Email: " . htmlspecialchars($email) . "</p>
                <hr>
                <a href='Login_Input.php' class='btn btn-primary btn-lg'>Login Kembali</a>
            </div>
        </body>
        </html>";
        exit;
    } else {
        // Login Gagal
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <title>Login Gagal</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet'>
        </head>
        <body class='bg-light'>
            <div style='text-align:center; margin-top:150px;'>
                <h1 style='color:red;'>❌ Login Gagal</h1>
                <p>Email atau Password salah.</p>
                <a href='Login_Input.php' class='btn btn-warning'>Kembali ke Login</a>
            </div>
        </body>
        </html>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }
        .login-container {
            max-width: 420px;
            margin: 80px auto;
            padding: 40px 30px;
            background: white;
            border-radius: 15px;
        }
        .profile img {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #667eea;
        }
    </style>
</head>
<body>
    <div class="login-container text-center">
        <div class="profile mb-4">
            <img src="Foto_Atmin.jpeg" alt="Foto User">
        </div>
       
        <h2 class="mb-4">Login</h2>
       
        <form method="POST" action="">
            <div class="mb-3 text-start">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Masukkan email" required>
            </div>
           
            <div class="mb-3 text-start">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
        </form>

        <p class="mt-3">Belum punya akun?</p>
        <a href="Regis_Form.php" class="btn btn-success w-100">
            Daftar Sekarang (Register)
        </a>
    </div>
</body>
</html>

