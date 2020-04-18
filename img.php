<?php

  $text=$_REQUEST["text"];//显示的文字

  $size=$_REQUEST["dx"];//字体大小
  
  $chang=$_REQUEST["chang"];

  $font="c:/windows/fonts/SIMHEI.TTF";//字体类型，这里为黑体，具体请在windows/fonts文件夹中，找相应的font文件

  $img=imagecreate(500,16);//创建一个长为500高为16的空白图片

  imagecolorallocate($img,0xff,0xff,0xff);//设置图片背景颜色，这里背景颜色为#ffffff，也就是白色

  $black=imagecolorallocate($img,0x00,0x00,0x00);//设置字体颜色，这里为#000000，也就是黑色

  imagettftext($img,$size,0,0,16,$black,$font,$text);//将ttf文字写到图片中

  header('Content-Type: image/png');//发送头信息

  imagepng($img);//输出图片，输出png使用imagepng方法，输出gif使用imagegif方法

?>