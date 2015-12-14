<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script>
	$(function () {
		$('nav li ul').hide().removeClass('fallback');
		$('nav li').hover(function () {
			$('ul', this).stop().slideToggle(200);
		});
	});
	</script>
    <script>
var slideimages=new Array()
var slidelinks=new Array()
function slideshowimages(){
for (i=0;i<slideshowimages.arguments.length;i++)
{slideimages[i]=new Image()
slideimages[i].src=slideshowimages.arguments[i]}
}

function slideshowlinks(){
for (i=0;i<slideshowlinks.arguments.length;i++)
slidelinks[i]=slideshowlinks.arguments[i]
}

function gotoshow(){
if (!window.winslide||winslide.closed)
winslide=window.open(slidelinks[whichlink])
else
winslide.location=slidelinks[whichlink]
winslide.focus()}
</script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
		$('.Menu > li').bind('mouseover', openSubMenu);
		$('.Menu > li').bind('mouseout', closeSubMenu);
		
		function openSubMenu() {
			$(this).find('ul').css('visibility', 'visible');	
		};
		
		function closeSubMenu() {
			$(this).find('ul').css('visibility', 'hidden');	
		};
				   
});
</script>
<style>
body {background-color:#D1E6E7;}
ul.navigation {list-style-type:none;margin:0;padding:0;overflow:hidden;}
li.navigation {float:left;}
a:link,a:visited {display:block;width:120px;font-weight:bold;color:#5B7778;background-color:#EDBD3E;text-align:center;padding:4px;text-decoration:none;text-transform:uppercase;}
a:hover,a:active {background-color:#0000FF;}
.error {color: #FF0000;}
nav ul {text-align:center;}
nav ul li {float:left;display:inline;}
nav ul li:hover {background:#E6E6E6;}
nav ul li a {display:block;padding:15px 25px;color:#444;}
nav ul li ul {position:absolute;width:110px;background:#FFF;}
nav ul li ul li {margin:0;padding:0;width:110px;}
nav ul li ul li a {display:block;padding:15px 10px;color:#444;}
nav ul li ul li:hover a {background:#F7F7F7;}
nav ul li ul.fallback {display:none;}
nav ul li:hover ul.fallback {display:block;}
h1 {color:#93A8A9;text-align:center;text-transform:capitalize;font-family:"Times New Roman", Times, Serif}
p{color:#93A8A9;}
</style>