<?php include template("header");?>
<!--start 日期转换-->
<?php 
/*淘宝地址：http://ev56.taobao.com/*/
function convertDayToChinese($date) { 
 $date = str_replace('/','-',$date);
 $dateArr = explode("-", $date); 
 $s=date("N", mktime(0,0,0,$dateArr[1],$dateArr[2],$dateArr[0])); 
 switch ($s) { 
  case 1: 
	return "一";
	break; 
	  case 2: 
	return "二";
	break; 
	  case 3: 
	return "三";
	break; 
	  case 4: 
	return "四";
	break; 
	  case 5: 
	return "五";
	break; 
	  case 6: 
	return "六";
	break; 
	  case 7: 
	return "日";
	break; 
 }  
}
/*输入的$data参数为，yy/mm/dd 或者 yy-mm-dd，返回星期几*/
; ?>
<!--end 团购分类数据调用-->
				<style type="text/css">
#gjc{padding-left: 10px; float:left;}
#jqtgss{margin-left: 10px;margin-top: 10px;width: 665px;height: 37px; float:left;}
#jqtgssa{width:561px;height: 36px; float:left;}
#jqtgssa ul{margin-top: 5px;}
#jqtgssb{width: 95px; float:left;}
#jqtgssb .btnrssa{background:url(i/buttonssb.gif) no-repeat scroll 0 0 transparent;width:75px;height: 26px;border:0 none;cursor: pointer;margin-top: 5px;}
.hw-input{font-size:12px;padding:2px 3px;border-color:#A3DCEF;border-style:solid;border-width:1px;height: 20px;margin-left: 5px;width: 120px;}
.Wdate{background: url("i/datePicker.gif") no-repeat scroll right center #FFFFFF; border: 1px solid #A3DCEF;height: 24px;width: 120px;}
.teamlist h2{font-size:2em;font-size:16px;font-weight:bold;}
.xit_cpt .soldout{position:absolute;z-index:1;right:0;bottom:0;_bottom:-1px;width:122px;height:69px;background:url("/static/css/i/bg-deals-default-soldout.png") no-repeat 0 0;_background:transparent;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='../static/css/i/bg-deals-default-soldout.png');}
.xit_cpt .soldoutlink{display:block;position:absolute;z-index:2;right:0;bottom:0;width:122px;height:69px;outline:0;text-indent:-999em;}
.xit_cpt .isopen{position:absolute;z-index:1;right:-13px;bottom:-7px;width:65px;height:65px;background:url("/static/css/i/bg-deals-default-isopen.png") no-repeat 0 0;_background:transparent;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='../static/css/i/bg-deals-default-isopen.png');}
.xit_cpt .isopenlink{display:block;position:absolute;z-index:2;right:-13px;bottom:-7px;width:65px;height:65px;outline:0;text-indent:-999em;}

				</style>
   <!--xit_banner2-->
   <script src="/static/theme/xiutuan/js/xit_jsqiehuan.js" type="text/javascript"></script>
    <div class="xit_dabanner"><script type="text/javascript" src="/static/theme/xiutuan/banner/banner.php?location=top"></script></div>
<!--xiangqing-->
    <div class="xit_xiangqing">
        <!--zuo-->
         <div class="xit_wangqituangou">
              <div class="xit_wangqituangou_t">往期团购</div>
	
			<?php if(is_array($teams)){foreach($teams AS $index=>$one) { ?>
              <div class="xit_liuliuba">
                <div class="xit_riqi">
                  <p class="xit_briqi"><?php echo date('Y-n-j', $one['end_time']); ?></p>
                        <p class="xit_daheizi"><?php echo date('d', $one['end_time']); ?><br /><span>星期<?php echo convertDayToChinese(date('N', $one['end_time'])); ?></span></p>
                </div>
                   <div class="xit_cpt">
					   <a href="/team.php?id=<?php echo $one['id']; ?>" title="<?php echo $one['title']; ?>" target="_blank">
					   <img src="<?php echo team_image($one['image'], true); ?>" width="108" height="108" />
					   </a>
				   </div>
                   <div class="xit_sjia">
					<h3><a href="/team.php?id=<?php echo $one['id']; ?>" title="<?php echo $one['title']; ?>" target="_blank"><?php echo mb_strimwidth($one['title'],0,43,'...'); ?></a></h3>
					<div class="xit_goods_info">
                            <span>团购最低价：<em><font>￥</font><?php echo moneyit($one['team_price']); ?></em></span>
                            <p style="padding-top:6px;"><span>原价：<?php echo $currency; ?><?php echo moneyit($one['market_price']); ?></span> 折扣：<?php echo team_discount($one); ?>折
							
							<a href="/team.php?id=<?php echo $one['id']; ?>" title="<?php echo $one['title']; ?>" target="_blank"  onclick="javascript:_gaq.push(['_trackEvent','view_button', 'view', '<?php echo $one['title']; ?>/<?php echo $one['typename']; ?>']);"><img src="/static/theme/xiutuan/img/xit_ckxiangq.jpg" width="74" height="25" class="xit_buynow" alt="查看详情" border="0" /></a>
							</p>
                            <p><span>节省：<?php echo $currency; ?><?php echo moneyit($one['market_price']-$one['team_price']); ?></span> 
							<?php if(option_yes('moneysave')){?>
									本团为用户节省：<font><?php echo $currency; ?><?php echo moneyit($one['now_number']*($one['market_price']-$one['team_price'])); ?></font>
									<?php } else { ?>
									购买人数：<font><?php echo $one['now_number']; ?></font>
							<?php }?>
                            </p>
                             </div>
                   </div>
                   
              </div>
            <?php }}?>

<div class="clear"></div>
<div><?php echo $pagestring; ?></div>
        </div>
         
         <!--you-->
         <?php include template("view_right");?>
    </div>
<script type="text/javascript" src="/static/js/datepicker/WdatePicker.js"></script>
<?php include template("footer");?>
