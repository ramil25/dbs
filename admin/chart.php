<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
  <script src="../Chart.js-2.7.3/dist/chart.min.js"></script>
	<script src="../chartjs-plugin-datalabels-0.5.0/dist/chartjs-plugin-datalabels.js"></script>
	<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/styles.css">
	<link rel="icon" href="..	/img/lspu.png">
</head>
<body>
		<div class="row">
			<div class="col-md-2 col-lg-2 ">
				<div class="csidebar">
					<br><br>

				</div>
			</div>
			<div class="col-md-10 col-lg-10">
				<nav>
					<div class="nav-center">
  				<img src="../img/lspu.png" height="100" width="100" />
  				<h1>Laguna State Polytechnic University</h1>
					<h2>Siniloan (Host) Campus</h2>
				</div>

					</div>
  				</nav>

			</div>
		</div>
		</div>
				<div class="pie-label">

				</div>
        <div class="css-back">
          <a href="index.php" class="btn btn-success" >Home</a>
        </div>

			    <canvas id="myChart" width="1000" height="500"></canvas>

</body>
</html>
<script>

let ctx = document.getElementById('myChart').getContext('2d');
let labels = ['CCS:30', 'CBMA:300', 'CCJE:100','CTE:200','CAS:150','CHMT:250','CA:130','IAE:30'];
let colorHex = ['#264478', '#9e480e', '#4472c4', '#ed7d31','#a5a5a5','#ffc000','#5b9bd5','#70ad47'];

let myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [11, 3, 3,25,8,17,13,21],
      backgroundColor: colorHex
    }],
    labels: labels
  },
  options: {
    responsive: true,
    legend: {
			display: false,
			fontColor: 'rgb(255,255,255)',
      position: 'bottom'

    },
		title: {
			fontSize: 20,
			fontColor: 'rgb(255,255,255)',
			display: true,
			text: 'Enrolees Percentage 2016'
		},
    plugins: {
      datalabels: {
				 color: '#ffffff',
				borderColor: '#fff',
				borderRadius: '20',
        backgroundColor: (context) => {
          return context.dataset.backgroundColor;
        },

        font: {
          weight: 'bold',
          size: '10'
        },
        formatter: (value) => {
          return value + ' %';
        }
      }
    }
  }
});

</script>
  </div>
</body>
</html>

</script>
