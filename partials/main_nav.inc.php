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
if(isset($_SERVER["REQUEST_URI"])) {
	$requestedUrl = substr($_SERVER["REQUEST_URI"], 1);
}else {
	$requestedUrl = '';
}
$taglineHeader = (isset($taglineHeader)) ? $taglineHeader : 'Video Translator Service';
$taglineText = (isset($taglineText)) ? $taglineText : 'A project of <a href="http://www.missionaldigerati.org" target="_blank">Missional Digerati</a>';
?>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      	<a class="btn btn-navbar nav-display-button" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li<?php if($requestedUrl ==''){ echo ' class="active"'; } ?>><a href="/">Home</a></li>
						<li class="dropdown<?php if(strpos($requestedUrl, 'docs/v1/api/') !== false){ echo ' active'; } ?>" id="#api">
							<a href="#api" class="dropdown-toggle" data-toggle="dropdown">API Documentation<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/docs/v1/api/overview">Overview & Installation</a></li>
								<li><a href="/docs/v1/api/workflow">Workflow</a></li>
								<li><a href="/docs/v1/api/api_keys">API Keys</a></li>
								<li><a href="/docs/v1/api/api_keys">Translation Requests</a></li>
								<li><a href="/docs/v1/api/api_keys">Clips</a></li>
								<li><a href="/docs/v1/api/api_keys">Master Recordings</a></li>
							</ul>
						</li>
						<li<?php if(strpos($requestedUrl, '/docs/v1/web_interface/') !== false){ echo ' class="active"'; } ?>><a href="/docs/v1/web_interface/overview">Sample Web Interface</a></li>
						<li<?php if(strpos($requestedUrl, '/docs/v1/cakephp_plugin/') !== false){ echo ' class="active"'; } ?>><a href="/docs/v1/cakephp_plugin/overview">CakePHP Plugin</a></li>
						<li><a href="http://www.missionaldigerati.org/contact-us" target="_blank">Contact Us</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
    </div>
  </div>
</div>
<header class="project-tagline subhead">
  <div class="container">
    <h1><?php echo $taglineHeader; ?></h1>
    <p class="lead"><?php echo $taglineText; ?></p></div>
</header>