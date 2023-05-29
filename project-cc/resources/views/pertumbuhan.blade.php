@extends('layouts.main')

@section('container')
<div class = "container">

    <div class = "row mt-3">
        <div class ="col d-flex justify-content-center">
            <h2>Laju Pertumbuhan Penduduk Kota Surakarta</h2>
        </div>
    </div>


    <div class="row mt-3">
        <div class = "col  d-flex justify-content-center">
            <div class="card text-center" style="width: 54rem">
            <table class="table">

                <thead class="thead-light">
                    <tr>
                      <th scope="col">Kecamatan</th>
                      <th scope="col">Penduduk (ribu)</th>
                      <th scope="col">Laju Pertumbuhan per Tahun</th>
                      <th scope="col">Persentase Penduduk</th>
                      <th scope="col">Kepadatan Penduduk per km2</th>
                    </tr>
                </thead>

                <tbody>
                  <?php foreach ($pertumbuhan as $row) : ?>
                    <tr> 
                      <td><?= $row["Kecamatan"];?></td>
                      <td><?= $row["Penduduk (ribu)"];?></td>
                      <td><?= $row["Laju Pertumbuhan per Tahun"];?></td>
                      <td><?= $row["Persentase Penduduk"];?></td>
                      <td><?= $row["Kepadatan Penduduk per km2"];?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

@endsection