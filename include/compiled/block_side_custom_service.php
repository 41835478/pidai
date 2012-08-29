<div class="custom-service">
				<p class="im">
<?php 
	$msns = preg_split('/[,\s]+/',$INI['system']['kefumsn'],-1,PREG_SPLIT_NO_EMPTY);
	$qqs = preg_split('/[,\s]+/',$INI['system']['kefuqq'],-1,PREG_SPLIT_NO_EMPTY);
; ?>
				<?php if(is_array($msns)){foreach($msns AS $msnone) { ?>
				<?php if(trim($msnone)){?>
					<a id="service-msn-help" href="msnim:chat?contact=<?php echo $msnone; ?>"><img src="/static/css/i/button-custom-msn.gif" /></a>
				<?php }?>
				<?php }}?>
				<?php if(is_array($qqs)){foreach($qqs AS $qqone) { ?>
				<?php if(preg_match('/http/i', $qqone)){?>
					<?php echo $qqone; ?>
				<?php } else { ?>
					<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $qqone; ?>&site=<?php echo $INI['system']['sitename']; ?>&menu=yes" target="_blank"><img SRC="/static/css/i/button-custom-qq.gif" alt=""></a>
				<?php }?>
				<?php }}?>
				</p>
				<p class="time">周一至周六 9:00-18:00</p>
			</div>