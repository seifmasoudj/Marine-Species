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
                        All Categories
                    </div>
                    <div class="col">
                        <a href="{{ route('admin.usersPDF',['download'=>'pdf']) }}" class="btn btn-success">Report</a>
                    </div>
                    <div class="col">
                        <a href="{{ route('admin.add.register') }}" class="btn btn-success">Add New</a>
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
                                <th>Role</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($users->count())
                                @foreach ($users as $user )
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->utype }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.edit.register',['user_id'=>$user->id]) }}"><i class="bi bi-pencil-square"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this User?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{ $user->id }})" style="margin-left:10px;"><i class="bi bi-trash3-fill"></i></a>
                                        </td>
                                    </tr> 
                                @endforeach
                            @else
                             <div class="alert alert-warning" role="alert">No User Found, try Search again!</div>
                             @endif
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
