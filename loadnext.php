
<!DOCTYPE html>
<html>

<body>

<?php 
			$count = $_POST['count'];

		    //Include database connection
			include 'dbconfig.php';

			echo "\n\n<div id='main' class='row'>";

			$fetch_sql="select * from sample ORDER BY id LIMIT $count,9";
			$result_fetch=$conn->query($fetch_sql);
			while($row = mysqli_fetch_array($result_fetch)){
			    $kid = $row['kanoon_id'];
			    $court = $row['court'];
			    $title = $row['title'];
			    $date = $row['doc_date'];
			    $resp = $row['respondent'];
			    $pet = $row['petitioner'];
			    $jor = $row['judgment_or_order'];
			    $casetext = $row['case_text'];
			    
			    $casetext_s = substr($casetext, 0, strrpos(substr($casetext, 0, 200), ' '));

			     echo "<br /><br /><div class='col-xl-4 col-md-6 mb-4'><div class='card border-left-primary shadow h-100 py-2'><div class='d-sm-flex align-items-center justify-content-between mb-1'> Madras High Court<a href='#' class='d-none d-sm-inline-block btn btn-sm btn-success shadow-sm'><span class='icon text-white-50'> <i class='fas fa-flag'></i> </span> <span class='text'>Environment</span></a> </div><div class='card-header'><h6 class='m-0 font-weight-bold text-primary'><a href='case.php?kid=$kid'>".$title."</a></h6></div><div class='card-body'>".$casetext_s."...<br /><br /><div style='text-align: center'> <a href='case.php?kid=$kid' class='btn btn-info btn-icon-split' type='submit'><span class='text'>Read More</span> </a> </div></div></div></div>";
			   
			}
			
		?>



</body>
</html>
