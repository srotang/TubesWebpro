<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/submit.css">

    <title>DeviantArt - Discover The Largest Online Art Gallery and Community</title>
    
  </head>
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
        <!-- <form method="POST" id="btn-upload" enctype="multipart/form-data" action="/dapi/v1/submit/upload"> -->
		<form id="btn-upload">
			<input type="hidden" name="action" value="StashPost" id="INPUT_8"/> <a id="A_9"> <span id="SPAN_27">Choose a file to upload</span>
				<input type="file" name="file" id="INPUT_11" /></a>
			<input type="hidden" name="folder_name" value="Saved Submissions" id="INPUT_12" />
			<input type="hidden" name="use_defaults" value="1" id="INPUT_13" />
		</form>
	</div>
	<div id="stash">
		 <a href="#" id="A_15">Select file from Sta.sh</a> <a href="#" id="A_16"><span id="SPAN_28">✎</span> Enter text</a>
	</div>
</div>
<!-- <form id="form-comment" method="post" action="/global/placebo.php"> -->
<form id="form-comment">
	<div id="input-title">
		<input id="INPUT_5" name="devtitle" maxlength="50" type="text" placeholder="Title"/>
	</div>
	<div id="input-text" class="writer selectable no-lub put-art-here ui-droppable empty" contenteditable="true" style="min-height: 64px;">					
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>