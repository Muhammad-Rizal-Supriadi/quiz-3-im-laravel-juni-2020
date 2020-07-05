@extends('layouts.master')

@section('content')
<!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Form Ubah Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action='{{ url("/artikel/{$artikels->id}") }}' method="post">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="judul" value="{{ $artikels->judul }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Isi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="isi" value="{{ $artikels->isi }}" >
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Slug</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="slug" value="{{ $artikels->slug }}" >
                    </div>
                      </div>
                     <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tag</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tag" value="{{ $artikels->tag }}" >
                    </div>
                     <div class="form-group row">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" name="users_id" value="{{ $artikels->users_id }}" >
                    </div>
                
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                  <a href="{{ url('/pertanyaan') }}"><button type="submit" class="btn btn-default float-right">Cancel</button></a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          @endsection