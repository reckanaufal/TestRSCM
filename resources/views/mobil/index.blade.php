@extends('admin.index')
@section('content')
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Mobil</h6>
        <!-- <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">
          <i class="fa fa-plus" style="color:white"></i>
        </a> -->
        <a href="{{ route('mobil.create') }}" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Data</span>
        </a>
    </div>
    <div class="card-body">
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
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Merek</th>
                        <th>Model</th>
                        <th>No. Plat</th>
                        <th>Tarif</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($dataMobil as $item)
                        <tr>
                            <td>{{ $item->merek }}</td>
                            <td>{{ $item->model }}</td>
                            <td>{{ $item->no_plat }}</td>
                            <td>{{ $item->tarif }}</td>
                            <td align="center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('mobil.destroy', $item->id) }}" method="POST">
                                    <a href="{{ route('mobil.edit', Crypt::encrypt($item->id)) }}"
                                        class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit" style="color:white"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash" style="color:white"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
