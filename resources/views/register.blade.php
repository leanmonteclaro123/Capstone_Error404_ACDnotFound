@extends('layouts.app')

@section('title', 'Register')

@section('content')

<section class="home-content">
    <!--=======HOME CONTENT =======-->
    <div class="container-fluid p-0 home-section" id="abt_us">
        <div id="aboutUsCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#aboutUsCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#aboutUsCarousel" data-slide-to="1"></li>
                <li data-target="#aboutUsCarousel" data-slide-to="2"></li>
                <li data-target="#aboutUsCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/coffee.jpg') }}" class="d-block w-100" alt="University Image 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/coffee.jpg') }}" class="d-block w-100" alt="University Image 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/coffee.jpg') }}" class="d-block w-100" alt="University Image 3">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/coffee.jpg') }}" class="d-block w-100" alt="University Image 4">
                </div>
            </div>
            <a class="carousel-control-prev" href="#aboutUsCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#aboutUsCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>          
        <h2>About Us</h2>
        <p>Batangas State University is committed to providing quality education and fostering 
            research and innovation. We offer a range of programs designed
            to meet the needs of our diverse student body.
        </p>
        <img class="home-img" src="{{ asset('images/batstate.jpg') }}" alt="University Image">
    </div>

    <!--=======CONTACT US=======-->
    <div class="container home-section" id="contact_us" style="display: none">
        <h2>Contact Us</h2>
        <p>If you have any questions or need further information, please feel free to contact us at info@batangasstate.edu.ph or call us at (043) 980-0385.</p>
    </div>

    <!--=======REGISTRATION FORM=======-->
    <div class="container home-section" id="registration" style="display: none"> 
        <br><br>
        
        <div class="registercontainer">
            <div class="registrationheader">
                <h3>VEHICLE REGISTRATION FORM</h3>
            </div>
            <form action="{{ route('vehicle.registration.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="section">
                    <h4>Vehicle Information</h4>
                    <div class="form-group">
                        {{-- <input type="text" id="loginID" value="{{ Auth::user()->id }} " name="loginID" style="display: none"> --}}

                        <label for="license-plate-number">License Plate No.:</label>
                        <input type="text" id="license_plate_number" name="license_plate_number" required>
                    </div>
                    <div class="form-group">
                        <label for="province">Province/State:</label>
                        <input type="text" id="make_province" name="make_province" required>
                    </div>

                    <div class="form-group">
                        <label for="make-model">Make/Model:</label>
                        <input type="text" id="make_model" name="make_model" required>
                    </div>
                    <div class="form-group">
                        <label for="year-color">Year/Color:</label>
                        <input type="text" id="year_color" name="year_color" required>
                    </div>
                </div>

                <div class="section">
                    <h4>Registries Information</h4>
                    <div class="form-group">
                        <label for="campus">Campus:</label>
                        <input type="text" id="campus" name="campus" required>
                    </div>

                    <div class="form-group">
                        <label for="faculty-id">Identification No.:</label>
                        <input type="text" id="identification" name="identification">
                    </div>    

                    <div class="form-group checkbox-group" required>
                        <label>Role:</label>
                        <label><input type="checkbox" name="role" value="Faculty" class="role-checkbox"> Faculty</label>
                        <label><input type="checkbox" name="role" value="Student" class="role-checkbox"> Student</label>
                        <label><input type="checkbox" name="role" value="Parent" class="role-checkbox"> Parent</label>
                        <label><input type="checkbox" name="role" value="Others" class="role-checkbox"> Others</label>
                        {{-- <input type="text"  name="role" placeholder="Specify if Others"> --}}
                    </div>

                    <div class="form-group">
                        <label for="full-name">Full Name:</label>
                        <input type="text" id="full_name" name="full_name" required>
                    </div>
                    <div class="form-group">
                        <label for="current-address">Current Address:</label>
                        <input type="text" id="current_address" name="current_address" required>
                    </div>
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                    <div class="form-group">
                        <label for="province">Province:</label>
                        <input type="text" id="province" name="province" required>
                    </div>
                    <div class="form-group">
                        <label for="postal-code">Postal Code:</label>
                        <input type="text" id="postal_code" name="postal_code" required>
                    </div>
                    
                    <div class="two-box">
                        <div class="form-group">
                            <label for="telephone-cell">Telephone (Cell):</label>
                            <input type="text" id="telephone_cell" name="telephone_cell" required>
                        </div>
                        <div class="form-group">
                            <label for="telephone-home"> (Home):</label>
                            <input type="text" id="telephone_home" name="telephone_home">
                        </div>
                        <div class="form-group">
                            <label for="telephone-office">(Office):</label>
                            <input type="text" id="telephone_office" name="telephone_office">
                        </div>
                    </div>

                </div>

                <div class="section">
                    <h4>Owners Information</h4>
                    <div class="form-group">
                        <label for="registered-owner-name">Registered Owner's Name:</label>
                        <input type="text" id="registered_owner_name" name="registered_owner_name" required>
                    </div>
                    <div class="form-group">
                        <label for="permanent-address">Permanent Address:</label>
                        <input type="text" id="permanent_address" name="permanent_address" required>
                    </div>
                    <div class="form-group">
                        <label for="city-2">City:</label>
                        <input type="text" id="owner_city" name="owner_city" required>
                    </div>
                    <div class="form-group">
                        <label for="province-2">Province:</label>
                        <input type="text" id="owner_province" name="owner_province" required>
                    </div>
                </div>

                <div class="upload-container">
                    <div class="upload-file">
                        <div class="upload-grid">
                            <div class="upload-group" data-label="OR-reg">
                                <input type="file" id="reg_OR" data-label="Upload OR" name="reg_OR" accept=".jpg, .jpeg, .png" required>
                                <label for="reg_OR">
                                    <i class="fas fa-upload"></i>
                                    <span>Upload OR</span>
                                </label>
                                <button class="remove-btn" onclick="removeFile(this)">Remove</button>
                            </div>
                            <div class="upload-group" data-label="CR-reg">
                                <input type="file" id="reg_CR" data-label="Upload CR" name="reg_CR" accept=".jpg, .jpeg, .png" required>
                                <label for="reg_CR">
                                    <i class="fas fa-upload"></i>
                                    <span>Upload CR</span>
                                </label>
                                <button class="remove-btn" onclick="removeFile(this)">Remove</button>
                            </div>
                            <div class="upload-group full-width" data-label="Driver_License-reg">
                                <input type="file" id="reg_DL" data-label="Upload Driver License" name="reg_DL" accept=".jpg, .jpeg, .png" required>
                                <label for="reg_DL">
                                    <i class="fas fa-upload"></i>
                                    <span>Upload Driver License</span>
                                </label>
                                <button class="remove-btn" onclick="removeFile(this)">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reg-footer">
                    <button type="submit" class="btn btn-primary" onclick="submitForm()">Submit</button>
                </div>
            </form>

            <!-- Modal for full-size image view -->
            <div id="modal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="modal-img">
            </div>
        </div>
    </div>

    <!--=======RENEWAL FORM=======-->
    <div class="container home-section" id="renewal" style="display: none">
        <br><br>
        <div class="renew-container">
            <div class="renew-header">
                <h3>VEHICLE RENEWAL FORM</h3>
            </div>
            <div class="two-form">
                <div class="section1">
                    <h4>Vehicle 1</h4>
                    <div class="form-group">
                        <label for="license-plate-number">License Plate No.:</label>
                        <input type="text" id="license-plate-number" name="license-plate-number" required>
                    </div>
                    <div class="form-group">
                        <label for="province">Province/State:</label>
                        <input type="text" id="province" name="province" required>
                    </div>
                    <div class="form-group">
                        <label for="make-model">Make/Model:</label>
                        <input type="text" id="make-model" name="make-model" required>
                    </div>
                    <div class="form-group">
                        <label for="year-color">Year/Color:</label>
                        <input type="text" id="year-color" name="year-color" required>
                    </div>
                </div>
    
                <div class="section1">
                    <h4>Vehicle 2 (Optional)</h4>
                    <div class="form-group">
                        <label for="license-plate-number-2">License Plate No.:</label>
                        <input type="text" id="license-plate-number-2" name="license-plate-number-2">
                    </div>
                    <div class="form-group">
                        <label for="province-2">Province/State:</label>
                        <input type="text" id="province-2" name="province-2">
                    </div>
                    <div class="form-group">
                        <label for="make-model-2">Make/Model:</label>
                        <input type="text" id="make-model-2" name="make-model-2">
                    </div>
                    <div class="form-group">
                        <label for="year-color-2">Year/Color:</label>
                        <input type="text" id="year-color-2" name="year-color-2">
                    </div>
                </div>
            </div>
    
            <div class="section">
                <div class="form-group">
                    <label for="campus">Campus:</label>
                    <input type="text" id="campus" name="campus" required>
                </div>
    
                <div class="two-box">
                    <div class="form-group">
                        <label for="faculty-id">Faculty/Employee ID No.:</label>
                        <input type="text" id="faculty-id" name="faculty-id">
                    </div>
                    <div class="form-group">
                        <label for="student-id">Student ID No.:</label>
                        <input type="text" id="student-id" name="student-id">
                    </div>
                </div>
    
                <div class="form-group checkbox-group" required>
                    <label>Role:</label>
                    <label><input type="checkbox" name="faculty/employee" value="Faculty/Employee" class="role-checkbox"> Faculty/Employee</label>
                    <label><input type="checkbox" name="student" value="Student" class="role-checkbox"> Student</label>
                    <label><input type="checkbox" name="parent" value="Parent" class="role-checkbox"> Parent</label>
                    <label><input type="checkbox" name="others" value="Others" class="role-checkbox"> Others, please specify:</label>
                    <input type="text" name="role-other">
                </div>
    
                <div class="form-group">
                    <label for="full-name">Full Name:</label>
                    <input type="text" id="full-name" name="full-name" required>
                </div>
                <div class="form-group">
                    <label for="current-address">Current Address:</label>
                    <input type="text" id="current-address" name="current-address" required>
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div class="form-group">
                    <label for="province">Province:</label>
                    <input type="text" id="province" name="province" required>
                </div>
                <div class="form-group">
                    <label for="postal-code">Postal Code:</label>
                    <input type="text" id="postal-code" name="postal-code" required>
                </div>
                <div class="form-group">
                    <label for="telephone-cell">Telephone (Cell):</label>
                    <input type="text" id="telephone-cell" name="telephone-cell" required>
                </div>
                <div class="form-group">
                    <label for="telephone-home">Telephone (Home):</label>
                    <input type="text" id="telephone-home" name="telephone-home">
                </div>
                <div class="form-group">
                    <label for="telephone-office">Telephone (Office):</label>
                    <input type="text" id="telephone-office" name="telephone-office">
                </div>
            </div>
    
            <div class="section">
                <div class="form-group">
                    <label for="registered-owner-name">Registered Owner's Name:</label>
                    <input type="text" id="registered-owner-name" name="registered-owner-name" required>
                </div>
                <div class="form-group">
                    <label for="permanent-address">Permanent Address:</label>
                    <input type="text" id="permanent-address" name="permanent-address" required>
                </div>
                <div class="form-group">
                    <label for="city-2">City:</label>
                    <input type="text" id="city-2" name="city-2" required>
                </div>
                <div class="form-group">
                    <label for="province-2">Province:</label>
                    <input type="text" id="province-2" name="province-2" required>
                </div>
            </div>
    
            <div class="upload-container">
                <div class="upload-file">
                    <div class="upload-grid">
                        <div class="upload-group" data-label="OR-renew">
                            <input type="file" id="or-renew" data-label="Upload OR" required>
                            <label for="or-renew">
                                <i class="fas fa-upload"></i>
                                <span>Upload OR</span>
                            </label>
                            <button class="remove-btn" onclick="removeFile(this)">Remove</button>
                        </div>
                        <div class="upload-group" data-label="CR-renew">
                            <input type="file" id="cr-renew" data-label="Upload CR" required>
                            <label for="cr-renew">
                                <i class="fas fa-upload"></i>
                                <span>Upload CR</span>
                            </label>
                            <button class="remove-btn" onclick="removeFile(this)">Remove</button>
                        </div>
                        <div class="upload-group full-width" data-label="Driver_License-renew">
                            <input type="file" id="dl-renew" data-label="Upload Driver License" required>
                            <label for="dl-renew">
                                <i class="fas fa-upload"></i>
                                <span>Upload Driver License</span>
                            </label>
                            <button class="remove-btn" onclick="removeFile(this)">Remove</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="renew-footer">
                <button type="submit" class="btn btn-primary" onclick="submitForm()">Submit</button>
            </div>
            
    
            <!-- Modal for full-size image view -->
            <div id="modal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="modal-img">
            </div>
        </div>
    </div>
 
</section>

<!--=======STYLESHEET=======-->
<link rel="stylesheet" href="{{asset('css/register.css')}}">
<link rel="stylesheet" href="{{asset('css/renewal.css')}}">
<link rel="stylesheet" href="{{asset('css/registrationform.css')}}">

<!--========SCRIPTS=========-->
<script src="{{ asset('js/register.js') }}"></script>
<script src="{{ asset('js/formupload.js') }}"></script>

@endsection
