

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" >
<head>

	<link rel="home" href="http://craft.laundryrepublic.com/" />

	<meta charset="utf-8">
	<title>Laundryrepublic</title>
	
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" type="text/css" href="/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="/css/webflow.css" />
	<link rel="stylesheet" type="text/css" href="/resources/plugins/toastr/toastr.min.css" />
	
	<link rel="stylesheet" type="text/css" href="/css/lr-redesign.webflow.css" />
	<link rel="stylesheet" type="text/css" href="/css/laundryrepublic.css" />

	<link rel="stylesheet" type="text/css" href="/resources/css/switches.css" />
  <!--
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Nunito:regular,700"]
      }
    });
  </script>
  -->
  <script type="text/javascript" src="/js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico">
  <link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png">
  
  
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="/resources/plugins/toastr/toastr.min.js"></script>
	
	<script type="text/javascript" src="/js/webflow.js"></script>
	
	<script type="text/javascript" src="/js/global.js"></script>
	
	<!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->	
		
	
</head>

<body>

	<!--
	<div id="bodyContainer">
		<header><div id="header">
			<a href="http://craft.laundryrepublic.com/">Logo</a>
			<nav>
				
<ul id="topMenu" class="nav">
<li class="first"><a href="http://craft.laundryrepublic.com/" title="Home">Home</a></li>
<li><a href="http://craft.laundryrepublic.com/order" title="Order now">Order now</a></li>
<li><a href="http://craft.laundryrepublic.com/how-it-works" title="How it works">How it works</a></li>
<li><a href="http://craft.laundryrepublic.com/prices" title="Prices">Prices</a></li>
<li><a href="http://craft.laundryrepublic.com/faqs/how-do-i-pay-for-my-order" title="FAQ">FAQ</a></li>
</ul>
			</nav>
		</div></header>

		<main role="main"><div id="content">
			
				<p>If you see me, you haven’t set your <code>{% block content %}…{% endblock %}</code> yet.</p>
				<p>See Twig’s <a href="http://twig.sensiolabs.org/doc/templates.html#template-inheritance">Template Inheritance</a> documentation for an explanation.</p>
			
		</div></main>

		<footer><div id="footer"">
			Copyright 2016 Craft.laundryrepublic.com. All rights reserved  •  Built with <a href="http://craftcms.com">Craft</a>
		</div></footer>
	</div>
	-->
	

<div class="w-section section header-section">

    <div class="w-clearfix wide-container">
      <a class="w-nav-brand main-logo" href="index"><img class="logo-image" src="/images/LR-logo-horiz.png">
      </a>
      <div class="w-hidden-small w-hidden-tiny desktop-phone-no">020 7193 3130</div>
      <div class="w-nav main-mavbar" data-animation="default" data-collapse="medium" data-contain="1" data-duration="400">
        <div class="w-container main-nav-container">
          <nav class="w-nav-menu main-nav-menu" role="navigation">
							<a class="w-nav-link main-menu-item"  href="http://craft.laundryrepublic.com/" title="Home">Home</a>
							<a class="w-nav-link main-menu-item"  href="http://craft.laundryrepublic.com/order" title="Order now">Order now</a>
							<a class="w-nav-link main-menu-item"  href="http://craft.laundryrepublic.com/how-it-works" title="How it works">How it works</a>
							<a class="w-nav-link main-menu-item"  href="http://craft.laundryrepublic.com/prices" title="Prices">Prices</a>
							<a class="w-nav-link main-menu-item"  href="http://craft.laundryrepublic.com/faqs/how-do-i-pay-for-my-order" title="FAQ">FAQ</a>
						<!--
			<a class="w-nav-link main-menu-item" href="/">Home</a>
			<a class="w-nav-link main-menu-item" href="/order">Order Now</a>
			<a class="w-nav-link main-menu-item" href="/how-it-works">How it Works</a>
			<a class="w-nav-link main-menu-item" href="/prices">Prices</a>
			<a class="w-nav-link main-menu-item" href="/faq">FAQs</a>
			-->
		  			<a class="w-nav-link main-menu-item" href="/?login">Login</a>
		  	
				
          </nav>
          <div class="w-nav-button menu-button" data-ix="navbar-closed">
            <div class="menu-icon"></div>
            <div class="open-menu-icon"></div>
          </div>
        </div>
      </div>
    </div>

</div>

  <div class="header-phone"><a class="my-account-mobile" href="#">My account</a>
    <div class="mobile-phone-number">020 7193 3130</div>
  </div>
  
  
  
	  
<div class="w-section section content-section bigspace">
	<div class="wide-container">

		<h1>Signup</h1>
		<p>Not ready to place an order yet? Please sign-up using this form.</p>

				
		<form action="" method="post" class="wrapperForm">
			<input type="hidden" name="action" value="laundryRepublic/customers/signup" />
			<input type="hidden" name="redirect" value="order/{orderId}" />
			
			<div class="formInputWrapper detailsInput">
				<input type="text" id="firstname" name="firstname" required="required" placeholder="First name" value="" />
				<label for="firstname">First name</label>
			</div>
			
			<div class="formInputWrapper detailsInput">
				<input type="text" id="surname" name="surname" required="required" placeholder="Surname" value="" />
				<label for="surname">Surname</label>
			</div>
			
			<div class="formInputWrapper detailsInput">
				<input type="text" id="mobile" name="mobile" required="required" placeholder="UK mobile number" value="" />
				<label for="mobile">Mobile</label>
			</div>
			
			<!--
			<div class="formInputWrapper detailsInput">
				<input type="text" id="postcode" name="postcode" required="required" placeholder="UK postcode" value="" />
				<label for="postcode">Postcode</label>
			</div>
			-->
			
			<div class="formInputWrapper detailsInput">
				<input type="text" id="apartment" name="apartment" placeholder="Apartment" value="" />
				<label for="postcode">Apartment</label>
			</div>
			
			<div class="formInputWrapper detailsInput">
				<input type="email" id="email" name="email" required="required" placeholder="Email address" value="" />
				<label for="email">Email</label>
			</div>
			
			<div class="formInputWrapper detailsInput">
				<input type="password" id="password" name="password" required="required" placeholder="Password" />
				<label for="password">Password</label>
			</div>
			
			<button type="submit" class="w-button button">Submit</button>
		</form>
	</div>
</div>
	
  
  
  <div class="w-section section footer-section">
    <div class="wide-container">
      <div class="w-row">
        <div class="w-col w-col-6 footer-column-1">
          <div class="w-row footer-nav">
            <div class="w-col w-col-6 w-col-small-6 footer-menu-column-1 footer-menu-list">
              <ul class="w-list-unstyled">
									<li><a href="http://craft.laundryrepublic.com/sustainable-garment-care-1" title="Sustainable garment care">Sustainable garment care</a></li>
									<li><a href="http://craft.laundryrepublic.com/customer-satisfaction-guarantee" title="Customer Satisfaction Guarantee">Customer Satisfaction Guarantee</a></li>
									<li><a href="http://craft.laundryrepublic.com/faqs/how-do-i-pay-for-my-order" title="FAQ">FAQ</a></li>
									<li><a href="http://craft.laundryrepublic.com/jobs" title="Work at Laundry Republic">Work at Laundry Republic</a></li>
									<li><a href="http://craft.laundryrepublic.com/customer-signup" title="Signup">Signup</a></li>
				
              </ul>
            </div>
          </div>
        </div>
        <div class="w-col w-col-6 footer-column-2">
          <a class="w-inline-block footer-social-link" href="https://www.facebook.com/" target="_blank"><img src="/images/facebppk.png">
          </a>
          <a class="w-inline-block footer-social-link" href="https://www.facebook.com/" target="_blank"><img src="/images/twitter.png">
          </a>
          <a class="w-inline-block footer-social-link" href="https://www.facebook.com/" target="_blank"><img src="/images/youtube.png">
          </a>
          <div class="cleardiv"></div><a class="footer-link contact-email phone" href="tel:020 7193 3130">020 7193 3130</a>
          <div class="cleardiv"></div><a class="footer-link contact-email" href="mailto:contactus@laundryrepublic.com">contactus@laundryrepublic.com</a>
        </div>
      </div>
    </div>
  </div>
  
	
</body>
</html>
<script type="text/javascript">
/*<![CDATA[*/
if (typeof(console) == 'object' && typeof(console.groupCollapsed) == 'function')
{
	console.groupCollapsed("Application Log");

		console.groupCollapsed("GET Info");
	console.log("[20:37:59.154][info][application]\n$_GET=array (\n  \'p\' => \'customer-signup\',\n)\n\n");
	console.groupEnd();
	console.groupCollapsed("COOKIE Info");
	console.log("[20:37:59.154][info][application]\n$_COOKIE=array (\n  \'CraftSessionId\' => \'776dd221776d2e8b5d6d1784a1f5ea35\',\n)\n\n");
	console.groupEnd();
	console.groupCollapsed("SERVER Info");
	console.log("[20:37:59.154][info][application]\n$_SERVER=array (\n  \'REDIRECT_REDIRECT_UNIQUE_ID\' => \'V9RvJ6wd92YAAFW7IjwAAAAO\',\n  \'REDIRECT_REDIRECT_SCRIPT_URL\' => \'/customer-signup\',\n  \'REDIRECT_REDIRECT_SCRIPT_URI\' => \'http://craft.laundryrepublic.com/customer-signup\',\n  \'REDIRECT_REDIRECT_DOCUMENT_ROOT\' => \'/kunden/homepages/12/d281035290/htdocs/craft/public\',\n  \'REDIRECT_REDIRECT_UI_SUEXEC_FSTATD_UNIXSOCKET\' => \'/var/run/ui-fstatd.suexec.socket\',\n  \'REDIRECT_REDIRECT_HTTP_AUTHORIZATION\' => \'\',\n  \'REDIRECT_REDIRECT_STATUS\' => \'200\',\n  \'REDIRECT_UNIQUE_ID\' => \'V9RvJ6wd92YAAFW7IjwAAAAO\',\n  \'REDIRECT_SCRIPT_URL\' => \'/customer-signup\',\n  \'REDIRECT_SCRIPT_URI\' => \'http://craft.laundryrepublic.com/customer-signup\',\n  \'REDIRECT_DOCUMENT_ROOT\' => \'/kunden/homepages/12/d281035290/htdocs/craft/public\',\n  \'REDIRECT_UI_SUEXEC_FSTATD_UNIXSOCKET\' => \'/var/run/ui-fstatd.suexec.socket\',\n  \'REDIRECT_HTTP_AUTHORIZATION\' => \'\',\n  \'REDIRECT_HANDLER\' => \'x-mapp-php5.4\',\n  \'REDIRECT_STATUS\' => \'200\',\n  \'UNIQUE_ID\' => \'V9RvJ6wd92YAAFW7IjwAAAAO\',\n  \'SCRIPT_URL\' => \'/customer-signup\',\n  \'SCRIPT_URI\' => \'http://craft.laundryrepublic.com/customer-signup\',\n  \'DBENTRY_HOST\' => \'craft.laundryrepublic.com\',\n  \'DBENTRY_VALUE\' => \'/kunden/homepages/12/d281035290/htdocs/craft/public:d0000#CPU 60 #MEM 81920 #CGI 786762 #NPROC 30 #TAID 52916630 #LANG 1 #PARKING 1 #STAT 1\',\n  \'DBENTRY_DOCROOT\' => \'/kunden/homepages/12/d281035290/htdocs/craft/public\',\n  \'DBENTRY_HASH\' => \'d0000\',\n  \'DBENTRY__CPU\' => \'60\',\n  \'DBENTRY__MEM\' => \'81920\',\n  \'DBENTRY__CGI\' => \'786762\',\n  \'DBENTRY__NPROC\' => \'30\',\n  \'DBENTRY__TAID\' => \'52916630\',\n  \'DBENTRY__LANG\' => \'1\',\n  \'DBENTRY__PARKING\' => \'1\',\n  \'DBENTRY__STAT\' => \'1\',\n  \'DBENTRY\' => \'/kunden/homepages/12/d281035290/htdocs/craft/public:d0000#CPU 60 #MEM 81920 #CGI 786762 #NPROC 30 #TAID 52916630 #LANG 1 #PARKING 1 #STAT 1\',\n  \'HTTP_REFERER\' => \'http://craft.laundryrepublic.com/\',\n  \'HTTP_ACCEPT\' => \'*/*\',\n  \'HTTP_HOST\' => \'craft.laundryrepublic.com\',\n  \'HTTP_CONNECTION\' => \'Keep-Alive\',\n  \'HTTP_COOKIE\' => \'CraftSessionId=776dd221776d2e8b5d6d1784a1f5ea35\',\n  \'PATH\' => \'/bin:/usr/bin\',\n  \'SERVER_SIGNATURE\' => \'\',\n  \'SERVER_SOFTWARE\' => \'Apache\',\n  \'SERVER_NAME\' => \'craft.laundryrepublic.com\',\n  \'SERVER_ADDR\' => \'87.106.161.10\',\n  \'SERVER_PORT\' => \'80\',\n  \'REMOTE_ADDR\' => \'79.113.82.127\',\n  \'DOCUMENT_ROOT\' => \'/kunden/homepages/12/d281035290/htdocs/craft/public\',\n  \'SERVER_ADMIN\' => \'webmaster@craft.laundryrepublic.com\',\n  \'SCRIPT_FILENAME\' => \'/kunden/homepages/12/d281035290/htdocs/craft/public/index.php\',\n  \'REMOTE_PORT\' => \'52608\',\n  \'REDIRECT_QUERY_STRING\' => \'p=customer-signup\',\n  \'REDIRECT_URL\' => \'/index.php\',\n  \'GATEWAY_INTERFACE\' => \'CGI/1.1\',\n  \'SERVER_PROTOCOL\' => \'HTTP/1.1\',\n  \'REQUEST_METHOD\' => \'GET\',\n  \'QUERY_STRING\' => \'p=customer-signup\',\n  \'REQUEST_URI\' => \'/customer-signup\',\n  \'SCRIPT_NAME\' => \'/index.php\',\n  \'STATUS\' => \'200\',\n  \'ORIG_PATH_INFO\' => \'/index.php\',\n  \'ORIG_PATH_TRANSLATED\' => \'/kunden/homepages/12/d281035290/htdocs/craft/public/index.php\',\n  \'PHP_SELF\' => \'/index.php\',\n  \'REQUEST_TIME_FLOAT\' => 1473539879.1512811,\n  \'REQUEST_TIME\' => 1473539879,\n  \'argv\' => \n  array (\n    0 => \'p=customer-signup\',\n  ),\n  \'argc\' => 1,\n)");
	console.groupEnd();
	console.groupCollapsed("Logs");
	console.log("[20:37:59.198][trace][system.CModule]\nLoading \"cache\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (138)\nin /homepages/12/d281035290/htdocs/craft/craft/app/bootstrap.php (189)");
	console.log("[20:37:59.201][trace][system.CModule]\nLoading \"path\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/cache/FileCache.php (41)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/CacheService.php (114)");
	console.log("[20:37:59.202][trace][system.CModule]\nLoading \"request\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (139)\nin /homepages/12/d281035290/htdocs/craft/craft/app/bootstrap.php (189)");
	console.log("[20:37:59.208][trace][system.caching.Craft\\FileCache]\nServing \"usePathInfo\" from cache\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/CacheService.php (180)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/ConfigService.php (392)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/HttpRequestService.php (1135)");
	console.log("[20:37:59.208][trace][system.CModule]\nLoading \"urlManager\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/HttpRequestService.php (1475)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/HttpRequestService.php (1142)");
	console.log("[20:37:59.249][trace][system.CModule]\nLoading \"log\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (140)\nin /homepages/12/d281035290/htdocs/craft/craft/app/bootstrap.php (189)");
	console.log("[20:37:59.253][trace][system.CModule]\nLoading \"coreMessages\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (143)\nin /homepages/12/d281035290/htdocs/craft/craft/app/bootstrap.php (189)");
	console.log("[20:37:59.257][trace][system.db.CDbConnection]\nOpening DB connection\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/behaviors/AppBehavior.php (824)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (590)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/behaviors/AppBehavior.php (80)");
	console.log("[20:37:59.266][trace][system.db.CDbCommand]\nQuerying SQL: SHOW TABLES LIKE \'craft_%\'\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/db/schemas/MysqlSchema.php (312)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/db/DbConnection.php (90)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/behaviors/AppBehavior.php (98)");
	console.log("[20:37:59.266][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SHOW TABLES LIKE \'craft_%\')");
	console.log("[20:37:59.267][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SHOW TABLES LIKE \'craft_%\')");
	console.log("[20:37:59.270][trace][system.db.CDbCommand]\nQuerying SQL: SELECT *\nFROM `craft_info` LIMIT 1\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/behaviors/AppBehavior.php (492)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/behaviors/AppBehavior.php (187)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (751)");
	console.log("[20:37:59.270][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT *\nFROM `craft_info` LIMIT 1)");
	console.log("[20:37:59.270][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT *\nFROM `craft_info` LIMIT 1)");
	console.log("[20:37:59.279][trace][system.CModule]\nLoading \"userSession\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (168)\nin /homepages/12/d281035290/htdocs/craft/craft/app/index.php (62)");
	console.log("[20:37:59.284][trace][system.CModule]\nLoading \"security\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/CookieCollection.php (41)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/HttpRequestService.php (882)");
	console.log("[20:37:59.286][trace][system.CModule]\nLoading \"statePersister\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/CookieCollection.php (41)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/HttpRequestService.php (882)");
	console.log("[20:37:59.287][trace][system.caching.Craft\\FileCache]\nServing \"Yii.CStatePersister./homepages/12/d281035290/htdocs/craft/craft/storage/runtime/state/state.bin\" from cache\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/CacheService.php (180)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/CookieCollection.php (41)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/HttpRequestService.php (882)");
	console.log("[20:37:59.288][trace][system.CModule]\nLoading \"httpSession\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (487)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/UserSessionService.php (93)");
	console.log("[20:37:59.290][trace][system.CModule]\nLoading \"session\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/UserSessionService.php (1059)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/UserSessionService.php (343)");
	console.log("[20:37:59.291][trace][system.CModule]\nLoading \"updates\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (216)\nin /homepages/12/d281035290/htdocs/craft/craft/app/index.php (62)");
	console.log("[20:37:59.293][trace][system.CModule]\nLoading \"plugins\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (256)\nin /homepages/12/d281035290/htdocs/craft/craft/app/index.php (62)");
	console.log("[20:37:59.296][trace][system.db.CDbCommand]\nQuerying SQL: SELECT *\nFROM `craft_plugins`\nWHERE enabled=1\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/PluginsService.php (104)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (256)\nin /homepages/12/d281035290/htdocs/craft/craft/app/index.php (62)");
	console.log("[20:37:59.296][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT *\nFROM `craft_plugins`\nWHERE enabled=1)");
	console.log("[20:37:59.296][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT *\nFROM `craft_plugins`\nWHERE enabled=1)");
	console.log("[20:37:59.303][trace][system.CModule]\nLoading \"messages\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/Craft.php (382)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/AmNavPlugin.php (18)");
	console.log("[20:37:59.303][trace][system.CModule]\nLoading \"i18n\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/behaviors/AppBehavior.php (796)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/behaviors/AppBehavior.php (570)");
	console.log("[20:37:59.305][trace][system.db.CDbCommand]\nQuerying SQL: SELECT `locale`\nFROM `craft_locales`\nORDER BY `sortOrder` LIMIT 1\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/LocalizationService.php (126)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/LocalizationService.php (150)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/LocalizationService.php (162)");
	console.log("[20:37:59.305][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT `locale`\nFROM `craft_locales`\nORDER BY `sortOrder` LIMIT 1)");
	console.log("[20:37:59.305][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT `locale`\nFROM `craft_locales`\nORDER BY `sortOrder` LIMIT 1)");
	console.log("[20:37:59.326][trace][system.CModule]\nLoading \"elements\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/UrlManager.php (278)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/UrlManager.php (137)");
	console.log("[20:37:59.331][trace][system.db.CDbCommand]\nQuerying SQL: SELECT `elements`.`id`, `elements`.`type`\nFROM `craft_elements` `elements`\nJOIN `craft_elements_i18n` `elements_i18n` ON elements_i18n.elementId = elements.id\nWHERE (elements_i18n.uri = :uri) AND (elements_i18n.locale = :locale) AND (elements_i18n.enabled = 1) AND (elements.enabled = 1) AND (elements.archived = 0). Bound with :uri=\'customer-signup\', :locale=\'en_gb\'\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/ElementsService.php (152)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/UrlManager.php (278)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/UrlManager.php (137)");
	console.log("[20:37:59.331][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT `elements`.`id`, `elements`.`type`\nFROM `craft_elements` `elements`\nJOIN `craft_elements_i18n` `elements_i18n` ON elements_i18n.elementId = elements.id\nWHERE (elements_i18n.uri = :uri) AND (elements_i18n.locale = :locale) AND (elements_i18n.enabled = 1) AND (elements.enabled = 1) AND (elements.archived = 0). Bound with :uri=\'customer-signup\', :locale=\'en_gb\')");
	console.log("[20:37:59.331][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT `elements`.`id`, `elements`.`type`\nFROM `craft_elements` `elements`\nJOIN `craft_elements_i18n` `elements_i18n` ON elements_i18n.elementId = elements.id\nWHERE (elements_i18n.uri = :uri) AND (elements_i18n.locale = :locale) AND (elements_i18n.enabled = 1) AND (elements.enabled = 1) AND (elements.archived = 0). Bound with :uri=\'customer-signup\', :locale=\'en_gb\')");
	console.log("[20:37:59.331][trace][system.CModule]\nLoading \"components\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/ElementsService.php (2074)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/ElementsService.php (56)");
	console.log("[20:37:59.341][trace][system.CModule]\nLoading \"content\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/elementtypes/BaseElementType.php (441)\nin /homepages/12/d281035290/htdocs/craft/craft/app/elementtypes/BaseElementType.php (463)");
	console.log("[20:37:59.342][trace][system.CModule]\nLoading \"fields\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/elementtypes/BaseElementType.php (445)\nin /homepages/12/d281035290/htdocs/craft/craft/app/elementtypes/BaseElementType.php (463)");
	console.log("[20:37:59.345][trace][system.db.CDbCommand]\nQuerying SQL: SELECT `f`.`id`, `f`.`groupId`, `f`.`name`, `f`.`handle`, `f`.`context`, `f`.`instructions`, `f`.`translatable`, `f`.`type`, `f`.`settings`\nFROM `craft_fields` `f`\nWHERE `f`.`context` IN (\'global\')\nORDER BY `f`.`name`\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/FieldsService.php (251)\nin /homepages/12/d281035290/htdocs/craft/craft/app/elementtypes/BaseElementType.php (445)\nin /homepages/12/d281035290/htdocs/craft/craft/app/elementtypes/BaseElementType.php (463)");
	console.log("[20:37:59.345][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT `f`.`id`, `f`.`groupId`, `f`.`name`, `f`.`handle`, `f`.`context`, `f`.`instructions`, `f`.`translatable`, `f`.`type`, `f`.`settings`\nFROM `craft_fields` `f`\nWHERE `f`.`context` IN (\'global\')\nORDER BY `f`.`name`)");
	console.log("[20:37:59.345][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT `f`.`id`, `f`.`groupId`, `f`.`name`, `f`.`handle`, `f`.`context`, `f`.`instructions`, `f`.`translatable`, `f`.`type`, `f`.`settings`\nFROM `craft_fields` `f`\nWHERE `f`.`context` IN (\'global\')\nORDER BY `f`.`name`)");
	console.log("[20:37:59.358][trace][system.db.CDbCommand]\nQuerying SQL: SELECT `elements`.`id`, `elements`.`type`, `elements`.`enabled`, `elements`.`archived`, `elements`.`dateCreated`, `elements`.`dateUpdated`, `elements_i18n`.`slug`, `elements_i18n`.`uri`, `elements_i18n`.`enabled` AS `localeEnabled`, `content`.`id` AS `contentId`, `content`.`title`, `content`.`field_body`, `content`.`field_testimonialBody`, `content`.`field_testimonialName`, `entries`.`sectionId`, `entries`.`typeId`, `entries`.`authorId`, `entries`.`postDate`, `entries`.`expiryDate`, `structureelements`.`root`, `structureelements`.`lft`, `structureelements`.`rgt`, `structureelements`.`level`\nFROM `craft_elements` `elements`\nJOIN `craft_elements_i18n` `elements_i18n` ON elements_i18n.elementId = elements.id\nJOIN `craft_content` `content` ON content.elementId = elements.id\nJOIN `craft_entries` `entries` ON entries.id = elements.id\nJOIN `craft_sections` `sections` ON sections.id = entries.sectionId\nLEFT JOIN `craft_structures` `structures` ON structures.id = sections.structureId\nLEFT JOIN `craft_structureelements` `structureelements` ON (structureelements.structureId = structures.id) AND (structureelements.elementId = entries.id)\nWHERE (((elements_i18n.locale = :locale) AND (content.locale = :locale)) AND (elements.id=:elementsid1)) AND (elements.archived = 0)\nGROUP BY `elements`.`id`\nORDER BY `lft`, `postDate` DESC LIMIT 1. Bound with :locale=\'en_gb\', :elementsid1=\'17\'\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/ElementsService.php (214)\nin /homepages/12/d281035290/htdocs/craft/craft/app/models/ElementCriteriaModel.php (271)\nin /homepages/12/d281035290/htdocs/craft/craft/app/models/ElementCriteriaModel.php (298)");
	console.log("[20:37:59.358][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT `elements`.`id`, `elements`.`type`, `elements`.`enabled`, `elements`.`archived`, `elements`.`dateCreated`, `elements`.`dateUpdated`, `elements_i18n`.`slug`, `elements_i18n`.`uri`, `elements_i18n`.`enabled` AS `localeEnabled`, `content`.`id` AS `contentId`, `content`.`title`, `content`.`field_body`, `content`.`field_testimonialBody`, `content`.`field_testimonialName`, `entries`.`sectionId`, `entries`.`typeId`, `entries`.`authorId`, `entries`.`postDate`, `entries`.`expiryDate`, `structureelements`.`root`, `structureelements`.`lft`, `structureelements`.`rgt`, `structureelements`.`level`\nFROM `craft_elements` `elements`\nJOIN `craft_elements_i18n` `elements_i18n` ON elements_i18n.elementId = elements.id\nJOIN `craft_content` `content` ON content.elementId = elements.id\nJOIN `craft_entries` `entries` ON entries.id = elements.id\nJOIN `craft_sections` `sections` ON sections.id = entries.sectionId\nLEFT JOIN `craft_structures` `structures` ON structures.id = sections.structureId\nLEFT JOIN `craft_structureelements` `structureelements` ON (structureelements.structureId = structures.id) AND (structureelements.elementId = entries.id)\nWHERE (((elements_i18n.locale = :locale) AND (content.locale = :locale)) AND (elements.id=:elementsid1)) AND (elements.archived = 0)\nGROUP BY `elements`.`id`\nORDER BY `lft`, `postDate` DESC LIMIT 1. Bound with :locale=\'en_gb\', :elementsid1=\'17\')");
	console.log("[20:37:59.359][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT `elements`.`id`, `elements`.`type`, `elements`.`enabled`, `elements`.`archived`, `elements`.`dateCreated`, `elements`.`dateUpdated`, `elements_i18n`.`slug`, `elements_i18n`.`uri`, `elements_i18n`.`enabled` AS `localeEnabled`, `content`.`id` AS `contentId`, `content`.`title`, `content`.`field_body`, `content`.`field_testimonialBody`, `content`.`field_testimonialName`, `entries`.`sectionId`, `entries`.`typeId`, `entries`.`authorId`, `entries`.`postDate`, `entries`.`expiryDate`, `structureelements`.`root`, `structureelements`.`lft`, `structureelements`.`rgt`, `structureelements`.`level`\nFROM `craft_elements` `elements`\nJOIN `craft_elements_i18n` `elements_i18n` ON elements_i18n.elementId = elements.id\nJOIN `craft_content` `content` ON content.elementId = elements.id\nJOIN `craft_entries` `entries` ON entries.id = elements.id\nJOIN `craft_sections` `sections` ON sections.id = entries.sectionId\nLEFT JOIN `craft_structures` `structures` ON structures.id = sections.structureId\nLEFT JOIN `craft_structureelements` `structureelements` ON (structureelements.structureId = structures.id) AND (structureelements.elementId = entries.id)\nWHERE (((elements_i18n.locale = :locale) AND (content.locale = :locale)) AND (elements.id=:elementsid1)) AND (elements.archived = 0)\nGROUP BY `elements`.`id`\nORDER BY `lft`, `postDate` DESC LIMIT 1. Bound with :locale=\'en_gb\', :elementsid1=\'17\')");
	console.log("[20:37:59.362][trace][system.CModule]\nLoading \"sections\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/models/EntryModel.php (117)\nin /homepages/12/d281035290/htdocs/craft/craft/app/elementtypes/EntryElementType.php (893)");
	console.log("[20:37:59.365][trace][system.db.CDbCommand]\nQuerying SQL: SELECT `sections`.`id`, `sections`.`structureId`, `sections`.`name`, `sections`.`handle`, `sections`.`type`, `sections`.`hasUrls`, `sections`.`template`, `sections`.`enableVersioning`, `structures`.`maxLevels`\nFROM `craft_sections` `sections`\nLEFT JOIN `craft_structures` `structures` ON structures.id = sections.structureId\nWHERE sections.id = :sectionId\nORDER BY `name`. Bound with :sectionId=\'16\'\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/SectionsService.php (227)\nin /homepages/12/d281035290/htdocs/craft/craft/app/models/EntryModel.php (117)\nin /homepages/12/d281035290/htdocs/craft/craft/app/elementtypes/EntryElementType.php (893)");
	console.log("[20:37:59.365][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT `sections`.`id`, `sections`.`structureId`, `sections`.`name`, `sections`.`handle`, `sections`.`type`, `sections`.`hasUrls`, `sections`.`template`, `sections`.`enableVersioning`, `structures`.`maxLevels`\nFROM `craft_sections` `sections`\nLEFT JOIN `craft_structures` `structures` ON structures.id = sections.structureId\nWHERE sections.id = :sectionId\nORDER BY `name`. Bound with :sectionId=\'16\')");
	console.log("[20:37:59.365][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT `sections`.`id`, `sections`.`structureId`, `sections`.`name`, `sections`.`handle`, `sections`.`type`, `sections`.`hasUrls`, `sections`.`template`, `sections`.`enableVersioning`, `structures`.`maxLevels`\nFROM `craft_sections` `sections`\nLEFT JOIN `craft_structures` `structures` ON structures.id = sections.structureId\nWHERE sections.id = :sectionId\nORDER BY `name`. Bound with :sectionId=\'16\')");
	console.log("[20:37:59.366][trace][system.db.CDbCommand]\nQuerying SQL: SELECT *\nFROM `craft_sections_i18n` `sections_i18n`\nJOIN `craft_locales` `locales` ON locales.locale = sections_i18n.locale\nWHERE sections_i18n.sectionId = :sectionId\nORDER BY `locales`.`sortOrder`. Bound with :sectionId=\'16\'\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/SectionsService.php (285)\nin /homepages/12/d281035290/htdocs/craft/craft/app/models/SectionModel.php (63)\nin /homepages/12/d281035290/htdocs/craft/craft/app/elementtypes/EntryElementType.php (896)");
	console.log("[20:37:59.367][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT *\nFROM `craft_sections_i18n` `sections_i18n`\nJOIN `craft_locales` `locales` ON locales.locale = sections_i18n.locale\nWHERE sections_i18n.sectionId = :sectionId\nORDER BY `locales`.`sortOrder`. Bound with :sectionId=\'16\')");
	console.log("[20:37:59.367][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT *\nFROM `craft_sections_i18n` `sections_i18n`\nJOIN `craft_locales` `locales` ON locales.locale = sections_i18n.locale\nWHERE sections_i18n.sectionId = :sectionId\nORDER BY `locales`.`sortOrder`. Bound with :sectionId=\'16\')");
	console.log("[20:37:59.372][trace][system.CModule]\nLoading \"templates\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/controllers/TemplatesController.php (53)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (289)");
	console.log("[20:37:59.401][trace][system.CModule]\nLoading \"globals\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/templating/twigextensions/CraftTwigExtension.php (584)\nin /homepages/12/d281035290/htdocs/craft/craft/app/vendor/twig/twig/lib/Twig/Environment.php (1276)");
	console.log("[20:37:59.405][trace][system.db.CDbCommand]\nQuerying SQL: SELECT `elements`.`id`, `elements`.`type`, `elements`.`enabled`, `elements`.`archived`, `elements`.`dateCreated`, `elements`.`dateUpdated`, `elements_i18n`.`slug`, `elements_i18n`.`uri`, `elements_i18n`.`enabled` AS `localeEnabled`, `content`.`id` AS `contentId`, `content`.`field_body`, `content`.`field_testimonialBody`, `content`.`field_testimonialName`, `globalsets`.`name`, `globalsets`.`handle`, `globalsets`.`fieldLayoutId`\nFROM `craft_elements` `elements`\nJOIN `craft_elements_i18n` `elements_i18n` ON elements_i18n.elementId = elements.id\nJOIN `craft_content` `content` ON content.elementId = elements.id\nJOIN `craft_globalsets` `globalsets` ON globalsets.id = elements.id\nWHERE ((((elements_i18n.locale = :locale) AND (content.locale = :locale)) AND (elements.archived = 0)) AND (elements.enabled = 1)) AND (elements_i18n.enabled = 1)\nGROUP BY `elements`.`id`\nORDER BY `name` LIMIT 100. Bound with :locale=\'en_gb\'\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/ElementsService.php (214)\nin /homepages/12/d281035290/htdocs/craft/craft/app/models/ElementCriteriaModel.php (271)\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/GlobalsService.php (96)");
	console.log("[20:37:59.405][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT `elements`.`id`, `elements`.`type`, `elements`.`enabled`, `elements`.`archived`, `elements`.`dateCreated`, `elements`.`dateUpdated`, `elements_i18n`.`slug`, `elements_i18n`.`uri`, `elements_i18n`.`enabled` AS `localeEnabled`, `content`.`id` AS `contentId`, `content`.`field_body`, `content`.`field_testimonialBody`, `content`.`field_testimonialName`, `globalsets`.`name`, `globalsets`.`handle`, `globalsets`.`fieldLayoutId`\nFROM `craft_elements` `elements`\nJOIN `craft_elements_i18n` `elements_i18n` ON elements_i18n.elementId = elements.id\nJOIN `craft_content` `content` ON content.elementId = elements.id\nJOIN `craft_globalsets` `globalsets` ON globalsets.id = elements.id\nWHERE ((((elements_i18n.locale = :locale) AND (content.locale = :locale)) AND (elements.archived = 0)) AND (elements.enabled = 1)) AND (elements_i18n.enabled = 1)\nGROUP BY `elements`.`id`\nORDER BY `name` LIMIT 100. Bound with :locale=\'en_gb\')");
	console.log("[20:37:59.405][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT `elements`.`id`, `elements`.`type`, `elements`.`enabled`, `elements`.`archived`, `elements`.`dateCreated`, `elements`.`dateUpdated`, `elements_i18n`.`slug`, `elements_i18n`.`uri`, `elements_i18n`.`enabled` AS `localeEnabled`, `content`.`id` AS `contentId`, `content`.`field_body`, `content`.`field_testimonialBody`, `content`.`field_testimonialName`, `globalsets`.`name`, `globalsets`.`handle`, `globalsets`.`fieldLayoutId`\nFROM `craft_elements` `elements`\nJOIN `craft_elements_i18n` `elements_i18n` ON elements_i18n.elementId = elements.id\nJOIN `craft_content` `content` ON content.elementId = elements.id\nJOIN `craft_globalsets` `globalsets` ON globalsets.id = elements.id\nWHERE ((((elements_i18n.locale = :locale) AND (content.locale = :locale)) AND (elements.archived = 0)) AND (elements.enabled = 1)) AND (elements_i18n.enabled = 1)\nGROUP BY `elements`.`id`\nORDER BY `name` LIMIT 100. Bound with :locale=\'en_gb\')");
	console.log("[20:37:59.406][trace][system.CModule]\nLoading \"laundryRepublic_api\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/laundryrepublic/variables/LaundryRepublicVariable.php (77)\nin /homepages/12/d281035290/htdocs/craft/craft/app/vendor/twig/twig/lib/Twig/Template.php (609)");
	console.log("[20:37:59.409][trace][system.CModule]\nLoading \"amNav\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/variables/AmNavVariable.php (77)\nin /homepages/12/d281035290/htdocs/craft/craft/app/vendor/twig/twig/lib/Twig/Template.php (609)");
	console.log("[20:37:59.417][trace][system.db.ar.CActiveRecord]\nCraft\\AmNav_NavigationRecord.findByAttributes()\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (98)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (301)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/variables/AmNavVariable.php (77)");
	console.log("[20:37:59.418][trace][system.db.CDbCommand]\nQuerying SQL: SHOW FULL COLUMNS FROM `craft_amnav_navs`\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (98)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (301)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/variables/AmNavVariable.php (77)");
	console.log("[20:37:59.418][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SHOW FULL COLUMNS FROM `craft_amnav_navs`)");
	console.log("[20:37:59.419][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SHOW FULL COLUMNS FROM `craft_amnav_navs`)");
	console.log("[20:37:59.420][trace][system.db.CDbCommand]\nQuerying SQL: SHOW CREATE TABLE `craft_amnav_navs`\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (98)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (301)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/variables/AmNavVariable.php (77)");
	console.log("[20:37:59.420][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SHOW CREATE TABLE `craft_amnav_navs`)");
	console.log("[20:37:59.420][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SHOW CREATE TABLE `craft_amnav_navs`)");
	console.log("[20:37:59.422][trace][system.db.CDbCommand]\nQuerying SQL: SELECT * FROM `craft_amnav_navs` `t` WHERE `t`.`handle`=:yp0 LIMIT 1. Bound with :yp0=\'topMenu\'\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (98)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (301)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/variables/AmNavVariable.php (77)");
	console.log("[20:37:59.422][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT * FROM `craft_amnav_navs` `t` WHERE `t`.`handle`=:yp0 LIMIT 1. Bound with :yp0=\'topMenu\')");
	console.log("[20:37:59.423][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT * FROM `craft_amnav_navs` `t` WHERE `t`.`handle`=:yp0 LIMIT 1. Bound with :yp0=\'topMenu\')");
	console.log("[20:37:59.424][trace][system.CModule]\nLoading \"amNav_node\" application component\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/web/WebApp.php (594)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (149)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (322)");
	console.log("[20:37:59.426][trace][system.db.CDbCommand]\nQuerying SQL: SELECT `nodes`.*, `i18n`.`uri` AS `elementUrl`\nFROM `craft_amnav_nodes` `nodes`\nLEFT JOIN `craft_elements_i18n` `i18n` ON i18n.elementId = nodes.elementId AND i18n.locale = nodes.locale\nWHERE (`nodes`.`navId`=:pvp8PdeQSC) AND (`nodes`.`locale`=:plg8r0VcaO)\nORDER BY `nodes`.`parentId` ASC, `nodes`.`order` ASC. Bound with :pvp8PdeQSC=\'1\', :plg8r0VcaO=\'en_gb\'\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNav_NodeService.php (47)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (149)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (322)");
	console.log("[20:37:59.426][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT `nodes`.*, `i18n`.`uri` AS `elementUrl`\nFROM `craft_amnav_nodes` `nodes`\nLEFT JOIN `craft_elements_i18n` `i18n` ON i18n.elementId = nodes.elementId AND i18n.locale = nodes.locale\nWHERE (`nodes`.`navId`=:pvp8PdeQSC) AND (`nodes`.`locale`=:plg8r0VcaO)\nORDER BY `nodes`.`parentId` ASC, `nodes`.`order` ASC. Bound with :pvp8PdeQSC=\'1\', :plg8r0VcaO=\'en_gb\')");
	console.log("[20:37:59.426][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT `nodes`.*, `i18n`.`uri` AS `elementUrl`\nFROM `craft_amnav_nodes` `nodes`\nLEFT JOIN `craft_elements_i18n` `i18n` ON i18n.elementId = nodes.elementId AND i18n.locale = nodes.locale\nWHERE (`nodes`.`navId`=:pvp8PdeQSC) AND (`nodes`.`locale`=:plg8r0VcaO)\nORDER BY `nodes`.`parentId` ASC, `nodes`.`order` ASC. Bound with :pvp8PdeQSC=\'1\', :plg8r0VcaO=\'en_gb\')");
	console.log("[20:37:59.426][trace][system.db.ar.CActiveRecord]\nCraft\\AmNav_NavigationRecord.findByAttributes()\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (98)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (301)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/variables/AmNavVariable.php (77)");
	console.log("[20:37:59.427][trace][system.db.CDbCommand]\nQuerying SQL: SELECT * FROM `craft_amnav_navs` `t` WHERE `t`.`handle`=:yp0 LIMIT 1. Bound with :yp0=\'customerMenu\'\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (98)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (301)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/variables/AmNavVariable.php (77)");
	console.log("[20:37:59.427][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT * FROM `craft_amnav_navs` `t` WHERE `t`.`handle`=:yp0 LIMIT 1. Bound with :yp0=\'customerMenu\')");
	console.log("[20:37:59.427][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT * FROM `craft_amnav_navs` `t` WHERE `t`.`handle`=:yp0 LIMIT 1. Bound with :yp0=\'customerMenu\')");
	console.log("[20:37:59.428][trace][system.db.CDbCommand]\nQuerying SQL: SELECT `nodes`.*, `i18n`.`uri` AS `elementUrl`\nFROM `craft_amnav_nodes` `nodes`\nLEFT JOIN `craft_elements_i18n` `i18n` ON i18n.elementId = nodes.elementId AND i18n.locale = nodes.locale\nWHERE (`nodes`.`navId`=:pwy0WkYJub) AND (`nodes`.`locale`=:pxeUqyPRu8)\nORDER BY `nodes`.`parentId` ASC, `nodes`.`order` ASC. Bound with :pwy0WkYJub=\'3\', :pxeUqyPRu8=\'en_gb\'\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNav_NodeService.php (47)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (149)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (322)");
	console.log("[20:37:59.428][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT `nodes`.*, `i18n`.`uri` AS `elementUrl`\nFROM `craft_amnav_nodes` `nodes`\nLEFT JOIN `craft_elements_i18n` `i18n` ON i18n.elementId = nodes.elementId AND i18n.locale = nodes.locale\nWHERE (`nodes`.`navId`=:pwy0WkYJub) AND (`nodes`.`locale`=:pxeUqyPRu8)\nORDER BY `nodes`.`parentId` ASC, `nodes`.`order` ASC. Bound with :pwy0WkYJub=\'3\', :pxeUqyPRu8=\'en_gb\')");
	console.log("[20:37:59.428][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT `nodes`.*, `i18n`.`uri` AS `elementUrl`\nFROM `craft_amnav_nodes` `nodes`\nLEFT JOIN `craft_elements_i18n` `i18n` ON i18n.elementId = nodes.elementId AND i18n.locale = nodes.locale\nWHERE (`nodes`.`navId`=:pwy0WkYJub) AND (`nodes`.`locale`=:pxeUqyPRu8)\nORDER BY `nodes`.`parentId` ASC, `nodes`.`order` ASC. Bound with :pwy0WkYJub=\'3\', :pxeUqyPRu8=\'en_gb\')");
	console.log("[20:37:59.429][trace][system.db.ar.CActiveRecord]\nCraft\\AmNav_NavigationRecord.findByAttributes()\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (98)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (301)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/variables/AmNavVariable.php (77)");
	console.log("[20:37:59.429][trace][system.db.CDbCommand]\nQuerying SQL: SELECT * FROM `craft_amnav_navs` `t` WHERE `t`.`handle`=:yp0 LIMIT 1. Bound with :yp0=\'footer\'\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (98)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (301)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/variables/AmNavVariable.php (77)");
	console.log("[20:37:59.429][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT * FROM `craft_amnav_navs` `t` WHERE `t`.`handle`=:yp0 LIMIT 1. Bound with :yp0=\'footer\')");
	console.log("[20:37:59.429][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT * FROM `craft_amnav_navs` `t` WHERE `t`.`handle`=:yp0 LIMIT 1. Bound with :yp0=\'footer\')");
	console.log("[20:37:59.430][trace][system.db.CDbCommand]\nQuerying SQL: SELECT `nodes`.*, `i18n`.`uri` AS `elementUrl`\nFROM `craft_amnav_nodes` `nodes`\nLEFT JOIN `craft_elements_i18n` `i18n` ON i18n.elementId = nodes.elementId AND i18n.locale = nodes.locale\nWHERE (`nodes`.`navId`=:pIeGUdx8SF) AND (`nodes`.`locale`=:p8hq4SbdaE)\nORDER BY `nodes`.`parentId` ASC, `nodes`.`order` ASC. Bound with :pIeGUdx8SF=\'2\', :p8hq4SbdaE=\'en_gb\'\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNav_NodeService.php (47)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (149)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (322)");
	console.log("[20:37:59.430][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT `nodes`.*, `i18n`.`uri` AS `elementUrl`\nFROM `craft_amnav_nodes` `nodes`\nLEFT JOIN `craft_elements_i18n` `i18n` ON i18n.elementId = nodes.elementId AND i18n.locale = nodes.locale\nWHERE (`nodes`.`navId`=:pIeGUdx8SF) AND (`nodes`.`locale`=:p8hq4SbdaE)\nORDER BY `nodes`.`parentId` ASC, `nodes`.`order` ASC. Bound with :pIeGUdx8SF=\'2\', :p8hq4SbdaE=\'en_gb\')");
	console.log("[20:37:59.431][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT `nodes`.*, `i18n`.`uri` AS `elementUrl`\nFROM `craft_amnav_nodes` `nodes`\nLEFT JOIN `craft_elements_i18n` `i18n` ON i18n.elementId = nodes.elementId AND i18n.locale = nodes.locale\nWHERE (`nodes`.`navId`=:pIeGUdx8SF) AND (`nodes`.`locale`=:p8hq4SbdaE)\nORDER BY `nodes`.`parentId` ASC, `nodes`.`order` ASC. Bound with :pIeGUdx8SF=\'2\', :p8hq4SbdaE=\'en_gb\')");
	console.log("[20:37:59.431][trace][system.db.ar.CActiveRecord]\nCraft\\AmNav_NavigationRecord.findByAttributes()\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (98)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (265)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/variables/AmNavVariable.php (46)");
	console.log("[20:37:59.431][trace][system.db.CDbCommand]\nQuerying SQL: SELECT * FROM `craft_amnav_navs` `t` WHERE `t`.`handle`=:yp0 LIMIT 1. Bound with :yp0=\'topMenu\'\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (98)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/services/AmNavService.php (265)\nin /homepages/12/d281035290/htdocs/craft/craft/plugins/amnav/variables/AmNavVariable.php (46)");
	console.log("[20:37:59.431][profile][system.db.CDbCommand.query]\nbegin:system.db.CDbCommand.query(SELECT * FROM `craft_amnav_navs` `t` WHERE `t`.`handle`=:yp0 LIMIT 1. Bound with :yp0=\'topMenu\')");
	console.log("[20:37:59.432][profile][system.db.CDbCommand.query]\nend:system.db.CDbCommand.query(SELECT * FROM `craft_amnav_navs` `t` WHERE `t`.`handle`=:yp0 LIMIT 1. Bound with :yp0=\'topMenu\')");
	console.log("[20:37:59.445][trace][system.caching.Craft\\FileCache]\nServing \"useWriteFileLock\" from cache\nin /homepages/12/d281035290/htdocs/craft/craft/app/services/CacheService.php (180)\nin /homepages/12/d281035290/htdocs/craft/craft/app/etc/logging/FileLogRoute.php (86)\nin /homepages/12/d281035290/htdocs/craft/craft/app/controllers/BaseController.php (145)");
	console.groupEnd();

	console.groupEnd();
}
/*]]>*/
</script>
<script type="text/javascript">
/*<![CDATA[*/
if (typeof(console) == 'object' && typeof console.groupCollapsed == 'function')
{
	console.groupCollapsed("Profiling Summary Report");
	console.log("Time:   0.29802s\n");
	console.log("Memory: 10,472Kb\n");
	console.log("Total Queries: 18\n");
	console.log(" count   total   average    min      max   ");

		console.log("     1  0.00097  0.00097  0.00097  0.00097    system.db.CDbCommand.query(SHOW FULL COLUMNS FROM `craft_amnav_navs`)");
	console.log("     1  0.00074  0.00074  0.00074  0.00074    system.db.CDbCommand.query(SHOW TABLES LIKE \'craft_%\')");
	console.log("     1  0.00029  0.00029  0.00029  0.00029    system.db.CDbCommand.query(SHOW CREATE TABLE `craft_amnav_navs`)");
	console.log("     2  0.00028  0.00014  0.00012  0.00015    system.db.CDbCommand.query(SELECT * FROM `craft_amnav_navs` `t` WHERE `t`.`handle`=:yp0 LIMIT 1. Bound with :yp0=\'topMenu\')");
	console.log("     1  0.00024  0.00024  0.00024  0.00024    system.db.CDbCommand.query(SELECT *\nFROM `craft_info` LIMIT 1)");
	console.log("     1  0.00023  0.00023  0.00023  0.00023    system.db.CDbCommand.query(SELECT `elements`.`id`, `elements`.`type`, `elements`.`enabled`, `elements`.`archived`, `elements`.`dateCreated`, `elements`.`dateUpdated`, `elements_i18n`.`slug`, `elements_i18n`.`uri`, `elements_i18n`.`enabled` AS `localeEnabled`, `content`.`id` AS `contentId`, `content`.`title`, `content`.`field_body`, `content`.`field_testimonialBody`, `content`.`field_testimonialName`, `entries`.`sectionId`, `entries`.`typeId`, `entries`.`authorId`, `entries`.`postDate`, `entries`.`expiryDate`, `structureelements`.`root`, `structureelements`.`lft`, `structureelements`.`rgt`, `structureelements`.`level`\nFROM `craft_elements` `elements`\nJOIN `craft_elements_i18n` `elements_i18n` ON elements_i18n.elementId = elements.id\nJOIN `craft_content` `content` ON content.elementId = elements.id\nJOIN `craft_entries` `entries` ON entries.id = elements.id\nJOIN `craft_sections` `sections` ON sections.id = entries.sectionId\nLEFT JOIN `craft_structures` `structures` ON structures.id = sections.structureId\nLEFT JOIN `craft_structureelements` `structureelements` ON (structureelements.structureId = structures.id) AND (structureelements.elementId = entries.id)\nWHERE (((elements_i18n.locale = :locale) AND (content.locale = :locale)) AND (elements.id=:elementsid1)) AND (elements.archived = 0)\nGROUP BY `elements`.`id`\nORDER BY `lft`, `postDate` DESC LIMIT 1. Bound with :locale=\'en_gb\', :elementsid1=\'17\')");
	console.log("     1  0.00023  0.00023  0.00023  0.00023    system.db.CDbCommand.query(SELECT `nodes`.*, `i18n`.`uri` AS `elementUrl`\nFROM `craft_amnav_nodes` `nodes`\nLEFT JOIN `craft_elements_i18n` `i18n` ON i18n.elementId = nodes.elementId AND i18n.locale = nodes.locale\nWHERE (`nodes`.`navId`=:pvp8PdeQSC) AND (`nodes`.`locale`=:plg8r0VcaO)\nORDER BY `nodes`.`parentId` ASC, `nodes`.`order` ASC. Bound with :pvp8PdeQSC=\'1\', :plg8r0VcaO=\'en_gb\')");
	console.log("     1  0.00023  0.00023  0.00023  0.00023    system.db.CDbCommand.query(SELECT `nodes`.*, `i18n`.`uri` AS `elementUrl`\nFROM `craft_amnav_nodes` `nodes`\nLEFT JOIN `craft_elements_i18n` `i18n` ON i18n.elementId = nodes.elementId AND i18n.locale = nodes.locale\nWHERE (`nodes`.`navId`=:pwy0WkYJub) AND (`nodes`.`locale`=:pxeUqyPRu8)\nORDER BY `nodes`.`parentId` ASC, `nodes`.`order` ASC. Bound with :pwy0WkYJub=\'3\', :pxeUqyPRu8=\'en_gb\')");
	console.log("     1  0.00020  0.00020  0.00020  0.00020    system.db.CDbCommand.query(SELECT *\nFROM `craft_plugins`\nWHERE enabled=1)");
	console.log("     1  0.00020  0.00020  0.00020  0.00020    system.db.CDbCommand.query(SELECT `nodes`.*, `i18n`.`uri` AS `elementUrl`\nFROM `craft_amnav_nodes` `nodes`\nLEFT JOIN `craft_elements_i18n` `i18n` ON i18n.elementId = nodes.elementId AND i18n.locale = nodes.locale\nWHERE (`nodes`.`navId`=:pIeGUdx8SF) AND (`nodes`.`locale`=:p8hq4SbdaE)\nORDER BY `nodes`.`parentId` ASC, `nodes`.`order` ASC. Bound with :pIeGUdx8SF=\'2\', :p8hq4SbdaE=\'en_gb\')");
	console.log("     1  0.00019  0.00019  0.00019  0.00019    system.db.CDbCommand.query(SELECT `f`.`id`, `f`.`groupId`, `f`.`name`, `f`.`handle`, `f`.`context`, `f`.`instructions`, `f`.`translatable`, `f`.`type`, `f`.`settings`\nFROM `craft_fields` `f`\nWHERE `f`.`context` IN (\'global\')\nORDER BY `f`.`name`)");
	console.log("     1  0.00018  0.00018  0.00018  0.00018    system.db.CDbCommand.query(SELECT `elements`.`id`, `elements`.`type`, `elements`.`enabled`, `elements`.`archived`, `elements`.`dateCreated`, `elements`.`dateUpdated`, `elements_i18n`.`slug`, `elements_i18n`.`uri`, `elements_i18n`.`enabled` AS `localeEnabled`, `content`.`id` AS `contentId`, `content`.`field_body`, `content`.`field_testimonialBody`, `content`.`field_testimonialName`, `globalsets`.`name`, `globalsets`.`handle`, `globalsets`.`fieldLayoutId`\nFROM `craft_elements` `elements`\nJOIN `craft_elements_i18n` `elements_i18n` ON elements_i18n.elementId = elements.id\nJOIN `craft_content` `content` ON content.elementId = elements.id\nJOIN `craft_globalsets` `globalsets` ON globalsets.id = elements.id\nWHERE ((((elements_i18n.locale = :locale) AND (content.locale = :locale)) AND (elements.archived = 0)) AND (elements.enabled = 1)) AND (elements_i18n.enabled = 1)\nGROUP BY `elements`.`id`\nORDER BY `name` LIMIT 100. Bound with :locale=\'en_gb\')");
	console.log("     1  0.00018  0.00018  0.00018  0.00018    system.db.CDbCommand.query(SELECT *\nFROM `craft_sections_i18n` `sections_i18n`\nJOIN `craft_locales` `locales` ON locales.locale = sections_i18n.locale\nWHERE sections_i18n.sectionId = :sectionId\nORDER BY `locales`.`sortOrder`. Bound with :sectionId=\'16\')");
	console.log("     1  0.00017  0.00017  0.00017  0.00017    system.db.CDbCommand.query(SELECT `sections`.`id`, `sections`.`structureId`, `sections`.`name`, `sections`.`handle`, `sections`.`type`, `sections`.`hasUrls`, `sections`.`template`, `sections`.`enableVersioning`, `structures`.`maxLevels`\nFROM `craft_sections` `sections`\nLEFT JOIN `craft_structures` `structures` ON structures.id = sections.structureId\nWHERE sections.id = :sectionId\nORDER BY `name`. Bound with :sectionId=\'16\')");
	console.log("     1  0.00016  0.00016  0.00016  0.00016    system.db.CDbCommand.query(SELECT `elements`.`id`, `elements`.`type`\nFROM `craft_elements` `elements`\nJOIN `craft_elements_i18n` `elements_i18n` ON elements_i18n.elementId = elements.id\nWHERE (elements_i18n.uri = :uri) AND (elements_i18n.locale = :locale) AND (elements_i18n.enabled = 1) AND (elements.enabled = 1) AND (elements.archived = 0). Bound with :uri=\'customer-signup\', :locale=\'en_gb\')");
	console.log("     1  0.00013  0.00013  0.00013  0.00013    system.db.CDbCommand.query(SELECT `locale`\nFROM `craft_locales`\nORDER BY `sortOrder` LIMIT 1)");
	console.log("     1  0.00013  0.00013  0.00013  0.00013    system.db.CDbCommand.query(SELECT * FROM `craft_amnav_navs` `t` WHERE `t`.`handle`=:yp0 LIMIT 1. Bound with :yp0=\'customerMenu\')");
	console.log("     1  0.00012  0.00012  0.00012  0.00012    system.db.CDbCommand.query(SELECT * FROM `craft_amnav_navs` `t` WHERE `t`.`handle`=:yp0 LIMIT 1. Bound with :yp0=\'footer\')");

	console.groupEnd();
}
/*]]>*/
</script>
