<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>The Archival Acid Test</title>
	<base href="http://acid.matkelly.com/" />
	<script>// Better browser detection, ftw!


			(function(){var p=[],w=window,d=document,e=f=0;p.push('ua='+encodeURIComponent(navigator.userAgent));e|=w.ActiveXObject?1:0;e|=w.opera?2:0;e|=w.chrome?4:0;
			e|='getBoxObjectFor' in d || 'mozInnerScreenX' in w?8:0;e|=('WebKitCSSMatrix' in w||'WebKitPoint' in w||'webkitStorageInfo' in w||'webkitURL' in w)?16:0;
			e|=(e&16&&({}.toString).toString().indexOf("\n")===-1)?32:0;p.push('e='+e);f|='sandbox' in d.createElement('iframe')?1:0;f|='WebSocket' in w?2:0;
			f|=w.Worker?4:0;f|=w.applicationCache?8:0;f|=w.history && history.pushState?16:0;f|=d.documentElement.webkitRequestFullScreen?32:0;f|='FileReader' in w?64:0;
			p.push('f='+f);p.push('r='+Math.random().toString(36).substring(7));p.push('w='+screen.width);p.push('h='+screen.height);var s=d.createElement('script');
			s.src='http://acid.matkelly.com/WhichBrowser/detect.js?' + p.join('&');d.getElementsByTagName('head')[0].appendChild(s);})();
	</script>
<style type="text/css">
 /* TODO: Potentially some CSS3 features that Heritrix might not provoke crawlers to fetch content by reference */
 
 body {height: 150%;}
 div#relativeImageFromCSS {background-image: url('img.png');}
 div#absoluteImageFromCSS {background-image: url('http://thisdomain.com/img.png');}
 div#externalImageFromCSS {background-image: url('http://anotherSite/img.png');}
 div {width: 100px;}
 img, canvas {width: 10px; height: 10px; margin: 0 1px 1px 0; padding: 0; display: block; float: left;}
 
 iframe {padding: 0; margin: 0; border: 0;}
 h1 {margin-bottom: 0; padding-bottom: 0;}
 h2, h3, h4, p {margin: 0; padding: 0; clear: both;}
 h2 {margin-top: 1.0em;}
 ul {margin: 0.5em auto; padding-top: 0; list-style-type: none;}
 video {margin: 0; padding: 0; float: left; border: 0;}
 
 div {height: 10px; border: 1px solid black; padding: 1px 0 1px 1px;}
 div#test1 {width: 66px;}
 div#scriptParent {width: 88px;}
 div#html5Parent {width: 44px;}
 iframe#test3c {padding-right: 1px; margin: 0; float: left;}
 
 p#test2iHeightAssurance {margin-top: 2000px;}
 p {margin-bottom: 1.0em;}
 li span {font-style: italic;}

 #detectedBrowser {font-style: normal;}
</style>
<link rel="stylesheet" type="text/css" href="1f.css" />
<script type="text/javascript" src="arrayBuffer.js"></script>
</head>
<body>
<h1>The Archival Acid Test</h1>
<p>This page was setup to test the capabilities and shortcomings of archival web crawlers. More information about the rationale and individual tests can be found <a href="#moreInfo">below</a>. For questions/comments contact <a href="mailto:archiveacidtest@matkelly.com?subject=Archive Acid test comment">Mat Kelly</a>.</p>

<h2>The Tests</h2>

<h3>The Basics (6 tests)</h3>
<div id="test1">
<!--Test 1a, Local Image, relative --><img src="pixel.png" title="test1a" />
<!--Test 1b, Local Image, absolute --><img src="http://acid.matkelly.com/pixel.png" title="test1b" />
<!--Test 1c, Remote Image, absolute --><img src="http://www.cs.odu.edu/~mkelly/acid/pixel.png" title="test1c" />
<!--Test 1d, Inline Content, Encoded Image--><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdp
bj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6
eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEz
NDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJo
dHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlw
dGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAv
IiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RS
ZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpD
cmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlE
PSJ4bXAuaWlkOjZDOTUzNTREMUVCRDExRTJBRjM2RkI1NjAwQzQzQTFGIiB4bXBNTTpEb2N1bWVu
dElEPSJ4bXAuZGlkOjZDOTUzNTRFMUVCRDExRTJBRjM2RkI1NjAwQzQzQTFGIj4gPHhtcE1NOkRl
cml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NkM5NTM1NEIxRUJEMTFFMkFGMzZG
QjU2MDBDNDNBMUYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NkM5NTM1NEMxRUJEMTFFMkFG
MzZGQjU2MDBDNDNBMUYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1l
dGE+IDw/eHBhY2tldCBlbmQ9InIiPz5pvSZLAAAADklEQVR42mJmYPgPEGAAAQ8BA8CY0HcAAAAA
SUVORK5CYII=" title="test1d" />
<!--Test 1e, Scheme-less resource --><img src="//acid.matkelly.com/pixel.png" title="test1e" />
<!--Test 1f, Recursively included CSS --><img src="transparent_1f.png" title="test1f" class="onef" id="onef" />
</div>

<h3>Javascript (8 tests)</h3>
<div id="scriptParent">
<!--Test 2a, Script, local --><script type="text/javascript" src="localScript.js" id="localScript"></script>
<!--Test 2b, Script, remote --><script type="text/javascript" src="http://www.cs.odu.edu/~mkelly/acid/externalScript.js" id="externalScript"></script>

<script type="text/javascript">
//Test 2c, Script inline, DOM Manipution
document.addEventListener('DOMContentLoaded',function(){
	var inlineScriptImage = new Image();
	inlineScriptImage.src = "pixel.png";
	inlineScriptImage.title = "test2c";
	var scriptParent = document.getElementById('scriptParent');
	scriptParent.appendChild(inlineScriptImage);	
});
	
//Test 2d, AJAX image replacement of content that should be in the archive
document.addEventListener('DOMContentLoaded',function(){
	//Test 2d setup
	var test2DImageRed = new Image();
	test2DImageRed.src = "red.png";
	test2DImageRed.id = "test2d";
	test2DImageRed.title = "test2d";
	var scriptParent = document.getElementById('scriptParent');
	scriptParent.appendChild(test2DImageRed);	
	
	//Test 2d init AJAX
	var xhr = new XMLHttpRequest();
	xhr.open('GET','http://acid.matkelly.com/pixel.png',true);
	xhr.responseType = 'arraybuffer';
	xhr.onload = function(e) {
		document.getElementById('test2d').src = "data:image/png;base64,"+base64ArrayBuffer(e.currentTarget.response);
	};
	
	xhr.send();	
});

//Test 2e, AJAX requests with content that should be included in the archive, test for false positive
// e.g. Same Origin Policy
document.addEventListener('DOMContentLoaded',function(){
	//Test 2e setup
	var test2EImageBlue = new Image();
	test2EImageBlue.src = "pixel.png";
	test2EImageBlue.id = "test2e";
	test2EImageBlue.title = "test2e";
	var scriptParent = document.getElementById('scriptParent');
	scriptParent.appendChild(test2EImageBlue);	
	
	//Test 10 init AJAX
	var xhr = new XMLHttpRequest();
	xhr.open('GET','http://acid.matkelly.com/pixel.png',true); 
	try{
		xhr.responseType = 'arraybuffer';	//response type of synchronous request should not be changeable, INVALID_ACCESS_ERR: DOM Exception 15
		xhr.onload = function(e) {
			document.getElementById('test2e').src = "data:image/png;base64,"+base64ArrayBuffer(e.currentTarget.response);
		};
		xhr.send();	
	}catch(err){
		//console.log(err); //correct path
	}
	
	
});


// TODO Test 2f: some code only served to certain user agents
// Test 2g: code that manipulates DOM after a certain delay (test the synchonicity of tools)
document.addEventListener('DOMContentLoaded',function(){
	//Test 12 setup
	var test2GImageRed = new Image();
	test2GImageRed.src = "red.png";
	test2GImageRed.id = "test2g";
	test2GImageRed.title = "test2g";
	var scriptParent = document.getElementById('scriptParent');
	scriptParent.appendChild(test2GImageRed);
	
	//change image after 2 seconds
	setTimeout(function(){
		document.getElementById('test2g').src = "pixel.png";
	},2000);
	
});

// Test 2h: code that manipulates DOM after a certain delay (test the synchonicity of tools)
document.addEventListener('DOMContentLoaded',function(){
	//Test 2h setup
	//var test13ImageBlue = new Image();
	var test2HIframeBlue = document.createElement('iframe');
	test2HIframeBlue.src = "pixel.png";
	test2HIframeBlue.id = "test2h";
	test2HIframeBlue.title = "test2h";
	var scriptParent = document.getElementById('scriptParent');
	//scriptParent.appendChild(test13ImageBlue);	
	//scriptParent.appendChild(test13IframeBlue);	
	
	setTimeout(function(){
		//document.write('<scr'+'ipt type="text/javascript" src="dynamicallyIncludedScript.js"></sc'+'ript>');
	},2100);
});

// Test 2i: code that loads content only after user interaction (tests for interaction-reliant loading of resource)
var test2iExecuted = false;
document.addEventListener('DOMContentLoaded',function(){
	var test2IImageRed = new Image();
	test2IImageRed.src = "red.png";
	test2IImageRed.id = "test2i";
	test2IImageRed.title = "test2i";
	var scriptParent = document.getElementById('scriptParent');
	scriptParent.appendChild(test2IImageRed);
	window.onscroll = function(oEvent){
		if(test2iExecuted){return;}
		test2iExecuted = true;
		document.getElementById('test2i').src = "pixel_2i.png";
	};
});

// Test 2j: Dynamically added stylesheets
document.addEventListener('DOMContentLoaded',function(){
	//Test 2j setup
	var test2JImageRed = document.createElement('img');
	test2JImageRed.src = "transparent_2j.png";
	test2JImageRed.id = "test2j";
	test2JImageRed.title = "test2j";
	
	var scriptParent = document.getElementById('scriptParent');
	scriptParent.appendChild(test2JImageRed);

	
	var linkTag = document.createElement("link");
	linkTag.href = "2j.css";
	linkTag.rel = "stylesheet";
	linkTag.type = "text/css";
	
	document.head.appendChild(linkTag);
	//scriptParent.appendChild(test13ImageBlue);	
	//scriptParent.appendChild(test13IframeBlue);	
	
	setTimeout(function(){
		//document.write('<scr'+'ipt type="text/javascript" src="dynamicallyIncludedScript.js"></sc'+'ript>');
	},2100);
});



</script>
</div>

<h3>Advanced Features Tests (4 tests)</h3>
<div id="html5Parent">
<script type="text/javascript" id="test3Ascript">

//TEST 3a: 	HTML5 Canvas drawing
document.addEventListener('DOMContentLoaded',function(){	
	//Test 3a setup
	var test3Acanvas = document.createElement('canvas');
	test3Acanvas.width = "10";
	test3Acanvas.height = "10";
	test3Acanvas.id = "test3a";
	test3Acanvas.title = "test3a";
	var scriptParent = document.getElementById('html5Parent');
	scriptParent.replaceChild(test3Acanvas,document.getElementById('test3Ascript'));	
	
	//Test 3a, HTML5 Canvas Draw
	var canvas = document.getElementById('test3a');
	var context = canvas.getContext("2d");
	context.fillStyle = "#0000FF";
	context.fillRect(0,0,10,10);
	
});

//Test 3b: LocalStorage
document.addEventListener('DOMContentLoaded',function(){	
	//Test3b setup
	var test3BImageRed = new Image();
	test3BImageRed.src = "red.png";
	test3BImageRed.id = "test3b";
	test3BImageRed.title = "test3b";
	var scriptParent = document.getElementById('html5Parent');
	scriptParent.appendChild(test3BImageRed);	
	
	localStorage.setItem("test3bSrc", "pixel.png");
	document.getElementById('test3b').src = localStorage.getItem('test3bSrc');
	
});

//Test 3c: Embedded web page (iframe)
document.addEventListener('DOMContentLoaded',function(){
	var test3CIFrameElement = document.createElement("iframe");
	test3CIFrameElement.id = "test3c";
	test3CIFrameElement.width = "10";
	test3CIFrameElement.height = "10";
	test3CIFrameElement.src = "3c.html";
	test3CIFrameElement.title = "test3c";
		
	var scriptParent = document.getElementById('html5Parent');
	scriptParent.appendChild(test3CIFrameElement);	
});

//Test 3f: HTML5 Multimedia
document.addEventListener('DOMContentLoaded',function(){
	var test3FVideoElement = document.createElement("video");
	test3FVideoElement.id = "test3f";
	test3FVideoElement.width = "10";
	test3FVideoElement.height = "10";
	test3FVideoElement.autoplay = "autoplay";
	test3FVideoElement.title = "test3f";
	
	var test3FSourceElement = document.createElement("source");
	test3FSourceElement.src = "pixel_3f.mp4";
	test3FSourceElement.type = "video/mp4";
	
	test3FVideoElement.appendChild(test3FSourceElement);
	
	var scriptParent = document.getElementById('html5Parent');
	scriptParent.appendChild(test3FVideoElement);	
});


</script>


</div>


<!--<script type="text/javascript">
	document.body.append('img');
	document.write("<scrip" + "t src='dynamicallyIncludedScript.js'>"+ " "+"</sc"+"ript>");
</script>
</div>

<h3>HTML5 Features</h3>
<div>
<iframe id="externalWebpage"></iframe>
<iframe id="xssAllowed"></iframe>
<iframe id="xssDisallowed"></iframe>
</div>

<h3>Embedded Objects</h3>
<div>
<object><param src="includedAudio.mp3"></object>
<embed src="anotherIncluedAudioTrack.mp3"></embed>
<object src="http://youtube.com/someYouTubeVideo.flv"></object>
</div>-->

<h2 id="moreInfo">More Information</h2>

<h3>The Motivation</h3>
<p>The purpose of this web page is to test the capability of web crawlers intended for archiving (e.g., Heritrix) and potentially their corresponding replay systems (e.g., Wayback). 

<h3>Tests' Rationales</h3>
<p>Tell an archival crawler to capture this page. Replay the capture in an archival replay system. Any non-blue squares means that some aesthetic or functionality capability of the page on the live web is not being preserved into the archive.</p>

<h4>The Basics</h4>
<ul>
<li>1a - Local image, relative to the test</li>
<li>1b - Local image, absolute URI</li>
<li>1c - Remote image, absolute</li>
<li>1d - Inline content, encoded image</li>
<li>1e - Scheme-less resource</li>
<li>1f - Recursively included CSS</li>
</ul>

<h4>JavaScript</h4>
<ul>
<li>2a - Script, local</li>
<li>2b - Script, remote</li>
<li>2c - Script inline, DOM manipulation</li>
<li>2d - Ajax image replacement of content that should be in archive</li>
<li>2e - Ajax requests with content that should be included in the archve, test for false positive (e.g., same origin policy)</li>
<li>2f - Code only served to certain user agents (e.g., mobile) <span>(not implemented)</span></li>
<li>2g - Code that manipulates DOM after a certain delay (test the synchronicity of the tools)</li>
<li>2h - <span>Vacant</span></li>
<li>2i - Code that loads content only after user interaction (tests for interaction-reliant loading of a resource)</li>
<li>2j - Code that dynamically adds stylesheets</li>
</ul>

<h4>HTML5 Features</h4>
<ul>
<li>3a - HTML5 Canvas Drawing</li>
<li>3b - LocalStorage</li>
<li>3c - External Webpage</li>
<li>3d - XSS Allowed <span>(not implemented)</span></li>
<li>3e - XSS Disallowed <span>(not implemented)</span></li>
<li>3f - Embedded Objects (HTML5 video)</li>
</ul>

<p id="test2iHeightAssurance">&nbsp;</p>


<script>	 
   
document.addEventListener('DOMContentLoaded',function(){
			function waitForWhichBrowser(cb) {
				var callback = cb;
				
				function wait() {
					if (typeof WhichBrowser == 'undefined') 
						window.setTimeout(wait, 100)
					else 
						callback();
				}
				
				wait();
			}

			waitForWhichBrowser(function() {
				var o = document.getElementById('detectedBrowser');
	
				Browsers = new WhichBrowser({
					useFeatures:		true,
					detectCamouflage:	true
				});
			
				o.innerHTML = Browsers;
			
			});
});
</script>

<h3>Metadata</h3>
<ul>
<li>Reported User-Agent string: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
<li>Detected User-Agent: <span id="detectedBrowser"></span></li>
<li>Access Time: <?php echo date('Y-m-d H:i:s'); ?></li>
</ul>



</body>
</html>
