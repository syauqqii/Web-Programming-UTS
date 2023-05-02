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
          <h1 class="m-0">FRAMEWORK</h1>
          <a href="{{ asset('create-framework') }}" type="button" class="btn btn-success">Tambah Data</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col" style="width: 90%">Framework</th>
                <th scope="col" style="width: 10%">AKSI</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataFramework as $item)
              <tr>
                <td scope="row">{{ $item->skill_frameworks }}</td>
                <td>
                  <a href="{{ url('edit-framework/'.$item->id) }}" type="button" class="btn btn-info">Edit</a>
                  <a href="{{ url('delete-framework/'.$item->id) }}" type="button" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <br>
          <h1 class="m-0">LANGUAGE</h1>
          <a href="{{ asset('create-language') }}" type="button" class="btn btn-success">Tambah Data</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col" style="width: 90%">Language</th>
                <th scope="col" style="width: 10%">AKSI</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataLanguage as $item)
              <tr>
                <td scope="row">{{ $item->skill_languages }}</td>
                <td>
                  <a href="{{ url('edit-language/'.$item->id) }}" type="button" class="btn btn-info">Edit</a>
                  <a href="{{ url('delete-language/'.$item->id) }}" type="button" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <br>
          <h1 class="m-0">TOOLS</h1>
          <a href="{{ asset('create-tool') }}" type="button" class="btn btn-success">Tambah Data</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col" style="width: 90%">Tools</th>
                <th scope="col" style="width: 10%">AKSI</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataTools as $item)
              <tr>
                <td scope="row">{{ $item->skill_tools }}</td>
                <td>
                  <a href="{{ url('edit-tool/'.$item->id) }}" type="button" class="btn btn-info">Edit</a>
                  <a href="{{ url('delete-tool/'.$item->id) }}" type="button" class="btn btn-danger">Delete</a>
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