<?php
/*
        [DISCUZ!] dps_exadmincp/hooker.class.php - 文件作用描述

        Version: 0.01
        Author: Bovvic(671064591@qq.com)
        Copyright: For author
        Last Modified: 2012.12.05
*/


class plugin_dps_exadmincp{


	function  __construct() {

	}
	function global_cpnav_top(){
		global $_G;
		include template('dps_exadmincp:_tpl_'.__FUNCTION__);
		return $return;
	}

	function global_footer(){
		global $_G;
		include template('dps_exadmincp:_tpl_'.__FUNCTION__);
		return $return;
	}

	function global_footerlink(){
		global $_G;
		include template('dps_exadmincp:_tpl_'.__FUNCTION__);
		return $return;
	}
	function global_footer_infomation(){
		global $_G;
		include template('dps_exadmincp:_tpl_'.__FUNCTION__);
		return $return;
	}
}
/*function global_usernav_extra1(){
	return <<<EOF
<wb:login-button type="3,2" onlogin="login" onlogout="logout">登录按钮</wb:login-button>
EOF;
}*/

class plugin_dps_exadmincp_forum extends plugin_dps_exadmincp{
	function __construct(){
		//parent::__construct();
	}
	function index_middle(){
		global $_G;
		include template('dps_exadmincp:_tpl_'.__FUNCTION__);
		return $return;
	}
	function forumdisplay_fastpost_content(){
		global $_G;
		include template('dps_exadmincp:_tpl_'.__FUNCTION__);
		return $return;
	}
	function forumdisplay_threadlist_bottom(){
		global $_G;
		include template('dps_exadmincp:_tpl_'.__FUNCTION__);
		return $return;
	}
	function forumdisplay_leftside_bottom(){
		global $_G;
		include template('dps_exadmincp:_tpl_'.__FUNCTION__);
		return $return;
	}
	function viewthread_postbutton_top(){
		global $_G;
		$return = $this->_postbutton();

		return $return;
	}
	function forumdisplay_postbutton_bottom(){
		global $_G;
		$return = $this->_postbutton();

		return $return;
	}

	function _postbutton(){
		global $_G;
		$return = '<style type="text/css">#newspecial_menu{width:130px;}</style>';
		return $return;

	}
}
/*
class plugin_addbybishop_forum extends plugin_addbybishop{
	function __construct(){
		parent::__construct();
	}

}*/
?>