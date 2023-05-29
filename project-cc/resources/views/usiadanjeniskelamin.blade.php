@extends('layouts.main')

@section('container')

<div class = "container">

    {{-- judul page --}}
    <div class = "row mt-3">
        <div class ="col d-flex justify-content-center">
            <h2>Data Penduduk Kota Surakarta Berdasarkan Usia dan Jenis Kelamin</h2>
        </div>
    </div>

    <div class="cards d-flex justify-content-center">

      {{-- tabel --}}
      <div class="card text-center" style="width: 30rem">
        <div class="row mt-3">
          <div class = "col">
            <h4>Tabel Sebaran Usia dan Jenis Kelamin di Kota Surakarta</h4>
            <table class="table mt-3">

              <thead class="thead-light">
                <tr>
                  <th scope="col">Kelompok Usia</th>
                  <th scope="col">Laki-Laki</th>
                  <th scope="col">Perempuan</th>
                  <th scope="col">Jumlah</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($usia as $row) : ?>
                  <tr> 
                    <td><?= $row["Kelompok Usia"];?></td>
                    <td><?= $row["Laki-Laki"];?></td>
                    <td><?= $row["Perempuan"];?></td>
                    <td><?= $row["Jumlah"];?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      {{-- bar chart --}}
      <div class="card text-center" style="width: 30rem; height: 24rem;">
        <div class="chart bar-chart md-3">
            <h4>Sebaran Usia di Kota Surakarta</h4>
            <div>
                <canvas id="usiachart"></canvas>
            </div>
        </div>
      </div>

    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
{{-- manggil chartusia.js --}}
<script src="/js/chartusia.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

@endsection