<?php if($INI['system']['googlemap']&&$partner['longlat']){?>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=<?php echo $INI['system']['googlemap']; ?>" type="text/javascript"></script>
<script type="text/javascript">
window.x_init_hook_gmp = function() {
	X.misc.showgooglemap = function() {
		X.get(WEB_ROOT+'/ajax/system.php?id=<?php echo $partner['id']; ?>&action=showgooglemap');
	};
};
</script>

<div class="mapbody map">
 <img src="http://ditu.google.cn/maps/api/staticmap?zoom=12&size=194x194&maptype=roadmap&mobile=true&markers=<?php echo $partner['longlat']; ?>&sensor=false&language=zh_CN" />
 <a class="link" href="javascript:;" onclick="X.misc.showgooglemap();" title="点击查看完整地图">查看完整地图</a>
</div>
<?php }?>
