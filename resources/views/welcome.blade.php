<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KajiFilm</title>
    <link rel="icon" href="img/HeadWolf.png" type="image/png" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <!-- FeatherIcons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- MyStyle -->
    <link rel="stylesheet" href="css/style.css" />
    <style>
        :root {
            --primary: #d21500;
            --bg: #31003e;
        }

        * {
            margin: 0;
            padding: 0;

            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Poppins", sans-serif;
            background-color: var(--bg);
            color: white;
        }

        /*Navbar*/
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.4rem 7%;
            background-color: rgba(123, 123, 123, 0.238);
            border-bottom: 1px solid #524c4c;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;

            z-index: 999999;
        }

        .navbar .navbar-logo {
            font-size: 2rem;
            font-weight: 700;
            color: aliceblue;
            font-style: italic;
        }

        .navbar .navbar-logo span {
            color: var(--primary);
        }

        .navbar .navbar-nav a {
            color: white;
            display: inline-block;
            font-size: 1.2rem;
            margin: 0 1rem;
        }

        .navbar .navbar-nav a:hover {
            color: var(--primary);
        }

        .navbar .navbar-nav a::after {
            content: "";
            display: block;
            padding-bottom: 0.5rem;
            border-bottom: 0.1rem solid var(--primary);
            transform: scaleX(0);
        }

        .navbar .navbar-nav a:hover::after {
            transform: scaleX(0.5);
            transition: 0.2s linear;
        }

        .navbar .navbar-extra a {
            color: white;
            margin: 0 0.5rem;
        }

        .navbar .navbar-extra a:hover {
            color: var(--primary);
        }

        #menu {
            display: none;
        }

        /*HeroPageSection*/
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background-image: url("../assets/header-bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .hero::after {
            content: "";
            display: block;
            position: absolute;
            width: 100%;
            height: 20%;
            bottom: 0;
            background: linear-gradient(0deg,
                    rgba(1, 1, 3, 0) 10%,
                    rgba(255, 255, 255, 0) 60%);
        }

        .hero .content {
            padding: 1.4rem 7%;
            max-width: 60rem;
        }

        .hero .content h1 {
            font-size: 3em;
            color: white;
            text-shadow: 2px 2px 4px rgba(1, 1, 3, 0.5);
            line-height: 1.2;
        }

        .hero .content h1 span {
            color: var(--primary);
        }

        .hero .content p {
            font-size: 1.6rem;
            margin-top: 1rem;
            line-height: 1.4;
            font-weight: 200;
            text-shadow: 2px 2px 4px rgba(1, 1, 3, 0.5);
        }

        .hero .content .cta {
            margin-top: 1rem;
            display: inline-block;
            padding: 1rem 3rem;
            font-size: 1.4rem;
            color: white;
            background-color: var(--primary);
            border-radius: 0.8px;
            box-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
        }

        /*AboutSection*/
        .about,
        .service,
        .kontak {
            padding: 8rem 7% 1.4rem;
        }

        .about h2,
        .service h2,
        .kontak h2 {
            text-align: center;
            font-size: 2.6rem;
            margin-bottom: 3rem;
        }

        .about h2 span,
        .service h2 span,
        .kontak h2 span {
            color: var(--primary);
        }

        .about .row {
            display: flex;
        }

        .about .row .about-img {
            flex: 1 1 45rem;
        }

        .about .row .about-img img {
            width: 100%;
        }

        .about .row .content {
            flex: 1 1 35rem;
            padding: 0 1rem;
        }

        .about .row .content h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .about .row .content p {
            margin-bottom: 0.8rem;
            font-size: 1.4rem;
            font-weight: 300;
            line-height: 1.6;
            text-align: justify;
        }

        /*ServiceSection*/
        .service h2 {
            margin-bottom: 1rem;
        }

        .service p {
            text-align: center;
            max-width: 30rem;
            margin: auto;
            font-size: 1.4rem;
            font-weight: 300;
            line-height: 1.6;
        }

        .service .row {
            display: flex;
            flex-wrap: wrap;
            margin-top: 5rem;
            justify-content: center;
        }

        .service .row .service-card {
            text-align: center;
            padding-bottom: 2rem;
            margin: 4rem;
        }

        .service .row .service-card img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
        }

        .service .row .service-card .service-card-title {
            margin-top: 1.5rem auto 0.5rem;
        }

        /*Kontak Section*/
        .kontak .row {
            display: flex;
            margin-top: 2rem;
            background-color: #93939345;
            border-radius: 20px;
        }

        .kontak h2 {
            margin-bottom: 0.6rem;
        }

        .kontak p {
            text-align: center;
            max-width: 30rem;
            margin: auto;
            font-size: 1.4rem;
            font-weight: 300;
            line-height: 1.6;
        }

        .kontak .row .map {
            flex: 1 1 45rem;
            width: 100%;
            object-fit: cover;
            border-radius: 20px;
        }

        .kontak .row form {
            flex: 1 1 45rem;
            padding: 5rem 2rem;
            text-align: center;
        }

        .kontak .row form .input-group {
            display: flex;
            align-items: center;
            margin-top: 2rem;
            background-color: var(--bg);
            border: 1px solid #eee;
            padding-left: 2rem;
        }

        .kontak .row form .input-group input {
            width: 100%;
            padding: 2rem;
            font-size: 1.4rem;
            background: none;
            color: white;
        }

        .kontak .row form .btn {
            margin-top: 1rem;
            display: inline-block;
            padding: 1rem 3rem;
            font-size: 1.4rem;
            color: white;
            background-color: #25d366;
            border-radius: 0.8px;
            box-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
            cursor: pointer;
        }

        /*Footer Section*/
        footer {
            background-color: #ab6700;
            text-align: center;
            padding: 1rem 0 3rem;
            margin-top: 3rem;
        }

        footer .socials {
            padding: 1rem 0;
        }

        footer .socials a {
            color: white;
            margin: 1rem;
        }

        footer .socials a:hover,
        footer .links a:hover {
            color: #6e6e6e;
        }

        footer .links {
            margin-bottom: 1.5rem;
        }

        footer .links a {
            color: white;
            padding: 0.8rem 1;
            margin: 1rem;
            font-size: 1.3rem;
        }

        footer .credit {
            color: white;
            font-size: 1.1rem;
        }

        /*Media Queries*/
        /*Laptop*/
        @media (max-width: 1366px) {
            html {
                font-size: 75%;
            }
        }

        /*Tablet*/
        @media (max-width: 758px) {
            html {
                font-size: 62.5%;
            }

            #menu {
                display: inline-block;
            }

            .navbar .navbar-nav {
                position: absolute;
                top: 100%;
                right: -100%;
                background-color: var(--bg);
                width: 30rem;
                height: 100vh;
                transition: 0.3s;
            }

            .navbar .navbar-nav.active {
                right: 0;
            }

            .navbar .navbar-nav a {
                color: white;
                display: block;
                margin: 1.5rem;
                padding: 0.5rem;
                font-size: 2rem;
            }

            .navbar .navbar-nav a::after {
                transform-origin: 0 0;
            }

            .navbar .navbar-nav a:hover::after {
                transform: scaleX(0.2);
            }

            .about .row {
                flex-wrap: wrap;
            }

            .about .row .about-img img {
                height: 24rem;
                object-fit: cover;
                object-position: center;
            }

            .about .row .content {
                padding: 0;
            }

            .about .row .content h3 {
                margin-top: 1rem;
                font-size: 2rem;
            }

            .service p {
                font-size: 1.2rem;
            }

            .kontak .row {
                flex-wrap: wrap;
            }

            .kontak .row .map {
                height: 30rem;
            }

            .kontak .row form {
                padding-top: 0;
            }
        }

        /*Mobile Phone*/
        @media (max-width: 450px) {
            html {
                font-size: 55%;
            }
        }
    </style>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar">
        <a href="#" class="navbar-logo">WOLF <span>KILLER</span> </a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#service">Service</a>
            <a href="#kontak">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!--NavbarEnd-->

    <!--WelcomeHeroPage-->
    <section class="hero" id="home">
        <main class="content">
            <h1>PT WOLF<span> KILLER</span></h1>
            <p>
                Selamat datang di platform Wolf Killer. Segala kebutuhan anda mengenai
                jasa pembuatan website, hosting, portofolio akan kami sikat dengan
                inovatif dan apik!
            </p>
            <a href="{{ route('logout') }}" class="cta">Booking Now!</a> <span> OR </span>
            <a href="{{ route('login-user') }}" class="cta">Booking Now!</a>
        </main>
    </section>
    <!--WelcomeHeroPageEnd-->

    <!--TentangKamiSection-->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="../assets/fotob3_1.png" alt="Tentang Kami" />
            </div>
            <div class="content">
                <h3>Lulusan Terbaik S1 Teknik Informatika !</h3>
                <p>
                    PT Wolf Killer adalah lebih dari sekadar penyedia website. Kami
                    adalah arsitek digital yang memahami bahwa kehadiran online bukan
                    lagi sekadar pilihan, melainkan sebuah kebutuhan mutlak bagi setiap
                    bisnis untuk bersaing di era digital ini. Dari desain web yang
                    menarik hingga pengembangan aplikasi yang inovatif, PT Wolf Killer
                    memadukan kreativitas dan keahlian teknis untuk memberikan solusi
                    yang memenuhi kebutuhan unik setiap klien kami.
                </p>
            </div>
        </div>
    </section>
    <!--TentangKamiSectionEnd-->

    <!--ServiceSectionStart-->
    <section id="service" class="service">
        <h2>Service<span> Kami</span></h2>
        <p>Berikut ini adalah beberapa layanan Jasa Yang Kami Sediakan :</p>
        <div class="row">
            <div class="service-card">
                <img src="../assets/Comp.png" alt="company" class="service-card-image" />
                <h3 class="service-card-title">Website Perusahaan</h3>
                <p class="service-card-price">
                    Menyediakan pembuatan website untuk perusahaan anda
                </p>
            </div>
            <div class="service-card">
                <img src="../assets/Hosting_G (1).png" alt="company" class="service-card-image" />
                <h3 class="service-card-title">Keperluan Hosting</h3>
                <p class="service-card-price">
                    Menyediakan Jual Beli Web Hosting dengan harga terjangkau
                </p>
            </div>
            <div class="service-card">
                <img src="../assets/Web_logo_gacir (1).png" alt="company" class="service-card-image" />
                <h3 class="service-card-title">Keamanan Website</h3>
                <p class="service-card-price">
                    Kami Menyediakan Jasa Keamanan Website
                </p>
            </div>
            <div class="service-card">
                <img src="../assets/Portfolio (1).png" alt="company" class="service-card-image" />
                <h3 class="service-card-title">Jasa Membuat Portofolio</h3>
                <p class="service-card-price">
                    Menyediakan pembuatan portofolio sesuai kebutuhan pengguna
                </p>
            </div>
            <div class="service-card">
                <img src="../assets/Ecom.png" alt="company" class="service-card-image" />
                <h3 class="service-card-title">Membuat Aplikasi E-commerce</h3>
                <p class="service-card-price">
                    Menyediakan Pembuatan Aplikasi E-commerce
                </p>
            </div>
            <div class="service-card">
                <img src="{{ asset('assets/Web_logo (1).png') }}" alt="company" class="service-card-image" />
                <h3 class="service-card-title">Jasa Pembuatan Website Semantik</h3>
                <p class="service-card-price">
                    Menyediakann kebutuhan website semantik anda
                </p>
            </div>
        </div>
    </section>
    <!--ServiceSectionEnd-->

    <!--KontakSectionStart-->
    <section id="kontak" class="kontak">
        <h2>Service<span> Kami</span></h2>
        <p>
            Berikut ini adalah Alamat kami, segera kirimkan pesan anda via WhatsApp:
        </p>
        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63459.10398715519!2d106.69212323391098!3d-6.2381421322365105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f0a2e25f3879%3A0x37939de0ff8a62b3!2sKec.%20Larangan%2C%20Kota%20Tangerang%2C%20Banten!5e0!3m2!1sid!2sid!4v1714970166984!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
            <form action="#" onsubmit="MessageToWhatsapp()">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" id="nama" placeholder="Masukan Nama Anda" />
                </div>
                <div class="input-group">
                    <i data-feather="message-square"></i>
                    <input type="text" id="pesan" placeholder="Masukan Pesan Anda" />
                </div>
                <button type="submit" class="btn">
                    <i data-feather="send"></i> <i>Kirim Pesan</i>
                </button>
            </form>
        </div>
    </section>
    <!--KontakSectionEnd-->

    <!--FooterStart-->
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="facebook"></i></a>
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#service">Service</a>
            <a href="#kontak">Kontak</a>
        </div>
        <div class="credit">
            <p>
                Kelompok 3 => Bimo Bagas Riyanto, Barito Surya Ramadhani, Muhammad
                Rizky Samuel
            </p>
        </div>
    </footer>

    <!--FooterEnd-->

    <!-- FeatherIcons -->
    <script>
        feather.replace();
    </script>

    <!--My Js-->
    <script>
        //Toggle kelas aktif
        const navbarNav = document.querySelector(".navbar-nav");

        //ketika icon menu di klik
        document.querySelector("#menu").onclick = () => {
            navbarNav.classList.toggle("active");
        };

        //klik di mana saja untuk menghilangkan navMenu

        const hilangNavMenu = document.querySelector("#menu");
        document.addEventListener("click", function(e) {
            if (!hilangNavMenu.contains(e.target) && !navbarNav.contains(e.target)) {
                navbarNav.classList.remove("active");
            }
        });

        function MessageToWhatsapp() {
            const urlToWhatsapp = `https://wa.me/6285775242278?text=Halo nama saya, ${nama.value}, ${pesan.value}`;

            window.open(urlToWhatsapp, "_blank");
        }
    </script>
</body>

</html>
