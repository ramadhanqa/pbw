@extends('layouts.admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
{{-- merubah data --}}
{{-- mengambil data dengan {{ $item-> datanya.. }} --}}
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Testimoni {{ $item->title }}</h1>
        </div>

        {{-- menambahkan erorr --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- membuat form tambah --}}
        <div class="card shadow">
            <div class="card-body">
                {{-- ganti route -> update bagian id , + methodee PUT --}}
                <form action="{{ route('testimoni.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                    <div class="form-group">
                        <label for="nick">Nick</label>
                        <input type="text" class="form-control" name="nick" placeholder="nick" value="{{ $item->nick }}">
                    </div>
                    <div class="form-group">
                        <label for="testimoni">Testimoni</label>
                        <textarea name="testimoni" rows="10" class="d-block w-100 form-control">{{ $item->testimoni }}</textarea>
                    </div>
                    <div class="item">
                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
                </form>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
@endsection
