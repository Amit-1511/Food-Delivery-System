<?php
require_once "dbconnect.php";
function allFoods(){
    global $conn;
    try{
        $qry="SELECT * FROM cart";
        $stmt=$conn->prepare($qry);
        $stmt->execute();
        $res=$stmt->get_result();
        if($res->num_rows > 0){
            // echo json_encode($res->fetch_All(MYSQLI_ASSOC));
            return $res;
        }else{
            return false;
        }
    }catch(Exception $e){
        die($e->getMessage());
    }finally{
        $conn->close();
    }
}

function getFoodDetails($id){
    global $conn;
    try{
        $qry="SELECT * FROM cart WHERE id=?";
        $stmt=$conn->prepare($qry);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $res=$stmt->get_result();
        if($res->num_rows>0){
            return $res;
        }else{
            return false;
        }
    }catch(Exception $e){
        die($e->getMessage());
    }finally{
        $conn->close();
    } 
}
function deleteFood($id){
    global $conn;
    try{
        $qry="DELETE FROM cart where id=?";
        $stmt=$conn->prepare($qry);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        if($conn->affected_rows>0){
            return true;
        }else{
            return false;
        }
    }catch(Exception $e){
        die($e->getMessage());
    }finally{
        $conn->close();
    } 
}

function insertFood($img,$fname,$fprice){
    global $conn;
    try{
        $qry="INSERT INTO cart(img,fname,fprice) VALUES(?,?,?) ";
        $stmt=$conn->prepare($qry);
        $stmt->bind_param("ssd",$img,$fname,$fprice);
        $stmt->execute();
        if($conn->affected_rows>0){
            return true;
        }else{
            return false;
        }
    }catch(Exception $e){
        die($e->getMessage());
    }finally{
        $conn->close();
    }
}
// insertFood("images/biryani/Ambur-Chicken-Biryani.jpg","Ambur Chicken Biryani",220.00);
// insertFood("images/biryani/Chicken-Biryani-hyd.jpg","Chicken Biryani hyd",240.00);
// insertFood("images/biryani/egg-biryani.jpeg","egg biryani",260.00);
// insertFood("images/biryani/goan-fish-biryani.jpg","goan fish biryani",280.00);
// insertFood("images/biryani/hyd-Mutton-Biryani.jpg","hyd Mutton Biryani",300.00);
// insertFood("images/biryani/kamrupi-biryani.jpg","kamrupi-biryani",320.00);
// insertFood("images/biryani/kashmiri.pulao.jpg","kashmiri pulao",340.00);
// insertFood("images/biryani/memonibiryani.png","memoni biryani",360.00);
// insertFood("images/biryani/mughlai-biryani.jpg","mughlai biryani",380.00);


allFoods();







?>