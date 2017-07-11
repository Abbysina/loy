<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 2 : intval($cid);

$id = empty($id) ? 0 : intval($id);

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
<link rel="stylesheet" type="text/css" href="css/about.css" />

</head>
<body>
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->
<!-- banner-->
<div class="container">
<div class="row"> <img src="images/15.jpg"></div>
</div>
<!-- /banner-->

<!-- mainbody-->
<div class="subBody">
  <div class="subTitle"> <span class="catname"><?php echo GetCatName($cid); ?></span> 
   <?php if(empty($id))$row=$dosql->getone("SELECT * FROM `#@__infolist` where classid=21 and id=58");
         else $row=$dosql->getone("SELECT * FROM `#@__infolist` where classid=21 and id=$id");
        ?>
  <span class="fr">您当前所在位置：<?php echo GetPosStr($cid); ?>><?php echo $row['title']; ?>
  </span>
    <div class="cl"></div>
  </div>
</div>
<!-- 左侧部分 -->
       <div class="container">
           <div class="row">
              <?php $row=$dosql->getone("SELECT * FROM `#@__infolist` where id=49");
				?>
                <div class="col-lg-3 col-md-3 col-xs-3">
	                <div class="out-left">
	          	       <div class="out-left-a"><p><?php echo $row ['title'];?></p></div>
                      	  <ul>
                      		 <?php $dosql->Execute("SELECT * FROM `#@__infolist` where classid=21 and flag like '%f%'");
							  while($row = $dosql->GetArray())
								{
								//获取链接地址
								if($row['linkurl']=='' and $cfg_isreurl!='Y')
								  $gourl = 'about.php?cid='.$row['classid'].'&id='.$row['id'];
								else if($cfg_isreurl=='Y')
								  $gourl = 'about-'.$row['classid'].'-'.$row['id'].'-1.html';
								else
								  $gourl = $row['linkurl'];
									?>
                      			<li><a href="<?php echo $gourl?>"><p><?php echo $row['title']?></p></a></li>
                      			     <?php
										}
										?>
                      			</ul>
  				</div>
  				</div>
         <?php if(empty($id))$row=$dosql->getone("SELECT * FROM `#@__infolist` where classid=21 and id=58");
         else $row=$dosql->getone("SELECT * FROM `#@__infolist` where classid=21 and id=$id");
				?>
          <div class="col-lg-8 col-md-8 col-xs-8">
          	<div class="right">
                  	<div class="right-a"><p><?php echo $row['content']; ?></p></div>
            </div>
       	</div>
       	</div>
  </div>


<!-- /mainbody--> 
<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>