@extends('layouts.master')

@section('title','blog lalala')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <div class="panel-heading" style="background-color: azure">
        <div class="panel-body">
          <h1 >Masukkan Jawaban Siswa</h1>
          <form method="post" class="form-tambah" action="{{ url ('penilaian_siswa/check')}}">
            
            <div class="row">
              <div class="input-field col-sm-2">
               <label for="nama">Nama Siswa</label>
             </div>
             <div>
               <select id="nama" name="nama" class="required" required="">
                <option value="">- Pilih siswa -</option>
                @foreach($siswa as $siswa) 
                <option value='{{$siswa->id_siswa}}'>{{$siswa->Nama}}</option>
                @endforeach
              </select>
            </div>
          </div><br>

            <div class="row">
              <div class="input-field col-sm-2">
               <label for="kode">Kode Soal</label>
             </div>
             <div>
               <select id="kode" name="kode" class="required" required="">
                <option value="">- Pilih kode -</option>
                @foreach($penilaian as $penilaian) 
                <option value='{{$penilaian->kode}}'>{{$penilaian->kode}}</option>
                @endforeach
              </select>
            </div>
          </div><br>
          @for($i=1; $i<=10; $i++)
          <div class="row"> 
           {{-- @for($j=0; $j<=20;$j+=10) --}}
           <div class="col-sm-4">
            <label for="1">{{$i}}</label>
            <label class="radio-inline required" required=""><input type="radio" name="j_{{$i}}" value="A">A</label>
            <label class="radio-inline required" required=""><input type="radio" name="j_{{$i}}" value="B">B</label>
            <label class="radio-inline required" required=""><input type="radio" name="j_{{$i}}" value="C">C</label>
            <label class="radio-inline required" required=""><input type="radio" name="j_{{$i}}" value="D">D</label>
          </div>
          {{-- @endfor --}}
        </div>
        @endfor
        <br>
        <input type="submit" class="btn btn-primary btn-md" value="simpan" ></input> 
        {{ csrf_field() }} 
      </form>
    </div>    
  </div>
</div>
</div>
</div>
@endsection
