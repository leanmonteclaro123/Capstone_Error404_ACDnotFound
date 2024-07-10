<link rel="stylesheet" href="{{asset('css/register.css')}}">
<header class="header">
    <nav class="nav container">
        <div class="nav__data">
            <a href="#" class="nav__logo">
                <img class="qw" src="/images/bsu_logo.png"> Batangas State University 
            </a>
            
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__burger"></i>
                <i class="ri-close-line nav__close"></i>
            </div>
        </div>

        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li><a href="#" class="nav__link" data-target="abt_us">Home</a></li>
                

                <!--=============== DROPDOWN 1 ===============-->
                <li class="dropdown__item" id="dropdown1">
                    <div class="nav__link">
                        Registration<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        
                    </div>

                    <ul class="dropdown__menu">
                        <li>
                            <a href="#" class="dropdown__link" data-target="registration">
                                <i class="ri-pie-chart-line"></i> Registration
                            </a>                          
                        </li>
                        

                        <li>
                            <a href="#" class="dropdown__link">
                                <i class="ri-arrow-up-down-line"></i> Renewal
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

                <li><a href="#" class="nav__link" data-target="contact_us">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
