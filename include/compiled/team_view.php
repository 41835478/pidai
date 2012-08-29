<?php include template("header");?>
   <!--xit_banner2-->
   <script src="/static/theme/xiutuan/js/xit_jsqiehuan.js" type="text/javascript"></script>
    <div class="xit_dabanner"><script type="text/javascript" src="/static/theme/xiutuan/banner/banner.php?location=top"></script></div>
<!--xiangqing-->
    <div class="xit_xiangqing">


<?php if($team['close_time']){?>
<div id="sysmsg-tip" class="sysmsg-tip-deal-close"><div class="sysmsg-tip-top"></div><div class="sysmsg-tip-content"><div class="deal-close"><div class="focus">抱歉，您来晚了，<br />团购已经结束啦。</div><div id="tip-deal-subscribe-body" class="body"><form id="tip-deal-subscribe-form" method="post" action="/subscribe.php" class="validator"><table><tr><td>不想错过明天的团购？立刻订阅每日最新团购信息：&nbsp;</td><td><input type="text" name="email" class="f-text" value="" require="true" datatype="email" /></td><td>&nbsp;<input class="commit" type="submit" value="订阅" /></td></tr></table></form></div></div><span id="sysmsg-tip-close" class="sysmsg-tip-close">关闭</span></div><div class="sysmsg-tip-bottom"></div></div>
<?php }?>

<?php if($order){?>
<div id="sysmsg-tip" ><div class="sysmsg-tip-top"></div><div class="sysmsg-tip-content">您已经下过订单，但还没有付款。<a href="/order/check.php?id=<?php echo $order['id']; ?>">查看订单并付款</a><span id="sysmsg-tip-close" class="sysmsg-tip-close">关闭</span></div><div class="sysmsg-tip-bottom"></div></div> 
<?php }?>	
        <!--zuo-->
         <div class="xit_xiangqing_zuo">
              <div class="xit_zuoshang">
              <div><img src="/static/theme/xiutuan/img/xit_xqshang.jpg" /></div>
              <div class="xit_xqzgong">
                   <!--fenxiangdao-->
				   <div id="dealca" style="float:left;width:290px; border:#999 solid 1px; padding-left:10px; height:80px;display:none;background-color:#FFF;margin:27px 0 0 355px; position:absolute;">
<strong style='clear:both;width:100%;'><a style="float:right; margin-right:5px;" href="javascript:void(0);" onclick="showqq();">关闭</a><br>把下面的内容通过QQ或MSN发送给好友：</strong>
<br/>
        <input type="text" style="border:1px solid #A6A6A6; background-color:#fff; height:20px; line-height:20px;width:280px;margin-left:0px;margin-left:-355px\9;*margin-left:-355px;_margin-left:-300px;" value="<?php echo $INI['system']['wwwprefix']; ?>/team.php?id=<?php echo $team['id']; ?>&r=<?php echo $login_user_id; ?>" />
</div>
                   <div class="xit_fenxiang">
                        分享到：<img src="/static/theme/xiutuan/img/xit_img1.jpg" /><a target="_blank" href="<?php echo share_sina($team); ?>" >新浪微博</a><img src="/static/theme/xiutuan/img/xit_img2.jpg" /><a target="_blank" href="<?php echo share_kaixin($team); ?>">开心</a><img src="/static/theme/xiutuan/img/xit_img3.jpg" /><a target="_blank" href="<?php echo share_renren($team); ?>">人人</a><img src="/static/theme/xiutuan/img/xit_img4.jpg" /><a target="_blank" href="<?php echo share_douban($team); ?>">豆瓣</a><img src="/static/theme/xiutuan/img/xit_img5.jpg" /><a id="deal-share-im" href="javascript:void(0);" class="im" onclick="javascript:showqq();">MSN,QQ好友</a><img src="/static/theme/xiutuan/img/xit_img6.jpg" /><a target="_blank" href="<?php echo share_tencent($team); ?>">腾讯微博</a><img src="/static/theme/xiutuan/img/xit_img7.jpg" /><a target="_blank" href="<?php echo share_mail($team); ?>">邮件</a>
                   </div>
                   
                   <h2>
                   <?php if($team['close_time']==0){?>
                    <span>今日团购：</span>
                    <?php }?>
					<?php echo $team['title']; ?>   
                   </h2>
                   
                   <div class="xit_goumai">
                        <div class="xit_goumai_zuo">
                             <div class="xit_goumai_shang">
                                 <?php if(($team['max_number']<=$team['now_number'])&&$team['max_number']>0){?>
	<div class="xit_fudong_jieshu"><p><?php echo $currency; ?><span><?php echo moneyit($team['team_price']); ?></span></p><img src="/static/theme/xiutuan/img/xit_mgl.jpg" /></div>
	<?php } else if($team['close_time']) { ?>
	<div class="xit_fudong_jieshu"><p><?php echo $currency; ?><span><?php echo moneyit($team['team_price']); ?></span></p><img src="/static/theme/xiutuan/img/xit_yijieshu.jpg" /></div>
	<?php } else if($buy_link=="" && $sub_link!='') { ?>
	<div class="xit_fudong"><p><?php echo $currency; ?><span><?php echo moneyit($team['team_price']); ?></span></p> <a id="sub_link" href="<?php echo $sub_link; ?>"><img src="/static/theme/xiutuan/img/xit_yyz.jpg" /></a></div>
	<?php } else { ?>
	<div class="xit_fudong"><p><?php echo $currency; ?><span><?php echo moneyit($team['team_price']); ?></span></p>
	<a id="buy_link" <?php echo $team['begin_time']<time()?'href="/team/buy.php?id='.$team['id'].'"':''; ?> onclick="javascript:_gaq.push(['_trackEvent','buy_button', 'buy', '<?php echo $team['title']; ?>/<?php echo $product_type['name']; ?>']);">
	<img src="/static/theme/xiutuan/img/xit_dagoumai.jpg"/>
	</a>
    </div>
	<?php }?>
                                
                                  
                                  
                                  <table class="tuan_info_tb" width="96%" align="center" border="0" cellpadding="0" cellspacing="0">
                                         <tbody><tr>
                                                <th width="35%">原价</th>
                                                <th width="30%">折扣</th>
                                                <th width="35%"><span>节省</span></th>
                                         </tr>
                                          <tr>
                                                <td>￥<del><?php echo moneyit($team['market_price']); ?></del></td>
                                                <td><?php echo team_discount($team); ?></td>
                                                <td><span><?php echo $currency; ?><?php echo $discount_price; ?></span></td>
                                          </tr>
    
                                 </tbody></table>
                             </div>
                             
                             
                             <div class="xit_goumaichenggong">
                               
                                 
                                 
                                  <div class="xit_tuan_user">
                                      <?php if($state_time==1){?>
	<?php if($state_teamsub){?>
	<em><strong><?php echo $team_sub_count; ?></strong></em>
	<?php } else { ?>
	<em><strong>0</strong></em>
	<?php }?>
<?php } else { ?>
  <em><strong><?php echo $team['now_number']; ?></strong></em>
<?php }?>
<?php if($team['draw_id']>0){?>
人已参加抽奖
<?php } else { ?>
	<?php if($state_teamsub){?>
 人已预约
    <?php } else { ?>
  人已购买
    <?php }?>
<br />
数量有限，下单要快哟
<?php }?>
                                  </div>
                                
					                       <?php if($team['close_time']==0){?>
                                    <?php if($team['state']=='none'){?>
                                    <div class="tuan_status s3">
                                        <div class="bg_s">还差<strong><?php if($state_time==1){?><?php echo $team['min_number']; ?><?php } else { ?><?php echo $team['min_number']-$team['now_number']; ?><?php }?></strong>个成团,可继续购买<br>
                                        </div>
                                    </div>
                                    <?php } else { ?>
                                        <?php if($state_time==1){?>
                                            <div class="tuan_status s3">
                                                <div class="bg_s">还差<strong><?php echo $team['min_number']; ?></strong>个成团,可继续购买<br></div>
                                            </div>
                                        <?php } else { ?>
                                            <div class="tuan_status s1" >
                                                <div class="bg_s">
                                                    <h3>团购已成功</h3>
                                                    <?php if($team['max_number']>$team['now_number']||$team['max_number']==0){?>
                                                    可继续购买
                                                    <?php }?>
                                                </div>
                                            </div>
                                        <?php }?>
                                        
                                    <?php }?>
                                <?php } else { ?>
                                    <div class="tuan_status s2">
                                        <div class="bg_s">
                                        <h3>团购已满</h3>
                                        关注下一团
                                        </div>
                                    </div>
                                <?php }?>
                                  
                                  <div class="xit_tuan_time">
                                                                    
                                    <?php if($team['close_time']){?>
                                    <h3>本团购结束于</h3>
                                    <div class="limitdate">
                                        <p class="deal-buy-ended"><?php echo date('Y-m-d', $team['close_time']); ?>&nbsp;
                                        <?php echo date('H:i:s', $team['close_time']); ?></p>
                                    </div>
                                    <?php } else { ?>
                                        <?php if($state_time==1){?>
                                        距离开团时间还有：<br />
                                    <div id="remainSeconds" style="display:none"><?php echo $diff_time; ?></div>
                                    <p id="remainTime" class="deal-buy-ended">
                                        <input  style="width:36px" readonly="true" type="text" value="<?php echo $timer['hour']; ?>"/>时
                                        <input readonly="true" type="text" value="<?php echo $timer['minute']; ?>"/>分
                                        <input style="width:36px" readonly="true" type="text" value="<?php echo $timer['second']; ?>"/>秒
                                    </p>
                                        <?php }?>
                                        <?php if($state_time==0){?>
                                    团购结束还有：<br />
                                    <div id="remainSeconds" style="display:none"><?php echo $diff_time; ?></div>
                                    <p id="remainTime" class="deal-buy-ended">
                                        <input  style="width:36px" readonly="true" type="text" value="<?php echo $timer['hour']; ?>"/>时
                                        <input readonly="true" type="text" value="<?php echo $timer['minute']; ?>"/>分
                                        <input style="width:36px" readonly="true" type="text" value="<?php echo $timer['second']; ?>"/>秒
                                    </p>
                                        <?php }?>
                                    <?php }?>

			                      </div>
                                             
                             </div>
                        </div>
                        
                        <div class="xit_goumai_you">
                             <img src="<?php echo team_image($team['image']); ?>" width="432" height="288" />
                             <p style="height:65px; overflow:hidden"><span><?php if(strip_tags($team['summary'])!=$team['summary']){?>
		<?php echo $team['summary']; ?>
		<?php } else { ?>
		<?php echo nl2br(strip_tags($team['summary'])); ?>
		 <?php }?></span></p>
                        </div>
                   </div>
              </div>
              <div style="clear:both"></div>
              <div><img src="/static/theme/xiutuan/img/xit_xqxia.jpg" /></div>
              </div>
              
              <!--miaoshu-->
              <div class="xit_miaoshu">
			  <style type="text/css">
			  /*用纯CSS控制图片最大宽度 ev56.com*/
			  #Article_main_side img {width: expression(this.width > 650 ? 650: true); max-width: 650px;}
			  </style>
                        <div id="Article_main_side">
                 
<?php if(trim(strip_tags($team['detail']))){?>
<div class="blk">
<h2><img src="/static/theme/xiutuan/css/i/t2.gif" alt="商品详情" width="660" height="45" /></h2>
<?php echo $team['detail']; ?>
</div>
<?php }?>

<?php if(trim(strip_tags($team['notice']))){?>
<div class="blk">
<h2><img src="/static/theme/xiutuan/css/i/t4.gif" alt="特别提示" width="660" height="45" /></h2>
 <?php echo $team['notice']; ?>
</div>
<?php }?>

<?php if(trim(strip_tags($team['userreview']))){?>	
<div class="blk">
<h2><img src="/static/theme/xiutuan/css/i/t6.gif" alt="他们说" width="660" height="45" /></h2>
<?php echo userreview($team['userreview']); ?>
</div>
<?php }?>

<?php if(trim(strip_tags($team['systemreview']))){?>	
<div class="blk">		
<h2><img src="/static/theme/xiutuan/css/i/t5.gif" alt="<?php echo $INI['system']['abbreviation']; ?>说" width="660" height="45" /></h2>
<?php echo $team['systemreview']; ?>
</div>
<?php }?>
<br />
<hr />


                        <div class="side" id="team_partner_side_<?php echo (!option_yes('teamwhole')&&abs(intval($partner['id'])))?1:0; ?>">
                            <div id="side-business">
								<h2><?php echo $partner['title']; ?></h2>
								<div style="margin-top:10px;"><?php echo $partner['location']; ?></div>
								<div style="margin-top:10px;"><a href="<?php echo $partner['homepage']; ?>" target="_blank"><?php echo domainit($partner['homepage']); ?></a></div>
								<?php include template("block_block_partnermap");?>
								
							</div>
						</div>
              </div>
			  </div>
         </div>
         <!--you-->
		   
         <?php include template("view_right");?>
       
    </div>
	

<?php include template("footer");?>

