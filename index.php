<?php
$instagram = "https://www.instagram.com/mehmetakifsoydal/";
$linkedin = "https://linkedin.com/in/mehmet-akif-soydal-0a77472b3";
$github = "https://github.com/OKSEIDON";
$twtitter = "#";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mehmet Akif Soydal - Blog</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Özel renk paleti tanımlaması */
        :root {
            --primary-red: #dc2626;
            --primary-aqua: #06b6d4;
            --primary-black: #1f2937;
        }
        
        /* Gradient arka plan efekti */
        .hero-gradient {
            background: linear-gradient(135deg, var(--primary-black) 0%, var(--primary-red) 50%, var(--primary-aqua) 100%);
        }
        
        /* Hover efektleri için özel animasyonlar */
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        
        /* Hamburger menü hover efektleri */
        .menu-item:hover {
            background-color: rgba(255,255,255,0.1);
            transform: translateX(5px);
        }
        
        .hamburger-btn:hover {
            background-color: var(--primary-red) !important;
            transform: scale(1.05);
        }
        
        .menu-panel.show {
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateY(0) !important;
        }
        
        /* Hamburger animasyonu */
        .hamburger-btn.active span:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
        }
        
        .hamburger-btn.active span:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger-btn.active span:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Hamburger Menü - Sol üst köşe -->
    <div class="hamburger-menu" style="position: fixed; top: 20px; left: 20px; z-index: 1000;">
        <button class="hamburger-btn" onclick="toggleMenu()" style="background: var(--primary-black); border: none; padding: 12px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
            <div class="hamburger-lines">
                <span style="display: block; width: 25px; height: 3px; background: white; margin: 5px 0; transition: 0.3s;"></span>
                <span style="display: block; width: 25px; height: 3px; background: white; margin: 5px 0; transition: 0.3s;"></span>
                <span style="display: block; width: 25px; height: 3px; background: white; margin: 5px 0; transition: 0.3s;"></span>
            </div>
        </button>
        
        <!-- Menü Paneli -->
        <div id="menuPanel" class="menu-panel" style="position: absolute; top: 60px; left: 0; background: var(--primary-black); border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.4); min-width: 200px; opacity: 0; visibility: hidden; transform: translateY(-10px); transition: all 0.3s ease;">
            <div class="menu-items" style="padding: 15px 0;">
                <a href="#" onclick="showSection('home'); toggleMenu();" class="menu-item" style="display: flex; align-items: center; padding: 12px 20px; color: white; text-decoration: none; transition: all 0.3s ease;">
                    <i class="fas fa-home me-3" style="color: var(--primary-aqua); width: 20px;"></i>
                    <span>Ana Sayfa</span>
                </a>
                <a href="#" onclick="showSection('personal'); toggleMenu();" class="menu-item" style="display: flex; align-items: center; padding: 12px 20px; color: white; text-decoration: none; transition: all 0.3s ease;">
                    <i class="fas fa-heart me-3" style="color: var(--primary-red); width: 20px;"></i>
                    <span>Kişisel Gelişim</span>
                </a>
                <a href="#" onclick="showSection('tech'); toggleMenu();" class="menu-item" style="display: flex; align-items: center; padding: 12px 20px; color: white; text-decoration: none; transition: all 0.3s ease;">
                    <i class="fas fa-laptop-code me-3" style="color: var(--primary-aqua); width: 20px;"></i>
                    <span>Teknoloji</span>
                </a>
                <a href="#" onclick="showSection('blog'); toggleMenu();" class="menu-item" style="display: flex; align-items: center; padding: 12px 20px; color: white; text-decoration: none; transition: all 0.3s ease;">
                    <i class="fas fa-pen-alt me-3" style="color: var(--primary-red); width: 20px;"></i>
                    <span>Blog</span>
                </a>
                <a href="#" onclick="showSection('about'); toggleMenu();" class="menu-item" style="display: flex; align-items: center; padding: 12px 20px; color: white; text-decoration: none; transition: all 0.3s ease;">
                    <i class="fas fa-user me-3" style="color: var(--primary-aqua); width: 20px;"></i>
                    <span>Hakkında</span>
                </a>
                
                <!-- Sosyal Medya Linkleri -->
                <div style="border-top: 1px solid rgba(255,255,255,0.1); margin: 10px 20px; padding-top: 15px;">
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="text-white fs-5" style="transition: color 0.3s ease;"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo $linkedin; ?>" class="text-white fs-5" style="transition: color 0.3s ease;"><i class="fab fa-linkedin"></i></a>
                        <a href="<?php echo $github; ?>" class="text-white fs-5" style="transition: color 0.3s ease;"><i class="fab fa-github"></i></a>
                        <a href="<?php echo $instagram; ?>" class="text-white fs-5" style="transition: color 0.3s ease;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo ve İsim - Ortada -->
    <div class="text-center py-4" style="background-color: var(--primary-black);">
        <div class="container">
            <a href="#" onclick="showSection('home')" class="text-decoration-none">
                <div class="d-flex align-items-center justify-content-center">
                    <i class="fas fa-blog fs-1 me-3" style="color: var(--primary-aqua);"></i>
                    <h1 class="text-white fw-bold mb-0 fs-2">Mehmet Akif Soydal</h1>
                </div>
                <p class="text-white-50 mt-2 mb-0">Kişisel Blog</p>
            </a>
        </div>
    </div>

    <!-- Ana Sayfa Bölümü -->
    <div id="home" class="section">
        <!-- Hero Bölümü - İsim ve tanıtım -->
        <section class="hero-gradient text-white py-5">
            <div class="container">
                <div class="row align-items-center min-vh-50">
                    <div class="col-lg-8 mx-auto text-center">
                        <!-- Ana başlık - İsim vurgusu -->
                        <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInUp">
                            Mehmet Akif Soydal
                        </h1>
                        <p class="lead fs-4 mb-4">
                            Kişisel Gelişim, Teknoloji ve Yaşam Üzerine Düşünceler
                        </p>
                        <div class="d-flex justify-content-center gap-3">
                            <button class="btn btn-outline-light btn-lg px-4 py-2 fw-semibold"
                                    onclick="showSection('blog')">
                                 <i class="fas fa-book-open me-2"></i>Blog'u Keşfet
                            </button>
                            <button class="btn btn-outline-light btn-lg px-4 py-2 fw-semibold"
                                    onclick="showSection('about')">
                                <i class="fas fa-user me-2"></i>Hakkımda
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Son Haberler/Yazılar Bölümü -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="display-5 fw-bold" style="color: var(--primary-black);">
                            Kategoriler
                        </h2>
                        <div class="mx-auto mt-3" style="width: 100px; height: 3px; background: linear-gradient(90deg, var(--primary-red), var(--primary-aqua));"></div>
                    </div>
                </div>
                
                <!-- Yazı kartları grid sistemi -->
                <div class="row g-4">
                    <!-- Kişisel Gelişim Yazısı -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm card-hover">
                            <div class="card-header text-white text-center py-3" style="background-color: var(--primary-red);">
                                <i class="fas fa-heart fs-3 mb-2"></i>
                                <h6 class="mb-0 fw-semibold">KİŞİSEL GELİŞİM</h6>
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold mb-3">Başarıya Giden Yolda Motivasyon</h5>
                                <p class="card-text text-muted">
                                    Hedeflerinize ulaşmak için gereken motivasyonu nasıl sürdürebilirsiniz? 
                                    İşte pratik öneriler...
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="fas fa-calendar me-1"></i>10 Ekim 2025
                                    </small>
                                    <button class="btn btn-sm" style="background-color: var(--primary-red); color: white;">
                                        Devamını Oku
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Teknoloji Yazısı -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm card-hover">
                            <div class="card-header text-white text-center py-3" style="background-color: var(--primary-aqua);">
                                <i class="fas fa-laptop-code fs-3 mb-2"></i>
                                <h6 class="mb-0 fw-semibold">TEKNOLOJİ</h6>
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold mb-3">2024'te Web Geliştirme Trendleri</h5>
                                <p class="card-text text-muted">
                                    Bu yıl web geliştirme dünyasında öne çıkan teknolojiler ve 
                                    gelecek öngörüleri...
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="fas fa-calendar me-1"></i>10 Ekim 2025
                                    </small>
                                    <button class="btn btn-sm" style="background-color: var(--primary-aqua); color: white;">
                                        Devamını Oku
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Genel Blog Yazısı -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm card-hover">
                            <div class="card-header text-white text-center py-3" style="background-color: var(--primary-black);">
                                <i class="fas fa-pen-alt fs-3 mb-2"></i>
                                <h6 class="mb-0 fw-semibold">YAŞAM</h6>
                            </div>
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold mb-3">Dijital Çağda İnsan İlişkileri</h5>
                                <p class="card-text text-muted">
                                    Teknolojinin insan ilişkilerine etkisi ve sağlıklı iletişim 
                                    kurmanın yolları...
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="fas fa-calendar me-1"></i>10 Ekim 2025
                                    </small>
                                    <button class="btn btn-sm" style="background-color: var(--primary-black); color: white;">
                                        Devamını Oku
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Hakkında Bölümü -->
    <div id="about" class="section" style="display: none;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="display-4 fw-bold" style="color: var(--primary-black);">Hakkımda</h2>
                        <div class="mx-auto mt-3" style="width: 100px; height: 3px; background: var(--primary-aqua);"></div>
                    </div>
                    
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-5">
                            <div class="row align-items-center">
                                <div class="col-md-4 text-center mb-4 mb-md-0">
                                    <img src="profile.png" 
                                        alt="Mehmet Akif Soydal Profil Fotoğrafı" 
                                        class="mx-auto d-block" 
                                        style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid var(--primary-aqua);">
                                </div>
                                <div class="col-md-8">
                                    <h3 class="fw-bold mb-3" style="color: var(--primary-black);">Mehmet Akif Soydal</h3>
                                    <p class="lead text-muted mb-4">
                                       Merhabalar, bendeniz Mehmet Akif Soydal. Kişisel gelişim ve teknoloji alanlarında
                                       yazılar yazan bir blog sahibiyim. Amacım, deneyimlerimi ve bilgilerimi sizlerle
                                       paylaşarak, hayatınıza değer katmak. Teknoloji dünyasındaki yenilikleri takip ederken,
                                       kişisel gelişim yolculuğumda öğrendikleriimi de aktarmaya çalışıyorum.
                                    </p>
                                    <p class="text-muted">
                                        Blogumda, motivasyon, hedef belirleme, web geliştirme, yapay zeka ve daha birçok
                                        konuda yazılar bulabilirsiniz. Umarım yazılarım sizlere ilham verir ve faydalı olur.
                                        İyi okumalar!
                                    </p>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kişisel Gelişim Bölümü -->
    <div id="personal" class="section" style="display: none;">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold" style="color: var(--primary-red);">Kişisel Gelişim</h2>
                <div class="mx-auto mt-3" style="width: 100px; height: 3px; background: var(--primary-red);"></div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card border-0 shadow card-hover h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                     style="width: 50px; height: 50px; background-color: var(--primary-red);">
                                    <i class="fas fa-target text-white"></i>
                                </div>
                                <h5 class="fw-bold mb-0">Hedef Belirleme</h5>
                            </div>
                            <p class="text-muted">
                                SMART hedefler belirleme, motivasyonu sürdürme ve başarıya ulaşma stratejileri.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card border-0 shadow card-hover h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                     style="width: 50px; height: 50px; background-color: var(--primary-red);">
                                    <i class="fas fa-brain text-white"></i>
                                </div>
                                <h5 class="fw-bold mb-0">Zihinsel Gelişim</h5>
                            </div>
                            <p class="text-muted">
                                Pozitif düşünce, stres yönetimi ve zihinsel dayanıklılık geliştirme teknikleri.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Teknoloji Bölümü -->
    <div id="tech" class="section" style="display: none;">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold" style="color: var(--primary-aqua);">Teknoloji</h2>
                <div class="mx-auto mt-3" style="width: 100px; height: 3px; background: var(--primary-aqua);"></div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card border-0 shadow card-hover h-100">
                        <div class="card-body p-4 text-center">
                            <div class="rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3" 
                                 style="width: 80px; height: 80px; background-color: var(--primary-aqua);">
                                <i class="fas fa-code text-white fs-3"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Web Geliştirme</h5>
                            <p class="text-muted">
                                Modern web teknolojileri, framework'ler ve en iyi uygulamalar.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card border-0 shadow card-hover h-100">
                        <div class="card-body p-4 text-center">
                            <div class="rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3" 
                                 style="width: 80px; height: 80px; background-color: var(--primary-aqua);">
                                <i class="fas fa-mobile-alt text-white fs-3"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Mobil Teknolojiler</h5>
                            <p class="text-muted">
                                iOS, Android ve cross-platform uygulama geliştirme trendleri.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card border-0 shadow card-hover h-100">
                        <div class="card-body p-4 text-center">
                            <div class="rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3" 
                                 style="width: 80px; height: 80px; background-color: var(--primary-aqua);">
                                <i class="fas fa-robot text-white fs-3"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Yapay Zeka</h5>
                            <p class="text-muted">
                                AI, machine learning ve gelecek teknolojileri üzerine incelemeler.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Bölümü -->
    <div id="blog" class="section" style="display: none;">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold" style="color: var(--primary-black);">Tüm Blog Yazıları</h2>
                <div class="mx-auto mt-3" style="width: 100px; height: 3px; background: var(--primary-black);"></div>
            </div>
            
            <!-- Blog yazıları listesi -->
            <div class="row g-4">
                <div class="col-lg-6">
                    <article class="card border-0 shadow card-hover">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge" style="background-color: var(--primary-red);">Kişisel Gelişim</span>
                                <small class="text-muted">15 Aralık 2024</small>
                            </div>
                            <h4 class="fw-bold mb-3">Başarıya Giden Yolda Motivasyon</h4>
                            <p class="text-muted mb-3">
                                Hedeflerinize ulaşmak için gereken motivasyonu nasıl sürdürebilirsiniz? 
                                İşte pratik öneriler ve deneyimlerim...
                            </p>
                            <a href="#" class="btn" style="background-color: var(--primary-red); color: white;">
                                Yazıyı Oku <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </article>
                </div>
                
                <div class="col-lg-6">
                    <article class="card border-0 shadow card-hover">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge" style="background-color: var(--primary-aqua);">Teknoloji</span>
                                <small class="text-muted">10 Ekim 2025</small>
                            </div>
                            <h4 class="fw-bold mb-3">2024'te Web Geliştirme Trendleri</h4>
                            <p class="text-muted mb-3">
                                Bu yıl web geliştirme dünyasında öne çıkan teknolojiler ve 
                                gelecek öngörüleri hakkında detaylı analiz...
                            </p>
                            <a href="#" class="btn" style="background-color: var(--primary-aqua); color: white;">
                                Yazıyı Oku <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-white py-4 mt-5" style="background-color: var(--primary-black);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 Mehmet Akif Soydal. Tüm hakları saklıdır.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="d-flex justify-content-md-end justify-content-center gap-3 mt-3 mt-md-0">
                        <a href="<?php echo $twitter; ?>" class="text-white fs-5"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo $linkedin; ?>" class="text-white fs-5"><i class="fab fa-linkedin"></i></a>
                        <a href="<?php echo $github; ?>" class="text-white fs-5"><i class="fab fa-github"></i></a>
                        <a href="<?php echo $instagram; ?>" class="text-white fs-5"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Hamburger menü toggle fonksiyonu
        function toggleMenu() {
            const menuPanel = document.getElementById('menuPanel');
            const hamburgerBtn = document.querySelector('.hamburger-btn');
            
            if (menuPanel.classList.contains('show')) {
                menuPanel.classList.remove('show');
                hamburgerBtn.classList.remove('active');
            } else {
                menuPanel.classList.add('show');
                hamburgerBtn.classList.add('active');
            }
        }
        
        // Menü dışına tıklandığında menüyü kapat
        document.addEventListener('click', function(event) {
            const hamburgerMenu = document.querySelector('.hamburger-menu');
            const menuPanel = document.getElementById('menuPanel');
            const hamburgerBtn = document.querySelector('.hamburger-btn');
            
            if (!hamburgerMenu.contains(event.target)) {
                menuPanel.classList.remove('show');
                hamburgerBtn.classList.remove('active');
            }
        });
        
        // Sayfa bölümleri arasında geçiş yapan fonksiyon
        function showSection(sectionName) {
            // Tüm bölümleri gizle
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                section.style.display = 'none';
            });
            
            // Seçilen bölümü göster
            const targetSection = document.getElementById(sectionName);
            if (targetSection) {
                targetSection.style.display = 'block';
                
                // Sayfayı yukarı kaydır
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
            
            // Aktif menü öğesini güncelle
            updateActiveMenu(sectionName);
        }
        
        // Aktif menü öğesini vurgulayan fonksiyon
        function updateActiveMenu(activeSection) {
            // Tüm menü linklerinden active class'ını kaldır
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.classList.remove('active');
                link.style.color = 'white';
            });
            
            // Aktif menü öğesini vurgula
            const activeLink = document.querySelector(`[onclick="showSection('${activeSection}')"]`);
            if (activeLink) {
                activeLink.classList.add('active');
                activeLink.style.color = 'var(--primary-aqua)';
            }
        }
        
        // Sayfa yüklendiğinde ana sayfayı aktif yap
        document.addEventListener('DOMContentLoaded', function() {
            showSection('home');
            
            // Smooth scroll efekti için tüm linkleri dinle
            const internalLinks = document.querySelectorAll('a[href^="#"]');
            internalLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                });
            });
            
            // Kartlara tıklama efekti ekle
            const cards = document.querySelectorAll('.card-hover');
            cards.forEach(card => {
                card.addEventListener('click', function() {
                    // Tıklama animasyonu
                    this.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        this.style.transform = 'translateY(-5px)';
                    }, 100);
                });
            });
        });
        
        // Navbar'ın scroll durumuna göre şeffaflık efekti
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(31, 41, 55, 0.95)';
                navbar.style.backdropFilter = 'blur(10px)';
            } else {
                navbar.style.backgroundColor = 'var(--primary-black)';
                navbar.style.backdropFilter = 'none';
            }
        });
        
        // Sayfa yüklenme animasyonu
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'97f9dc52d51223a8',t:'MTc1Nzk1NzUxNy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
