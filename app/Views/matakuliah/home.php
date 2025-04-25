<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nolan Studio</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/home_view.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Nur Kholivah</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Portofolio</a></li>
                    <li><a href="#">Mata Kuliah</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero_kiri">
            <p>Portofolio</p>
            <h2>Nama Saya Nur Kholivah</h2>
            <p>Selamat datang di portofolio saya. Saya adalah seorang profesional yang berpengalaman dalam desain, pemrograman, serta fotografi. Dengan kemampuan saya, saya berkomitmen untuk memberikan hasil terbaik dalam setiap proyek yang saya kerjakan.</p>
        </div>
        <div class="hero_kanan">
            <p>Skill saya</p>

            <div>
                <strong>Figma, Canva</strong><br />

            </div>

            <div>
                <strong> HTML, CSS, dan PHP</strong><br />

            </div>

            <div>
                <strong>Microsoft Word dan Excel</strong><br />

            </div>
        </div>
    </section>

    <section class="about">
        <h3>Mata Kuliah</h3>
        <div class="features">
            <div class="feature">
                <a href="/rpl">
                    <img src="img/rpl.jpeg" alt="Rekayasa Perangkat Lunak Icon">
                    <h4>Rekayasa Perangkat Lunak</h4>
                </a>
                <p>We have a reliable and experienced team.</p>
            </div>
            <div class="feature">
                <img src="img/mbd.jpeg" alt="Manajemen Basis Data Icon">
                <h4>Manajemen Basis Data</h4>
                <p>Our creative team will bring your ideas to life.</p>
            </div>
            <div class="feature">
                <img src="img/sim.jpeg" alt="Sistem Informasi Manajemen Icon">
                <h4>Sistem Informasi Manajemen</h4>
                <p>We create your app and website tailored to your needs.</p>
            </div>
            <div class="feature">
                <img src="img/metopen.jpeg" alt="Metodologi Penelitian SI Icon">
                <h4>Metodologi Penelitian SI</h4>
                <p>We create your app and website tailored to your needs.</p>
            </div>
            <div class="feature">
                <img src="img/pemweb.jpg" alt="Pemrograman Website 2 Icon">
                <h4>Pemrograman Website 2</h4>
                <p>We create your app and website tailored to your needs.</p>
            </div>
            <div class="feature">
                <img src="img/Visualisasi.jpg" alt="Visualisasi Data dan Informasi Icon">
                <h4>Visualisasi Data dan Informasi</h4>
                <p>We create your app and website tailored to your needs.</p>
            </div>
        </div>
    </section>

    <section class="contact">
        <h3>Kontak Saya</h3>
        <form id="myForm">
            <label for="nama">Nama Pengontak:</label><br>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="perusahaan">Perusahaan:</label><br>
            <input type="text" id="perusahaan" name="perusahaan" required><br><br>

            <label for="alasan">Alasan Mengontak:</label><br>
            <select id="alasan" name="alasan" required>
                <option value="">Pilih Alasan</option>
                <option value="memesan_web">Memesan Web</option>
                <option value="bekerja_sama">Bekerja sama</option>
                <option value="rapat_kerja">Rapat Kerja</option>
            </select><br><br>

            <button type="button" onclick="kirimKeWhatsApp()">Kirim ke WhatsApp</button>
        </form>

        <script>
            function kirimKeWhatsApp() {
                var nama = document.getElementById("nama").value;
                var perusahaan = document.getElementById("perusahaan").value;
                var alasan = document.getElementById("alasan").value;

                if (nama && perusahaan && alasan) {
                    var pesan = "Nama: " + nama + "\nPerusahaan: " + perusahaan + "\nAlasan: " + alasan;
                    var encodedPesan = encodeURIComponent(pesan);
                    var nomorWhatsApp = "+6281275902829";
                    var urlWhatsApp = "https://wa.me/+6281275902829" + "?text=" + encodedPesan;
                    window.open(urlWhatsApp, "_blank");
                } else {
                    alert("Harap isi semua bidang!");
                }
            }
        </script>
        <div class="ikuti_saya">
            <p>Ikuti saya di media sosial</p>
        </div>
        <ul>
            <li><a href="https://github.com/yourusername" target="_blank"><i class="fab fa-github"></i></a></li>
            <li><a href="mailto:youremail@example.com"><i class="fas fa-envelope"></i></a></li>
            <li><a href="https://www.instagram.com/yourusername" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/in/yourusername" target="_blank"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </section>
    <footer>
        <div class="container_footer">
            <p>&copy; 2025 Nur Kholivah. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>