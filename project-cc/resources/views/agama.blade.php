@extends('layouts.main')

@section('container')

    <div class = "container">
        
        {{-- title --}}
        <div class = "row mt-3">
            <div class ="col d-flex justify-content-center">
                <h2>Data Penduduk Kota Surakarta Berdasarkan Agama</h2>
            </div>
        </div>

      <div class="cards d-flex justify-content-center">
        <div class="card text-center" style="width: 36rem">
        {{-- tabel --}}
        <div class="row mt-3">
          <div class = "col">
            <h4>Tabel Sebaran Agama di tiap Kecamatan Kota Surakarta</h4>
              <table class="table mt-3">

                  <thead class="thead-light">
                      <tr>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Islam</th>
                        <th scope="col">Protestan</th>
                        <th scope="col">Katolik</th>
                        <th scope="col">Hindu</th>
                        <th scope="col">Budha</th>
                        <th scope="col">Lainnya</th>
                      </tr>
                  </thead>

                  <tbody>
                    <?php foreach ($agama as $row) : ?>
                      <tr> 
                        <td><?= $row["Kecamatan"];?></td>
                        <td><?= $row["Islam"];?></td>
                        <td><?= $row["Protestan"];?></td>
                        <td><?= $row["Katolik"];?></td>
                        <td><?= $row["Hindu"];?></td>
                        <td><?= $row["Budha"];?></td>
                        <td><?= $row["Lainnya"];?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
              </table>
          </div>
        </div>
      </div>
      <div class="card text-center" style="width: 24rem;">
        <div class="chart doughnut-chart">
            <h4>Sebaran Agama di Kota Surakarta</h4>
            <div>
                <canvas id="doughnut"></canvas>
            </div>
        </div>
      </div>
    </div>
    
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script src="/js/chartagama.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

@endsection