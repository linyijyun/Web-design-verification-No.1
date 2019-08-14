<?php

if(!empty($_POST['acc']) && !empty($_POST['pw'])){

	$acc=$_POST['acc'];
	$pw=$_POST['pw'];
	$chkAcc=nums("admin",['acc'=>$acc,'pw'=>$pw]);
	if($chkAcc>0){
		$_SESSION['login']=$acc;
		to("admin.php","do=title");
	}else{
		echo "<script>alert('帳號或密碼輸入錯誤')</script>";
	}
}


?>
				
				<div style="height:32px; display:block;"></div>
				<!--正中央-->
				<form method="post" action="?do=login">
					<p class="t botli">管理員登入區</p>
					<p class="cent">帳號 ： <input name="acc" autofocus="" type="text"></p>
					<p class="cent">密碼 ： <input name="pw" type="password"></p>
					<p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
				</form>