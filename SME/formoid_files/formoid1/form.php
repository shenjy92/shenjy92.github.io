<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-default-red.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-default-red.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-default-red" style="background-color:#f9ffe7;font-size:14px;font-family:'Palatino Linotype','Book Antiqua',Palatino,serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>SELECT BANK</h2></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title"></label><div class="large"><span><select name="select" >

		<option value="DBS Bank/POSB">DBS Bank/POSB</option>
		<option value="ANZ Bank">ANZ Bank</option>
		<option value="CIMB Bank">CIMB Bank</option>
		<option value="Citibank">Citibank</option>
		<option value="Deutsche Bank">Deutsche Bank</option>
		<option value="Far Eastern Bank">Far Eastern Bank</option>
		<option value="HSBC">HSBC</option>
		<option value="Maybank">Maybank</option>
		<option value="OCBC Bank">OCBC Bank</option>
		<option value="RHB Bank">RHB Bank</option>
		<option value="Standard Chartered Bank">Standard Chartered Bank</option>
		<option value="Sumitomo Mitsui Banking Corporation">Sumitomo Mitsui Banking Corporation</option>
		<option value="The Royal Bank of Scotland">The Royal Bank of Scotland</option>
		<option value="United Overseas Bank">United Overseas Bank</option></select><i></i></span></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Account Number</h3></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"></label><input class="large" type="text" name="input" /></div>
<div class="submit"><input type="submit" value="Confirm"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-default-red.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>