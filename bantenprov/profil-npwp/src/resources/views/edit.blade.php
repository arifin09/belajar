<h1>EDIT DATA NPWP </h1>
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

{!! Form::open(['route' => ['profil.update',$profil->id],'method' => 'post']) !!}

	USER :<br>
	<select name="user_id">
	<option value="">-User-</option>
	@foreach($users as $user)
	<option value="{{ $user->id }}"
		{{ ($user->id == $profil->getUser->id) ? 'selected' : ''}}
		>{{ $user->name }}</option>
		@endforeach
</select><br>
	NOMOR NPWP :<br>
	<input type="text" name="no_npwp" value="{{$profil->no_npwp}}" ><br>
	NAMA TERDAFTAR:<br>
	<input type="text" name="nama_terdaftar" value="{{$profil->nama_terdaftar}}"><br>
	TANGGAL DAFTAR<br>
	<input type="text" name="tgl_daftar" value="{{$profil->tgl_daftar}}"><br>
	ALAMAT TERDAFTAR<br>
	<input type="text" name="alamat_terdaftar" value="{{$profil->alamat_terdaftar}}"><br>
	STATUS<br>
	<input type="text" name="status" value="{{$profil->status}}"><br>

	<input type="submit" value="update">


	
	{!! Form::close() !!}