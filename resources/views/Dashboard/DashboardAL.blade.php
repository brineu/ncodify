<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Course Website</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link rel="stylesheet" href="{{ asset('css/Dashboard.css') }}">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Poppins:wght@700;800&family=Quantico:ital,wght@0,700;1,700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Poppins:wght@400;500&family=Quantico:ital,wght@0,700;1,700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- ikon drop down -->
            <style>
            .navbar {
                        box-shadow: 0 4px 35px rgba(0, 0, 0, 0.25); /* x y blur warna dengan alpha channel */
            }
            </style>
</head>
<body>

    <!-- Navbar -->

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img style="height: 30px; width: 30px;" src="{{ asset('images/img/logo.png') }}" alt="Codify Logo">Codify
      </a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mentor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
      </ul>
      <div class="ml-auto" style="display: flex;">
        <form class="form-inline">
            <div class="search-profile-container">
                <div class="form">
                    <input type="search" class="form-control form-input transparent-background" placeholder="Search" style="color: #ffff;">
                </div>
            </div>
            <div class="dropdown">
                <div class="icon-container">
                    <i class="fas fa-user-circle fa-2x" style="color: white;"></i> <!-- Ikon user -->
                    <i class="fas fa-caret-down fa-xs ml-2" style="color: white;"></i> <!-- Ikon dropdown -->
                </div>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="">
                      <i class="fas fa-home mr-2"></i>Dashboard
                  </a>
                  <a class="dropdown-item" href="">
                      <i class="fas fa-user mr-2"></i>My Profile
                  </a>
                  <a class="dropdown-item" href="">
                      <i class="fas fa-sign-out-alt mr-2"></i>Logout
                  </a>
              </div>
            </div>
        </form>
    </div>
</nav>

<!-- Header -->

<div class="content-section">
    <div class="content-container">
        <div class="welcome-text">
            <h1>Selamat Datang!</h1>
            <p>Semoga aktivitas belajarmu menyenangkan</p>
        </div>
        <div class="subscription-box">
            <div class="status-text">Status Langganan</div>
            <div class="subscription-content">
                <img src="{{ asset('images/img/ceklist.svg') }}" alt="Codify Logo" class="subscription-logo">
                <div class="subscription-info">
                    <p>Anda telah berlangganan di Codify. Silakan mulai perjalanan belajar Anda.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="main-content">
    <div class="learning-activity">
        <p class="activity-label">Aktivitas Belajar</p>
        <hr class="activity-line">
    </div>
    <div class="learning-box">
        <div class="learning-status">
            <p>Sedang dipelajari</p>
            <p class="learning-topic">Belajar Front-End Web</p>
        </div>
        <a href="#" class="continue-link">Lanjutkan</a>
    </div>

    <div class="learning-box">
        <div class="learning-status">
            <p>Sedang dipelajari</p>
            <p class="learning-topic">Belajar UI/UX Design</p>
        </div>
        <a href="#" class="continue-link">Lanjutkan</a>
    </div>
</div>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="footer-left">
        <a class="footer-logo" href="#">
            <img src="{{ asset('images/img/logo.png') }}" alt="Codify Logo">Codify
        </a>
        <p>Codify adalah platform pembelajaran online untuk membantu para pelajar/mahasiswa dalam mengembangkan kemampuannya di bidang teknologi terkhusus UI/UX, Web Development, dan Pemrograman Python agar memiliki peran penting di masa depan.</p>
        <p>Copyright &#169; 2023 Codify. All rights reserved.</p>
    </div>
    <div class="footer-center">
        <p class="footer-heading">Produk</p>
        <p>Kursus Online</p>
        <p>Latihan Soal</p>
        <p>Forum Diskusi</p>
    </div>
    <div class="footer-right">
        <p class="footer-heading">Contact Us</p>
        <div class="contact-item">
            <img src="{{ asset('images/img/ig.svg') }}" alt="Instagram Logo">
            <p>@codify.id</p>
        </div>
        <div class="contact-item">
            <img src="{{ asset('images/img/wa.svg') }}" alt="WhatsApp Logo">
            <p>+6281023456789</p>
        </div>
        <div class="contact-item">
            <img src="{{ asset('images/img/gmail.svg') }}" alt="Gmail Logo">
            <p>codify@gmail.com</p>
        </div>
    </div>
</footer>

</body>
</html>
