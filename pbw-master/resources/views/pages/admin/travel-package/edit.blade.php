@extends('layouts.admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
{{-- merubah data --}}
{{-- mengambil data dengan {{ $item-> datanya.. }} --}}
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
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
                <form action="{{ route('travel-packages.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="title" value="{{ $item->title }}">
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea name="about" rows="10" class="d-block w-100 form-control">{{ $item->about }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="detailtrip">detail trip</label>
                        <textarea name="detailtrip" rows="10" class="d-block w-100 form-control">{{ $item->detailtrip }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="pricetour">pricetour</label>
                        <textarea name="pricetour" rows="10" class="d-block w-100 form-control">{{ $item->pricetour }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="facilities">facilities</label>
                        <textarea name="facilities" rows="10" class="d-block w-100 form-control">{{ $item->facilities }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="rundown">rundown</label>
                        <textarea name="rundown" rows="10" class="d-block w-100 form-control">{{ $item->rundown }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
                </form>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
@endsection
