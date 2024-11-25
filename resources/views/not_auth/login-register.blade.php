<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shorcut icon" type="x-icon" href="{{ asset('images/BT-logo.png') }}">
    <title>BeTracking</title>

    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/login-register.css') }}">

    {{-- link font awesome--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

            <div class="logo-login">
                <a href="{{ url('/') }}" class="logo"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="brand-logo"></a>
            </div>

            {{-- login atau sign in --}}
            <form action="#" class="sign-in-form">
                <h2 class="title">Sign in</h2>

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" required/>
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" required />
                </div>

                <input type="submit" value="Sign In" class="btn solid" formaction="{{ url('dashboard') }}" />
                <p class="social-text">Or Sign in with social platforms</p>

                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </form>

            {{-- register atau sign up --}}
            <form action="#" class="sign-up-form">
                <h2 class="title">Sign up</h2>

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" required />
                </div>

                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" required />
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" required />
                </div>

                <input type="submit" class="btn" value="Sign up" formaction="{{ url('login') }}"/>
                <p class="social-text">Or Sign up with social platforms</p>

                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </form>
            </div>
        </div>

        {{-- login atau register --}}
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                    Let's join us to upgrade your finance always be tracked
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                    Sign up
                    </button>
                </div>
                <img src="{{ asset('images/log.svg') }}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                    Come again to see your finance tracked
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                    Sign in
                    </button>
                </div>
                <img src="{{ asset('images/register.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>

    {{-- javascript --}}
    <script type="text/javascript">

        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
        });

    
    </script>

</body>
</html>
