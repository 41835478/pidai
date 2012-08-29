<?php include template("header");?>
<div id="bd" class="cf">
  <!-- end brand tuan -->
  <div id="maincol">
    <div class="consult-list" id="signup">
      <h2><img src="/static/theme/xiutuan/css/images/tit_login.png"  />&nbsp;&nbsp;<span class="span_normal">或者<a href="/account/signup.php" class="linkO1">注册</a></span></h2>
      <form class="validator" action="/account/login.php" method="post" id="login-user-form">
                        <div class="field email">
                            <label for="login-email-address">Email／用户名</label>
                            <input type="text" min="2" datatype="require|limit" require="true" value="" class="f-input" id="login-email-address" name="email" size="30">
                        </div>
                        <div class="field password">
                            <label for="login-password">密码</label>
                            <input type="password" datatype="require" require="true" class="f-input" id="login-password" name="password" size="30">
                            <span class="lostpassword">&nbsp;<a href="/account/repass.php" class="link_ora">忘记密码？</a></span> 
                        </div>
                        <div class="field autologin">
						     <label>&nbsp;</label>
                            <input type="checkbox" checked="" class="f-check" id="autologin" name="auto-login" value="1">
                            下次自动登录
                        </div>
                        <div class="act">
                          <input type="image" id="login-submit" name="commit" value="登录" src="/static/theme/xiutuan/css/images/but_login.gif">
                         &nbsp;&nbsp;
							<a  target="_blank" href="/thirdpart/qq/index.php"><img src="/static/css/i/qq_button.png" style="margin-bottom:3px;"/></a>
							<a  target="_blank" href="/thirdpart/sina/login.php"><img src="/static/css/i/sina_button.png" style="margin-bottom:3px;"/></a>
                        </div>
      </form>
	  
    </div>
  </div>
  <!-- end left -->


<div id="rcol">
<div class="side-tip">
                    <h3>还没有<?php echo $INI['system']['abbreviation']; ?>账户？</h3>
                    <p>立即<a href="/account/signup.php" class="linkR">注册</a>，仅需30秒！</p>
                </div>
</div>
<!-- end right -->

</div>

<?php include template("footer");?>
