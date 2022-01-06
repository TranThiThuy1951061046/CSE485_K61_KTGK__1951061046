<?php include("template/header.php"); ?>


    <h2 class=" bg-light mb-5 p-2">HỆ THỐNG QUẢN LÝ ĐẠI HỌC</h2>
                   

<div class="container">

    <h3 class="text-center text-success m-2 "> QUẢN LÝ MÔN HỌC  </h3>
    <div>
        <a class="btn btn-outline-success me-2" type="button" href="index.php?act=add">Thêm mới</a>

    </div>
    <table class="table">


        <thead>
            <tr>
                <th scope="col">Mã môn học</th>
                <th scope="col">Tên môn học</th>
                <th scope="col">   Số tín chỉ </th>
                <th scope="col">  Số tiết lý thuyết  </th>
                <th scope="col">  Số tiết bài tập  </th>
                <th scope="col">  tiết thực hành – thí nghiệm  </th>
                <th scope="col"> số giờ tự học   </th>
             
                <th scope="col">    </th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($datas as $data) : ?>
                <tr>
                    <td><?php echo $data['mamh'] ?></td>
                    <td><?php echo $data['ten_mh'] ?></td>
                    <td><?php echo $data[ 'sotinchi'] ?></td>
                    <td><?php echo $data['sotiet_lt'] ?></td>
                    <td><?php echo $data['sotiet_bt'] ?></td>

                    <td><?php echo $data['sotiet_thtn'] ?></td>

                    <td><?php echo $data['sogio_tuhoc'] ?></td>

                  
                    <td></td>
                    <td>
                        <?php

                        $urlDetail =
                            "index.php?act=detail&id=" . $data['mamh'];
                        $urlEdit =
                            "index.php?act=edit&id=" . $data['mamh'];
                        $urlDelete =
                            "index.php?act=delete&id=" . $data['mamh'];
                        ?>
                        <a class="text-decoration-none" href="<?php echo $urlDetail ?>">Chi tiết</a> &nbsp;
                        <a href="<?php echo $urlEdit ?>"><i class="bi bi-pencil-square"></i></a> &nbsp;
                        <a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="<?php echo $urlDelete ?>">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include("template/footer.php"); ?>