<?php
/**
 * This file is part of Video Translator Service Documentation.
 * 
 * Video Translator Service Documentation is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Video Translator Service Documentation is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see 
 * <http://www.gnu.org/licenses/>.
 *
 * @author Johnathan Pulos <johnathan@missionaldigerati.org>
 * @copyright Copyright 2012 Missional Digerati
 * 
 */
$JSONDefintion = "JSON, or JavaScript Object Notation, is a text-based open standard designed for human-readable data interchange. It is derived from the JavaScript scripting language for representing simple data structures and associative arrays, called objects.<br><br><a href='http://en.wikipedia.org/wiki/JSON' target='_blank'>- Wikipedia</a>";
$XMLDefintion = "Extensible Markup Language is a markup language that defines a set of rules for encoding documents in a format that is both human-readable and machine-readable. It is defined in the XML 1.0 Specification produced by the W3C, and several other related specifications, all gratis open standards.<br><br><a href='http://en.wikipedia.org/wiki/XML' target='_blank'>- Wikipedia</a>";
?>
<!DOCTYPE html>
<html>
	<head>
		<?php 
			$title = "Redeeming Technology for Kingdom Work";
			require_once('../../../partials/site_wide_css.inc.php'); 
		?>
	</head>
	<body>
		<div class="navbar">
	    <div class="navbar-inner">
	      <div class="container">
	        	<?php require_once('../../../partials/main_nav.inc.php'); ?>
	      </div>
	    </div>
	  </div>
		<div class="slider">
			<div class="inner">
				<div class="container">
					<div class="camera_wrap">
					   <!-- Slideshow Here -->
					</div>
				</div>
			</div>
		</div>
	  <div class="content">
			<div class="inner">
				<div class="container">
					  <div class="padded_content">
							<ul class="breadcrumb">
							  <li><a href="/">Home</a> <span class="divider">/</span></li>
							  <li class="active">API Documentation</li>
							</ul>
							<div class="pull-right">
									<a class="btn btn-primary" href="https://github.com/MissionalDigerati/vts_api" target="_blank">Fork VTS API on Github</a>
							</div>
							<div class="page-header">
								<h1>API Documentation</h1>
							</div>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							<div class="well">
								<ul>
									<li><a href="#characteristics">Characteristics</a></li>
									<li><a href="/documentation/v1/api/usage">API Usage</a></li>
									<li><a href="/documentation/v1/api/installation">Install API</a></li>
									<li><a href="#requirements">Requirements</a></li>
								</ul>
							</div>
							<div class="page-header">
								<h2><a name="requirements"></a>Requirements</h2>
							</div>
							<p>This application has been designed for a Linux based server.  It is highly recommended **NOT** to put this on a shared server.  The FFMPEG library can be resource intensive, and get you banned from the hosting provider.  Your server will need to have the following libraries installed:</p>
							<ul>
								<li>PHP 5.2.8 or greater</li>
								<li>Linux</li>
								<li>MySQL (4 or greater)</li>
								<li><a href="http://pear.php.net/" target="_blank">PEAR</a></li>
								<li><a href="http://ffmpeg.org/" target="_blank">FFMPEG</a></li>
								<li><a href="https://github.com/char0n/ffmpeg-php" target="_blank">FFMPEG-PHP</a></li>
								<li><a href="http://gpac.wp.mines-telecom.fr/" target="_blank">MP4Box from GPAC library</a></li>
								<li>SSH Access to Web Server</li>
							</ul>
							<div class="page-header">
								<h2><a name="characteristics"></a>Characteristics</h2>
							</div>
							<h3>HTTP-based</h3>
							<p>This API use the power of HTTP request protocols.  These are the supported HTTP request protocols:</p>
							<ul>
								<li>GET - retrieving information about a resource.</li>
								<li>POST - create a new resource.</li>
								<li>PUT - modify a current resource.  You will need to do a POST with an attribute "_method=PUT", to use this method.</li>
								<li>DELETE - delete a current resource.  You will need to do a POST with an attribute "_method=DELETE", to use this method.</li>
							</ul>
							<p>For more information,  check out <a href="http://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol#Request_methods" target="_blank">this article</a> on Wikipedia.</p>
							<h3>REST</h3>
							<p>This API conforms to the design principles of Representational State Transfer (REST). Simply change the format extension a request to get results in the format of your choice.  We currently accept the <a href="" rel="popover" class="popover_link" data-content="<?php echo $JSONDefintion; ?>" data-original-title="JSON">JSON</a> and <a href="" rel="popover" class="popover_link" data-content="<?php echo $XMLDefintion; ?>" data-original-title="XML">XML</a> format.</p>
							<h3>Form Based Parameters</h3>
							<p>Currently this API only accepts form based data submission.  All parameters should have a content type of <code>application/x-www-form-urlencoded</code> or <code>multipart/form-data</code>.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require_once('../../../partials/site_wide_js.inc.php'); ?>
	</body>
</html>