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
			$title = "Redeeming Technology for Kingdom Work";
			require_once('../../../../partials/site_wide_css.inc.php'); 
		?>
	</head>
	<body>
	  <?php 
			$taglineHeader = 'Video Translator Service';
			$taglineText = 'A project of <a href="http://www.missionaldigerati.org" target="_blank">Missional Digerati</a>';
			require_once('../../../../partials/main_nav.inc.php'); 
		?>
	  <div class="content">
			<div class="inner">
				<div class="container">
					  <div class="padded_content">
							<ul class="breadcrumb">
							  <li><a href="/">Home</a> <span class="divider">/</span></li>
								<li><a href="/documentation/v1/api">API Documentation</a> <span class="divider">/</span></li>
							  <li class="active">API Usage</li>
							</ul>
							<div class="pull-right">
									<a class="btn btn-primary" href="https://github.com/MissionalDigerati/vts_api" target="_blank">Fork VTS API on Github</a>
							</div>
							<div class="page-header">
								<h1>API Usage</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require_once('../../../../partials/site_wide_js.inc.php'); ?>
	</body>
</html>