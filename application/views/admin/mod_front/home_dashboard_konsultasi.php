<br><br><br><br><br><br>
<center><h3>Form Konsultasi</h3></center>
<form action="<?php echo base_url();?>Konsultasi/pertanyaan" method="post" id="myform">
	<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
	<h3>Pilih Jenis Ikan:</h3>
	<table  border="0" cellpadding="5" cellspacing="0">
		<tr>
			<td>
				<div class="form-group">
				    <label for="nama" class="col-sm-2 control-label">Jenis Ikan</label>
				    <div class="col-sm-5">
				        <select class="form-control select2" style="width: 100%;" name="id_ikan" id="id_ikan" required="required">
				            <option value="%">--pilih jenis ikan--</option>
				            <?php foreach($ikans->result_array() as $i){ ?>
				                <option value="<?php echo $i['id'];?>"><?php echo $i['nama_ikan'];?></option>
				            <?php } ?>
				        </select>
				    </div>
				</div>
			</td>
		</tr>

	</table>
	<hr>
	<br>

  	<div id="SuccessDiv"></div>

</form><br><br><br>

<script src="<?php echo base_url();?>assets/template/front/jquery-1.7.2.min.js"></script>
<script type="text/javascript">

	$(document).ready(function () {

		$("#id_ikan").change(function(){

			var ikan = $("#id_ikan").val(); 
			// alert(ikan);
		    $.ajax({
		        url: '<?php echo base_url();?>Konsultasi/gejalaPenyakit',
		        method:"GET",  
	            data:{ikan:ikan}, 
		        cache: false,
		        success: function (data) { 
		            $('#SuccessDiv').html(data);
		        }
		    });

	    });

	});

</script>