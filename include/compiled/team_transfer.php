<?php include template("header");?>

<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="consult">
	<div class="dashboard" id="dashboard">
		<ul><?php echo current_ask('transfer', $id); ?></ul>
	</div>
	<div id="content">
		<div class="box clear">
			<div class="box-top"></div>
			<div class="box-content">
				<div class="head">
					<h2>求购转让</h2>
				</div>
				<div class="sect consult-list">
					<ul class="list">
					<?php if(is_array($asks)){foreach($asks AS $one) { ?>
					<li id="ask-entry-<?php echo $one['id']; ?>" >
						<div class="item">
							<p class="user"><strong><?php echo $users[$one['user_id']]['username']; ?></strong><span><?php echo Utility::HumanTime($one['create_time']); ?></span></p>
							<div class="clear"></div>
							<p class="text"><?php echo $one['content']; ?></p>
							<p class="reply"><strong>回复：</strong><?php echo $one['comment']; ?></p>
						</div>
					</li>
					<?php }}?>
					</ul>
					<?php echo $pagestring; ?>
				</div>
				<div class="head" id="post">
					<h2>信息发布</h2>
				</div>
				<div class="sect consult-form">
				<?php if(is_login()){?>
					<form id="consult-add-form" method="post" action="/ajax/team.php?action=ask&id=<?php echo $team['id']; ?>">
					<input type="hidden" id="parent_id" value="<?php echo $parent_id; ?>"/>
					<textarea class="f-textarea" cols="60" rows="5" name="content" id="consult-content"></textarea>
					<p class="commit">
						<input type="hidden" name="type" value="transfer" />
						<input type="submit" value="好了，提交" name="commit" class="formbutton"/>
					</p>
					</form>
					<div id="consult-add-succ" class="succ"><p>您的信息已成功提交，客服MM很快就会回复的，稍等一会儿再来看吧。</p><p><a href="/team.php?id=<?php echo $team['id']; ?>">返回本团购</a>，或<a id="consult-add-more" href="javascript:void(0);">还有其他问题？</a></p></div>
				<?php } else { ?>
					请先<a href="/account/login.php?r=<?php echo $currefer; ?>">登录</a>或<a href="/account/signup.php">注册</a>再提问
				<?php }?>
				</div>
			</div>
			<div class="box-bottom"></div>
		</div>
	</div>
	<div id="sidebar">
		<?php include template("block_side_invite");?>
		<?php include template("block_side_team");?>
	</div>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("footer");?>
