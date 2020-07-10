@extends('shared.layout')
@section('title', 'Dashboard')
@section('dashboard-button', 'active')

@section('content')
<main>
   <div class="container-fluid pt-5 ml-auto">
      <div class="row">
         <div class="card" style="width: 45%;">
            <div class="card-body text-center">
               <h5 class="card-title">Mis formularios</h5>
               <hr>
               <div>
               <ul class="list-group">
                  <li class="list-group-item"><a href="">Formulario 1</a></li>
                  <li class="list-group-item"><a href="">Formulario 2</a></li>
                  <li class="list-group-item"><a href="">Formulario 3</a></li>
                  <li class="list-group-item"><a href="">Formulario 4</a></li>
                  <li class="list-group-item"><a href="">Formulario 5</a></li>
                  <li class="list-group-item"><a href="">Formulario 6</a></li>
                  <li class="list-group-item"><a href="">Formulario 7</a></li>
               </ul>
               </div>
            </div>
         </div>
<br>
         <div class="card" style="width: 55%">
            <div class="card-body text-center">
               <h5 class="card-title">Estadísticas generales</h5>
               <hr>
               <div>
               <canvas id="myChart" style="max-width: 500px;"></canvas>
               </div>
            </div>
         </div>
      </div>


   </div>
</main>
<script type="text/javascript">
   var ctx = document.getElementById("myChart").getContext('2d');
   var myChart = new Chart(ctx, {
   type: 'bar',
   data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [{
         label: '# of Votes',
         data: [12, 19, 3, 5, 2, 3],
         backgroundColor: [
         'rgba(255, 99, 132, 0.2)',
         'rgba(54, 162, 235, 0.2)',
         'rgba(255, 206, 86, 0.2)',
         'rgba(75, 192, 192, 0.2)',
         'rgba(153, 102, 255, 0.2)',
         'rgba(255, 159, 64, 0.2)'
         ],
         borderColor: [
         'rgba(255,99,132,1)',
         'rgba(54, 162, 235, 1)',
         'rgba(255, 206, 86, 1)',
         'rgba(75, 192, 192, 1)',
         'rgba(153, 102, 255, 1)',
         'rgba(255, 159, 64, 1)'
         ],
         borderWidth: 1
      }]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero: true
            }
         }]
      }
   }
});
</script>
@endsection