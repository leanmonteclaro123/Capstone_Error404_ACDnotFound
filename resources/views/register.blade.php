<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('css/register.css')}}">

    <title>Register</title>
</head>
<body>
    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    <i class="ri-planet-line"></i> Batangas State University 
                </a>
                
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="#" class="nav__link">Home</a></li>
                    <li><a href="#" class="nav__link">Company</a></li>

                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            Analytics <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-pie-chart-line"></i> Overview
                                </a>                          
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-arrow-up-down-line"></i> Transactions
                                </a>
                            </li>

                            <!--=============== DROPDOWN SUBMENU ===============-->
                            <li class="dropdown__subitem">
                                <div class="dropdown__link">
                                    <i class="ri-bar-chart-line"></i> Reports <i class="ri-add-line dropdown__add"></i>
                                </div>

                                <ul class="dropdown__submenu">
                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-file-list-line"></i> Documents
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-cash-line"></i> Payments
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-refund-2-line"></i> Refunds
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li><a href="#" class="nav__link">Products</a></li>

                    <!--=============== DROPDOWN 2 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            Users <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-user-line"></i> Profiles
                                </a>                          
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-lock-line"></i> Accounts
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-message-3-line"></i> Messages
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="#" class="nav__link">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    
    <!--=============== MAIN CONTENT ===============-->
    <main class="main container">
        <section class="content">
            <h1>Welcome to Batangas State University</h1>
            <p>This is the registration page where you can sign up for various services and access different sections of the university's portal.</p>
        </section>

        <!-- Home Content -->
        <section class="home-content">
            <div class="home-section">
                <h2>About Us</h2>
                <p>Batangas State University is committed to providing quality education and fostering research and innovation. We offer a range of programs designed to meet the needs of our diverse student body.</p>
                <img src="path/to/your/image.jpg" alt="University Image">
            </div>

            <div class="home-section">
                <h2>Our Programs</h2>
                <p>We offer undergraduate and graduate programs across various disciplines including Engineering, Business, Arts, and Sciences. Our curriculum is designed to equip students with the skills and knowledge they need to succeed in their chosen fields.</p>
            </div>

            <div class="home-section">
                <h2>Contact Us</h2>
                <p>If you have any questions or need further information, please feel free to contact us at info@batangasstate.edu.ph or call us at (043) 980-0385.</p>
            </div>
        </section>
    </main>

    <!--=============== MAIN JS ===============-->
    <script src={{asset('js/register.js')}}></script>
</body>
</html>
