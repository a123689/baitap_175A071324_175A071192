
    <div class="tinnhan">
        <div class="container" style="background-color: #04427e ;">
            <div class="row">
                <div class="col-sm-9" id="hide">
                    <p style="color: #ffffff">
                        Hãy để lại lời nhắn
                    </p>
                </div>
                <div class="col-sm-3 " id="show">
                    <i class="fas fa-sort-down" style="color: #ffffff"></i>
                </div>
            </div>
        </div>
        <div class=" form2 col-sm-12">
            <form>
                <div class=" mb-3">
                    <input type="text" class="form-control" placeholder="*Tên">
                </div>
                <div class=" mb-3">
                    <input type="text" class="form-control" placeholder="*E-mail">
                </div>
                <div class=" mb-3">
                    <input type="text" class="form-control" placeholder="Điện thoại">
                </div>
                <div class=" mb-3">
                    <input type="text" class="form-control" placeholder="Ngày sinh">
                </div>
                <div class=" mb-3">
                    <input style="height: 60px;" type="text" class="form-control" placeholder="*lời nhắn">
                </div>

                <div class=" mb-3">
                    <button type="submit" class="btn btn-primary mb-2"
                        style="background-color: #04427e;padding: 0px 110px;">Hoàn Tất</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $(".form2").hide();
            $("#hide").click(function () {
                $(".form2").hide();
            });
            $("#show").click(function () {
                $(".form2").show();
            });
        });
    </script>