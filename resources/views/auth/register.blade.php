<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('template/img/favicon.png') }}">
    <title>
        Soft UI Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('template/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('template/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
    <style>
      label{
        color: #434849
      }
    </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
    <section class="min-vh-90" mb-2>
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('{{ asset('template/img/lobby.jpg') }}');">
            <span class="mask opacity-3" style="background-color: #79DAE8"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="mb-0" style="color: #E8F9FD">Welcome!</h1>
                        <p class="text-lead mb-0" style="color: #E8F9FD">Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl- col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0 mb-5">
                        <div class="card-body">
                            <form role="form text-left" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-2">
                                    <label>Name</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-2 form-group">
                                            <label>Email</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-2 form-group">
                                            <label>Telp</label>
                                            <input id="telp" type="number"
                                                class="form-control @error('telp') is-invalid @enderror" name="telp"
                                                value="{{ old('telp') }}" required autocomplete="telp">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 form-group">
                                            <label>Password</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 form-group">
                                            <label>Confirm Password</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn w-100 my-2 mb-2" style="background-color: #79DAE8; color: 
                                    #E8F9FD">Sign up</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route('login') }}"
                                        class="font-weight-bolder" style="color: #79DAE8">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--   Core JS Files   -->
    <script src="{{ asset('template/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('template/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>
</body>

</html>
