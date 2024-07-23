@extends('layouts.app')

@section('title', 'Vehicle Renewal Form')

@section('content')
<link rel="stylesheet" href="{{ asset('css/renewal.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
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
                        <input type="file" id="or-renew" data-label="Upload OR">
                        <label for="or-renew">
                            <i class="fas fa-upload"></i>
                            <span>Upload OR</span>
                        </label>
                        <button class="remove-btn" onclick="removeFile(this)">Remove</button>
                    </div>
                    <div class="upload-group" data-label="CR-renew">
                        <input type="file" id="cr-renew" data-label="Upload CR">
                        <label for="cr-renew">
                            <i class="fas fa-upload"></i>
                            <span>Upload CR</span>
                        </label>
                        <button class="remove-btn" onclick="removeFile(this)">Remove</button>
                    </div>
                </div>
                <div class="upload-group full-width" data-label="Driver_License-renew">
                    <input type="file" id="dl-renew" data-label="Upload Driver License">
                    <label for="dl-renew">
                        <i class="fas fa-upload"></i>
                        <span>Upload Driver License</span>
                    </label>
                    <button class="remove-btn" onclick="removeFile(this)">Remove</button>
                </div>
            </div>
            <div class="footer">
                <button type="submit" class="btn btn-primary" onclick="submitForm()">Submit</button>
            </div>
        </div>

        <!-- Modal for full-size image view -->
        <div id="modal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="modal-img">
        </div>
    </div>
</div>
@endsection
