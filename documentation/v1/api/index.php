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
				<div class="container home">
					  <div class="padded_content">
							<div class="pull-right">
									<a class="btn btn-primary" href="https://github.com/MissionalDigerati/vts_api" target="_blank">Fork VTS API on Github</a>
							</div>
							<div class="page-header">
								<h1>Video Translator Service API Documentation</h1>
							</div>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							<div class="page-header">
								<h2>Installation</h2>
							</div>
							
							<div class="page-header">
								<h2>Requirements</h2>
							</div>
							
							<div class="page-header">
								<h2>Characteristics</h2>
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