<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9cc8143373160736448f93ef35975255&action=position&posid=10&catid=%24catid&thumb=1&order=listorder+DESC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'10','catid'=>$catid,'thumb'=>'1','order'=>'listorder DESC','limit'=>'2',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                  <h4 class="blue"><a href="<?php echo $v['url'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo $v['title'];?></a></h4>
                <p><img src="<?php echo thumb($v[thumb],90,60);?>" width="90" height="60" /><?php echo str_cut(strip_tags($v[description]), 150);?></p>
                <div class="bk20 hr"><hr /></div>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>