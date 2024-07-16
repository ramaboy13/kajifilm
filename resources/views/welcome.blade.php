<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KajiFilm</title>
    <link rel="icon" href="../assets/LOGO.png" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <style>
        body {
            background-color: #dcdcdc;
        }

        .navbar-nav .nav-item .nav-link {
            margin-right: 1rem;
        }

        .navbar-nav .nav-item:last-child .btn {
            margin-left: auto;
        }

        .btn-whatsapp {
            background-color: green;
            /* Warna latar belakang hijau */
            color: white;
            /* Warna teks merah */
            border: none;
            /* Menghilangkan border */
            padding: 10px 20px;
            /* Padding */
            cursor: pointer;
            /* Cursor pointer saat hover */
        }
    </style>
</head>

<body>
    <!--Navbar-->
    <section class="py-5">
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#home">
                    <img alt="Free Frontend Logo" class="img-fluid " src="../assets/LOGO.png" width="80">
                </a>
                <button aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler" data-bs-target="#navbarSupportedContent1" data-bs-toggle="collapse"
                    type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                    <ul class="navbar-nav ms-auto my-2 my-md-0">
                        <li class="nav-item ms-lg-4">
                            <a class="nav-link" href="#home">Beranda</a>
                        </li>
                        <li class="nav-item ms-lg-4">
                            <a class="nav-link" href="#features">Fitur</a>
                        </li>
                        <li class="nav-item ms-lg-4">
                            <a class="nav-link" href="#team">Tim Kami</a>
                        </li>
                        <li class="nav-item ms-lg-4">
                            <a class="nav-link" href="#contactus">Kontak</a>
                        </li>
                    </ul>
                    <a class="btn btn-primary ms-lg-4" href="{{ route('login-user') }}">Sign in</a>
                </div>
            </div>
        </nav>
    </section>
    <!--NavbarEnd-->

    <!--WelcomeHeroPage-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="pe-lg-3">
                        <h1 class="display-3 fw-bold mb-4">Mengulas film dari berbagai sudut<span class="text-primary">
                                KajiFilm</span></h1>
                        <p class="lead mb-4">Bandingkan film favorit Anda berdasarkan rating, genre, ulasan penonton.
                            Dapatkan rekomendasi film yang sesuai dengan selera Anda.</p>
                    </div>
                    <div class="d-grid d-sm-flex">
                        <a class="btn btn-lg btn-primary me-2 mb-3 mb-sm-0" href="{{ route('form-register') }}">Sign
                            up</a>
                    </div>
                </div>
                <div class="col-lg-6"><img alt="Image Description" class="img-fluid" src="../assets/LOGO.png"></div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <h2 class="display-5 fw-bold">14K+</h2>
                    <p>Pecinta film telah tergabung di platform kami</p>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <h2 class="display-5 fw-bold">4 Tahun</h2>
                    <p>Pengalaman menaungi para pecinta film</p>
                </div>
                <div class="col-sm-4">
                    <h2 class="display-5 fw-bold">100 +</h2>
                    <p>Detail video untuk anda baca sinopsis</p>
                </div>
            </div>
        </div>
    </section>
    <!--WelcomeHeroPageEnd-->


    <!--FiturStart-->
    <section class="py-5" id="features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <div class="pe-lg-5"><img alt="" class="img-fluid rounded" src="../assets/kumpul2.jpg">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ps-lg-5 mt-4 mt-lg-0">
                        <span class="text-muted">Fitur</span>
                        <h2 class="display-6 fw-bold">Fitur KajiFilm</h2>
                        <p>Terdapat empat fitur utama dari website KajiFilm</p>
                        <div class="row">
                            <div class="col-sm-6 text-center">
                                <div class="py-4">
                                    <div class="text-muted">
                                        <svg class="bi bi-aspect-ratio" fill="currentColor" height="48"
                                            viewbox="0 0 16 16" width="48"
                                            xmlns="https://cdn.discordapp.com/attachments/817077974012526632/1261661176379478086/image.png?ex=6693c508&is=66927388&hm=223a9d1ecd567b1a208d331f274c0c6ae8ca47aaa72043e5c4f6061f6c4e2fc0&">
                                            <path
                                                d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z">
                                            </path>
                                            <path
                                                d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h5 class="mt-3">Detail Film</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 text-center">
                                <div class="py-4">
                                    <div class="text-muted">
                                        <svg class="bi bi-emoji-wink" fill="currentColor" height="48"
                                            viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                            </path>
                                            <path
                                                d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm1.757-.437a.5.5 0 0 1 .68.194.934.934 0 0 0 .813.493c.339 0 .645-.19.813-.493a.5.5 0 1 1 .874.486A1.934 1.934 0 0 1 10.25 7.75c-.73 0-1.356-.412-1.687-1.007a.5.5 0 0 1 .194-.68z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h5 class="mt-3">Forum Diskusi</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 text-center">
                                <div class="py-4">
                                    <div class="text-muted">
                                        <svg class="bi bi-layout-text-window-reverse" fill="currentColor"
                                            height="48" viewbox="0 0 16 16" width="48"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z">
                                            </path>
                                            <path
                                                d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h5 class="mt-3">Membandingkan antara film</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 text-center">
                                <div class="py-4">
                                    <div class="text-muted">
                                        <svg class="bi bi-clipboard-check" fill="currentColor" height="48"
                                            viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"
                                                fill-rule="evenodd"></path>
                                            <path
                                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z">
                                            </path>
                                            <path
                                                d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h5 class="mt-3">Ulasan Film</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--FiturEnd-->

    <!--TEAM Kami-->
    <section class="py-5 bg-light" id="team">
        <div class="container">
            <div class="row justify-content-center text-center mb-2 mb-lg-4">
                <div class="col-12 col-lg-8 col-xxl-7 text-center mx-auto">
                    <span class="text-muted">Tim Kami</span>
                    <h2 class="display-5 fw-bold">Bertemu Tim Webside</h2>
                    <p class="lead">Di balik setiap keberhasilan kami, terdapat tim yang solid dan berdedikasi. Kami
                        adalah sekelompok profesional dengan keahlian, berkomitmen untuk menciptakan solusi
                        inovatif dan memberikan layanan terbaik. Bersama kami berusaha mencapai tujuan yang lebih besar
                        dan memberikan dampak positif di setiap proyek.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center border-0 mb-3">
                        <div class="card-body p-3">
                            <div class="mb-4 mx-lg-3 mx-xxl-5"><img class="img-fluid rounded-circle"
                                    src="../assets/fotosamuel.png"></div>
                            <h5 class="fw-bold">Muhammad Rizky Samuel</h5>
                            <div class="text-muted">
                                Sebagai Project Manager
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <a class="btn btn-sm me-2" href=""><svg class="bi bi-facebook"
                                        fill="currentColor" height="16" viewbox="0 0 16 16" width="16"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                        </path>
                                    </svg></a> <a class="btn btn-sm me-2" href=""><svg class="bi bi-twitter"
                                        fill="currentColor" height="16" viewbox="0 0 16 16" width="16"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                        </path>
                                    </svg></a> <a class="btn btn-sm"
                                    href="https://www.linkedin.com/in/muhammad-rizky-samuel-5a5687269/"><svg
                                        class="bi bi-linkedin" fill="currentColor" height="16"
                                        viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z">
                                        </path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center border-0 mb-3">
                        <div class="card-body p-3">
                            <div class="mb-4 mx-lg-3 mx-xxl-5"><img class="img-fluid rounded-circle"
                                    src="../assets/fotorama.png"></div>
                            <h5 class="fw-bold">Barito Surya Ramadhani</h5>
                            <div class="text-muted">
                                Sebagai UI/UX Designer
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <a class="btn btn-sm me-2" href="https://www.facebook.com/rama.buoys/"><svg
                                        class="bi bi-facebook" fill="currentColor" height="16"
                                        viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                        </path>
                                    </svg></a> <a class="btn btn-sm me-2" href=""><svg class="bi bi-twitter"
                                        fill="currentColor" height="16" viewbox="0 0 16 16" width="16"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                        </path>
                                    </svg></a> <a class="btn btn-sm"
                                    href="https://www.linkedin.com/in/barito-surya-ramadhani-7a4942257/"><svg
                                        class="bi bi-linkedin" fill="currentColor" height="16"
                                        viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z">
                                        </path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center border-0 mb-3">
                        <div class="card-body p-3">
                            <div class="mb-4 mx-lg-3 mx-xxl-5"><img class="img-fluid rounded-circle"
                                    src="../assets/fotobimo.png"></div>
                            <h5 class="fw-bold">Bimo Bagas Riyanto</h5>
                            <div class="text-muted">
                                Sebagai Web Designer
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <a class="btn btn-sm me-2" href=""><svg class="bi bi-facebook"
                                        fill="currentColor" height="16" viewbox="0 0 16 16" width="16"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                        </path>
                                    </svg></a> <a class="btn btn-sm me-2" href=""><svg class="bi bi-twitter"
                                        fill="currentColor" height="16" viewbox="0 0 16 16" width="16"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                        </path>
                                    </svg></a> <a class="btn btn-sm"
                                    href="https://www.linkedin.com/in/bimo-bagas-riyanto-752a64268/"><svg
                                        class="bi bi-linkedin" fill="currentColor" height="16"
                                        viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z">
                                        </path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--TentangKamiSectionEnd-->

    <!--KontakSectionStart-->
    <section class="py-5" id="contactus">
        <div class="container">
            <div class="row justify-content-center text-center mb-3 mb-lg-5">
                <div class="col-lg-8 col-xxl-7">
                    <span class="text-muted">Mari Berdiskusi</span>
                    <h2 class="display-5 fw-bold mb-3">Kontak Kami</h2>
                    <p class="lead">Kami ingin mendengar dari Anda! Jika Anda memiliki pertanyaan, saran, atau ingin
                        mendiskusikan proyek, jangan ragu untuk menghubungi kami. Tim kami siap membantu dan akan segera
                        merespons pesan Anda. Mari kita jalin komunikasi dan bersama-sama mewujudkan ide-ide Anda!

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form action="#" onsubmit="MessageToWhatsapp()">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <input class="form-control bg-light" id="nama" placeholder="Nama Lengkap"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <input class="form-control bg-light" id="nilai" placeholder="Rate 1 -> 10"
                                        type="number">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <textarea class="form-control bg-light" placeholder="Pesanmu" rows="5" id="pesan"></textarea>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-whatsapp">
                                        <i class="fab fa-whatsapp"></i> WhatsApp
                                    </button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="mt-4 mt-md-0"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31731.26715588347!2d106.70019507408145!3d-6.209743577029776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f71f5a41c197%3A0x628259f9e8d6d7b4!2sUniversitas%20Mercu%20Buana!5e0!3m2!1sid!2sid!4v1720871172080!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe></div>

                </div>
            </div>
        </div>
    </section>
    <!--KontakSectionEnd-->

    <!--FooterStart-->

    <footer class="py-4 bg-light">
        <div class="container">
            <div class="row align-items-center py-4">
                <div class="col-12 col-lg-3 text-center text-lg-start"><img alt="Free Frontend Logo"
                        class="img-fluid mb-3" height="" src="../assets/LOGO.png" width="100"></div>
                <div class="col-12 col-lg-6 navbar-expand text-center">
                    <ul class="list-unstyled d-block d-lg-flex justify-content-center mb-3 mb-lg-0">
                        <li class="nav-item">
                            <a class="text-dark text-decoration-none me-lg-3" href="#home">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark text-decoration-none me-lg-3" href="#features">Fitur</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark text-decoration-none me-lg-3" href="#team">Tim Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark text-decoration-none" href="#contactus">Kontak</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3 text-center text-lg-end">
                    <a class="me-2" href=""><svg class="bi bi-pinterest text-primary" fill="currentColor"
                            height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z">
                            </path>
                        </svg></a> <a class="me-2" href=""><svg class="bi bi-twitter text-primary"
                            fill="currentColor" height="16" viewbox="0 0 16 16" width="16"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                            </path>
                        </svg></a> <a class="me-2" href=""><svg class="bi bi-facebook text-primary"
                            fill="currentColor" height="16" viewbox="0 0 16 16" width="16"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                            </path>
                        </svg></a>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-12 text-center small text-muted">
                    © 2024 KajiFilm.dev. All rights reserved. <a class="d-block d-lg-inline text-muted mx-1"
                        href="">Privacy Policy</a> <a class="d-block d-lg-inline text-muted mx-1"
                        href="">Terms of
                        Service</a>
                </div>
            </div>
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
            const urlToWhatsapp =
                `https://wa.me/+628997626200?text=Halo nama saya, ${nama.value}, saya kasih nilai ${nilai.value} dari 10, ${pesan.value}`;

            window.open(urlToWhatsapp, "_blank");
        }
    </script>
</body>

</html>
