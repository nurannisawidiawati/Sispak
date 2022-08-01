<center>
<?php include "koneksi.php"; 

error_reporting(0);
  $a = $_POST['cek'];
  $aa = implode(',',$a);
  //echo $aa;
  $sql = mysqli_query($koneksi, "SELECT penyakit.*, rule.* 
                                FROM penyakit, rule  
                                WHERE rule.maka=penyakit.kd_penyakit AND
                                rule.jika='$aa'");
if(mysqli_num_rows($sql) == 0){
		     header("Location: cetak-hasil.php");
				$row = mysqli_fetch_array($sql);
			} 
?>
<html>
  <head>
	<title>Hasil Konsultasi</title>
	<link href="admin.css">
	<script>
      window.print();
    </script>
  </head>
  <body>
  
  <h2>Hasil Konsultasi</h2>
     <table border=1 width=80% class="konsultasi">
         <tr>
            <td>Gejala</td>
            <td>:</td>
            <td>
              <?php
             //Nama Gejala 
            if(isset($a[0])){
            $sql1 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[0]'");
				$row1 = mysqli_fetch_array($sql1);
                echo "<ul><li>$row1[nm_gejala]</li>";
                } else {echo "";}
                 ?>
                 <?php
                 if(isset($a[1])){
            $sql2 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[1]'");
				$row2 = mysqli_fetch_array($sql2);
                echo "<li>$row2[nm_gejala]</li>";
                } else {echo "";}
                 ?>
                  <?php
                 if(isset($a[2])){
            $sql3 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[2]'");
				$row3 = mysqli_fetch_array($sql3);
                echo "<li>$row3[nm_gejala]</li>";
                } else {echo "";}
                 ?>
                  <?php
                 if(isset($a[3])){
            $sql4 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[3]'");
				$row4 = mysqli_fetch_array($sql4);
                echo "<li>$row4[nm_gejala]</li>";
                } else {echo "";}
                 ?>
                 <?php
                 if(isset($a[4])){
            $sql4 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[4]'");
				$row4 = mysqli_fetch_array($sql4);
                echo "<li>$row4[nm_gejala]</li>";
                } else {echo "";}
                 ?>
                 <?php
                 if(isset($a[5])){
            $sql4 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[5]'");
				$row4 = mysqli_fetch_array($sql4);
                echo "<li>$row4[nm_gejala]</li></ul>";
                } else {echo "";}
                 ?>
                 
	</tr>
	 <tr>
            <td>Penyakit</td>
            <td>:</td>
            <td><?php echo $row['nm_penyakit'];?></td>
            <td>
		<b>Persentase</b> 
		<br>
		<?php 
        //Bobot Gejala
            if(isset($a[0])){
            $sql1 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[0]'");
				$row1 = mysqli_fetch_array($sql1);
                } else {echo "";}
                 ?>
                 <?php
                 if(isset($a[1])){
            $sql2 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[1]'");
				$row2 = mysqli_fetch_array($sql2);
                } else {echo "";}
                 ?>
                  <?php
                 if(isset($a[2])){
            $sql3 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[2]'");
				$row3 = mysqli_fetch_array($sql3);
                } else {echo "";}
                 ?>
                  <?php
                 if(isset($a[3])){
            $sql4 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[3]'");
				$row4 = mysqli_fetch_array($sql4);
                } else {echo "";}
                 ?>
                 <?php
                 if(isset($a[4])){
            $sql5 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[4]'");
				$row5 = mysqli_fetch_array($sql5);
                } else {echo "";}
                 ?>
                 <?php
                 if(isset($a[5])){
            $sql6 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[5]'");
				$row6 = mysqli_fetch_array($sql6);
                } else {echo "";}
                 ?>
                 <?php
                 if(isset($a[6])){
            $sql7 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[6]'");
				$row7 = mysqli_fetch_array($sql7);
                } else {echo "";}
                 ?>
                 <?php
                 if(isset($a[7])){
            $sql8 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[7]'");
				$row8 = mysqli_fetch_array($sql8);
                } else {echo "";}
                 ?>
				
				
				<?php 
				//Bobot Kerusakan
            if(isset($a[0])){
            $sql9 = mysqli_query($koneksi, "SELECT * FROM  kerusakan WHERE kd_gejala='$a[0]'");
				$row9 = mysqli_fetch_array($sql9);
                } else {echo "";}
                 ?>
                 <?php
                 if(isset($a[1])){
            $sql10 = mysqli_query($koneksi, "SELECT * FROM  kerusakan WHERE kd_gejala='$a[1]'");
				$row10 = mysqli_fetch_array($sql10);
                } else {echo "";}
                 ?>
                  <?php
                 if(isset($a[2])){
            $sql11 = mysqli_query($koneksi, "SELECT * FROM  kerusakan WHERE kd_gejala='$a[2]'");
				$row11 = mysqli_fetch_array($sql11);
                } else {echo "";}
                 ?>
                  <?php
                 if(isset($a[3])){
            $sql12 = mysqli_query($koneksi, "SELECT * FROM  kerusakan WHERE kd_gejala='$a[3]'");
				$row12 = mysqli_fetch_array($sql12);;
                } else {echo "";}
                 ?>
                 <?php
                 if(isset($a[4])){
            $sql13 = mysqli_query($koneksi, "SELECT * FROM  kerusakan WHERE kd_gejala='$a[4]'");
				$row13 = mysqli_fetch_array($sql13);
                } else {echo "";}
                 ?>
                 <?php
                 if(isset($a[5])){
            $sql14 = mysqli_query($koneksi, "SELECT * FROM  kerusakan WHERE kd_gejala='$a[5]'");
				$row14 = mysqli_fetch_array($sql14);
				}else {echo "";}
                 ?>
                 <?php
                 if(isset($a[6])){
            $sql15 = mysqli_query($koneksi, "SELECT * FROM  kerusakan WHERE kd_gejala='$a[6]'");
				$row15 = mysqli_fetch_array($sql15);
                } else {echo "";}
                 ?>
                 <?php
                 if(isset($a[7])){
            $sql16 = mysqli_query($koneksi, "SELECT * FROM  kerusakan WHERE kd_gejala='$a[7]'");
				$row16 = mysqli_fetch_array($sql16);
                } else {echo "";}
                 ?>
		
		<?php
		//jumlah bobot gejala
		$x = $row1[bobot]+$row2[bobot]+ $row3[bobot]+$row4[bobot]+$row5[bobot]+$row6[bobot]
			+$row7[bobot]+$row8[bobot];
		//jumlah bobot kerusakan
		$y = $row9[bobot]+$row10[bobot]+ $row11[bobot]+$row12[bobot]+$row13[bobot]+$row14[bobot]
			+$row15[bobot]+$row16[bobot];
				
		//Bobot Gejala
		$a=10;
		$b=30;
		$c=40;
		$d=80;
		
		//kriteria gejala rendah 
		if($a<=$x and $x<=$c){
			$g_rendah=($c-$x)/($c-$a);
		}
		else{ 
			$g_rendah=0; 
		}
		
		//kriteria gejala tinggi
		if($b<=$x and $x<=$d){
			$g_tinggi=($x-$b)/($d-$b);
		}
		else{ 
			$g_tinggi=0;
		}
	
	//bobot Kerusakan
		$e=20;
		$f=40;
		$g=50;
		$h=100;
		
		//kriteria kerusakan rendah 
		if($e<=$y and $y<=$g){
			$k_rendah=($g-$y)/($g-$e);
		}
		else{ 
			$k_rendah=0;
		}
		//kriteria kerusakan tinggi
		if($f<=$y and $y<=$h){
			$k_tinggi=($y-$f)/($h-$f);
		}
		else{ 
			$k_tinggi=0;
		}
		 
		//RULE
		$rule1=min($g_rendah,$k_rendah);
		$rule2=min($g_rendah,$k_rendah);
		$rule3=min($g_tinggi,$k_tinggi);
		$rule4=min($g_rendah,$k_tinggi);
		$rule5=min($g_tinggi,$k_rendah);
		$rule6=min($g_tinggi,$k_rendah);
		$rule7=min($g_tinggi,$k_tinggi);
		$rule8=min($g_tinggi,$k_tinggi);
		
		$min=min($rule1,$rule2,$rule3,$rule4,$rule5,$rule6,$rule7,$rule8);
		$max=max($rule1,$rule2,$rule3,$rule4,$rule5,$rule6,$rule7,$rule8);
		
		//bobot penyakit
		$i=10;
		$j=40;
		$k=60;
		$l=100;
		
		//KOMPOSISI ATURAN 
		$a1 = ($min*($l-$j))+$j;
		$a2 = ($max*($l-$j))+$j;
		
		//DEFUZZY
		$M1 = abs($min/2*($a1*$a1)) ; 
		
		 $Ma=($a1*$a1*$a1);
		 $Mb=((($j/2)*$a1*$a1)*3);
		 $Mc=($Ma-$Mb);
		 
		 $Md=($a2*$a2*$a2);
		 $Me=((($j/2)*$a2*$a2)*3);
		 $Mf=($Md-$Me);
		 $Mg=(3*($l-$j));
		 
		$M2= abs($Mc-$Mf)/$Mg;
		$M3 = abs(($max/2*($l*$l)) - ($max/2*($a2*$a2)));
		
		//HITUNG LUAS DAERAH
		$A1 = abs($a1 * $min);
		$A2 = abs(($min+$max)*($a2-$a1)/2);
		$A3 = abs(($l-$a2)*$max);
		
		$z = abs(($M1+$M2+$M3)/($A1+$A2+$A3));
		echo "$z%";
		?>
		</td> 
     </tr>
     <tr>
		<td>Penyebab</td>
		<td>:</td>
		<td colspan=2><?php echo $row['penyebab'];?></td>
     </tr>
     
     <tr>
		<td>Solusi</td>
		<td>:</td>
		<td colspan=2><?php echo $row['solusi'];?></td>
     </tr>
  </table> 
</center>
</body>
</html> 


