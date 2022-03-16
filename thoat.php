<?php
if (!defined('IN_SITE')) die('The request not found'); 
 
// Xoa session login
set_logout();
 
// Chuyen huong sang trang login
redirect(base_url('admin/?m=common&a=login'));
?>