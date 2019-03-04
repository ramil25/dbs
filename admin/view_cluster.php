
<?php
require '../db.php';
$year=$_GET['year'];
$title=$_GET['title'];
$c1='';
$c2='';
$c3='';
if(isset($_GET['title']))
{
  if($title=="CA")
  {
    $c1='BSA';
    $c2='BAT';
    $c3='BSAgEd';
    $c4='BSAB';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
  else if($title=="CCS")
  {
    $c1='BSIT';
    $c2='BSCS';
    $c3='BSIS';
    $c4='ACT';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
  else if($title=="CHMT")
  {
    $c1='DHRM';
    $c2='BSHRM';
    $c3='BS Tourism';
    $c4='';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
  else if($title=="CCJE")
  {
    $c1='BSCrim';
    $c2='';
    $c3='';
    $c4='';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
  else if($title=="IAE")
  {
    $c1='BSAgEng';
    $c2='';
    $c3='';
    $c4='';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
  else if($title=="CTE")
  {
    $c1='BSEd';
    $c2='BEED';
    $c3='';
    $c4='';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
  else if($title=="CBMA")
  {
    $c1='BSBA';
    $c2='BSAccountancy';
    $c3='BSOA';
    $c4='ACS';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
  else if($title=="CAS")
  {
    $c1='BSP';
    $c2='BS Food Tech';
    $c3='';
    $c4='';
    $sql ="SELECT * from students WHERE (fchoice='".$c1."' OR fchoice='".$c2."' OR fchoice='".$c3."' OR fchoice='".$c4."') AND (remarks='Qualified' OR remarks='qualified')";
  }
$res =mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cluster</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet"  href="../css/custom.css">
	<link rel="icon" href="../img/lspu.png">
</head>
<body>
  <div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
        <div class="container-fluid">
        <nav class="navbar navbar-expand-lg" style="width: 100%; text-align: center; display: block; font-family: Times New Roman">
          <span style="float: left; padding-left:150px;"><img src="../img/lspu.png" height="100" width="100" /></span>
          <div style="text-align: center;"><h1>Laguna State Polytechnic University</h1>
          <h2>Siniloan (Host) Campus</h2></div>
          </nav>
        </div>
        <h1 style="text-align: center; font-size: 40px; margin-top: 10px;"><?php echo $title; ?></h1><br>
        <table style="margin-top: 20px; border-color: black; background-color: white; color: black;" class="table">
          <tr>
            <td>NAME</td>
            <td>COURSE
              <td>RAW SCORE</td></td>
              <td>GWA</td>
              <td>Remarks</td>
          </tr>
                  <?php 
          while($row=mysqli_fetch_assoc($res))
      { ?>
        <tr>
          <td><p style="color: black; font-size: 20px;"><?php echo $row['full_name'];
            ?></p></td>
            <td><p style="color: black; font-size: 20px;"><?php echo $row['fchoice'];
            ?></p></td>
            <td><p style="color: black; font-size: 20px;"><?php echo $row['raw_score'];
            ?></p></td>
            <td><p style="color: black; font-size: 20px;"><?php echo $row['grade_GWA'];
            ?></p></td>
           <td><p style="color: black; font-size: 20px;"><?php echo $row['remarks'];
            ?></p></td>
        </tr>
      <?php } ?>
               </table>
			</div>
		</div>
		</div>

</body>
</html>
<?php
}
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../js/bootstrap.js">

</script>

