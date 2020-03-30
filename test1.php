<?php

require('functions/sms.php');

@session_start();


$smsbrandname = $_SESSION['SMSBrandName'];

//	lấy thông số get -> xác định form parent
//
$booking_stt = "";
$booking_stt = @$_GET['bookingid']; // giá trị truyền từ form danh sách lịch hẹn
$booking_id=""; echo $booking_id=$_GET['booking_id'];
$booking_ngayhentemp = "";
$booking_ngayhen1 = date('d-m-Y');
$booking_giohen1 = "09:00";
$booking_tinhtrang1 = "";
$booking_matrungtam1 = "";
$booking_makhachhang1 = "";
$booking_tenkhachhang1 = "";
$booking_manguonkhach1 = "";
$booking_dienthoai1 = "";
$booking_email1 = "";
$booking_facebook1 = "";
$booking_zalo1 = "";
$booking_diachi1 = "";
$booking_dichvu1 = "";
$booking_thoigianlam1 = 0;
$booking_ghichu1 = "";
$booking_manhanvien1 = $id;
$booking_tennhanvien1 = "";
$booking_tennvbooking1 = "";
//
//
$parentpage = "";
$cardid = "";
$columnid = "0";

//
//	lấy dữ liệu booking cũ
//
if($booking_id != "" && $booking_id != null)
{
	$l_sql = "Select * from tblKhachHangBooking where MaBooking = '".$booking_id."'";
    try
    {
	  	$result_oldbooking = sqlsrv_query($conn,$l_sql);
		while($r1=sqlsrv_fetch_array($result_oldbooking))
		{
			$booking_tinhtrang1 = $r1['TinhTrangBookingID'];
			$booking_matrungtam1 = $r1['MaTrungTam'];
			$booking_makhachhang1 = $r1['MaKH'];
			$booking_tenkhachhang1 = $r1['TenKH'];
			$booking_manguonkhach1 = $r1['MaNhomKH'];
			$booking_dienthoai1 = $r1['DienThoai'];
			$booking_facebook1 = $r1['Facebook'];
			$booking_zalo1 = $r1['Zalo'];
			$booking_email1 = $r1['Email'];
			$booking_diachi1 = $r1['DiaChi'];
			$booking_dichvu1 = $r1['DichVu'];
			$booking_ghichu1 = $r1['GhiChu'];
			$booking_ngayhentemp = $r1['GioBatDau'];
			$booking_thoigianlam1 = $r1['ThoiGianLam'];			
			$booking_manhanvien1 = $r1['MaNV'];
			$booking_tennhanvien1 = $r1['TenNV'];
			$booking_tennvbooking1 = $r1['TenNVBooking'];
		}

		sqlsrv_free_stmt( $result_oldbooking);
     }
     catch(Exception $e) { }
	 
	 if($booking_ngayhentemp != "" && $booking_ngayhentemp != null)
	 {
	 	//echo $booking_ngayhentemp; 2019-04-02 15:00:00.000
		$booking_ngayhen1 = substr($booking_ngayhentemp,8,2) . "-" . substr($booking_ngayhentemp,5,2) . "-" . substr($booking_ngayhentemp,0,4);
		$booking_giohen1 = substr($booking_ngayhentemp,11,5);
	 }
}
?>
<!------ <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.css">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>

Include the above in your HEAD tag ---------->

	<style>
  /**
 * Box model adjustments
 * `border-box`... ALL THE THINGS - http://cbrac.co/RQrDL5
 */

*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

/**
 * 1. Force a vertical scrollbar - http://cbrac.co/163MspB
 * NOTE: Use `text-rendering` with caution - http://cbrac.co/SJt8p1
 * NOTE: Avoid the webkit anti-aliasing trap - http://cbrac.co/TAdhbH
 * NOTE: IE for Windows Phone 8 ignores `-ms-text-size-adjust` if the
 *       viewport <meta> tag is used - http://cbrac.co/1cFrAvl
 */

html {
  font-size: 100%;
  overflow-y: scroll; /* 1 */
  min-height: 100%;
}

/**
 * 1. Inherits percentage declared on above <html> as base `font-size`
 * 2. Unitless `line-height`, which acts as multiple of base `font-size`
 */

body {
  font-family: "Helvetica Neue", Arial, sans-serif;
  font-size: 1em;   /* 1 */
  line-height: 1.5; /* 2 */
  color: #444;
}

/* Page wrapper */
.wrapper {
  width: 90%;
  max-width: 800px;
  margin: 4em auto;
  text-align: center;
}

/* Icons */
.icon {
  display: inline-block;
  width: 16px;
  height: 16px;
  vertical-align: middle;
  fill: currentcolor;
}

/* Headings */
h1,
h2,
h3,
h4,
h5,
h6 {
  color: #222;
  font-weight: 700;
  font-family: inherit;
  line-height: 1.333;
  text-rendering: optimizeLegibility;
}

/**
 * Modals ($modals)
 */

/* 1. Ensure this sits above everything when visible */
.modal {
    position: absolute;
    z-index: 10000; /* 1 */
    top: 0;
    left: 0;
    visibility: hidden;
    width: 100%;
    height: 100%;
}

.modal.is-visible {
    visibility: visible;
}

.modal-overlay {
  position: fixed;
  z-index: 10;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: hsla(0, 0%, 0%, 0.5);
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s linear 0.3s, opacity 0.3s;
}

.modal.is-visible .modal-overlay {
  opacity: 1;
  visibility: visible;
  transition-delay: 0s;
}

.modal-wrapper {
  position: absolute;
  z-index: 9999;
  top: 6em;
  left: 50%;
  width: 32em;
  margin-left: -16em;
  background-color: #fff;
  box-shadow: 0 0 1.5em hsla(0, 0%, 0%, 0.35);
}

.modal-transition {
  transition: all 0.3s 0.12s;
  transform: translateY(-10%);
  opacity: 0;
}

.modal.is-visible .modal-transition {
  transform: translateY(0);
  opacity: 1;
}

.modal-header,
.modal-content {
  padding: 1em;
}

.modal-header {
  position: relative;
  background-color: #fff;
  box-shadow: 0 1px 2px hsla(0, 0%, 0%, 0.06);
  border-bottom: 1px solid #e8e8e8;
}

.modal-close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 1em;
  color: #aaa;
  background: none;
  border: 0;
}

.modal-close:hover {
  color: #777;
}

.modal-heading {
  font-size: 1.125em;
  margin: 0;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.modal-content > *:first-child {
  margin-top: 0;
}

.modal-content > *:last-child {
  margin-bottom: 0;
}

.modal{display: block;}
.intro {
  font-size: 350%;
color:red
}
  </style>


  <svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="768" height="800" viewBox="0 0 768 800"><defs><g id="icon-close"><path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path></g></defs></svg>
  

  <!-- Modal -->
  <div class="modal test1">
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
									<input type="text" class="form-control" placeholder="Tên khách hàng" value=""/>
								</div>
								<div class="form-group">
									 <select class="form-control" id="exampleFormControlSelect1" placeholder="Dịch vụ">
										  <option>BODY</option>
										  <option>FOOT</option>
										  <option>DỊCH VỤ KHÁC</option>
										  
									</select>
								</div>
									
							</div>
							<div class="col-md-6">
							   
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Điện thoại" value=""/>
								</div>
								<div class="form-group">
									 <select class="form-control" id="exampleFormControlSelect1" placeholder="KTV">
										  <option>KTV</option>
										  <option>2</option>
										  <option>3</option>
										  <option>4</option>
										  <option>5</option>
									</select>
								</div>
								
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
								  <input id="datepicker" width="276" placeholder="Ngày" class="form-control"/>
									<script>
										$('#datepicker').datepicker({
											uiLibrary: 'bootstrap4'
										});
									</script>
								</div>
								
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Số Phút" value=""/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group" >
								   <input id="timepicker" width="276" placeholder="Giờ" class="form-control"/>
										<script>
											$('#timepicker').timepicker({
												uiLibrary: 'bootstrap4'
											});
										</script>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="NV nhận lịch" value=""/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group" >
									 <input type="text" class="form-control" placeholder="Email" value=""/>
								</div>
								 <select class="form-control" id="exampleFormControlSelect1" placeholder="Trạng thái">
										  <option>Trạng thái</option>
										  <option>2</option>
										  <option>3</option>
										  <option>4</option>
										  <option>5</option>
									</select>
							</div>
							<div class="col-md-6">
								<div class="form-group" >
									 <input type="text" class="form-control" placeholder="Địa chỉ" value=""/>
								</div>

							</div>
							
						
							<div class="col-md-12">
								
								<div class="form-group">
									<textarea rows="4" cols="50" placeholder="Ghi chú" class="form-control"></textarea>
								</div>
							</div>
						</div>
						
						<button type="button" class="btnSubmit">Submit</button>
					</div>
				</form>
        </div>
      </div>
    </div>
  </div>
