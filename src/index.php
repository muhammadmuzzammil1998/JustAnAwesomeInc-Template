<!--
MIT License

Copyright (c) 2017 Muhammad Muzzammil (http://muzzammil.xyz)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
-->
<?php 
	$title = "Just An Awesome, Inc.";
	$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel lectus condimentum, dignissim quam gravida, finibus leo. Sed vestibulum euismod quam, id vehicula neque convallis eu. Nunc sem sem, luctus vitae placerat eget, vehicula nec diam. Maecenas sem erat, commodo non faucibus ut, cursus non felis. Phasellus pharetra diam id faucibus elementum. Etiam ut venenatis nunc, eget lobortis lacus. Sed arcu lectus, posuere id sagittis scelerisque, volutpat ut justo. Praesent vulputate risus eget felis maximus, et pellentesque augue scelerisque. Sed quis porttitor nisi.";
	$keywords = "Lorem, ipsum, dolor, sit, amet, consectetur";
	$themeColor = "#f0f0f0";
	$emailID = "lorem@ipsum.dolor";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="<?php echo $title; ?>">
    <meta name="theme-color" content="<?php echo $themeColor; ?>">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="main.php<?php echo '?' . rand(); ?>">
	<link rel="stylesheet" type="text/css" href="//cdn.muzzammil.xyz/OctoCSS/octo.css<?php echo '?' . rand(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="main.js<?php echo '?' . rand(); ?>"></script>
</head>
<body>
	<a href="https://github.com/muhammadmuzzammil1998/JustAnAwesomeInc-Template" id="github" target="_blank"><github class="octo-right"><img src="//cdn.muzzammil.xyz/OctoCSS/github.svg"></github></a>
	<div id="backLayer"></div>
	<div class="spacer10"></div>
	<center><span id="title"><?php echo $title; ?></span></center>
	<div id="content">
		<div class="navbar">
			<span class="navitem" id="aboutNav">About</span>
			<span class="navitem" id="teamNav">The Team</span>
			<span class="navitem" id="workNav">Our Work</span>
			<span class="navitem" id="hireNav">Hire Us</span>
		</div>
		<div class="spacer5"></div>
		<div class="content" id="about">
			<h1>About Us</h1>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum aliquet sollicitudin felis, ut gravida ante. Suspendisse pulvinar in lorem vitae convallis. Quisque elementum porttitor tempor. Ut sed nisi viverra, dignissim risus et, dignissim purus. Donec quis faucibus erat. Pellentesque suscipit et sem in vestibulum. Aenean tristique consequat nulla nec maximus. Praesent semper lectus risus, id pellentesque libero pellentesque vel. Sed id nulla semper, lacinia lacus vel, sagittis lectus. Aenean tempus, dolor et finibus facilisis, augue ipsum bibendum urna, sit amet malesuada tellus dui ut velit. Duis fringilla pretium lobortis. Praesent gravida vitae felis sit amet porta. Praesent vehicula, erat condimentum efficitur tempus, mauris mi fringilla nulla, sit amet facilisis mi urna eget mauris. Fusce enim urna, varius ut elit nec, maximus vestibulum est. Aliquam accumsan elit ut nibh vestibulum semper vitae vitae mi.
			</p>
			<p>
				Mauris vestibulum porta ligula nec iaculis. Ut scelerisque nibh iaculis mollis pharetra. In sodales pulvinar dapibus. Phasellus blandit nunc non lorem placerat sagittis. Integer sed laoreet nisl. Nam dignissim lorem viverra ante maximus, bibendum pharetra purus sollicitudin. Donec vitae ex mollis, fringilla orci at, sodales quam. Donec vel sagittis orci, vitae tempor metus. Nunc commodo iaculis tortor, sed maximus lectus laoreet sed. Nam at placerat nunc. In venenatis nulla risus, quis mollis lorem eleifend iaculis.
			</p>
			<p>
				Etiam scelerisque, leo eu interdum ornare, turpis urna cursus ligula, in aliquam dui dui sed purus. Phasellus aliquet nulla diam, a dictum dui eleifend in. Nullam interdum convallis dignissim. Ut quis turpis purus. In pulvinar eget urna sed euismod. Quisque eget nulla id nisl dictum lobortis. Integer sagittis orci quis magna fermentum, id semper turpis tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Nulla quis sagittis leo. Donec hendrerit enim et purus pharetra tempus. Donec ante dui, pharetra sed tristique eget, aliquet at lacus. Sed luctus volutpat mauris, at placerat lectus tincidunt sed. Praesent dignissim euismod rhoncus.
			</p>
			<p>
				Nam sapien leo, pellentesque in nisi a, tincidunt rutrum nibh. Sed nec accumsan justo, vel commodo ex. Sed at porttitor mi. Pellentesque posuere non ipsum non posuere. Proin posuere est et mauris imperdiet vehicula. Sed sagittis dictum lacinia. Mauris semper augue risus, et condimentum eros pharetra ut. Suspendisse sollicitudin tellus faucibus placerat tempor. Donec eu tincidunt turpis, vitae ultricies nunc. Mauris ut massa eu est tempor tristique a non enim. Nullam blandit scelerisque mi non placerat.
			</p>
		</div>
		<div class="content" id="team">
			<h1>The Team</h1>
			<div class="founder">
				<h2>Name</h2>
				<h4>Title</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum aliquet sollicitudin felis, ut gravida ante. Suspendisse pulvinar in lorem vitae convallis.</p>
				<a class="button" id="web" href="#" target="_blank">Visit Website</a>
			</div>
			<div class="founder">
				<h2>Name</h2>
				<h4>Title</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum aliquet sollicitudin felis, ut gravida ante. Suspendisse pulvinar in lorem vitae convallis.</p>
				<a class="button" id="web" href="#" target="_blank">Visit Website</a>
			</div>
			<div class="founder">
				<h2>Name</h2>
				<h4>Title</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum aliquet sollicitudin felis, ut gravida ante. Suspendisse pulvinar in lorem vitae convallis.</p>
				<a class="button" id="web" href="#" target="_blank">Visit Website</a>
			</div>
			<div class="founder">
				<h2>Name</h2>
				<h4>Title</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum aliquet sollicitudin felis, ut gravida ante. Suspendisse pulvinar in lorem vitae convallis.</p>
				<a class="button" id="web" href="#" target="_blank">Visit Website</a>
			</div>
			<div class="founder">
				<h2>Name</h2>
				<h4>Title</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum aliquet sollicitudin felis, ut gravida ante. Suspendisse pulvinar in lorem vitae convallis.</p>
				<a class="button" id="web" href="#" target="_blank">Visit Website</a>
			</div>
			<div class="founder">
				<h2>Name</h2>
				<h4>Title</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum aliquet sollicitudin felis, ut gravida ante. Suspendisse pulvinar in lorem vitae convallis.</p>
				<a class="button" id="web" href="#" target="_blank">Visit Website</a>
			</div>			
		</div>
		<div class="content" id="work">
			<div id="deck">
				<a href="#" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span>Lorem ipsum dolor</span></div></a>
				<a href="#" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span>consectetur</span></div></a>
				<a href="#" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span>adipiscing elit</span></div></a>
				<a href="#" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span>Vestibulum aliquet sollicitudin felis</span></div></a>
				<a href="#" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span>ut gravida</span></div></a>
				<a href="#" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span>Suspendisse pulvinar in</span></div></a>
				<a href="#" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span>lorem vitae convallis</span></div></a>
				<a href="#" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span>Lorem ipsum dolor</span></div></a>
				<a href="#" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span>consectetur</span></div></a>
				<a href="#" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span>adipiscing elit</span></div></a>
				<a href="#" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span>Vestibulum aliquet sollicitudin felis</span></div></a>
				<a href="#" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span>ut gravida</span></div></a>
				<a href="#" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span>Suspendisse pulvinar in</span></div></a>
				<a href="#" target="_blank"><div class="card rand<?php echo rand(1, 5);?>"> <span>lorem vitae convallis</span></div></a>
			</div><br><br>
		</div>
		<div class="content" id="hire">
			<h1>Hire Us</h1>
			<h2>Contact us at: <a id="mail" href="mailto:<?php echo $emailID; ?>"><?php echo $emailID; ?></a></h2>
		</div>
		<div id="i"></div>
	</div>
</body>
</html>