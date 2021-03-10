@extends('admin_layout')
@section('admin_content')
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Import Database Forms
            </header>
            <div class="panel-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <div class="position-center">
                    <form role="form" id="excel-csv-import-form" method="POST" action="{{ url('import-excel-file') }}" accept-charset="utf-8" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile" name='file'>
                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                    @error('file')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Check me out
                        </label>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
                </div>
            </div>
        </section>
    </div>
@endsection