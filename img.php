<?php

  $text=$_REQUEST["text"];//��ʾ������

  $size=$_REQUEST["dx"];//�����С
  
  $chang=$_REQUEST["chang"];

  $font="c:/windows/fonts/SIMHEI.TTF";//�������ͣ�����Ϊ���壬��������windows/fonts�ļ����У�����Ӧ��font�ļ�

  $img=imagecreate(500,16);//����һ����Ϊ500��Ϊ16�Ŀհ�ͼƬ

  imagecolorallocate($img,0xff,0xff,0xff);//����ͼƬ������ɫ�����ﱳ����ɫΪ#ffffff��Ҳ���ǰ�ɫ

  $black=imagecolorallocate($img,0x00,0x00,0x00);//����������ɫ������Ϊ#000000��Ҳ���Ǻ�ɫ

  imagettftext($img,$size,0,0,16,$black,$font,$text);//��ttf����д��ͼƬ��

  header('Content-Type: image/png');//����ͷ��Ϣ

  imagepng($img);//���ͼƬ�����pngʹ��imagepng���������gifʹ��imagegif����

?>