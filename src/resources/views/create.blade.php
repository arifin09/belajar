<h1>Tambah Data Profil</h1>

<a href="{{route('profil.index')}}"><button>back</button></a><br><br>

<div>
    @if ($errors->any())

    @foreach ($errors->all() as $error)
    <div class="alert alert-danger">{{ $error }}</div>
    @endforeach                            

    @endif
    @if(session()->has('message'))
    <div class="alert alert-success">                            
        {{ session()->get('message') }}
    </div>
    @endif
</div>
{!! Form::open(['route' => 'profil.store','method' => 'post']) !!}
	USER :<br>
	<select name="user_id">
	<option value="">-Select-</option>
	@foreach($users as $user)
	<option value="{{ $user->id }}">{{ $user->name }}</option>
	@endforeach
	</select><br>
	NO NPWP :<br>
	<input type="text" name="no_npwp" value="{{ old('no_npwp') }}"><br>
	NAMA TERDAFTAR:<br>
	<input type="text" name="nama_terdaftar" value="{{ old('nama_terdaftar') }}"><br>
	TANGGAL DAFTAR<br>
	<input type="text" name="tgl_daftar"  value="{{ old('tgl_daftar') }}"><br>
	ALAMAT TERDAFTAR<br>
	<input type="text" name="alamat_terdaftar" value="{{ old('alamat_terdaftar') }}"><br>
	STATUS<br>
	<input type="text" name="status" value="{{ old('status') }}"><br>

	<input type="submit" value="tambah">


{!! Form::close() !!}