<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Welcome to Movie-Prime</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />


    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <header id="header">
@include('layouts.nav.nav')
    </header>

    <!-- Main -->
    <div id="main" class="wrapper style1">
        <div class="container">


            <!-- Content -->
            <section id="content">
                @yield('content')

            </section>

        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
            <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="https://github.com/Destru1/Movie-Project-Php-Laravel" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Made by Nikolay Nikolaev 2022.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
