<?php if(trim(strip_tags($INI['bulletin'][0]))){?>
               <div class="xit_tuanduidayi" >全局公告 >></div>
                  <div class="xit_tuanduidayixia">
                     
			<div style="margin:5px"><?php echo $INI['bulletin'][0]; ?></div>
              
             </div>


<?php }?>

<?php if($city['id']&&trim(strip_tags($INI['bulletin'][$city['id']]))){?>
               <div class="xit_tuanduidayi" ><?php echo $city['name']; ?>公告 >></div>
                  <div class="xit_tuanduidayixia">
                     
			<div style="margin:5px"><?php echo $INI['bulletin'][$city['id']]; ?></div>
              
             </div>


<?php }?>
