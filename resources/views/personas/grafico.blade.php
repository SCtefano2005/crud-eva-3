@extends('layout.app')

@section('content')
<div class="card" style="width: 70%; margin: 0 auto; margin-top: 20px;">
    <div class="card-header">
        Personas Registradas por Mes de Nacimiento
    </div>
    <div class="card-body">
        <div id="containerd" style="height: 300px;"></div>
    </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var personasPorMes = @json($personasPorMes);
        var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        var datosParaGrafico = personasPorMes.map(function(item) {
            return {
                name: meses[item.mes - 1],
                y: item.cantidad
            };
        });

        Highcharts.chart('containerd', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Personas Registradas por Mes de Nacimiento',
                align: 'left'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Personas',
                colorByPoint: true,
                data: datosParaGrafico
            }]
        });
    });
</script>

@endsection
