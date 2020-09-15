

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ADD NEW USER
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form class="form-horizontal" action = "<?= base_url();?>UserController/store" method = "POST" enctype = "multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="name" name = "name" class="form-control" placeholder="Enter your name" value = "<?php echo set_value('name');?>">
                                                
                                            </div>
                                            <span style="color:red;"><?php echo form_error('name', '<div class="error">', '</div>'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                     <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Designation</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" name="designation" value = "<?php echo set_value('designation');?>">
                                                    <option value="">--Select Designation--</option>
                                                    <?php foreach($designations as $val){?>
                                                        <option value="<?= $val['id'];?>"><?=$val['title'];?></option>
                                                    <?php }?>
                                                </select>
                                                
                                            </div>
                                            <span style="color:red;"><?php echo form_error('designation', '<div class="error">', '</div>'); ?></span>
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
                                                <select class="form-control" name="department" value = "<?php echo set_value('department');?>">
                                                    <option value="">--Select Department--</option>
                                                     <?php foreach($departments as $val){?>
                                                        <option value="<?= $val['id'];?>"><?=$val['title'];?></option>
                                                    <?php }?>
                                                </select>
                                                
                                            </div>
                                            <span style="color:red;"><?php echo form_error('department', '<div class="error">', '</div>'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" id="email" name = "email" class="form-control" placeholder="Enter your email" value = "<?php echo set_value('email');?>">
                                            </div>
                                            <span style="color:red;"><?php echo form_error('email', '<div class="error">', '</div>'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Contact No.</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="contact_no" name = "contact_no" class="form-control" placeholder="Enter Contact No." value = "<?php echo set_value('contact_no');?>">
                                                
                                            </div>
                                            <span style="color:red;"><?php echo form_error('contact_no', '<div class="error">', '</div>'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="address">Upload Image</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" id="image" name = "image">
                                            </div>
                                          <span style="color:red;"><?php if(isset($image_error)){echo $image_error;} ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="address">address</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea class="form-control" name = "address" value = "<?php echo set_value('address');?>"></textarea>
                                            </div>
                                            <span style="color:red;"><?php echo form_error('address', '<div class="error">', '</div>'); ?></span>
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