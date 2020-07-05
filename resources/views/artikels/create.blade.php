@extends('layouts.master')

@section('content')
<!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Form Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{ url('/artikel') }}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="judul" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">isi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="isi"> 
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">slug</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="slug"> 
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">tag</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tag"> 
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control" name="users_id" value="1"> 
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Save</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          @endsection