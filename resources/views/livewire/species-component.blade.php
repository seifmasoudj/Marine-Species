
<main id="main">

    <section class="inner-page breadcrumbs" id="breadcrumbs">
     
      <section id="team" class="team section-bg">
      <div class="container-fluid">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Species</li>
        </ol>
        <h4>Species</h4>
        <div class="section-title">
          <h2>Species</h2>
          <p>See All Species Available at Zanzibar Island, and their Characteristics, Scientific Name, Behavior, Released Date and Status of the Species.</p>
        </div>

        <div class="row">
          @foreach ($species as $specie)
          <div class="col-lg-6  mt-4 mt-lg-8">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/img/species') }}/{{ $specie->images }}" class="img-fluid" alt=""></div>
              <div class="member-info text-start text-success">
                <div class="row">
                  <div class="col-md-6">
                    Common Name :
                  </div>
                  <div class="col-md-6">
                    {{ $specie->regularName }}
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Scientific Name :
                  </div>
                  <div class="col-md-6">
                    {{ $specie->ScientificName }}
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Descriptions :
                  </div>
                  <div class="col-md-6">
                    {{ $specie->Description }} 
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    Status :
                  </div>
                  <div class="col-md-6">
                    {{ $specie->status }}
                  </div>
                </div>                              
            </div>
            <div class="gap-8">
              <a href="{{ route('species.details',['regularName'=>$specie->regularName]) }}">                
                <i class="btn btn-primary btn-sm">view</i> 
              </a>                
            </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section>

  </main>
  <!-- End #main -->
