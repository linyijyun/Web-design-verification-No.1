<?php

include_once "base.php";
$do=(!empty($_GET['do']))?$_GET['do']:"";

switch($do){
  case "total":
     $total = find("total",1);
     $total['total']=$_POST['total'];
     save("total",$total);
    
     to("admin.php","do=total");
  break;

  case "bottom":
     $total = find("bottom",1);
     $total['bottom']=$_POST['bottom'];
     save("bottom",$total);
    
     to("admin.php","do=bottom");
     break;

  case "newData":

  $table=$_POST['table'];
  if(!empty($_FILES['file']['tmp_name'])){
    $data['file']=$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"./img".$data['file']);
  }

  switch($table){
    case "title":
       $data['text']=$_POST['text'];
       $data['sh']=0;
    break;
    case "mivm":
    case "image":
       $data['sh']=1;
    break;
    case "ad":
    case "news":
       $data['text']=$_POST['text'];
       $data['sh']=1;
    break;
    case "admin":
       $data['acc']=$_POST['acc'];
       $data['pw']=$_POST['pw'];
    break;
    case "menu":
       $data['text']=$_POST['text'];  
       $data['href']=$_POST['href'];  
       $data['sh']=1;
    break;   
    
  }

  save($table,$data);
  to("admin.php","do=$table");
break;

case "editData":
$table=$_POST['table'];
foreach($_POST['id'] as $key=>$id){
  if(in_array($id,$_POST['del'])){
        del($table,$id);
  }else{
    $data=find($table,$id);

    switch($table){
      case "title":
         $data['text']=$_POST['text'][$key];
         $data['sh']=($_POST['sh']==$id)?1:0;
      break;
      case "mvim":
      case "image":
         $data['sh']=(in_array($id,$_POST['sh']))?1:0;
      break;
      case "ad":
      case "news":
         $data['text']=$_POST['text'][$key];
         $data['sh']=(in_array($id,$_POST['sh']))?1:0;
      break;
      case "admin":
         $data['acc']=$_POST['acc'][$key];
         $data['pw']=$_POST['pw'][$key];
      break;
      case "menu":
         $data['text']=$_POST['text'][$key];
         $data['href']=$_POST['href'][$key];
         $data['sh']=(in_array($id,$_POST['sh']))?1:0;
      break;
    }

    save($table,$data);

  }
}

to("admin.php","do=$table");
break;

case "updateImage":
    $table=$_POST['table'];
    $image=find($table,$_POST['id']);
    
      if(!empty($_FILES['file']['tmp_name'])){
      $image['file']=$_FILES['file']['name'];
      move_uploaded_file($_FILES['file']['tmp_name'],"./img".$image['file']);
    }

    save($table,$image);
    to("admin.php","do=$table");

break;

case "editSub":
     $table=$_POST['table'];
     $parent=$_POST['parent'];
     
     if(!empty($_POST['id'])){
        foreach($_POST['id'] as $key => $id){
           if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
              del($table,$id);
           }else{
              
              $sub=find("menu",$id);
              $sub['text']=$_POST['text'][$key];
              $sub['href']=$_POST['href'][$key];  
              save("menu",$sub);            
           }
        }
     }

     if(!empty($_POST['text2'])){
        foreach($_POST['text2'] as $key => $newText){
          
          $new['text']=$newText;
          $new['href']=$_POST['href2'][$key];
          $new['parent']=$parent;
          $new['sh']=1;
          save("menu",$new);
     }
   }

   to("admin.php","do=menu");
break; 
default:

echo "非法入侵";


}

?>