<input type = "hidden" id = "baseUrl" value="<?= base_url();?>">
<div class="row clearfix">
	<div class="col-md-12">
		<a href="<?= base_url();?>create_bills" class = "btn btn-info"><i class="material-icons">add</i>Add New Bill</a>
        <a href="<?= base_url();?>bills" class = "btn btn-success billList"><i class="material-icons">add</i>Bill List</a>
	</div>
</div>
<div class="clear"></div><br>
<div class="row clearfix">
    <div class="col-md-12">
        <?php if($this->session->flashdata('msg_success_update')){?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Well done!</strong> <?= $this->session->flashdata('msg_success_update');?>
            </div>


        
    <?php }?>
        <?php if($this->session->flashdata('msg_success')){?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Well done!</strong> <?= $this->session->flashdata('msg_success');?>
            </div>
        
    <?php }?>
    <?php if($this->session->flashdata('msg_error')){?>
        <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Oh snap!</strong> <?= $this->session->flashdata('msg_error');?>
            </div>
      
    <?php }?>
    <?php if($this->session->flashdata('msg_error_update')){?>
        <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Oh snap!</strong> <?= $this->session->flashdata('msg_error_update');?>
            </div>
      
    <?php }?>
    </div>
</div>



<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id = "billDetailsView">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BILL LIST
                            </h2>
                       
                        </div>
                        <div class="body" >
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Bill Title</th>
                                            <th>Instituition</th>
                                            <th>Department</th>
                                            <th>Session</th>
                                            <th>Semester</th>
                                           
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                         <tr>
                                            <th>SL</th>
                                            <th>Bill Title</th>
                                            <th>Instituition</th>
                                            <th>Department</th>
                                            <th>Session</th>
                                            <th>Semester</th>
                                            
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 0;
                                        if($bills){
                                            foreach($bills as $val){ $i++;?>
                                            <tr>
                                                <td><?= $i;?></td>
                                                <td><?= $val['bTitle'];?></td>
                                                <td><?= $val['iTitle'];?></td>
                                                <td><?= $val['dTitle'];?></td>
                                                <td><?= $val['seTitle'];?></td>
                                                <td><?= $val['sTitle'];?></td>
                                               
                                                <td>
                                                    <?php if($val['status'] == 0){?>
                                                        <a href="#" class="btn btn-danger btn-xs" id = "unpaidToPaid">Unpaid</a>
                                                    <?php }else{?>
                                                        <a href="#" class="btn btn-success btn-xs">Paid</a>
                                                    <?php }?>

                                                </td>
                                                
                                                <td>
                                                    <span><a href="<?= base_url();?>edit_bills/<?= $val['id'];?>" class="btn btn-primary btn-xs"><i class="material-icons">create</i></a></span>
                                                    
                                                    <span><a style="coursor:pointer;" class="billsView btn btn-info btn-xs" id = "<?= $val['id'];?>"><i class="material-icons">remove_red_eye</i></a></span>
                                                    <span><a href="" class="btn btn-danger btn-xs"><i class="material-icons">delete</i></a></span>
                                                </td>
                                            </tr>
                                        <?php }
                                    }?>
                                        
                                        
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<script type="text/javascript">
    $(document).ready(function(){
        $('.billList').hide();
        $('.billsView').click(function(){
            var billId = $(this).attr('id');
            var baseUrl = $('#baseUrl').val();
            $.ajax({
                type: "POST",
                url:baseUrl+'BillController/bill_details',
                data: {billId:billId},
                success: function(data){
                    //alert(data);
                    $('#billDetailsView').html(data);
                    $('.billList').show();
                }

            });
        });
    });
</script>