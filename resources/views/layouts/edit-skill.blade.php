@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">EDIT SKILL</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{ url('update-skill/'.$ids->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    Skill
                    <input type="text" id="name" name="name" class="form-control" value="{{ $ids->name }}">
                </div>
                <div class="form-group">
                    Category
                    <select id="category_id" name="category_id" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $ids->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-sm">Update Data</button>
            </form>
            </div>
        </div>
    </section>
</div>

@include('layouts.footer')
