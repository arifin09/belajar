<!DOCTYPE html>
<html>
<head>
</head>
<body>
	 <a href="{{route('profil.create')}}"><input type="submit" value="create"></a>

	<table border="1">
		<tr>
			<th>User</th>
			<th>No NPWP</th>
			<th>Nama Terdaftar</th>
			<th>Tanggal Daftar</th>
			<th>Alamat Terdaftar</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		@foreach($profils as $profil)
		<tr>
			
			<td>{{ $profil->getUser->name }}</td>
			<td>{{ $profil->no_npwp }}</td>
			<td>{{ $profil->nama_terdaftar }}</td>
			<td>{{ $profil->tgl_daftar }}</td>
			<td>{{ $profil->alamat_terdaftar }}</td>
			<td>{{ $profil->status }}</td>
			<td><a href="{{route('profil.edit',$profil->id)}}">edit</a>
				|<a href="{{route('profil.destroy',$profil->id)}}">delete</a></td>


		</tr>
		@endforeach
	</table>


</body>
</html>

