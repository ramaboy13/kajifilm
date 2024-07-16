<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Kajifilm' }}</title>
    <link rel="icon" href="../../assets/LOGO.png" type="image/png" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #201658;
        }

        .login,
        .image {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('./../assets/lg.jpg');
            background-size: cover;
            background-position: center center;
            border-bottom-right-radius: 40px;
            border-top-right-radius: 40px;
        }

        .social-login a {
            width: 100%;
            margin-bottom: 10px;
            color: #fff;
            border-radius: 10px;
        }

        .social-login .facebook {
            background-color: #3b5998;
        }

        .social-login .apple {
            background-color: #000000;
        }

        .social-login .google {
            background-color: #db4437;
        }

        .signin {
            border-radius: 10px;
        }

        .formku {
            border-radius: 10px;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center w-full">

    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image"></div>

            <!-- The content half -->
            <div class="col-md-6">
                <div class="login d-flex align-items-center py-5">

                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-5 text-center text-white ">Welcome to <i
                                        class="font-bold">KAJIFILM</i>
                                </h3>
                                <p class="text-muted mb-4 text-center">Silahkan Login untuk mencoba fitur platform kami
                                </p>
                                <!-- Ini code untuk alert kegagalan login -->
                                @if ($errors->any())
                                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                        role="alert">
                                        <strong class="font-bold">Upsss!</strong>
                                        @foreach ($errors->all() as $item)
                                            <span class="block sm:inline">{{ $item }}</span>
                                        @endforeach
                                    </div>
                                @endif
                                <!-- Ini code untuk form login -->
                                <form action="{{ route('login-proses-user') }}" method="POST">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                                            placeholder="Email address" required="" autofocus=""
                                            class="formku form-control border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="password" id="password" name="password" placeholder="Password"
                                            required=""
                                            class="formku form-control border-0 shadow-sm px-4 text-primary">
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label text-white">Remember
                                            password</label>
                                    </div>
                                    <button type="submit"
                                        class="btn signin btn-primary btn-block text-uppercase mb-2 shadow-sm">Sign
                                        in</button>
                                    <span class="d-block text-center my-4 text-muted">——————————— or
                                        ———————————</span>
                                    <div class="social-login">
                                        <a href="#"
                                            class="facebook btn d-flex justify-content-center align-items-center shadow-sm">
                                            <i class="fab fa-facebook-f mr-3"></i> Sign in with Facebook
                                        </a>
                                        <a href="#"
                                            class="apple btn d-flex justify-content-center align-items-center shadow-sm">
                                            <i class="fab fa-apple mr-3"></i> Sign in with Apple
                                        </a>
                                        <a href="#"
                                            class="google btn d-flex justify-content-center align-items-center shadow-sm">
                                            <i class="fab fa-google mr-3"></i> Sign in with Google
                                        </a>
                                    </div>
                                    <div class="text-center text-white d-flex justify-content-between mt-4">
                                        <p>Belum punya account? <a href="{{ route('form-register') }}"
                                                class="font-italic font-bold ">
                                                <u>Sign Up Now</u></a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->

        </div>
    </div>

</body>

</html>
