<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name ="viewport" content ="width=device-width, initial-scale=1.0">
	<title>Database Term Project</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<style type ="text/css">
         body
	{
         background-image: url("bgimage.jpg");
	}
	.nav-tabs li a {font-size:18px; color:#0E0D21;}
    	</style>
</head>

<body>

 	<div class = "navbar navbar-inverse navbar-fixed-static" style="background-color = #2A283D !important;">
    
 		<div class ="container" style = "background-color = #2D2B40 !important;">
        
    			<a href="#" class = "navbar-brand" style="font-color: #B7B3E6 !important;"> Online Bookstore System</a>
            
        			<button class ="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
            				<span class = "icon-bar"></span>
                			<span class = "icon-bar"></span>
                			<span class = "icon-bar"></span>
         			</button>
          
            
    		</div>
        
 	</div>
 
<div class ="container">
        <ul class ="nav nav-tabs" role = "tablist">
        	<li class ="active"><a href="#Books" role ="tab" data-toggle ="tab">Books</a></li>
        	<li><a href="#Customers" role ="tab" data-toggle ="tab">Customers</a></li>
        	<li><a href="#Employees" role ="tab" data-toggle ="tab">Employees</a></li>
        	<li><a href="#Orders" role ="tab" data-toggle ="tab">Orders</a></li>
        	<li><a href="#OrderDetails" role ="tab" data-toggle ="tab">OrderDetails</a></li>
        	<li><a href="#Shippers" role ="tab" data-toggle ="tab">Shippers</a></li>
        	<li><a href="#Subjects" role ="tab" data-toggle ="tab">Subjects</a></li>
            	<li><a href="#Suppliers" role ="tab" data-toggle ="tab">Suppliers</a></li>
        </ul>
                
                <div class ="tab-content">
                	<div class ="tab-pane face active in" id ="Books">
                    
                    	<div class = "container">
                        	<table class="table">
                            
				<?php

					$dbhost = "";
					$dbuser = "";
					$dbpass = "";
					$dbname = "";
					$tables = array('Books', 'Customers', 'Employees', 'Orders', 'OrderDetails', 'Shippers', 'Subjects', 'Suppliers');
					if (!mysql_connect($dbhost, $dbuser, $dbpass))
        					die("Can't connect to database");

					if (!mysql_select_db($dbname))
        					die("Can't select database");


					$result = mysql_query("SELECT * FROM $tables[0]");


					echo "<thead>";
					echo "<tr>";

					$heads = mysql_num_fields($result);
					for($i=0; $i<$heads; $i++)
					     {
        					$field = mysql_fetch_field($result);
        					echo "<th>{$field->name}</th>";
					     }
						
					echo "</tr>";
					echo "</thead>";

					while ($row = mysql_fetch_row($result))
					     {
        					echo "<tr>";
        					foreach($row as $cell)
                					echo "<td>$cell</td>";
        						echo "</tr>";
					     }
					mysql_free_result($result);

				 ?>

                               
                                </table>
                           </div>  
			   <div class="row">
				<div class="col-lg-4">			
				   </div>
					<div class="col-lg-8">
					  <div id="result">
				          </div>
			                </div>
		                </div>
                           </div>
                    <div class = "tab-pane fade" id ="Customers">
                    <div class = "container">
                    <table class="table">
                            
                    <?php

				$dbhost = " ";
				 $dbuser = " ";
				$dbpass = " ";
				$dbname = " ";
				$tables = array('Books', 'Customers', 'Employees', 'Orders', 'OrderDetails', 'Shippers', 'Subjects', 'Suppliers');
					if (!mysql_connect($dbhost, $dbuser, $dbpass))
        					die("Can't connect to database");

					if (!mysql_select_db($dbname))
        					die("Can't select database");
				$result = mysql_query("SELECT * FROM $tables[1]");

				echo "<thead>";
				echo "<tr>";
				$heads = mysql_num_fields($result);
				for($i=0; $i<$heads; $i++)
					{
        					$field = mysql_fetch_field($result);
        					echo "<th>{$field->name}</th>";
					}

				echo "</tr>";
				echo "</thead>";
				while ($row = mysql_fetch_row($result))
					{
        					echo "<tr>";
        					foreach($row as $cell)
                				echo "<td>$cell</td>";
        					echo "</tr>";
					}
				mysql_free_result($result);
		    ?>
                               
                    </table>
                 </div>
                 </div>
                 <div class = "tab-pane fade" id ="Employees">
                    <div class = "container">
                        <table class="table">
                                	<?php

						$dbhost = " ";
						 $dbuser = " ";
						$dbpass = " ";
						$dbname = " ";
						$tables = array('Books', 'Customers', 'Employees', 'Orders', 'OrderDetails', 'Shippers', 'Subjects', 'Suppliers');
						if (!mysql_connect($dbhost, $dbuser, $dbpass))
        						die("Can't connect to database");

						if (!mysql_select_db($dbname))
        						die("Can't select database");


						$result = mysql_query("SELECT * FROM $tables[2]");
						echo "<thead>";
						echo "<tr>";

						$heads = mysql_num_fields($result);
						for($i=0; $i<$heads; $i++)
							{
        							$field = mysql_fetch_field($result);
        							echo "<th>{$field->name}</th>";
							}

						echo "</tr>";
						echo "</thead>";

						while ($row = mysql_fetch_row($result))
							{
        						echo "<tr>";
        						foreach($row as $cell)
                						echo "<td>$cell</td>";
        							echo "</tr>";
							}
						mysql_free_result($result);

					?>
                               
                            </table>
							
                        </div>
                    </div>
                    <div class = "tab-pane fade" id ="Orders">
                    	<div class = "container">
                        	<table class="table">
                            
                                	<?php

						$dbhost = " ";
						$dbuser = " ";
						$dbpass = " ";
						$dbname = " ";
						$tables = array('Books', 'Customers', 'Employees', 'Orders', 'OrderDetails', 'Shippers', 'Subjects', 'Suppliers');
						if (!mysql_connect($dbhost, $dbuser, $dbpass))
        						die("Can't connect to database");

						if (!mysql_select_db($dbname))
        						die("Can't select database");

						$result = mysql_query("SELECT * FROM $tables[3]");


						echo "<thead>";
						echo "<tr>";

						$heads = mysql_num_fields($result);
						for($i=0; $i<$heads; $i++)
							{
        							$field = mysql_fetch_field($result);
        							echo "<th>{$field->name}</th>";
							}
						echo "</tr>";
						echo "</thead>";

						while ($row = mysql_fetch_row($result))
							{
        						echo "<tr>";
        						foreach($row as $cell)
                					echo "<td>$cell</td>";
        						echo "</tr>";
							}
						mysql_free_result($result);

					?>
                               
                            </table>
                        </div>
                    </div>
                    <div class = "tab-pane fade" id ="OrderDetails">
                    	<div class = "container">
                        	<table class="table">
                            
                                	<?php
						$dbhost = " ";
						 $dbuser = " ";
						$dbpass = " ";
						$dbname = " ";
						$tables = array('Books', 'Customers', 'Employees', 'Orders', 'OrderDetails', 'Shippers', 'Subjects', 'Suppliers');
						if (!mysql_connect($dbhost, $dbuser, $dbpass))
        						die("Can't connect to database");

						if (!mysql_select_db($dbname))
        						die("Can't select database");
						$result = mysql_query("SELECT * FROM $tables[4]");
						echo "<thead>";
						echo "<tr>";

						$heads = mysql_num_fields($result);
						for($i=0; $i<$heads; $i++)
							{
        						$field = mysql_fetch_field($result);
        						echo "<th>{$field->name}</th>";
							}

						echo "</tr>";
						echo "</thead>";

						while ($row = mysql_fetch_row($result))
						{
        						echo "<tr>";
        						foreach($row as $cell)
                					echo "<td>$cell</td>";
        						echo "</tr>";
						}
						mysql_free_result($result);

					?>
                               
                            </table>
                        </div>
                    </div>
                    <div class = "tab-pane fade" id ="Shippers">
                    	<div class = "container">
                        	<table class="table">
                            
                                	<?php
						$dbhost = " ";
						 $dbuser = " ";
						$dbpass = " ";
						$dbname = " ";
						$tables = array('Books', 'Customers', 'Employees', 'Orders', 'OrderDetails', 'Shippers', 'Subjects', 'Suppliers');
						if (!mysql_connect($dbhost, $dbuser, $dbpass))
        						die("Can't connect to database");

						if (!mysql_select_db($dbname))
        						die("Can't select database");

						$result = mysql_query("SELECT * FROM $tables[5]");
						echo "<thead>";
						echo "<tr>";

						$heads = mysql_num_fields($result);
						for($i=0; $i<$heads; $i++)
							{
        						$field = mysql_fetch_field($result);
        						echo "<th>{$field->name}</th>";
							}
						echo "</tr>";
						echo "</thead>";

						while ($row = mysql_fetch_row($result))
							{
        							echo "<tr>";
        							foreach($row as $cell)
                						echo "<td>$cell</td>";
        							echo "</tr>";
							}
						mysql_free_result($result);

					?>
                               
                            </table>
                        </div>
                    </div>
                    <div class = "tab-pane fade" id ="Subjects">
                    	<div class = "container">
                        	<table class="table">
                            
                                	<?php

						$dbhost = " ";
						 $dbuser = " ";
						$dbpass = " ";
						$dbname = " ";
						$tables = array('Books', 'Customers', 'Employees', 'Orders', 'OrderDetails', 'Shippers', 'Subjects', 'Suppliers');
						if (!mysql_connect($dbhost, $dbuser, $dbpass))
        						die("Can't connect to database");

						if (!mysql_select_db($dbname))
        						die("Can't select database");

						$result = mysql_query("SELECT * FROM $tables[6]");

						echo "<thead>";
						echo "<tr>";

						$heads = mysql_num_fields($result);
						for($i=0; $i<$heads; $i++)
							{
        						$field = mysql_fetch_field($result);
        						echo "<th>{$field->name}</th>";
							}

						echo "</tr>";
						echo "</thead>";

						while ($row = mysql_fetch_row($result))
							{
        							echo "<tr>";
        							foreach($row as $cell)
                						echo "<td>$cell</td>";
        							echo "</tr>";
							}
						mysql_free_result($result);

					?>
                               
                            </table>
                        </div>
                    </div>
                    <div class = "tab-pane fade" id ="Suppliers">
                    	<div class = "container">
                        	<table class="table">
                            
                                	<?php
						$dbhost = " ";
						 $dbuser = " ";
						$dbpass = " ";
						$dbname = " ";
						$tables = array('Books', 'Customers', 'Employees', 'Orders', 'OrderDetails', 'Shippers', 'Subjects', 'Suppliers');
						if (!mysql_connect($dbhost, $dbuser, $dbpass))
        						die("Can't connect to database");
						if (!mysql_select_db($dbname))
        						die("Can't select database");

						$result = mysql_query("SELECT * FROM $tables[7]");
						echo "<thead>";
						echo "<tr>";

						$heads = mysql_num_fields($result);
						for($i=0; $i<$heads; $i++)
						{
        					$field = mysql_fetch_field($result);
        					echo "<th>{$field->name}</th>";
						}

						echo "</tr>";
						echo "</thead>";

						while ($row = mysql_fetch_row($result))
							{
        							echo "<tr>";
        							foreach($row as $cell)
                						echo "<td>$cell</td>";
        							echo "</tr>";
							}
						mysql_free_result($result);

					?>
                               
                            </table>
                        </div>
                    </div>
					
					
		<form id="qry-form" role="form" method="post" action="">
		<textarea name="query" class="form-control" rows="6"></textarea>
		<button type="submit" id = "submit" value ="submit" class="btn btn-default">Submit</button>

		<h1> Output: </h1>
		</form>
		<?php

			$dbhost = " ";
			 $dbuser = " ";
			$dbpass = " ";
			$dbname = " ";
			$db = " ";
							
			if(!empty($_POST['query']))
				{
								
					$connection=mysql_connect($dbhost,$dbuser,$dbpass);
					if (!mysql_select_db($db, $connection)) 
						{
							echo mysql_errno($connection) . ": " . mysql_error($connection). "\n";
						}
					mysql_select_db($db, $connection);
								
					$query = stripslashes($_POST['query']);
					$qry1 = mysql_real_escape_string($query);
					$qry2 = stripslashes($qry1);
					$notALLOWED = "DROP";
					$NoDrops = stripos($qry2, $notALLOWED); 
					if($NoDrops !== false)
						{
							echo'<div class="container"> ';
							echo'<div class="row"> ';
							echo'<div class="row"> ';
							echo '<div class ="alert alert-danger" role ="alert">';
							echo "\n Error: Drops are not supported.\n";
							echo'</div>';
							echo'</div>';
							echo'</div>';
							echo'</div>';
							exit(0);
						}
					$result = mysql_query($qry2);
					if(!$result)
						{		 
							echo'<div class="container"> ';
							echo'<div class="row"> ';
							echo'<div class="row"> ';
							echo '<div class ="alert alert-danger" role ="alert">';
							echo "\n Error: ".mysql_errno($connection) .': '.mysql_error($connection)."\n";
							echo'</div>';
							echo'</div>';
							echo'</div>';
							echo'</div>';
									
						} 
					 elseif($NoDrops !== false)
						{
							echo'<div class="container"> ';
							echo'<div class="row"> ';
							echo'<div class="row"> ';
							echo '<div class ="alert alert-danger" role ="alert">';
							echo'<strong>Uh-oh!</strong>';
							echo "\n Error: Drops are not supported\n";
							echo'</div>';
							echo'</div>';
							echo'</div>';
							echo'</div>';
							exit(0);
						}
					else
						{
							echo'<table class="table">';
									
							$heads = mysql_num_fields($result);
							if($heads > 0)
								echo "<thead>";
								echo "<tr>";
									
								for($i=0; $i<$heads; $i++)
									{
        								$field = mysql_fetch_field($result);
        								echo "<th>{$field->name}</th>";
									}
	
								echo "</tr>";
								echo "</thead>";

								while ($row = mysql_fetch_row($result))
									{
        									echo "<tr>";
        									foreach($row as $cell)
                								echo "<td>$cell</td>";
        									echo "</tr>";
									}
								mysql_free_result($result);
						}
				}
			?>								
        	</div>



        
 

 
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    <script src="js/bootstrap.js"></script>
    
</body>
</html>
