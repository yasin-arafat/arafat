<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <title>Sign In – Swipe</title>
        <meta name="description" content="#">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('public/admin/assets/dist/css/lib/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
        <!-- Swipe core CSS -->
        <link href="{{ asset('public/admin/assets/dist/css/swipe.min.css') }}" type="text/css" rel="stylesheet">
        <!-- Favicon -->
        <link href="{{ asset('public/admin/assets/dist/css/lib/dist/img/favicon.png') }}" type="image/png" rel="icon">
    </head>
    <body class="start">
        <main>
            <div class="layout">
                <!-- Start of Sign In -->
                <div class="main order-md-1">
                    <div class="start">
                        <div class="container">
                            <div class="col-md-12">
                                <div class="content">
                                    <h1>Sign in to Swipe</h1>
                                    <div class="third-party">
                                        <button class="btn item bg-blue">
                                            <i class="material-icons">pages</i>
                                        </button>
                                        <button class="btn item bg-teal">
                                            <i class="material-icons">party_mode</i>
                                        </button>
                                        <button class="btn item bg-purple">
                                            <i class="material-icons">whatshot</i>
                                        </button>
                                    </div>
                                    <p>or use your email account:</p>
                                    <form method="POST" action="{{ route('login') }}">
                                         @csrf
                                        <div class="form-group">
                                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address" >
                                            @error('email')
                                              <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                            <button class="btn icon"><i class="material-icons">mail_outline</i></button>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" >
                                             @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror
                                            <button class="btn icon"><i class="material-icons">lock_outline</i></button>
                                        </div>
                                        <div class="checkbox">
                                         <label>
                                             <input type="checkbox"> Remember me
                                         </label>
                                        </div>
                                        <button type="submit" class="btn button">Sign In</button>
                                        <label class="pull-right">
                                         @if (Route::has('password.request'))
                                           <a class="btn btn-link" href="{{ route('password.request') }}">
                                             {{ __('Forgot Your Password?') }}
                                           </a>
                                         @endif
                                        <div class="callout">
                                            <span>Don't have account? <a href="sign-up.html">Create Account</a></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Sign In -->
                <!-- Start of Sidebar -->
                <div class="aside order-md-2">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="preference">
                                <h2>Hello, Friend!</h2>
                                <p>Enter your personal details and start your journey with Swipe today.</p>
                                <a href="{{route('register')}}" class="btn button">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Sidebar -->
            </div> <!-- Layout -->
        </main>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{ asset('public/admin/assets/dist/js/jquery-3.3.1.slim.min.js') }}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="{{ asset('public/admin/assets/dist/js/vendor/jquery-slim.min.js') }}"><\/script>')</script>
        <script src="{{ asset('public/admin/assets/dist/js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('public/admin/assets/dist/js/bootstrap.min.js') }}"></script>
    </body>

</html>