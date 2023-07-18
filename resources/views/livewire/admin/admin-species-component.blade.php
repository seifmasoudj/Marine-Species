<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display:block !important;
        }
    </style>
    <div class="container" style="padding:100px 0px">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="row g-0">
                    <div class="col-sm-2 col-md-2">
                      All Species
                    </div>
                    <div class="col-2 col-md-2">
                        <a href="{{ route('admin.exportPDF',['download'=>'pdf']) }}" class="btn btn-success">Download pdf</a>
                    </div>
                    <div class="col-4 col-md-4">
                        <a href="{{ route('admin.addspecies') }}" class="btn btn-success">Add New</a>
                    </div>
                    <div class="col-4 col-md-4 right-4">
                        <input class="form-control me-1" type="search" placeholder="Search..." aria-label="Search..." wire:model="searchTerm">
                    </div>
                </div>                
                <div class="panel-body" style="padding:20px 0px">
                    @if(Session::has('message'))
                     <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    {{-- <h1>{{ $title }}</h1>
                    <p>{{ $created_at }}</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>   --}}
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 bg-white table-hover table-striped table-sm">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>C. Name</th>
                                    <th>Scientific Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($species as $specie )
                                <tr>
                                    <td>{{ $specie->id }}</td>
                                    <td><img src="{{ asset('assets/img/species') }}/{{ $specie->images }}" width="60" alt="species"></td>
                                    <td>{{ $specie->regularName }}</td>
                                    <td>{{ $specie->ScientificName }}</td>                                   
                                    <td>{{ $specie->Description  }}</td>                              
                                    <td>{{ $specie->status }}</td>                                    
                                    <td>{{ $specie->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.editspecies',['species_id'=>$specie->id]) }}"><i class="bi bi-pencil-square"></i></a>
                                        <a href="#" onclick="confirm('Are you sure, You want to delete?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSpecies({{ $specie->id }})" style="margin-left:10px;"><i class="bi bi-trash3-fill"></i></a>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $species->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

