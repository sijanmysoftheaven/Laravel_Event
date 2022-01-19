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
            <div class="card-header">Device Update
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('devices.index') }}">Manage Devices</a>
                    </span>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('devices.update',$device->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Device Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $device->name }}" name="name" id="name" placeholder="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-2 control-label">Status:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $device->status }}" name="status" id="status" placeholder="status">
                        </div>
                    </div>
                    <div class="box-footer">
                        <a class="btn btn-danger">Cancle</a>
                          <button type="submit" class="btn btn-info pull-right">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
