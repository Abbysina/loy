<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,0,0,'人才招聘'); ?>
<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/default/js/top.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/join.css" />
</head>
<body>
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->
<!-- banner-->
<div class="picture">
			<img src="images/16.jpg">
		 </div>
<!-- /banner-->
<!-- mainbody-->
<div class="subBody">
 <div class="candy-a"><p>加入奥昇</p></div>
    <div class="box">
		    <div class="container">
			    <div class="row">
			      <div class="col-lg-12 col-md-12 col-xs-12">
					<div class="box-a"><h1>前言</h1></div>
						<div class="box-b"><p>湖南奥昇信息技术有限公司专注于教育、医疗卫生等领域的软硬件开发、生产、销售、运营服务及相关大数据开发应用，为客户提供“软件+硬件+运营服务+资金”的专业综合性解决方案。 目前，公司已拥有几十项相关软件著作权，现又与多所高校及企事业单位形成产、学、研深度合作模式，助力创新研发生产、实践创新运营服务，旨在为教育、医疗卫生等领域提供一流的产品和服务。</p><br/>
			        <span>请输入职位</span>
					<input type="text" name="" value="关键字...">
					<input type="button" name="" value="搜索">
                 </div>
            </div>
        </div>
     </div>
 </div>
                <?php
					$dopage->GetPage("SELECT * FROM `#@__job` WHERE checkinfo=true ORDER BY orderid DESC",10);
					while($row = $dosql->GetArray())
					{
						if($cfg_isreurl!='Y') $gourl = 'joinshow.php?id='.$row['id'];
						else $gourl = 'joinshow-'.$row['id'].'.html';

					?>
					<div class="content">
                   <div class="container">
			           <div class="row">
			              <div class="col-lg-12 col-md-12 col-xs-12">
			                  <div class="cont-a">
				                 <p><a href="<?php echo $gourl;?>"><?php echo $row['title']?></p>
			                    </div>
		     <div class="cont-b">
		     <p>职位描述：</p>
			 <span>
			<?php echo $row['workdesc']?>
		 </span>
	 </div>
		   <div class="cont-c">
		       <span>发布时间:</span>
			   <i><?php echo GetDateMk($row['posttime']) ?></i>      <b>有效时间：</b><p>不限</p>
	             </div>
	        </div>
        </div>
    </div>
 </div>
<?php
}
?>
<?php echo $dopage->GetList(); ?>
</div>
<!-- /mainbody-->
<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>