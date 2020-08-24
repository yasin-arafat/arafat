<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <title>Sign Up – Swipe</title>
        <meta name="description" content="#">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('public/admin/assets/dist/css/lib/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
        <!-- Swipe core CSS -->
        <link href="{{ asset('public/admin/assets/dist/css/swipe.min.css') }}" type="text/css" rel="stylesheet">
        <!-- Favicon -->
        <link href="{{ asset('public/admin/assets/dist/css/lib/bootstrap.min.css') }}" type="image/png" rel="icon">
    </head>
    <body class="start">
        <main>
            <div class="layout">
                <!-- Start of Sign Up -->
                <div class="main order-md-2">
                    <div class="start">
                        <div class="container">
                            <div class="col-md-12">
                                <div class="content">
                                    <h1>Create Account</h1>
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
                                    <p>or use your email for registration:</p>
                                    <form class="signup" method="POST" action="{{ route('register') }}">
                                        {{ csrf_field() }}
                                        <div class="form-parent">
                                            <div class="form-group">
                                                <input type="text" id="name"  class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Username" >
                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                                <button class="btn icon"><i class="material-icons">person_outline</i></button>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" required>
                                                @if ($errors->has('email'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                 @endif
                                                <button class="btn icon"><i class="material-icons">mail_outline</i></button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                              @if ($errors->has('password'))
                                                <span class="help-block">
                                                  <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                              @endif
                                            <button class="btn icon"><i class="material-icons">lock_outline</i></button>
                                        </div>
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"placeholder="Confirm Password" required>
                                             <button class="btn icon"><i class="material-icons">lock_outline</i></button>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox"> Agree the terms and policy
                                            </label>
                                        </div>
                                        <button type="submit" class="btn button">Sign Up</button>
                                        <div class="callout">
                                            <span>Already a member? <a href="sign-in.html">Sign In</a></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Sign Up -->
                <!-- Start of Sidebar -->
                <div class="aside order-md-1">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="preference">
                                <h2>Welcome Back!</h2>
                                <p>To keep connected with your friends please login with your personal info.</p>
                                <a href="{{route('login')}}" class="btn button">Sign In</a>
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