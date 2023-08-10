<!DOCTYPE html>
<html>
<head>
    <title>Taxonomy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
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
            </tr>
        </thead>
        <tbody>
            @foreach ($taxonomies as $taxonomy )
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
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>