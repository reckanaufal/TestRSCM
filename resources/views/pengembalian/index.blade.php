@extends('admin.index')
@section('content')
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengembalian</h6>
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
        <div class="d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        Choose a Car:
                        <form method="POST" action="{{ route('get.pengembalian') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-9">
                                    @foreach ($getDataMobil as $item)
                                        <select class="form-control" name="plat_nomor" id="cars">
                                            <option value="{{ $item->no_plat }}">{{ $item->no_plat }} - {{ $item->tgl_mulai }} sd {{ $item->tgl_selesai }}</option>
                                        </select>
                                    @endforeach
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <table>
                            <thead>
                                <tr>
                                    <td>
                                        Merek mobil
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        @if (!empty($rental))
                                            {{ $rental->merek }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Plat nomor
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        @if (!empty($rental))
                                            {{ $rental->no_plat }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Jumlah hari
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        @if (!empty($diff_in_days))
                                            {{ $diff_in_days }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tarif
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        @if (!empty($rental))
                                            {{ number_format($rental->tarif) }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Jumlah harga yang harus dibayar
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        @if (!empty($payment))
                                            {{ number_format($payment) }}
                                        @endif
                                    </td>
                                </tr>
                            </thead>
                        </table>
                        @if (!empty($rental))
                            <hr>
                            Jika data sudah benar klik submit
                            <form method="POST" action="{{ route('pengembalian.store') }}">
                                @csrf
                                <input class="form-control" type="hidden" value="{{ $rental->id }}" name="rental_id">
                                <input class="form-control mb-2" type="hidden" value="{{ $payment }}" name="total">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
