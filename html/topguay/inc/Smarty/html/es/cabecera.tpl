<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>{$WEB_TITLE}</title>
<meta name="Description" content="{$DESCRIPTION}">
<meta name="Keywords" content="{$KEYWORDS}">

<link href="css/global.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE7.js" type="text/javascript"></script>
<![endif]-->
<!-- -->
<script src="js/global.js" type="text/javascript"></script>
<script src="js/prototype.js" type="text/javascript"></script>
<script language="javascript">AC_FL_RunContent = 0;</script>
<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>

<link rel="stylesheet" href="css/sIFR-screen.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/sIFR-print.css" type="text/css" media="print">
	
  {literal}
  <style type="text/css" media="screen">
    .sIFR-active h1,
    .sIFR-active h2,
    .sIFR-active h3,
    .sIFR-active h4,
/*    .sIFR-active h5#pullquote {
		visibility: hidden;
		font-family: Verdana;
		line-height: 1em;
		padding:0px;
		margin:0px;
		color:#FFFFFF;
    }*/

    .sIFR-active h1 {
      padding-bottom: 0;
	  font-size:32px;
	  color:#da5800;
	  text-align:left;
    }
	
    .sIFR-active h2 {
      padding-bottom: 0;
	  font-size:42px;
	  color:#da5800;
	  text-align:left;
	  padding:0px;
	  margin:0px;
    }


 </style>
 {/literal}

  <script src="js/sifr.js" type="text/javascript"></script>
  <script src="js/sifr-debug.js" type="text/javascript"></script>
  
  {literal}
  <script type="text/javascript">
  //<[CDATA[

  var titular = {
    src: 'titular.swf'
    ,ratios: [7,1.32,11,1.31,13,1.24,14,1.25,19,1.23,27,1.2,34,1.19,42,1.18,47,1.17,48,1.18,69,1.17,74,1.16,75,1.17,1.16]
  };

  // You probably want to switch this on, but read <http://wiki.novemberborn.net/sifr3/DetectingCSSLoad> first.
  // sIFR.useStyleCheck = true;
  sIFR.activate(titular);

  sIFR.replace(titular, {
    selector: 'h1'
    ,css: [
      '.sIFR-root { letter-spacing: 4; font-size:32px; text-align: left; font-weight: bold; color:#da5800; background-color: #ffffff; }'
      ,'a { text-decoration: none; }'
      ,'a:link { color: #ffffff; }'
      ,'a:hover { color: #ffffff; }'
    ]
  });

  sIFR.replace(titular, {
    selector: 'h2'
    ,css: [
      '.sIFR-root { letter-spacing: 4; font-size:42px; text-align: left; font-weight: bold; color:#da5800; background-color: #ffffff; }'
      ,'a { text-decoration: none; }'
      ,'a:link { color: #ffffff; }'
      ,'a:hover { color: #ffffff; }'
    ]
  });
  {/literal}



  
  //]]>
  </script>

</head>

</head>
