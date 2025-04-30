@extends('students.layout')

@section('content')

<div class="d-flex justify-content-center align-items-center min-vh-100" style="background: linear-gradient(135deg, #f0f4f8, #d9e2ec);">
  <div class="card shadow-lg rounded-5 p-5" style="max-width: 540px; width: 100%; background: white;">

    <h2 class="text-center mb-5 fw-bold text-primary" style="letter-spacing: 1.3px;">Form Absensi Mahasiswa</h2>

    @if ($errors->any())
      <div class="alert alert-danger rounded-3 mb-4 shadow-sm">
        <strong>Oops!</strong> Ada beberapa masalah:
        <ul class="mb-0 mt-2 ps-3">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST" novalidate>
      @csrf

      <div class="row g-4 mb-4">
        <div class="col-12 col-md-6">
          <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
          <input type="text" name="name" id="name" 
                 class="form-control form-control-lg @error('name') is-invalid @enderror" 
                 placeholder="Nama Lengkap" value="{{ old('name') }}">
          @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12 col-md-6">
          <label for="nim" class="form-label fw-semibold">NIM</label>
          <input type="text" name="nim" id="nim" 
                 class="form-control form-control-lg @error('nim') is-invalid @enderror" 
                 placeholder="NIM" value="{{ old('nim') }}">
          @error('nim')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <fieldset class="mb-5">
        <legend class="fw-semibold mb-4 text-center">Keterangan Kehadiran</legend>
        <div class="d-flex gap-3 flex-wrap justify-content-center">
          @php
            $statuses = ['Hadir', 'Tidak Hadir', 'Sakit', 'Izin', 'Terlambat'];
          @endphp
          @foreach ($statuses as $status)
            <input type="radio" class="btn-check" name="keterangan" id="keterangan_{{ strtolower(str_replace(' ', '_', $status)) }}" 
                   value="{{ $status }}" autocomplete="off" {{ old('keterangan') == $status ? 'checked' : '' }} required>
            <label for="keterangan_{{ strtolower(str_replace(' ', '_', $status)) }}" 
                   class="btn btn-outline-primary flex-fill text-center rounded-4 shadow-sm fw-semibold py-2" style="min-width: 100px;">
              {{ $status }}
            </label>
          @endforeach
        </div>
        @error('keterangan')
          <div class="text-danger small mt-3 text-center">{{ $message }}</div>
        @enderror
      </fieldset>

      <fieldset class="mb-5">
        <legend class="fw-semibold mb-4 text-center">Pilih Shift Anda</legend>
        <div class="d-grid gap-3" style="grid-template-columns: repeat(auto-fit, minmax(110px, 1fr)); display: grid;">
          @php
            $shifts = [
              ['id' => 'shift1', 'label' => 'Shift 1'],
              ['id' => 'shift2', 'label' => 'Shift 2'],
              ['id' => 'nonshift', 'label' => 'Non Shift'],
              ['id' => 'teory', 'label' => 'Teory'],
            ];
          @endphp

          @foreach($shifts as $shift)
            <input type="radio" class="btn-check" name="shift_option" id="{{ $shift['id'] }}" 
                   value="{{ strtolower($shift['label']) }}" autocomplete="off" {{ old('shift_option') == strtolower($shift['label']) ? 'checked' : '' }} required>
            <label for="{{ $shift['id'] }}" 
                   class="btn btn-outline-secondary text-center rounded-4 shadow-sm fw-semibold py-3" style="min-height: 60px; display: flex; align-items: center; justify-content: center;">
              {{ $shift['label'] }}
            </label>
          @endforeach
        </div>
        @error('shift_option')
          <div class="text-danger text-center mt-3 fw-semibold">{{ $message }}</div>
        @enderror
      </fieldset>

      <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg rounded-pill fw-semibold shadow-lg mt-3">
          Kirim Absensi
        </button>
      </div>
    </form>

  </div>
</div>

<style>
  /* Custom radio button styling */
  .btn-check:checked + label {
    background-color: #0d6efd !important;
    color: white !important;
    border-color: #0a58ca !important;
    box-shadow: 0 6px 15px rgba(13, 110, 253, 0.5);
    transform: translateY(-3px);
  }
  .btn-check:focus-visible + label {
    outline: 3px solid #a8d0ff;
    outline-offset: 2px;
  }
  label.btn {
    cursor: pointer;
    transition: all 0.3s ease;
    user-select: none;
    white-space: nowrap;
  }
  label.btn:hover:not(.active) {
    box-shadow: 0 8px 20px rgba(13, 110, 253, 0.25);
    transform: translateY(-2px);
  }
</style>

@endsection