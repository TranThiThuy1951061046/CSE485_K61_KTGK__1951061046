<?php
  require_once 'config/database.php';
  class monhocModel{
      private $ma_mh;
      private $ten_mh;
      private $sotinchi;
      private $sotiet_lt;
      private $sotiet_bt;
      private $sotiet_thtn;
      private $sogio_tuhoc;
      //định nghĩa phương thức để sau này nhận các thao tác tương ứng với action
      public function index() {
          //khởi tạo kết nối
        $conn = $this->connectDb();
        //truy vấn
        $sql = "SELECT * FROM monhoc";
        $results = mysqli_query($conn,$sql);
        //khai báo biến trả về mảng
        $arr_monhocs = [];
        //Xử lý(ko show hết quả) trả về kết quả
        if (mysqli_num_rows($results) > 0) {
            $arr_monhocs = mysqli_fetch_all($results, MYSQLI_ASSOC);
        }
        $this->closeDb($conn);

        return $arr_monhocs;
    }
    // public function insert($user = []) {
    //     $conn = $this->connectDb();
    //     //tạo và thực thi truy vấn
    //     $sql = "INSERT INTO blood_donor(`bd_name`) 
    //     VALUES ('{$user['bd_name']}')";
    //     $isInsert = mysqli_query($conn, $sql);
    //     $this->closeDb($conn);

    //     return $isInsert;
    // }
    // public function getUserById($bd_id = null) {
    //     $conn = $this->connectDb();
    //     $sql = "SELECT * FROM blood_donor WHERE bd_id=$bd_id";
    //     $results = mysqli_query($conn, $sql);
    //     $user = [];
    //     if (mysqli_num_rows($results) > 0) {
    //         $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
    //         $user = $users[0];
    //     }
    //     $this->closeDb($conn);

    //     return $user;
    // }
    // public function update($user = []) {
    //     $conn = $this->connectDb();
    //     $sql = "UPDATE blood_donor 
    // SET bd_name = '{$user['bd_name']}', bd_sex = '{$user['bd_sex']}' WHERE bd_id = {$user['bd_id']}";
    //     $isUpdate = mysqli_query($conn, $sql);
    //     $this->closeDb($conn);

    //     return $isUpdate;
    // }
    // public function delete($bd_id= null) {
    //     $conn = $this->connectDb();

    //     $sql = "DELETE FROM blood_donor  WHERE bd_id = $bd_id";
    //     $isDelete = mysqli_query($conn, $sql);

    //     $this->closeDb($conn);

    //     return $isDelete;
    // }

      public function connectDb() {
        $connection = mysqli_connect(DB_HOST,
            DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
        }

        return $connection;
    }

    public function closeDb($connection = null) {
        mysqli_close($connection);
    }
  }


?>