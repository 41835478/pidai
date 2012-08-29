<?php include template("html_header");?>
    <!--top-->
    <div class="xit_top">
         <a href="/"><img class="xit_logo" src="/static/theme/xiutuan/img/logo.jpg"  /></a>
         <?php if($INI['system']['headerimage']){?>
         <img class="xit_banner" onerror="this.src='/static/theme/xiutuan/img/xit_yangmu_04.jpg'"  src="<?php echo team_image($INI['system']['headerimage']); ?>" width="470" height="104" />
         <?php } else { ?>
         <img class="xit_banner" src="/static/theme/xiutuan/img/xit_yangmu_04.jpg" width="470" height="104" />
         <?php }?>
         <div class="xit_zxkf" style="padding-top:0px">
              <p style="text-align:left;background:url(/static/theme/xiutuan/img/xit_zxkefu.jpg) no-repeat 145px 5px;padding-top:17px;" onclick="_gaq.push(['_trackEvent','other', 'call_service', 'service']);">
              	<font class="xit_dianhua" style="width:170px;display:inline-block;padding-left:10px">4008-755-888</font>
   		       	<font style="font-size:12px"><script language="javascript" src="http://chat32.live800.com/live800/chatClient/textButton.js?jid=8641036800&companyID=131021&configID=15687&codeType=custom"></script></font>
              </p>
				<form action="/subscribe.php" method="post" id="header-subscribe-form">
					<input type="hidden" name="city_id" value="<?php echo $city['id']; ?>" />
					<input type="hidden" value="1" name="cityid" />
					<input id="header-subscribe-email" type="text" class="xit_text" name="email" xtip="输入Email，订阅每日团购信息..." value="" /><input type="button" class="xit_butn" onclick="javascript:$('#header-subscribe-form').submit();pageTracker._gaq.push(['_trackEvent','subscribe', 'add_sub', 'email_sub']);"  style="<?php echo strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 8.0')?'height:24px;':''; ?>" />
              	</form>
              <p class="xit_tuiding"><a href="#" onclick="X.miscajax('sms','subscribe');_gaq.push(['_trackEvent','subscribe', 'add_sub', 'mobile_sub']);">>>团购短信，免费订阅</a>|<a href="#" class="xit_td" onclick="javascript:X.miscajax('sms','unsubscribe');_gaq.push(['_trackEvent','subscribe', 'cancel_sub', 'cancel_mobile_sub']);">退订</a></p>
         </div>
    </div>
    
<!--menu-->
    <div class="xit_menu">
         <div class="xit_menu_daohang">
              <ul>
			   <ul>
              <?php include template("block_navigator");?>
              </ul>
               
                  
            
              <?php if(!$login_user){?>
              <div class="xit_liwu" >
              	<span><a href="/account/invite.php">邀请好友购买返利10元</a></span> 
              	<a href="/account/login.php">登录</a><a href="/account/signup.php">注册</a>
              </div>
              <?php } else { ?>
	              <?php if(mb_strlen($login_user['username'],'utf-8')>=16){?>
	              <div class="xit_liwu" style="background:none">
	              <?php } else { ?>
	              <div class="xit_liwu">
	              	<span><a href="/account/invite.php">邀请好友购买返利10元</a></span>
	              <?php }?>
              	<span>&nbsp;&nbsp;&nbsp;&nbsp;欢迎您，<?php echo $login_user['username']; ?>！ </span>
              	<span class="xit_wdexiut"><a href="/order/index.php" onmouseover="changeBody(0)" onmouseout="changeBody(1)">我的秀团</a></span>
              	<span class="xit_tuichu"><a href="/account/logout.php">退出</a></span>
              <div id="xit_uldingwei" onmouseover="changeBody(0)" onmouseout="changeBody(1)" >
                      <div class="hide">
                          <ul>
							<li><a href="/order/index.php">我的订单</a></li>
							<li><a href="/account/refer.php">我的邀请</a></li>
							<li><a href="/credit/index.php">账户余额</a></li>
							<li><a href="/account/settings.php">账户设置</a></li>
							<li><a href="/account/cards.php">我的优惠券</a></li>
                          </ul>
                      </div>    
              </div>
              </div>
              
           <?php }?>
         </div>
    </div>
    
    
<?php if($session_notice=Session::Get('notice',true)){?>
<div class="sysmsgw" id="sysmsg-success">
  <div class="sysmsg">
    <p><?php echo $session_notice; ?></p>
    <span class="close">关闭</span></div>
</div>
<?php }?>
<?php if($session_notice=Session::Get('error',true)){?>
<div class="sysmsgw" id="sysmsg-error">
  <div class="sysmsg">
    <p><?php echo $session_notice; ?></p>
    <span class="close">关闭</span></div>
</div>
<?php }?>