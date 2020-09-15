
        </div>
    </section>

    
    

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url("resources/plugins/bootstrap/js/bootstrap.js");?>"></script>

    <!-- Select Plugin Js -->
   

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url("resources/plugins/jquery-slimscroll/jquery.slimscroll.js");?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url("resources/plugins/node-waves/waves.js");?>"></script>

      <script src="<?=base_url('resources/plugins/momentjs/moment.js');?>"></script>

            <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?= base_url('resources/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js');?>"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="<?= base_url('resources/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>

    <script src="<?php echo base_url("resources/plugins/jquery-datatable/jquery.dataTables.js");?>"></script>
    <script src="<?php echo base_url("resources/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js");?>"></script>
    <script src="<?php echo base_url("resources/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js");?>"></script>
    <script src="<?php echo base_url("resources/plugins/jquery-datatable/extensions/export/buttons.flash.min.js");?>"></script>
    <script src="<?php echo base_url("resources/plugins/jquery-datatable/extensions/export/jszip.min.js");?>"></script>
    <script src="<?php echo base_url("resources/plugins/jquery-datatable/extensions/export/pdfmake.min.js");?>"></script>
    <script src="<?php echo base_url("resources/plugins/jquery-datatable/extensions/export/vfs_fonts.js");?>"></script>
    <script src="<?php echo base_url("resources/plugins/jquery-datatable/extensions/export/buttons.html5.min.js");?>"></script>
    <script src="<?php echo base_url("resources/plugins/jquery-datatable/extensions/export/buttons.print.min.js");?>"></script>
   
    <!-- Custom Js -->
    <script src="<?php echo base_url("resources/js/admin.js");?>"></script>
     <!-- Moment Plugin Js -->
  
    <script src="<?php echo base_url("resources/js/pages/tables/jquery-datatable.js");?>"></script>
    <!-- Sweet alert js -->
    <script src="<?php echo base_url("resources/js/sweetalert/sweetalert.js");?>"></script>
    <!-- Demo Js -->
    <script src="<?php echo base_url("resources/js/demo.js");?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <script type="text/javascript">


        <?php if($this->session->flashdata('success')){ ?>

            toastr.success("<?php echo $this->session->flashdata('success'); ?>");

        <?php }else if(isset($error)){  ?>

            toastr.error("<?php echo $error; ?>");

        <?php }else if(isset($warning)){  ?>

            toastr.warning("<?php echo $warning;?>");

        <?php }else if(isset($info)){  ?>

            toastr.info("<?php echo $info;?>");

        <?php } ?>



        

        </script>
</body>

</html>
