<?php 
$others_side_ns = abs(intval($INI['system']['sideteam']));
$others_team_id = abs(intval($team['id']));
$others_city_id = abs(intval($city['id']));
$others_now = time();
if ( abs(intval($INI['system']['sideteam'])) ) {
	$oc = array( 
			'city_id' => array($others_city_id, 0), 
			'team_type' => 'normal',
			"id <> '$others_team_id'",
			"begin_time < '$others_now'",
			"end_time > '$others_now'",
			);
	$others = DB::LimitQuery('team', array(
				'condition' => $oc,
				'order' => 'ORDER BY `sort_order` DESC, `id` DESC',
				'size' => $others_side_ns,
				));
}
; ?>
<style type="text/css">
.rbox1 ul{ width:200px;}
.rbox1 li{ line-height:20px; border-bottom:#BEC0C0 1px solid; padding-bottom:5px;}
.rbox1 .rpic{ width:198px; height:180px; margin:12px 1px 5px 1px;}
.rbox1 li span{ display:inline-block; padding-bottom:5px;}
.rbox1 li ins{ color:#E44C27; text-decoration:none; font-size:24px; font-family:arial; width:105px; display:inline-block; background:url(static/theme/xiutuan/css/images/bgins.gif) no-repeat; padding-left:15px; font-weight: 800;}
.rbox1 li.rbrand_li ins{ width:auto; font-size:16px; margin-top:5px; }
.rbox1 li.rbrand_li span{ float:right; height:32px; *margin-top:-22px;}
.rbox .i1{margin-top:100px;}
.rbox1 .w1{width:100px; }
.rbox1 .w2{width:90px; text-align:right; }
</style>
<?php if($others ){?>
<div class="xit_xiangqing_you">
              <div class="xit_tuanduidayi">团购进行中 >></div>
              <div class="xit_tuanduidayixia">
	              <div class="xit_tgdy rbox1">
<ul>
<?php $index=0; ?>
<?php if(is_array($others)){foreach($others AS $one) { ?>
<?php if($one['product_type']=='group'){?>
<li>
<?php if($one['image1']){?>
<a href="/team.php?c=index&id=<?php echo $one['id']; ?>"><img src="<?php echo team_image($one['image1']); ?>" class="rpic" />
<?php }?>

<?php echo ++$index; ?>、<?php echo $one['title']; ?></a><br />
<ins><?php echo intval($one['team_price']); ?></ins><span><a href="/team.php?c=index&id=<?php echo $one['id']; ?>"><img src="/static/theme/xiutuan/css/images/rcol_buy.gif" border="0" /></a></span><br />
<span class="w1">折扣：<font color="#FF3333"><?php echo team_discount($one); ?></font> 折</span> <span class="w2"><font color="#FF3333"><?php echo intval($one['now_number']); ?></font> 人已购买</span>
</li>

<?php } else { ?>


<li>
<?php if($one['image']){?>
<a href="/team.php?c=index&id=<?php echo $one['id']; ?>"><img src="<?php echo team_image($one['image']); ?>" class="rpic" />
<?php }?>
<?php echo ++$index; ?>、<?php echo $one['title']; ?></a><br />
<ins><?php echo intval($one['team_price']); ?></ins><span><a href="/team.php?c=index&id=<?php echo $one['id']; ?>"><img src="/static/theme/xiutuan/css/images/rcol_buy.gif" border="0" /></a></span><br />
<span class="w1">折扣：<font color="#FF3333"><?php echo team_discount($one); ?></font> 折</span> <span class="w2"><font color="#FF3333"><?php echo intval($one['now_number']); ?></font> 人已购买</span>
</li>
<?php }?>
<?php }}?>

</ul>    
		          </div>
              
              </div>

              
         </div>
<?php }?>