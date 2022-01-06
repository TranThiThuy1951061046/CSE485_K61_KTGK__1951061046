<?php
include("src/view/template/header.php");
?>
    <div style="color: red">
        <?php echo $error; ?>
    </div>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm thông tin Môn Học</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="" method="post">
            <div class="form-group">
                <label for="ten_mh">Tên môn học</label>
                <input type="text" class="form-control" id="ten_mh" name="ten_mh" placeholder="Tên môn học"  value="">
            </div>
            <div class="form-group">
                <label for="sotinchi">Số tín chỉ</label>
                <input type="text" class="form-control" id="sotinchi" name="sotinchi" placeholder="Số tín chỉ" value="">
            </div>

            <div class="form-group">
                <label for="bd_age">Số tiết lý thuyết</label>
                <input type="text" class="form-control" id="sotiet_lt" name="sotiet_lt" placeholder="Số tiết lý thuyết" value="">
            </div>
            <div class="form-group">
                <label for="bd_bgroup">Số tiết bài tập</label>
                <input type="text" class="form-control" id="sotiet_bt" name="sotiet_bt" placeholder="Số tiết bài tập"value="">
                
            </div>
            <div class="form-group">
                <label for="bd_reg_date">Số tiết thực hành thí nghiệm</label>
                <input type="text" class="form-control" id="sotiet_thtn" name="sotiet_thtn" placeholder="Số tiết thực hành thí nghiệm" value="">
               
            </div>
            <div class="form-group">
                <label for="bd_phno">Số giờ tự học</label>
                <input type="tel" class="form-control" id="sogio_tuhoc" name="sogio_tuhoc" placeholder="Số giờ tự học" value="">
            </div>
            <button type="submit" class="btn btn-primary mt-3" name="submit" value="update"  >Sửa</button>
        </form>
    </div>
<?php
include("src/view/template/footer.php");
?>