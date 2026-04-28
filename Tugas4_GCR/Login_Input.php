<?php
// Login.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
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
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        .profile img {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #667eea;
        }
        .btn-register {
            background-color: #28a745;
            border: none;
        }
        .btn-register:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="login-container text-center">
        <div class="profile mb-4">
            <img src="Foto_Atmin.jpeg" alt="Foto User">
        </div>
        
        <h2 class="mb-4">Login</h2>
        
        <form method="POST" action="Get_Login.php">
            <div class="mb-3 text-start">
                <label class="form-label">Email / Username</label>
                <input type="email" class="form-control" name="email" placeholder="Masukkan email" required>
            </div>
            
            <div class="mb-3 text-start">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Masukkan password" required>
            </div>

            <div class="mb-3 form-check text-start">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Ingat saya</label>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
        </form>

        <!-- Tombol Register yang diminta -->
        <p class="mt-3">Belum punya akun?</p>
        <a href="Regis_Form.php" class="btn btn-register text-white w-100">
            Daftar Sekarang (Register)
        </a>
    </div>
</body>
</html>