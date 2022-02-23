<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Tentang')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<head>
	<title>Tutorial Membuat Pencarian Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<h3>Data Pegawai</h3>
 
 <a href="/blog/tambah"> + Tambah Pegawai Baru</a>
 
 <br/>


 <p>Cari Data Pegawai :</p>
 <div class="form-group">
	<form action="/blog/cari" method="GET" class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input class="btn btn-primary ml3" type="submit" value="CARI">
	</form>
	<br/>

 <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>


 <table border="1">
	 <tr>
		 <th>Nama</th>
		 <th>Jabatan</th>
		 <th>Umur</th>
		 <th>Alamat</th>
		 <th>Opsi</th>
	 </tr>
	 @foreach($pegawai as $p)
	 <tr>
		 <td>{{ $p->pegawai_nama }}</td>
		 <td>{{ $p->pegawai_jabatan }}</td>
		 <td>{{ $p->pegawai_umur }}</td>
		 <td>{{ $p->pegawai_alamat }}</td>
		 <td>
			 <a href="/blog/edit/{{ $p->pegawai_id }}">Edit</a>
			 |
			 <a href="/blog/hapus/{{ $p->pegawai_id }}">Hapus</a>
		 </td>
	 </tr>
	 @endforeach
 </table>

 <br/>
	Halaman : {{ $pegawai->currentPage() }} <br/>
	Jumlah Data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>

	{{ $pegawai->links() }}

@endsection