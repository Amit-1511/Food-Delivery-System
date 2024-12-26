<?php
require_once "dbconnect.php";
function allUsers(){
    global $conn;
    try{
        $qry="SELECT * FROM users";
        $stmt=$conn->prepare($qry);
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
function check_email($email) {
    global $conn;
    try{
        $qry="SELECT * FROM users WHERE email=?";
        $stmt=$conn->prepare($qry);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $res=$stmt->get_result();
        if($res->num_rows>0){
            return true;
        }else{
            return false;
        }
    }catch(Exception $e){
        die($e->getMessage());
    }
}

function getUserDetails($id){
    global $conn;
    try{
        $qry="SELECT * FROM users WHERE id=?";
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
    }
    // finally{
    //     $conn->close();
    // } 
}
function profileUpdate($id,$name,$email,$mobile,$address){
    global $conn;
    try{
        $qry="UPDATE users SET name=?,email=?,mobile=?,address=? where id=?";
        $stmt=$conn->prepare($qry);
        $stmt->bind_param("ssssi",$name,$email,$mobile,$address,$id);
        $status=$stmt->execute();
        if($conn->affected_rows>0){
            return true;
        }else{
            return false;
        }
    }catch(Exception $e){
        die($e->getMessage());
    }
    // }finally{
    //     $conn->close();
    // } 
}
function passwordUpdate($id,$password){
    global $conn;
    try{
        $qry="UPDATE users SET password=? where id=?";
        $stmt=$conn->prepare($qry);
        $stmt->bind_param("si",$password,$id);
        $status=$stmt->execute();
        if($conn->affected_rows>0){
            return true;
        }else{
            return false;
        }
    }catch(Exception $e){
        die($e->getMessage());
    }
    // finally{
    //     $conn->close();
    // } 
}
function deleteAccount($id){
    global $conn;
    try{
        $qry="DELETE FROM users where id=?";
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
function insertUser($name,$gender,$email,$mobile,$address,$password){
    global $conn;
    try{
        $qry="INSERT INTO users(name,gender,email,mobile,address,password) VALUES(?,?,?,?,?,?) ";
        $stmt=$conn->prepare($qry);
        $stmt->bind_param("ssssss",$name,$gender,$email,$mobile,$address,$password);
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

check_email("a@gmail.com");

?>