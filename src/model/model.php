<?php
require_once 'config/db.php';
class model
{
    private $mamh, $ten_mh, $sotinchi, $sotiet_lt, $sotiet_bt, $sotiet_thtn, $sogio_tuhoc;

    public function connectDb()
    {
        $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối- " . mysqli_connect_error());
        }
        return $connection;
    }

    public function closeDb($connection = null)
    {
        mysqli_close($connection);
    }
    public function getAllUsers(){
        
        $conn = $this->connectDb();
        
        $sql = "SELECT * FROM MONHOC";
        $result = mysqli_query($conn,$sql);

        $datas = [];
        
        if(mysqli_num_rows($result) > 0){
            
            $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC); 
        }
        $this->closeDb($conn);

        return $arr_users;
    }
    

        public function add( $ten, $sotc,$lt,$bt, $th, $tuhoc){
        $conn = $this->connectDb();
        $sql = "INSERT INTO MONHOC(ten_mh, sotinchi, sotiet_lt, sotiet_bt, sotiet_thtn, sogio_tuhoc)
        VALUES   ('$ten','$sotc','$lt','$bt' '$th','$tuhoc')";
        $result = mysqli_query($conn,$sql);
        $this->closeDb($conn);
        return $result;
    }
    public function getUser($id){
        $conn = $this->connectDb();

        $sql = "SELECT * FROM MONHOC WHERE mamh = '$id'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0)
            $user = mysqli_fetch_assoc($result);
        $this->closeDb($conn);
        return $user;
    }
    public function update($id, $ten, $sotc,$lt,$bt, $th, $tuhoc){
        $conn = $this->connectDb();

        $sql = "UPDATE MONHOC SET  ten_mh='$ten', sotinchi='$sotc', sotiet_lt='$lt', sotiet_bt='$bt', sotiet_thtn='$th', sogio_tuhoc='$tuhoc' WHERE mamh='$id'";
        $result = mysqli_query($conn,$sql);

        $this->closeDb($conn);
        return $result;
    }
    function delete($id){
        $conn = $this->connectDb();

        $sql = "DELETE FROM MONHOC WHERE mamh = '$id'";
        $result = mysqli_query($conn,$sql);

        $this->closeDb($conn);
        return $result;
    }


}
