@extends('layouts.app-master')

@section('content')

<div class = 'container border m-3 p-3 '>
<dl class="row">
  <dt class="col-sm-3">Nama Wajib Pajak</dt>
  <dd class="col-sm-9">{{auth()->user()->name}}</dd>
  <dt class="col-sm-3">Email</dt>
  <dd class="col-sm-9">{{auth()->user()->email}}</dd>
  <dt class="col-sm-3">NPWPD</dt>
  <dd class="col-sm-9">{{auth()->user()->username}}</dd>

  <dt class="col-sm-3">Penghasilan Per Bulan</dt>
  <dd class="col-sm-9" id = 'penghasilan'>{{auth()->user()->penghasilan}}</dd>

  <dt class="col-sm-3">Tarif</dt>
  <dd class="col-sm-9" id = 'tarif'></dd>
  <dt class="col-sm-3">Pembayaran</dt>
  <dd class="col-sm-9">{{auth()->user()->payment_confirmation}}</dd>
  <form action="{{ route('about.perform') }}" method="post">
    <div class="form">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment_confirmation" value='Sudah' id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Sudah
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment_confirmation" value='Belum' id="flexRadioDefault2">
        <label class="form-check-label" for="flexRadioDefault2">
          Belum
        </label>
      </div>
        <div class='text-end'>
        <button input type='submit' value='submit' class="rounded text-end mx-3 btn btn-primary">Lapor</button>
        </div>
    </div>
  </form>
</dl>
</div>
<script>
  let penghasilan = document.getElementById("penghasilan").innerHTML
  let tarif = penghasilan*10/100
  document.getElementById("tarif").innerHTML = tarif
</script>
@endsection