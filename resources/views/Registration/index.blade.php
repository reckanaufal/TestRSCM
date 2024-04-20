@extends('admin.index')
@section('content')
<div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary mb-2">Movie Data</h5>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>No Identitas</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>No Handphone</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>No Identitas</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>No Handphone</th>
                    <th>Status</th>
                    <th width="10%">Action</th>
                </tr>
            </tfoot>
            <tbody>
                @if (!empty($Movie))
                    @foreach ($Movie as $item)
                        <tr>
                            <td>{{ $item->biodata->nama_lengkap ?? '' }}</td>
                            <td>{{ $item->biodata->no_identitas ?? '' }}</td>
                            <td>{{ $item->biodata->tempat_lahir ?? '' }}</td>
                            <td>{{ $item->biodata->no_hp ?? '' }}</td>
                            <td>{{ $item->biodata->tgl_lahir ?? '' }}</td>
                            <td>{{ $item->status == 1 ? 'Check-In Success' : 'Check-In Not Yet'}}</td>
                            <td align="center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('Registration.destroy', $item->id) }}" method="POST">
                                    <a href="{{ route('Registration.edit', Crypt::encrypt($item->id)) }}" class="btn btn-sm btn-primary">
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
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
