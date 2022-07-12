<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Sales</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>

<!-- Latest compiled and minified CSS -->
<!-- https://xstore.8theme.com/demos/hosting/-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('style.css') }}">
<script src="{{ asset('script.js') }}"></script>

<style>
    #slider-text{
  padding-top: 40px;
  display: block;
}
#slider-text .col-md-6{
  overflow: hidden;
}

#slider-text h2 {
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 30px;
  letter-spacing: 3px;
  margin: 30px auto;
  padding-left: 40px;
}
#slider-text h2::after{
  border-top: 2px solid #c7c7c7;
  content: "";
  position: absolute;
  bottom: 35px;
  width: 100%;
  }

#itemslider h4{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 12px;
  margin: 10px auto 3px;
}
#itemslider h5{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: bold;
  font-size: 12px;
  margin: 3px auto 2px;
}
#itemslider h6{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;;
  font-size: 10px;
  margin: 2px auto 5px;
}
.badge {
  background: #b20c0c;
  position: absolute;
  height: 40px;
  width: 40px;
  border-radius: 50%;
  line-height: 31px;
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;
  font-size: 14px;
  border: 2px solid #FFF;
  box-shadow: 0 0 0 1px #b20c0c;
  top: 5px;
  right: 25%;
}
#slider-control img{
  padding-top: 60%;
  margin: 0 auto;
}
@media screen and (max-width: 992px){
#slider-control img {
  padding-top: 70px;
  margin: 0 auto;
}
}

.carousel-showmanymoveone .carousel-control {
  width: 4%;
  background-image: none;
}
.carousel-showmanymoveone .carousel-control.left {
  margin-left: 5px;
}
.carousel-showmanymoveone .carousel-control.right {
  margin-right: 5px;
}
.carousel-showmanymoveone .cloneditem-1,
.carousel-showmanymoveone .cloneditem-2,
.carousel-showmanymoveone .cloneditem-3,
.carousel-showmanymoveone .cloneditem-4,
.carousel-showmanymoveone .cloneditem-5 {
  display: none;
}
@media all and (min-width: 768px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -50%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 50%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
    display: block;
  }
}
@media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(50%, 0, 0);
    transform: translate3d(50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-50%, 0, 0);
    transform: translate3d(-50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
@media all and (min-width: 992px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-2,
  .carousel-showmanymoveone .carousel-inner .cloneditem-3,
  .carousel-showmanymoveone .carousel-inner .cloneditem-4,
  .carousel-showmanymoveone .carousel-inner .cloneditem-5,
  .carousel-showmanymoveone .carousel-inner .cloneditem-6  {
    display: block;
  }
}
@media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(16.666%, 0, 0);
    transform: translate3d(16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-16.666%, 0, 0);
    transform: translate3d(-16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
* {
    border: 0;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    background: rgb(250, 250, 250) url(http://lorempixel.com/1920/1080/nature/);
    font-family: Lato, Helvetica, Arial, sans-serif;
}

a {
    color: inherit;
    font-family: inherit;
    font-size: inherit;
    text-decoration: none;
}


/*======================================================
                            Navbar
    ======================================================*/

#navbar {
    background: white;
    color: rgb(13, 26, 38);
    position: fixed;
    top: 0;
    height: 60px;
    line-height: 60px;
    width: 100vw;
    z-index: 10;
}

.nav-wrapper {
    margin: auto;
    text-align: center;
    width: 70%;
}

@media(max-width: 768px) {
    .nav-wrapper {
        width: 90%;
    }
}

@media(max-width: 638px) {
    .nav-wrapper {
        width: 100%;
    }
}

.logo {
    float: left;
    margin-left: 28px;
    font-size: 1.5em;
    height: 60px;
    letter-spacing: 1px;
    text-transform: uppercase;
}

@media(max-width: 768px) {
    /*.logo {
        /*       margin-left: 5px; */
}

#navbar ul {
    display: inline-block;
    /* float: right; */
    list-style: none;
    /* margin-right: 14px; */
    margin-top: -2px;
    text-align: right;
    transition: transform 0.5s ease-out;
    -webkit-transition: transform 0.5s ease-out;
}

@media(max-width: 640px) {
    #navbar ul {
        display: none;
    }
}

@media(orientation: landscape) {
    #navbar ul {
        display: inline-block;
    }
}

#navbar li {
    display: inline-block;
}

#navbar li a {
    color: rgb(13, 26, 38);
    display: block;
    font-size: 0.7em;
    height: 50px;
    letter-spacing: 1px;
    margin: 0 20px;
    padding: 0 4px;
    position: relative;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
}

#navbar li a:hover {
    /* border-bottom: 1px solid rgb(28, 121, 184); */
    color: rgb(28, 121, 184);
    transition: all 1s ease;
    -webkit-transition: all 1s ease;
}


/* Animated Bottom Line */

#navbar li a:before,
#navbar li a:after {
    content: '';
    position: absolute;
    width: 0%;
    height: 1px;
    bottom: -1px;
    background: rgb(13, 26, 38);
}

#navbar li a:before {
    left: 0;
    transition: 0.5s;
}

#navbar li a:after {
    background: rgb(13, 26, 38);
    right: 0;
    /* transition: width 0.8s cubic-bezier(0.22, 0.61, 0.36, 1); */
}

#navbar li a:hover:before {
    background: rgb(13, 26, 38);
    width: 100%;
    transition: width 0.5s cubic-bezier((0.22, 0.61, 0.36, 1));
}

#navbar li a:hover:after {
    background: transparent;
    width: 100%;
    /* transition: 0s; */
}


/*======================================================
                      Mobile Menu Menu Icon
    ======================================================*/

@media(max-width: 640px) {
    .menuIcon {
        cursor: pointer;
        display: block;
        position: fixed;
        right: 15px;
        top: 20px;
        height: 23px;
        width: 27px;
        z-index: 12;
    }
    /* Icon Bars */
    .icon-bars {
        background: rgb(13, 26, 38);
        position: absolute;
        left: 1px;
        top: 45%;
        height: 2px;
        width: 20px;
        -webkit-transition: 0.4s;
        transition: 0.4s;
    }
    .icon-bars::before {
        background: rgb(13, 26, 38);
        content: '';
        position: absolute;
        left: 0;
        top: -8px;
        height: 2px;
        width: 20px;
        /*     -webkit-transition: top 0.2s ease 0.3s;
      transition: top 0.2s ease 0.3s; */
        -webkit-transition: 0.3s width 0.4s;
        transition: 0.3s width 0.4s;
    }
    .icon-bars::after {
        margin-top: 0px;
        background: rgb(13, 26, 38);
        content: '';
        position: absolute;
        left: 0;
        bottom: -8px;
        height: 2px;
        width: 20px;
        /*     -webkit-transition: top 0.2s ease 0.3s;
      transition: top 0.2s ease 0.3s; */
        -webkit-transition: 0.3s width 0.4s;
        transition: 0.3s width 0.4s;
    }
    /* Bars Shadows */
    .icon-bars.overlay {
        background: rgb(97, 114, 129);
        background: rgb(183, 199, 211);
        width: 20px;
        animation: middleBar 3s infinite 0.5s;
        -webkit-animation: middleBar 3s infinite 0.5s;
    }
    @keyframes middleBar {
        0% {
            width: 0px
        }
        50% {
            width: 20px
        }
        100% {
            width: 0px
        }
    }
    @-webkit-keyframes middleBar {
        0% {
            width: 0px
        }
        50% {
            width: 20px
        }
        100% {
            width: 0px
        }
    }
    .icon-bars.overlay::before {
        background: rgb(97, 114, 129);
        background: rgb(183, 199, 211);
        width: 10px;
        animation: topBar 3s infinite 0.2s;
        -webkit-animation: topBar 3s infinite 0s;
    }
    @keyframes topBar {
        0% {
            width: 0px
        }
        50% {
            width: 10px
        }
        100% {
            width: 0px
        }
    }
    @-webkit-keyframes topBar {
        0% {
            width: 0px
        }
        50% {
            width: 10px
        }
        100% {
            width: 0px
        }
    }
    .icon-bars.overlay::after {
        background: rgb(97, 114, 129);
        background: rgb(183, 199, 211);
        width: 15px;
        animation: bottomBar 3s infinite 1s;
        -webkit-animation: bottomBar 3s infinite 1s;
    }
    @keyframes bottomBar {
        0% {
            width: 0px
        }
        50% {
            width: 15px
        }
        100% {
            width: 0px
        }
    }
    @-webkit-keyframes bottomBar {
        0% {
            width: 0px
        }
        50% {
            width: 15px
        }
        100% {
            width: 0px
        }
    }
    /* Toggle Menu Icon */
    .menuIcon.toggle .icon-bars {
        top: 5px;
        transform: translate3d(0, 5px, 0) rotate(135deg);
        transition-delay: 0.1s;
        transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }
    .menuIcon.toggle .icon-bars::before {
        top: 0;
        transition-delay: 0.1s;
        opacity: 0;
    }
    .menuIcon.toggle .icon-bars::after {
        top: 10px;
        transform: translate3d(0, -10px, 0) rotate(-270deg);
        transition-delay: 0.1s;
        transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }
    .menuIcon.toggle .icon-bars.overlay {
        width: 20px;
        opacity: 0;
        -webkit-transition: all 0s ease 0s;
        transition: all 0s ease 0s;
    }
}


/*======================================================
                     Responsive Mobile Menu
    ======================================================*/

.overlay-menu {
    background: lightblue;
    color: rgb(13, 26, 38);
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 0;
    right: 0;
    padding-right: 15px;
    transform: translateX(-100%);
    width: 100vw;
    height: 100vh;
    -webkit-transition: transform 0.2s ease-out;
    transition: transform 0.2s ease-out;
}

.overlay-menu ul,
.overlay-menu li {
    display: block;
    position: relative;
}

.overlay-menu li a {
    display: block;
    font-size: 1.8em;
    letter-spacing: 4px;
    /*   opacity: 0; */
    padding: 10px 0;
    text-align: right;
    text-transform: uppercase;
    -webkit-transition: color 0.3s ease;
    transition: color 0.3s ease;
    /*   -webkit-transition: 0.2s opacity 0.2s ease-out;
    transition: 0.2s opacity 0.2s ease-out; */
}

.overlay-menu li a:hover,
.overlay-menu li a:active {
    color: rgb(28, 121, 184);
    -webkit-transition: color 0.3s ease;
    transition: color 0.3s ease;
}
</style>
<script>
    $(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});

</script>
</head>
<body>
    {{-- <!-- nav section --><br>
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Testimonial</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <h1 class="logo">Navbar</h1>
        </div>
    </nav><br><br> --}}


<!-- Menu Icon -->
<!-- <div class="menuIcon">
  <span class="icon icon-bars navbar-toggler"></span>
  <span class="icon icon-bars overlay navbar-toggler"></span>
</div> -->


<div class="overlay-menu">
  <ul id="menu">
      <li><a href="#home">Home</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
</div><br>
<!-- Slider -->
<!--Item slider text-->
<h1 class="text-center"> Brands</h1>
<div class="container">
  <div class="row" id="slider-text">
    <div class="col-md-6" >
      <h2 style="justify-content: center;">NEW COLLECTION</h2>
    </div>
  </div>
</div>

<!-- Item slider-->
<div class="container-fluid">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">

          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="{{ asset('img/p50 pocket.jpg') }}" class="img-responsive center-block"></a>
              <h4 class="text-center">MAYORAL SUKNJA</h4>
              <h5 class="text-center">200,00 TK</h5>

            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="{{ asset('img/13 pro max.jpg') }}" class="img-responsive center-block"></a>
              <h4 class="text-center">Iphone 13 Pro Max</h4>
              <h5 class="text-center">800 TK</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="{{ asset('img/8i.jpg') }}" class="img-responsive center-block"></a>
              <!-- <span class="badge">10%</span> -->
              <!-- <h4 class="text-center">PANTALONE TERI 2</h4> -->
              <h5 class="text-center">Huawei Nova 8i</h5>
              <h6 class="text-center">5000,00 TK</h6>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="{{ asset('img/12 pro max.jpg') }}" class="img-responsive center-block"></a>
              <h4 class="text-center">Iphone 12 Pro Max</h4>
              <h5 class="text-center">4000,00 RSD</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="{{ asset('img/z flip test.jpg') }}" class="img-responsive center-block"></a>
              <h4 class="text-center">Samsung Glaxy Z Flip</h4>
              <h5 class="text-center">40,00 TK</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="{{ asset('img/ipad pro.jpg') }}" class="img-responsive center-block"></a>
              <h4 class="text-center">M1 Ipad Pro</h4>
              <h5 class="text-center">100,00 TK</h5>
            </div>
          </div>

        </div>

        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right" class="img-responsive"></a>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Item slider end-->
<br/><br/>
<div align="center">
<button class="cta" >
  <span class="hover-underline-animation"><a href="{{ route('userHome') }}" style="text-decoration: none;"> Shop now</a> </span>
  <svg id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 46 16">
    <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(30)"></path>
  </svg>
</button>
</div>
<style>
    *,
*::after,
*::before{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

.html{
    font-size: 62.5%;
}

.navbar input[type="checkbox"],
.navbar .hamburger-lines{
    display: none;
}

.container{
    max-width: 1200px;
    width: 90%;
    margin: auto;
}

.navbar{
    box-shadow: 0px 5px 10px 0px #aaa;
    position: fixed;
    width: 100%;
    background: #fff;
    color: #000;
    opacity: 0.85;
    z-index: 100;
}

.navbar-container{
    display: flex;
    justify-content: space-between;
    height: 64px;
    align-items: center;
}

.menu-items{
    order: 2;
    display: flex;
}
.logo{
    order: 1;
    font-size: 2.3rem;
}

.menu-items li{
    list-style: none;
    margin-left: 1.5rem;
    font-size: 1.3rem;
}

.navbar a{
    color: #444;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease-in-out;
}

.navbar a:hover{
    color: #117964;
}

@media (max-width: 768px){
    .navbar{
        opacity: 0.95;
    }

    .navbar-container input[type="checkbox"],
    .navbar-container .hamburger-lines{
        display: block;
    }

    .navbar-container{
        display: block;
        position: relative;
        height: 64px;
    }

    .navbar-container input[type="checkbox"]{
        position: absolute;
        display: block;
        height: 32px;
        width: 30px;
        top: 20px;
        left: 20px;
        z-index: 5;
        opacity: 0;
        cursor: pointer;
    }

    .navbar-container .hamburger-lines{
        display: block;
        height: 28px;
        width: 35px;
        position: absolute;
        top: 20px;
        left: 20px;
        z-index: 2;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .navbar-container .hamburger-lines .line{
        display: block;
        height: 4px;
        width: 100%;
        border-radius: 10px;
        background: #333;
    }

    .navbar-container .hamburger-lines .line1{
        transform-origin: 0% 0%;
        transition: transform 0.3s ease-in-out;
    }

    .navbar-container .hamburger-lines .line2{
        transition: transform 0.2s ease-in-out;
    }

    .navbar-container .hamburger-lines .line3{
        transform-origin: 0% 100%;
        transition: transform 0.3s ease-in-out;
    }

    .navbar .menu-items{
        padding-top: 100px;
        background: #fff;
        height: 100vh;
        max-width: 300px;
        transform: translate(-150%);
        display: flex;
        flex-direction: column;
        margin-left: -40px;
        padding-left: 40px;
        transition: transform 0.5s ease-in-out;
        box-shadow:  5px 0px 10px 0px #aaa;
        overflow: scroll;
    }

    .navbar .menu-items li{
        margin-bottom: 1.8rem;
        font-size: 1.1rem;
        font-weight: 500;
    }

    .logo{
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 2.5rem;
    }

    .navbar-container input[type="checkbox"]:checked ~ .menu-items{
        transform: translateX(0);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line1{
        transform: rotate(45deg);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line2{
        transform: scaleY(0);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line3{
        transform: rotate(-45deg);
    }

}

@media (max-width: 500px){
    .navbar-container input[type="checkbox"]:checked ~ .logo{
        display: none;
    }
}
</style>
</body>
</html>
