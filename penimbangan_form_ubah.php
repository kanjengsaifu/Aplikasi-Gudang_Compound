<?php include "menubar.php" ;?>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<table width="1394" border="0" align="left">
  <tr>
    <td rowspan="2" valign="top" width="192"><ul id="MenuBar1" class="MenuBarVertical">
     
      <li><font color="#0000FF"><a href="" class="btn btn-info">
                                           </i> Barang</a></font></li> 
     
	<li><a href="home.php?go=Barang"><i class='glyphicon glyphicon-file'></i> Data Barang</a></li>
    <li><a href="home.php?go=Pemasok"><i class='glyphicon glyphicon-file'></i> Data Supplier</a></li>
    <li><a href="home.php?go=Pelanggan"><i class='glyphicon glyphicon-file'></i> Data Costumer</a></li>
    <li><a href="home.php?go=Kelompok"><i class='glyphicon glyphicon-file'></i> Data Kelompok</a></li>
    <li><a href="home.php?go=Pembelian"><i class='glyphicon glyphicon-registration-mark'></i> Pembelian Barang</a></li>
    <li><a href="home.php?go=po_data"><i class='glyphicon glyphicon-paperclip'></i> Buat PO</a></li> 
    <li><a href="" class="btn btn-info">
                                           </i> Produksi</a></li>     
       <li><a href="home.php?go=order"><i class='glyphicon glyphicon-sort-by-order-alt'></i> Order Formula</a></li>
        <li><a href="home.php?go=formula"><i class='glyphicon glyphicon-list-alt'></i> Data Formula</a></li>
         <li><a href="home.php?go=laporan_produksi"><i class='glyphicon glyphicon-book'></i> Laporan Kerja</a></li>
          <li><a href="home.php?go=laporan_hasil_produksi"><i class='glyphicon glyphicon-book'></i> Laporan Produksi</a></li>
           <li><a href="home.php?go=penjualan_barang"><i class='glyphicon glyphicon-road'></i> Pengiriman Barang</a></li>
            <li><a href="home.php?go=barang_produksi"><i class='glyphicon glyphicon-file'></i> Data Barang Produksi</a></li>
             <li><a href="" class="btn btn-info">
                                           </i> Penimbangan</a></li>
              <li><a href="home.php?go=penimbangan"><i class='glyphicon glyphicon-record'></i> Hasil Penimbangan</a></li>
               <li><a href="home.php?go=Penjualan"><i class='glyphicon glyphicon-import'></i> Pengambilan Barang</a></li>
                <li><a href="" class="btn btn-info">
                                           </i> Gudang</a></li>
                 <li><a href="home.php?go=pengisian"> <i class='glyphicon glyphicon-registration-mark'></i> Pengisian Tangker</a></li>
                  <li><a href="home.php?go=pemakaian"><i class='glyphicon glyphicon-stats'></i> Pemakaian Barang</a></li>
                   <li><a href="" class="btn btn-info">
                                           </i> Laporan</a></li>
                    <li><a href="home.php?go=laporan_pemakaian_form"><i class='glyphicon glyphicon-info-sign'></i> Laopran Pemakaian</a></li>
                    <li><a href="home.php?go=Laporan_Penjualan_Form"><i class='glyphicon glyphicon-info-sign'></i> Laopran Penjualan</a></li>
                    <li><a href="home.php?go=Laporan_Pembelian_Form"><i class='glyphicon glyphicon-info-sign'></i> Laopran Pembelian</a></li>
    </ul></td>
    <td width=1000 height="40"><h3 valign="top" align="center">Tambah Hasil Penimbangan</h3>
<div class='col-md-8 col-md-offset-2'>
    <td width=80 align="right">Brian  
    <td width=200 align="left"> <ul id="MenuBar2" class="MenuBarHorizontal">
      <li><a class="MenuBarItemSubmenu" href="#"> <img src="Gambar/10509505_876698219025252_7956996687464690214_n.jpg" height="40" width="40" /> </a>
        <ul>
		<li><a href="home.php?go=Pengguna"><i class='glyphicon glyphicon-user'></i> Pengguna</a></li>
          <li><a href="#"><i class='glyphicon glyphicon-log-out'></i> Log out</a></li>
          
          
    </ul></td>



  </tr>
  <tr>
    <td colspan="3" align="left" valign="top">     
<a href="home.php?go=penimbangan" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a>
<style type="text/css">
div.ui-datepicker{
 font-size:12px;
}
</style> 

<link href="JQuery/smoothness/jquery-ui-1.10.3.custom.css" rel="stylesheet">

<SCRIPT language=Javascript>

function isNumberKey(evt)
//Membuat validasi hanya untuk input angka menggunakan kode javascript
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}



</script>

<script src="JQuery/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
	$("#tgl").datepicker({
      showOn: "both", buttonImage: "gambar/calendar.png", buttonImageOnly: true, changeMonth: true, changeYear: true, dateFormat: "dd-mm-yy"});		
	
	function cari_barang_penimbangan(){
			
		var kode1=$("#nopotxt").val();
			if(kode1!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_penimbangan.php",
					data:"kode1="+kode1,
					success:function(data){
					$("#itemtxt").val(data)
					}
				});
			} 
		var kode2=$("#nopotxt").val();
			if(kode2!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_penimbangan.php",
					data:"kode2="+kode2,
					success:function(data){
					$("#colortxt").val(data)
					}
				});
			} 
		var kode3=$("#nopotxt").val();
			if(kode3!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_penimbangan.php",
					data:"kode3="+kode3,
					success:function(data){
					$("#modeltxt").val(data)
					}
				});
			} 
							      				                               
	} 
	
	$('#nopotxt').change(function() {
		cari_barang_penimbangan();
		$("#ltxt").focus()	
    });		
		
})		
</script>

<?php
$sql = "select * from tblpenimbangan where id_penimbangan ='$_GET[id]'";
$proses = mysql_query($sql);
$record = mysql_fetch_array($proses);
?>


<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="home.php?go=penimbangan_simpan">
<table width="600" border="0" height="400">
   <tr>
    <td>nopo</td>
    <td><input name="nopotxt" class="form-control required" type="text" id="nopotxt" value="<?php echo $record['no_po'] ?>" size="5" maxlength="15"  /></td>
    </td>
  <tr>
    <td>Item</td>
    <td><input name="itemtxt" class="form-control required" type="text" id="itemtxt" size="5" value="<?php echo $record['item'] ?>" maxlength="15" readonly="readonly" /></td>
    </td>
  </tr>
  <tr>
    <td>Color</td>
    <td><input name="colortxt" class="form-control required" type="text" id="colortxt" size="5" value="<?php echo $record['color'] ?>" maxlength="15" readonly="readonly" /></td>
    </td>
  </tr>
  <tr>
    <td>Model</td>
    <td><input name="modeltxt" class="form-control required" type="text" id="modeltxt" size="5" value="<?php echo $record['model'] ?>" maxlength="15" readonly="readonly" /></td>
    </td>
  </tr>
  <tr>
  <tr>
    <td>Size L</td>
    <td><input name="ltxt" class="form-control required" type="text" id="ltxt" value="<?php echo $record['size_l'] ?>" size="5" maxlength="15" /></td>
    </td>
  </tr>
  <tr><tr>
    <td>Size S</td>
    <td><input name="stxt" class="form-control required" type="text" id="stxt" value="<?php echo $record['size_s'] ?>" size="5" maxlength="15"  /></td>
    </td>
  </tr>
  <tr>
  <tr>
    <td>Keterangan</td>
    <td><input name="kettxt" class="form-control required" type="text" value="<?php echo $record['keterangan'] ?>" id="kettxt" size="5" maxlength="25"  /></td>
    </td>
  </tr>
  <tr>
<tr>
    <td>SHIFT</td>
    <td>&nbsp;<select name="shift" value="<?php echo $record['shift'] ?>" id="shift">
    <option>SHIFT1</option>
    <option>SHIFT2</option>
    <option>SHIFT3</option></select>
    </td>
  </tr>
  <tr>
    <td></td>
    <td><input name="SIMPAN" class="btn btn-primary" type="submit" value="SIMPAN" /></td>
  </tr>
</table>
</form>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

<script type="text/javascript">
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>



