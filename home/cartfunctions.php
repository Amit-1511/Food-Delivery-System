<?php
require_once "../database/dbconnect.php";
function allCartItems(){
    global $conn;
    try{
        $qry="SELECT * FROM cart";
        $stmt=$conn->prepare($qry);
        $stmt->execute();
        $res=$stmt->get_result();
        if($res->num_rows>0){
            $res=$res->fetch_all(MYSQLI_ASSOC);
            return json_encode($res);
        }else{
            return false;
        }
    }catch(Exception $e){
        die($e->getMessage());
    }finally{
        $conn->close();
    } 
}
function getCartDetails($id){
    global $conn;
    try{
        $qry="SELECT * FROM cart WHERE id=?";
        $stmt=$conn->prepare($qry);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $res=$stmt->get_result();
        if($res->num_rows>0){
            $res=$res->fetch_all(MYSQLI_ASSOC);
            return json_encode($res);
        }else{
            return false;
        }
    }catch(Exception $e){
        die($e->getMessage());
    }finally{
        $conn->close();
    }
}

function insertCart($img,$fname,$fprice) {
    global $conn;
    try{
        $sql = "INSERT INTO cart (img, fname, fprice) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssd", $imgSrc, $itemName, $itemPrice);
        if ($stmt->execute()) {
            echo "Item added to cart!";
        } else {
            echo "Error: " . $stmt->error;
        }        
    }catch(Exception $e){
        echo $e->getMessage();
    }finally{
        $conn->close();
    }

}
function deleteCart($id){
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
// insertCart("img","biryani",45.00);
allCartItems();

?>