<?php
    
    $billId = '';
	$billType = '';
	$instituition = '';
	$department = '';
	$session = '';
	$semester = '';
	$course = '';
	$number_of_students = '';
	$date = '';
	$comments = '';
	$status = '';
    $paid_amount = '';

	if($billInfo){
        $billId = $billInfo[0]['id'];
		$billType = $billInfo[0]['bTitle'];
		$instituition = $billInfo[0]['collegeName'];
		$department = $billInfo[0]['dTitle'];
		$session = $billInfo[0]['seTitle'];
		$semester = $billInfo[0]['sTitle'];
		$course = $billInfo[0]['cTitle'];
		$number_of_students = $billInfo[0]['no_of_students'];
		$date = $billInfo[0]['date'];
		$comments = $billInfo[0]['comments'];
        $paid_amount = $billInfo[0]['paid_amount'];
        $status = $billInfo[0]['status'];

	}

 ?>

<input type="hidden" name="" id = "baseUrl" value="<?= base_url();?>">
<input type="hidden" name="" id = "billId" value="<?= $billId;?>">
<div class="card">
    <div class="header">
        <h2>
            BILL DETAILS
        </h2>
   
    </div>
    <div class="body" >
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                
                <tr><td><b>Bill Type :</b></td><td><?= $billType;?></td></tr>
                <tr><td><b>Instituition :</b></td><td><?= $instituition;?></td></tr>
                <tr><td><b>Department :</b></td><td><?= $department;?></td></tr>
                <tr><td><b>Session :</b></td><td><?= $session;?></td></tr>
                <tr><td><b>Semester :</b></td><td><?= $semester;?></td></tr>
                <tr><td><b>Course :</b></td><td><?= $course;?></td></tr>
                <tr><td><b>No of students :</b></td><td><?= $number_of_students;?></td></tr>
                <tr><td><b>Date :</b></td><td><?= $date;?></td></tr>
                <tr><td><b>Comments :</b></td><td><?= $comments;?></td></tr>
                <tr><td><b>Status :</b></td>
                	<td>
                	<?php if($status == 1){
                		echo "<button type = 'button' class = 'btn btn-danger' id = 'editPaidAmount'>".$paid_amount."</button>";
                	}else{
                		echo "<button type = 'button' class = 'btn btn-danger' id = 'unPaidToPaid'>Unpaid</button>";
                	 }?>
                		<input type="number" name="" id = "paidAmount" value="">
                	</td></tr>
                	
            </table>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $('#paidAmount').hide();
       // $("input").focus(function(){ $("span").css("display", "inline").

        $(document).on("click","#unPaidToPaid",function(){
            $('#paidAmount').show();
        });
        $(document).on("click","#editPaidAmount",function(){
            $('#paidAmount').show();
        });
        $(document).on("blur","#paidAmount",function(){
            var paidAmount = $(this).val();
            var baseUrl = $('#baseUrl').val();
            var billId = $('#billId').val();
            $.ajax({
                type: "POST",
                url:baseUrl+'BillController/bill_paid',
                data: {billId:billId,paidAmount:paidAmount},
                success: function(data){
                    //alert(data);
                    $('#billDetailsView').html(data);
                    $('.billList').show();
                }

            });
        });
    });
</script>