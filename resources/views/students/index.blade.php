@extends('students.layout')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100" style="background: #f8f9fa;">
  <div class="card shadow p-5 rounded-4" style="max-width: 500px; width: 100%;">
    <h2 class="text-center mb-4 text-primary">Absensi Berhasil</h2>

    <p><strong>Nama:</strong> {{ $student->name }}</p>
    <p><strong>NIM:</strong> {{ $student->nim }}</p>
    <p><strong>Keterangan Kehadiran:</strong> {{ $student->keterangan }}</p>
    <p><strong>Shift:</strong> {{ ucfirst($student->shift_option) }}</p>

    <div class="text-center mt-4">
      <a href="{{ route('students.show') }}" class="btn btn-primary">Input Absensi Baru</a>
    </div>
  </div>
</div>
@endsection
