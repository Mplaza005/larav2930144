@extends('layouts.app')

@section('content')
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input type="text" id="title" name="name" class="form-control" required>
        </div>

        <br>
        <label>Adjuntar archivo PDF</label>
        <br>
        <input type="file" name="urlPdf" class="form-control-file" accept="pdf/*">

        <br><br>


        <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>

    </form>
@endsection
