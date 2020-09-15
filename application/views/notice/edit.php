
<?php 
$categoryId = '';$title = '';$date = '';$hints = '';$image = '';$comments = '';
if($notice){
        $noticeId = $notice[0]['id'];
        $categoryId = $notice[0]['notice_category_id'];
        $title = $notice[0]['title'];
        $date = $notice[0]['notice_date'];
        $hints = $notice[0]['hints'];
        $image = $notice[0]['image'];
        $comments = $notice[0]['comments'];
}
?>


<div class="row clearfix">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT NEW NOTICE
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form class="form-horizontal" action = "<?= base_url();?>NoticeController/update" method = "POST" enctype = "multipart/form-data">
                                <input type="hidden" name="id" value="<?= $noticeId;?>">
                                <div class="row clearfix">
                                     <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Notice Type</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" name="notice_category">
                                                    <option value="">--Select Type--</option>
                                                    <?php 
                                                    
                                                    foreach($noticeCategories as $val){
                                                        
                                                      

                                                        ?>
                                                        <option value="<?= $val['id'];?>" <?php if($val['id']==$categoryId){echo "selected";}?>><?=$val['title'];?></option>
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
                                                <input type="text" id="title" name = "title" class="form-control" placeholder="Enter notice title" value = "<?php echo $title;?>">
                                                
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
                                                <input type="text" name = "notice_date" class="form-control date" data-provide="datepicker" value="<?= $date;?>">
                                                
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
                                                <input type="text" id="hints" name = "hints" class="form-control" placeholder="Enter hints" value = "<?php echo $hints;?>">
                                                
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
                                                <input type="hidden" name="hidden_image_name" value="<?= $image;?>">
                                               
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
                                                <textarea class="form-control" name = "comments" value = "<?php echo $comments;?>"><?= $comments;?></textarea>
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
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h2>File</h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="<?= base_url().'resources/images/notices/'.$image;?>" height = "200px" width = "260px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
