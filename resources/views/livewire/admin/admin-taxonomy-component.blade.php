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
                        Taxonomy
                    </div>
                    <div class="col">
                        <a href="{{ route('admin.taxonomyPDF',['download'=>'pdf']) }}" class="btn btn-success">Report</a>
                    </div>
                    <div class="col">
                        <a href="{{ route('admin.add.taxonomy') }}" class="btn btn-success">Add New</a>
                    </div>
                    <div class="col">
                        <input class="form-control me-1" type="search" placeholder="Search..." aria-label="Search..." wire:model="searchTerm">
                    </div>
                </div>                
                <div class="panel-body" style="padding:20px 0px">
                    @if(Session::has('message'))
                     <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                   @endif
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 bg-white table-hover table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Id</th>                                  
                                    <th>KingDome</th>                                   
                                    <th>Phylum</th>
                                    <th>Class</th>
                                    <th>Order</th>
                                    <th>Family</th>                                   
                                    <th>Genus</th>
                                    <th>Species</th>
                                    <th>Craeted At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($taxonomies->count())
                                    @foreach ($taxonomies as $taxonomy)
                                    <tr>
                                        <td>{{ $taxonomy->id }}</td>                                 
                                        <td>{{ $taxonomy->kingdome }}</td>                                                                                                
                                        <td>{{ $taxonomy->phylum }}</td>                                    
                                        <td>{{ $taxonomy->class }}</td>
                                        <td>{{ $taxonomy->family }}</td> 
                                        <td>{{ $taxonomy->order }}</td>                                                                                                
                                        <td>{{ $taxonomy->genus }}</td> 
                                        <td>{{ $taxonomy->species }}</td>                                                                      
                                        <td>{{ $taxonomy->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.edit.taxonomy',['taxonomy_id'=>$taxonomy->id]) }}"><i class="bi bi-pencil-square"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this taxonomy?') || event.stopImmediatePropagation()" wire:click.prevent="deleteNotifications({{ $taxonomy->id }})" style="margin-left:10px;"><i class="bi bi-trash3-fill"></i></a>
                                        </td>
                                    </tr> 
                                    @endforeach
                                @else
                                <div class="alert alert-warning" role="alert">No Taxonomy Found, try Search again!</div>
                             @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

