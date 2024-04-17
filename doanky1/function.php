<?php

require_once "controller.php";


class Functions extends Controller{
    
    public function addplanet (){
        if($this->isPost()){
            $name = $_POST["name"];
            $discovered_date = $_POST["discovered_date"];
            $size = $_POST["size"];
            $atmosphere = $_POST["atmosphere"];
            $distance_sun = $_POST["distance_sun"];
            $distance_earth = $_POST["distance_earth"];
        
            // Thêm hành tinh mới vào cơ sở dữ liệu
            $stmt = $this->getConn()->prepare("INSERT INTO Planets (name, discovered_date, size, atmosphere, distance_sun, distance_earth) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssdd", $name, $discovered_date, $size, $atmosphere, $distance_sun, $distance_earth);
            if ($stmt->execute()) {
                echo "Hành tinh mới đã được thêm thành công!";
            } else {
                echo "Lỗi: Không thể thêm hành tinh mới.";
            }
        }
    }
}

$function = new Functions();