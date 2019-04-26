<!doctype html>
<html lang="en">
  <head>
    <title>DeviantArt - Discover The Largest Online Art Gallery and Community</title>
    
  </head>
	<link rel="stylesheet" src="<?= base_url();?>/assets/css/submit_dev.css">
  <body>
    <div id="container">
	<div id="tabbar">
	</div>
	<div id="left">
		<div id="l-scroll-spinner">
		</div>
	</div>
	<div id="right">
		<div id="r-scroll-spinner">
		</div>
	</div> 
	<div id="submit-tab-container">
		<ul id="submit-tab-list">
			<li>
                 <span id="SPAN_10">New Submission</span> 
                 <span id="SPAN_11"> <span id="SPAN_12">
                 <span id="SPAN_13"></span></span></span>
                 <span id="SPAN_14"></span> 
                 <span id="SPAN_15">×</span> 
                 <span id="SPAN_16"><b id="B_17"></b><i id="I_18">New</i></span>
			</li>
		</ul>
	</div>
</div>
</div>
</div>
</div>
<table>
	<tbody>
		<tr>
			<td id="menu">
			</td>
			<td id="main-menu">
                <a href="#" id="A_6"> <span id="SPAN_17"><img width="30" height="30" src="" id="IMG_8" alt='' /> </span> <span id="SPAN_21"></span> <span id="SPAN_22">Submit</span></a>
			</td>
			<td id="submit-form">
			</td>
		</tr>
	</tbody>
</table>
<div id="form-upload">
	<div id="text">
		 <span id="SPAN_3">Drag and drop your art here</span> <span id="SPAN_4">Upload your art here</span>
	</div>
	<div id="text-2">
		or
	</div>
	<div id="btn-upload">
        <form method="POST" id="btn-upload" enctype="multipart/form-data" action="<?= base_url()?>/Upload/aksi_upload"> 
			<input type="hidden" name="action" value="StashPost" id="INPUT_8"/> <a id="A_9"> <span id="SPAN_27">Choose a file to upload</span>
				<input type="file" name="file" id="INPUT_11" /></a>
			<input type="hidden" name="folder_name" value="Saved Submissions" id="INPUT_12" />
			<input type="hidden" name="use_defaults" value="1" id="INPUT_13" />
			<div id="input-title">
		<input id="INPUT_5" name="devtitle" maxlength="50" type="text" placeholder="Title"/>
		<textarea name="devDesc"></textarea>
		<input type="submit" value="submit"/>
	</div>
		</form>
	</div>
	<div id="stash">
		 <a href="#" id="A_15">Select file from Sta.sh</a> <a href="#" id="A_16"><span id="SPAN_28">✎</span> Enter text</a>
	</div>
</div>
<form id="form-comment">
	
	<div id="input-text" class="writer selectable no-lub put-art-here ui-droppable empty" contenteditable="true" style="min-height: 64px;">					</div>
</form>		
<div id="download">
	<input type="checkbox" value="1" name="ile-feature-checkbox" checked="checked" id="INPUT_2" />
	<div id="text-dwnld">
	</div>
	<div id="free-dwnld">
		Free Download
	</div>
	<div id="subtext">
		Let deviants download this file for free.
	</div>
</div>																																					

  </body>
</html>