<?php
$pageTitle = 'Profil - Telkom University';
require 'includes/header.php';
?>
<section class="section">
 <div class="container article-body">
 <span class="eyebrow">Profil</span>
 <h1>Tentang proyek simulasi Telkom University</h1>
 <p class="lead">Halaman ini digunakan untuk mempraktikkan struktur halaman PHP yang memakai header dan footer
bersama.</p>
 <h2>Visi pembelajaran</h2>
 <p>Mahasiswa memahami hubungan antarmuka web, logika PHP, basis data, dan version control melalui satu proyek
terpadu.</p>
 <h2>Tujuan proyek</h2>
 <p>Proyek menampilkan profil, program studi, berita, serta formulir kontak. Data program studi dan berita dibaca dari
database, sedangkan pesan pengguna disimpan menggunakan prepared statement.</p>
 <div class="alert alert-success">Konten institusi pada website ini bersifat simulasi untuk keperluan praktikum.</div>
</div>
</section>
<section class="section section-soft">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Fokus Pembelajaran</span>
            <h2>Apa yang akan kamu pelajari?</h2>
        </div>
        <div class="grid-3">
            <article class="card futsal">
                <h3>Futsal</h3>
                <p>Melatih kerja sama tim, kelincahan, serta teknik penguasaan bola di lapangan dalam.</p>
            </article>
            <article class="card basket">
                <h3>Basket</h3>
                <p>Mengembangkan stamina, akurasi tembakan, dan strategi permainan beregu yang cepat.</p>
            </article>
            <article class="card bulutangkis">
                <h3>Bulutangkis</h3>
                <p>Melatih refleks, kecepatan gerak kaki, dan variasi pukulan servis maupun smash.</p>
            </article>
        </div>
    </div>
</section>
<?php require 'includes/footer.php'; ?>