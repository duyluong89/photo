<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<?php include('includes/seo.php'); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="<?php bloginfo('url');?>/favicon.ico" type="image/x-icon" />
<?php if(get_option('iphoto_lib')!="") : ?>
<script type="text/javascript" src="http://httvn-jquery.googlecode.com/files/httvncoder-jquery.min.js"></script>
<?php else : ?>	
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/jquery.min.js?v=20120401"></script>
<?php endif; ?>
<?php if (!(current_user_can('level_0'))){ ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/all.js?v=20120401"></script>
<?php }?>
<?php if (is_home() || is_archive()) { ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/jquery.waterfall.min.js?v=20120401"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/jquery.colorTip.js?v=20120401"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/index.js?v=20120401"></script>
<?php } elseif (is_page('likes') || is_page('views')) { ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/jquery.waterfall.min.js?v=20120401"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/jquery.colorTip.js?v=20120401"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/index2.js?v=20120401"></script>
<?php } elseif (is_singular()){ ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/comments-ajax.js?v=20120401"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/phzoom.js?v=20120401"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/single.js?v=20120401"></script>
<?php }?>
<?php wp_head(); ?>
</head>
	<style type="text/css">
#w2b-StoTop {-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px; width:100px;background-color: #EEEEEE;background-color: rgba(238, 238, 238, 0.6);filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#99EEEEEE',EndColorStr='#99EEEEEE');text-align:center;padding:5px;position:fixed;bottom:10px;right:10px;cursor:pointer;color:#444;text-decoration:none;border:1px solid #C9C9C9;}
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type='text/javascript'>
$(function() {
    $.fn.scrollToTop = function() {
    $(this).hide().removeAttr("href");
    if ($(window).scrollTop() != "0") {
        $(this).fadeIn("slow")
    }
    var scrollDiv = $(this);
    $(window).scroll(function() {
        if ($(window).scrollTop() == "0") {
        $(scrollDiv).fadeOut("slow")
        } else {
        $(scrollDiv).fadeIn("slow")
        }
    });
    $(this).click(function() {
        $("html, body").animate({
        scrollTop: 0
        }, "slow")
    })
    }
});
$(function() {
    $("#w2b-StoTop").scrollToTop();
});
</script>

  <a href="#" id='w2b-StoTop' <img src="http://i.imgur.com/Ffb7p.png"></a>

<body <?php body_class(); ?>>
	
	<div id="header">
		<div id="header-inner">
			<div id="header-box">
				<div id="logo"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a></div>
				<div id="nav" class="menu-cme-studio-container">
<ul id="menu-cme-studio" class="menu">
<li id="menu-item-437" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-437">
<a href="/anh-girl-kute">Ảnh Girl Kute</a>
</li>
<li id="menu-item-461" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-461">
<a href="/anh-bikini">Ảnh Bikini</a>
</li>
<li id="menu-item-499" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-499">
<a href="/anh-nguoi-mau">Ảnh người mẫu</a>
</li>
<li id="menu-item-499" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-499">
<a href="/anh-nude">Ảnh Nude</a>
</li>
<li id="menu-item-499" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-499">
<a href="/girl-viet-nam">Girl Việt Nam</a>
</li>
<li id="menu-item-499" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-499">
<a href="http://fvn.vn/forum.php">Forum</a>
</li>
</ul>
</div>
                              
                                
				<div id="member">
					<?php if (!(current_user_can('level_0'))){ ?>
						<ul>
							<li id="login">
								<a id="login-trigger" href="#" class="login"><?php _e('Đăng nhập','iphoto'); ?></a>
								<div id="login-content" class="hidden">
									<form action="<?php echo get_option('home'); ?>/wp-login.php" method="post">
										<div>
											<p><?php _e('Username','iphoto'); ?></p>
											<input id="log" type="text" name="log" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" size="20" />
											<p><?php _e('Password','iphoto'); ?><a href="<?php echo get_option('home'); ?>/wp-login.php?action=lostpassword"><?php _e('Quên mật khẩu ?','iphoto'); ?></a></p>
											<input type="password" name="pwd" id="pwd" size="20"  />
										</div>
										<div id="actions">
											<input type="submit" name="submit" value="Log in" class="button" />
											<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /><?php _e('Lưu thông tin đăng nhập','iphoto'); ?></label>
											<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
										</div>
									</form>
								</div>
							</li>
						</ul>
					<?php } else { ?>
						<?php global $current_user;get_currentuserinfo();echo get_avatar( $current_user->user_email, 25); ?><a href="<?php bloginfo('url'); ?>/post" title="<?php _e('Post','iphoto'); ?>"><?php _e('Post','iphoto'); ?></a><a href="<?php echo wp_logout_url( get_bloginfo('url') ); ?>" title="<?php _e('Logout','iphoto'); ?>"><?php _e('Logout','iphoto'); ?></a>
					<?php }?>
				</div>
				<div class="clear"></div>
			</div><!--kết thúc header-box-->
		</div>
	</div><!--Kết thúc header-->
	<?php if (is_home()) { ?>
		<div id="cate" data-animate="<?php echo get_option('iphoto_animate');?>" data-ajax="<?php echo get_option('iphoto_noajax');?>">home</div>
	<?php } elseif (is_archive()){?>
		<div id="cate" data-animate="<?php echo get_option('iphoto_animate');?>"  data-ajax="<?php echo get_option('iphoto_noajax');?>"><?php $category=get_the_category($post->ID);$name = $category[0]->slug;echo $name;?></div>
	<?php } elseif ((is_page('likes') || is_page('views')) && $paged<2){?>
		<div id="cate" data-animate="<?php echo get_option('iphoto_animate');?>"  data-ajax="<?php echo get_option('iphoto_noajax');?>"><?php $post_data = get_post($post->ID, ARRAY_A);$slug = $post_data['post_name'];echo $slug;?></div><!--end cate-->
	<?php }?>
	<div id="wrap">