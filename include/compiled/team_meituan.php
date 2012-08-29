<?php include template("header");?>
<!--xit_banner2-->
   <script src="/static/theme/xiutuan/js/xit_jsqiehuan.js" type="text/javascript"></script>
   <!--start 图片广告轮播-->
   <div class="xit_dabanner"><script type="text/javascript" src="/static/theme/xiutuan/banner/banner.php?location=top"></script></div>
    <!--fenlei-->
	<?php include template("block_navigator_ev56");?>
<!--paixu-->
    <div class="xit_paixu">
             <div class="xit_paixuzi">排序：
		 <a <?php if($_GET[s]!=='b'&&$_GET[s]!=='n'&&$_GET[s]!=='jg'&&$_GET[s]!=='zk'&&$_GET[s]!=='jgd'&&$_GET[s]!=='zkd'){?>class="current"<?php } else { ?><?php }?> href="/?gid=<?php echo $gid?>"> <span>默认</span></a>|
		 <a <?php if($_GET[s]=='n'){?>style="color:#fff;background:#CD1A01" <?php } else { ?><?php }?>  href="/?gid=<?php echo $gid?>&s=n"> <span>最新</span></a>|
		 <a  <?php if($_GET[s]=='b'){?>style="color:#fff;background:#CD1A01" <?php } else { ?><?php }?> href="/?gid=<?php echo $gid?>&s=b" > <span>最具人气</span></a>|
		 
				  <?php if($_GET[s]=='jg'){?><a  <?php if($_GET[s]=='jg'){?>style="color:#fff;background:#CD1A01" <?php } else { ?><?php }?> href="/?gid=<?php echo $gid?>&s=jgd" > <span>价格↓</span></a>|<?php } else { ?><a  <?php if($_GET[s]=='jgd'){?>style="color:#fff;background:#CD1A01" <?php } else { ?><?php }?> href="/?gid=<?php echo $gid?>&s=jg" > <span>价格↑</span></a>|<?php }?>
				  <?php if($_GET[s]=='zkd'){?><a  <?php if($_GET[s]=='zkd'){?>style="color:#fff;background:#CD1A01" <?php } else { ?><?php }?> href="/?gid=<?php echo $gid?>&s=zk" > <span>折扣↓</span></a><?php } else { ?><a  <?php if($_GET[s]=='zk'){?>style="color:#fff;background:#CD1A01" <?php } else { ?><?php }?> href="/?gid=<?php echo $gid?>&s=zkd" > <span>折扣↑</span></a><?php }?>
		 </div>
         <div class="">
		 <?php echo $pagestring; ?>
		 </div>
    </div>
    <div style="clear:both"></div>
    
    <!--shangpin-->
	<div class="xit_waikuang">
	<?php if(is_array($teams)){foreach($teams AS $tindex=>$oneev56) { ?>
			 <div class="xit_tu <?php if($tindex%3 <> 2){?>xit_boedr<?php }?>">
				<div class="xit_tu1"><a href="/team.php?id=<?php echo $oneev56['id']; ?>" target="_blank"><img src="<?php echo team_image($oneev56['image']); ?>" width="272" height="272" alt="<?php echo $oneev56['title']; ?>" title="<?php echo $oneev56['title']; ?>"/></a><div class="xit_yuanjia"><span class="xit_zhekou">原价:<font class="xit_guanchuan"><?php echo moneyit($oneev56['market_price']); ?></font>元</span>   <span class="xit_zhekou xit_zhekou_tr">折扣:<?php echo team_discount($oneev56); ?>折</span>   <span class="xit_zhekou_sp"><font class="xit_767"><?php echo $oneev56['now_number']; ?></font>人购买 </span></div>
				</div>
				
					<?php if(($oneev56['state']=='soldout')){?>
				<div class="xiu_tuanniu_wan"><p>¥<span><?php echo moneyit($oneev56['team_price']); ?></span></p><a href="/team.php?id=<?php echo $oneev56['id']; ?>" target="_blank"><img src="/static/theme/xiutuan/img/xit_maiguangle.jpg" /></a></div>
					<?php } else if($oneev56['close_time']) { ?>
                        <div class="xiu_tuanniu_wan"><p>¥<span><?php echo moneyit($oneev56['team_price']); ?></span></p><a href="/team.php?id=<?php echo $oneev56['id']; ?>" target="_blank"><img src="/static/theme/xiutuan/img/xit_maiguangle.jpg" /></a></div>
					<?php } else { ?>                        
				<div class="xiu_tuanniu"><p>¥<span><?php echo moneyit($oneev56['team_price']); ?></span></p><a href="/team.php?id=<?php echo $oneev56['id']; ?>" target="_blank"><img src="/static/theme/xiutuan/img/xit_chakan.jpg" /></a></div>
					<?php }?>
				
				<div class="xit_jinri"><span>【今日团购】</span><a href="/team.php?id=<?php echo $oneev56['id']; ?>" target="_blank"  title="<?php echo $one['title']; ?>"><?php echo $oneev56['title']; ?></a></div>
			 </div>
			 <?php if($tindex%3 == 2){?>
				 	         	<div class="clear"></div>
	         	<div class="xit_bottom"></div>
			 <?php }?>
			 <?php }}?>
				 			  			</div>		  
   	           <div class="clear"></div>
   

<!--paixu-->
    <div class="xit_paixu">
             <div class="xit_paixuzi">排序：
		 <a <?php if($_GET[s]!=='b'&&$_GET[s]!=='n'&&$_GET[s]!=='jg'&&$_GET[s]!=='zk'&&$_GET[s]!=='jgd'&&$_GET[s]!=='zkd'){?>class="current"<?php } else { ?><?php }?> href="/?gid=<?php echo $gid?>"> <span>默认</span></a>|
		 <a <?php if($_GET[s]=='n'){?>style="color:#fff;background:#CD1A01" <?php } else { ?><?php }?>  href="/?gid=<?php echo $gid?>&s=n"> <span>最新</span></a>|
		 <a  <?php if($_GET[s]=='b'){?>style="color:#fff;background:#CD1A01" <?php } else { ?><?php }?> href="/?gid=<?php echo $gid?>&s=b" > <span>最具人气</span></a>|
		 
				  <?php if($_GET[s]=='jg'){?><a  <?php if($_GET[s]=='jg'){?>style="color:#fff;background:#CD1A01" <?php } else { ?><?php }?> href="/?gid=<?php echo $gid?>&s=jgd" > <span>价格↓</span></a>|<?php } else { ?><a  <?php if($_GET[s]=='jgd'){?>style="color:#fff;background:#CD1A01" <?php } else { ?><?php }?> href="/?gid=<?php echo $gid?>&s=jg" > <span>价格↑</span></a>|<?php }?>
				  <?php if($_GET[s]=='zkd'){?><a  <?php if($_GET[s]=='zkd'){?>style="color:#fff;background:#CD1A01" <?php } else { ?><?php }?> href="/?gid=<?php echo $gid?>&s=zk" > <span>折扣↓</span></a><?php } else { ?><a  <?php if($_GET[s]=='zk'){?>style="color:#fff;background:#CD1A01" <?php } else { ?><?php }?> href="/?gid=<?php echo $gid?>&s=zkd" > <span>折扣↑</span></a><?php }?>
		 </div>
         <div class="">
		 <?php echo $pagestring; ?>
		 </div>
    </div>
    <div style="clear:both"></div>


<?php include template("footer");?>