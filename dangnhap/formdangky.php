<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng ký </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" id="form3" name="form3" method="post" action="#">
					<span class="login100-form-title">
						Đăng Ký
					</span>

					<div class="loidangky" style="padding-bottom:  20px; color:#FF0000; display: none; text-align: center;">
						<span id="spanloidangnhap" class="spanloidangnhap">
						 Lỗi đăng đăng ký?
					 </span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa nhập tài khoản">
						<input class="input100" type="text" id="taikhoan" placeholder="Tài khoản">
						<span class="focus-input100"></span>
					</div>


          <div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa nhập mật khẩu">
            <input class="input100" type="password" id="matkhau" placeholder="Mật khẩu">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa nhập lại mật khẩu">
            <input class="input100" type="password" id="nhaplaimatkhau" placeholder="Nhập lại mật khẩu">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa nhập họ tên">
            <input class="input100" type="text" id="hoten" placeholder="Họ tên">
            <span class="focus-input100"></span>
          </div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa email">
						<input class="input100" type="text" id="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa nhập địa chỉ">
            <input class="input100" type="text" id="diachi" placeholder="Địa chỉ">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa nhập số điện thoại">
            <input class="input100" type="text" id="sodienthoai" placeholder="Số điện thoại">
            <span class="focus-input100"></span>
          </div>


					<div class="container-login100-form-btn">
						<input  class="login100-form-btn"	id="btndangky" name="btndangky" type="button" value="Đăng ký" >

					</div>

					</div>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	$(document).ready(function(){
		$("#btndangky").click(function(){
			var matkhau = $('#matkhau').val();
			var nhaplaimatkhau = $('#nhaplaimatkhau').val();
			var email = $('#email').val();
			var sodienthoai = $('#sodienthoai').val();
			var hoten = $('#hoten').val();
			var diachi = $('#diachi').val();
			var taikhoan = $('#taikhoan').val();
			var regextaikhoan = /^[a-zA-Z][A-z|0-9|\W|\s]{4,19}/;
			if(matkhau == '' || nhaplaimatkhau == '' || email == '' || sodienthoai == '' || hoten == '' || diachi == ''){
				$("#spanloidangnhap").html("Bạn phải nhập đầy đủ thông tin");
			  $(".loidangky").css("display","block");
			}else {

				if(!regextaikhoan.test(taikhoan)){
					$("#spanloidangnhap").html("Tài khoản phải từ 5 đến 20 ký tự, bắt đầu bằng chữ cái");
					$(".loidangky").css("display","block");
				}else {
					var filter = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
					if(!filter.test(matkhau)){
						$("#spanloidangnhap").html("Mật khẩu phải ít nhất 8 ký tự, ít nhất một chữ cái viết hoa, môt chữ cái viết thường, một số, một ký tự đặc biệt");
						$(".loidangky").css("display","block");
					}else {
						if(matkhau != nhaplaimatkhau){
							$("#spanloidangnhap").html("Nhập lại mật khẩu không chính xác");
							$(".loidangky").css("display","block");

						}else {


							var filter = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
							if (!filter.test(email)) {
								$("#spanloidangnhap").html("Địa chỉ email không hợp lệ");
								$(".loidangky").css("display","block");

							}else {

								var filter = /((09|03|07|08|05)+([0-9]{8})\b)/;
								if(!filter.test(sodienthoai)){
									$("#spanloidangnhap").html("Số điện thoại không hợp lệ");
									$(".loidangky").css("display","block");
								}else {
									$.post("kiemtrataikhoan.php",{username:$('#taikhoan').val()},function(data){
						         if(data == "false"){
											 $("#spanloidangnhap").html("Tài khoản đã tồn tại");
											 $(".loidangky").css("display","block");
										 }else {
											 $.post("kiemtraemail.php",{email:email},function(data){
												 if(data == "false"){
													 $("#spanloidangnhap").html("Email đã được sử dụng");
													 $(".loidangky").css("display","block");
												 }else {
													 $.post("dangkytaikhoan.php",{hoten:$('#hoten').val(),taikhoan:$('#taikhoan').val(),matkhau:$('#matkhau').val(),diachi:$('#diachi').val(),email:$('#email').val(),dienthoai:$('#sodienthoai').val()},function(data){
														 if(data == "true"){
															 alert("Đăng ký thành công");
															 let url = 'http://192.168.64.2/baitaplon/baitap_175A071324_175A071192/dangnhap/formdangnhap.php';
										           $('#form3').prop('action',url);
										           $('#form3').submit()
														 }

				 						      });
												 }
												});

										 }

						      });
								}
					    }

						}
				   }

				}
			}




		});
	});

	</script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
