@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">TAMBAH SKILL</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="simpan-skill" method="POST">
                    @csrf
                    <div class="form-group">
                        Skill
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                      Category
                      <select id="category" name="category" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm">Tambah Data</button>
                </form>
            </div>
        </div>
    </section>

</div>

@include('layouts.footer')
