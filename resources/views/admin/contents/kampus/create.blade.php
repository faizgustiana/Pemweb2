@extends('admin.main')

@section('content')
    <div class="pagetitle">
        <h1>Tambah Kampus</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Tambah Kampus</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <form action="{{route('kampus.store')}}" method="post" class="mt-3">
                    @csrf
                    <div class="mb-2">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control">
                    </div>
                
                    <div class="mb-2">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}" class="form-control">
                    </div>
                
                    <div class="mb-2">
                        <label for="latitude" class="form-label">Latitude</label>
                        <input type="text" name="latitude" id="latitude" value="{{ old('latitude') }}" class="form-control">
                    </div>
                
                    <div class="mb-2">
                        <label for="longitude" class="form-label">Longitude</label>
                        <input type="text" name="longitude" id="longitude" value="{{ old('longitude') }}" class="form-control">
                    </div>
                
                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>                
            </div>
        </div>
    </section>
@endsection