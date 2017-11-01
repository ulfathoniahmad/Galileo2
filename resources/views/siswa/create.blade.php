@extends('layouts.master')

@section('title','blog lalala')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Create New siswa</div>
                <div class="panel-body">
                  <form method="post" class="form-tambah " action="{{ url ('siswa')}}">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nama">Nama Lengkap :</label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-field col-md-12">
                                <input type="text" class="form-control col-md-12 " id="nama" name="nama">
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="sekolahAsal">Sekolah Asal :</label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-field col-md-12    ">
                                <input type="text" class="form-control col-md-6" id="sekolahAsal" name="sekolahAsal">
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="kelas">kelas</label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-field col-md-6    ">
                                <select id="kelas" name="kelas" class="required" required="">
                                    <option value="">- Pilih  Kelas-</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="alamat">Alamat :</label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-field col-md-12    ">
                                <input type="text" class="form-control col-md-6" id="alamat" name="alamat">
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="kelamin">Jenis Kelamin :</label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-field col-md-12    ">
                                <label class="radio-inline"><input type="radio" name="kelamin" value="laki">Laki Laki</label>
                                <label class="radio-inline"><input type="radio" name="kelamin" value="perempuan">Perempuan</label><br>  
                            </div>
                        </div>
                    </div><br>

                     <div class="row">
                        <div class="col-md-6">
                            <label for="prestasi">Prestasi</label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-field col-md-6    ">
                                <select id="Prestasi" name="prestasi" class="required" required="">
                                    <option value="">- Pilih  Prestasi-</option>
                                    <option value="3besar">Ranking 1 - Ranking 3 </option>
                                    <option value="10besar">Ranking 4 - Ranking 10</option>
                                    <option value="20besar">> Ranking 10</option>
                                </select>
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="orangTua">Nama Orang Tua :</label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-field col-md-12">
                                <input type="text" class="form-control col-md-6" id="orangTua" name="orangTua">
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="contact">No HP :</label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-field col-md-12">
                                <input type="text" class="form-control col-md-6" id="contact" name="contact">
                            </div>
                        </div>
                    </div><br>

                    <input type="submit" class="btn btn-primary btn-md" value="simpan" ></input> 
                    {{ csrf_field() }} 
                </form>

            </div>
        </div>
    </div>
</div>
</div>

@endsection



