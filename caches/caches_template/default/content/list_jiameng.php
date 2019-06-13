<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?>-爱亲母婴</title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">

<link href="<?php echo CSS_PATH;?>global.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>sub.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>sub_2.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>style.css">
<link rel="alternate" media="only screen and(max-width: 640px)" href="<?php echo str_replace('www.aiqin.com','m.aiqin.com',$url); ?>">
<script src="<?php echo JS_PATH;?>jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH;?>jquery.soChange-min.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH;?>jquery.lazyload.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.mas.min.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo JS_PATH;?>iepng.js"></script>
<![endif]-->
<style>
.add_new{width:990px;margin:20px auto;overflow:hidden}.add_new ul li{float:left;border-bottom:1px dotted #999;height:32px;width:310px;line-height:32px;font-size:14px;overflow:hidden;margin-right:30px}.add_new ul{width:120%}.add_new h2{font-size:16px;border-bottom:1px solid #999;line-height:58px}
*{margin:0;padding:0}.new_content{width:670px;margin:0 auto}.new_content_top{width:600px;height:450px;margin-left:auto;margin-right:auto;margin-top:20px;position:relative;cursor:url(http://www.aiqin.com/statics/images/arr_left.cur),auto}.new_add_cursor{cursor:url(http://www.aiqin.com/statics/images/arr_right.cur),auto}.new_content_top img{display:none;width:100%;height:428px;position:absolute}.new_content_top p{display:none;text-align:center;position:absolute;width:100%;bottom:0}.new_content_bottom{margin:0 auto;width:640px}.new_content_bottom ul{height:110px;position:absolute;width:20000px}.new_content_bottom ul li{width:130px;height:100px;float:left;margin-right:10px;list-style-type:none}.new_content_bottom_wrap{width:556px;position:relative;height:110px;overflow:hidden;margin-left:auto;margin-right:auto}.new_content_bottom .new_content_bottom_wrap ul li img{width:126px;height:95px;padding:2px;border:1px solid #f9af10}.thumb_2_1{background:url(http://www.aiqin.com/statics/images/qh1.gif) no-repeat 0 20px;float:left;height:113px;width:35px;cursor:pointer;margin-left:10px;_margin-left:0}.thumb_2_2{background:url(http://www.aiqin.com/statics/images/qh2.gif) no-repeat 0 20px;float:right;height:113px;width:35px;cursor:pointer}
</style>
</head>
<body>
<?php include template("content","header"); ?>
	<div class="aq-zhinan">
		<div class="zhinan-top-wrap">
			<div class="zhinan-top-left" id="fonts-aq">
				<ul>
					<!-- <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=5f653d3a09e9ebc17f1500f236bbf598&sql=SELECT+%2A+FROM+v9_newspic++group+by+pic&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_newspic  group by pic LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>    
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>      
					<li><img src="<?php echo $r['pic'];?>" alt="<?php echo $r['alt'];?>" title="<?php echo $r['alt'];?>"><span><?php echo $r['alt'];?></span></li>
					<?php $n++;}unset($n); ?>   
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  -->
				</ul>
				<div class="prev"><img src="/images/201905-03.png"></div>
				<div class="next"><img src="/images/201905-04.png"></div>
			</div>
			<div class="zhinan-top-right">
				<h2>母婴店加盟指南</h2>
				<p>公司总部提供“整店输出”服务体系，为加盟商提供装公司总部提供“整店输出”服务体系，为加盟商提供装公司总部提供“整店输出”服务体系，为加盟商提供装公司总部提供“整店输出”服务体系，为加盟商提供装。</p>
			</div>
		</div>
		<div class="zhinan-list">
			<div class="zhinan-list-left" >
				<div style="width: 130%">
					<div class="zhinan-item">
						<div class="zhinan-bt"><span></span><a href="<?php echo $r['url'];?>">项目选择</a></div>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=bc0cc3b85f3c5fbcaff945f0c6bc90db&sql=SELECT+%2A+FROM+v9_news+join+v9_news_data+on+%28v9_news.id+%3D+v9_news_data.id%29+WHERE+catid+%3D217++order+by+listorder+DESC&return=data&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news join v9_news_data on (v9_news.id = v9_news_data.id) WHERE catid =217  order by listorder DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>     
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>   
						<div class="zhinan-item-top">
							<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
							<div>
								<h4><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],80,'...');?></a></h4>
								<p><?php echo str_cut(strip_tags($r[content]),180,'...');?></p>
							</div>
						</div>	
					<?php $n++;}unset($n); ?>   
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						<ul>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=3446a3eda104f66b0dc3211801cda58f&sql=SELECT+%2A+FROM+v9_news+WHERE+catid+%3D217++order+by+listorder+DESC&return=data&start=1&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news WHERE catid =217  order by listorder DESC LIMIT 1,3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>   
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
							<li><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],80,'...');?></a></li>
						<?php $n++;}unset($n); ?>   
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
						</ul>
					</div>
					<div class="zhinan-item">
							<div class="zhinan-bt"><span></span><a href="#">投资费用</a></div>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f843e0b2b7dad7161fa02f72cdc7ca70&sql=SELECT+%2A+FROM+v9_news+join+v9_news_data+on+%28v9_news.id+%3D+v9_news_data.id%29+WHERE+catid+%3D218++order+by+listorder+DESC&return=data&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news join v9_news_data on (v9_news.id = v9_news_data.id) WHERE catid =218  order by listorder DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>     
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>   
							<div class="zhinan-item-top">
								<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
								<div>
									<h4><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],80,'...');?></a></h4>
									<p><?php echo str_cut(strip_tags($r[content]),180,'...');?></p>
								</div>
							</div>	
						<?php $n++;}unset($n); ?>   
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c570b30e81d104f8c868d9b46b4cc3fb&sql=SELECT+%2A+FROM+v9_news+WHERE+catid+%3D218++order+by+listorder+DESC+&return=data&start=1&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news WHERE catid =218  order by listorder DESC  LIMIT 1,3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>   
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
								<li><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],80,'...');?></a></li>
							<?php $n++;}unset($n); ?>   
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
							</ul>
						</div>
				
					<div class="zhinan-item">
						<div class="zhinan-bt"><span></span><a href="#">进货渠道</a></div>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=05e99c59aeccd81594afdddd8ebcfec0&sql=SELECT+%2A+FROM+v9_news+join+v9_news_data+on+%28v9_news.id+%3D+v9_news_data.id%29+WHERE+catid+%3D219++order+by+listorder+DESC&return=data&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news join v9_news_data on (v9_news.id = v9_news_data.id) WHERE catid =219  order by listorder DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>     
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>   
							<div class="zhinan-item-top">
								<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
								<div>
									<h4><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],80,'...');?></a></h4>
									<p><?php echo str_cut(strip_tags($r[content]),180,'...');?></p>
								</div>
							</div>	
						<?php $n++;}unset($n); ?>   
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=904dbece4960b143e8730f61c11e7716&sql=SELECT+%2A+FROM+v9_news+WHERE+catid+%3D219++order+by+listorder+DESC+&num=%273%27+return%3D&start=1&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news WHERE catid =219  order by listorder DESC  LIMIT 1,3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>   
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
								<li><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],80,'...');?></a></li>
							<?php $n++;}unset($n); ?>   
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
					</div>
					<div class="zhinan-item">
						<div class="zhinan-bt"><span></span><a href="#">母婴店装修</a></div>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=41d8838563cfc1d2d3f461014cfb6331&sql=SELECT+%2A+FROM+v9_news+join+v9_news_data+on+%28v9_news.id+%3D+v9_news_data.id%29+WHERE+catid+%3D220++order+by+listorder+DESC&return=data&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news join v9_news_data on (v9_news.id = v9_news_data.id) WHERE catid =220  order by listorder DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>     
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>   
							<div class="zhinan-item-top">
								<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
								<div>
									<h4><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],80,'...');?></a></h4>
									<p><?php echo str_cut(strip_tags($r[content]),180,'...');?></p>
								</div>
							</div>	
						<?php $n++;}unset($n); ?>   
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d006d206a69e7a5a4859983d02db8fde&sql=SELECT+%2A+FROM+v9_news+WHERE+catid+%3D220++order+by+listorder+DESC&start=1&num=%272%27+return%3D&start=1&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news WHERE catid =220  order by listorder DESC LIMIT 1,3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>   
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
								<li><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],80,'...');?></a></li>
							<?php $n++;}unset($n); ?>   
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
							</ul>
					</div>
					<div class="zhinan-item" style="border:none">
						<div class="zhinan-bt"><span></span><a href="#">开店技巧</a></div>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=be912874834ec4e71e87e37cbbaffb6e&sql=SELECT+%2A+FROM+v9_news+join+v9_news_data+on+%28v9_news.id+%3D+v9_news_data.id%29+WHERE+catid+%3D221++order+by+listorder+DESC&return=data&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news join v9_news_data on (v9_news.id = v9_news_data.id) WHERE catid =221  order by listorder DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>     
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>   
						<div class="zhinan-item-top">
							<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
							<div>
								<h4><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],80,'...');?></a></h4>
								<p><?php echo str_cut(strip_tags($r[content]),180,'...');?></p>
							</div>
						</div>	
					<?php $n++;}unset($n); ?>   
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						<ul>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=829c4a28e69c2e73bf97bf504b0a0db5&sql=SELECT+%2A+FROM+v9_news+WHERE+catid+%3D221++order+by+listorder+DESC&start=1&num=%272%27+return%3D&start=1&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news WHERE catid =221  order by listorder DESC LIMIT 1,3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>   
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
							<li><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],80,'...');?></a></li>
						<?php $n++;}unset($n); ?>   
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
						</ul>
					</div>
					<div class="zhinan-item" style="border:none">
						<div class="zhinan-bt"><span></span><a href="#">母婴店利润</a></div>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=49d4ba51ba8e75a173b813599292bb57&sql=SELECT+%2A+FROM+v9_news+join+v9_news_data+on+%28v9_news.id+%3D+v9_news_data.id%29+WHERE+catid+%3D222++order+by+listorder+DESC&return=data&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news join v9_news_data on (v9_news.id = v9_news_data.id) WHERE catid =222  order by listorder DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>     
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>   
							<div class="zhinan-item-top">
								<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
								<div>
									<h4><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],80,'...');?></a></h4>
									<p><?php echo str_cut(strip_tags($r[content]),180,'...');?></p>
								</div>
							</div>	
						<?php $n++;}unset($n); ?>   
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f0ef24ba2a933d82fffb017d6ea4548d&sql=SELECT+%2A+FROM+v9_news+WHERE+catid+%3D222++order+by+listorder+DESC&start=1&num=%272%27+return%3D&start=1&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news WHERE catid =222  order by listorder DESC LIMIT 1,3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>   
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
								<li><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],80,'...');?></a></li>
							<?php $n++;}unset($n); ?>   
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
							</ul>
					</div>
					<div class="trim"></div>
				</div>
			</div>
			<div class="zhinan-list-right new-news-list">
				<div class="news_list" style="margin-top: 14px;">
					<h2>新闻推荐</h2>
					<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=00eee0e03c67c94b6b6288981118e458&sql=SELECT+%2A+FROM+v9_news+WHERE+catid+IN%2824%2C25%2C26%2C27%2C28%29+order+by+id+desc&return=data&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news WHERE catid IN(24,25,26,27,28) order by id desc LIMIT 8");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>  
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>   
						<li><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],80,'...');?></a></li>
				<?php $n++;}unset($n); ?>   
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
					</ul>
				</div>
				<div class="news_list" style="margin-top: 52px;">
					<h2>常见问题</h2>
					<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1147bef1529f52852c7ec9258d644fe3&sql=SELECT+%2A+FROM+v9_news+WHERE+catid+%3D58++order+by+listorder+DESC&return=data&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news WHERE catid =58  order by listorder DESC LIMIT 8");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>  
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
						<li><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],80,'...');?></a></li>
						<?php $n++;}unset($n); ?>   
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
					</ul>
				</div>
			</div>
		</div>
		<div class="join-aiqin">

			<div class="join-aiqin-warp">
				<ul>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=14701ca35fe94f7e836c733418d77f82&sql=SELECT+%2A+FROM+v9_news+WHERE+catid+%3D54++order+by+id+DESC&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news WHERE catid =54  order by id DESC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>  
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
					<li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="暂无图片"></a><span><?php echo $r['title'];?></span></li>
					<?php $n++;}unset($n); ?>   
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
				</ul>
			</div>
			<div class="prev"><img src="/images/201905-11.jpg"></div>
			<div class="next"><img src="/images/201905-12.jpg"></div>
		</div>
	</div>
	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
	
	<script>
(function(){var fontsIndex=0;var timer=null;var moveLeftIndex=0;var moveRightIndex=0;var joinLengh=$(".join-aiqin-warp ul li").length;function fade(){$("#fonts-aq ul li").fadeOut();$("#fonts-aq ul li").eq(fontsIndex).fadeIn()}$("#fonts-aq ul li").eq(fontsIndex).show();$("#fonts-aq .prev").click(function(){fontsIndex--;if(fontsIndex==-1){fontsIndex=$("#fonts-aq ul li").length-1}fade()});$("#fonts-aq .next").click(function(){fontsIndex++;if(fontsIndex==$("#fonts-aq ul li").length){fontsIndex=0}fade()});$(".zhinan-item").each(function(index){$(this).find(".zhinan-bt span").append('<img src="/images/201905-'+(index+5)+'.jpg">')});$(".join-aiqin-warp ul").width($(".join-aiqin-warp ul li").width()*$(".join-aiqin-warp ul li").length*2);$(".join-aiqin .prev").click(function(){if(parseInt($(".join-aiqin-warp ul").css("left"))<=-220*($(".join-aiqin-warp ul li").length-4)){return false}$(".join-aiqin-warp ul").animate({left:parseInt($(".join-aiqin-warp ul").css("left"))-220})});$(".join-aiqin .next").click(function(){if(parseInt($(".join-aiqin-warp ul").css("left"))>=0){return false}$(".join-aiqin-warp ul").animate({left:parseInt($(".join-aiqin-warp ul").css("left"))+220})})}());
	</script>
<?php include template("content","footer"); ?>
</body>
</html>