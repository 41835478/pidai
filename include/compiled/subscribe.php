<?php include template("header");?>
<div id="bd" class="cf">
  <!-- end brand tuan -->
<div id="maincol">
<div class="consult-list">
    <h2><img src="/static/theme/xiutuan/css/images/tit_subscribe.png" /></h2>
	<div class="subscribe_box">
	<h3>把每天最新的精品团购信息发到您的邮箱。</h3>
	<div class="subscribe_form">
	<div class="subscribe_form_t"></div>
	<div class="subscribe_form_c">
	<div class="bg_s_form">
    <script>
function   checkForm(){ 
			var   email=document.emailform.email.value; 
			var   pattern=/^([a-zA-Z0-9])+@([a-zA-Z0-9])+\.([a-zA-Z0-9])+/; 
			flag=pattern.test(email); 
			
			if(flag) 
			{ 
				document.emailform.submit();
			} else{ 
				alert( '邮件格式不正确! '); 
				document.emailform.email.focus(); 
				return   false; 
			} 
} 


    </script>
  <form action="/subscribe.php" method="post" id="subscribe-form" name="emailform">
      <input type="hidden" name="city_id" value="<?php echo $city['id']; ?>" />
	 <input id="subscribe-email" type="text" xtip="输入Email，订阅每日团购信息..." value=""  class="inputw" name="email" />
	 <input type="hidden" value="1" name="cityid" />
     <a href="#" onclick="javascript:checkForm();_gaq.push(['_trackEvent','subscribe', 'add_sub', 'email_sub']);"><img src="/static/theme/xiutuan/css/images/but_subscribe.gif" border="0" /></a>
      </form>
  <p>请放心，我们和您一样讨厌垃圾邮件</p>
  <p style="margin-top:10px;">
  <?php if(option_yes('smssubscribe')){?>
<a href="#" onclick="javascript:_gaq.push(['_trackEvent','subscribe', 'add_sub', 'mobile_sub']);"><img onclick="X.miscajax('sms','subscribe');" src="/static/theme/xiutuan/css/images/subscribe.gif" alt="短信订阅，免费" border="0" /></a>&nbsp;
<a href="#" onclick="X.miscajax('sms','unsubscribe');_gaq.push(['_trackEvent','subscribe', 'cancel_sub', 'cancel_mobile_sub']);">取消短信订阅</a>
<?php }?>
   </div>
   </div>
	<div class="subscribe_form_b"></div>
	</div>
	
	<h3>收不到邮件？请将ev56@fozmail.com 加入白名单</h3>
	<p>第一步：打开邮箱，点击网页右上角的“设置”；<br />
第二步：找到各个邮箱的“白名单设置”并点击；<br />
第三步：在“白名单设置”之“添加到白名单”中填写上“ev56@fozmail.com ”，并点击“添加”按钮。<br />
<span class="cOrange">注意：各个邮箱设置方式都不相同，请区别设置。</span></p>
	
	<h3 style="margin-top:20px;">现在就去设置吧：</h3>
	<p class="link_mail">
	<a href="http://mail.qq.com" target="_blank"><img src="/static/theme/xiutuan/css/images/mail01.gif" border="0" /></a>
	<a href="http://email.163.com/" target="_blank"><img src="/static/theme/xiutuan/css/images/mail02.gif" border="0" /></a>
	<a href="http://www.gmail.com" target="_blank"><img src="/static/theme/xiutuan/css/images/mail03.gif" border="0" /></a>
	<a href="http://www.hotmail.com" target="_blank"><img src="/static/theme/xiutuan/css/images/mail04.gif" border="0" /></a><br />
	<a href="http://mail.sina.com.cn/" target="_blank"><img src="/static/theme/xiutuan/css/images/mail05.gif" border="0" /></a>
	<a href="http://mail.cn.yahoo.com/" target="_blank"><img src="/static/theme/xiutuan/css/images/mail06.gif" border="0" /></a>
	<a href="http://mail.sohu.com/" target="_blank"><img src="/static/theme/xiutuan/css/images/mail07.gif" border="0" /></a>
	<a href="http://mail.10086.cn/" target="_blank"><img src="/static/theme/xiutuan/css/images/mail08.gif" border="0" /></a>
	</p>
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
