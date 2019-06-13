<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>栏目首页

<?php $pid = $CATEGORYS[$CAT[parentid]][parentid]; $pidcont = $CATEGORYS[$CAT[parentid]][parentid]; if ($pid==0) $pid=$CAT[parentid];?>
			<?php $n=1;if(is_array(subcat($pid))) foreach(subcat($pid) AS $s) { ?>
			<?php if($s[catid]!=28) { ?>
			<li class="<?php if($s[catid]==$catid) { ?>curn<?php } ?>"><a href="<?php echo $s['url'];?>"><?php echo $s['catname'];?></a></li>
			<?php } ?>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>