<!--团购答疑-->
<?php 
	$ask_con = array('length(comment)>0');
	if(option_yes('teamask')) { $ask_con[] = 'team_id > 0'; } 
	else { $ask_con['team_id'] = $id; }
	$ask_count = Table::Count('ask', $ask_con);
	$asks = DB::LimitQuery('ask', array('condition'=>$ask_con, 'size'=>3, 'order'=>'ORDER BY id DESC'));
; ?>

<?php if($team){?>
<p class="xit_linkO"><a href="/team/ask.php?id=<?php echo $team['id']; ?>">查看全部(<?php echo $ask_count; ?>)</a> | <a href="/team/ask.php?id=<?php echo $team['id']; ?>#post">我要提问</a></p>
<ul>
		<?php if(is_array($asks)){foreach($asks AS $one) { ?>
        <li><a href="/team/ask.php?id=<?php echo $team['id']; ?>#ask-entry-<?php echo $one['id']; ?>" target="_blank"><?php echo htmlspecialchars(mb_substr($one['content'],0,30,'UTF-8')); ?>...</a></li>
        <?php }}?>
</ul>
 <?php }?> 