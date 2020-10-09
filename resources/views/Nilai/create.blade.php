<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tambah Data Nilai Mahasiswa</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Nilai Mahasiswa - <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/nilai" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="{{url('nilai/store')}}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>ID Mahasiswa</label>
                            <select class="form-control" name="id_mhs">
                                <option>Pilih ID Mahasiswa</option>
                            @foreach($mahasiswa as $m)
                                <option value="{{ $m->id_mhs }}">{{ $m->id_mhs }}</option>
                            @endforeach
                            </select>
                            <!-- <input type="text" name="id_mhs" class="form-control" placeholder="ID Mahasiswa ..."> -->

                            @if($errors->has('id_mhs'))
                                <div class="text-danger">
                                    {{ $errors->first('id_mhs')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>ID Matkul</label>
                            <select class="form-control" name="id_matkul">
                                <option>Pilih ID Mata Kuliah</option>
                            @foreach($matkul as $l)
                                <option value="{{ $l->id_matkul }}">{{ $l->id_matkul }}</option>
                            @endforeach
                            </select>

                            @if($errors->has('id_matkul'))
                                <div class="text-danger">
                                    {{ $errors->first('id_matkul')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Nilai</label>
                            <input type="text" name="nilai" class="form-control" placeholder="Nilai ...">

                            @if($errors->has('nilai'))
                                <div class="text-danger">
                                    {{ $errors->first('nilai')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>