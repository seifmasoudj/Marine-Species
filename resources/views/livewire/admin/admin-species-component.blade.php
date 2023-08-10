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
                <div class="row">
                    <div class="col">
                      All Species
                    </div>
                    <div class="col">
                        <a href="{{ route('admin.exportPDF',['download'=>'pdf']) }}" class="btn btn-success">Report</a>
                    </div>
                    <div class="col">
                        <a href="{{ route('admin.addspecies') }}" class="btn btn-success">Add New</a>
                    </div>
                    <div class="col">
                        <input class="form-control me-1" type="search" placeholder="Search..." aria-label="Search" wire:model="searchTerm">
                    </div>
                </div>                
                <div class="panel-body" style="padding:20px 0px">
                    @if(Session::has('message'))
                     <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif                
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 bg-white table-hover table-striped table-sm">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Common Name</th>
                                    <th>Scientific Name</th>
                                    <th>Description</th>
                                    <th>Details</th>
                                    <th>KIngDome</th>
                                    <th>Phylum</th>
                                    <th>Class</th>
                                    <th>Order</th>
                                    <th>Family</th>
                                    <th>Genus</th>
                                    <th>Species</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($species->count())
                                    @foreach ($species as $specie )
                                    <tr>
                                        <td>{{ $specie->id }}</td>
                                        <td><img src="{{ asset('assets/img/NewSpecies') }}/{{ $specie->images }}" width="60" alt="species"></td>
                                        <td>{{ $specie->regularName }}</td>
                                        <td>{{ $specie->ScientificName }}</td>                                   
                                        <td>{{ $specie->Description  }}</td>  
                                        <td>{{ $specie->details  }}</td>  
                                        <td>{{ $specie->kingdome }}</td>
                                        <td>{{ $specie->phylum }}</td>                                   
                                        <td>{{ $specie->class  }}</td>                              
                                        <td>{{ $specie->orders }}</td>                                    
                                        <td>{{ $specie->family }}</td>     
                                        <td>{{ $specie->genus }}</td>                                    
                                        <td>{{ $specie->species }}</td>                         
                                        <td>{{ $specie->status }}</td>                                    
                                        <td>{{ $specie->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.editspecies',['specie_id'=>$specie->id]) }}"><i class="bi bi-pencil-square"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this species?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSpecies({{ $specie->id }})" style="margin-left:10px;"><i class="bi bi-trash3-fill"></i></a>
                                        </td>
                                    </tr> 
                                    @endforeach
                                @else
                                   <div class="alert alert-warning" role="alert">No Species Found, try Search again!</div>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    {{ $species->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

