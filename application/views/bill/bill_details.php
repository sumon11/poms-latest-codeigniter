<?php

	$billType = '';
	$instituition = '';
	$department = '';
	$session = '';
	$semester = '';
	$course = '';
	$number_of_students = '';
	$date = '';
	$comments = '';
	$status = 0;

	if($billInfo){
		$billType = $billInfo[0]['bTitle'];
		$instituition = $billInfo[0]['collegeName'];
		$department = $billInfo[0]['dTitle'];
		$session = $billInfo[0]['seTitle'];
		$semester = $billInfo[0]['sTitle'];
		$course = $billInfo[0]['cTitle'];
		$number_of_students = $billInfo[0]['no_of_students'];
		$date = $billInfo[0]['date'];
		$comments = $billInfo[0]['comments'];

	}

 ?>

<div class="card">
    <div class="header">
        <h2>
            BILL DETAILS
        </h2>
   
    </div>
    <div class="body" >
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                
                <tr><td>Bill Type :</td><td><?= $billType;?></td></tr>
                <tr><td>Instituition :</td><td><?= $instituition;?></td></tr>
                <tr><td>Department :</td><td><?= $department;?></td></tr>
                <tr><td>Session :</td><td><?= $session;?></td></tr>
                <tr><td>Semester :</td><td><?= $semester;?></td></tr>
                <tr><td>Course :</td><td><?= $course;?></td></tr>
                <tr><td>No of students :</td><td><?= $number_of_students;?></td></tr>
                <tr><td>Date :</td><td><?= $date;?></td></tr>
                <tr><td>Comments :</td><td><?= $comments;?></td></tr>
                <tr><td>Status :</td>
                	<td>
                	<?php if($status == 1){
                		echo "<button type = 'button' class = 'btn btn-info' value = 'Paid'>";
                	}else{
                		echo "<button type = 'button' class = 'btn btn-danger'>Unpaid</button>";
                	 }?>
                		
                	</td></tr>
                	
            </table>
        </div>
    </div>
</div>