@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Siswa</div>
                    <div class="panel-body" style="padding-left: 100px;">
                        <a href="{{ url('/siswa/create') }}" class="btn btn-success btn-sm" title="Add New siswa">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/siswa', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Nama</th><th>Sekolah Asal</th><th>Kelas</th><th>Alamat</th><th>Prestasi</th><th>Orang Tua</th><th>Cotact </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($siswa as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td >
                                        <td>{{ $item->Nama }}</td><td>{{ $item->SekolahAsal }}</td><td>{{ $item->Kelas }}</td><td>{{ $item->Alamat }}</td><td>{{ $item->Prestasi }}</td><td>{{ $item->OrangTua }}</td><td>{{ $item->Cotact }}</td>
                                        <td>
                                            <a href="{{ url('/siswa/' . $item->id) }}" title="View siswa"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/siswa/' . $item->id . '/edit') }}" title="Edit siswa"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/siswa', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete siswa',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $siswa->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
