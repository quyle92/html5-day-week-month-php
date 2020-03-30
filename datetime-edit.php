<style>


.width30 {
		width: 30%;
	}
	.width70 {
		width: 70%;	
	}
	.floatL{
		float: left;
	}
	.width50{
		width: 50%;
	}
	.floatR{
		float: right;
	}
	.btn{
		width: 100%;
		border-radius: 0px;
	}
	.width100{
		width: 100%;
	}
	.row{
		margin-left: -20px;
		margin-right: -20px;

	}
	.boxStyle{
		padding: 20px; 
		border-radius: 25px; 
		border-top: 6px solid #dc3545;
		border-bottom: 6px solid #28a745;
	}  
</style>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>

<script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">


 <?php
 // check the input
is_numeric($_GET['id']) or die("invalid URL");

require_once '_db.php';

$stmt = $db->prepare('SELECT * FROM events WHERE id = :id');
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();
$event = $stmt->fetch();

 ?>
<body class="bg-dark">

	<div class="container bg-dark">


		<div class="col-md-6 bg-light boxStyle">
			<form name="theform" id="f" action="" onSubmit="validate()" >
	<div class="row">
		
		<div class="col-md-6">
			<div class="form-group">
				<input class="form-control" type="hidden" required placeholder="id" name="id" value="<?=$event['id']?>">
				<input class="form-control" type="text" required placeholder="Họ Tên*" name="name" value="<?=$event['name']?>">
			</div>
		</div>
	</div>
	<div class="row">
<!-- 		<div class="col-md-6">
			<div class="form-group">
				
				<input class="form-control" type="text" required placeholder="Số điện thoại*">
			</div>
		</div> -->
		<div class="col-md-6">
			<div class="form-group">
				
				<input class="form-control" type="text" required placeholder="Nhân Viên*" name="staff" value="<?=$event['staff']?>">
			</div>
		</div>
	</div>

	<div class="row">
<!-- 		<div class="col-md-6">
			<div class="form-group">
				<select name="gioi-tinh" aria-invalid="false" class="form-control" required>
					<option value="Giới tính">Giới tính</option>
					<option value="Nam">Nam</option>
					<option value="Nữ">Nữ</option>
					<option value="Khác">Khác</option>
				</select>
				
			</div>
		</div> -->
		<div class="col-md-6">
			<div class="form-group">
				<input class="form-control" type="text" required placeholder="Service*"  name="service" value="<?=$event['service']?>">

			</div>
		</div>
	</div>

<!-- 	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
		        <div class='input-group date' id='datetimepicker1' >
		          <input type='text' class="form-control" />
		          <span class="input-group-addon">
		            <span class="glyphicon glyphicon-calendar"></span>
		          </span>
		          <script type="text/javascript">
		            $(function() { var date = new Date();
             		 date.setDate(date.getDate() - 0);// for disabling past dates, if disabling 7 days backward, replace 0 by 7
		            $('#datetimepicker1').datetimepicker({
				       format: 'DD-MM-YYYY HH:mm:ss', //for 12hrs format: hh:ss A
				        minDate: date // for disabling past dates
				   		});
				    });
		          </script>
		          
		        </div>
      		</div>

		</div>
		<div class="col-md-6">
			<div class="form-group">
				
				 <select class="form-control" id="person_number" required placeholder="">
                     <option value="0">Số người*<i></i> </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
			</div>
		</div>
	</div> -->

<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<input class="form-control" type="hidden" required placeholder="start" id="start" name="start">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<input class="form-control" type="hidden" required placeholder="end" id="end" name="end">
			</div>
		</div>

</div>



<div class="form-group">
	  	<div class="row">

	 		<div class="col-md-4" style="margin:0 auto;"><input class="btn btn-danger" type="submit" value="Submit"style="font-weight: bold;background-color: #ffcc17;color:#333"></div>		
	  	</div>
  	</div>
     </form>      
		</div>


	</div> 
	
</body>

<script type="text/javascript">
        function close(result) {
            DayPilot.Modal.close(result);
        }

       var startPicker =  new DayPilot.DatePicker({
            target: 'start', 
            pattern: 'yyyy-MM-ddTHH:mm:ss',
            date: "<?php echo  $event['start']  ?>",
            onShow: function() {
                parent.DayPilot.ModalStatic.stretch();
            }
        });

        var endPicker =  new DayPilot.DatePicker({
            target: 'end', 
            pattern: 'yyyy-MM-ddTHH:mm:ss',
            date: "<?php echo $event['end']  ?>",
            onShow: function() {
                parent.DayPilot.ModalStatic.stretch();
            }
        });

        $("#f").submit(function (ev) {
            
            // make sure it's not submitted using the default mechanism
            ev.preventDefault();
   
            // normalize the date values
            $("#start").val(startPicker.date.toString("yyyy-MM-dd HH:mm:ss"));
            $("#end").val(endPicker.date.toString("yyyy-MM-dd HH:mm:ss"));

            // submit using AJAX
            var f = $("#f");
            $.post("backend_update.php", f.serialize(), function (result) {
            			 close(eval(result));//loadEvents();
						
            });
            
        });

</script>