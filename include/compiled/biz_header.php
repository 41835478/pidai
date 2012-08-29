<?php include template("biz_html_header");?>
<script type="text/javascript" src="/static/js/xheditor/xheditor.js"></script> 
<style type="text/css">
#logo{padding-top:23px;padding-left:31px;}
#logo a{ background:url(/static/css/i/logo.png) no-repeat;_background:transparent;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/static/css/i/logo.png');width:304px; height:57px; display:block;}
#hd .guides{position:absolute;left:354px;top:54px;z-index:2;}
#hd .city{float:left;width:73px;height:25px;line-height:25px;background:url(/static/css/i/bg-guides-city.gif) no-repeat 0 0;}
#hd .city h2{text-align:center;color:#fff;}
#hd .nav{position:absolute;top:105px;left:0;padding-left:8px;}
</style>
<div id="hdw">
	<div id="hd">
		<div id="logo"><a href="/index.php" class="link">&nbsp;</a></div>
		<div class="guides">
			<div class="city">
				<h2>商户后台</h2>
			</div>
		</div>
		<ul class="nav cf"><?php echo current_biz(); ?></ul>
		<?php if(is_partner()){?>
		<div class="logins">
			<ul class="links">
				<li class="username">欢迎您，<?php echo $login_partner['title']; ?>！</li>
				<li class="logout"><a href="/biz/logout.php">退出</a></li>
			</ul>
			<div class="line islogin"></div>
		</div>
		<?php }?>
	</div>
</div>

<?php if($session_notice=Session::Get('notice',true)){?>
<div class="sysmsgw" id="sysmsg-success"><div class="sysmsg"><p><?php echo $session_notice; ?></p><span class="close">关闭</span></div></div> 
<?php }?>
<?php if($session_notice=Session::Get('error',true)){?>
<div class="sysmsgw" id="sysmsg-error"><div class="sysmsg"><p><?php echo $session_notice; ?></p><span class="close">关闭</span></div></div> 
<?php }?>
