 @extends('layouts.master')

 @section('content')
 <a href="{{url('artikel/create')}}"><input type="submit" class="btn btn-primary btn-sm" value="Create">
 </a>
 <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data artikel</h3>
      </div>

      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Judul</th>
            <th>Isi</th>
            <th>Slug</th>
            <th>users</th>
          
            <th>Option</th>
          </tr>
          </thead>
          <tbody>
            @foreach($artikels as $artikel)
          <tr>
            <td><a href='{{url("/artikel/{$artikel->id}")}}'>{{ $artikel->judul }}</a></td>
            <td>{{ $artikel->isi }}
            </td>
            <td>{{ $artikel->slug }}</td>
            <td>{{ $artikel->tag }}</td>
            <td>
               <a href='{{ url("/artikel/{$artikel->id}/edit") }}'><input type="submit" class="btn btn-success btn-sm" value="Edit"></a>
               <a href='{{url("/artikell/{$artikel->id}")}}'><input type="submit" class="btn btn-danger btn-sm" value="Delete"></a>
            </td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endsection
