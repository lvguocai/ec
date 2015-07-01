
<?php if ($this->_var['user_info']): ?>

<?php echo $this->_var['lang']['hello']; ?>，<font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font>, <?php echo $this->_var['lang']['welcome_return']; ?>！
<a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a>|
 <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>

<?php else: ?>
 <?php echo $this->_var['lang']['welcome']; ?>&nbsp;&nbsp;请&nbsp;
 <a href="user.php">登陆</a>
或 <a href="user.php?act=register">免费注册</a>
<?php endif; ?>