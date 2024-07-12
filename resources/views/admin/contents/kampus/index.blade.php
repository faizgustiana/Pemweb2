@extends('admin.main')
@section('content')
<div class="pagetitle">
    <h1>Kampus</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"></li>
        <li class="breadcrumb-item active">Kampus</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
            <a href="{{route('kampus.create')}}" class="btn btn-primary my-3">Tambah Kampus</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kampuses as $kampus)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kampus->nama }}</td>
                        <td>{{ $kampus->alamat }}</td>
                        <td>{{ $kampus->latitude }}</td>
                        <td>{{ $kampus->longitude }}</td>
                        <td class="d-flex">
                            <a href="{{route('kampus.edit', $kampus->id)}}" class="btn btn-warning me-2">Edit</a>
                            <form action="{{route('kampus.delete',$kampus->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </section>

@endsection
