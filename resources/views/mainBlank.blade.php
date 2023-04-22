<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>{{ config('app.name', 'By.Afita') }}</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite('resources/css/app.css')
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/css/splide.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amiri:400,700&display=swap" rel="stylesheet">
    <style>
        html {
	scroll-behavior: smooth;
}
    </style>
</head>

<body>

    <div class="">
        @yield('contents')
    </div>

    {{-- @vite('resources/js/script.js') --}}

</body>



<script>
    //Scrip Untuk Navbar
    //hamburger
    const hamburger = document.querySelector("#hamburger");
    const navMenu = document.querySelector("#nav-menu");

    hamburger.addEventListener("click", function() {
        hamburger.classList.toggle("hamburger-active");
        navMenu.classList.toggle("hidden");
    });
</script>

<script>
    //Scrip Untuk Navbar
    //navbar fixed
    window.onscroll = function() {
        const header = document.querySelector("header");
        const navfix = header.offsetTop;

        if (window.pageYOffset > navfix) {
            header.classList.add("navbar-fixed");
        } else {
            header.classList.remove("navbar-fixed");
        }
    };
</script>


</html>
