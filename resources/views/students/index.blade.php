@extends('students.layout')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="pull-left mb-3">
  <button onclick="history.back()" class="btn btn-primary">Back</button>
</div>

<table class="table table-bordered">
  <thead class="table-dark">
    <tr>
      <th>Pilih Shift</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="background-color: #c7cccf;">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="shift_option" id="shift1" value="shift 1">
          <label class="form-check-label" for="shift1">Shift 1</label>
        </div>
      </td>
    </tr>
    <tr>
      <td style="background-color: #c7cccf;">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="shift_option" id="shift2" value="shift 2">
          <label class="form-check-label" for="shift2">Shift 2</label>
        </div>
      </td>
    </tr>
    <tr>
      <td style="background-color: #c7cccf;">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="shift_option" id="nonshift" value="non shift">
          <label class="form-check-label" for="nonshift">Non Shift</label>
        </div>
      </td>
    </tr>
    <tr>
      <td style="background-color: #c7cccf;">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="shift_option" id="teory" value="teory">
          <label class="form-check-label" for="teory">Teory</label>
        </div>
      </td>
    </tr>
  </tbody>
</table>

@endsection
