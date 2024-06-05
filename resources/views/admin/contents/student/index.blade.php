@extends('admin.main')
@section('content')
<div class="pagetitle">
    <h1>Student</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"></li>
        <li class="breadcrumb-item active">Student</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <divclass="card">
        <div class="card-body">
            <a href="/admin/student/create" class="btn btn-primary my-3">+ Admin</a>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Kelas</th>
                    <th>Major</th>
                    <th>Courses</th>
                    <th>Action</th>
                </tr>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $student->name}}</td>
                        <td>{{ $student->nim}}</td>
                        <td>{{ $student->class}}</td>
                        <td>{{ $student->major}}</td>
                        <td>{{ $student->course_id}}</td>
                        <td class="d-flex">
                            <a href="/admin/student/edit/{{$student->id}}" class="btn btn-warning me-2">Edit</a>
                            <form action="/admin/student/delete/{{$student->id}}" method="post">
                              @method('DELETE')
                              @csrf
                              <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
  </section>

@endsection