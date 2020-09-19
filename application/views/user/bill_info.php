
<?php 


	$totalPaidBill = 0;
	if($paid_bill){
		foreach($paid_bill as $val){
			$totalPaidBill=$totalPaidBill+$val['paid_amount'];
		}
	}
?>

<div class="col-md-6">
  <div class="card">
    <div class="header">
        PAID BILL (<?= $totalPaidBill;?>)
    </div>
    <div class="body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                     
                        <th>Session</th>
                        <th>Semester</th>
                        <th>Amount</th>
                       
                        
                    </tr>
                </thead>
                <tfoot>
                     <tr>
                        <th>SL</th>
                        <th>Title</th>
                       
                        <th>Session</th>
                        <th>Semester</th>
                        <th>Amount</th>
                      
                        
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $i = 0; 
                    foreach($paid_bill as $val){ $i++;?>
                        <tr>
                            <td><?= $i;?></td>
                            <td>
                                <a style="cursor: pointer;"><?= $val['bTitle'];?></a>
                                
                                    
                            </td>
                            
                            <td><?= $val['seTitle'];?></td>
                            <td><?= $val['sTitle'];?></td>
                            <td><?= $val['paid_amount'];?></td>
                        
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    </div>  
</div>

<div class="col-md-6">
    <div class="card">
    <div class="header">
        UNPAID BILL 
    </div>
    <div class="body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                     
                        <th>Session</th>
                        <th>Semester</th>
                        <th>Amount</th>
                       
                        
                    </tr>
                </thead>
                <tfoot>
                     <tr>
                        <th>SL</th>
                        <th>Title</th>
                       
                        <th>Session</th>
                        <th>Semester</th>
                        <th>Amount</th>
                      
                        
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $i = 0; 
                    foreach($unpaid_bill as $val){ $i++;?>
                        <tr>
                            <td><?= $i;?></td>
                            <td>
                                <a style="cursor: pointer;"><?= $val['bTitle'];?></a>
                                
                                    
                            </td>
                            
                            <td><?= $val['seTitle'];?></td>
                            <td><?= $val['sTitle'];?></td>
                            <td><?= $val['paid_amount'];?></td>
                        
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
