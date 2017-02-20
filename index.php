<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="sum.css">
	<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton|Mukta+Vaani" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton|Courgette|Mukta+Vaani" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton|Courgette|Mukta+Vaani|Roboto+Condensed" rel="stylesheet">
	<title></title>
</head>
<body>

	<div id="wrapper">
            <div class="wrapper2">
                  <?php
                  session_start();
                  if ( isset($_SESSION["moneylast"])&&isset($_SESSION["resultlast"])){
                        echo $_SESSION["moneylast"]." to ".$_SESSION["resultlast"];
                  }  
                  ?>
            </div>
      <form action="exchange.php" method="GET">
      
      <div class="box-input">
      	<input type="number" name="number" class="inputdata" placeholder="  money :"><br><br>
	  </div>

	  		<div class="box-select-money">
			<select class="select-money" name="form">
      			<option value="THB">THB</option>
      			<option value="EUR">EUR</option>
      			<option value="USD">USD</option>
      		</select>
      		</div>


      		<div class="box-to-money">
      		<select class="to-money" name="to">
      			<option value="THB">To THB :</option>
      			<option value="EUR">To EUR :</option>
      			<option value="USD">To USD :</option>
      		</select><br><br>
      		</div>

                  <h1 class="title-Currency"> Currency exchange </h1>
                


      		<div class="Box-Button-Exchange">
      		<input type="submit" name="submit" class="Button-Exchange" value="Exchange" >
      		</div>


      		
		</form>
		
    </div>

</body>
</html>