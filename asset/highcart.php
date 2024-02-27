<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="../js/fe/script1.js"></script>
<link rel="stylesheet" href="../css/fe/style1.css">
<style>
    body{
        overflow: hidden;
    }
    .highcharts-figure,
.highcharts-data-table table {
    min-width: 320px;
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

input[type="number"] {
    min-width: 50px;
}

</style>

<figure class="highcharts-figure">
    <div id="container"></div>
</figure>


<?php
echo "
<script>
    Highcharts.chart('container', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Sistem Informasi Induk Masyarakat'
    },
    tooltip: {
        valueSuffix: '%'
    },
    subtitle: {
        text:
        'Feedback'
    },
    plotOptions: {
        series: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: [{
                enabled: true,
                distance: 20
            }, {
                enabled: true,
                distance: -40,
                format: '{point.percentage:.1f}%',
                style: {
                    fontSize: '1.2em',
                    textOutline: 'none',
                    opacity: 0.7
                },
                filter: {
                    operator: '>',
                    property: 'percentage',
                    value: 10
                }
            }]
        }
    },
    series: [
        {
            name: 'Percentage',
            colorByPoint: true,
            data: [";
            require "koneksi.php";
            if (!$koneksi) {
              die('Gagal terhubung MySQL: ' . mysqli_connect_error());
            }
            $sql = "SELECT Keterangan, COUNT(*) AS jumlah, ROUND(COUNT(*) / (SELECT COUNT(*) FROM rating) * 100, 2) AS persentase FROM rating GROUP BY Keterangan;";
  
            $query = mysqli_query($koneksi, $sql);
  
            if (!$query) {
              die('SQL Error: ' . mysqli_error($koneksi));
            }
  
            while ($row = mysqli_fetch_array($query)) {
               echo "
            {
                name: '".$row["Keterangan"]."',
                y: ".$row["persentase"]."
            },
            ";
            }
          

            echo "
            ]
        }
    ]
});
"
?>

</script>
