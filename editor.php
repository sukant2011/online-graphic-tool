<!DOCTYPE html>    
<head>
    <meta charset="utf-8">
    <title>Editor made by Sukant</title>
	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

	<!-- Get version 1.1.0 of Fabric.js from CDN -->
	<script src="js/fabric.js" ></script>
 
	<!-- Get the highest 1.X version of jQuery from CDN. Required for ready() function. -->
	<script src="js/jquery.js"></script> 
	<script src="js/bootstrap.js"></script> 
	<style>
	#mainContainer{
		float:left;
		width:100%;
		margin-top: 77px;

	}
	#innerContainer{
		margin:0 auto;
		width:70%;
		border: 1px solid #d6d6d6;
		height: 500px;
	}
	.leftBlk{
		float:left;
		width:30%;
		border-right:1px solid #d6d6d6;
		height: 500px;
	}
    .rightBlk{
		float:left;
		width:60%;
		height: 500px;
	}
	#canvasBlk{
		width: 100%;
		height: 100%;
	}
	.fsize24 {
		font-size: 24px;
	}
	.toolbar {
    color: #fff;
    display: inline-block;
    height: 40px;
    margin-bottom: 15px;
    position: relative;
    text-align: center;
    visibility: hidden;
    white-space: nowrap;
}
.toolbar .divider {
    border-right: 1px solid #eee;
    display: inline-block;
    height: 25px;
    margin: 4px 5px 0 0;
    vertical-align: top;
    width: 1px;
}
.toolbar .btn {
    background: #fb956c none repeat scroll 0 0;
    border: 0 none;
    border-radius: 2px;
    box-shadow: 1px 1px 0 #e14506, 2px 2px 0 #e14506, 3px 3px 0 #e14506;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-size: 12px;
    font-weight: 700;
    height: 29px;
    margin: 2px 8px 10px 2px;
    outline: 0 none;
    padding: 10px 7px 7px;
    position: relative;
    text-decoration: none;
    text-transform: uppercase;
    vertical-align: top;
    white-space: nowrap;
}
.toolbar .btn.on {
    background: #fa7c49 none repeat scroll 0 0;
    color: rgba(255, 255, 255, 0.6);
}
.toolbar .btn.on:hover {
    background: #fa7c49 none repeat scroll 0 0;
    color: rgba(255, 255, 255, 0.6);
}
.toolbar .btn:hover {
    background: #fa7c49 none repeat scroll 0 0;
}
.toolbar .btn.on, .toolbar .btn:active {
    box-shadow: 1px 1px 0 #e14506;
    left: 2px;
    top: 2px;
}
.toolbar .btn span {
    font-weight: 700;
    padding: 3px 0;
    text-align: center;
}
.toolbar .btn.blue {
    background: #70a7f5 none repeat scroll 0 0;
    box-shadow: 1px 1px 0 #116cee, 2px 2px 0 #116cee, 3px 3px 0 #116cee;
}
.toolbar .btn.blue:hover {
    background: #4f92f3 none repeat scroll 0 0;
}
.toolbar .btn.blue:active {
    box-shadow: 1px 1px 0 #116cee;
}
.toolbar .btn.green {
    background: #77d88e none repeat scroll 0 0;
    box-shadow: 1px 1px 0 #2ea14a, 2px 2px 0 #2ea14a, 3px 3px 0 #2ea14a;
}
.toolbar .btn.green:hover {
    background: #5bd077 none repeat scroll 0 0;
}
.toolbar .btn.green:active {
    box-shadow: 1px 1px 0 #2ea14a;
}
.toolbar .btn .icon {
    display: inline-block;
    vertical-align: top;
}
.toolbar .btn.share-button .icon {
    background-position: -560px 0;
    height: 20px;
    margin-left: 2px;
    margin-top: -8px;
    width: 35px;
}
.toolbar .btn.facebook-share .icon {
    background-position: -560px 0;
    height: 20px;
    margin-right: 2px;
    margin-top: -8px;
    width: 12px;
}
.toolbar .btn.facebook-send .icon {
    background-position: -596px 0;
    height: 20px;
    margin-right: 2px;
    margin-top: -8px;
    width: 28px;
}
.toolbar .btn.tweet-button .icon {
    background-position: -573px 0;
    height: 20px;
    margin-right: 2px;
    margin-top: -8px;
    width: 20px;
}
.toolbar .dropdown {
    display: inline-block;
    margin: 0 10px 2px 2px;
    white-space: normal;
}
.toolbar .dropdown .dropdown-title {
    display: block;
    margin: 2px 0 0;
    width: 100%;
}
.toolbar .dropdown .dropdown-title span {
    pointer-events: none;
}
.toolbar .dropdown .dropdown-title:hover {
    background: #fa6d35 none repeat scroll 0 0;
}
.toolbar .dropdown .dropdown-title.open {
    background: #fa6d35 none repeat scroll 0 0;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.toolbar .dropdown .dropdown-list {
    display: none;
    font-size: 14px;
    position: absolute;
    z-index: 111111;
}
.toolbar .dropdown .dropdown-list .dropdown-list-inner {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #bbb;
    border-radius: 3px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    margin-top: 12px;
    position: relative;
}
.toolbar .dropdown .dropdown-list .dropdown-list-inner::before {
    border-color: transparent transparent #bbb;
    border-style: solid;
    border-width: 0 8px 8px;
    bottom: auto;
    content: "";
    height: 0;
    left: 50%;
    margin-left: -8px;
    position: absolute;
    right: auto;
    top: -9px;
    width: 0;
}
.toolbar .dropdown .dropdown-list .dropdown-list-inner::after {
    border-color: transparent transparent #fff;
    border-style: solid;
    border-width: 0 8px 8px;
    bottom: auto;
    content: "";
    height: 0;
    left: 50%;
    margin-left: -8px;
    position: absolute;
    right: auto;
    top: -8px;
    width: 0;
}
.toolbar .dropdown .dropdown-list.open {
    display: block;
}
.toolbar .dropdown .dropdown-list .dropdown-item {
    color: #333;
    cursor: pointer;
    display: block;
    font-size: 12px;
    padding: 9px 0;
    text-decoration: none;
    width: 100%;
}
.toolbar .dropdown .dropdown-list .dropdown-item:hover {
    background: #fdcdb5 none repeat scroll 0 0;
}
.toolbar .dropdown .dropdown-list .dropdown-item:focus {
    outline: 0 none;
}
.toolbar .dropdown .dropdown-list .dropdown-item.selected {
    background: #fdcdb5 none repeat scroll 0 0;
}
.color-dropdown {
    position: relative;
}
.color-dropdown .dropdown-title {
    text-align: center;
}
.color-dropdown .dropdown-title.light {
    box-shadow: 2px 2px 1px rgba(0, 0, 0, 0.4) !important;
    color: #777;
}
.color-dropdown .dropdown-title .value {
    display: none;
}
.color-dropdown .dropdown-list {
    width: 150px;
}
.color-dropdown .dropdown-list ul {
    padding: 6px;
}
.color-dropdown .dropdown-list li {
    cursor: pointer;
    display: inline-block;
    height: 34px;
    margin: 6px 4px;
    width: 34px;
}
.color-dropdown .dropdown-list li .dropdown-item {
    border: 2px solid #fff;
    border-radius: 100%;
    box-shadow: 0 0 4px #bbb;
    display: inline-block !important;
    height: 100%;
    padding: 0 !important;
    transition: all 0.15s ease 0s !important;
    width: 100%;
}
.color-dropdown .dropdown-list li .dropdown-item:hover, .color-dropdown .dropdown-list li .dropdown-item.selected {
    box-shadow: 0 0 6px #555;
}
.size-dropdown .dropdown-list {
    width: 100px;
}
.size-dropdown .dropdown-list li a {
    height: 32px;
    line-height: 32px;
    padding: 0 !important;
}
.size-dropdown .dropdown-list li a.small {
    height: 26px;
    line-height: 26px;
}
.size-dropdown .dropdown-list li a.large {
    height: 36px;
    line-height: 36px;
}
.size-dropdown .dropdown-list li span {
    background: #000 none repeat scroll 0 0;
    border-radius: 100%;
    display: inline-block;
    vertical-align: middle;
}
.vibration-dropdown .dropdown-list {
    width: 100px;
}
@media all and (max-width: 940px) {
.toolbar .share-button .icon {
    display: none !important;
}
}	
	</style>
 
<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			  <div class="container">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">Brand</a>
			    </div>
			    <div class="collapse navbar-collapse">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="#">Home</a></li>
			        <li><a href="#about">About</a></li>
			        <li><a href="#contact">Contact</a></li>
			      </ul>
			    </div><!--/.nav-collapse -->
			  </div>
		</div>

		<div class="container">
		  
			 <div id="mainContainer">
				<div id="innerContainer">
					<div class="leftBlk">
						<i class="fa fa-font fsize24" data-toggle="tooltip" title="Add Text" id="btnAddText"></i>
					</div>	
					<div class="rightBlk">
						<div class="toolbar" style="display: inline-block; width: 500px; visibility: visible;">
							<div name="new-button" title="New sketch" class="btn new-button green">New</div>
							<div name="save-button" title="Save the sketch" class="btn save-button green">Save</div>

							<div class="divider"></div>

							<div name="undo-button" title="Undo last action" class="btn undo-button">Undo</div>
							<div name="eraser-toggle" title="Eraser" class="btn eraser-toggle" id="btnClearCanvas">Clear</div>
						</div>
						<!-- A canvas tag is required or 
							 Fabric.js doesn't know where to draw. -->
						<canvas id="canvasBlk" style="border:1px solid black;" ></canvas>
					</div>	
				</div>
			</div>	
		  
		</div><!-- /.container -->
		
		
</body>
 
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script>
	$(function () {
		
		// Obtain a canvas drawing surface from fabric.js
		var canvas = new fabric.Canvas('canvasBlk');
 		canvas.setHeight(400);
		canvas.setWidth(500);

		fabric.CustomText = fabric.util.createClass(fabric.Text, {
		    type: 'custom-text',
		    initialize: function(element, options) {
		        this.callSuper('initialize', element, options);
		        options && this.set('applicableFonts', options.applicableFonts);
		    },
		    toObject: function() {
		        return fabric.util.object.extend(this.callSuper('toObject'), {applicableFonts: this.applicableFonts});
		    }
		});    
		fabric.CustomText.fromObject = function(object) {
		    return new fabric.CustomText(object.text, object);
		};
		fabric.CustomText.async = false;
		//////////////////////////////////////////////////////////////    
		$("#btnAddText").click(function(){
		    var object = new fabric.Text("NEW TEXT", { 
		        fontFamily: "Arial", 
		        left: 150,
		        top: 100,
		        fontSize: 24,
		        textAlign: "left",
		        fill: "#000000"
		    });
		    canvas.add(object);
		    canvas.renderAll();
		});
		$("#btnAddCustomText").click(function(){
		    var customText = new fabric.CustomText("NEW CUSTOM TEXT", { 
		        fontFamily: "Arial", 
		        left: 150,
		        top: 200,
		        fontSize: 24,
		        textAlign: "left",
		        fill: "#000000",
		        applicableFonts: ["Arial", "Times New Roman", "Currier New", "Tahoma"]
		    });
		    canvas.add(customText);
		    canvas.renderAll();
		    console.log(customText.toObject());
		});

		$("#btnClearCanvas").click(function(){
		    canvas.clear();
		});
		    
		$("#btnRestore").click(function(){
		    canvas.loadFromJSON(json, function(){
		        canvas.renderAll();
		    });
		});
	});




</script>
		
</head>
 
 
</html>