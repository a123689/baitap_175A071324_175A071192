<a href="../Trangchu/TrangChu.php">Trang chủ</a>
<a id="danhmuc"href="./listdanhmuc.php">Quản lý danh mục</a>
<a id="loaitin"href="./listtheloai.php">Quản lý thể loại</a>
<a href="./listTin.php">Quản lý tin tức</a>
<a href="./listtaikhoan.php">Quản lý tài khoản</a>
<a id="dangxuat" href="#">Đăng xuất</a>
<script type="text/javascript">
$(document).ready(function(){
$("#danhmuc").attr("disabled", false);
    $("#dangxuat").click(function(){
      $.post("dangxuat.php",{dangxuat:'hi'},function(data){

        location.reload();

      });
    });
});
</script>
