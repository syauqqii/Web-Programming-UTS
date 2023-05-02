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
            <h1 class="m-0">TAMBAH OTHER PROJECT</h1>
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
          <form action="simpan-otherproject" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              Judul
              <input type="text" id="judul" name="judul" class="form-control">
            </div>
            <div class="form-group">
              Konten
              <input type="text" id="konten" name="konten" class="form-control">
            </div>
            <div class="form-group">
              Link
              <input type="text" id="link" name="link" class="form-control">
            </div>
            <button type="submit" class="btn btn-success btn-sm">Tambah Data</button>
          </form>
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