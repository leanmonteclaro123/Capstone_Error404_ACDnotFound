{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="icon" href="{{asset('images/bsu_logo.png')}}">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Login Page</title>
</head>
<body>
<div class="background">
    <div class="wrapper">
        <div class="form-box">
            <!-- Register Form -->
            <div class="register-container" id="register">
                <div class="top">
                    <span>Already have an account? <a href="#" onclick="showLogin()">Log In</a></span>
                    <header>Sign Up</header>
                </div>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="two-forms">
                        <div class="input-box">
                            <input name="firstname" type="text" class="input-field" placeholder="Firstname" required>
                            <i><ion-icon name="person-outline"></ion-icon></i>
                        </div>
                        <div class="input-box">
                            <input name="lastname" type="text" class="input-field" placeholder="Lastname" required>
                            <i><ion-icon name="person-outline"></ion-icon></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <input name="email" type="text" class="input-field" placeholder="Email" required>
                        <i><ion-icon name="mail-outline"></ion-icon></i>
                    </div>
                    <div class="input-box">
                        <input name="username" id="username" type="text" class="input-field" placeholder="Username" required>
                        <i><ion-icon name="person-outline"></ion-icon></i>
                    </div>
                    <div class="input-box">
                        <input name="password" type="password" class="input-field" placeholder="Password" required>
                        <i><ion-icon name="lock-closed-outline"></ion-icon></i>
                    </div>
                    <div class="input-box">
                        <button type="submit" class="submit">Register</button>
                    </div>
                </form>
            </div>
            <!-- Login Form -->
            <div class="login-container" id="login">
                <div class="top">
                    <span>Don't have an account? <a href="#" onclick="showRegister()">Sign Up</a></span>
                    <header>Login</header>
                </div>
                <form action="{{route('login.post')}}" method="POST">
                    @csrf
                    <div class="input-box">
                        <input name="username" type="text" class="input-field" placeholder="Username" required>
                        <i><ion-icon name="person-outline"></ion-icon></i>
                    </div>
                    <div class="input-box">
                        <input name="password" type="password" class="input-field" placeholder="Password" required>
                        <i><ion-icon name="lock-closed-outline"></ion-icon></i>
                    </div>
                    <div class="input-box">
                        <button type="submit" class="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <script src={{asset('js/login.js')}}></script>
</body> 
</html>


 --}}

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('css/login.css') }}">
     <link rel="icon" href="{{ asset('images/bsu_logo.png') }}">
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     <title>Login Page</title>
 </head>
 <body>
 <div class="background">
     <div class="wrapper">
         <div class="form-box">
             <!-- Register Form -->
             <div class="register-container" id="register">
                 <div class="top">
                     <span>Already have an account? <a href="#" onclick="showLogin()">Log In</a></span>
                     <header>Sign Up</header>
                 </div>
                 <form action="{{ route('register') }}" method="POST">
                     @csrf
                     <div class="role" style="display: none">
                        <input name="Role" type="text" value="User">
                     </div>
                     <div class="two-forms">
                         <div class="input-box">
                             <input name="firstname" type="text" class="input-field" placeholder="Firstname" required value="{{ old('firstname') }}">
                             <i><ion-icon name="person-outline"></ion-icon></i>
                         </div>
                         <div class="input-box">
                             <input name="lastname" type="text" class="input-field" placeholder="Lastname" required value="{{ old('lastname') }}">
                             <i><ion-icon name="person-outline"></ion-icon></i>
                         </div>
                     </div>
                     <div class="input-box">
                         <input name="email" type="text" class="input-field" placeholder="Email" required value="{{ old('email') }}">
                         <i><ion-icon name="mail-outline"></ion-icon></i>
                     </div>
                     <div class="input-box">
                         <input name="username" id="username" type="text" class="input-field" placeholder="Username" required value="{{ old('username') }}">
                         <i><ion-icon name="person-outline"></ion-icon></i>
                     </div>
                     <div class="input-box">
                         <input name="password" type="password" class="input-field" placeholder="Password" required>
                         <i><ion-icon name="lock-closed-outline"></ion-icon></i>
                     </div>
                     <div class="input-box">
                         <button type="submit" class="submit">Register</button>
                     </div>
                 </form>
             </div>
             <!-- Login Form -->
             <div class="login-container" id="login">
                 <div class="top">
                     <span>Don't have an account? <a href="#" onclick="showRegister()">Sign Up</a></span>
                     <header>Login</header>
                 </div>
                 <form action="{{ route('login.post') }}" method="POST">
                     @csrf
                     <div class="input-box">
                         <input name="username" type="text" class="input-field" placeholder="Username" required>
                         <i><ion-icon name="person-outline"></ion-icon></i>
                     </div>
                     <div class="input-box">
                         <input name="password" type="password" class="input-field" placeholder="Password" required>
                         <i><ion-icon name="lock-closed-outline"></ion-icon></i>
                     </div>
                     <div class="input-box">
                         <button type="submit" class="submit">Login</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 
 <!-- Registration Success Modal -->
 <div id="registerSuccessModal" class="modal">
     <div class="modal-content">
         <span class="close">&times;</span>
         <p>Registration Successful! Please login.</p>
     </div>
 </div>
 
 <!-- Registration Error Modal -->
 <div id="registerErrorModal" class="modal">
     <div class="modal-content">
         <span class="close">&times;</span>
         <p>Registration Failed. Please try again.</p>
     </div>
 </div>
 
 <!-- Login Success Modal -->

 <div id="loginSuccessModal" class="modal">
     <div class="modal-content">
         <span class="close">&times;</span>
         <p>Login Successful!</p>
     </div>
 </div>
 
 <!-- Login Error Modal -->
 <div id="loginErrorModal" class="modal">
     <div class="modal-content">
         <span class="close">&times;</span>
         <p>Login Failed. Please try again.</p>
     </div>
 </div>
 
 <!-- Pass session data to JavaScript -->
 <script>
     window.hasRegisterSuccessMessage = @json(session('register_success'));
     window.hasRegisterErrorMessage = @json(session('register_error'));
     window.hasLoginSuccessMessage = @json(session('login_success'));
     window.hasLoginErrorMessage = @json(session('login_error'));
 </script>
 <script src={{asset('js/login.js')}}></script>
 </body>
 </html>
 

