<!--{if $team}-->
<div class="sbox side-business">
	<div class="sbox-top"></div>
	<div class="sbox-content">
		<div class="tip today-deal">
			<h2>今日团购</h2>
			<h4><a href="/team.php?id=<?php echo $team['id']; ?>" title="<?php echo htmlspecialchars($team['title']); ?>" target="_blank"><?php echo mb_strimwidth($one['title'],0,128,'...'); ?></a></h4>
			<div class="info"><div class="deal-pic"><a href="/team.php?id=<?php echo $team['id']; ?>" title="<?php echo htmlspecialchars($team['title']); ?>" target="_blank"><img width="200" height="121" src="<?php echo team_image($team['image'], true); ?>" /></a></div><p class="total"><strong class="count"><?php echo $team['now_number']; ?></strong>人购买</p><p class="price">原价：<strong class="old"><span class="money"><?php echo $currency; ?></span><?php echo moneyit($team['market_price']); ?></strong>折扣：<strong class="discount"><?php echo team_discount($team); ?>折</strong><br />现价：<strong><span class="money"><?php echo $currency; ?></span><?php echo moneyit($team['team_price']); ?></strong>节省：<strong><span class="money"><?php echo $currency; ?></span>$<?php echo $team['market_price']-$team['team_price']; ?></strong><br /></p></div>
			<p class="buy"><a href="/team.php?id=<?php echo $team['id']; ?>"><img width="96" height="38" src="/static/css/i/button-buy-hurry.png" /></a></p>
		</div>
	</div>
	<div class="sbox-bottom"></div>
</div>
<!--{/team}-->
