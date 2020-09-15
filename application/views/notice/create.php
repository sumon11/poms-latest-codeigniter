
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ADD NEW NOTICE
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form class="form-horizontal" action = "<?= base_url();?>save_notice" method = "POST" enctype = "multipart/form-data">
                                <div class="row clearfix">
                                     <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Notice Type</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" name="notice_category">
                                                    <option value="">--Select Type--</option>
                                                    <?php foreach($noticeCategories as $val){?>
                                                        <option value="<?= $val['id'];?>"><?=$val['title'];?></option>
                                                    <?php }?>
                                                </select>
                                                
                                            </div>
                                            <span style="color:red;"><?php echo form_error('notice_category', '<div class="error">', '</div>'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Title</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="title" name = "title" class="form-control" placeholder="Enter notice title" value = "<?php echo set_value('title');?>">
                                                
                                            </div>
                                            <span style="color:red;"><?php echo form_error('title', '<div class="error">', '</div>'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Date</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name = "notice_date" class="form-control date" data-provide="datepicker" value="<?= set_value('notice_date');?>">
                                                
                                            </div>
                                             <span style="color:red;"><?php echo form_error('notice_date', '<div class="error">', '</div>'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="hints">Hints</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                           <div class="form-line">
                                                <input type="text" id="hints" name = "hints" class="form-control" placeholder="Enter hints" value = "<?php echo set_value('hints');?>">
                                                
                                            </div>
                                            <span style="color:red;"><?php echo form_error('hints', '<div class="error">', '</div>'); ?></span>
                                            
                                        </div>
                                    </div>
                                </div>
                               
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="address">Upload Notice</label>
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
                                        <label for="address">Comments</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea class="form-control" name = "comments" value = "<?php echo set_value('comments');?>"></textarea>
                                            </div>
                                            <span style="color:red;"><?php echo form_error('comments', '<div class="error">', '</div>'); ?></span>
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
