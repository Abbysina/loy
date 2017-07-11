 //先写function
 $(function(){
//然后找到ul class 名称点击li的
   $(".heart-a li").click(function(){
  //申明变量 命个名字
  var note=$(this).attr("num");
  //打印信息输出，点击哪个按钮就会出现对应的数字
  console.log(note);
  //给li 标签的actived 添加样式 addClass  删除样式removeClass
  $(this).addClass("actived").siblings().removeClass("actived");
  //给div里面取得名字 heart 用fadeOut方法使它消失
  $(".heart").fadeOut("500",function(){
//给图片加fadeOut .css

 $(this).css({background:"url(./images/banner"+note+".jpg)"}).fadeIn("500");

  })

   })


})