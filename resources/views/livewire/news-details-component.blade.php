<main id="main">
  <style>
    .setting{
      height: 1500px;
      width: 800px;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li>News Details</li>
        </ol>
       
        <div class="row">
          <div class="col-md-2">
            <h4>News Page</h4>
          </div>
          <div class="col-md-10 text-left">
            <img src="{{asset('assets/img/flash.gif')}}" alt="iamges" style="width: 45px;">
          </div>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <section class="setting text-md-start inner-page text-center">
      <div class="container">
        <h3 class="section-title text-primary text-center">
          {{ $new->title }}
        </h3>
        <p class="justify-content-center">
          {{ $new->Descriptions }}
        </p>
        <p class="text-success text-center">
          Posted at: {{ $new->created_at }}
        </p>
      </div>
    </section>

    <div class="footer-newsletter text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              {{-- <a href="{{ route('exportNewsPDF',['download'=>'pdf']) }}" class="btn btn-outline-success">Download</a> --}}
            </div>
          </div>
        </div>
      </div>

  </main>
  <!-- End #main -->