<!------------- DOCUMENT HEAD CONTENT ----------------------->

<!------ FAVICON ICON LINKS ------->


<!-- This piece of valid code tells mobile devices not to zoom out as a default. -->
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />

<!--#################### TEACHES OLDER BROWSERS HTML5 ######################## -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--#################### IE BUG FIX ######################## -->
<!--[if lt IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->

<!-- 
Image resizer script.

The code doesn't work in IE6 or less, so I suggest the following
conditionally-commented code in your <head> be used to implement the
JavaScript on your RWD website
-->

<!--[if ! lte IE 6]><!-->
<script type="text/javascript" src="scripts/miscellaneous.js">
addLoadEvent(function() {
if (document.getElementById && document.getElementsByTagName) {
var aImgs =
document.getElementById("content").getElementsByTagName("img");
imgSizer.collate(aImgs);
}
});
</script>
<!--<![endif]-->

<!-- 
The following script allows all browsers to support media queries in CSS.
-->

<!--[if lt IE 9]>
<script src="http://css3-mediaqueriesjs.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<script type="text/javascript" src="scripts/miscellaneous.js"></script>

<!-- 
External CSS with CSS Reset embedded.
-->

<link rel="stylesheet" type="text/css" href="stylesheets/public.css">
<link rel="stylesheet" type="text/css" href="stylesheets/responsive_form.css">
<!--[if (lt IE 9) & (!IEMobile)]>
 <script src="javascript/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body>
<section id="wrapper">