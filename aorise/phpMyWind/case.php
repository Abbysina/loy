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
<script type="text/javascript" src="templates/default/js/loadimage.js"></script>
<script type="text/javascript" src="templates/default/js/top.js"></script>
<script type="text/javascript">
</script>
<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/cry.css" />
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/news.css" />
</head>
<body>
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->
<div class="subBody">
	<div class="subTitle"> <span class="catname"><?php echo GetCatName($cid); ?></span> <span class="fr">您当前所在位置：<?php echo GetPosStr($cid); ?></span>
		<div class="cl"></div>
	</div>
</div>
<!-- banner-->
<div class="container">
<div class="row">
<div class="picture"><img src="images/9.jpg"></div>
<!-- /banner-->

        <div class="show">
			     <div class="container">
			        <div class="row">
			        <?php

				$dopage->GetPage("SELECT * FROM `#@__infoimg` WHERE classid=19");
				while($row = $dosql->GetArray())
				{
					if($row['picurl'] != '') $picurl = $row['picurl'];
					else $picurl = 'templates/default/images/nofoundpic.gif';
					if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'caseshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y') $gourl = 'caseshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else $gourl = $row['linkurl'];

					$r = $dosql->GetOne("SELECT `classname` FROM `#@__infoclass` WHERE id=".$row['classid']);
					if(isset($r['classname'])) $classname = $r['classname'];
					else $classname = '';

					if($cfg_isreurl!='Y') $gourl2 = 'case.php?cid='.$row['classid'];
					else $gourl2 = 'case-'.$row['classid'].'-1.html';
				?>



                       <div class="col-lg-4 col-md-4 col-xs-4">
                  <div class="show-a">
					  <div class="show-b"><a href="<?php echo $gourl?>"><img src="<?php echo $row['picurl']; ?>" alt=""></a></div>
					     <div class="show-c"><p><?php echo $row['title']; ?><p></div>
	              </div>
               </div>
               <?php
				}
				?>
				</div>
				</div>
				</div>

<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>