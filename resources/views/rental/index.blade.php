@extends('admin.index')
@section('content')
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Rental</h6>
        <!-- <a href="{{ route('rental.create') }}" class="btn btn-sm btn-primary">
                      <i class="fa fa-plus" style="color:white"></i>
                    </a> -->
        <a href="{{ route('rental.create') }}" class="btn btn-primary btn-icon-split">
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
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Merek</th>
                        <th>Model</th>
                        <th>No. Plat</th>
                        <th>Tarif</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($rental as $item)
                        <tr>
                            <td>{{ $item->mobil->merek }}</td>
                            <td>{{ $item->mobil->model }}</td>
                            <td>{{ $item->mobil->no_plat }}</td>
                            <td>{{ $item->mobil->tarif }}</td>
                            <td>{{ $item->tgl_mulai }}</td>
                            <td>{{ $item->tgl_selesai }}</td>
                            <td>
                                @if ($item->status == 0)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Not Yet</strong>
                                    </div>
                                @elseif ($item->status == 1)
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Success</strong>
                                    </div>
                                @else
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Warning!</strong>
                                    </div>
                                @endif
                            </td>
                            <td>{{ $item->created_at }}</td>
                            <td align="center">
                                @if($item->status == 0)
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('rental.destroy', $item->id) }}" method="POST">
                                        <a href="{{ route('rental.edit', Crypt::encrypt($item->id)) }}"
                                            class="btn btn-sm btn-primary">
                                            <i class="fa fa-edit" style="color:white"></i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash" style="color:white"></i>
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
