@extends('admin.index')
  @section('content')
  <div class="card-body">
    <div class="table-responsive">
      <form method="POST" action="{{ route('mobil.store') }}"  role="form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>Merek</label>
          <input type="text" class="form-control" name="merek">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Model</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="model">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nomor Plat</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="no_plat">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Tarif Sewa /hari</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="tarif">
        </div>
        {{-- <div class="form-group">
          <label for="sel1">Select list:</label>
          <select class="form-control" name="status">
            {{$status = $User->status}}
            @if(!empty($status))
              <option value="{{$status}}">{{$status}}</option>
            @else
              <option value="">-- Select one --</option>
            @endif
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select>
        </div> --}}
        {{-- <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  @endsection