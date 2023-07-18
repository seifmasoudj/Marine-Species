
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="/">Home</a></li>
        <li>Species Details</li>
      </ol>
      <h2>Species</h2>

    </div>
  </section>
  <!-- End Breadcrumbs -->

  <section class="inner-page setting text-md-start inner-page text-center">
  
    <div class="container">

      <div class="section-title">
        <h2>{{ $specie->regularName }}</h2>
      </div>

      <div class="row content">
        <div class="col-lg-3">
          <div id="list-example" class="list-group">
            <a class="list-group-item list-group-item-action" href="#list-item-1">Common Name</a>
            <a class="list-group-item list-group-item-action" href="#list-item-2">Scientific Name</a>
            <a class="list-group-item list-group-item-action" href="#list-item-3">Details</a>
            <a class="list-group-item list-group-item-action" href="#list-item-4">Taxonomy</a>
          </div>
          <p>
            <div class="pic"><img src="{{ asset('assets/img/species') }}/{{ $specie->images }}" class="img-fluid rounded-circle img-thumbnail" alt="image"></div>
          </p>
        </div>
        <div class="col-lg-9">
          <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <h3 id="list-item-1" class="text-primary">Common Name</h3>
            <span>The Common Name of this species is </span><i class="text-primary text-lg-strong">{{$specie->regularName}}</i><br/>
            <h3 id="list-item-2" class="text-primary">Scientific Name</h3>
            <span>The Scientific Name of this species is </span><i class="text-primary text-lg-strong">{{$specie->ScientificName}}</i><br/>
            <h3 id="list-item-3" class="text-primary">Details</h3>
            <p>{{$specie->details}}</p>
            <h4 id="list-item-4" class="text-primary">Taxonomy</h4>
            <span>According to Taxonomy for naming, describing and classifying of organism the king dome of this species is </span><i class="text-primary text-lg-strong">{{$specie->kingdome}}</i> ,
            Phylum is </span><i class="text-primary text-lg-strong">{{$specie->phylum}}</i> , Class is </span><i class="text-primary text-lg-strong">{{$specie->class}}</i>,
            Order is </span><i class="text-primary text-lg-strong">{{$specie->orders}}</i> , Family is </span><i class="text-primary text-lg-strong">{{$specie->family}}</i> ,
            Genus is </span><i class="text-primary text-lg-strong">{{$specie->genus}}</i> and Species Name is </span><i class="text-primary text-lg-strong">{{$specie->species}}</i>
          </div>        
          <p class="text-success text-center">
            Posted at: {{$specie->created_at}}
          </p>
          <a href="#" class="btn btn-outline-success">Download</a>
        </div>
      </div>
    </div>
  
  </section>
</main>
<!-- End #main -->
