<?php 
$title = '';$hints = '';$category = '';$date = '';$comments = '';$image = '';
if($notice){
    $category = $notice[0]['noticeCategoryTitle'];
    $title = $notice[0]['title'];
    $hints = $notice[0]['hints'];
    $noticeDate = $notice[0]['notice_date'];
    $comments = $notice[0]['comments'];
    $image = $notice[0]['image'];
}
?>
<div class="row clearfix">
	<div class="col-md-12">
		<a href="<?= base_url();?>NoticeController/index" class = "btn btn-info"><i class="material-icons">view_agenda</i>ALL NOTICES</a>
	</div>
</div>
<div class="clear"></div><br>



<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    NOTICE DETAILS
                </h2>
           
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-striped table-hover">
                            <tr>
                                <td>Notice Type :</td>
                                <td><?= $category;?></td>
                            </tr>
                            <tr>
                                <td>Title :</td>
                                <td><?= $title;?></td>
                            </tr>
                            <tr>
                                <td>Date :</td>
                                <td><?= $noticeDate;?></td>
                            </tr>
                            <tr>
                                <td>Hints :</td>
                                <td><?= $hints;?></td>
                            </tr>
                            <tr>
                                <td>Comments :</td>
                                <td><?= $comments;?></td>
                            </tr>
                           
                        </table>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                                <div class="col-md-12">
                                    <img src="<?= base_url().'resources/images/notices/'.$image;?>" height = "400px" width = "460px">
                                </div>
                            </div>
                        <a href="<?= base_url()."NoticeController/download/".$image;?>" class="btn btn-primary pull-right">Download</a>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>