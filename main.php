<?php

$do=(!empty($_GET['do']))?$_GET['do']:"title";

switch($do){
  case "title":
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
					<p class="t cent botli">網站標題管理</p>
					<form method="post" action="api.php?do=editData">
						<table width="100%" class="cent">
							<tbody>
								<tr class="yel">
									<td width="45%">網站標題</td>
									<td width="23%">替代文字</td>
									<td width="7%">顯示</td>
									<td width="7%">刪除</td>
									<td></td>
								</tr>
                 <?php
                     $rows=all("title","");
                     foreach($rows as $r){
                      $chk=($r['sh']==1)?"checked":"";         
                 ?>

                <tr>
									<td width="45%"><img src="./img/<?=$r['file'];?>" style="width:300px;height:30px"></td>
									<td width="23%"><input type="text" name="text[]" value="<?=$r['text'];?>"></td>
									<td width="7%"><input type="radio" name="sh" value="<?=$r['id'];?>" <?=$chk;?>></td>
									<td width="7%"><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
									<td><input type="button" value="更新圖片" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=updateTitle&id=<?=$r['id'];?>&#39;)"></td>
                  <input type="hidden" name="id[]" value="<?=$r['id'];?>">
								</tr>
                <?php
                 }
                ?>
							</tbody>
						</table>
						<table style="margin-top:40px; width:70%;">
							<tbody>
								<tr>
                 <input type="hidden" name="table" value="title">
									<td width="200px"><input type="button"
											onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=title&#39;)" value="新增網站標題圖片"></td>
									<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
								</tr>
							</tbody>
						</table>

					</form>
				</div>
      
  <?php
    break;
    case "ad":
    ?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
					<p class="t cent botli">動態文字廣告管理</p>
					<form method="post" action="api.php?do=editData">
						<table width="100%" class="cent">
							<tbody>
								<tr class="yel">
									<td width="23%">動態文字廣告</td>
									<td width="7%">顯示</td>
									<td width="7%">刪除</td>
									<td></td>
								</tr>
                 <?php
                     $rows=all("ad","");
                     foreach($rows as $r){
                      $chk=($r['sh']==1)?"checked":"";         
                 ?>

                <tr>
									<td width="68%"><input type="text" name="text[]" value="<?=$r['text'];?>" style="width:90%"></td>
									<td width="7%"><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=$chk;?>></td>
									<td width="7%"><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
                  <input type="hidden" name="id[]" value="<?=$r['id'];?>">
								</tr>
                <?php
                 }
                ?>
							</tbody>
						</table>
						<table style="margin-top:40px; width:70%;">
							<tbody>
								<tr>
                 <input type="hidden" name="table" value="ad">
									<td width="200px"><input type="button"
											onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=ad&#39;)" value="新增動態文字廣告"></td>
									<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
								</tr>
							</tbody>
						</table>

					</form>
				</div>
      
  <?php
    break;
    case "mvim":
    ?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
					<p class="t cent botli">動畫圖片管理</p>
					<form method="post" action="api.php?do=editData">
						<table width="100%" class="cent">
							<tbody>
								<tr class="yel">
									<td width="45%">動畫圖片</td>
									<td width="7%">顯示</td>
									<td width="7%">刪除</td>
									<td></td>
								</tr>
                 <?php
                     $rows=all("mvim","");
                     foreach($rows as $r){
                      $chk=($r['sh']==1)?"checked":"";         
                 ?>

                <tr>
									<td width="45%"><embed src="./img/<?=$r['file'];?>" style="width:120px;height:80px"></td>
									<td width="7%"><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=$chk;?>></td>
									<td width="7%"><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
									<td><input type="button" value="更換動畫" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=updateMvim&id=<?=$r['id'];?>&#39;)"></td>
                  <input type="hidden" name="id[]" value="<?=$r['id'];?>">
								</tr>
                <?php
                 }
                ?>
							</tbody>
						</table>
						<table style="margin-top:40px; width:70%;">
							<tbody>
								<tr>
                 <input type="hidden" name="table" value="mvim">
									<td width="200px"><input type="button"
											onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=mvim&#39;)" value="新增動畫圖片"></td>
									<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
								</tr>
							</tbody>
						</table>

					</form>
				</div>
      
  <?php
    break;
    case "image":
    ?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
					<p class="t cent botli">校園映像資料管理</p>
					<form method="post" action="api.php?do=editData">
						<table width="100%" class="cent">
							<tbody>
								<tr class="yel">
									<td width="68%">校園映像資料圖片</td>
									<td width="7%">顯示</td>
									<td width="7%">刪除</td>
									<td></td>
								</tr>
                 <?php
                     $all=nums("image","");
                     $div=3;
                     $pages=ceil($all/$div);
                     $now=(!empty($_GET['p']))?$_GET['p']:1;
                     $start=($now-1)*$div;
                     
                     $rows=q("select * from image limit $start,$div");
                     foreach($rows as $r){
                      $chk=($r['sh']==1)?"checked":"";         
                 ?>

                <tr>
									<td width="68%"><img src="./img/<?=$r['file'];?>" style="width:100px;height:68px"></td>
									<td width="7%"><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=$chk;?>></td>
									<td width="7%"><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
									<td><input type="button" value="更換圖片" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=updateImage&id=<?=$r['id'];?>&#39;)"></td>
                  <input type="hidden" name="id[]" value="<?=$r['id'];?>">
								</tr>
                <?php
                 }
                ?>
                <tr>
                <td colspan="4">
                   <?php
                   
                     if(($now-1)>0){
                       echo "<a href='?do=image&p=".($now-1)."'> < </a>";
                     }
                     for($i=1;$i<=$pages;$i++){
                         if($now==$i){
                           echo "<span style='font-size:20px'> $i </span>";
                         }else{

                          echo "<a href='?do=image&p=$i'> $i </a>";
                         }
                     }
                     if(($now+1)<=$pages){
                       echo "<a href='?do=image&p=".($now+1)."'> > </a>";
                     }
                  ?>
        
                  </td>
                </tr>
							</tbody>
						</table>
						<table style="margin-top:40px; width:70%;">
							<tbody>
								<tr>
                 <input type="hidden" name="table" value="image">
									<td width="200px"><input type="button"
											onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=image&#39;)" value="新增校園映像圖片"></td>
									<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
								</tr>
							</tbody>
						</table>

					</form>
				</div>
      
  <?php
    break;
    case "total":
    ?>
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
              <p class="t cent botli">進站總人數管理</p>
              <form method="post" action="api.php?do=total">
                <table width="100%" class="cent">
                  <tbody>
                    <tr class="yel">
                      <td wihth="50%" style="text-align:right">進站總人數：</td>
                      <td wihth="50%" style="text-align:left"><input type="text" name="total" value="<?=find("total",1)['total'];?>"></td>
                    </tr>
                    
                  </tbody>
                </table>
                <table style="margin-top:40px; width:70%;">
                  <tbody>
                    <tr>
                      <td width="200px"></td>
                      <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                    </tr>
                  </tbody>
                </table>
    
              </form>
            </div>
          
      <?php
    break;
    case "bottom":
    ?>
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
              <p class="t cent botli">頁尾版權資料管理</p>
              <form method="post" action="api.php?do=bottom">
                <table width="100%" class="cent">
                  <tbody>
                    <tr class="yel">
                      <td wihth="50%" style="text-align:right">頁尾版權資料：</td>
                      <td wihth="50%" style="text-align:left"><input type="text" name="total" value="<?=find("bottom",1)['bottom'];?>"></td>
                    </tr>
                    
                  </tbody>
                </table>
                <table style="margin-top:40px; width:70%;">
                  <tbody>
                    <tr>
                      <td width="200px"></td>
                      <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                    </tr>
                  </tbody>
                </table>
    
              </form>
            </div>
          
      <?php
    break;
    case "news":
    ?>
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
              <p class="t cent botli">最新消息資料管理</p>
              <form method="post" action="api.php?do=editData">
                <table width="100%" class="cent">
                  <tbody>
                    <tr class="yel">
                      <td width="68%">最新消息資料內容</td>
                      <td width="7%">顯示</td>
                      <td width="7%">刪除</td>
                      <td></td>
                    </tr>
                     <?php
                         $all=nums("news","");
                         $div=5;
                         $pages=ceil($all/$div);
                         $now=(!empty($_GET['p']))?$_GET['p']:1;
                         $start=($now-1)*$div;
                         
                         $rows=q("select * from news limit $start,$div");
                         foreach($rows as $r){
                          $chk=($r['sh']==1)?"checked":"";         
                     ?>
    
                    <tr>
                      <td width="68%"><textarea name="text[]" cols="50" rows="3"><?=$r['text'];?></textarea></td>
                      <td width="7%"><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=$chk;?>></td>
                      <td width="7%"><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
                      <input type="hidden" name="id[]" value="<?=$r['id'];?>">
                    </tr>
                    <?php
                     }
                    ?>
                  <tr>
                   <td colspan="3">
                   <?php
                   
                     if(($now-1)>0){
                       echo "<a href='?do=news&p=".($now-1)."'> < </a>";
                     }
                     for($i=1;$i<=$pages;$i++){
                         if($now==$i){
                           echo "<span style='font-size:20px'> $i </span>";
                         }else{

                          echo "<a href='?do=news&p=$i'> $i </a>";
                         }
                     }
                     if(($now+1)<=$pages){
                       echo "<a href='?do=news&p=".($now+1)."'> > </a>";
                     }
                  ?>
        
                  </td>
                </tr>
                  </tbody>
                </table>
                <table style="margin-top:40px; width:70%;">
                  <tbody>
                    <tr>
                     <input type="hidden" name="table" value="news">
                      <td width="200px"><input type="button"
                          onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=news&#39;)" value="新增最新消息資料"></td>
                      <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                    </tr>
                  </tbody>
                </table>
    
              </form>
            </div>
          
      <?php
   

    break;
    case "admin":
    ?>
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
              <p class="t cent botli">管理者帳號管理</p>
              <form method="post" action="api.php?do=editData">
                <table width="100%" class="cent">
                  <tbody>
                    <tr class="yel">
                      <td width="40%">帳號</td>
                      <td width="40%">密碼</td>
                      <td width="7%">刪除</td>
                      <td></td>
                    </tr>
                     <?php
                         $rows=all("admin","");
                         foreach($rows as $r){
                                 
                     ?>
    
                    <tr>
                      <td width="40%"><input type="text" name="acc[]" value="<?=$r['acc'];?>"></td>
                      <td width="40%"><input type="password" name="pw[]" value="<?=$r['pw'];?>"></td>
                      <td width="7%"><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
                      <input type="hidden" name="id[]" value="<?=$r['id'];?>">
                    </tr>
                    <?php
                     }
                    ?>
                  </tbody>
                </table>
                <table style="margin-top:40px; width:70%;">
                  <tbody>
                    <tr>
                     <input type="hidden" name="table" value="admin">
                      <td width="200px"><input type="button"
                          onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=admin&#39;)" value="新增管理帳號"></td>
                      <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                    </tr>
                  </tbody>
                </table>
    
              </form>
            </div>
          
      <?php
   

    break;
    case "menu":
    ?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
					<p class="t cent botli">選單管理</p>
					<form method="post" action="api.php?do=editData">
						<table width="100%" class="cent">
							<tbody>
								<tr class="yel">
									<td width="30%">主選單名稱</td>
									<td width="30%">選單連結網址</td>
									<td width="10%">次選單</td>
									<td width="10%">顯示</td>
									<td width="10%">刪除</td>
									<td></td>
								</tr>
                 <?php
                     $rows=all("menu",['parent'=>0]);
                     foreach($rows as $r){
                      $chk=($r['sh']==1)?"checked":"";         
                 ?>

                <tr>
									<td width="30%"><input type="text" name="text[]" value="<?=$r['text'];?>"></td>
									<td width="30%"><input type="text" name="href[]" value="<?=$r['href'];?>"></td>
									<td width="10%"><?=nums("menu",['parent'=>$r['id']]);?></td>
									<td width="10%"><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=$chk;?>></td>
									<td width="10%"><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
									<td><input type="button" value="編輯次選單" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=subMenu&id=<?=$r['id'];?>&#39;)"></td>
                  <input type="hidden" name="id[]" value="<?=$r['id'];?>">
								</tr>
                <?php
                 }
                ?>
							</tbody>
						</table>
						<table style="margin-top:40px; width:70%;">
							<tbody>
								<tr>
                 <input type="hidden" name="table" value="menu">
									<td width="200px"><input type="button"
											onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=menu&#39;)" value="新增主選單"></td>
									<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
								</tr>
							</tbody>
						</table>

					</form>
				</div>
      
  <?php
   

    break;
    case "logout":
       unset($_SESSION['login']);
       to("index.php","do=login");

    break;
    


      }

      ?>