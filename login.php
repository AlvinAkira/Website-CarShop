<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(gambar/background_login.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        a {
            padding-left: 130px;
            text-align: center;
            text-decoration: none;
            color: blue;

        }

        .login-container {
            background: white;
            padding: 2rem 3rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 320px;
        }

        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #1e40af;
        }

        label {
            display: block;
            margin-bottom: 0.3rem;
            font-weight: 600;
            color: #334155;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 0.5rem 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #cbd5e1;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #2563eb;
            outline: none;
        }

        button {
            width: 100%;
            background-color: #2563eb;
            color: white;
            font-weight: 600;
            padding: 0.6rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #1e40af;
        }

        .error-message {
            color: #dc2626;
            font-size: 0.875rem;
            margin-bottom: 1rem;
            display: none;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login
        </h2>
        <?php
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $data = mysqli_query($koneksi, "SELECT*FROM users where username='$username' and password='$password'");
            $cek = mysqli_num_rows($data);
            if ($cek > 0) {
                $_SESSION['users'] = mysqli_fetch_array($data);
                echo '<script>alert("Selamat datang, Login Berhasil"); location.href="admin.php";</script>';
            } else {
                echo '<script>alert("Maaf Username atau Password Salah")</script>';
            }
        }
        ?>
        <form action="" method="post">
            <div class="error-message" id="errorMsg"></div>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" />

            <button href="index.html" type="submit" name="login" value="login">Login</button>
        </form>
    </div>

    <script>
        function validateForm() {
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            const errorMsg = document.getElementById('errorMsg');

            if (!username || !password) {
                errorMsg.textContent = 'Username dan password harus diisi.';
                errorMsg.style.display = 'block';
                return false; // mencegah submit form
            }

            errorMsg.style.display = 'none';
            return true; // submit form
        }
    </script>
</body>

</html>