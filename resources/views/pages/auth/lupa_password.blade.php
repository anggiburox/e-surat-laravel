<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>E-Surat</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="{{asset('assets/css/style.css') }}" rel="stylesheet" />

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Forgot Password</h4>
                                    <form action="auth/lupa_password/updatelupapassword" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Username Lama</strong></label>
                                            <input type="text" class="form-control" name="username" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password Baru</strong></label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                            </div>
                                            <div class="form-group">
                                                <a href="/">Login</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{asset('assets/js/quixnav-init.js') }}"></script>
    <script src="{{asset('assets/js/custom.min.js') }}"></script>

</body>

</html>