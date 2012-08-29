<?php include template("header");?>
<style type="text/css">
#maincol .head{padding:0 10px 10px;}
#maincol .head h2{display:inline;padding-left:10px;font-size:2em;}
#maincol .head .headtip{margin-left:20px;font-size:16px;font-weight:bold;}


#maincol .head{position:relative;}
#maincol .filter{position:absolute;top:25px;right:10px;}
#maincol .filter li{float:left;margin:0 5px 0 0;font-size:12px;}
#maincol .filter a{padding:3px 1px;}
#maincol .filter .current a{padding:3px 7px;background:#00ADB2;color:#fff;-moz-border-radius:2px;-webkit-border-radius:2px;}

#maincol .sect{padding:20px 10px 50px;border-top:1px solid #def;}
#maincol .sect .link_img img{ width:88px; height:31px;}
#maincol .faq .sect .intro a{color:#FF4E00;text-decoration:none;}
#maincol .faq .sect .intro a:hover{text-decoration:underline;}
</style>
<div id="bd" class="cf">
  <!-- end brand tuan -->
<div id="maincol">
<div class="faq">
<div class="faq_tit">
<ul><?php echo current_about('link'); ?></ul>
</div>

                <div class="head"><h2>友情链接</h2></div>

                <div class="sect">				
<div class="link"><h2><img src="/static/theme/xiutuan/css/images/link_img.png" alt="图片链接"/></h2>
<ul class="link_img">
    <?php if(is_array($logos)){foreach($logos AS $one) { ?>
        <li><a href="<?php echo $one['url']; ?>" title="<?php echo $one['title']; ?>" target="_blank"><img src="<?php echo $one['logo']; ?>" alt="<?php echo $one['title']; ?>" /></a></li>
    <?php }}?>
</ul>
<h2><img src="/static/theme/xiutuan/css/images/link_word.png" alt="文字链接"/></h2>
<div class="link_word"> 
	<?php if(is_array($texts)){foreach($texts AS $one) { ?>
        <a href="<?php echo $one['url']; ?>" title="<?php echo $one['title']; ?>" target="_blank"><?php echo $one['title']; ?></a>
    <?php }}?>
</div>

<div class="intro">
					<p>1、不链接有反动、色情、赌博等不良内容或提供不良内容链接的网站，以及网站名称或内容违反国家有关政策法规的网站；</p>
					<p>2、不链接含有病毒、木马，弹出插件或恶意更改他人电脑设置的网站、及有多个弹窗广告的网站；</p>
					<p>3、不链接网站名称和实际内容不符的网站，如贵站正在建设中，或尚未明确主题的网站，请不必现在申请收录，欢迎您在贵站建设完毕后再申请；</p>
					<p>4、不链接非顶级域名、挂靠其他站点、无实际内容，只提供域名指向的网站或仅有单页内容的网站；</p>
					<p>5、不链接在正常情况下无法访问的网站；</p>
					<p>6、注意：<a href="/feedback/suggest.php">提交申请</a>前请做好本站的链接，否则不予通过。</p>
				</div>
</div>
</div>

</div>
</div>
<!-- end left -->
<div id="view-right"> 
<?php include template("view_right");?>
</div>
<!-- end right -->

</div>
<?php include template("footer");?>
