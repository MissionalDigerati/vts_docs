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
?>
<a class="btn btn-navbar nav-display-button" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
</a>
<a class="brand" href="/">
	<img src="/images/site/logo.png" alt="Missional Digerati" title="Missional Digerati" id="logo" /><br>
	<span class="tagline"><strong>Project</strong> - A Video Translator Service API</span>
</a>
<div class="nav-collapse">
	<ul class="nav pull-right">
		<li<?php if($requestedUrl ==''){ echo ' class="active"'; } ?>><a href="/">Home</a></li>
		<li><a href="http://www.missionaldigerati.org/contact-us" target="_blank">Contact Us</a></li>
	</ul>
	<div class="clearfix"></div>
</div>