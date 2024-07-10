<!DOCTYPE html>
<html lang="en">
@extends('Registration.RegistrationForm')

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
    @include('Registration.Header')
    

    <!--=============== MAIN CONTENT ===============-->
    <section class="home-content">
        <div class="container home-section" id="abt_us">
            <h2>About Us</h2>
            <p>Batangas State University is committed to providing quality education and fostering research and innovation. We offer a range of programs designed to meet the needs of our diverse student body.</p>
            <img src="path/to/your/image.jpg" alt="University Image">
        </div>
        <div class="container home-section" id="contact_us" style="display: none">
            <h2>Contact Us</h2>
            <p>If you have any questions or need further information, please feel free to contact us at info@batangasstate.edu.ph or call us at (043) 980-0385.</p>
        </div>
    </section>
        
    <!--=============== MAIN JS ===============-->
    <script src={{asset('js/register.js')}}></script>
</body>
</html>
