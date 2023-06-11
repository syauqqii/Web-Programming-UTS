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
            <h1 class="m-0">SKILLS</h1>
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
          <h1 class="m-0">SKILL</h1>
          <a href="{{ asset('create-skill') }}" type="button" class="btn btn-success">Tambah Data</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col" style="width: 4%">Nomor</th>
                <th scope="col" style="width: 43%">Skill</th>
                <th scope="col" style="width: 43%">Kategori</th>
                <th scope="col" style="width: 10%">AKSI</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataSkill as $index => $item)
              <tr>
                <td scope="row">{{ $index + 1 }}</td>
                <td scope="row">{{ $item->name }}</td>
                <td scope="row">{{ $item->category->name }}</td>
                <td>
                  <a href="{{ url('edit-skill/'.$item->id) }}" type="button" class="btn btn-info">Edit</a>
                  <a href="{{ url('delete-skill/'.$item->id) }}" type="button" class="btn btn-danger" onclick="confirmDelete(event)">Delete</a>
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
  <script>
  function confirmDelete(event) {
    event.preventDefault(); // Menghentikan tindakan default (pemrosesan URL)

    if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
      // Jika pengguna mengklik "OK" pada konfirmasi, lanjutkan ke URL delete
      window.location.href = event.target.href;
    }
  }
  </script>
  <!-- /.content-wrapper -->
@include('layouts.footer')