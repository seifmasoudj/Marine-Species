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
            <div class="panel panel-default"></div>               
                <div class="row">
                    <div class="col">
                        All Contact
                    </div>
                    <div class="col">
                        <a href="{{ route('admin.contactsPDF',['download'=>'pdf']) }}" class="btn btn-success">Report</a>
                    </div>                  
                    <div class="col">
                        <input class="form-control me-1" type="search" placeholder="Search..." aria-label="Search..." wire:model="searchTerm">
                    </div>
                </div>   
                <div class="panel-body">
                    @if(Session::has('message'))
                     <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                   @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($contacts->count())
                                @foreach ($contacts as $contact )
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td>{{ $contact->created_at }}</td>     
                                        <td>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this contact?') || event.stopImmediatePropagation()" wire:click.prevent="deleteContact({{ $contact->id }})" style="margin-left:10px;"><i class="bi bi-trash3-fill"></i></a>
                                        </td>                                 
                                    </tr> 
                                @endforeach
                            @else
                             <div class="alert alert-warning" role="alert">No Category Found, try Search again!</div>
                             @endif
                        </tbody>
                    </table>
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
