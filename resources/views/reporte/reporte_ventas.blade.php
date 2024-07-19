@extends('layout.panelAdmin')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div>
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div>
            <a href="{{route('reporte.ventaspdf_generar')}}" class="btn btn-success">
                Generar Reporte
            </a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('myChart');
            let productos = @json($producto_nombre) ;
            let cantidad = @json($producto_cantidad) ;
            new Chart(ctx, {
              type: 'bar',
              data: {
                labels:productos,
                datasets: [{
                  label: '# Ventas',
                  data: cantidad,
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              }
            });
          </script>
      
    </div>
@endsection