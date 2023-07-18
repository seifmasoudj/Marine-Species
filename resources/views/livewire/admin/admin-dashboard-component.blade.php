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

<div class="container">
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

  </style>
 
  <div class="row" style="padding:25px 0px">
      <div class="col-lg-3 col-sm-6">
          <div class="card-box bg-blue">
              <div class="inner">
                  <h3> {{ $documents }} </h3>
                  <p> Documents </p>
              </div>
              <div class="icon">
                <i class="bi bi-filetype-pdf"></i>
              </div>
              <a href="#" class="card-box-footer">View More <i class="bi bi-arrow-right"></i></a>
          </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="card-box bg-blue">
            <div class="inner">
                <h3> {{ $users }} </h3>
                <p> Users </p>
            </div>
            <div class="icon">
              <i class="bi bi-filetype-pdf"></i>
            </div>
            <a href="#" class="card-box-footer">View More <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
      
      <div class="col-lg-3 col-sm-6">
          <div class="card-box bg-green">
              <div class="inner">
                  <h3> {{ $species }} </h3>
                  <p> Species </p>
              </div>
              <div class="icon">
                <i class="bi bi-file-binary-fill"></i>
              </div>
              <a href="#" class="card-box-footer">View More <i class="bi bi-arrow-right"></i></i></a>
          </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card-box bg-orange">
            <div class="inner">
                <h3> {{ $speciesExi }} </h3>
                <p> Exihibit </p>
            </div>
            <div class="icon">
              <i class="bi bi-newspaper"></i>
            </div>
            <a href="#" class="card-box-footer">View More <i class="bi bi-arrow-right"></i></a>
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
              <a href="#" class="card-box-footer">View More <i class="bi bi-arrow-right"></i></a>
          </div>
      </div>
      <div class="col-lg-3 col-sm-6">
          <div class="card-box bg-red">
              <div class="inner">
                  <h3> {{ $speciesIndenger }} </h3>
                  <p> Species InDenger </p>
              </div>
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="#" class="card-box-footer">View More <i class="bi bi-arrow-right"></i></a>
          </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card-box bg-red">
            <div class="inner">
                <h3> {{ $logactivities }} </h3>
                <p> Log Activity </p>
            </div>
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <a href="#" class="card-box-footer">View More <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card-box bg-green">
          <div class="inner">
              <h3> {{ $taxonomy }} </h3>
              <p> Taxonomy </p>
          </div>
          <div class="icon">
            <i class="bi bi-file-binary-fill"></i>
          </div>
          <a href="#" class="card-box-footer">View More <i class="bi bi-arrow-right"></i></i></a>
      </div>
  </div>
  </div>
</div>

