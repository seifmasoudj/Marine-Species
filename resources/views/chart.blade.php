<!DOCTYPE html>
<html>
<head>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">  
    <title>Chart</title>
<body>
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center">
          <h1 class="logo me-auto"><a href="index.html">ZMSIS</a></h1>
          <nav id="navbar" class="navbar">
                <ul class="me-2">
                {{-- <li>
                <h1 class="logo me-auto"><a href="#"><img src="{{ asset('assets/img/ZanzibarMarine.png') }}"></a></h1>       
                </li> --}}
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('about') }}">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contact</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('userDownload') }}">Documents</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('statistics') }}">Statistics</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('species') }}">Species</a></li>
                    @auth
                        <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}  (Account)</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                @if(Auth::user()->utype == 'ADM')
                                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ route('admin.categories') }}">Categories</a></li>
                                <li><a href="{{ route('admin.species') }}">Species</a></li>
                                <li><a href="{{ route('admin.taxonomies') }}">Taxonomy</a></li>
                                <li><a href="{{ route('admin.news') }}">News</a></li>
                                <li><a href="{{ route('admin.notification') }}">Notifications</a></li>
                                <li><a href="{{ route('show') }}">Documents</a></li>  
                                <li><a href="{{ route('admin.register') }}">Register User</a></li>  
                                <li><a href="{{ route('admin.contact') }}">Contact</a></li>                                                       
                                <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                              @else 
                                <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ route('admin.categories') }}">Categories</a></li>
                                <li><a href="{{ route('admin.species') }}">Species</a></li>
                                <li><a href="{{ route('admin.taxonomies') }}">Taxonomy</a></li>
                                <li><a href="{{ route('admin.news') }}">News</a></li>
                                <li><a href="{{ route('admin.notification') }}">Notifications</a></li>
                                <li><a href="{{ route('show') }}">Documents</a></li> 
                                    <li><a href="{{ route('admin.contact') }}">Contact</a></li>                                                                                       
                                <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                                @endif 
                            </ul>
                        </li>
                    @endif
            
                    @auth                           
                        <li>
                          <a class="nav-link scrollto active" href="{{ ('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a> 
                        </li>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    @else                      
                        <li>
                            {{-- <a class="nav-link   scrollto" href="{{ route('login') }}">Login</a> --}}
                        </li>
                    @endauth        
                </ul>           
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
          </div>
      </header>
      <div class="container"style="padding:120px 0px">
        <h1>Specie in each Mounth</h1>
          <canvas id="myChart" style="width: 900px; height: 300px;"></canvas>
      </div>  <!-- ======= Footer ======= -->
      <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
  
              <div class="col-lg-3 col-md-6 footer-contact">
                <h3>ZMSIS</h3>
                <p>
                  Kibele <br>
                  Zanzibar University, 307<br>
                  Unguja <br><br>
                  <strong>Phone:</strong> +255774310331<br>
                  <strong>Email:</strong> seifmasoudj@gmail.com<br>
                </p>
              </div>
  
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/home') }}">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="{{ route('species') }}">Species</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact</a></li>
                </ul>
              </div>
  
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Literature</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Worms</a></li>
                </ul>
              </div>
  
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Networks</h4>
                <p>See the Social Medial for more Information</p>
                <div class="mt-3">
                  <a href="#"><img src="{{ asset('assets/img/facebook.png') }}" style="width: 50px;"></a>
                  <a href="#"><img src="{{ asset('assets/img/insta.png') }}" style="width: 50px;"></a>
                  <a href="#"><img src="{{ asset('assets/img/twitter.png') }}" style="width: 50px;"></a>
                  <a href="#"><img src="{{ asset('assets/img/whattsap.png') }}" style="width: 50px;"></a>
                </div>
              </div>
  
            </div>
          </div>
        </div>
  
        <div class="container footer-bottom clearfix">
          <div class="copyright">
            &copy; Copyright <strong><span>Seif</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">ZU Student</a>
          </div>
        </div>
      </footer><!-- End Footer -->

</body>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
  
    var labels =  {{ Js::from($labels) }};
    var users =  {{ Js::from($data) }};
  
    const data = {
        labels: labels,
        datasets: [{
            label: 'Species',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: users,
        }]
    };
  
    const config = {
        type: 'bar',
        data: data,
        options: {}
    };
  
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
  
</script>
<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
