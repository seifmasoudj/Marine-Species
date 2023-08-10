<div>
  <style>
    nav svg{
        height: 20px;
    }
    nav .hidden{
        display:block !important;
    }
</style>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
          <h1>See All Species Available at Zanzibar Island</h1>
          <h2>Including their Characteristics, Scientific Name, Behavior, Released Date and Status of the Species</h2>
          <!-- <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div> -->
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/species/fish.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= Portfolio Details Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title text-center">
              <h2>Available Species</h2>
              <p>See All Species Available at Zanzibar Island, and their Characteristics, Scientific Name, Behavior, Released Date and Status of the Species by filter.</p>
            </div>
          </div>          
          <div class="col-lg-4 text-center text-strong">
            @foreach ($notifications as $notification)
            <a href="{{ route('species') }}"><div class="alert alert-success" role="alert">{{ $notification->text }} !!</div></a>
            @endforeach            
          </div>
          <div class="col-lg-4 section-title text-center">
            <input class="form-control me-1" type="search" placeholder="Search to filter species..." aria-label="Search..." wire:model="searchTerm"><br/>
            <p>Search Species by Regular Name, Common Name, Status and Taxonomy.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8">
            @if ($species->count())
              @foreach ($species as $specie)
                <div class="col-lg-12 mt-4 mt-lg-8">
                  <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ asset('assets/img/NewSpecies') }}/{{ $specie->images }}" class="img-fluid" alt=""></div>
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
            @else
            <div class="alert alert-warning text-center" role="alert">No Species Found, try Search again!</div>
            @endif
            <p style="padding:2px 0px">
              {{ $species->links() }}
            </p>           
          </div>
         
          <div class="col-lg-4">
            <div class="row">
              <div class="col-4 text-right">
                <h3>News</h3>
              </div>
              <div class="col-8 text-capitalize text-left">
                <img src="{{asset('assets/img/flash.gif')}}" alt="iamges" style="width: 45px;">
              </div>
            </div> 
            @if ($news->count())   
              @foreach ($news as $new)
                <div class="portfolio-description">
                  <a href="{{ route('news.details',['title'=>$new->title]) }}">                
                    {{$new->title}} 
                  </a>                
                  <p>
                    <i class="text-danger">Posted at:</i> <span>{{$new->created_at}}</span>
                  </p>
                </div>
              @endforeach 
            @else
              <div class="alert alert-warning" role="alert">No News Found, try Search again!</div>
            @endif
            {{ $news->links() }}           
          </div>
        </div>

      </div>
    </section>
    <!-- End Portfolio Details Section -->
      </div>
    </section>
  </main>
  <!-- End #main -->
</div>