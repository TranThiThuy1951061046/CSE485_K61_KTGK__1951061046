<?php include("template/header.php"); ?>
<h2 class=" bg-light mb-5 p-2">HỆ THỐNG QUẢN LÝ ĐẠI HỌC </h2>
        <div class="container">
        <h3 class="text-center text-primary mt-5">Chỉnh sửa Danh Sách Môn Học</h3>

        <form action="" method="post">
        <div class="form-group">
                <label for="txtma">Mã Môn Học</label>
                <input  readonly type="text" class="form-control" id="txtma" name="txtma" placeholder="" value="<?php
           echo  $data['mamh']?>">
              
            </div>
            <div class="form-group">
                <label for="txtten">Tên Môn Học</label>
                
                <input type="text" class="form-control" placeholder="" name="txtten" value="<?php echo $data['ten_mh']; ?>">
              
            </div>
           
            <div class="form-group">
                <label for="txttc">Số tín chỉ </label>
               
                <input type="text" class="form-control" placeholder="" name="txttc" value="<?php echo $data['sotinchi']; ?>">
            </div>

            <div class="form-group">
                <label for="txtlt"> Số tiết lý thuyết</label>
                <input type="text" class="form-control" placeholder="" name="txtlt" value="<?php echo $data['sotiet_lt']; ?>">
            </div>
            <div class="form-group">
                <label for="txtbt"> Số tiết bài tập</label>
               <input type="text" class="form-control" placeholder="" name="txtbt" value="<?php echo $data['sotiet_bt']; ?>">
            </div>
           
            <div class="form-group">
                <label for="txtth">số
tiết thực hành – thí nghiệm </label>
               <input type="text" class="form-control" placeholder="" name="txtth" value="<?php echo $data['sotiet_thtn']; ?>">
            </div>
            <div class="form-group">
                <label for="txttuhoc"> số giờ tự học</label>
                 <input type="text" class="form-control" placeholder="" name="txttuhoc" value="<?php echo $data['sogio_tuhoc']; ?>">
               
            </div>
            
            <button class="btn btn-outline-success mt-3" type="button" name="submit">Lưu</button>
        </form>
</div>
       
        
      
<?php include("template/footer.php"); ?>

