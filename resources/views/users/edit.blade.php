
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9wpdoXipOnUsg4ucjOsRNFkkUPYyMK48&sensor=false" type="text/javascript"></script>
<div class="pd-20 bg-white border-radius-4 box-shadow mb-100">
    <div class="clearfix mb-20">
      <h4>Create New Users</h4>
    </div>
<form  method="post" action="{{route('user.update', $data->id)}}" enctype="multipart/form-data">
{{ method_field('PUT') }}
{{ csrf_field() }}

<div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Username</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="" name="username" value="{{$data->username}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control"  type="email" name="email" value="{{$data->email}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Password</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control"  type="password" name="password" >
            </div>
        </div>
        
        
        
       
        <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label"></label>
            <div class="col-sm-12 col-md-10">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
            </div>
        </div>
    
</form>

</div>
