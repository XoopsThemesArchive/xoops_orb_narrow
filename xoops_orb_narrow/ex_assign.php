<?php
// PM受信メッセージ数取得
// Original Scripty by Ryujiさん @ Ryu's Planning
// website http://ryus.biz/
global $xoopsUser, $xoopsModule;
if (is_object($xoopsUser)) {
	$pm_handler =& xoops_gethandler('privmessage');

	$criteria = new CriteriaCompo(new Criteria('read_msg', 0));
	$criteria->add(new Criteria('to_userid', $xoopsUser->getVar('uid')));
	$this->assign("ex_new_messages", $pm_handler->getCount($criteria));
}
// ディレクトリ名取得
// Original Scripty by Tom_G3Xさん @ Malaika System
// website http://malaika.s31.xrea.com/
require_once XOOPS_ROOT_PATH.'/modules/system/blocks/system_blocks.php';
$MainMenu = b_system_main_show();
$this->assign( 'ex_mainmenu', $MainMenu );
if ( is_object($xoopsModule) ) {
	$this->assign('ex_moduledir', $xoopsModule->getVar('dirname'));
	$this->assign( 'ex_module_name', $xoopsModule->getVar('name') );

}

?>