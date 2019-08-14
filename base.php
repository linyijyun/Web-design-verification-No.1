<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=web01";
$pdo=new PDO($dsn,"root","");
session_start();

if(empty($_SESSION['total'])){
  $total = find("total", 1);
  $total['total'] = $total['total']+1;
  save("total",$total);
  $_SESSION['total']=$total['total'];
}



function nums($table, $def){
  global $pdo;
  if (is_array($def)){
     foreach($def as $key => $val){
       $str[] = sprintf("`%s`='%s'", $key, $val);
     }
      $sql = "select count(*) from $table where  ".implode(" && ", $str)."";
  }else{
      $sql = "select count(*) from $table";
  }
  return $pdo->query($sql)->fetchColumn();
}


function all($table, $def){
  global $pdo;
  if (is_array($def)){
     foreach($def as $key => $val){
       $str[] = sprintf("`%s`='%s'", $key, $val);
     }
      $sql = "select * from $table where  ".implode(" && ", $str)."";
  }else{
      $sql = "select * from $table";
  }
  return $pdo->query($sql)->fetchAll();
}


function find($table, $def){
  global $pdo;
  if (is_array($def)){
     foreach($def as $key => $val){
       $str[] = sprintf("`%s`='%s'", $key, $val);
     }
      $sql = "select * from $table where  ".implode(" && ", $str)."";
  }else{
      $sql = "select * from $table where id='$def'";
  }
  return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}


function del($table, $def){
  global $pdo;
  if (is_array($def)){
     foreach($def as $key => $val){
       $str[] = sprintf("`%s`='%s'", $key, $val);
     }
      $sql = "delete from $table where  ".implode(" && ", $str)."";
  }else{
      $sql = "elete from $table where id='$def'";
  }
  return $pdo->exec($sql);
}

function save($table, $data){
  global $pdo;
  if (!empty($data['id'])){
     foreach($data as $key => $val){
       if($key != 'id'){
       $str[] = sprintf("`%s`='%s'", $key, $val);
     }
    }
      $sql = "update $table set ".implode(",", $str)." where id='".$data['id']."'";
  }else{
      $tmp = array_keys($data);
      $sql = "insert into $table(`".implode("`,`, $tmp")."`) values('".implode("','",$str)."')";
  }
  return $pdo->exec($sql);
}

function q($str){
  global $pdo;
  return $pdo->query($str)->fetchAll();
}

function to($page, $param){
  if(empty($param)){
      header("location:$page");
  }else{
      header("location:$page?$param");
  }
}


?>