<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/scss/app.scss'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<header id="navbar">
    <div class="container">
        <div class="user-nav">
            <a href="">
                <h1>
                    <img src="/img/logo-actu01.svg" alt="Logo Actu01">
                </h1>
            </a>
            <div class="user-nav-cta">
                <a href="">
                    <i class="fa-solid fa-circle-user"></i>
                </a>
                <a href="" class="btn btn-primary uppercase">S'abonner</a>
            </div>
        </div>
        <div class="links-nav">
            <nav>
                <ul>
                    <li><a href=""><i class="fa-solid fa-house"></i></a></li>
                    <li><a href="">Le live</a></li>
                    <li><a href="">Newsletter</a></li>
                    <li><a href="">Météo</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                <div class="links-nav-search">
                    <a href="">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
<body>
    @yield('content')
<footer id="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-content-categories">
                <h4 class="uppercase bold">Rubriques</h4>
                <ul>
                    <li><a href=""></a></li>
                </ul>
            </div>
            <div class="footer-content-login">
                <h4 class="uppercase bold">Se connecter</h4>
                <ul>
                    <li><a class="uppercase bold" href="">S'abonner</a></li>
                    <li><a class="uppercase bold" href="">Newsletter</a></li>
                    <li><a class="uppercase bold" href="">Mon compte</a></li>
                </ul>
            </div>
            <div class="footer-content-follow">
                <h4 class="uppercase bold">Suivez Actu-01</h4>
                <ul>
                    <li><a href=""><i class="fa-solid fa-square-rss"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa-solid fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
    @vite(['resources/js/app.js'])
</body>
</html>