<?php if (!defined('THINK_PATH')) exit();?><HTML><HEAD><META content="IE=11.0000" http-equiv="X-UA-Compatible"><META charset="utf-8"><META http-equiv="X-UA-Compatible" content="IE=edge"><TITLE>呆萌公众平台</TITLE><LINK href="__PUBLIC__/res/css/layout.css" rel="stylesheet" type="text/css"><LINK href="__PUBLIC__/res/css/base.css" rel="stylesheet" type="text/css"><LINK href="__PUBLIC__/res/css/lib.css" rel="stylesheet" type="text/css"><LINK href="__PUBLIC__/res/css/page_index.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="__PUBLIC__/res/css/platform.css"><link rel="Shortcut Icon" href="__PUBLIC__/res/images/sty.ico"></HEAD><BODY class="zh_CN"><DIV class="head" id="header" ><div class="bg-top"><!-- <img src="__PUBLIC__/res/images/login/bg-top.png">  --></div><DIV class="head_box"><DIV class="inner wrp"><H1 class="logo"><A href="<?php echo U('/index');?>"></A></H1><DIV class="account"><DIV class="account_meta account_info"><A class="nickname" href="<?php echo U('/mp/set');?>"><?php echo ($nickname); ?></A><A href="<?php echo U('/my');?>"><IMG 
												class="avatar" src="__PUBLIC__/res/images/person_img/<?php echo ($img); ?>"></A></DIV><!-- 消息通知 --><!-- 	<DIV class="account_meta account_inbox" id="accountArea"><A class="account_inbox_switch" 
										href="#"><I 
										class="icon_inbox">通知</I>&nbsp;                </A></DIV> --><DIV class="account_meta account_logout"><A id="logout" href="<?php echo U('index/Publicplatform/logOut');?>">退出</A></DIV></DIV></DIV></DIV></DIV><DIV class="body page_index" id="body"><DIV class="container_box cell_layout side_l" id="js_container_box"><DIV class="col_side"><DIV class="menu_box" id="menuBar"><DL class="menu no_extra"><DT class="menu_title">											功能 				
										</DT><DD class="menu_item "><A href="<?php echo U('/mp/msg','','');?>">群发功能</A></DD><DD class="menu_item "><A href="<?php echo U('/mp/news','','');?>">消息回复</A></DD></DL><DL class="menu "><DT class="menu_title">管理 
									</DT><DD class="menu_item "><A href="<?php echo U('/mp/item','','');?>">项目管理</A></DD><DD class="menu_item "><A href="<?php echo U('/mp/product','','');?>">发货管理</A></DD><DD class="menu_item "><A href="<?php echo U('/mp/user','','');?>">用户管理</A></DD></DL><DL class="menu "><DT class="menu_title">设置 
									</DT><DD class="menu_item "><A href="<?php echo U('/mp/set','','');?>">公众号设置</A></DD></DL></DIV></DIV><DIV class="col_main"><DIV class="index_show_area"><DIV class="index_tap added"><UL class="inner"><LI class="index_tap_item added_message"><A href="<?php echo U('index/publicplatform/manageNews');?>"><SPAN 
									  class="tap_inner"><I class="icon_index_tap"></I><EM 
									  class="number"><?php echo ($news[0]['count(*)']); ?></EM><STRONG 
									  class="title">新消息数</STRONG></SPAN></A></LI><LI class="index_tap_item added_fans"><A href="<?php echo U('index/publicplatform/manageUser');?>"><SPAN 
									  class="tap_inner no_extra"><I class="icon_index_tap"></I><EM class="number"><?php echo ($man[0]['count( distinct user_id)']); ?></EM><STRONG 
									  class="title">关注人数</STRONG></SPAN></A></LI></UL></DIV>&nbsp;    
							<DIV class="index_tap total"><UL class="inner"><LI class="index_tap_item total_fans extra"><A href="<?php echo U('index/publicplatform/manageUser');?>"><SPAN 
									  class="tap_inner"><I class="icon_index_tap"></I><EM 
									  class="number"><?php echo ($all[0]['count(*)']); ?></EM><STRONG 
									  class="title">支持数目</STRONG></SPAN></A></LI></UL></DIV></DIV><DIV class="mp_news_area notices_box"><DIV class="title_bar"><H3>系统公告</H3></DIV><UL class="mp_news_list"><LI class="mp_news_item"><A href="http://www.daymeng.com/public/public_info/public_introduce.htm" target="_blank"><STRONG>公众平台使用说明介绍<I 
					  class="icon_common new"></I></STRONG><SPAN class="read_more">2014-11-11</SPAN></A></LI></UL></DIV></DIV></DIV><DIV class="faq"><UL class="links"><LI class="links_item no_extra"><A href="http://wpa.qq.com/msgrd?v=3&uin=3143239359&site=qq&menu=yes" 
				  target="_blank">在线客服</A></LI><LI class="links_item"><A href="http://wpa.qq.com/msgrd?v=3&uin=521187146&site=qq&menu=yes" 
				  target="_blank">客服中心</A></LI></UL></DIV></DIV><div class="gbottom"><div class="gbottom-nav"><a href="<?php echo U('/help','','');?>">关于呆萌</a><a href="<?php echo U('/help/130','','');?>">洽谈合作</a><a href="<?php echo U('/help/130','','');?>">加入我们</a><a href="<?php echo U('/help/130','','');?>">联系我们</a><a href="<?php echo U('/help/127','','');?>">免责声明</a><a href="javascript:;">呆萌社区</a><a href="javascript:;">呆萌基金</a></div><div class="gbottom-i">©2014呆萌网&nbsp;湘ICP备09043258号-2</div></div></BODY></HTML>