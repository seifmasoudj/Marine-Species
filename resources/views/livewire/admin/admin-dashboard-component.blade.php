  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="/">Home</a></li>
        <li>Admin Dashboard</li>
      </ol>
     
      <div class="row">
        <div class="col-md-1">
          <h3>Dashboard</h3>
        </div>
        <div class="col-md-11 text-left">
          {{-- <img src="{{asset('assets/img/flash.gif')}}" alt="iamges" style="width: 45px;"> --}}
        </div>
      </div>

    </div>
  </section>
  <!-- End Breadcrumbs -->

<div class="container" style="padding:20px 0px">
  <div class="alert alert-primary" role="alert"><center><h4>Welcome to the Zanzibar Marine Species Information System!</h4></center></div>
  {{-- @include('view.style.blade') --}}
  <style>
          body{
      background:#eee;    
      }

      .card-box {
          position: relative;
          color: #fff;
          padding: 20px 10px 40px;
          margin: 20px 0px;
      }
      .card-box:hover {
          text-decoration: none;
          color: #f1f1f1;
      }
      .card-box:hover .icon i {
          font-size: 100px;
          transition: 1s;
          -webkit-transition: 1s;
      }
      .card-box .inner {
          padding: 5px 10px 0 10px;
      }
      .card-box h3 {
          font-size: 27px;
          font-weight: bold;
          margin: 0 0 8px 0;
          white-space: nowrap;
          padding: 0;
          text-align: left;
      }
      .card-box p {
          font-size: 15px;
      }
      .card-box .icon {
          position: absolute;
          top: auto;
          bottom: 5px;
          right: 5px;
          z-index: 0;
          font-size: 72px;
          color: rgba(0, 0, 0, 0.15);
      }
      .card-box .card-box-footer {
          position: absolute;
          left: 0px;
          bottom: 0px;
          text-align: center;
          padding: 3px 0;
          color: rgba(255, 255, 255, 0.8);
          background: rgba(0, 0, 0, 0.1);
          width: 100%;
          text-decoration: none;
      }
      .card-box:hover .card-box-footer {
          background: rgba(0, 0, 0, 0.3);
      }
      .bg-blue {
          background-color: #00c0ef !important;
      }
      .bg-green {
          background-color: #00a65a !important;
      }
      .bg-orange {
          background-color: #f39c12 !important;
      }
      .bg-red {
          background-color: #d9534f !important;
     }

     /**
* Template Name: Arsha
* Updated: Mar 10 2023 with Bootstrap v5.2.3
* Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
    font-family: "Open Sans", sans-serif;
    color: #444444;
  }
  
  a {
    color: #47b2e4;
    text-decoration: none;
  }
  
  a:hover {
    color: #73c5eb;
    text-decoration: none;
  }
  
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Jost", sans-serif;
  }
  
  /*--------------------------------------------------------------
  # Preloader
  --------------------------------------------------------------*/
  #preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9999;
    overflow: hidden;
    background: #37517e;
  }
  
  #preloader:before {
    content: "";
    position: fixed;
    top: calc(50% - 30px);
    left: calc(50% - 30px);
    border: 6px solid #37517e;
    border-top-color: #fff;
    border-bottom-color: #fff;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    animation: animate-preloader 1s linear infinite;
  }
  
  @keyframes animate-preloader {
    0% {
      transform: rotate(0deg);
    }
  
    100% {
      transform: rotate(360deg);
    }
  }
  
  /*--------------------------------------------------------------
  # Back to top button
  --------------------------------------------------------------*/
  .back-to-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: 15px;
    z-index: 996;
    background: #47b2e4;
    width: 40px;
    height: 40px;
    border-radius: 50px;
    transition: all 0.4s;
  }
  
  .back-to-top i {
    font-size: 24px;
    color: #fff;
    line-height: 0;
  }
  
  .back-to-top:hover {
    background: #6bc1e9;
    color: #fff;
  }
  
  .back-to-top.active {
    visibility: visible;
    opacity: 1;
  }
  
  /*--------------------------------------------------------------
  # Header
  --------------------------------------------------------------*/
  #header {
    transition: all 0.5s;
    z-index: 997;
    padding: 15px 0;
  }
  
  #header.header-scrolled,
  #header.header-inner-pages {
    background: rgba(40, 58, 90, 0.9);
  }
  
  #header .logo {
    font-size: 30px;
    margin: 0;
    padding: 0;
    line-height: 1;
    font-weight: 500;
    letter-spacing: 2px;
    text-transform: uppercase;
  }
  
  #header .logo a {
    color: #fff;
  }
  
  #header .logo img {
    max-height: 60px;
  }
  
  /*--------------------------------------------------------------
  # Navigation Menu
  --------------------------------------------------------------*/
  /**
  * Desktop Navigation 
  */
  .navbar {
    padding: 0;
  }
  
  .navbar ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }
  
  .navbar li {
    position: relative;
  }
  
  .navbar a,
  .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0 10px 30px;
    font-size: 15px;
    font-weight: 500;
    color: #fff;
    white-space: nowrap;
    transition: 0.3s;
  }
  
  .navbar a i,
  .navbar a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
  }
  
  .navbar a:hover,
  .navbar .active,
  .navbar .active:focus,
  .navbar li:hover>a {
    color: #47b2e4;
  }
  
  .navbar .getstarted,
  .navbar .getstarted:focus {
    padding: 8px 20px;
    margin-left: 30px;
    border-radius: 50px;
    color: #fff;
    font-size: 14px;
    border: 2px solid #47b2e4;
    font-weight: 600;
  }
  
  .navbar .getstarted:hover,
  .navbar .getstarted:focus:hover {
    color: #fff;
    background: #31a9e1;
  }
  
  .navbar .dropdown ul {
    display: block;
    position: absolute;
    left: 14px;
    top: calc(100% + 30px);
    margin: 0;
    padding: 10px 0;
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    transition: 0.3s;
    border-radius: 4px;
  }
  
  .navbar .dropdown ul li {
    min-width: 200px;
  }
  
  .navbar .dropdown ul a {
    padding: 10px 20px;
    font-size: 14px;
    text-transform: none;
    font-weight: 500;
    color: #0c3c53;
  }
  
  .navbar .dropdown ul a i {
    font-size: 12px;
  }
  
  .navbar .dropdown ul a:hover,
  .navbar .dropdown ul .active:hover,
  .navbar .dropdown ul li:hover>a {
    color: #47b2e4;
  }
  
  .navbar .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
  }
  
  .navbar .dropdown .dropdown ul {
    top: 0;
    left: calc(100% - 30px);
    visibility: hidden;
  }
  
  .navbar .dropdown .dropdown:hover>ul {
    opacity: 1;
    top: 0;
    left: 100%;
    visibility: visible;
  }
  
  @media (max-width: 1366px) {
    .navbar .dropdown .dropdown ul {
      left: -90%;
    }
  
    .navbar .dropdown .dropdown:hover>ul {
      left: -100%;
    }
  }
  
  /**
  * Mobile Navigation 
  */
  .mobile-nav-toggle {
    color: #fff;
    font-size: 28px;
    cursor: pointer;
    display: none;
    line-height: 0;
    transition: 0.5s;
  }
  
  .mobile-nav-toggle.bi-x {
    color: #fff;
  }
  
  @media (max-width: 991px) {
    .mobile-nav-toggle {
      display: block;
    }
  
    .navbar ul {
      display: none;
    }
  }
  
  .navbar-mobile {
    position: fixed;
    overflow: hidden;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background: rgba(40, 58, 90, 0.9);
    transition: 0.3s;
    z-index: 999;
  }
  
  .navbar-mobile .mobile-nav-toggle {
    position: absolute;
    top: 15px;
    right: 15px;
  }
  
  .navbar-mobile ul {
    display: block;
    position: absolute;
    top: 55px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    padding: 10px 0;
    border-radius: 10px;
    background-color: #fff;
    overflow-y: auto;
    transition: 0.3s;
  }
  
  .navbar-mobile a,
  .navbar-mobile a:focus {
    padding: 10px 20px;
    font-size: 15px;
    color: #37517e;
  }
  
  .navbar-mobile a:hover,
  .navbar-mobile .active,
  .navbar-mobile li:hover>a {
    color: #47b2e4;
  }
  
  .navbar-mobile .getstarted,
  .navbar-mobile .getstarted:focus {
    margin: 15px;
    color: #37517e;
  }
  
  .navbar-mobile .dropdown ul {
    position: static;
    display: none;
    margin: 10px 20px;
    padding: 10px 0;
    z-index: 99;
    opacity: 1;
    visibility: visible;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  }
  
  .navbar-mobile .dropdown ul li {
    min-width: 200px;
  }
  
  .navbar-mobile .dropdown ul a {
    padding: 10px 20px;
  }
  
  .navbar-mobile .dropdown ul a i {
    font-size: 12px;
  }
  
  .navbar-mobile .dropdown ul a:hover,
  .navbar-mobile .dropdown ul .active:hover,
  .navbar-mobile .dropdown ul li:hover>a {
    color: #47b2e4;
  }
  
  .navbar-mobile .dropdown>.dropdown-active {
    display: block;
  }
  
  /*--------------------------------------------------------------
  # Hero Section
  --------------------------------------------------------------*/
  #hero {
    width: 100%;
    height: 80vh;
    background: #37517e;
  }
  
  #hero .container {
    padding-top: 72px;
  }
  
  #hero h1 {
    margin: 0 0 10px 0;
    font-size: 48px;
    font-weight: 700;
    line-height: 56px;
    color: #fff;
  }
  
  #hero h2 {
    color: rgba(255, 255, 255, 0.6);
    margin-bottom: 50px;
    font-size: 24px;
  }
  
  #hero .btn-get-started {
    font-family: "Jost", sans-serif;
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 10px 28px 11px 28px;
    border-radius: 50px;
    transition: 0.5s;
    margin: 10px 0 0 0;
    color: #fff;
    background: #47b2e4;
  }
  
  #hero .btn-get-started:hover {
    background: #209dd8;
  }
  
  #hero .btn-watch-video {
    font-size: 16px;
    display: flex;
    align-items: center;
    transition: 0.5s;
    margin: 10px 0 0 25px;
    color: #fff;
    line-height: 1;
  }
  
  #hero .btn-watch-video i {
    line-height: 0;
    color: #fff;
    font-size: 32px;
    transition: 0.3s;
    margin-right: 8px;
  }
  
  #hero .btn-watch-video:hover i {
    color: #47b2e4;
  }
  
  #hero .animated {
    animation: up-down 2s ease-in-out infinite alternate-reverse both;
  }
  
  @media (max-width: 991px) {
    #hero {
      height: 100vh;
      text-align: center;
    }
  
    #hero .animated {
      animation: none;
    }
  
    #hero .hero-img {
      text-align: center;
    }
  
    #hero .hero-img img {
      width: 50%;
    }
  }
  
  @media (max-width: 768px) {
    #hero h1 {
      font-size: 28px;
      line-height: 36px;
    }
  
    #hero h2 {
      font-size: 18px;
      line-height: 24px;
      margin-bottom: 30px;
    }
  
    #hero .hero-img img {
      width: 70%;
    }
  }
  
  @media (max-width: 575px) {
    #hero .hero-img img {
      width: 80%;
    }
  
    #hero .btn-get-started {
      font-size: 16px;
      padding: 10px 24px 11px 24px;
    }
  }
  
  @keyframes up-down {
    0% {
      transform: translateY(10px);
    }
  
    100% {
      transform: translateY(-10px);
    }
  }
  
  /*--------------------------------------------------------------
  # Sections General
  --------------------------------------------------------------*/
  section {
    padding: 60px 0;
    overflow: hidden;
  }
  
  .section-bg {
    background-color: #f3f5fa;
  }
  
  .section-title {
    text-align: center;
    padding-bottom: 30px;
  }
  
  .section-title h2 {
    font-size: 32px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 20px;
    padding-bottom: 20px;
    position: relative;
    color: #37517e;
  }
  
  .section-title h2::before {
    content: "";
    position: absolute;
    display: block;
    width: 120px;
    height: 1px;
    background: #ddd;
    bottom: 1px;
    left: calc(50% - 60px);
  }
  
  .section-title h2::after {
    content: "";
    position: absolute;
    display: block;
    width: 40px;
    height: 3px;
    background: #47b2e4;
    bottom: 0;
    left: calc(50% - 20px);
  }
  
  .section-title p {
    margin-bottom: 0;
  }
  
  /*--------------------------------------------------------------
  # Clients
  --------------------------------------------------------------*/
  .clients {
    padding: 12px 0;
    text-align: center;
  }
  
  .clients img {
    max-width: 45%;
    transition: all 0.4s ease-in-out;
    display: inline-block;
    padding: 15px 0;
    filter: grayscale(100);
  }
  
  .clients img:hover {
    filter: none;
    transform: scale(1.1);
  }
  
  @media (max-width: 768px) {
    .clients img {
      max-width: 40%;
    }
  }
  
  /*--------------------------------------------------------------
  # About Us
  --------------------------------------------------------------*/
  .about .content h3 {
    font-weight: 600;
    font-size: 26px;
  }
  
  .about .content ul {
    list-style: none;
    padding: 0;
  }
  
  .about .content ul li {
    padding-left: 28px;
    position: relative;
  }
  
  .about .content ul li+li {
    margin-top: 10px;
  }
  
  .about .content ul i {
    position: absolute;
    left: 0;
    top: 2px;
    font-size: 20px;
    color: #47b2e4;
    line-height: 1;
  }
  
  .about .content p:last-child {
    margin-bottom: 0;
  }
  
  .about .content .btn-learn-more {
    font-family: "Poppins", sans-serif;
    font-weight: 500;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 12px 32px;
    border-radius: 4px;
    transition: 0.3s;
    line-height: 1;
    color: #47b2e4;
    animation-delay: 0.8s;
    margin-top: 6px;
    border: 2px solid #47b2e4;
  }
  
  .about .content .btn-learn-more:hover {
    background: #47b2e4;
    color: #fff;
    text-decoration: none;
  }
  
  /*--------------------------------------------------------------
  # Why Us
  --------------------------------------------------------------*/
  .why-us .content {
    padding: 60px 100px 0 100px;
  }
  
  .why-us .content h3 {
    font-weight: 400;
    font-size: 34px;
    color: #37517e;
  }
  
  .why-us .content h4 {
    font-size: 20px;
    font-weight: 700;
    margin-top: 5px;
  }
  
  .why-us .content p {
    font-size: 15px;
    color: #848484;
  }
  
  .why-us .img {
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
  }
  
  .why-us .accordion-list {
    padding: 0 100px 60px 100px;
  }
  
  .why-us .accordion-list ul {
    padding: 0;
    list-style: none;
  }
  
  .why-us .accordion-list li+li {
    margin-top: 15px;
  }
  
  .why-us .accordion-list li {
    padding: 20px;
    background: #fff;
    border-radius: 4px;
  }
  
  .why-us .accordion-list a {
    display: block;
    position: relative;
    font-family: "Poppins", sans-serif;
    font-size: 16px;
    line-height: 24px;
    font-weight: 500;
    padding-right: 30px;
    outline: none;
    cursor: pointer;
  }
  
  .why-us .accordion-list span {
    color: #47b2e4;
    font-weight: 600;
    font-size: 18px;
    padding-right: 10px;
  }
  
  .why-us .accordion-list i {
    font-size: 24px;
    position: absolute;
    right: 0;
    top: 0;
  }
  
  .why-us .accordion-list p {
    margin-bottom: 0;
    padding: 10px 0 0 0;
  }
  
  .why-us .accordion-list .icon-show {
    display: none;
  }
  
  .why-us .accordion-list a.collapsed {
    color: #343a40;
  }
  
  .why-us .accordion-list a.collapsed:hover {
    color: #47b2e4;
  }
  
  .why-us .accordion-list a.collapsed .icon-show {
    display: inline-block;
  }
  
  .why-us .accordion-list a.collapsed .icon-close {
    display: none;
  }
  
  @media (max-width: 1024px) {
  
    .why-us .content,
    .why-us .accordion-list {
      padding-left: 0;
      padding-right: 0;
    }
  }
  
  @media (max-width: 992px) {
    .why-us .img {
      min-height: 400px;
    }
  
    .why-us .content {
      padding-top: 30px;
    }
  
    .why-us .accordion-list {
      padding-bottom: 30px;
    }
  }
  
  @media (max-width: 575px) {
    .why-us .img {
      min-height: 200px;
    }
  }
  
  /*--------------------------------------------------------------
  # Skills
  --------------------------------------------------------------*/
  .skills .content h3 {
    font-weight: 700;
    font-size: 32px;
    color: #37517e;
    font-family: "Poppins", sans-serif;
  }
  
  .skills .content ul {
    list-style: none;
    padding: 0;
  }
  
  .skills .content ul li {
    padding-bottom: 10px;
  }
  
  .skills .content ul i {
    font-size: 20px;
    padding-right: 4px;
    color: #47b2e4;
  }
  
  .skills .content p:last-child {
    margin-bottom: 0;
  }
  
  .skills .progress {
    height: 60px;
    display: block;
    background: none;
    border-radius: 0;
  }
  
  .skills .progress .skill {
    padding: 0;
    margin: 0 0 6px 0;
    text-transform: uppercase;
    display: block;
    font-weight: 600;
    font-family: "Poppins", sans-serif;
    color: #37517e;
  }
  
  .skills .progress .skill .val {
    float: right;
    font-style: normal;
  }
  
  .skills .progress-bar-wrap {
    background: #e8edf5;
    height: 10px;
  }
  
  .skills .progress-bar {
    width: 1px;
    height: 10px;
    transition: 0.9s;
    background-color: #4668a2;
  }
  
  /*--------------------------------------------------------------
  # Services
  --------------------------------------------------------------*/
  .services .icon-box {
    box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
    padding: 50px 30px;
    transition: all ease-in-out 0.4s;
    background: #fff;
  }
  
  .services .icon-box .icon {
    margin-bottom: 10px;
  }
  
  .services .icon-box .icon i {
    color: #47b2e4;
    font-size: 36px;
    transition: 0.3s;
  }
  
  .services .icon-box h4 {
    font-weight: 500;
    margin-bottom: 15px;
    font-size: 24px;
  }
  
  .services .icon-box h4 a {
    color: #37517e;
    transition: ease-in-out 0.3s;
  }
  
  .services .icon-box p {
    line-height: 24px;
    font-size: 14px;
    margin-bottom: 0;
  }
  
  .services .icon-box:hover {
    transform: translateY(-10px);
  }
  
  .services .icon-box:hover h4 a {
    color: #47b2e4;
  }
  
  /*--------------------------------------------------------------
  # Cta
  --------------------------------------------------------------*/
  .cta {
    background: linear-gradient(rgba(40, 58, 90, 0.9), rgba(40, 58, 90, 0.9)), url("../img/cta-bg.jpg") fixed center center;
    background-size: cover;
    padding: 120px 0;
  }
  
  .cta h3 {
    color: #fff;
    font-size: 28px;
    font-weight: 700;
  }
  
  .cta p {
    color: #fff;
  }
  
  .cta .cta-btn {
    font-family: "Jost", sans-serif;
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 12px 40px;
    border-radius: 50px;
    transition: 0.5s;
    margin: 10px;
    border: 2px solid #fff;
    color: #fff;
  }
  
  .cta .cta-btn:hover {
    background: #47b2e4;
    border: 2px solid #47b2e4;
  }
  
  @media (max-width: 1024px) {
    .cta {
      background-attachment: scroll;
    }
  }
  
  @media (min-width: 769px) {
    .cta .cta-btn-container {
      display: flex;
      align-items: center;
      justify-content: flex-end;
    }
  }
  
  /*--------------------------------------------------------------
  # Portfolio
  --------------------------------------------------------------*/
  .portfolio #portfolio-flters {
    list-style: none;
    margin-bottom: 20px;
  }
  
  .portfolio #portfolio-flters li {
    cursor: pointer;
    display: inline-block;
    margin: 10px 5px;
    font-size: 15px;
    font-weight: 500;
    line-height: 1;
    color: #444444;
    transition: all 0.3s;
    padding: 8px 20px;
    border-radius: 50px;
    font-family: "Poppins", sans-serif;
  }
  
  .portfolio #portfolio-flters li:hover,
  .portfolio #portfolio-flters li.filter-active {
    background: #47b2e4;
    color: #fff;
  }
  
  .portfolio .portfolio-item {
    margin-bottom: 30px;
  }
  
  .portfolio .portfolio-item .portfolio-img {
    overflow: hidden;
  }
  
  .portfolio .portfolio-item .portfolio-img img {
    transition: all 0.6s;
  }
  
  .portfolio .portfolio-item .portfolio-info {
    opacity: 0;
    position: absolute;
    left: 15px;
    bottom: 0;
    z-index: 3;
    right: 15px;
    transition: all 0.3s;
    background: rgba(55, 81, 126, 0.8);
    padding: 10px 15px;
  }
  
  .portfolio .portfolio-item .portfolio-info h4 {
    font-size: 18px;
    color: #fff;
    font-weight: 600;
    color: #fff;
    margin-bottom: 0px;
  }
  
  .portfolio .portfolio-item .portfolio-info p {
    color: #f9fcfe;
    font-size: 14px;
    margin-bottom: 0;
  }
  
  .portfolio .portfolio-item .portfolio-info .preview-link,
  .portfolio .portfolio-item .portfolio-info .details-link {
    position: absolute;
    right: 40px;
    font-size: 24px;
    top: calc(50% - 18px);
    color: #fff;
    transition: 0.3s;
  }
  
  .portfolio .portfolio-item .portfolio-info .preview-link:hover,
  .portfolio .portfolio-item .portfolio-info .details-link:hover {
    color: #47b2e4;
  }
  
  .portfolio .portfolio-item .portfolio-info .details-link {
    right: 10px;
  }
  
  .portfolio .portfolio-item:hover .portfolio-img img {
    transform: scale(1.15);
  }
  
  .portfolio .portfolio-item:hover .portfolio-info {
    opacity: 1;
  }
  
  /*--------------------------------------------------------------
  # Portfolio Details
  --------------------------------------------------------------*/
  .portfolio-details {
    padding-top: 40px;
  }
  
  .portfolio-details .portfolio-details-slider img {
    width: 100%;
  }
  
  .portfolio-details .portfolio-details-slider .swiper-pagination {
    margin-top: 20px;
    position: relative;
  }
  
  .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background-color: #fff;
    opacity: 1;
    border: 1px solid #47b2e4;
  }
  
  .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
    background-color: #47b2e4;
  }
  
  .portfolio-details .portfolio-info {
    padding: 30px;
    box-shadow: 0px 0 30px rgba(55, 81, 126, 0.08);
  }
  
  .portfolio-details .portfolio-info h3 {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
  }
  
  .portfolio-details .portfolio-info ul {
    list-style: none;
    padding: 0;
    font-size: 15px;
  }
  
  .portfolio-details .portfolio-info ul li+li {
    margin-top: 10px;
  }
  
  .portfolio-details .portfolio-description {
    padding-top: 30px;
  }
  
  .portfolio-details .portfolio-description h2 {
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 20px;
  }
  
  .portfolio-details .portfolio-description p {
    padding: 0;
  }
  
  /*--------------------------------------------------------------
  # Team
  --------------------------------------------------------------*/
  .team .member {
    position: relative;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    padding: 30px;
    border-radius: 5px;
    background: #fff;
    transition: 0.5s;
    height: 100%;
  }
  
  .team .member .pic {
    overflow: hidden;
    width: 200px;
    border-radius: 3%;
  }
  
  .team .member .pic img {
    transition: ease-in-out 0.3s;
  }
  
  .team .member:hover {
    transform: translateY(-10px);
  }
  
  .team .member .member-info {
    padding-left: 30px;
  }
  
  .team .member h4 {
    font-weight: 700;
    margin-bottom: 5px;
    font-size: 20px;
    color: #37517e;
  }
  
  .team .member span {
    display: block;
    font-size: 15px;
    padding-bottom: 10px;
    position: relative;
    font-weight: 500;
  }
  
  .team .member span::after {
    content: "";
    position: absolute;
    display: block;
    width: 50px;
    height: 1px;
    background: #cbd6e9;
    bottom: 0;
    left: 0;
  }
  
  .team .member p {
    margin: 10px 0 0 0;
    font-size: 14px;
  }
  
  .team .member .social {
    margin-top: 12px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
  }
  
  .team .member .social a {
    transition: ease-in-out 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50px;
    width: 32px;
    height: 32px;
    background: #eff2f8;
  }
  
  .team .member .social a i {
    color: #37517e;
    font-size: 16px;
    margin: 0 2px;
  }
  
  .team .member .social a:hover {
    background: #47b2e4;
  }
  
  .team .member .social a:hover i {
    color: #fff;
  }
  
  .team .member .social a+a {
    margin-left: 8px;
  }
  
  /*--------------------------------------------------------------
  # Pricing
  --------------------------------------------------------------*/
  .pricing .row {
    padding-top: 40px;
  }
  
  .pricing .box {
    padding: 60px 40px;
    box-shadow: 0 3px 20px -2px rgba(20, 45, 100, 0.1);
    background: #fff;
    height: 100%;
    border-top: 4px solid #fff;
    border-radius: 5px;
  }
  
  .pricing h3 {
    font-weight: 500;
    margin-bottom: 15px;
    font-size: 20px;
    color: #37517e;
  }
  
  .pricing h4 {
    font-size: 48px;
    color: #37517e;
    font-weight: 400;
    font-family: "Jost", sans-serif;
    margin-bottom: 25px;
  }
  
  .pricing h4 sup {
    font-size: 28px;
  }
  
  .pricing h4 span {
    color: #47b2e4;
    font-size: 18px;
    display: block;
  }
  
  .pricing ul {
    padding: 20px 0;
    list-style: none;
    color: #999;
    text-align: left;
    line-height: 20px;
  }
  
  .pricing ul li {
    padding: 10px 0 10px 30px;
    position: relative;
  }
  
  .pricing ul i {
    color: #28a745;
    font-size: 24px;
    position: absolute;
    left: 0;
    top: 6px;
  }
  
  .pricing ul .na {
    color: #ccc;
  }
  
  .pricing ul .na i {
    color: #ccc;
  }
  
  .pricing ul .na span {
    text-decoration: line-through;
  }
  
  .pricing .buy-btn {
    display: inline-block;
    padding: 12px 35px;
    border-radius: 50px;
    color: #47b2e4;
    transition: none;
    font-size: 16px;
    font-weight: 500;
    font-family: "Jost", sans-serif;
    transition: 0.3s;
    border: 1px solid #47b2e4;
  }
  
  .pricing .buy-btn:hover {
    background: #47b2e4;
    color: #fff;
  }
  
  .pricing .featured {
    border-top-color: #47b2e4;
  }
  
  .pricing .featured .buy-btn {
    background: #47b2e4;
    color: #fff;
  }
  
  .pricing .featured .buy-btn:hover {
    background: #23a3df;
  }
  
  @media (max-width: 992px) {
    .pricing .box {
      max-width: 60%;
      margin: 0 auto 30px auto;
    }
  }
  
  @media (max-width: 767px) {
    .pricing .box {
      max-width: 80%;
      margin: 0 auto 30px auto;
    }
  }
  
  @media (max-width: 420px) {
    .pricing .box {
      max-width: 100%;
      margin: 0 auto 30px auto;
    }
  }
  
  /*--------------------------------------------------------------
  # Frequently Asked Questions
  --------------------------------------------------------------*/
  .faq .faq-list {
    padding: 0 100px;
  }
  
  .faq .faq-list ul {
    padding: 0;
    list-style: none;
  }
  
  .faq .faq-list li+li {
    margin-top: 15px;
  }
  
  .faq .faq-list li {
    padding: 20px;
    background: #fff;
    border-radius: 4px;
    position: relative;
  }
  
  .faq .faq-list a {
    display: block;
    position: relative;
    font-family: "Poppins", sans-serif;
    font-size: 16px;
    line-height: 24px;
    font-weight: 500;
    padding: 0 30px;
    outline: none;
    cursor: pointer;
  }
  
  .faq .faq-list .icon-help {
    font-size: 24px;
    position: absolute;
    right: 0;
    left: 20px;
    color: #47b2e4;
  }
  
  .faq .faq-list .icon-show,
  .faq .faq-list .icon-close {
    font-size: 24px;
    position: absolute;
    right: 0;
    top: 0;
  }
  
  .faq .faq-list p {
    margin-bottom: 0;
    padding: 10px 0 0 0;
  }
  
  .faq .faq-list .icon-show {
    display: none;
  }
  
  .faq .faq-list a.collapsed {
    color: #37517e;
    transition: 0.3s;
  }
  
  .faq .faq-list a.collapsed:hover {
    color: #47b2e4;
  }
  
  .faq .faq-list a.collapsed .icon-show {
    display: inline-block;
  }
  
  .faq .faq-list a.collapsed .icon-close {
    display: none;
  }
  
  @media (max-width: 1200px) {
    .faq .faq-list {
      padding: 0;
    }
  }
  
  /*--------------------------------------------------------------
  # Contact
  --------------------------------------------------------------*/
  .contact .info {
    border-top: 3px solid #47b2e4;
    border-bottom: 3px solid #47b2e4;
    padding: 30px;
    background: #fff;
    width: 100%;
    box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.1);
  }
  
  .contact .info i {
    font-size: 20px;
    color: #47b2e4;
    float: left;
    width: 44px;
    height: 44px;
    background: #e7f5fb;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
  }
  
  .contact .info h4 {
    padding: 0 0 0 60px;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 5px;
    color: #37517e;
  }
  
  .contact .info p {
    padding: 0 0 10px 60px;
    margin-bottom: 20px;
    font-size: 14px;
    color: #6182ba;
  }
  
  .contact .info .email p {
    padding-top: 5px;
  }
  
  .contact .info .social-links {
    padding-left: 60px;
  }
  
  .contact .info .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #333;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
    margin-right: 10px;
  }
  
  .contact .info .social-links a:hover {
    background: #47b2e4;
    color: #fff;
  }
  
  .contact .info .email:hover i,
  .contact .info .address:hover i,
  .contact .info .phone:hover i {
    background: #47b2e4;
    color: #fff;
  }
  
  .contact .php-email-form {
    width: 100%;
    border-top: 3px solid #47b2e4;
    border-bottom: 3px solid #47b2e4;
    padding: 30px;
    background: #fff;
    box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
  }
  
  .contact .php-email-form .form-group {
    padding-bottom: 8px;
  }
  
  .contact .php-email-form .validate {
    display: none;
    color: red;
    margin: 0 0 15px 0;
    font-weight: 400;
    font-size: 13px;
  }
  
  .contact .php-email-form .error-message {
    display: none;
    color: #fff;
    background: #ed3c0d;
    text-align: left;
    padding: 15px;
    font-weight: 600;
  }
  
  .contact .php-email-form .error-message br+br {
    margin-top: 25px;
  }
  
  .contact .php-email-form .sent-message {
    display: none;
    color: #fff;
    background: #18d26e;
    text-align: center;
    padding: 15px;
    font-weight: 600;
  }
  
  .contact .php-email-form .loading {
    display: none;
    background: #fff;
    text-align: center;
    padding: 15px;
  }
  
  .contact .php-email-form .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid #18d26e;
    border-top-color: #eee;
    animation: animate-loading 1s linear infinite;
  }
  
  .contact .php-email-form .form-group {
    margin-bottom: 20px;
  }
  
  .contact .php-email-form label {
    padding-bottom: 8px;
  }
  
  .contact .php-email-form input,
  .contact .php-email-form textarea {
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
    border-radius: 4px;
  }
  
  .contact .php-email-form input:focus,
  .contact .php-email-form textarea:focus {
    border-color: #47b2e4;
  }
  
  .contact .php-email-form input {
    height: 44px;
  }
  
  .contact .php-email-form textarea {
    padding: 10px 12px;
  }
  
  .contact .php-email-form button[type=submit] {
    background: #47b2e4;
    border: 0;
    padding: 12px 34px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
  }
  
  .contact .php-email-form button[type=submit]:hover {
    background: #209dd8;
  }
  
  @keyframes animate-loading {
    0% {
      transform: rotate(0deg);
    }
  
    100% {
      transform: rotate(360deg);
    }
  }
  
  /*--------------------------------------------------------------
  # Breadcrumbs
  --------------------------------------------------------------*/
  .breadcrumbs {
    padding: 15px 0;
    background: #f3f5fa;
    min-height: 40px;
    margin-top: 72px;
  }
  
  @media (max-width: 992px) {
    .breadcrumbs {
      margin-top: 68px;
    }
  }
  
  .breadcrumbs h2 {
    font-size: 28px;
    font-weight: 600;
    color: #37517e;
  }
  
  .breadcrumbs ol {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    padding: 0 0 10px 0;
    margin: 0;
    font-size: 14px;
  }
  
  .breadcrumbs ol li+li {
    padding-left: 10px;
  }
  
  .breadcrumbs ol li+li::before {
    display: inline-block;
    padding-right: 10px;
    color: #4668a2;
    content: "/";
  }
  
  /*--------------------------------------------------------------
  # Footer
  --------------------------------------------------------------*/
  #footer {
    font-size: 14px;
    background: #37517e;
  }
  
  #footer .footer-newsletter {
    padding: 50px 0;
    background: #f3f5fa;
    text-align: center;
    font-size: 15px;
    color: #444444;
  }
  
  #footer .footer-newsletter h4 {
    font-size: 24px;
    margin: 0 0 20px 0;
    padding: 0;
    line-height: 1;
    font-weight: 600;
    color: #37517e;
  }
  
  #footer .footer-newsletter form {
    margin-top: 30px;
    background: #fff;
    padding: 6px 10px;
    position: relative;
    border-radius: 50px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.06);
    text-align: left;
  }
  
  #footer .footer-newsletter form input[type=email] {
    border: 0;
    padding: 4px 8px;
    width: calc(100% - 100px);
  }
  
  #footer .footer-newsletter form input[type=submit] {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    border: 0;
    background: none;
    font-size: 16px;
    padding: 0 20px;
    background: #47b2e4;
    color: #fff;
    transition: 0.3s;
    border-radius: 50px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  }
  
  #footer .footer-newsletter form input[type=submit]:hover {
    background: #209dd8;
  }
  
  #footer .footer-top {
    padding: 60px 0 30px 0;
    background: #fff;
  }
  
  #footer .footer-top .footer-contact {
    margin-bottom: 30px;
  }
  
  #footer .footer-top .footer-contact h3 {
    font-size: 28px;
    margin: 0 0 10px 0;
    padding: 2px 0 2px 0;
    line-height: 1;
    text-transform: uppercase;
    font-weight: 600;
    color: #37517e;
  }
  
  #footer .footer-top .footer-contact p {
    font-size: 14px;
    line-height: 24px;
    margin-bottom: 0;
    font-family: "Jost", sans-serif;
    color: #5e5e5e;
  }
  
  #footer .footer-top h4 {
    font-size: 16px;
    font-weight: bold;
    color: #37517e;
    position: relative;
    padding-bottom: 12px;
  }
  
  #footer .footer-top .footer-links {
    margin-bottom: 30px;
  }
  
  #footer .footer-top .footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  #footer .footer-top .footer-links ul i {
    padding-right: 2px;
    color: #47b2e4;
    font-size: 18px;
    line-height: 1;
  }
  
  #footer .footer-top .footer-links ul li {
    padding: 10px 0;
    display: flex;
    align-items: center;
  }
  
  #footer .footer-top .footer-links ul li:first-child {
    padding-top: 0;
  }
  
  #footer .footer-top .footer-links ul a {
    color: #777777;
    transition: 0.3s;
    display: inline-block;
    line-height: 1;
  }
  
  #footer .footer-top .footer-links ul a:hover {
    text-decoration: none;
    color: #47b2e4;
  }
  
  #footer .footer-top .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #47b2e4;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
  }
  
  #footer .footer-top .social-links a:hover {
    background: #209dd8;
    color: #fff;
    text-decoration: none;
  }
  
  #footer .footer-bottom {
    padding-top: 30px;
    padding-bottom: 30px;
    color: #fff;
  }
  
  #footer .copyright {
    float: left;
  }
  
  #footer .credits {
    float: right;
    font-size: 13px;
  }
  
  #footer .credits a {
    transition: 0.3s;
  }
  
  @media (max-width: 768px) {
    #footer .footer-bottom {
      padding-top: 20px;
      padding-bottom: 20px;
    }
  
    #footer .copyright,
    #footer .credits {
      text-align: center;
      float: none;
    }
  
    #footer .credits {
      padding-top: 4px;
    }
  }

  </style>
 
  <div class="row" style="padding:25px 0px">
    
      <div class="col-lg-3 col-sm-6">
        <div class="card-box bg-blue">
            <div class="inner">
                <h3> {{ $users }} </h3>
                <p> Users </p>
            </div>
            <div class="icon">
              <i class="bi bi-people-fill"></i>
            </div>
            <a href="{{ route('admin.register') }}" class="card-box-footer">View More <i class="bi bi-arrow-right"></i></a>
        </div>
     </div>

     <div class="col-lg-3 col-sm-6">
        <div class="card-box bg-blue">
            <div class="inner">
                <h3> {{ $documents }} </h3>
                <p> Documents </p>
            </div>
            <div class="icon">
              <i class="bi bi-filetype-pdf"></i>
            </div>
            <a href="{{ route('show') }}" class="card-box-footer">View More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      
      <div class="col-lg-3 col-sm-6">
          <div class="card-box bg-green">
              <div class="inner">
                  <h3> {{ $allSpecies }} </h3>
                  <p> Species </p>
              </div>
              <div class="icon">
                <i class="bi bi-file-binary-fill"></i>
              </div>
              <a href="{{ route('admin.species') }}" class="card-box-footer">View More <i class="bi bi-arrow-right"></i></i></a>
          </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="card-box bg-green">
            <div class="inner">
                <h3> {{ $speciesHealth }} </h3>
                <p> Available Species </p>
            </div>
            <div class="icon">
              <i class="bi bi-file-earmark-medical"></i>
            </div>
            <a href="{{ route('admin.species') }}" class="card-box-footer">View More <i class="bi bi-arrow-right"></i></i></a>
        </div>
    </div>

      <div class="col-lg-3 col-sm-6">
        <div class="card-box bg-orange">
            <div class="inner">
                <h3> {{ $speciesExi }} </h3>
                <p> Extinct Species </p>
            </div>
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <a href="{{ route('admin.species') }}" class="card-box-footer">View More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      
      <div class="col-lg-3 col-sm-6">
          <div class="card-box bg-red">
              <div class="inner">
                  <h3> {{ $speciesIndanger }} </h3>
                  <p> Species In Danger </p>
              </div>
              <div class="icon">
                <i class="bi bi-radioactive"></i>
              </div>
              <a href="{{ route('admin.species') }}" class="card-box-footer">View More <i class="bi bi-arrow-right"></i></a>
          </div>
      </div>

      <div class="col-lg-3 col-sm-6">
          <div class="card-box bg-orange">
              <div class="inner">
                  <h3> {{ $news }} </h3>
                  <p> News </p>
              </div>
              <div class="icon">
                <i class="bi bi-newspaper"></i>
              </div>
              <a href="{{ route('admin.news') }}" class="card-box-footer">View More <i class="bi bi-arrow-right"></i></a>
          </div>
      </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card-box bg-red">
          <div class="inner">
              <h3> {{ $contacts }} </h3>
              <p> Contacts </p>
          </div>
          <div class="icon">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <a href="{{ route('admin.contact') }}" class="card-box-footer">View More <i class="bi bi-phone-right"></i></i></a>
      </div>
  </div>
  </div>
</div>

