<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href=".\img\BIMBELRAHMA.png" sizes="32x32">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <title>Bimbel Rahma - Bimbingan Belajar Terbaik</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light py-0" style="box-shadow: none;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src=".\img\BIMBELRAHMA.png" alt="Bimbel Rahma Logo" width="300" height="1500"> <!-- Increased width and height -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link px-3" href="index.php">Beranda</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="tentangkami.php">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="paketbelajar.php">Paket Belajar</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="kontak.php">Kontak</a></li>
                <li class="nav-item"><a class="nav-link btn btn-primary text-white ml-3 px-4" href="login.php">Masuk</a></li>
                <li class="nav-item"><a class="nav-link btn btn-primary text-white ml-3 px-4" href="paketbelajar.php">Daftar Sekarang</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Menandai nav-item aktif berdasarkan URL saat ini
    document.addEventListener("DOMContentLoaded", function () {
        const navLinks = document.querySelectorAll(".nav-link");
        const currentUrl = window.location.href;

        navLinks.forEach(link => {
            if (link.href === currentUrl) {
                link.classList.add("active");
            }
        });
    });
</script>

    <div class="divider"></div>
    <!--carousel-->
    <div id="geser" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="daftar.php">
                    <img src=".\img\BIMBEL RAHMA (1920 x 600 px) (4).png" class="d-block w-100" alt="Image 1" style="width: 100%; height: 400px; ">
                </a>
            </div>
            <div class="carousel-item">
                <img src=".\img\BIMBEL RAHMA (1920 x 600 px) (4).png" class="d-block w-100" alt="Image 2" style="width: 100%; height: 400px;">
            </div>
            <div class="carousel-item">
                <img src=".\img\BIMBEL RAHMA (1920 x 600 px) (4).png" class="d-block w-100" alt="Image 3" style="width: 100%; height: 400px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#geser" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#geser" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Learning Options Section -->
    <section class="learning-options">
        <div class="container">
            <h2 class="text-center mb-5">Pilihan Belajar</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="learning-option">
                        <div class="animation-container" style="width: 320px; height: 240px;">
                            <lottie-player src=".\json\1on1.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
                        </div>
                        <h3>1 on 1 (Private math)</h3>
                        <p>Belajar secara personal dengan tutor berpengalaman untuk hasil maksimal.</p>
                        <a href="paketbelajar1.php" class="btn btn-primary">Pilih Paket</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="learning-option">
                        <div class="animation-container" style="width: 320px; height: 240px;">
                            <lottie-player src=".\json\1on3.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
                        </div>
                        <h3>1 on 3</h3>
                        <p>Belajar dalam kelompok kecil untuk interaksi yang lebih baik dan fokus.</p>
                        <a href="paketbelajar2.php" class="btn btn-primary">Pilih Paket</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="learning-option">
                        <div class="animation-container" style="width: 320px; height: 240px;">
                            <lottie-player src=".\json\1on5.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
                        </div>
                        <h3>1 on 5</h3>
                        <p>Belajar dalam kelompok yang lebih besar namun tetap efektif dan efisien.</p>
                        <a href="paketbelajar3.php" class="btn btn-primary">Pilih Paket</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mengapa Memilih Bimbel Rahma Section -->
    <section class="container my-5">
        <h2 class="text-center mb-5">Mengapa Memilih Bimbel Rahma?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="feature-box text-center">
                    <i class="fas fa-chalkboard-teacher fa-3x mb-3" style="color: #020e49;"></i>
                    <h3>Pengajar Berkualitas</h3>
                    <p>Tim pengajar kami terdiri dari lulusan universitas terkemuka dengan pengalaman mengajar yang luas.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box text-center">
                    <i class="fas fa-book fa-3x mb-3" style="color: #020e49;"></i>
                    <h3>Kurikulum Terkini</h3>
                    <p>Materi pembelajaran kami selalu diperbarui mengikuti perkembangan kurikulum nasional.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box text-center">
                    <i class="fas fa-users fa-3x mb-3" style="color: #020e49;"></i>
                    <h3>Kelas Kecil</h3>
                    <p>Kami menjaga rasio siswa dan guru yang ideal untuk memastikan setiap siswa mendapat perhatian yang cukup.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial">
        <div class="container">
            <h2 class="text-center mb-5">Apa Kata Mereka?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"Bimbel Rahma sangat membantu saya dalam mempersiapkan ujian. Saya berhasil masuk ke universitas impian saya!"</p>
                            <footer class="blockquote-footer">Andi, Siswa SMA</footer>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"Pengajarnya sangat sabar dan metode belajarnya menyenangkan. Anak saya jadi lebih semangat belajar."</p>
                            <footer class="blockquote-footer">Ibu Siti, Orang Tua Siswa</footer>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"Fasilitas lengkap dan suasana belajar yang nyaman. Sangat direkomendasikan!"</p>
                            <footer class="blockquote-footer">Budi, Siswa SMP</footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Footer -->
   <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-0">
                    <div style="background-color: white;">
                        <img src=".\img\BIMBELRAHMA.png" alt="Bimbel Rahma Logo" width="300" height="100" style="max-height: 100px;">
                    </div>
                    <div class="divider"></div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 style="color: black;">Bimbel Rahma</h4>
                                <p style="color: black;">Jl. Citra Kebun Mas R16 No.01, Bengle, Kec. Majalaya, Karawang, Jawa Barat 41371</p>
                            </div>
                            <div class="col-md-4">
                                <h4 style="color: black;">Hubungi Kami</h4>
                                <p style="color: black;">Email: bimbelrahmakarawang@gmail.com</p>
                                <p style="color: black;">Telepon: 0812-2222-9056</p>
                            </div>
                            <div class="col-md-4">
                                <h4 style="color: black;">Ikuti Kami</h4>
                                <div class="social-media">
                                    <a href="https://www.facebook.com/profile.php?id=100066394995272&mibextid=LQQJ4d" class="text-black mr-3"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/bimbelrahmakarawang/" class="text-black mr-3"><i class="fab fa-instagram"></i></a>
                                    <a href="mailto:bimbelrahmakarawang@gmail.com" class="text-black"><i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
            <p class="text-center" style="color: black;">&copy; 2024 Bimbel Rahma. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
    </script>
</body>
</html>