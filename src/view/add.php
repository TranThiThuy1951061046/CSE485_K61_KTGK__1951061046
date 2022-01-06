<?php include("template/header.php"); ?>
<h2 class=" bg-light mb-5 p-2">HỆ THỐNG QUẢN LÝ ĐẠI HỌC </h2>
        <div class="container">
        <h3 class="text-center text-primary mt-5">Thêm Môn Học</h3>

        <form action="" method="post">
       
            <div class="form-group">
                <label for="txtten">Tên Môn Học</label>
                
                <input type="text" class="form-control" placeholder="" name="txtten" >
              
            </div>
           
            <div class="form-group">
                <label for="txttc">Số tín chỉ </label>
               
                <input type="text" class="form-control" placeholder="" name="txttc" >
            </div>

            <div class="form-group">
                <label for="txtlt"> Số tiết lý thuyết</label>
                <input type="text" class="form-control" placeholder="" name="txtlt" >
            </div>
            <div class="form-group">
                <label for="txtbt"> Số tiết bài tập</label>
               <input type="text" class="form-control" placeholder="" name="txtbt">
            </div>
           
            <div class="form-group">
                <label for="txtth">số
tiết thực hành – thí nghiệm </label>
               <input type="text" class="form-control" placeholder="" name="txtth" >
            </div>
            <div class="form-group">
                <label for="txttuhoc"> số giờ tự học</label>
                 <input type="text" class="form-control" placeholder="" name="txttuhoc" >
               
            </div>
            
            <button class="btn btn-outline-success mt-3" type="button" name="submit">Lưu</button>
        </form>
</div>
       
        
      
<?php include("template/footer.php"); ?>

