<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course Web</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Course.css') }}">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    />
</head>
<body>

  <!-- Second Header -->
  <div class="container">
    <div class="courseweb">
      <div class="header">
        <span class="headertext">
          <span>
            Kursus ini akan mengajarkan Anda, cara membuat struktur untuk website sebelum
            benar-benar memulai dikembangkan. Dan kemudian Anda akan belajar cara
            mengubah struktur tersebut ke websitenya.
          </span>
        </span>
        <span class="headertext2">
          <span>
            <span>PYTHON</span>
            <br />
            <span>BEYOND BASICS</span>
          </span>
        </span>
        <button class="button">
          <span class="buttontext">Form Discussion</span>
        </button>
      </div>
        <img
            src="{{ asset('images/Source/Ungu.png') }}"
            alt="Gambar"
            class="gambar1"
        />

          <!-- Navbar -->
      <div class="navbar">
          <div class="topnav">
            <div class="topnav">
              <span class="text1">
                <a href="#" style="text-decoration: none; color: white;"> Product </a>
              </span>
              <span class="text1">
                <a href="#" style="text-decoration: none; color: white;"> Mentor</a>
              </span>
              <span class="text1">
                <a href="#" style="text-decoration: none; color: white;">About Us</a>
              </span>
            <div class="logo">
              <span class="text2">
                <span>Codify</span>
              </span>
              <img
                src="{{ asset('images/Source/logo.png') }}"
                alt="logo"
              />
            </div>
          </div>
          <div class="search">
            <img
              src="{{ asset('images/Source/search.svg') }}"
              alt="searchsimbol"
              class="simbolsearch"
            />
            <span class="textsearch">
              <span>Search...</span>
            </span>
          </div>
          <div class="usernav">
            <div class="user">
              <div class="user2">
                <div class="groupnav">
                  <img
                    src="{{ asset('images/Source/profile.svg') }}"
                    alt="user"
                    class="user3"
                  />
                </div>
              </div>
          <div>
              <img
                  src="{{ asset('images/Source/Segitigakebawah.svg') }}"
                  alt="menu"
                  class="menu"
              /> 
          </div>
        </div>
      </div>
      <img
        src="{{ asset('images/Source/kotak.png') }}"
        alt="kotak"
        class="dashboardaftar"
      />
      <div class="dashboardstartnowbutton">
        <span class="dashboardtext5">
          <span>Belajar Sekarang</span>
        </span>
      </div>
      <!-- Footer -->
      <div class="footerpy">
        <div class="footer1">
          <div class="produkfooter">
            <span class="footertext">
              <span>Kursus Online</span>
            </span>
            <span class="footertext2">
              <span>Latihan Soal</span>
            </span>
            <span class="footertext3">
              <span>Forum Diskusi</span>
            </span>
            <span class="footertext4">
              <span>Produk</span>
            </span>
          </div>
          <div class="copyright">
            <span class="copyrighttext">
              <span>Copyright</span>
            </span>
            <img
              src="{{ asset('images/Source/copyright.svg') }}"
              alt="copyright"
              class="copyrightlight"
            />
            <span class="footertext5">
              <span>2023 Codify. All rights reserved.</span>
            </span>
          </div>
          <div class="contactus">
            <span class="footertext6">
              <span>Contact Us</span>
            </span>
            <div class="socialmediar">
              <div class="gmail">
                <span class="footertextgmail">
                  <span>codify@gmail.com</span>
                </span>
                <div class="icongmail">
                  <img
                    src="{{ asset('images/Source/round.png') }}"
                    alt="round"
                    class="round"
                  />
                  <img
                    src="{{ asset('images/Source/gmail.svg') }}"
                    alt="gmail"
                    class="gmail2"
                  />
                </div>
              </div>
              <div class="wa">
                <span class="footertextwa">
                  <span>+6281023456789</span>
                </span>
                <div class="iconwa">
                  <div class="iconwa1">
                    <img
                      src="{{ asset('images/Source/round.png') }}"
                      alt="round"
                      class="round"
                    />
                  </div>
                  <img
                    src="{{ asset('images/Source/wa.svg') }}" 
                    alt="Whatsapp"
                    class="wa2"
                  />
                </div>
              </div>
              <div class="ig">
                <span class="footertextig">
                  <span>@codify.id</span>
                </span>
                <div class="iconig">
                  <img
                    src="{{ asset('images/Source/round.png') }}"
                    alt="round"
                    class="round"
                  />
                  <img
                    src="{{ asset('images/Source/ig.svg') }}" 
                    alt="Instagram"
                    class="ig2"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="aboutus">
            <div class="logofooter">
              <span class="footertextlogo">
                <span>Codify</span>
              </span>
              <img
                src="{{ asset('images/Source/logo.png') }}"
                alt="logofooter"
                class="footerimg"
              />
            </div>
            <span class="footertext7">
              <span>
                Codify adalah platform pembelajaran online untuk membantu
                para pelajar/mahasiswa dalam mengembangkan kemampuannya di
                bidang teknologi terkhusus UI/UX, Web Development, dan
                Pemrograman Python agar memiliki peran penting di masa
                depan.
              </span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <img
      src="{{ asset('images/Source/Status.png') }}"
      alt="Status"
      class="ceklist"
    />
      <!-- Main Content -->
      <a class="contentbutton" href="/course/python/materi/sd">
        <span class="contenttext"><span>Struktur Data</span></span>
        <img
          src="{{ asset('images/Source/gelap.svg') }}"
          alt="Struktur Data"
          class="content"
        />
      </a>
      <a class="contentbutton1" href="/course/python/materi/pbo">
        <span class="contenttext1"><span>Pemrograman Berorientasi Objek</span></span>
        <img
          src="{{ asset('images/Source/gelap.svg') }}"
          alt="Pemrograman Berorientasi Objek"
          class="content1"
        />
      </a>
      <a class="contentbutton2"href="/course/python/materi/ep">
        <span class="contenttext2"><span>Eksepsi dan Penanganannya</span></span>
        <img
          src="{{ asset('images/Source/gelap.svg') }}"
          alt="Eksepsi dan Penanganannya"
          class="content2"
        />
      </a>
      <a class="contentbutton3" href="/course/python/materi/mdp">
        <span class="contenttext3"><span>Manajemen Database Python</span></span>
        <img
          src="{{ asset('images/Source/gelap.svg') }}"
          alt="Manajemen Database Python"
          class="content3"
        />
      </a>

      <a class="contentbutton4" href="/course/python/materi/ddp">
        <span class="contenttext4"><span>Dasar-Dasar Python</span></span>
        <img
          src="{{ asset('images/Source/terang.svg') }}"
          alt="Dasar-Dasar Python"
          class="content4"
        />
      </a>
      <a class="contentbutton5" href="/course/python/materi/fm">
        <span class="contenttext5"><span>Fungsi dan Modularitas</span></span>
        <img
          src="{{ asset('images/Source/terang.svg') }}"
          alt="Fungsi dan Modularitas"
          class="content5"
        />
      </a>
      <a class="contentbutton6" href="/course/python/materi/mf">
        <span class="contenttext6"><span>Manajemen File</span></span>
        <img
          src="{{ asset('images/Source/terang.svg') }}"
          alt="Manajemen File"
          class="content6"
        />
      </a>
      <a class="contentbutton7" href="/course/python/materi/pk">
        <span class="contenttext7"><span>Pengoptimalan Kode</span></span>
        <img
          src="{{ asset('images/Source/terang.svg') }}"
          alt="Pengoptimalan Kode"
          class="content7"
        />
      </a>
      <a class="contentbutton8" href="/course/python/materi/pd">
        <span class="contenttext8"><span>Pengujian dan Dubugging</span></span>
        <img
          src="{{ asset('images/Source/terang.svg') }}"
          alt="Pengujian dan Dubugging"
          class="content8"
        />
      </a>
      <span class="maintittle"><span>COURSE CONTENT</span></span>
      <div class="mainframe">
        <span class="mainbar"><span>41% Complete</span></span>
        <img
          src="{{ asset('images/Source/bar1.png') }}"
          alt="Bar"
          class="bar1"
        />
        <img
          src="{{ asset('images/Source/bar2.png') }}"
          alt="Bar"
          class="bar2"
        />
      </div>
</body>
</html>