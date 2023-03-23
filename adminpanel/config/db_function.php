<?php
require 'database.php';
function checklogin($User_name,$Password){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "select password from admin where account=?";
$q = $pdo->prepare($sql);
 $q->execute(array($User_name));
$data = $q->fetch(PDO::FETCH_ASSOC);
    if($data['password'] !=null){
        //check
        if($Password ==$data['password']){
            
            return true;
        }else{
            return false;
        }
        
    }else{
        return false;
    }



Database::disconnect();

}

function addCategory($name){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "insert into category (name,date) values (?,?)";
$q = $pdo->prepare($sql);
 if($q->execute(array($name,date("F j, Y, g:i a")))){
     return 1;
 }else{
     return 0;
 }

Database::disconnect();

}

function getCategory(){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "select * from category";
$q = $pdo->prepare($sql);
 $q->execute(array());
$data = $q->fetchAll(PDO::FETCH_ASSOC);

return $data;


Database::disconnect();

}

function deleteCategory($id){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "delete from category where id=?";
$q = $pdo->prepare($sql);
 if($q->execute(array($id))){
     return 1;
 }else{
     return 0;
 }

Database::disconnect();

}

function addNews($title,$catid,$summ,$detail,$image){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "insert into news (title,summary,details,categoryid,image,date) values (?,?,?,?,?,?)";
$q = $pdo->prepare($sql);
 if($q->execute(array($title,$summ,$detail,$catid,$image,date("F j, Y, g:i a")))){
     return 1;
 }else{
     return 0;
 }

Database::disconnect();

}

function getNews(){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "select * from news";
$q = $pdo->prepare($sql);
 $q->execute(array());
$data = $q->fetchAll(PDO::FETCH_ASSOC);

return $data;


Database::disconnect();

}

function getCategoryNameByid($catid){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "select name from category where id=?";
$q = $pdo->prepare($sql);
 $q->execute(array($catid));
$data = $q->fetch(PDO::FETCH_ASSOC);

return $data["name"];


Database::disconnect();

}

function deleteNews($id){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "delete from news where id=?";
$q = $pdo->prepare($sql);
 if($q->execute(array($id))){
     return 1;
 }else{
     return 0;
 }

Database::disconnect();

}


function addVoteQuestion($question){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "insert into votequestion (question,date) values (?,?)";
$q = $pdo->prepare($sql);
 if($q->execute(array($question,date("F j, Y, g:i a")))){
     return 1;
 }else{
     return 0;
 }

Database::disconnect();

}

function addVoteChoice($choice,$questionid){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "insert into votechoice (choice,count,questionid) values (?,?,?)";
$q = $pdo->prepare($sql);
 if($q->execute(array($choice,0,$questionid))){
     return 1;
 }else{
     return 0;
 }

Database::disconnect();

}

function getMaxVoteId(){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "select max(id) from votequestion";
$q = $pdo->prepare($sql);
 $q->execute(array());
$data = $q->fetch(PDO::FETCH_ASSOC);

return $data["max(id)"];


Database::disconnect();

}

function updateCategory($name,$id){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "udapte category set name=? where id=?";
$q = $pdo->prepare($sql);
 if($q->execute(array($name,$id))){
     return 1;
 }else{
     return 0;
 }

Database::disconnect();

}

function getNewsByCatID($catid){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "select * from news where categoryid=? ORDER BY id DESC
LIMIT 3";
$q = $pdo->prepare($sql);
 $q->execute(array($catid));
$data = $q->fetchAll(PDO::FETCH_ASSOC);

return $data;


Database::disconnect();

}

function getALlNewsByCatID($catid){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "select * from news where categoryid=? ORDER BY id DESC";
$q = $pdo->prepare($sql);
 $q->execute(array($catid));
$data = $q->fetchAll(PDO::FETCH_ASSOC);

return $data;


Database::disconnect();

}

function getNewsById($id){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "select * from news where id=?";
$q = $pdo->prepare($sql);
 $q->execute(array($id));
$data = $q->fetch(PDO::FETCH_ASSOC);

return $data;


Database::disconnect();

}

function getLastVote(){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "select * from votequestion order by id desc limit 1";
$q = $pdo->prepare($sql);
 $q->execute(array());
$data = $q->fetch(PDO::FETCH_ASSOC);

return $data;

Database::disconnect();

}

function getchoicesByVoteId($voteId){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "select * from votechoice where questionid=?";
$q = $pdo->prepare($sql);
 $q->execute(array($voteId));
$data = $q->fetchAll(PDO::FETCH_ASSOC);

return $data;

Database::disconnect();

}

function updatevotechoice($choiceId){
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "update votechoice set count=count+1 where id=?";
$q = $pdo->prepare($sql);
 if($q->execute(array($choiceId))){
     return 1;
 }else{
return 0;}


Database::disconnect();

}
?>