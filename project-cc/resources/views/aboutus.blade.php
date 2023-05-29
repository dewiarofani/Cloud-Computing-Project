@extends('layouts.main')

@section('container')
    <div class="text-center mt-4">
        <h2>Pejabat Kota Surakarta</h2>
    </div>
    
<div class="cards d-flex justify-content-center">
    <div class="card mt-2" style="width: 18rem; height: 31rem;">
        <img class="card-img-top" src="img/{{ $image }}" alt="Card image cap">
        <div class="card-body">
          <p class="card-text text-center">Wali Kota Surakarta 
            <br>{{ $name }}</p>
        </div>
    </div>

    <div class="card mt-2" style="width: 18rem; height: 31rem;">
        <img class="card-img-top" src="img/fiendi.jpeg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text text-center">Wakil Wali Kota Surakarta 
            <br>Tya Fiendi Aryaningtyas</p>
        </div>
    </div>

    <div class="card mt-2" style="width: 18rem; height: 31rem;">
        <img class="card-img-top" src="img/indah.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text text-center">Ketua DPR Surakarta 
            <br>Indah</p>
        </div>
    </div>
</div>
    
@endsection