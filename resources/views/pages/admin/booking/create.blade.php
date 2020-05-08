@extends('layouts.admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Booking</h1>
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

                <form action="{{ route('booking.store') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="email">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="nama" value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No Telpon</label>
                        <input type="number" class="form-control" name="no_telp" placeholder="no_telp" value="{{ old('no_telp') }}">
                    </div>
                    <div class="form-group">
                        <label for="usia">Usia</label>
                        <input type="number" class="form-control" name="usia" placeholder="usia" value="{{ old('usia') }}">
                    </div>
                    <div class="form-group">
                        <label for="no_ktp">No KTP</label>
                        <input type="number" class="form-control" name="no_ktp" placeholder="no_ktp" value="{{ old('no_ktp') }}">
                    </div>
                    <div class="form-group">
                        <label for="tgl_trip" style="font-weight: bold; padding-bottom: -15px;">Tanggal Trip :</label>
                        <br>
                        <input  type="date" name="tgl_trip"  value="" placeholder="tgl_trip" class="form-control" style="font-weight: bold;">
                    </div>
                    <div class="form-group">
                        <label for="pilihan_trip" style="font-weight: bold; padding-bottom: -15px;">Pilihan Trip:</label>
                        <select name="pilihan_trip" class="form-control" style="font-weight: bold;">
                        <option value="">Pilihan Trip</option>
                        @foreach ($tour_packages as $tour_package)
                            <option value="{{ $tour_package->title }}">
                            {{ $tour_package->title }}
                            </option>
                        @endforeach
                        {{-- <option value="">One Day Trip</option>
                        <option value="">-Bromo Midnight</option>
                        <option value="">-Menjangan & Tabuhan</option>
                        <option value="">-Trip Kawah Ijen</option>
                        <option value="">Two Days Trip</option>
                        <option value="">-Bromo Inap</option>
                        <option value="">-Bromo & Kota Batu</option>
                        <option value="">-Kawah Ijen & Baluran</option>
                        <option value="">-Ijen & Menjangan</option>
                        <option value="">Three Days Trip</option>
                        <option value="">-Bromo Ijen & Baluran</option>
                        <option value="">-Bromo & Malang Kota Batu</option>
                        <option value="">Baluran Menjangan & Ijen</option>
                        <option value="">Request Trip</option> --}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_peserta_lain">Nama Peserta Lain & Usia</label>
                        <textarea name="nama_peserta_lain" rows="10" class="d-block w-100 form-control">{{ old('nama_peserta_lain') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="jml_org">Jumlah Orang</label>
                        <input type="number" class="form-control" name="jml_org" placeholder="jml_org" value="{{ old('jml_org') }}">
                    </div>
                    <div class="form-group">
                        <label for="req_jemput">Request Penjemputan</label>
                        <textarea name="req_jemput" rows="10" class="d-block w-100 form-control">{{ old('req_jemput') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="req_antar">Request Antar</label>
                        <textarea name="req_antar" rows="10" class="d-block w-100 form-control">{{ old('req_antar') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea name="pesan" rows="10" class="d-block w-100 form-control">{{ old('pesan') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
@endsection
