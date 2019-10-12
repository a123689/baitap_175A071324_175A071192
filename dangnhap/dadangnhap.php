

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
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
<!--===============================================================================================-->
</head>
<body>

  <div id="modal-content" class="box modal-content py-3">
    <div id="modal-header" class="box modal-header p-x-1 py-3"><h4>Xác nhận</h4></div>
    <div id="modal-body" class="box modal-body py-3">
      <p id="yui_3_17_2_1_1570875467032_21">Bạn đã đăng nhập với tên <?php echo $_SESSION["iduser"] ?>, bạn cần đăng xuất trước khi đăng nhập với tư cách người dùng khác.
  </p>
    </div><div id="modal-footer" class="box modal-footer py-3"><div class="buttons"><div class="singlebutton">
      <form method="post" action="">
              <input type="hidden" name="sesskey" value="PJFDKYdzKe">
              <input type="hidden" name="loginpage" value="1">
          <button type="submit" class="btn btn-primary" name="btndangxuat" title="">Đăng xuất</button>
      </form>
  </div><div class="singlebutton">
      <form method="post" action="">
          <button  type="submit" class="btn btn-secondary" name="btnhuy" title="">Hủy bỏ thao tác</button>
      </form>
  </div></div></div></div>

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
