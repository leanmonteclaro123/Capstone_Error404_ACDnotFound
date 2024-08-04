<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="icon" href="{{asset('images/bsu_logo.png')}}">
    <title>admin</title>
    {{-- <ion-icon name="desktop-outline"></ion-icon> --}}
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li data-target="dashboard">
                    <a href="#">
                        <span class="icon"><img class="img" src="images/bsu_logo.png"></span>
                        <span class="title">Batangas State University</span>
                    </a>
                </li>
                <li data-target="dashboard">
                    <a href="#">
                        <span class="icon"><ion-icon name="home"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li data-target="requests">
                    <a href="#">
                        <span class="icon"><ion-icon name="id-card"></ion-icon></span>
                        <span class="title">Requests</span>
                    </a>
                </li>
                <li data-target="registries">
                    <a href="#">
                        <span class="icon"><ion-icon name="people"></ion-icon></span>
                        <span class="title">Registries</span>
                    </a>
                </li>
                <li data-target="idk">
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle"></ion-icon></span>
                        <span class="title">idk</span>
                    </a>
                </li>
                <li data-target="help">
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li data-target="settings">
                    <a href="#">
                        <span class="icon"><ion-icon name="settings"></ion-icon></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li data-target="signout">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
            {{-- content sections --}}
            <div id="dashboard" class="content active">
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
            </div>

            <!--Requests-->
            <div id="requests" class="content">
                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Registries status</h2>
                            <a href="#" class="btn">View all</a>
                        </div>
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Plate Number</th>
                                        <th>Province</th>
                                        <th>Make/Model</th>
                                        <th>Year/Color</th>
                                        <th>Campus</th>
                                        <th>Identification</th>
                                        <th>Role</th>
                                        <th>Full Name</th>
                                        <th>Current Address</th>
                                        <th>City</th>
                                        <th>Province</th>
                                        <th>Postal Code</th>
                                        <th>Telephone Cell</th>
                                        <th>Telephone Home</th>
                                        <th>Telephone Office</th>
                                        <th>Owner Name</th>
                                        <th>Permanent Address</th>
                                        <th>City</th>
                                        <th>Province</th>
                                        <th>OR</th>
                                        <th>CR</th>
                                        <th>DL</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registrations as $registration)
                                        <tr>
                                            <td>{{ $registration->loginID }}</td>
                                            <td>{{ $registration->license_plate_number }}</td>
                                            <td>{{ $registration->make_province }}</td>
                                            <td>{{ $registration->make_model }}</td>
                                            <td>{{ $registration->year_color }}</td>
                                            <td>{{ $registration->campus }}</td>
                                            <td>{{ $registration->identification }}</td>
                                            <td>{{ $registration->role }}</td>
                                            <td>{{ $registration->full_name }}</td>
                                            <td>{{ $registration->current_address }}</td>
                                            <td>{{ $registration->city }}</td>
                                            <td>{{ $registration->province }}</td>
                                            <td>{{ $registration->postal_code }}</td>
                                            <td>{{ $registration->telephone_cell }}</td>
                                            <td>{{ $registration->telephone_home }}</td>
                                            <td>{{ $registration->telephone_office }}</td>
                                            <td>{{ $registration->registered_owner_name }}</td>
                                            <td>{{ $registration->permanent_address }}</td>
                                            <td>{{ $registration->owner_city }}</td>
                                            <td>{{ $registration->owner_province }}</td>
                                            <td><img src="{{ asset('storage/' . $registration->OR) }}" alt="OR" width="100"></td>
                                            <td><img src="{{ asset('storage/' . $registration->CR) }}" alt="CR" width="100"></td>
                                            <td><img src="{{ asset('storage/' . $registration->DL) }}" alt="DL" width="100"></td>
                                            <td><span class="status pending">Pending</span></td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Add your requests content here -->
            </div>

            <div id="registries" class="content">
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
                </div>
            </div>

            <div id="idk" class="content">
                <h2>IDK Content</h2>
                <!-- Add your idk content here -->
            </div>

            <div id="help" class="content">
                <h2>Help Content</h2>
                <!-- Add your help content here -->
            </div>

            <div id="settings" class="content">
                <h2>Settings Content</h2>
                <!-- Add your settings content here -->
            </div>

        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src={{asset('js/admin.js')}}></script>
    
</body>
</html>
