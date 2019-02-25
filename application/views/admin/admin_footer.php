<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/template/backend/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/template/backend/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/template/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/template/backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/template/backend/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/template/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/template/backend/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- tinyMce -->
<script src="<?php echo base_url();?>assets/template/backend/plugins/tinymce/jscripts/tinymce.min.js"></script>
<script src="<?php echo base_url();?>assets/template/backend/plugins/tinymce/jscripts/tiny_function.js"></script>
<script src="<?php echo base_url();?>assets/template/backend/plugins/tinymce/jscripts/tiny_aset.js"></script>
<script src="<?php echo base_url();?>assets/template/backend/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url();?>assets/template/backend/dist/js/demo.js"></script>
<script>
  $(function () {
    $('.asset').select2();
    $('.select2').select2();
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false
    });


});
</script>
<script type="text/javascript">
 $(document).ready(function(){  

      $('.data_detail').click(function(){  
           var idpenyakit = $(this).attr("id"); 
           $.ajax({  
                url:"<?php echo base_url() ?>informasipenyakit/get_detail_penyakit",  
                method:"post",  
                data:{idpenyakit:idpenyakit},  
                success:function(data){  
                     $('#penyakitdetail').html(data);  
                     $('#modal-default').modal("show");  
                }  
           });  
      });


      $('.konsultasi_detail').click(function(){  
           var idkonsultasi = $(this).attr("id"); 
           $.ajax({  
                url:"<?php echo base_url() ?>laporan/detail",  
                method:"post",  
                data:{idkonsultasi:idkonsultasi},  
                success:function(data){  
                     $('#konsultasidetail').html(data);  
                     $('#modal-default').modal("show");  
                }  
           });  
      });

      $('.solusi_detail').click(function(){  
           var idsolusi = $(this).attr("id"); 
           $.ajax({  
                url:"<?php echo base_url() ?>solusipenyakit/get_detail_solusi",  
                method:"post",  
                data:{idsolusi:idsolusi},  
                success:function(data){  
                     $('#solusidetail').html(data);  
                     $('#modal-default').modal("show");  
                }  
           });  
      });

 });
</script>