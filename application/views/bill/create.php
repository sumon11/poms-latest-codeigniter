
<input type = "hidden" id = "baseUrl" value = "<?= base_url();?>">
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ADD NEW BILL
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form class="form-horizontal" action = "<?= base_url();?>BillController/store" method = "POST">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Bill Type</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" name="bills_type"  value="" required>
                                                    <option value="">--Select Bills--</option>
                                                    <?php foreach($bills_type as $val){?>
                                                        <option value="<?= $val['id'];?>"><?=$val['title'];?></option>
                                                    <?php }?>
                                                </select>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Instituitions</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" name="colleges"  value="" required>
                                                    <option value="">--Select Colleges--</option>
                                                    <?php foreach($instituitions as $val){?>
                                                        <option value="<?= $val['id'];?>"><?=$val['title'];?></option>
                                                    <?php }?>
                                                </select>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                     <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Department</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" id = "departments" name="departments"  value="" required>
                                                    <option value="">--Select Department--</option>
                                                    <?php foreach($departments as $val){?>
                                                        <option value="<?= $val['id'];?>"><?=$val['title'];?></option>
                                                    <?php }?>
                                                </select>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Session</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" id = "sessions" name="sessions" value="" required="">
                                                    <option value="">--Select Session--</option>
                                                     <?php foreach($sessions as $val){?>
                                                        <option value="<?= $val['id'];?>"><?=$val['title'];?></option>
                                                    <?php }?>
                                                </select>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email">Semester</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" id = "semesters" name="semesters" value="" required="">
                                                    <option value="">--Select Semester--</option>
                                                     <?php foreach($semesters as $val){?>
                                                        <option value="<?= $val['id'];?>"><?=$val['title'];?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email">Course</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line" id = "courses">
                                                <select class="form-control"  name="" value="" required="required">
                                                    <option value="">--Select Courses--</option>
                                                     
                                                </select>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Number Of Students</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" id="contact_no" name = "no_of_students" class="form-control" value="" required>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="address">Date</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name = "date" class="form-control date" data-provide="datepicker" value="">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="address">Comments</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea class="form-control" name = "comments" value = ""></textarea>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                 
                                
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <a href="" class="btn btn-danger m-t-15 waves-effect pull-right">BACK</a>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect pull-left">SAVE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <script type="text/javascript">
                $(document).on("change","#semesters",function(){
                    var semester = $(this).val();
                    var department = $('#departments').val();
                    var session = $('#sessions').val();
                    var baseUrl = $('#baseUrl').val();
                    $.ajax({
                        type: "POST",
                        url:baseUrl+'BillController/courses',
                        data: {semester:semester,department:department,session:session},
                        success: function(data){
                            $('#courses').html(data);
                        }

                    });
                });
            </script>