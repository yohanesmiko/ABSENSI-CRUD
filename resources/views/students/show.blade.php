@extends('students.layout')

@section('content')
<div class="container py-5" style="max-width: 800px;">

  {{-- Success Message --}}
  @if(session('success'))
  <div class="alert alert-success d-flex align-items-center shadow-lg mb-5 rounded-4 animate-fade-scale" role="alert"
    style="animation-duration: 0.9s; background-color: #DCFCE7; color: #166534; padding: 1rem 1.5rem; font-weight: 600; font-size: 1.1rem; border-left: 6px solid #22C55E;">
    <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-check-circle-fill flex-shrink-0 me-3" width="28" height="28"
      fill="#22C55E" viewBox="0 0 16 16" role="img" aria-label="Success:">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 11.03a.75.75 0 0 0 1.07.02l3.992-4.99a.75.75 0 1 0-1.14-.976L7.477 9.417 5.384 7.323a.75.75 0 1 0-1.06 1.06l2.646 2.647z"/>
    </svg>
    <div>{{ session('success') }}</div>
  </div>
  @endif

  {{-- Card Header --}}
  <div class="card shadow-lg rounded-5 border-0 overflow-hidden animate-fade-scale" style="animation-duration: 1.1s; background: #FFFFFF;">
    <div class="card-header text-center py-5" style="background: #2563EB; border-bottom: 5px solid #1D4ED8;">
      <h2 class="fw-bold text-white mb-0" style="letter-spacing: 0.12em; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 1.75rem;">
        Detail Absensi Mahasiswa
      </h2>
    </div>

    {{-- Card Body --}}
    <div class="card-body px-5 py-5">
      
      {{-- Nama Lengkap --}}
      <div class="row mb-4">
        <div class="col-4 text-uppercase text-muted fw-bold fs-6" style="color: #93C5FD;">Nama Lengkap</div>
        <div class="col-8 fs-5 text-blue-sky fw-semibold" style="color: #2563EB;">{{ $student->name }}</div>
      </div>

      {{-- NIM --}}
      <div class="row mb-4">
        <div class="col-4 text-uppercase text-muted fw-bold fs-6" style="color: #93C5FD;">NIM</div>
        <div class="col-8 fs-5 text-blue-sky fw-semibold" style="color: #2563EB;">{{ $student->nim }}</div>
      </div>

      {{-- Kehadiran --}}
      <div class="row mb-4">
        <div class="col-4 text-uppercase text-muted fw-bold fs-6" style="color: #93C5FD;">Keterangan Kehadiran</div>
        <div class="col-8 fs-5 text-blue-sky text-capitalize fw-semibold" style="color: #2563EB;">
          {{-- Menambahkan kondisi untuk Izin dan Sakit --}}
          @if($student->keterangan == 'Hadir')
          <span class="badge bg-success text-white">
            {{ $student->keterangan }}
          </span>
          @elseif($student->keterangan == 'Izin')
          <span class="badge bg-warning text-dark">
            {{ $student->keterangan }}
          </span>
          @elseif($student->keterangan == 'Sakit')
          <span class="badge bg-info text-white">
            {{ $student->keterangan }}
          </span>
          @else
          <span class="badge bg-danger text-white">
            {{ $student->keterangan }}
          </span>
          @endif
        </div>
      </div>

      {{-- Shift --}}
      <div class="row mb-4">
        <div class="col-4 text-uppercase text-muted fw-bold fs-6" style="color: #93C5FD;">Shift</div>
        <div class="col-8 fs-5 text-blue-sky text-capitalize fw-semibold" style="color: #2563EB;">{{ $student->shift_option }}</div>
      </div>

    </div>
  </div>
</div>

{{-- Styling --}}
<style>
  body {
    background-color: #F3F4F6;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding: 0;
    margin: 0;
  }

  /* Animasi fade + scale */
  .animate-fade-scale {
    opacity: 0;
    transform: scale(0.95);
    animation-name: fadeScaleIn;
    animation-fill-mode: forwards;
    animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  }
  @keyframes fadeScaleIn {
    to {
      opacity: 1;
      transform: scale(1);
    }
  }

  /* Button style */
  .btn-glass {
    background: rgba(59, 130, 246, 0.1);
    backdrop-filter: saturate(180%) blur(12px);
    border: 2px solid #3B82F6;
    transition: all 0.3s ease;
    box-shadow: 0 8px 20px rgba(59, 130, 246, 0.25);
  }
  .btn-glass:hover, .btn-glass:focus {
    background: rgba(59, 130, 246, 0.2);
    border-color: #2563EB;
    box-shadow: 0 12px 30px rgba(37, 99, 235, 0.6);
    color: #3B82F6 !important;
    transform: translateY(-4px) scale(1.05);
  }

  /* Custom text color for blue */
  .text-blue-sky {
    color: #2563EB !important;
  }
  
  .badge {
    font-size: 0.85rem;
    font-weight: 500;
    padding: 0.35em 0.75em;
    border-radius: 15px;
  }
  
  .card {
    border-radius: 16px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }
  
  .card-header {
    border-bottom: 3px solid #4F46E5;
  }

  .row {
    margin-bottom: 16px;
  }
</style>

{{-- Auto Redirect --}}
<script>
  setTimeout(() => {
    window.location.href = "{{ route('students.create') }}";
  }, 4000);
</script>

@endsection
