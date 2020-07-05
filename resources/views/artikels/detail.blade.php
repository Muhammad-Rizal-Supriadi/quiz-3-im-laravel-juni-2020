@extends('layouts.master')

@section('content')
	<!-- include data- tables -->	
<div class="card card-info" style="padding: 20px;">
      <label><h3>Judul : {{ $artikels->judul }}</h3></label>
      <label>Slug : {{ $artikels->slug }}</label><br>
      <label>{{ $artikels->isi }}</label><br>
      <button class="btn btn-success btn-sm" style="width: 60px;">{{ $artikels->tag }}</button>
</div>
@endsection