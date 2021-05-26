@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(auth()->user()->is_admin == 1)
                    <div class="body">

                        <div class="row">
                            <div class="col-md-3">
                                <a data-toggle="modal" data-target="#surat">
                                    <div class="card">
                                        <a href="{{url('/admin')}}">Admin Page</a>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3">
                                <a data-toggle="modal" data-target="#surat">
                                    <div class="card">
                                        <div class="header bg-green">
                                            <center> AJUKAN SURAT</center>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-light-blue">
                                        <center> STATUS PENGAJUAN SURAT</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> IURAN BULANAN RT</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> PROFIL</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> LAPORAN KEUANGAN</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    @elseif (auth()->user()->is_admin == 2)
                    <div class="body">

                        <div class="row">
                            <div class="col-md-3">
                                <a data-toggle="modal" data-target="#surat">
                                    <div class="card">
                                        <a href="{{url('/rt')}}">RT Page</a>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3">
                                <a data-toggle="modal" data-target="#surat">
                                    <div class="card">
                                        <div class="header bg-green">
                                            <center> AJUKAN SURAT</center>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-light-blue">
                                        <center> STATUS PENGAJUAN SURAT</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> IURAN BULANAN RT</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> PROFIL</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> LAPORAN KEUANGAN</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @elseif (auth()->user()->is_admin == 3)

                    <div class="body">

                        <div class="row">
                            <div class="col-md-3">
                                <a data-toggle="modal" data-target="#surat">
                                    <div class="card">
                                        <a href="{{url('/rw')}}">RW Page</a>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3">
                                <a data-toggle="modal" data-target="#surat">
                                    <div class="card">
                                        <div class="header bg-green">
                                            <center> AJUKAN SURAT</center>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-light-blue">
                                        <center> STATUS PENGAJUAN SURAT</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> IURAN BULANAN RT</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> PROFIL</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> LAPORAN KEUANGAN</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    @elseif (auth()->user()->is_admin == 4)

                    <div class="body">

                        <div class="row">
                            <div class="col-md-3">
                                <a data-toggle="modal" data-target="#surat">
                                    <div class="card">
                                        <a href="{{url('/sekretaris')}}">Sekretaris Page</a>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3">
                                <a data-toggle="modal" data-target="#surat">
                                    <div class="card">
                                        <div class="header bg-green">
                                            <center> AJUKAN SURAT</center>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-light-blue">
                                        <center> STATUS PENGAJUAN SURAT</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> IURAN BULANAN RT</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> PROFIL</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> LAPORAN KEUANGAN</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    @elseif (auth()->user()->is_admin == 5)

                    <div class="body">

                        <div class="row">
                            <div class="col-md-3">
                                <a data-toggle="modal" data-target="#surat">
                                    <div class="card">
                                        <a href="{{url('/bendahara')}}">Bendahara Page</a>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3">
                                <a data-toggle="modal" data-target="#surat">
                                    <div class="card">
                                        <div class="header bg-green">
                                            <center> AJUKAN SURAT</center>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-light-blue">
                                        <center> STATUS PENGAJUAN SURAT</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> IURAN BULANAN RT</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> PROFIL</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> LAPORAN KEUANGAN</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    @else
                    <div class="body">

                        <div class="row">
                            <div class="col-md-3">
                                <a data-toggle="modal" data-target="#surat">
                                    <div class="card">
                                        <a href="{{url('/warga')}}">Warga Page</a>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3">
                                <a data-toggle="modal" data-target="#surat">
                                    <div class="card">
                                        <div class="header bg-green">
                                            <center> AJUKAN SURAT</center>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-light-blue">
                                        <center> STATUS PENGAJUAN SURAT</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> IURAN BULANAN RT</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> PROFIL</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="header bg-blue">
                                        <center> LAPORAN KEUANGAN</center>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection