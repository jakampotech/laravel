<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tambah Page</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">

                        <h2>Menu Tambah Data</a></h2>
                        <h3>Data Pegawai</h3>

                        <a href="/blog/tabel"> Kembali</a>
        
                        <br/>
                        <br/>

                        {{-- menampilkan error validasi --}}
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="/blog/store" method="post">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                            Nama <input class="form-control" type="text" name="nama" value="{{ old('nama') }}"> </div>
                            <div class="form-group">
                            Jabatan <input class="form-control" type="text" name="jabatan" value="{{ old('jabatan') }}"> </div>
                            <div class="form-group">
                            Umur <input class="form-control" type="number" name="umur" value="{{ old('umur') }}"> </div>
                            <div class="form-group">
                            Alamat <textarea class="form-control" name="alamat" value="{{ old('nama') }}"></textarea> </div>
                            <input type="submit" value="Simpan Data">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>