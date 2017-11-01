@extends('layouts.master')

@section('title','blog lalala')

@section('content')
<script type="text/javascript">


</script>
<div class="alert alert-success">
	<strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>.
</div>
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="panel-heading" style="background-color: azure">
				<div class="panel-body">
					<table class="table table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Sekolah Asal</th>
                <th>kelas</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Prestasi</th>
                <th>Orang Tua</th>
                <th>Contact</th>
              </tr>
            </thead>
            <tbody>
             @foreach($siswa as $siswa)
             <tr>
              <td> 
                {{$siswa->id_siswa}}
              </td>
              <td>
                {{$siswa->Nama}}
              </td>
              <td>
                {{$siswa->SekolahAsal}}
              </td>
              <td>
                {{$siswa->kelas}}
              </td>
              <td>
                {{$siswa->Alamat}}
              </td>
              <td>
                {{$siswa->JenisKelamin}}
              </td>
              <td>
                {{$siswa->Prestasi}}
              </td>
              <td>
                {{$siswa->OrangTua}}
              </td>
              <td>
                {{$siswa->Contact}}
              </td>
              </form> 
              <td>

              <a href="/siswa/{{$siswa->id_siswa}}/edit" class="btn btn-success btn-xs" style="padding: 0px 15px;" role="button">EDIT</a>

              <form action="/siswa/{{$siswa->id_siswa}}" method="post">
                <input type="submit" name="submit" value="DELETE" class="btn btn-danger btn-xs">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
              </form> 
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <a href="/siswa/create" class="btn btn-success"  role="button">TAMBAH BARU</a>
    </div>    
  </div>

</div>
</div>
</div>
@endsection
