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
            <h1 class="m-0">CONTACT</h1>
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
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col" style="width: 22%;">EMAIL</th>
                <th scope="col" style="width: 22%;">INSTAGRAM</th>
                <th scope="col" style="width: 22%;">FACEBOOK</th>
                <th scope="col" style="width: 22%;">GITHUB</th>
                <th scope="col" style="width: 12%;">AKSI</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataContact as $item)
              <tr>
                <td scope="row">{{ $item->email }}</td>
                <td>{{ $item->instagram }}</td>
                <td>{{ $item->facebook }}</td>
                <td>{{ $item->github }}</td>
                <td>
                  <a href="{{ url('edit-contact/'.$item->id) }}" type="button" class="btn btn-info">Edit</a>
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