<!doctype html>
<html lang="en">

<head>
    <title>Đại học Nguyễn Tất Thành</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="../CSS/GioiThieu.css">
    <!-- link script -->
    <script src="JS/GioiThieu.js"></script>
    <!-- link icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
            <?php
                require"../ChungGT_TC/header.php";
            ?><!-- hết phần header -->

            <?php
                require"../ChungGT_TC/menu1.php";
            ?><!-- hết phần menu1 -->
            <?php
                require"../ChungGT_TC/menu2.php";
            ?> <!-- hết phần menu2 -->
    <div class="card-deck">
        <div class="container">
            <div class="row">
            <?php
                require"ContentLeftGT.php";
            ?> <!-- hết phần menu2 -->
            <?php
                require"ContentRightGT.php";
            ?> <!-- hết phần menu2 -->
            </div>
        </div>
    </div>
    </div>
    </div><!-- hết phần wapper -->
            <?php
                require"../ChungGT_TC/footer.php";
            ?> <!-- hết phần footer -->
            <?php
                require"../ChungGT_TC/copyright.php";
            ?> <!-- hết phần copyright -->
                
            <?php
                require"../ChungGT_TC/tinnhan.php";
            ?> <!-- hết phần copyright -->
          
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$(".col-sm-12.form2").hide();
  $("#hide").click(function(){
    $(".form2").hide();
  });
  $("#show").click(function(){
    $(".form2").show();
  });
});
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>