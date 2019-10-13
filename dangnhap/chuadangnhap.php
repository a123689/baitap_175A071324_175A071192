<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <form id="form1" name="form1" method="post" action="#" class="login100-form validate-form p-l-55 p-r-55 p-t-178 ">
        <span class="login100-form-title">
          Đăng Nhập
        </span>

        <div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa nhập tài khoản">
          <input class="input100" type="text" id="username" name="username" placeholder="Tài khoản" >
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Bạn chưa nhập mật khẩu">
          <input class="input100" type="password" id="pass" name="pass" placeholder="Mật khẩu" >
          <span class="focus-input100"></span>
        </div>

        <div class="text-right p-t-13 p-b-23">
          <span class="txt1">
            Quên
          </span>

          <a href="#" class="txt2">
            Tài khoản / Mật khẩu?
          </a>
        </div>

        <div class="container-login100-form-btn">
          <input type="button" class="login100-form-btn"	id="btndangnhap" name="btndangnhap" value="Đăng nhập">

        </div>

        <div class="loidangnhap" style="padding-top: 20px; color:#FF0000; display: none; text-align: center;">
          <span id="spanloidangnhap" class="spanloidangnhap">
           Lỗi đăng nhập?
         </span>
        </div>

        <div class="flex-col-c p-t-170 p-b-40">
          <span id="noidung"class="txt1 p-b-9">
          Bạn chưa có tài khoản?
          </span>

          <a id="aaa" href="formdangky.php" class="txt3">
            Đăng ký ngay
          </a>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $("#btndangnhap").click(function(){
      console.log($('#pass').val());
      console.log($('#username').val());
      $.post("kiemtradangnhap.php",{pass:$('#pass').val(), username:$('#username').val()},function(data){
         if(data == "thanhcong"){
           let url = 'http://192.168.64.2/baitaplon/baitap_175A071324_175A071192/Quantri/index.php';
          $('#form1').prop('action',url);
          $('#form1').submit()
         }else {
           $("#spanloidangnhap").html(data);
           $(".loidangnhap").css("display","block");
         }


      });
    });
});

</script>
