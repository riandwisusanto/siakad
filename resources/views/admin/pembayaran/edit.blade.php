@extends('sbadmin/master')
@section('title', 'pembayaran')

@section('content')


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-4 text-gray-800">Edit pembayaran</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/pembayaran/'.$id)}}" method="POST">
        @csrf
        @method('patch')
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="idSemester">Semester</label>
                            <select id="idSemester" name="idSemester" class="form-control @error('idSemester') is-invalid @enderror select2bs4">
                                <option>-- Pilih Semester --</option>
                                @foreach($semester as $data)
                                    <option value="{{ $data->idSemester }}">{{ $data->tahunAjaran }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="idKelas">Kelas</label>
                            <select id="idKelas" name="idKelas" class="form-control @error('idKelas') is-invalid @enderror select2bs4">
                                <option>-- Pilih Kelas --</option>
                                @foreach($kelas as $data)
                                    <option value="{{ $data->idKelas }}">{{ $data->namaKelas }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="idSiswa">Siswa</label>
                        <select id="idSiswa" name="idSiswa" class="form-control @error('idSiswa') is-invalid @enderror select2bs4">
                            <option>-- Pilih Siswa --</option>
                            @foreach($siswa as $data)
                                <option value="{{ $data->idSiswa }}">{{ $data->namaSiswa }}</option>
                            @endforeach
                        </select>
                    </div>
            </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tgl">Tanggal</label>
                        <input type="date" value="{{$pembayaran->tgl}}" class="form-control" id="tgl" name="tgl">
                        @error('tgl')
                            <small class="text-danger">{{ $message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="idBayar">Jenis Bayar</label>
                        <select id="idBayar" name="idBayar" class="form-control @error('idBayar') is-invalid @enderror select2bs4">
                            <option>-- Pilih Jenis Pembayaran --</option>
                            @foreach($detailbayar as $data)
                                <option value="{{ $data->idBayar }}">{{ $data->jenisBayar }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jumlahBayar">Jumlah Pembayaran</label>
                        <input type="text" value="{{$pembayaran->jumlahBayar}}"class="form-control" id="jumlahBayar" name="jumlahBayar">
                        @error('jumlahBayar')
                            <small class="text-danger">{{ $message}}</small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="{{url('admin/pembayaran/index')}}" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
        </div>
    </div>
@endsection


