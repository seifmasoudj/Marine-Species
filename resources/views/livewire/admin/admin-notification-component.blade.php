 <body>
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
                                    Notification
                                </div>
                                <div class="col">
                                    <a href="{{ route('admin.notificationsPDF',['download'=>'pdf']) }}" class="btn btn-success">Report</a>
                                </div>
                                <div class="col">
                                    <a href="{{ route('admin.add.notification') }}" class="btn btn-success">Add New</a>
                                </div>
                                <div class="col">
                                    <input class="form-control me-1" type="search" placeholder="Search..." aria-label="Search">
                                </div>
                            </div>                
                            <div class="panel-body" style="padding:20px 0px">
                                @if(Session::has('message'))
                                <div class="alert alert-success" id="alert" role="alert">{{ Session::get('message') }}</div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table align-middle mb-0 bg-white table-hover table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th>Id</th>                                  
                                                <th>Text</th>                                   
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($notifications->count())
                                                @foreach ($notifications as $notification)
                                                    <tr>
                                                        <td>{{ $notification->id }}</td>                                 
                                                        <td>{{ $notification->text }}</td>                                                                                                
                                                        <td>{{ $notification->status }}</td>                                    
                                                        <td>{{ $notification->created_at }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.edit.notification',['notification_id'=>$notification->id]) }}"><i class="bi bi-pencil-square"></i></a>
                                                            <a href="#" onclick="confirm('Are you sure, You want to delete this nitification?') || event.stopImmediatePropagation()" wire:click.prevent="deleteNotification({{ $notification->id }})" style="margin-left:10px;"><i class="bi bi-trash3-fill"></i></a>
                                                        </td>
                                                    </tr> 
                                                @endforeach
                                            @else
                                             <div class="alert alert-warning" role="alert">No Notification Found, try Search again!</div>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

