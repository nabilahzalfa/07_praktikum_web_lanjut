@extends('mahasiswa.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Mahasiswa
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" id="myForm">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="Nim">Nim</label>
                    <input type="text" name="nim" class="form-control" id="Nim" value="{{ $mahasiswa->nim }}" ariadescribedby="Nim" >
                </div>
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="Nama" value="{{ $mahasiswa->nama }}" ariadescribedby="Nama" >
                </div>
                <div class="form-group">
                    <label for="Kelas">Kelas</label>
                    <select name="kelas" class="form-control">
                        @foreach($kelas as $kls)
                            <option value="{{$kls->id}}" {{ $mahasiswa->kelas_id == $kls->id ? 'selected' : '' }}>{{$kls->nama_kelas}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="Jurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="Jurusan" value="{{ $mahasiswa->jurusan }}" ariadescribedby="Jurusan" >
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" name="email" class="form-control" id="Email" value="{{ $mahasiswa->email }}" ariadescribedby="Email" >
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <input type="alamat" name="alamat" class="form-control" id="alamat" value="{{ $mahasiswa->alamat }}" ariadescribedby="Alamat" >
                </div>
                <div class="form-group">
                    <label for="Tanggal_Lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" id="Tanggal_Lahir" value="{{ $mahasiswa->tanggal_lahir }}" ariadescribedby="Tanggal_lahir" >
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection