<?php
   include('session.php');
?>
<html>
   <head>
      <title>Welcome!</title>
   </head>
   <body>
      <h1>Welcome <?php echo $login_session; ?>, You have successfully breached it</h1>
      <h2><a href = "logout.php">Sign Out</a></h2>
		  <?php
		  $rows;
	   		/*Displaying sql malicious query and its result for demo purpose*/
		  echo('<b>SQL Query Used:</b> '.$_SESSION['sql_query'].'</br><br><br>');
		  echo('Number of records in database is: <b>'.$_SESSION['count'].'</b></br><br>');
		  if(isset($_SESSION['query_result']))
		  {
		  $rows = $_SESSION['query_result'];
	      }

$counter = 0;
$in = -1;

		 for($i=0;$i<count($rows)/3;$i++)
		  {
			$counter++;
			echo('<b>'. $counter . ':</b> 	');
			for($j = 0; $j < 3; $j++) {
				$in++;
				if($j==0) continue;
				echo($rows[$in]);		
				echo("	-	");
			}
			echo("<br>");
		  }
		  ?>
	</body>
</html>
