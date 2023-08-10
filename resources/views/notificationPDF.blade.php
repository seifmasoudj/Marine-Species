<!DOCTYPE html>
<html>
<head>
    <title>Notification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="table-responsive">
    <table class="table align-middle mb-0 bg-white table-hover table-striped table-sm">      
        <thead>
            <tr>
                <th>Id</th>                                  
                <th>Text</th>                                   
                <th>Status</th>
                <th>Date</th>                      
            </tr>
        </thead>
        <tbody>
            @foreach ($notifications as $notification )
            <tr>
                <td>{{ $notification->id }}</td>                                 
                <td>{{ $notification->text }}</td>                                                                                                
                <td>{{ $notification->status }}</td>                                    
                <td>{{ $notification->created_at }}</td>            
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>