<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 18 : intval($cid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,$cid); ?>
<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/default/js/top.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/cry.css" />
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/soution.css" />
</head>
<body>
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->
<!-- banner-->
<div class="container">
<div class="row"> <img src="images/4.jpg"></div>
</div>
<!-- /banner-->

<!-- mainbody-->
<div class="subBody">
	<div class="subTitle"> <span class="catname"><?php echo GetCatName($cid); ?></span> <span class="fr">您当前所在位置：<?php echo GetPosStr($cid); ?></span>
		<div class="cl"></div>
	</div>
</div>
<!-- 中间内容 -->
<
		<div class="container">

			  <?php
				$dopage->GetPage("SELECT * FROM `#@__infolist` WHERE (classid=$cid OR parentstr LIKE '%,$cid,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC",8);
				while($row = $dosql->GetArray())
				{
					if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y') $gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else $gourl = $row['linkurl'];

					$row2 = $dosql->GetOne("SELECT `classname` FROM `#@__infoclass` WHERE `id`=".$row['classid']);
					if($cfg_isreurl!='Y') $gourl2 = 'news.php?cid='.$row['classid'];
					else $gourl2 = 'news-'.$row['classid'].'-1.html';
				?>
			    <div class="row">
			        <div class="col-lg-4 col-md-4 col-xs-4">
			            <div class="past-c"><a href="<?php echo $gourl?>"><img src="<?php echo $row['picurl']; ?>"></div>
		       		</div>
		  			<div class="col-lg-8 col-md-8 col-xs-8">
			    		<div class="past-d"><a href="<?php echo $gourl?>"><h2><?php echo $row['title']; ?></h2></a><p>
						     时间：2017-03-28<br/>
							<?php echo $row['content'];?> </p>
						</div>
			        </div>
			    </div>
			          <?php
				      }
				    ?>
			</div>


<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>