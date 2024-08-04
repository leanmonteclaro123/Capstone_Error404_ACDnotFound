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
    <div class="wrapper">
        <div class="form-box shadow-lg p-4 bg-white rounded">
            <!-- Login Form -->
            <div class="login-container" id="login" style="display: block;">
                <div class="top text-center mb-4">
                    <span>Don't have an account? <a href="#" onclick="showRegister()">Sign Up</a></span>
                    <h1 class="h3">Login</h1>
                </div>
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input name="username" type="text" class="form-control" placeholder="Username" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
            </div>

            <!-- Register Form -->
            <div class="register-container" id="register" style="display: none;">
                <div class="top text-center mb-4">
                    <span>Already have an account? <a href="#" onclick="showLogin()">Log In</a></span>
                    <h1 class="h3">Sign Up</h1>
                </div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <input name="Role" type="hidden" value="User">
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3">
                            <div class="form-floating">
                                <input name="lastname" type="text" class="form-control" placeholder="Lastname" required value="{{ old('lastname') }}">
                                <label for="lastname">Lastname</label>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-floating">
                                <input name="firstname" type="text" class="form-control" placeholder="Firstname" required value="{{ old('firstname') }}">
                                <label for="firstname">Firstname</label>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-floating">
                                <input name="middle" type="text" class="form-control" placeholder="M.I" required value="{{ old('middle') }}">
                                <label for="middle">M.I</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 col-lg-3 mb-3">
                            <div class="form-floating">
                                <input name="address" type="text" class="form-control" placeholder="Address" required value="{{ old('address') }}">
                                <label for="address">Address</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3">
                            <div class="form-floating">
                                <input name="city" type="text" class="form-control" placeholder="City" required value="{{ old('city') }}">
                                <label for="city">City</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3">
                            <div class="form-floating">
                                <input name="province" type="text" class="form-control" placeholder="Province" required value="{{ old('province') }}">
                                <label for="province">Province</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3">
                            <div class="form-floating">
                                <input name="postal_code" type="text" class="form-control" placeholder="Postal Code" required value="{{ old('postal_code') }}">
                                <label for="postal_code">Postal Code</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 mb-3">
                            <div class="form-floating">
                                <input name="username" id="username" type="text" class="form-control" placeholder="Username" required value="{{ old('username') }}">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-floating">
                                <select name="role" class="form-select" required>
                                    <option value="">Select Role</option>
                                    <option value="Student">Student</option>
                                    <option value="Faculty">Faculty</option>
                                    <option value="Parent">Parent</option>
                                    <option value="Tenants">Tenants</option>
                                    <option value="Other">Other</option>
                                </select>
                                <label for="role">Role</label>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-floating">
                                <input name="id_no" type="text" class="form-control" placeholder="ID" required value="{{ old('id_no') }}">
                                <label for="id_no">ID</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12 mb-3">
                            <div class="form-floating">
                                <input name="campus" type="text" class="form-control" placeholder="Campus" required value="{{ old('campus') }}">
                                <label for="campus">Campus</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12 mb-3">
                            <div class="form-floating">
                                <input name="email" type="email" class="form-control" placeholder="Email" required value="{{ old('email') }}">
                                <label for="email">Email</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input name="password" type="password" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input name="password_confirmation" type="password" class="form-control" placeholder="Re-Type Password" required>
                                <label for="password_confirmation">Re-Type Password</label>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </form>
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

        function showLogin() {
            document.getElementById('register').style.display = 'none';
            document.getElementById('login').style.display = 'block';
        }

        function showRegister() {
            document.getElementById('login').style.display = 'none';
            document.getElementById('register').style.display = 'block';
        }
    </script>
</body>
</html>
