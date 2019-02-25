<?php
      $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
      $pdf->SetTitle('Hasil Pemeriksaan');
      $pdf->SetHeaderMargin(30);
      $pdf->SetTopMargin(20);
      $pdf->setFooterMargin(20);
      $pdf->SetAutoPageBreak(true);
      $pdf->SetAuthor('Author');
      $pdf->SetDisplayMode('real', 'default');
      $pdf->SetFont('times', '', 10, '', 'false');
      $pdf->AddPage();
      $i=0;
      $html='<h1>Sistem Pakar Untuk Diagnosa Penyakit Ikan Air Tawar</h1><br>
          <h3>Hasil Pemeriksaan Penyakit</h3>
          <table cellspacing="1" cellpadding="2" width="650" border="0">
            <tr align="left">
              <th width="100px" align="left">Tanggal</th>
              <th width="10px" align="left">:</th>
              <th width="400px" align="left">'.$tgl_konsul.'</th>
            </tr>
            <tr align="left">
              <th width="100px" align="left">Nama</th>
              <th align="left">:</th>
              <th width="400px" align="left">'.$nama_user.'</th>
            </tr>
            <tr align="left">
              <th width="100px" align="left">Alamat</th>
              <th align="left">:</th>
              <th width="400px" align="left">'.$alamat_user.'</th>
            </tr>
            <tr align="left">
              <th width="100px" align="left">Penyakit</th>
              <th align="left">:</th>
              <th width="400px" align="left"><strong>'.$nama_penyakit.'</strong></th>
            </tr></table>';
      $html .='<h3>Gejala Penyakit:</h3>';
      foreach ($gejalas as $r) 
        {
          $i++;            

          $html .='<strong>'.$i.'.&nbsp;&nbsp;</strong>&nbsp;&nbsp;'.$r['nama_gejala'].'<br>';
        }
        $html .= '<h3>Solusi Penyakit:</h3>';
                
                
      foreach($solusi_penyakit as $s){

         $html .= ''.$s['jenis_solusi'].'';
      }

      $pdf->writeHTML($html, true, false, true, false, '');
      $pdf->Output('Hasil-konsultasi.pdf', 'I');
?>

