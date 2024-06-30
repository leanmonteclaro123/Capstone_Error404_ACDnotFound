<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="icon" href="{{asset('images/bsu_logo.png')}}">
    <title>admin</title>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="desktop-outline"></ion-icon></span>
                        <span class="title">Batangas State University</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="people"></ion-icon></span>
                        <span class="title">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="chatbubble-ellipses"></ion-icon></span>
                        <span class="title">Message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <span class="title">Pasword</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings"></ion-icon></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="log-out"></ion-icon></span>
                        <span class="title">Sign out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- main -->
        
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!-- search -->
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <!-- user -->
                <div class="user">
                    <img src= {{asset('images/bsu_logo.png')}}>
                </div>
            </div>
            {{-- cards --}}
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">123</div>
                        <div class="cardName">Registries</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Requests</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="document-attach-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">12</div>
                        <div class="cardName">Pending</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </div>
                </div>
            </div>

            {{-- data list --}}
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Registries status</h2>
                        <a href="#" class="btn">View all</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lean Alegre</td>
                                <td>₱150</td>
                                <td>Paid</td>
                                <td><span class="status approved">Approved</span></td>
                            </tr>
                            <tr>
                                <td>Andrea Cantos</td>
                                <td>₱150</td>
                                <td>Paid</td>
                                <td><span class="status approved">Approved</span></td>
                            </tr>
                            <tr>
                                <td>John Steven De Borja</td>
                                <td>₱150</td>
                                <td>Pending</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>jucint Jim Sanchez</td>
                                <td>₱150</td>
                                <td>Paid</td>
                                <td><span class="status approved">Approved</span></td>
                            </tr>
                            <tr>
                                <td>Jay-ar Destreza</td>
                                <td>₱150</td>
                                <td>Paid</td>
                                <td><span class="status approved">Approved</span></td>
                            </tr>
                            <tr>
                                <td>Cherry mae Castro</td>
                                <td>₱150</td>
                                <td>Paid</td>
                                <td><span class="status approved">Approved</span></td>
                            </tr>
                            <tr>
                                <td>Nherilyn Panaligan</td>
                                <td>₱150</td>
                                <td>Pending</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Clara Consigo</td>
                                <td>₱150</td>
                                <td>Pending</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Ervin Mendoza</td>
                                <td>₱150</td>
                                <td>Paid</td>
                                <td><span class="status approved">Approved</span></td>
                            </tr>
                            <tr>
                                <td>Brix Jeriz</td>
                                <td>₱150</td>
                                <td>Pending</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Shenny Cornado</td>
                                <td>₱150</td>
                                <td>Pending</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent</h2>
                    </div>
                    <table>
                        <tr>
                            <td width = "60px"><div class="imgBx"><img src="images/bsu_logo.png"></div></td>
                            <td><h4>Lean  Alegre<br><span>Tumalim</span></h4></td>
                        </tr>
                        <tr>
                            <td width = "60px"><div class="imgBx"><img src="images/bsu_logo.png"></div></td>
                            <td><h4>Andrea Cantos<br><span>Nasugbu</span></h4></td>
                        </tr>
                        <tr>
                            <td width = "60px"><div class="imgBx"><img src="images/bsu_logo.png"></div></td>
                            <td><h4>John Steven De Borja<br><span>Nasugbu</span></h4></td>
                        </tr>
                        <tr>
                            <td width = "60px"><div class="imgBx"><img src="images/bsu_logo.png"></div></td>
                            <td><h4>Jucint Jim Sanchez<br><span>Mataas na Pulo</span></h4></td>
                        </tr>
                        <tr>
                            <td width = "60px"><div class="imgBx"><img src="images/bsu_logo.png"></div></td>
                            <td><h4>Jay-ar Destreza<br><span>Nasugbu</span></h4></td>
                        </tr>
                        <tr>
                            <td width = "60px"><div class="imgBx"><img src="images/bsu_logo.png"></div></td>
                            <td><h4>Cherry Mae Castro<br><span>Nasugbu</span></h4></td>
                        </tr>
                        <tr>
                            <td width = "60px"><div class="imgBx"><img src="images/bsu_logo.png"></div></td>
                            <td><h4>Nherilyn Panaligan<br><span>Dayap</span></h4></td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        // menuToggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function(){
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

        let list = document.querySelectorAll('.navigation li');
        function activeLink() {
            list.forEach((item)=>
            item .classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item)=>
        item.addEventListener('mouseover',activeLink));
    </script>
    
</body>
</html>