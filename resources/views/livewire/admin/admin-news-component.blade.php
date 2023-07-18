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
                    <div class="col-sm-6 col-md-10">
                        News
                    </div>
                    <div class="col-6 col-md-2 right-8">
                        <a href="{{ route('admin.addnews') }}" class="btn btn-success">Add New</a>
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
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $new )
                                <tr>
                                    <td>{{ $new->id }}</td>                                 
                                    <td>{{ $new->title }}</td>                                   
                                    <td>{{ $new->Descriptions  }}</td>                              
                                    <td>{{ $new->status }}</td>                                    
                                    <td>{{ $new->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.editnews',['news_id'=>$new->id]) }}"><i class="bi bi-pencil-square"></i></a>
                                        <a href="#" onclick="confirm('Are you sure, You want to delete?') || event.stopImmediatePropagation()" wire:click.prevent="deleteNews({{ $new->id }})" style="margin-left:10px;"><i class="bi bi-trash3-fill"></i></a>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

