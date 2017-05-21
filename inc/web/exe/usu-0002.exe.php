<?

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/lib/core/func.lib.php";


if($_POST){
   if(isset($_GET['id']) && $_GET['id']!=''){ 
     
     
 } 
    
    
    
}

if(isset($_GET['id']) && $_GET['id']!=''){ 
    $id=$_GET["id"];
    $sql="SELECT * FROM LOGIN WHERE ID=".$id;
    $res = $mysql->query($sql);
    if($res->num_rows>0){
        if($rows->fetch_assoc()){
            
        }
    }
    
    
}
 
