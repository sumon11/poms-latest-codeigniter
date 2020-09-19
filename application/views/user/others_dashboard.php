

<input type="hidden" name="" id = "baseUrl" value="<?= base_url();?>">
<input type="hidden" name="" id = "userId" value="<?= $this->session->userdata('user_id');?>">
<div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                
                <div class="col-md-6" id = "billDiv">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">
                                BILL INFORMATION
                            </div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW TICKETS</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW COMMENTS</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW VISITORS</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>


<div class="row" id = "billInfo">
    
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $('#billInfo').hide();
        $('#billDiv').on("click",function(){
            var baseUrl = $('#baseUrl').val();
            var userId = $('#userId').val();
             $.ajax({
                type: "POST",
                url:baseUrl+'UserController/bill_list',
                data: {userId:userId},
                success: function(data){
                    $('#billInfo').show();
                    $('#billInfo').html(data);
                }

            });
        });
    });
</script>