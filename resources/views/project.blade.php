@extends('layouts.main')

@section('title')
Portofolio Syabil
@endsection

@section('style')
<style>
/* CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

:root {
    --primary-color: #2563eb;
    --secondary-color: #1e40af;
    --accent-color: #3b82f6;
    --dark-color: #1e293b;
    --light-color: #f8fafc;
    --gray-color: #64748b;
    --shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    --transition: all 0.3s ease;
}

body {
    line-height: 1.6;
    color: var(--dark-color);
    background-color: var(--light-color);
}

.container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark-color);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            width: 70px;
            height: 4px;
            background-color: var(--primary-color);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .section-title p {
            color: var(--gray-color);
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.1rem;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }

        .btn:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
        }

        .btn-secondary {
            background-color: var(--dark-color);
            margin-left: 12px;
        }

        .btn-secondary:hover {
            background-color: #0f172a;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        /* Header & Navigation */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }

        .logo span {
            color: var(--dark-color);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            font-size: 1rem;
            transition: var(--transition);
            padding: 5px 0;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            bottom: 0;
            left: 0;
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--dark-color);
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            padding-top: 150px;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            overflow: hidden;
        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .hero-text {
            flex: 1;
            padding-right: 30px;
        }

        .hero-text h1 {
            font-size: 3.2rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-text h1 span {
            color: var(--primary-color);
        }

        .hero-text p {
            font-size: 1.2rem;
            color: var(--gray-color);
            margin-bottom: 30px;
            max-width: 600px;
        }

        .hero-image {
            flex: 1;
            text-align: center;
        }

        .hero-image img {
            max-width: 100%;
            border-radius: 20px;
            box-shadow: var(--shadow);
            transform: perspective(1000px) rotateY(-10deg);
            transition: var(--transition);
        }

        .hero-image img:hover {
            transform: perspective(1000px) rotateY(0deg);
        }

        /* CV Section */
        .cv {
            background-color: white;
        }

        .cv-preview {
            max-width: 780px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            border: 1px solid #e2e8f0;
        }

        .cv-preview img {
            display: block;
            width: 100%;
            max-height: 900px;
            object-fit: contain;
            background-color: #f8fafc;
        }

        /* About Section */
        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .about-image {
            flex: 1;
        }

        .about-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--dark-color);
        }

        .about-text p {
            margin-bottom: 20px;
            color: var(--gray-color);
        }

        .skills {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .skill-item {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 16px;
            background-color: #eff6ff;
            color: var(--secondary-color);
            border: 1px solid #bfdbfe;
            border-radius: 999px;
            font-weight: 700;
        }

        .skill-item i {
            color: var(--primary-color);
        }

        /* Portfolio Section */
        .portfolio {
            background-color: #f8fafc;
        }

        .portfolio-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 20px;
            margin: 0 5px 10px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
        }

        .filter-btn.active, .filter-btn:hover {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .portfolio-item {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .portfolio-item:hover {
            transform: translateY(-10px);
        }

        .portfolio-img {
            height: 200px;
            overflow: hidden;
        }

        .portfolio-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .portfolio-item:hover .portfolio-img img {
            transform: scale(1.05);
        }

        .portfolio-info {
            padding: 20px;
        }

        .portfolio-info h3 {
            margin-bottom: 10px;
            font-size: 1.3rem;
        }

        .portfolio-info p {
            color: var(--gray-color);
            font-size: 0.9rem;
        }

        .portfolio-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 15px;
        }

        .portfolio-tech span {
            display: inline-flex;
            padding: 5px 10px;
            background-color: #eef2ff;
            color: #3730a3;
            border-radius: 999px;
            font-size: 0.78rem;
            font-weight: 700;
        }

        .portfolio-links {
            margin-top: 18px;
            padding-top: 14px;
            border-top: 1px solid #f1f5f9;
        }

        .github-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #24292e;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.9rem;
            background: #f6f8fa;
            padding: 8px 14px;
            border-radius: 6px;
            border: 1px solid #d1d5da;
            transition: var(--transition);
        }

        .github-link:hover {
            background-color: #24292e;
            color: white;
        }

        /* Contact Section */
        .contact {
            background-color: white;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(190px, 1fr));
            gap: 18px;
        }

        .contact-card {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 18px;
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            color: var(--dark-color);
            text-decoration: none;
            transition: var(--transition);
        }

        .contact-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary-color);
            box-shadow: var(--shadow);
        }

        .contact-card i {
            width: 42px;
            height: 42px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: var(--primary-color);
            color: white;
            border-radius: 8px;
            font-size: 1.2rem;
        }

        .contact-card span {
            display: block;
            color: var(--gray-color);
            font-size: 0.85rem;
        }

        .contact-card strong {
            display: block;
            font-size: 1rem;
        }

        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 60px 0 30px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            text-decoration: none;
            margin-bottom: 20px;
            display: inline-block;
        }

        .footer-links {
            display: flex;
            flex-direction: column;
        }

        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            margin-bottom: 10px;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            font-size: 1.2rem;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--primary-color);
            transform: translateY(-5px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #cbd5e1;
            font-size: 0.9rem;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-content, .about-content {
                flex-direction: column;
            }

            .hero-text, .about-text {
                padding-right: 0;
                margin-bottom: 40px;
            }

            .hero-text h1 {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 15px 0;
            }

            .nav-links {
                position: fixed;
                top: 70px;
                left: 0;
                background-color: white;
                width: 100%;
                flex-direction: column;
                align-items: center;
                padding: 20px 0;
                box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
                transform: translateY(-100%);
                opacity: 0;
                transition: var(--transition);
                z-index: 999;
            }

            .nav-links.active {
                transform: translateY(0);
                opacity: 1;
            }

            .nav-links li {
                margin: 10px 0;
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero-text h1 {
                font-size: 2.2rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .footer-content {
                flex-direction: column;
                gap: 30px;
            }
        }

        @media (max-width: 576px) {
            .hero-text h1 {
                font-size: 1.8rem;
            }

            .btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }

            .btn-secondary {
                margin-left: 0;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
            }
        }
</style>
@endsection


@section('content')

<!-- ================= HEADER ================= -->
<header>
    <div class="container">
        <nav class="navbar">
            <a href="#" class="logo">Porto<span>folio.</span></a>

            <ul class="nav-links">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#portfolio">Portofolio</a></li>
                <li><a href="#contact">Kontak</a></li>

@auth
    <li style="margin-left:20px; font-weight:600;">
        👋 {{ Auth::user()->name }}
    </li>

    <li>
        <a href="{{ route('dashboard') }}" style="color: var(--primary-color); font-weight: 700;">
            <i class="fas fa-columns"></i> Dashboard
        </a>
    </li>

    <li>
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button type="submit" style="color:#ef4444; background:none; border:none; cursor:pointer; font-weight:600; font-size: 1rem; padding: 5px 0;">
                Logout
            </button>
        </form>
    </li>
@else
    <li>
        <a href="{{ route('login') }}">Login</a>
    </li>
@endauth

            </ul>

            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </div>
</header>


<!-- ================= HERO ================= -->
<section id="home" class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1>
    Halo, Saya
    <span>{{ session('nama', 'Syabil') }}</span>
</h1>
                <h1>Web Developer</h1>
                <p>
                    Saya seorang pengembang web junior yang dalam membangun aplikasi web modern menggunakan Laravel, React, dan teknologi terbaru lainnya.
                </p>
                <div class="hero-actions">
                    <a href="#portfolio" class="btn">Lihat Portofolio</a>
                    <a href="#cv" class="btn btn-secondary">Lihat CV</a>
                </div>
            </div>

            <div class="hero-image">
                <img src="/download.jpg" alt="download">
            </div>
        </div>
    </div>
</section>


<!-- ================= CV ================= -->
<section id="cv" class="cv">
    <div class="container">
        <div class="section-title">
            <h2>CV</h2>
            <p>Ringkasan pengalaman, skill, dan informasi profesional saya.</p>
        </div>

        @php
            $cvImage = file_exists(public_path('cv.jpg')) ? asset('cv.jpg') : asset('download.jpg');
        @endphp

        <div class="cv-preview">
            <img src="{{ $cvImage }}" alt="CV Syabil">
        </div>
    </div>
</section>


<!-- ================= ABOUT ================= -->
<section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Tentang Saya</h2>
                <p>Saya memiliki pengalaman kurang lebih 1 tahun dalam pengembangan web dengan fokus pada teknologi modern dan best practices.</p>
            </div>

            <div class="about-content">
                <div class="about-image">
                    <!-- Placeholder untuk gambar tentang -->
                    <div style="width: 100%; height: 400px; background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: var(--dark-color); font-size: 1.2rem; font-weight: bold; box-shadow: var(--shadow);">
                        <div style="text-align: center; padding: 20px;">
                            <i class="fas fa-user-tie" style="font-size: 4rem; margin-bottom: 20px; color: var(--primary-color);"></i>
                            <div>Pengalaman 1+ Tahun</div>
                            <div style="font-size: 1rem; font-weight: normal; margin-top: 10px;">Dalam pengembangan web</div>
                        </div>
                    </div>
                </div>
                <div class="about-text">
                    <h3>Spesialis Pengembangan Web</h3>
                    <p>Saya adalah seorang Full Stack Developer dengan passion untuk menciptakan aplikasi web yang menarik, fungsional, dan efisien. Saya memiliki pengalaman luas dalam berbagai teknologi termasuk Laravel, React, Vue.js, dan database SQL/NoSQL.</p>
                    <p>Saya senang bekerja pada proyek-proyek yang menantang dan selalu berusaha untuk mempelajari teknologi terbaru untuk memberikan solusi terbaik kepada klien.</p>

                    <div class="skills">
                        <div class="skill-item"><i class="fab fa-laravel"></i> Laravel</div>
                        <div class="skill-item"><i class="fab fa-php"></i> PHP</div>
                        <div class="skill-item"><i class="fab fa-js"></i> JavaScript</div>
                        <div class="skill-item"><i class="fab fa-react"></i> React</div>
                        <div class="skill-item"><i class="fab fa-vuejs"></i> Vue.js</div>
                        <div class="skill-item"><i class="fas fa-database"></i> MySQL</div>
                        <div class="skill-item"><i class="fab fa-html5"></i> HTML</div>
                        <div class="skill-item"><i class="fab fa-css3-alt"></i> CSS</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="section-title">
            <h2>Portofolio</h2>
            <p>Berikut adalah beberapa proyek terbaru yang telah saya kerjakan menggunakan berbagai teknologi modern.</p>
        </div>

        <div class="portfolio-filter">
            <button class="filter-btn active" data-filter="all">Semua</button>
            <button class="filter-btn" data-filter="laravel">Laravel</button>
            <button class="filter-btn" data-filter="react">React</button>
            <button class="filter-btn" data-filter="vue">Vue.js</button>
            <button class="filter-btn" data-filter="fullstack">Full Stack</button>
        </div>

        {{-- ================= DATA PORTFOLIO ================= --}}
        @if (!isset($projects) || $projects->isEmpty())
            <p style="
                text-align: center;
                color: #64748b;
                font-size: 1.1rem;
                margin-top: 40px;
            ">
                Data project belum tersedia.
            </p>
        @else
            @php
                $portfolioImages = [
                    'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=900&q=80',
                    'https://images.unsplash.com/photo-1551650975-87deedd944c3?auto=format&fit=crop&w=900&q=80',
                    'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=900&q=80',
                    'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=900&q=80',
                ];
            @endphp
            <div class="portfolio-grid">
                @foreach ($projects as $project)
                    @php
                        $techStack = is_array($project->tech_stack)
                            ? $project->tech_stack
                            : array_filter(array_map('trim', explode(',', (string) $project->tech_stack)));
                        $categoryText = strtolower(implode(' ', $techStack));
                        $portfolioImage = $portfolioImages[$loop->index % count($portfolioImages)];
                    @endphp

                    <div class="portfolio-item" data-category="{{ $categoryText }}">

                        <div class="portfolio-img">
                            <img src="{{ $portfolioImage }}" alt="Preview {{ $project->judul }}">
                        </div>

                        <div class="portfolio-info">
                            <h3>{{ $project->judul }}</h3>
                            <p>{{ $project->description }}</p>

                            @if(!empty($techStack))
                                <div class="portfolio-tech">
                                    @foreach($techStack as $tech)
                                        <span>{{ trim($tech) }}</span>
                                    @endforeach
                                </div>
                            @endif

                            <div class="portfolio-links">
                                <a href="{{ $project->project_url ?: 'https://github.com/syabil038' }}" target="_blank" rel="noopener" class="github-link">
                                    <i class="fab fa-github"></i> Lihat Repository
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        @endif
        {{-- ================= END PORTFOLIO ================= --}}
    </div>
</section>


<!-- ================= CONTACT ================= -->
<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>Kontak</h2>
            <p>Terhubung langsung dengan saya melalui platform berikut.</p>
        </div>

        <div class="contact-grid">
            <a href="mailto:sabillataawan123@gmail.com" class="contact-card">
                <i class="fas fa-envelope"></i>
                <div>
                    <strong>Email</strong>
                    <span>syabilaw712@gmail.com</span>
                </div>
            </a>

            <a href="https://wa.me/6285247014588" target="_blank" rel="noopener" class="contact-card">
                <i class="fab fa-whatsapp"></i>
                <div>
                    <strong>WhatsApp</strong>
                    <span>+62 852 4701 4588</span>
                </div>
            </a>

            <a href="https://github.com/syabil038 target="_blank" rel="noopener" class="contact-card">
                <i class="fab fa-github"></i>
                <div>
                    <strong>GitHub</strong>
                    <span>syabil038</span>
                </div>
            </a>

            <a href="https://www.instagram.com/sevenz7z._stz_/" target="_blank" rel="noopener" class="contact-card">
                <i class="fab fa-instagram"></i>
                <div>
                    <strong>Instagram</strong>
                    <span>@sevenz7z._stz_</span>
                </div>
            </a>

            <a href="https://www.tiktok.com/@abilaaaxawan" target="_blank" rel="noopener" class="contact-card">
                <i class="fab fa-tiktok"></i>
                <div>
                    <strong>TikTok</strong>
                    <span>@abilaaaxawan</span>
                </div>
            </a>
        </div>
    </div>
</section>


<!-- ================= FOOTER ================= -->
<footer>
    <div class="container">
        <div class="copyright">
            <p>&copy; 2025</p>
        </div>
    </div>
</footer>


<script>
document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
    document.querySelector('.nav-links').classList.toggle('active');
});

document.querySelectorAll('.filter-btn').forEach(function(button) {
    button.addEventListener('click', function() {
        document.querySelectorAll('.filter-btn').forEach(function(item) {
            item.classList.remove('active');
        });

        button.classList.add('active');

        const filter = button.getAttribute('data-filter');

        document.querySelectorAll('.portfolio-item').forEach(function(item) {
            const category = item.getAttribute('data-category') || '';
            const isVisible = filter === 'all' || category.includes(filter);
            item.style.display = isVisible ? 'block' : 'none';
        });
    });
});
</script>

@endsection
