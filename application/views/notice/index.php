
<div class="row clearfix">
	<div class="col-md-12">
		<a href="<?= base_url();?>add_notice" class = "btn btn-info"><i class="material-icons">add</i>Add New Notice</a>
	</div>
</div>
<div class="clear"></div><br>

<input type="hidden" name="" id = "baseUrl" value="<?= base_url();?>">


<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                NOTICE LIST
                            </h2>
                       
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Notice Category</th>
                                            <th>Title</th>
                                            <th>Hints</th>
                                            <th>Notice Date</th>
                                            <th>Action</th>

                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Notice Category</th>
                                            <th>Title</th>
                                            <th>Hints</th>
                                            <th>Notice Date</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 0;foreach($allNotices as $val){ $i++;?>
                                        <tr>
                                            <td><?= $i;?></td>
                                            <td><?= $val['noticeCategoryTitle'];?></td>
                                            <td><?= $val['title'];?></td>
                                            <td><?= $val['hints'];?></td>
                                            <td><?= $val['notice_date'];?></td>
                                            <td>
                                                <span><a href="<?= base_url()."NoticeController/edit/".$val['id'];?>" class="btn btn-primary btn-xs" title = "Edit"><i class="material-icons">create</i></a></span>
                                                <span><a href="<?= base_url()."NoticeController/view/".$val['id'];?>" class="btn btn-success btn-xs" title = 
                                                    "Details View"><i class="material-icons">view_agenda</i></a></span>
                                                <span>
                                                    <button type="button" name="" id = "<?= $val['id'];?>" class = "btn btn-danger btn-xs remove"><i class="material-icons">delete</i>
                                                   </button>
                                            </td>
                                        </tr>
                                    <?php }?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





<script>
    $(document).ready(function(){
        $(".remove").click(function(){
            var base_url = $('#baseUrl').val();
            var id = $(this).attr("id");
    

       swal({

        title: "Are you sure?",

        text: "You will not be able to recover this imaginary file!",

        type: "warning",

        showCancelButton: true,

        confirmButtonClass: "btn-danger",

        confirmButtonText: "Yes, delete it!",

        cancelButtonText: "No, cancel plx!",

        closeOnConfirm: false,

        closeOnCancel: false

      },

      function(isConfirm) {

        if (isConfirm) {

          $.ajax({

             url: base_url+'NoticeController/delete/'+id,

             type: 'DELETE',

             error: function() {

                alert('Something is wrong');

             },

             success: function(data) {

                 // $("#"+id).remove();

                  swal("Deleted!", "Your imaginary file has been deleted.", "success");
                  location.reload();

             }

          });

        } else {

          swal("Cancelled", "Your imaginary file is safe :)", "error");

        }

      });

     

    });

    

    });
</script>