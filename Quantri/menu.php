<a href="../Trangchu/TrangChu.php">Trang chủ</a>
<a href="./listTheLoai.php">Quản lý danh mục</a>
<a href="./listTin.php">Quản lý tin tức</a>
<a href="#">Quản lý tài khoản</a>
<a id="dangxuat">Đăng xuất</a>
<script type="text/javascript">
$(document).ready(function(){

    $("#dangxuat").click(function(){
      $.post("dangxuat.php",{dangxuat:'hi'},function(data){

        // let url = 'http://192.168.64.2/baitaplon/baitap_175A071324_175A071192/Quantri/quantri.php';
        //$('#form1').prop('action',url);
        //$('#form1').submit()
        location.reload();

      });
    });
});
</script>
