@extends('admin.index')
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <form method="POST" action="{{ route('Registration.update', $Movie->id) }}" role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
            <div class="form-group">
                <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" value="{{$Movie->biodata->nama_lengkap}}">
            </div>
            <div class="form-group">
                <label>No Identitad</label>
                    <input type="text" class="form-control" name="no_identitas" value="{{$Movie->biodata->no_identitas}}">
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="{{$Movie->biodata->tempat_lahir}}">
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" value="{{$Movie->biodata->tgl_lahir}}">
            </div>
            <div class="form-group">
                <label>No Handphone</label>
                    <input type="text" class="form-control" name="no_hp" value="{{$Movie->biodata->no_hp}}">
            </div>
            <div class="form-group">
                <label for="sel1">Select Status:</label>
                <select class="form-control" name="status">
                    {{$status = $Movie->status ?? ''}}
                    @if($status == 1)
                        <option value="{{$status}}" checked>Check-In Success</option>
                        <option value="0">Check-In Not Yet</option>
                    @elseif($status == 0)
                        <option value="{{$status}}" checked>Check-In Not Yet</option>
                        <option value="1" checked>Check-In Success</option>
                    @else
                        <option value="">Null</option>
                    @endif
                </select>
            </div>
            <!-- <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
