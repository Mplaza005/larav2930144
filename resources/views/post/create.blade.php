@extends('layouts.app')

@section('content')
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input type="text" id="title" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Body</label>
            <input type="text" id="title" name="body" class="form-control" required>
        </div>


        <br>

        <div class="mb-3">

            <select name="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->id }} - {{ $user->name }}- {{ $user->email }}
                    </option>
                @endforeach
            </select>
        </div>

         <div class="mb-3">

            <select name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->id }} - {{ $category->name }}- {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>

    </form>
@endsection
