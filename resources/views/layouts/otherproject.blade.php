@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">OTHER PROJECT</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <a href="{{ url('create-project') }}" class="btn btn-success btn-sm">Tambah Data</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col" style="width: 20%;">JUDUL</th>
                <th scope="col" style="width: 50%;">KONTEN</th>
                <th scope="col" style="width: 20%;">LINK</th>
                <th scope="col" style="width: 10%;">AKSI</th>
              </tr>
            </thead>
            <tbody>
              @foreach($dataOtherproject as $item)
              <tr>
                <td scope="row">{{ $item->judul }}</td>
                <td>{{ $item->konten }}</td>
                <td>{{ $item->link }}</td>
                <td>
                  <a href="{{ url('edit-otherproject/'.$item->id) }}" type="button" class="btn btn-info">Edit</a>
                  <a href="{{ url('delete-otherproject/'.$item->id) }}" type="button" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('layouts.footer')