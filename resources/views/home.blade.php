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
                    <a href="{{url('rt/routes')}}">RT</a>
                    @elseif (auth()->user()->is_admin == 3)
                    <a href="{{url('rw/routes')}}">RW</a>
                    @elseif (auth()->user()->is_admin == 4)
                    <a href="{{url('rw/routes')}}">Sekretaris</a>
                    @elseif (auth()->user()->is_admin == 5)
                    <a href="{{url('rw/routes')}}">Bendahara</a>
                    @else
                    <div class=”panel-heading”>Normal User</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection