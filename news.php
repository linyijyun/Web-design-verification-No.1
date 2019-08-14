				<div style="height:32px; display:block;"></div>
				<!--正中央-->
				<h4>更多最新消息顯示區</h4>
        <hr>

        <?php
           $all=nums("news","");
					 $div=5;
					 $pages=ceil($all/$div);
					 $now=(!empty($_GET['p']))?$_GET['p']:1;
					 $start=($now-1)*$div;
					 echo "<ol start='".($start+1)."'>";
					 $news=q("select * from news limit $start,$div");
					 foreach($news as $n){
						echo "<li class='ssww'>";
						echo mb_substr($n['text'],0,20,'utf8');

						echo "<div class='all' style='display:none'>";
						echo $n['text'];
						echo "</div>";
						echo "</li>";
					 }

        ?>
				<div style="text-align:center;">
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
				</div>
				<div id="alt"
					style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); left: 250px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
				</div>
				<script>
					$(".sswww").hover(
						function () {
							$("#alt").html("<pre>" + $(this).children(".all").html() + "</pre>").css({
								"top": $(this).offset().top-120
							})
							$("#alt").show()
						}
					)
					$(".sswww").mouseout(
						function () {
							$("#alt").hide()
						}
					)
				</script>