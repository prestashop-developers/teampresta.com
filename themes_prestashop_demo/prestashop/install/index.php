<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<title>PrestaShop Installation Assistant</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Cache" content="no store" />
	<meta http-equiv="Expires" content="-1" />
	<meta name="robots" content="noindex" />
	<link rel="shortcut icon" href="theme/img/favicon.ico" />
	<link rel="stylesheet" type="text/css" media="all" href="theme/view.css" />

	
	<script type="text/javascript" src="../js/jquery/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="../js/jquery/plugins/jquery.chosen.js"></script>
	<script type="text/javascript" src="theme/js/install.js"></script>
	<script type="text/javascript" src="//www.prestashop.com/js/user-assistance.js"></script>
			<script type="text/javascript" src="theme/js/welcome.js"></script>
		<script type="text/javascript">
		var ps_base_uri = '/themes_prestashop_demo/prestashop/';
		var ps_version = '1.7.1.2';
	</script>
</head>

<body>
<div id="container">

<!-- Header -->
<div id="header" class="clearfix">
	<ul id="headerLinks">
		<li class="lnk_forum"><a href="http://www.prestashop.com/forums/" target="_blank">Forum</a></li>
		<li class="lnk_forum"><a href="https://www.prestashop.com/en/support" target="_blank">Support</a></li>
		<li class="lnk_forum"><a href="http://doc.prestashop.com/display/PS17/Installing+PrestaShop" target="_blank">Documentation</a></li>
		<li class="lnk_blog last"><a href="http://www.prestashop.com/blog/" target="_blank">Blog</a></li>
		<!--
					<li id="phone_block" class="last">
				<div><span>Contact us!</span><br />+1 (888) 947-6543</div>
			</li>
				-->
	</ul>

	<div id="PrestaShopLogo">PrestaShop</div>
</div>

<!-- Ajax loader animation -->
<div id="loaderSpace">
	<div id="loader">&nbsp;</div>
</div>

<!-- List of steps -->
<div id="leftpannel">
	<ol id="tabs">
									<li class="configuring"><a href="index.php?step=welcome">Choose your language</a></li>
												<li>License agreements</li>
												<li>System compatibility</li>
												<li>Store information</li>
												<li>System configuration</li>
												<li>Store installation</li>
						</ol>
			<iframe scrolling="no" style="height:210px;width:200px;border:none;margin-top:20px" id="iframe_help"
			src="https://api.prestashop.com/iframe/install.php?step=&lang=en">
			<p>Contact us!<br />+1 (888) 947-6543</p>
		</iframe>
	</div>

<!-- Page content -->
<form id="mainForm" action="index.php" method="post">
<div id="sheets" class="sheet shown">
	<div id="sheet_" class="sheet shown clearfix">
	<div class="contentTitle">
		<h1>Installation Assistant</h1>
		<ul id="stepList_1" class="stepList clearfix">
							<li >Choose your language</li>
							<li >License agreements</li>
							<li >System compatibility</li>
							<li >Store information</li>
							<li >System configuration</li>
							<li >Store installation</li>
					</ul>
	</div>
	<noscript>
		<h4 class="errorBlock" style="margin-bottom:10px">
			To install PrestaShop, you need to have JavaScript enabled in your browser.			<a href="http://enable-javascript.com/" target="_blank">
				<img src="theme/img/help.png" style="height:16px;width:16px" />
			</a>
		</h4>
	</noscript>



<h2>Welcome to the PrestaShop 1.7.1.2 Installer</h2>
<p>Installing PrestaShop is quick and easy. In just a few moments, you will become part of a community consisting of more than 250,000 merchants. You are on the way to creating your own unique online store that you can manage easily every day.</p>
<p>If you need help, do not hesitate to <a href="https://www.youtube.com/watch?v=psz4aIPZZuk" target="_blank">watch this short tutorial</a>, or check <a href="http://doc.prestashop.com/display/PS17/Installing+PrestaShop" target="_blank">our documentation</a>.</p>

<!-- List of languages -->
	<h3>Continue the installation in:</h3>
	<select id="langList" name="language">
			<option value="ca" >
			Català (Catalan)		</option>
			<option value="da" >
			Dansk (Danish)		</option>
			<option value="de" >
			Deutsch (German)		</option>
			<option value="en" selected="selected">
			English (English)		</option>
			<option value="es" >
			Español (Spanish)		</option>
			<option value="fr" >
			Français (French)		</option>
			<option value="qc" >
			Français CA (French)		</option>
			<option value="hr" >
			Hrvatski (Croatian)		</option>
			<option value="id" >
			Indonesia (Indonesia)		</option>
			<option value="it" >
			Italiano (Italian)		</option>
			<option value="hu" >
			Magyar (Hungarian)		</option>
			<option value="nl" >
			Nederlands (Dutch)		</option>
			<option value="no" >
			Norsk (Norwegian)		</option>
			<option value="pl" >
			Polski (Polish)		</option>
			<option value="br" >
			Português (Brasil)		</option>
			<option value="pt" >
			Português (Portuguese)		</option>
			<option value="ro" >
			Română (Romanian)		</option>
			<option value="sr" >
			Srpski (Serbian)		</option>
			<option value="sv" >
			Svenska (Swedish)		</option>
			<option value="tr" >
			Türkçe (Turkish)		</option>
			<option value="lt" >
			lietuvių kalba (Lithuanian)		</option>
			<option value="si" >
			slovenski jezik (Slovene)		</option>
			<option value="vn" >
			tiếng Việt (Vietnamese)		</option>
			<option value="cs" >
			Čeština (Czech)		</option>
			<option value="ru" >
			Русский (Russian)		</option>
			<option value="bg" >
			български език (Bulgarian)		</option>
			<option value="mk" >
			македонски јазик (Macedonian)		</option>
			<option value="he" >
			עברית (Hebrew)		</option>
			<option value="fa" >
			پارسی (Persian)		</option>
			<option value="bn" >
			বাংলা  (Bengali)		</option>
			<option value="zh" >
			简体字 (Simplified Chinese)		</option>
			<option value="tw" >
			繁體中文 (Traditional Chinese)		</option>
		</select>

<p>The language selection above only applies to the Installation Assistant. Once your store is installed, you can choose the language of your store from over 60 translations, all for free! </p>

	</div><!-- div id="sheet_step" -->
</div><!-- div id="sheets" -->

<div id="buttons">
						<input id="btNext" class="button little" type="submit" name="submitNext" value="Next" />
			
	</div>
</form>
<div id="phone_help">
	If you need some assistance, you can <a href="http://addons.prestashop.com/en/388-support" onclick="return !window.open(this.href);">get tailored help</a> from our support team. <a href="http://doc.prestashop.com/display/PS17/Installing+PrestaShop" onclick="return !window.open(this.href);">The official documentation</a> is also here to guide you.</div>
</div><!-- div id="container" -->

<ul id="footer">
	<li><a href="http://www.prestashop.com/forums/" title="Official forum" target="_blank">Official forum</a> | </li>
	<li><a href="http://www.prestashop.com" title="PrestaShop.com" target="_blank">PrestaShop.com</a> | </li>
	<li><a href="https://www.prestashop.com/en/support" title="Support" target="_blank">Support</a> | </li>
	<li><a href="http://doc.prestashop.com/display/PS17/Installing+PrestaShop" title="Documentation" target="_blank">Documentation</a> | </li>
	<li><a href="https://www.prestashop.com/en/contact-us" title="Contact us" target="_blank">Contact us</a> | </li>
	<li>&copy; 2007-2017</li>
</ul>
<script type="text/javascript">
	if (typeof psuser_assistance != 'undefined')
	{
		var errors = new Array();
		$.each($('li.fail'), function(i, item){
			errors.push($(this).text().trim());
		});
		psuser_assistance.setStep('install_', {'error': errors + ' || {"version": "' + ps_version + '"}'});
		if (errors.length)
			$('#iframe_help').attr('src', $('#iframe_help').attr('src') + '&errors=' + encodeURI(errors.join(', ')));
	}
</script>
</body>
</html>
