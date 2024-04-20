@extends('admin.index')
@section('content')
    <div class="card-body">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="" id="dataTable" width="40%" cellspacing="0">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td>{{$Biodata->nama_lengkap?? ''}}</td>
                </tr>
                <tr>
                    <td>No Identitas</td>
                    <td>:</td>
                    <td>{{$Biodata->no_identitas?? ''}}</td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>{{$Biodata->tempat_lahir?? ''}}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{$Biodata->tgl_lahir?? ''}}</td>
                </tr>
                <tr>
                    <td>No Handphone</td>
                    <td>:</td>
                    <td>{{$Biodata->no_hp?? ''}}</td>
                </tr>
                <tr>
                    <td>S{{$Movie->status}}tatus</td>
                    <td>:</td>
                    <td>
                        @if ($Movie->status == 1)
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Check-In Success</strong>
                            </div>
                        @else
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Check-In Not Yet</strong>
                            </div>

                        @endif
                    </td>
                </tr>
                {{-- <tr>
                    <td>Date</td>
                    <td>:</td>
                    <td>{{ $WorkExperience->from_Date ?? ''}} To {{ $WorkExperience->until_Date ?? ''}}</td>
                </tr> --}}
            </table>
            {{-- <a type="button" class="btn btn-info btn-sm text-white show-image" href="{{ route('UpdateStatusMovie', $Biodata->id)  }}">
                Update Status &nbsp;<i class="fa fa-film" aria-hidden="true"></i>
            </a> --}}
            <div class="card-body">
                <div class="table-responsive">
                    <div id="eachimage"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
