
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Device List
              
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('devices.create') }}">New Device</a>
                    </span>
               
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Device Name</th>
                            <th>Status</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($devices as $key => $device)
                            <tr>
                                <td>{{ $device->id }}</td>
                                <td>{{ $device->name }}</td>
                                <td><label class="badge badge-success">{{ $device->status }}</label></td>
                                
                                 
                                <td>
                                    <form action="{{ route('devices.destroy',$device->id) }}" method="POST">
                                  
                                    <a class="btn btn-success" href="{{ route('devices.show',$device->id) }}">Show</a>
                       
                                    <a class="btn btn-primary" href="{{ route('devices.edit',$device->id) }}">Edit</a>
                                   
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                            
                            </tr>
                        @endforeach
                    </tbody>
                </table>
          
            </div>
        </div>
    </div>
</div>
