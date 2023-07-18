<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Generate PDF Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="table-responsive">
    <table class="table align-middle mb-0 bg-white table-hover table-striped table-sm">
        <h1>{{ $title }}</h1>
        <p>{{ $date }}</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
      
        <thead class="thead-dark">
            <tr>
                {{-- <th>Id</th>
                <th>Image</th> --}}
                <th>C. Name</th>
                <th>Scientific Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Date</th>
                {{-- <th>Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($species as $specie )
            <tr>
                {{-- <td>{{ $specie->id }}</td>
                <td><img src="{{ asset('assets/img/species') }}/{{ $specie->images }}" width="60" alt="species"></td> --}}
                <td>{{ $specie->regularName }}</td>
                <td>{{ $specie->ScientificName }}</td>                                   
                <td>{{ $specie->Description  }}</td>                              
                <td>{{ $specie->status }}</td>                                    
                <td>{{ $specie->created_at }}</td>
               
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>