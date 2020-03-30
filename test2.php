<?php
//require('functions/sms.php');
// error_reporting(0);
// $id=$_SESSION['MaNV'];
// $ten=$_SESSION['TenNV'];
// var_dump ($matrungtam=$_SESSION['MaTrungTam']);
// $trungtam=$_SESSION['TenTrungTam'];
// $smsbrandname = $_SESSION['SMSBrandName'];
// //
// //	lấy thông số get -> xác định form parent
// //
// $booking_stt = "";
// $booking_stt = @$_GET['stt']; // giá trị truyền từ form danh sách lịch hẹn
// $booking_ngayhentemp = "";
// $booking_ngayhen1 = date('d-m-Y');
// $booking_giohen1 = "09:00";
// $booking_tinhtrang1 = "";
// $booking_matrungtam1 = "";
// $booking_makhachhang1 = "";
// $booking_tenkhachhang1 = "";
// $booking_manguonkhach1 = "";
// $booking_dienthoai1 = "";
// $booking_email1 = "";
// $booking_facebook1 = "";
// $booking_zalo1 = "";
// $booking_diachi1 = "";
// $booking_dichvu1 = "";
// $booking_thoigianlam1 = 0;
// $booking_ghichu1 = "";
// $booking_manhanvien1 = $id;
// $booking_tennhanvien1 = "";
// $booking_tennvbooking1 = "";
// $booking_id1="";
// //
// //
// $parentpage = "";
// $cardid = "";
// $columnid = "0";

// $booking_id=""; $booking_id=$_POST['update']; echo $booking_id."booking_id-test2";

// //
// //	lấy dữ liệu booking cũ
// //
// if($booking_id != "" && $booking_id != null)
// {
	// $l_sql = "Select * from tblKhachHangBooking where MaBooking = '".$booking_id."'";
    // try
    // {
	  	// $result_oldbooking = sqlsrv_query($conn,$l_sql);
		// while($r1=sqlsrv_fetch_array($result_oldbooking))
		// {
			// $booking_tinhtrang1 = $r1['TinhTrangBookingID'];
			// $booking_matrungtam1 = $r1['MaTrungTam'];
			// $booking_makhachhang1 = $r1['MaKH'];
			// $booking_tenkhachhang1 = $r1['TenKH'];
			// $booking_manguonkhach1 = $r1['MaNhomKH'];
			// $booking_dienthoai1 = $r1['DienThoai'];
			// $booking_facebook1 = $r1['Facebook'];
			// $booking_zalo1 = $r1['Zalo'];
			// $booking_email1 = $r1['Email'];
			// $booking_diachi1 = $r1['DiaChi'];
			// $booking_dichvu1 = $r1['DichVu'];
			// $booking_ghichu1 = $r1['GhiChu'];
			// $booking_ngayhentemp = $r1['GioBatDau']->format('Y-m-d H:i:s'); echo $booking_ngayhentemp."aa";
			// $booking_thoigianlam1 = $r1['ThoiGianLam'];			
			// $booking_manhanvien1 = $r1['MaNV'];
			// $booking_tennhanvien1 = $r1['TenNV'];
			// $booking_tennvbooking1 = $r1['TenNVBooking'];
			// $booking_id1=$r1['MaBooking'];
		// }

		// sqlsrv_free_stmt( $result_oldbooking);
	// }
     // catch(Exception $e) { }
	 
	 // if($booking_ngayhentemp != "" && $booking_ngayhentemp != null)
	 // {
	 	// //echo $booking_ngayhentemp; 2019-04-02 15:00:00.000
		// $booking_ngayhen1 = substr($booking_ngayhentemp,8,2) . "-" . substr($booking_ngayhentemp,5,2) . "-" . substr($booking_ngayhentemp,0,4);
		// $booking_giohen1 = substr($booking_ngayhentemp,11,5)." ".substr($booking_ngayhentemp,20,2);
	 // }
	  // var_dump ($booking_id);echo "sss";
// }

// //
// //----lay thong tin tu form khi submit
// //
// $booking_matrungtam = $matrungtam;
// $booking_tinhtrang = "1";
// $booking_tinhtrang = @$_POST['booking_tinhtrang'];
// $booking_tenkhachhang = "";
// echo $booking_tenkhachhang = @$_POST['booking_tenkhachhang'];
// $booking_manguonkhach = "";
// $booking_manguonkhach = @$_POST['booking_manguonkhach'];
// $booking_dienthoai = "";
// $booking_dienthoai = @$_POST['booking_dienthoai'];
// $booking_email = "";
// $booking_email = @$_POST['booking_email'];
// $booking_facebook = "";
// $booking_facebook = @$_POST['booking_facebook'];
// $booking_zalo = "";
// $booking_zalo = @$_POST['booking_zalo'];
// $booking_diachi = "";
// $booking_diachi = @$_POST['booking_diachi'];
// $booking_dichvu = "";
// $booking_dichvu = @$_POST['booking_dichvu'];
// $booking_thoigianlam = 0;
// $booking_thoigianlam = @$_POST['booking_thoigianlam'];
// $booking_ghichu = "";
// $booking_ghichu = @$_POST['booking_ghichu'];
// $booking_tennvbooking = "";
// $booking_tennvbooking = @$_POST['booking_tennvbooking'];
// $booking_ngayhen=@$_POST['booking_ngayhen']; echo $booking_ngayhen." -> ngay-hen| ";
// $booking_giohen=@$_POST['booking_giohen'];echo $booking_giohen." -> gio-hen |";
// var_dump ($booking_id);echo"ee";
// $ma_booking=@$_POST['ma_booking'];
// if($booking_ngayhen == "" || $booking_ngayhen == null)
// {
	// $booking_ngayhen = date('d-m-Y');
// }

// if($booking_giohen == "" || $booking_giohen == null)
// {
	// $booking_giohen = "10:00";
// }

// $booking_manhanvien = "";
// $booking_manhanvien = @$_POST['booking_manhanvien'];
// if($booking_manhanvien == "none")
	// $booking_manhanvien = "";
// $booking_tennhanvien = "";
// if($booking_manhanvien != "")
// {
	// //$booking_tennhanvien = @$_POST['booking_tennhanvien'];
	// $l_sql = "Select TenNV from tblDMNhanVien Where MaNV = '$booking_manhanvien'";
	// try
    // {
		// $result_nv = sqlsrv_query($conn,$l_sql);
		// while($rnv=sqlsrv_fetch_array($result_nv))
		// {
			// $booking_tennhanvien = $rnv['TenNV'];
		// }

		// sqlsrv_free_stmt( $result_nv);
    // }
    // catch(Exception $e) { $booking_tennhanvien = ""; }
// }

// $ketqua_xulybooking = 0;
// //
// //	kiểm tra có submit form
// //

// if(isset($_POST['booking_manhanvien']) && $booking_manhanvien != null && $booking_manhanvien != "")
// {
	// if($booking_ngayhen != "")
	// {
		// $booking_ngayhen_converted = substr($booking_ngayhen,6) . "-" . substr($booking_ngayhen,3,2) . "-" . substr($booking_ngayhen,0,2);
		// //var_dump ($booking_ngayhen_converted);	
	// }
	// if($booking_giohen != "")
	// {
		// $booking_ngayhen_converted = $booking_ngayhen_converted." ".$booking_giohen.":00";
		// var_dump  ($booking_ngayhen_converted);
	// }
	// else
	// {
		// $booking_ngayhen_converted = $booking_ngayhen_converted." 08:00:00";
	// }
	// //
	// //	xu ly noi dung gui sms nhac lich hen
	// //
	// $booking_ngayguisms_converted = $booking_ngayhen_converted;		// new DateTime('$booking_ngayhen_converted');
	// if($smsxacnhanlichhen != "")
	// {
		// $smsxacnhanlichhen = str_replace("[GioBatDau]",$booking_ngayguisms_converted,$smsxacnhanlichhen);
	// }
	// //
	// //	xu ly so dien thoai, thieu 0 va chieu dai < 10
	// //
	// if(strlen($booking_dienthoai) < 10)
	// {
		// $booking_dienthoai = substr("0000000000",0,10-strlen($booking_dienthoai)).$booking_dienthoai;
	// }
	
	// //
	// //	check đây là khách hàng cũ theo số điện thoại -> để lấy mã khách hàng
	// //
	// $makhachhang = "";
	// $l_sql = "Select MaDoiTuong from tblDMKHNCC Where (DienThoai is not null and DienThoai <> '' and DienThoai = '$booking_dienthoai') or (DienThoaiDD is not null and DienThoaiDD <> '' and DienThoaiDD = '$booking_dienthoai')";
	// try
    // {
		// $result_kh = sqlsrv_query($conn,$l_sql);
		// while($rkh=sqlsrv_fetch_array($result_kh))
		// {
			// $makhachhang = $rkh['MaDoiTuong'];
		// }

		// sqlsrv_free_stmt( $result_kh);
    // }
    // catch(Exception $e) { $makhachhang = ""; }
    // //
	// //echo "da co ma khach hang = ".$makhachhang;
	// //
	// if($makhachhang == "" )
	// {
		// //
		// //	insert khách hang mới
		// //
		// $idgannhat = 0;
		// $l_sql = "Select ISNULL(MAX(RIGHT(MaDoiTuong,7)),0) as idgannhat from tblDMKHNCC";
		// try
    	// {
			// $result_kh1 = sqlsrv_query($conn,$l_sql);
			// if($result_kh1 != null)
			// {
				// while($rkh1=sqlsrv_fetch_array($result_kh1))
				// {
					// $idgannhat = $rkh1['idgannhat']; 
				// }

				// sqlsrv_free_stmt( $result_kh1);
			// }
    	// }
    	// catch(Exception $e) { $makhachhang = $matrungtam."-0000001"; }
		// if($idgannhat > 0)
		// {
			// $idgannhat = $idgannhat + 1; echo "idgannhat: ".$idgannhat;
			// $makhachhang = $matrungtam."-".substr("000		0000",0,7-strlen($idgannhat)).$idgannhat;
		// }
		// else
		// {
			// $makhachhang = $matrungtam."-0000001";
		// }
		// //
		// //	tạo mã booking mới
		// //
		// $mabooking = "00-".date("Ymd");
		// $l_sql = "Select MAX(Right(MaBooking,4)) as iBooking from tblKhachHangBooking where Left(MaBooking,2) like '00'";
		// $l_index = 0;	
    	// try
    	// {
	  		// $result_mabooking = sqlsrv_query($conn,$l_sql);
			// while($rbk=sqlsrv_fetch_array($result_mabooking))
			// {
				// $l_index = intval($rbk['iBooking']);
			// }

			// sqlsrv_free_stmt( $result_mabooking);
     	// }
     	// catch(Exception $e) { $l_index = 0; }
     
	 	// $l_index = $l_index + 1;
	 
	 	// $sufix = substr("0000",0, 4 - strlen($l_index));
     	// $mabooking = $mabooking.$sufix.$l_index;
		
		// //INSERT New Value
		// echo $l_sql = "Insert into tblDMKHNCC(MaDoiTuong,TenDoiTuong,LaKH,LaNCC,MaNhomKH,DienThoai,DienThoaiDD,Email,Facebook,Zalo,GhiChu,MaTrungTam) values('".$makhachhang."',N'".$booking_tenkhachhang."',1,0,'".$booking_manguonkhach."','".$booking_dienthoai."','".$booking_dienthoai."','".$booking_email."',N'".$booking_facebook."',N'".$booking_zalo."',N'".$booking_dichvu."','".$booking_matrungtam."');
		// Insert into tblKhachHangBooking(MaBooking,TenKH,DichVu,GioBatDau,ThoiGianLam,GhiChu,TinhTrangBookingID,
	 	// MaNV,TenNV,ThoiGianTao,DiaChi,DienThoai,Email,MaTrungTam,IsGuiSMS,MaNhomKH,Facebook,Zalo,SoPhutGuiTruocLichHen,TenNVBooking) values('"
		// .$mabooking."',N'"
		// .$booking_tenkhachhang."',N'"
		// .$booking_dichvu."','"
		// .$booking_ngayhen_converted."','"
		// .$booking_thoigianlam."',N'"
		// .$booking_ghichu."','".$booking_tinhtrang."','" // mac dinh 1: chua den
		// .$booking_manhanvien."',N'"
		// .$booking_tennhanvien."','"
		// .date('Y-m-d H:i:s')."',N'"
		// .$booking_diachi."','" //11
		// .$booking_dienthoai."','"
		// .$booking_email."','"
		// .$booking_matrungtam."','"
		// .$isGuiSMSnhaclichhen."','"
		// .$booking_manguonkhach."','"
		// .$booking_facebook."','"
		// .$booking_zalo."','"				
		// .$sophutguitruoclichhen."',N'"
		// .$booking_tennvbooking."')
		// ";
		// try
    	// {
			// var_dump ($rs = sqlsrv_query($conn,$l_sql));
		// } 
		// catch(Exception $e){ echo $e->getMessage();}				

	 	
	// }
	
		

	
// }//end if check post mã nhan viên

// //	trường hợp cập nhật booking cũ
		// //
		// //echo "<br>trường hợp cập nhật booking cũ.<br>";
		// //var_dump ($booking_id);echo"rr ";
	// if($ma_booking != "" && $ma_booking != null)
	// { //echo "yes ";var_dump ($booking_id);echo"qq";var_dump ($booking_tenkhachhang);
		// if($booking_ngayhen != "")
			// {
				// $booking_ngayhen_converted = substr($booking_ngayhen,6) . "-" . substr($booking_ngayhen,3,2) . "-" . substr($booking_ngayhen,0,2);
				// //var_dump ($booking_ngayhen_converted);	
			// }
			// if($booking_giohen != "")
			// {
				// $booking_ngayhen_converted = $booking_ngayhen_converted." ".$booking_giohen.":00";
				// var_dump  ($booking_ngayhen_converted);
			// }
			// else
			// {
				// $booking_ngayhen_converted = $booking_ngayhen_converted." 08:00:00";
			// }
	// //
	// //	xu ly noi dung gui sms nhac lich hen
	// //
	// $booking_ngayguisms_converted = $booking_ngayhen_converted;		// new DateTime('$booking_ngayhen_converted');
		// //echo $mabooking; mac dinh tinh trang chua den
		// echo $sql_update = "Update tblKhachHangBooking set TinhTrangBookingID='".$booking_tinhtrang."',MaKH='".$makhachhang."',TenKH=N'".$booking_tenkhachhang."',DichVu=N'".$booking_dichvu."',GioBatDau='".$booking_ngayhen_converted."',ThoiGianLam='".$booking_thoigianlam."',GhiChu=N'".$booking_ghichu."',MaNV='".$booking_manhanvien."',TenNV=N'".$booking_tennhanvien."',DiaChi=N'".$booking_diachi."',DienThoai='".$booking_dienthoai."',Email=N'".$booking_email."',MaTrungTam='".$booking_matrungtam."',IsGuiSMS='".$isActiveSMS."',MaNhomKH='".$booking_manguonkhach."',Facebook=N'".$booking_facebook."',Zalo=N'".$booking_zalo."', SoPhutGuiTruocLichHen = '".$sophutguitruoclichhen."',TenNVBooking = N'$booking_tennvbooking' where MaBooking = '".$ma_booking."'";
		// //echo $sql_update;
		// try
		// {
			// $rs = sqlsrv_query($conn,$sql_update);
			// $ketqua_xulybooking = 1;		//cập nhật nếu xử lý sql ok
		// }
		// catch(Exception $e){}
	//}
	
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="css/style-popup.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.css">

	
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>








<!------ Include the above in your HEAD tag ---------->






  <svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="768" height="800" viewBox="0 0 768 800"><defs><g id="icon-close"><path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path></g></defs></svg>
  

  <!-- Modal -->
  <div class="modal test2">
    <div class="modal-overlay modal-toggle"></div>
    <div class="modal-wrapper modal-transition">
      <div class="modal-header">
        <button class="modal-close modal-toggle"><svg class="icon-close icon" viewBox="0 0 32 32"><use xlink:href="#icon-close"></use></svg></button>
        <h2 class="modal-heading text-primary">Thông Tin Book Lịch Hẹn	</h2>
      </div>
      
      <div class="modal-body">
        <div class="modal-content">
          <form action="" method="post">
					<div class="form-content">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Tên khách hàng" name="booking_tenkhachhang" value="<?php echo $booking_tenkhachhang1; ?>"/>
								</div>
								<div class="form-group">
									 <select name="booking_dichvu" class="form-control" id="exampleFormControlSelect1" placeholder="Dịch vụ">
										  <?php if($booking_dichvu1 == "BODY") { ?>
									<option value="BODY" selected="selected">BODY</option>
								<?php } else { ?>
									<option value="BODY">BODY</option>
								<?php } ?>
								<?php if($booking_dichvu1 == "FOOT") { ?>
									<option value="FOOT" selected="selected">FOOT</option>
								<?php } else { ?>
									<option value="FOOT">FOOT</option>
								<?php } ?>
								<?php if($booking_dichvu1 == "DỊCH VỤ KHÁC") { ?>
									<option value="DỊCH VỤ KHÁC" selected="selected">DỊCH VỤ KHÁC</option>
								<?php } else { ?>
									<<option value="DỊCH VỤ KHÁC">DỊCH VỤ KHÁC</option>
								<?php } ?>		
										  
									</select>
								</div>
									
							</div>
							<div class="col-md-6">
							   
								<div class="form-group">
									<input name="booking_dienthoai" value="<?php echo $booking_dienthoai1; ?>" type="text" class="form-control" placeholder="Điện thoại" />
								</div>
								<div class="form-group">
									 <select class="form-control" id="exampleFormControlSelect1" placeholder="KTV" name="booking_manhanvien">
										  <?php
	$sqlnv="SELECT * FROM tblDMNhanVien where DaNghiViec = 0 and NhomNhanVien like 'KTV'";
	try
	{
		//lay ket qua query tong gia tri the
		$result_nv = sqlsrv_query($conn,$sqlnv);
		if($result_nv != false)
		{
			//show the results
			while($rnv=sqlsrv_fetch_array($result_nv))
			{
?>
			<?php if($booking_manhanvien1 == $rnv['MaNV'])
				{
			 ?>
		 			<option value="<?php echo $rnv['MaNV'];?>" selected="selected"><?php echo $rnv['TenNV'];?></option>
			<?php
				}
				else
				{
			?>
					<option value="<?php echo $rnv['MaNV'];?>"><?php echo $rnv['TenNV'];?></option>
			<?php
				}
			?>
<?php
			}

			sqlsrv_free_stmt( $result_nv);
		} 
	}
	catch (Exception $e) {

		//loi ket noi db -> show exception
		echo $e->getMessage();
	}
?>
									</select>
								</div>
								
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
								  <input name="booking_ngayhen" id="datepicker"  value="<?php echo $booking_ngayhen1; ?>" width="276" placeholder="Ngày" class="form-control"/>
									<script>
										$('#datepicker').datepicker({ format: 'dd-mm-yyyy',
											//uiLibrary: 'bootstrap4'
										});
									</script>
								</div>
								
								<div class="form-group">
									<input  name="booking_thoigianlam" type="number" class="form-control" placeholder="Số Phút" value="<?php if(isset($booking_thoigianlam1) && $booking_thoigianlam1 > 0) echo $booking_thoigianlam1; else echo "60"; ?>"/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group" >
								   <input name="booking_giohen" id="timepicker" width="276" placeholder="Giờ" class="form-control" value="<?php echo $booking_giohen1; ?>" id="booking_giohen"/>
										
								</div>
								<div class="form-group">
									<input name="booking_tennvbooking" type="text" class="form-control" placeholder="NV nhận lịch" value="<?php echo $booking_tennvbooking1; ?>"/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group" >
									 <input name="booking_email"  type="text" class="form-control" placeholder="Email" value="<?php echo $booking_email1; ?>"/>
								</div>
								 <select  name="booking_tinhtrang" class="form-control" id="exampleFormControlSelect1" placeholder="Trạng thái">
										  <?php 
	$sql="SELECT * FROM tblDMTinhTrangBooking Order by Ma";
	try
	{
		//lay ket qua query tong gia tri the
		$result_tt = sqlsrv_query($conn,$sql);
		if($result_tt != false)
		{
			//show the results
			while($r=sqlsrv_fetch_array($result_tt))
			{
?>
			<?php if($booking_tinhtrang1 == $r['Ma'])
				{
			 ?>
		 			<option value="<?php echo $r['Ma'];?>" selected="selected"><?php echo $r['Ten'];?></option>
			<?php
				}
				else
				{
			?>
					<option value="<?php echo $r['Ma'];?>"><?php echo $r['Ten'];?></option>
			<?php
				}
			?>
<?php
			}

			sqlsrv_free_stmt( $result_tt);
		} 
	}
	catch (Exception $e) {

		//loi ket noi db -> show exception
		echo $e->getMessage();
	}
?>
									</select>
							</div>
							<div class="col-md-6">
								<div class="form-group" >
									 <input name="booking_diachi" value="<?php echo $booking_diachi1; ?>" type="text" class="form-control" placeholder="Địa chỉ" />
								</div>
								<div class="form-group" >
									 <input name="ma_booking" value="<?php echo $booking_id1; ?>" type="hidden" class="form-control" placeholder="" />
								</div>

							</div>
							
						
							<div class="col-md-12">
								
								<div class="form-group">
									<textarea name="booking_ghichu" value="<?php echo $booking_ghichu1; ?>" rows="4" cols="50" placeholder="Ghi chú" class="form-control"></textarea>
								</div>
							</div>
						</div>
						
						<button type="submit" class="btnSubmit">Submit</button>
					</div>
				</form>
        </div>
      </div>
    </div>
  </div>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script>
$('#timepicker').timepicker({
	uiLibrary: 'bootstrap4'
	
});
</script>	