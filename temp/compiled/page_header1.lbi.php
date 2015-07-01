
<div class="l_i_topAd">
	<img src="themes/default/images/cs/l_banner1.png" />
</div>

<div class="l_header">
	<div class="l_header_box">
    	<div class="l_header_nav">
        	<div class="l_nav_left">
        	<?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        	<!--  
            	<?php echo $this->_var['user_info']['username']; ?>欢迎来到<?php echo $this->_var['lang']['welcome_return']; ?>！请<a href="user.php">登录</a>或<a href="user.php?act=register">免费注册</a>
            -->
            </div>
            <div class="l_nav_center">
            	7*24小时服务热线：<i>4000-688-888</i>
            </div>
            <div class="l_nav_right">
            
            	<?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
				<a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?><span></span></a>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <!-- 
            	<a href="#">在线客服</a>
                <a href="#">商家合作</a>
                <a href="#">我的订单</a>
                <a href="#">用户中心</a>
                <a class="border" href="#">客户服务</a>
                 -->
            </div>
        </div>
    </div>
</div>
<div class="l_header_box">
<div class="l_logo_box">
        	<div class="l_header_logo">
            	<a href="/"><img src="themes/default/images/public/logo.png" /></a>
            </div>
            <form id="searchForm" name="searchForm" method="get" action="search.php"  >
            <div class="l_header_search">
            	<div class="l_search">
            	
            	  	<input  class="search"  name="keywords" type="text" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>" />
                    <input class="btn" type="submit" value="搜索" name="imageField" />
                </div>
                <p>
               <?php if ($this->_var['searchkeywords']): ?>
   <?php echo $this->_var['lang']['hot_search']; ?> ：
   <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
   <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <?php endif; ?>
                </p>
            </div>
            </form>
            <div class="l_log_right">
            	<a class="left" href="#"></a><a class="right" href="#"></a>
            </div>
        </div>
</div>
<div class="clear"></div>

<div class="l_nav_bg">
	<div class="l_nav">
    	<div class="l_nav_li">
        	<ul class="li_nav_ul">
            	<li class="liBg">
                	<h3 class="all">全部商品分类</h3>
                    
                    <div class="lh_second_nav">
                    
                        <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                    	<div class="lh_item">
                        	<h3 class="title"><a class="big" href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
                            <a href="#">iPhone6</a><a href="#">小米</a><i class="jt">></i></h3>
                            
                            <div class="lh_three_nav">
                            
                            
                            	 <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
                            	<div class="lh_three_model">
                                	<span><?php echo htmlspecialchars($this->_var['child']['name']); ?><i class="jt">></i></span>
                                    <dl class="lh_model_dl">
                                    	 <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
                                    	<dd><a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></dd>
                                    	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </dl>
                                </div>
                        
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                
                                
                                
                            </div>
                        </div>
    					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
    
    
    
                  
                       
                       
                       
                    </div>
                </li>
                <li>
                	<a class="on" href="/">网站首页</a>
                </li>
                <li>
                	<a href="activity.php">天天特价</a>
                </li>
                <li>
                	<a href="group_buy.php">团购</a>
                </li>
                <li>
                	<a href="exchange.php">积分商城</a>
                </li>
                <li>
                	<a href="#">精品推荐</a>
                </li>
                <li>
                	<a href="#">新品上市</a>
                </li>
            </ul>
        </div>
        <div class="lh_cart">
        	<div class="lh_cart_number"><a href="#">我的购物车<span>(68)</span><b></b></a></div>
            <div class="lh_cart_down">
            	<div class="lh_cart_shadow"></div>
            	<div class="lh_cart_info">
                	<b></b>购物车中还没有商品,赶紧选购吧!
                </div>
            </div>
        </div>
    </div>
</div>