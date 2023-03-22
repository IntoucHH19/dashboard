@extends('book.layout')

@section('content')
    <h1>{{ $title }}</h1>
    <form action="/book/update/{{$book->id}}" method="post">
        @csrf
        @method('PUT')
        {{-- name --}}
        <div class="mb-3">
            <label for="name" class="form-label">ชื่อหนังสือ</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ $book->name  }}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        {{-- description --}}
        <div class="mb-3">
            <label for="description" class="form-label">รายละเอียด</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                rows="3">{{ $book->description }}</textarea>
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        {{-- status --}}
        <div class="mb-3">
            <select class="form-select @error('status') is-invalid @enderror" id="status" name="status"
                aria-label="select">
                <option value="1">ใช้งาน</option>
                <option value="2">ไม่ใช้งาน</option>
            </select>
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <button type="submit" class="btn btn-success">แก้ไขข้อมูล</button>
    </form>
@endsection
