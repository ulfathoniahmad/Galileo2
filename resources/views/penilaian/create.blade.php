@extends('layouts.master')

@section('title','blog lalala')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <div class="panel-heading" style="background-color: azure">
        <div class="panel-body">
          <form method="post" class="form-tambah" action="{{ url ('penilaian_siswa')}}">
            <h1 >Tambah Kunci Jawaban</h1>

            <div class="row">
              <div class="input-field col-sm-2">
                <label for="pelajaran">pelajaran</label>
             </div>
             <div>
              <select id="pelajaran" name="pelajaran" class="required" required="">
                <option value="">- Pilih pelajaran -</option>
                @foreach($pelajaran as $pelajaran) 
                <option value='{{$pelajaran->id}}'>{{$pelajaran->Pelajaran}}</option>
                @endforeach
              </select>
            </div>
          </div><br>

          <div class="row">
            <div class="input-field col-sm-2">
             <label for="kode">Kode Soal</label>
           </div>
           <div class="input-field col-sm-2">
             <input id="kode" type="text" name="kode" required="">
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
<script type="text/javascript" src="{{ URL::asset('materialize/js/materialize.min.js') }}"></script>