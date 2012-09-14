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
?>
<!DOCTYPE html>
<html>
	<head>
		<?php 
			$title = "Sample Web Interface Overview";
			require_once('../../../partials/site_wide_css.inc.php'); 
		?>
	</head>
	<body data-spy="scroll" data-target=".docs-sidebar">
	  <?php 
			$taglineHeader = 'Web Interface Docs';
			$taglineText = 'Crowd-sourcing your video translation.';
			require_once('../../../partials/main_nav.inc.php'); 
		?>
	  <div class="content">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="span3 docs-sidebar">
							<ul class="nav nav-list docs-sidenav affix-top">
								<li class="active"><a href="#slides"><i class="icon-chevron-right"></i> Slides</a></li>
								<li><a href="#description"><i class="icon-chevron-right"></i> Description</a></li>
								<li class=""><a href="#requirements"><i class="icon-chevron-right"></i> Requirements</a></li>
								<li class=""><a href="#installation"><i class="icon-chevron-right"></i> Installation</a></li>
								<li class=""><a href="#configuration"><i class="icon-chevron-right"></i> Configuration</a></li>
								<li><a href="#licensing"><i class="icon-chevron-right"></i> Licensing</a></li>
							</ul>
						</div><!-- .span3 -->
						<div class="span8 docs">
							<div class="pull-right">
								<a class="btn btn-primary" href="https://github.com/MissionalDigerati/vts_web_interface/tags" target="_blank"><i class="icon-download-alt icon-white"></i> Download on Github</a>
							</div>
							<div class="clearfix margin-bottom"></div>
							<section id="slides">
								<?php require_once('../../../partials/interface_carousel.inc.php');  ?>
							</section>
							<section id="description">
								<div class="page-header">
									<h2>Description</h2>
								</div>
								<p></p>
							</section>
							<section id="requirements">
								<div class="page-header">
									<h2>Requirements</h2>
								</div>
								
							</section>
							<section id="installation">
								<div class="page-header">
									<h2>Installation</h2>
								</div>
								
							</section>
							<section id="configuration">
								<div class="page-header">
									<h2>Configuration</h2>
								</div>
								
							</section>
							<section id="licensing">
								<div class="page-header">
									<h2>Licensing</h2>
								</div>
								This Sample Web Interface is released under the <a href="http://www.gnu.org/licenses/gpl-3.0-standalone.html" target="_blank">GNU General Public License v3</a>.
							</section>
						</div><!-- .span8 -->
						<div class="span1">&nbsp;</div>
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- .inner -->
		</div><!-- .content -->
		<?php require_once('../../../partials/site_wide_js.inc.php'); ?>
	</body>
</html>