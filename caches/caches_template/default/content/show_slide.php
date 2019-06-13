<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f9506ec4a7bf7e0a125694c5e081ee65&sql=select+%2Afrom+v9_newspic+where+catid+%3D+%24catid+and+newsid+%3D+%24id&return=data&page=%24page&num=100\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 100;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM (select *from v9_newspic where catid = $catid and newsid = $id) T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("select *from v9_newspic where catid = $catid and newsid = $id LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>                     

				  <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
				  <?php echo $r['pic'];?><p>_</p>
				 
				  <?php $n++;}unset($n); ?>

				  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>