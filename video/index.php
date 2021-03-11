<?php include ('data.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php echo $aik['title'];?></title>

	<link rel="stylesheet" href="css/head.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
		<div class="main">
			<div class="parse">
				<input id="url" class="import" type="text" placeholder="请粘贴视频网址">
				<select name="" id="jk">
					<option value="<?php echo $aik['jiekou1'];?>" selected>
								<?php echo $aik['jiekou1name'];?>
							</option>
							<option value="<?php echo $aik['jiekou2'];?>">
								<?php echo $aik['jiekou2name'];?>
							</option>
							<option value="<?php echo $aik['jiekou3'];?>">
								<?php echo $aik['jiekou3name'];?>
							</option>
							<option value="<?php echo $aik['jiekou4'];?>">
								<?php echo $aik['jiekou4name'];?>
							</option>
							<option value="<?php echo $aik['jiekou5'];?>">
								<?php echo $aik['jiekou5name'];?>
							</option>
							<option value="<?php echo $aik['jiekou6'];?>">
								<?php echo $aik['jiekou6name'];?>
							</option>
							<option value="<?php echo $aik['jiekou7'];?>">
								<?php echo $aik['jiekou7name'];?>
							</option>
							<option value="<?php echo $aik['jiekou8'];?>">
								<?php echo $aik['jiekou8name'];?>
							</option>
							<option value="<?php echo $aik['jiekou9'];?>">
								<?php echo $aik['jiekou9name'];?>
							</option>
							<option value="<?php echo $aik['jiekou10'];?>">
								<?php echo $aik['jiekou10name'];?>
							</option>
				</select>
				
				<input class="btn" onclick="play()" type="submit" value="解析">
				
			</div>
	
			<!-- https://www.jqaaa.com/jq3/index.php?url=http://v.youku.com/v_show/id_XMTY1Njc5MTgwOA==.html -->
			<div class="tv-title">
				<span>正在播放🔊:</span>
				<h1 id="video-title">请粘贴输入原视频链接到视频框上方</h1>
			</div>
			<div class="video">
				<iframe id="palybox" src="<?php echo $aik['jiekou1'];?><?php echo $aik['maurl'];?>" allowtransparency frameborder="0" scrolling="no" width="100%" height="600" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
			</div>
		</div>
		<ul class="sidebar">
			<li><a href="#" class="go-top"><i class="icon-svg"></i>顶部</a></li>
		</ul>
	</div>

	
	<script src="js/jquery.js"></script>
	<script src="js/tv-yuanmeng.js"></script>
	
</html>