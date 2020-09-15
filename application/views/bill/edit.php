<?php
        $bill_id  = '';
        $department_id  = '';
        $session_id  = '';
        $semester_id  = '';
        $no_of_students  = '';
        $date  = '';
        $comments  = '';
        $bill_heads_id = '';
    if($bill_info){
        $bill_id  = $bill_info[0]['id'];
        $department_id  = $bill_info[0]['department_id'];
        $session_id  = $bill_info[0]['session_id'];
        $semester_id  = $bill_info[0]['semester_id'];
        $no_of_students  = $bill_info[0]['no_of_students'];
        $date  = $bill_info[0]['date'];
        $comments  = $bill_info[0]['comments'];
        $bill_heads_id = $bill_info[0]['bill_heads_id'];
        $course_id = $bill_info[0]['course_id'];
    }
 ?>
<input type="hidden" name="" id = "baseUrl" value="<?= base_url();?>">
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                UPDATE BILL
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form class="form-horizontal" action = "<?= base_url();?>BillController/edit" method = "POST">
                                <input type="hidden" name="bill_id" value="<?= $bill_id;?>">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Bill Type</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" name="bills_type"  value="" required>
                                                    <option value="">--Select Bills--</option>
                                                    <?php foreach($bills_type as $val){
                                                        ?>
                                                        <option value="<?= $val['id'];?>" <?php if($val['id'] == $bill_heads_id){echo "selected";}?>><?=$val['title'];?></option>
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
                                                        <option value="<?= $val['id'];?>" <?php if($val['id'] == $department_id){echo "selected";}?>><?=$val['title'];?></option>
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
                                                        <option value="<?= $val['id'];?>" <?php if($val['id'] == $session_id){echo "selected";}?>><?=$val['title'];?></option>
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
                                                        <option value="<?= $val['id'];?>" <?php if($val['id'] == $semester_id){echo "selected";}?>><?=$val['title'];?></option>
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
                                                <select class="form-control" name="courses" value="" required="">
                                                    <option value="">--Select Course--</option>
                                                     <?php foreach($courses as $val){?>
                                                        <option value="<?= $val['id'];?>" <?php if($val['id'] == $course_id){echo "selected";}?>><?=$val['title'];?></option>
                                                    <?php }?>
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
                                                <input type="number" id="contact_no" name = "no_of_students" class="form-control" value="<?= $no_of_students;?>" required>
                                                
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
                                                <input type="text" name = "date" class="form-control date" data-provide="datepicker" value="<?= date("m/d/Y", strtotime($date));?>">
                                                
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
                                                <textarea class="form-control" name = "comments" value = "<?= $comments;?>"><?= $comments;?></textarea>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                 
                                
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <a href="" class="btn btn-danger m-t-15 waves-effect pull-right">BACK</a>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect pull-left">UPDATE</button>
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