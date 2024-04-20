@extends('admin.index')
@section('content')
    <div class="card-body">
        <div class="table-responsive">
            <form method="POST" action="{{ route('rental.store') }}" role="form" enctype="multipart/form-data">
                @csrf
                @if (session()->has('success'))
                    <div class="col-sm-12" style="font-family: Arial, Helvetica, sans-serif;">
                        <div
                            class="alert alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                            <button type="button" class="close font__size-18" data-dismiss="alert">
                                <span aria-hidden="true">
                                    <a><i class="fa fa-times greencross"></i></a>
                                </span>
                                <span class="sr-only">Close</span>
                            </button>
                            <i class="start-icon fa fa-check-circle"></i>
                            <strong class="font__weight-semibold">Tambah!</strong>&nbsp;{{ session()->get('success') }}
                        </div>
                    </div>
                @endif
                @if (session()->has('update'))
                    <div class="col-sm-12" style="font-family: Arial, Helvetica, sans-serif;">
                        <div
                            class="alert alert-simple alert-info alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                            <button type="button" class="close font__size-18" data-dismiss="alert">
                                <span aria-hidden="true">
                                    <a><i class="fa fa-times blue-cross"></i></a>
                                </span>
                                <span class="sr-only">Close</span>
                            </button>
                            <i class="start-icon fa fa-check-circle"></i>
                            <strong class="font__weight-semibold">Update!</strong>&nbsp;{{ session()->get('update') }}
                        </div>
                    </div>
                @endif
                @if (session()->has('delete'))
                    <div class="col-sm-12" style="font-family: Arial, Helvetica, sans-serif;">
                        <div
                            class="alert alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                            <button type="button" class="close font__size-18" data-dismiss="alert">
                                <span aria-hidden="true">
                                    <a><i class="fa fa-times danger"></i></a>
                                </span>
                                <span class="sr-only">Close</span>
                            </button>
                            <i class="start-icon fa fa-check-circle"></i>
                            <strong class="font__weight-semibold">Delete!</strong>&nbsp;{{ session()->get('delete') }}
                        </div>
                    </div>
                @endif
                <label for="cars">Pilih Mobil yang ingin disewa:</label>

                <select class="form-control" name="mobil_id">
                    @foreach ($dataMobil as $item)
                        <option value="{{ $item->id }}">{{ $item->merek }}</option>
                    @endforeach
                </select>
                <div class="form-group">
                    <label>Tanggal Mulai</label>
                    <input type="date" class="form-control" name="tgl_mulai">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal selesai</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" name="tgl_selesai">
                </div>
                {{-- <div class="form-group">
          <label for="sel1">Select list:</label>
          <select class="form-control" name="status">
            {{$status = $User->status}}
            @if (!empty($status))
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
