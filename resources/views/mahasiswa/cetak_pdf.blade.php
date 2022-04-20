<!DOCTYPE html>
<html>

    <head>
        <title>KARTU HASIL STUDI (KHS)</title>
    </head>

    <body>
        <style>
            <?php include(public_path() . '/css/bootstrap.min.css'); ?>
        </style>
        
        <center>
            <h3>LAPORAN KARTU HASIL STUDI (KHS)</h3>
            <h5>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h5>
        </center>

        <br><br>
        <ul class="" style="list-style-type: none;">
                    <li class=""><b>Nama: </b>{{$daftar->mahasiswa->nama}}</li>
                    <li class=""><b>Nim: </b>{{$daftar->mahasiswa->nim}}</li>
                    <li class=""><b>Kelas: </b>{{$daftar->mahasiswa->kelas->nama_kelas}}</li>
        </ul>
        <br>
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($daftar as $d)
                    <tr scope="row">
                        <td>
                            {{$d->matakuliah->nama_matkul}}
                        </td>
                        <td>
                            {{$d->matakuliah->sks}}
                        </td>
                        <td>
                            {{$d->matakuliah->semester}}
                        </td>
                        <td>
                            {{$d->nilai}}
                        </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
        <div style="text-align: right;">
            <strong>Dosen Pembina Akademik </strong>
            <br><br><br>
            <p>Bu Dosen</p>
        </div>
    </body>
</html>