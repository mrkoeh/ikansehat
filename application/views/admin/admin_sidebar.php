<aside class="main-sidebar">
  <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
      <?php $uriMethod_name=$this->router->fetch_method(); ?>
        <li <?php if($uriMethod_name == "index"){ echo "class='active'";}else{ echo "class=''" ; } ?>><a href="<?php echo base_url();?>dashboard/index"><i class="fa fa-dashboard"></i> <span>Dashboard<span></a></li>
            <li 
            	<?php if($uriMethod_name == "semua_pengguna")
            	{ 
            		echo "class='active'"; 
            	}
            	elseif($uriMethod_name =="tambah_pengguna")
            	{ 
            	 echo "class='active'" ; 
            	} 
            	elseif($uriMethod_name =="edit_pengguna")
            	{
            		echo "class='active'" ; 
            	}
            	else{

            		echo "class=''";
            	}
            	?>>
            	<a href="<?php echo base_url();?>User/semua_pengguna"><i class="fa fa-user"></i> <span>Pengguna<span></a>
            </li>
            <li <?php if($uriMethod_name == "semua_gejala")
                  { 
                        echo "class='active'"; 
                  }
                  elseif($uriMethod_name =="tambah_gejala")
                  { 
                   echo "class='active'" ; 
                  } 
                  elseif($uriMethod_name =="edit_gejala")
                  {
                        echo "class='active'" ; 
                  }
                  else{

                        echo "class=''";
                  }
                  ?>>
            	<a href="<?php echo base_url();?>Gejala/semua_gejala"><i class="fa fa-database"></i> <span>Gejala Penyakit<span></a>
            <li <?php if($uriMethod_name == "semua_jenis")
                  { 
                        echo "class='active'"; 
                  }
                  elseif($uriMethod_name =="tambah_jenis")
                  { 
                   echo "class='active'" ; 
                  } 
                  elseif($uriMethod_name =="edit_jenis")
                  {
                        echo "class='active'" ; 
                  }
                  else{

                        echo "class=''";
                  }
                  ?>>
              <a href="<?php echo base_url();?>Penyakit/semua_penyakit"><i class="fa fa-database"></i> <span>Jenis Penyakit<span></a>
            </li>
            <li <?php if($uriMethod_name == "semua_solusi")
                  { 
                        echo "class='active'"; 
                  }
                  elseif($uriMethod_name =="tambah_solusi")
                  { 
                   echo "class='active'" ; 
                  } 
                  elseif($uriMethod_name =="edit_solusi")
                  {
                        echo "class='active'" ; 
                  }
                  else{

                        echo "class=''";
                  }
                  ?>>
              <a href="<?php echo base_url();?>Solusi/semua_solusi"><i class="fa fa-database"></i> <span> Solusi Penyakit<span></a>
            </li>

            <li <?php if($uriMethod_name == "semua_ikan")
                  { 
                        echo "class='active'"; 
                  }
                  elseif($uriMethod_name =="tambah_ikan")
                  { 
                   echo "class='active'" ; 
                  } 
                  elseif($uriMethod_name =="edit_ikan")
                  {
                        echo "class='active'" ; 
                  }
                  else{

                        echo "class=''";
                  }
                  ?>>
              <a href="<?php echo base_url();?>Ikan/semua_ikan"><i class="fa fa-database"></i> <span> Jenis Ikan<span></a>
            </li>
            <li>
              <a href="<?php echo base_url();?>Laporan/index"><i class="fa fa-database"></i> <span> Laporan<span></a>
            </li>
        </ul>
  </section>
</aside>