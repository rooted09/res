<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="{{ asset('js/main.js') }}"></script>
</head>

<body>
    <section>
        <div class="container">
            <div class="user sgininbx">
                <div class="imagBox"><img class="img1" src="{{ asset('img/nah.png') }}" alt="" srcset=""></div>
                <div class="formBox">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h2>Sign in</h2>
                        <input id="email" type="email"  class="input  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        <input  id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                                <p style="margin-top: 17px">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </p>
{{--
                                <label style=" margin-left: 44% ; font-size: 12px ; position: absolute; margin-top: -34px">
                                    @if (Route::has('password.request'))
                                        <a class="link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </label> --}}

                        <button class="submit " type="submit" value="Login" style="max-width:100%">
                            {{ __('Login') }}
                        </button>

                        <p>Dont have an account ? <a class="link" onclick=" tg();">sign up</a></p>
                    </form>
                </div>
                <div class="user sginUpbx">

                    <div class="formBox">
                        <form method="POST" action="{{ route('register') }}" id="from" >
                            <h2>Create an account</h2>
                                @csrf
                                    <input id="name" type="text" class="input @error('user') is-invalid @enderror" name="user" value="{{ old('user') }}" required autocomplete="user" autofocus placeholder="User">

                                    @error('user')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror


                                    <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="First Name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror


                                <input id="name" type="text" class="input @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus placeholder="Last Name">
                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                <input id="name" type="text" class="input @error('tele') is-invalid @enderror" name="tele" value="{{ old('tele') }}" required autocomplete="tele" autofocus placeholder="Tele">
                                        @error('tele')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <input class="input" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirmation password">

                                        <button type="submit" class="btn btn-primary" >
                                                 {{ __('Register') }}
                                        </button>

                          <p>Already have an account ? <a class="link" onclick="tg();">sign in</a></p>
                        </form>
                    </div>
                    <div class="imagBox"><img class="img2" src="{{ asset('img/yes.png') }}" alt="" srcset=""></div>
                </div>
            </div>
            </section>
        <script>
    </script>
</body>

</html>
