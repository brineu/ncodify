<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">
    <style>
        .error-border {
            border: 2px solid red;
        }
    </style>
    <title>Login User</title>
</head>
<body>
    <nav class="header">
        <ul class="flex-2">
            <div class="img">
                <a href="/"><img src="images/arrow back.png" width="40" height="40" alt=""></a>
            </div>
            <div class="signup">
                <p>Login</p>
            </div>
        </ul>
    </nav>

    <div class="flex">
        <img src="images/logo.png" width="70" height="70" style="margin-right: 10px; margin-top: 5px;">
        <h1 class="h1">Login</h1>
    </div>

    <!-- ... (bagian head dan body tetap sama) ... -->

<script>
    function validateForm() {
        // Mendapatkan nilai input
        var username = document.getElementById('username');
        var password = document.getElementById('password');
        var usernameAlert = document.getElementById('usernameAlert');
        var passwordAlert = document.getElementById('passwordAlert');

        // Menghilangkan border merah jika sudah diisi
        username.classList.remove('error-border');
        password.classList.remove('error-border');
        usernameAlert.innerHTML = ''; // Menghapus pesan alert
        passwordAlert.innerHTML = ''; // Menghapus pesan alert

        // Validasi
        if (username.value === '') {
            username.classList.add('error-border');
            usernameAlert.innerHTML = '<span class="error-message">Username must be filled</span>'; // Menampilkan pesan alert
            return false; // Form tidak akan dikirim
        }

        if (password.value === '') {
            password.classList.add('error-border');
            passwordAlert.innerHTML = '<span class="error-message">Password must be filled</span>'; // Menampilkan pesan alert
            return false; // Form tidak akan dikirim
        }

        // Validasi panjang password minimal 8 karakter
        if (password.value.length < 8) {
            password.classList.add('error-border');
            passwordAlert.innerHTML = '<span class="error-message">Password must be at least 8 characters long</span>'; // Menampilkan pesan alert
            return false; // Form tidak akan dikirim
        }

        // Form akan dikirim jika validasi berhasil
        // Arahkan pengguna ke homePage.html
        window.location.href = '{{ route("landing") }}?login_success=true';


        return false; // Form tidak akan dikirim secara default
    }
</script>


    <form class="login-form" onsubmit="return validateForm()">
        <div class="login-input">
            <label for="username">Username</label>
            <input type="text" id="username">
            <span id="usernameAlert" style="color: red;"></span> <!-- Alert placeholder -->
        </div>
        <div class="login-input">
            <label for="password">Password</label>
            <input type="password" id="password">
            <span id="passwordAlert" style="color: red;"></span> <!-- Alert placeholder -->
        </div>
        <button type="submit" class="button" style="text-decoration: none; color: white">Login</button>

        <h5>Doesn't have an account? <a href="/signup" style="color: #C2C3FF">Sign Up</a></h5>
    </form>
</body>
</html>
