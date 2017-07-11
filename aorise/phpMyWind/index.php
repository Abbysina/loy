<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(); ?>
<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/default/js/slideplay.js"></script>
<script type="text/javascript" src="templates/default/js/srcollimg.js"></script>
<script type="text/javascript" src="templates/default/js/loadimage.js"></script>
<script type="text/javascript" src="templates/default/js/top.js"></script>
<script type="text/javascript"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/head.css" />
	<link rel="stylesheet" href="css/cry.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--end 导航栏 -->
  <div id="myCarousel" class="carousel slide">
				    <!-- 轮播（Carousel）指标 -->
				    <ol class="carousel-indicators">
				        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				        <li data-target="#myCarousel" data-slide-to="1"></li>
				        <li data-target="#myCarousel" data-slide-to="2"></li>
				    </ol>
				    <!-- 轮播（Carousel）项目 -->
				    <div class="carousel-inner">
				        <div class="item active">
				            <img src="images/banner1.jpg" alt="First slide">
				        </div>
				        <div class="item">
				            <img src="images/banner2.jpg" alt="second slide">
				        </div>
				        <div class="item">
				            <img src="images/banner3.jpg" alt="third slide">
				        </div>
				    </div>
				    <!-- 轮播（Carousel）导航 -->
				    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
				     <img src="images/left-arrow.png" alt="">
				    </a>
				    <a class="carousel-control right" href="#myCarousel"
				        data-slide="next">
				        <img src="images/right-arrow.png" alt="">
				    </a>
				  </div><!-- end 轮播图 -->
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->
				<div class="content">

				<!-- 查询表infoclass当ID=14得到一条数据 -->
				<?php $row=$dosql->getone("SELECT * FROM `#@__infoclass` WHERE id=14");
				?>
				   <div class="cont-a">
				   <!-- 调用链接 -->
						<a href="<?php echo $row['linkurl']; ?>">
					<!-- 调用描述 -->
						 <?php echo $row['description']; ?></a>
		           </div>

					  <div class="cont-b"></div>
						 <div class="content-a">
						    <div class="container">
							   <div class="row">
							   <?php $dosql->Execute("SELECT * FROM `#@__infolist`WHERE classid=14");
									while($row = $dosql->GetArray())
									{
										//获取链接地址
										if($row['linkurl']=='' and $cfg_isreurl!='Y')
											$gourl = 'newsshow.php?cid.php?cid='.$row['classid'].'&id='.$row['id'];
										else if($cfg_isreurl=='Y')
											$gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
										else
											$gourl = $row['linkurl'];
									?>
			    <div class="col-lg-4 col-md-4 col-xs-4">
                    <div class="s-content">
					  <div class="image"><a href="<?php echo $gourl?>"><img src="<?php echo $row['picurl']; ?>" alt="教育"></a></div>
					    <div class="title"><?php echo $row['title']; ?></div>
	               </div>
           </div>
           <?php
				}
				?>
		  		  </div>
		     </div>
		</div>
	</div>

				 <div class="content">
				 <!-- 查询表infoclass当ID=14得到一条数据 -->
				<?php $row=$dosql->getone("SELECT * FROM `#@__infolist` WHERE id=49");
				?>
			      <div class="cont-a">
			      	 <!-- 调用链接对应的 关于我们about.php -->
						<a href="<?php echo $row['linkurl']; ?>">
					<!-- 调用描述 关于我们 / About Us More-->
					 <?php echo $row['title']; ?></a>
			      </div>
			           <div class="cont-b"></div>
			              <div class="content-b">
			                  <div class="container">
			                      <div class="row">
									<?php $dosql->Execute("SELECT * FROM `#@__infolist`WHERE classid=21 and flag like '%j%' ");
									while($row = $dosql->GetArray())
										{
											//获取链接地址
											if($row['linkurl']=='' and $cfg_isreurl!='Y')
												$gourl = 'about.php?cid='.$row['classid'].'&id='.$row['id'];
											else if($cfg_isreurl=='Y')
												$gourl = 'about-'.$row['classid'].'-'.$row['id'].'-1.html';
											else
												$gourl = $row['linkurl'];

											//获取缩略图地址
											if($row['picurl']!='')
												$picurl = $row['picurl'];
											else
												$picurl = 'templates/default/images/nofoundpic.gif';
										?>
		<div class="col-lg-3 col-md-3 col-xs-3">
             <div class="colog">
		 <div class="pictur"><a href="<?php echo $gourl?>"><img src="<?php echo $row['picurl']; ?>" alt=""></a></div>
					   <div class="title-a"><?php echo $row['title']; ?></div>
					  			         </div>
					                </div>
					             <?php
								}
							?>
				       </div>
				</div>
		 </div>
</div>


				<div class="content">
				 <!-- 查询表infoclass当ID=14得到一条数据 -->
				<?php $row=$dosql->getone("SELECT * FROM `#@__infoclass` WHERE id=16");
				?>
			       <div class="cont-a">
			       	<!-- 调用链接对应的 新闻资讯about.php -->
						<a href="<?php echo $row['linkurl']; ?>">
					<!-- 调用描述 新闻资讯 / About Us More-->
						 <?php echo $row['description']; ?></a>
			       </div>
			          <div class="cont-b"></div>
			            <div class="content-c">
                           <div class="container">
			                  <div class="row">
			                  <?php $row=$dosql->getone("SELECT * FROM `#@__infolist` where classid=16");
				?>
			                     <div class="col-lg-6 col-md-6 col-xs-6">
	                                <div class="news">
	                                   <div class="new-c"><a href="#"><img src="<?php echo $row['picurl']; ?>" alt=""></a>
		                                   <p><?php echo $row['description']; ?><br/>
                                             </p>
                                       </div>
                                  </div>
                          </div>

	        <div class="col-lg-6 col-md-6 col-xs-6">
	            <div class="news">
				    <div class="new-d">
                            <ul>
								     <?php $dosql->Execute("SELECT * FROM `#@__infolist`WHERE classid=16");
									while($row = $dosql->GetArray())
									{
										//获取链接地址
										if($row['linkurl']=='' and $cfg_isreurl!='Y')
											$gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
										else if($cfg_isreurl=='Y')
											$gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
										else
											$gourl = $row['linkurl'];
									?>
                            </ul>
                            <li><p></p><a href="#"><?php echo $row['title']?><time> <?php echo GetDateMk($row['posttime']) ?></time></a></li>
                             <?php
				}
				?>
                   </div>
                </div>
            </div>
          </div>
       </div>
     </div>
  </div>


<?php require_once('footer.php'); ?>
</body>
</html>
