<div id="ft">
<div class="ft01">
<img src="/static/theme/xiutuan/css/images/ico_f2.gif" />
<img src="/static/theme/xiutuan/css/images/ico_f3.gif" />
<img src="/static/theme/xiutuan/css/images/ico_f1.gif" />
<img src="/static/theme/xiutuan/css/images/ico_f4.gif" />
<img src="/static/theme/xiutuan/css/images/ico_f5.gif" />
<img src="/static/theme/xiutuan/css/images/ico_f6.gif" />
</div>
<div class="ft02">
<dl><dt>用户帮助</dt>

					<dd><a href="/help/tour.php">玩转<?php echo $INI['system']['abbreviation']; ?></a></dd>
					<dd><a href="/help/faqs.php">常见问题</a></dd>
					<dd><a href="/help/zuitu.php"><?php echo $INI['system']['abbreviation']; ?>概念</a></dd>
					<dd><a href="/help/api.php">开发API</a></dd>
</dl>
<dl><dt>获取更新</dt>

					<dd><a href="/subscribe.php?ename=<?php echo $city['ename']; ?>">邮件订阅</a></dd>
					<dd><a href="/feed.php?ename=<?php echo $city['ename']; ?>">RSS订阅</a></dd>
				<?php if($INI['system']['sinajiwai']){?>
					<dd><a href="<?php echo $INI['system']['sinajiwai']; ?>" target="_blank">新浪微博</a></dd>
				<?php }?>
				<?php if($INI['system']['tencentjiwai']){?>
					<dd><a href="<?php echo $INI['system']['tencentjiwai']; ?>" target="_blank">腾讯微博</a></dd>
				<?php }?>
</dl>
<dl><dt>合作联系</dt>

					<dd><a href="/feedback/seller.php">商务合作</a></dd>
					<dd><a href="/help/link.php">友情链接</a></dd>
					<dd><a href="/biz/index.php">商家后台</a></dd>
					<?php if(is_manager(false, true)){?>
					<dd><a href="/manage/index.php">管理<?php echo $INI['system']['abbreviation']; ?></a></dd>
					<?php }?>
</dl>
<dl><dt>公司信息</dt>

					<dd><a href="/about/us.php">关于<?php echo $INI['system']['abbreviation']; ?></a></dd>
					<dd><a href="/about/job.php">工作机会</a></dd>
					<dd><a href="/about/contact.php">联系方式</a></dd>
					<dd><a href="/about/terms.php">用户协议</a></dd>
</dl>
<div class="f_lofo"><img src="/static/theme/xiutuan/css/images/f_logo.png" /></div>
</div>
<div class="copyright">
      <p>Copyright&nbsp;&copy;&nbsp;<span>2010</span>&nbsp;<?php echo $INI['system']['sitename']; ?>版权所有&nbsp;<a href="/about/terms.php">使用<?php echo $INI['system']['abbreviation']; ?>前必读</a>&nbsp;<a target="_blank" href="http://www.miibeian.gov.cn/" onClick="javascript:_gaq.push(['_trackPageview', 'Outbound/http://www.miibeian.gov.cn/']);"><?php echo $INI['system']['icp']; ?></a>&nbsp;Powered by <a href="http://ev56.taobao.com/" target="_blank">EV56</a> software.<?php if($INI['system']['statcode']){?>&nbsp;<?php echo $INI['system']['statcode']; ?><?php }?></p>
</div>
<div class="ftinfo" align="center">
<img border="0" src="/static/theme/xiutuan/css/images/binfo05.jpg" style="display: inline;" original="/static/theme/xiutuan/css/images/binfo05.jpg">
<img border="0" src="/static/theme/xiutuan/css/images/binfo04.jpg" style="display: inline;" original="/static/theme/xiutuan/css/images/binfo04.jpg">
<img width="174" border="0" height="31" src="/static/theme/xiutuan/css/images/174x31.jpg" style="display: inline;" original="/static/theme/xiutuan/css/images/174x31.jpg">
<img border="0" src="/static/theme/xiutuan/css/images/ebsIcon.jpg" style="display: inline;" original=" /static/theme/xiutuan/css/images/ebsIcon.jpg">
 </div>
</div>

</body>
</html>