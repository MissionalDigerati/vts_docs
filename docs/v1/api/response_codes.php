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
			$title = "Response Codes";
			require_once('../../../partials/site_wide_css.inc.php'); 
		?>
	</head>
	<body data-spy="scroll" data-target=".docs-sidebar">
	  <?php 
			$taglineHeader = 'Response Codes';
			$taglineText = 'Responding to your request.';
			require_once('../../../partials/main_nav.inc.php'); 
		?>
	  <div class="content">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="span3 docs-sidebar">
							<ul class="nav nav-list docs-sidenav affix-top">
								<li class="active"><a href="#description"><i class="icon-chevron-right"></i> Description</a></li>
								<li><a href="#400"><i class="icon-chevron-right"></i> 400 Bad Request</a></li>
								<li><a href="#401"><i class="icon-chevron-right"></i> 401 Unauthorized</a></li>
								<li><a href="#404"><i class="icon-chevron-right"></i> 404 Not Found</a></li>
								<li><a href="#405"><i class="icon-chevron-right"></i> 405 Method Not Allowed</a></li>
								<li><a href="#500"><i class="icon-chevron-right"></i> 500 Internal Server Error</a></li>
							</ul>
						</div><!-- .span3 -->
						<div class="span8 docs">
							<div class="pull-right">
								<a class="btn btn-primary" href="https://github.com/MissionalDigerati/vts_api" target="_blank"><i class="icon-download-alt icon-white"></i> Download on Github</a>
							</div>
							<div class="clearfix"></div>
							<section id="description">
								<p>When you are missing essential attributes in your requests,  have malformed urls, or the video translator server API is not responding to your request,  it is important to have some sense of what is going on.  The API has many of the common status codes to help you decipher what can be wrong with your request.  Here is a list of common response codes you might experience in this API.  The details attribute will vary based on the request.  It will give you a more in depth explanation of what is causing the problem.</p>
							</section>
							<section id="400">
								<div class="page-header">
									<h2>400 Bad Request</h2>
								</div>
								<p>There is something wrong with your request.  Please verify all required attributes are set correctly.</p>
								<h3>Response (JSON)</h3>
<pre>
{
    "vts": {
        "status": "error",
        "message": "You are missing required attributes, or have a malformed request.",
        "details": "There was a problem with your request."
    }
}
</pre>
								<h3>Response (XML)</h3>
<pre>
&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
&lt;vts&gt;
    &lt;status&gt;error&lt;/status&gt;
    &lt;message&gt;You are missing required attributes, or have a malformed request.&lt;/message&gt;
    &lt;details&gt;There was a problem with your request.&lt;/details&gt;
&lt;/vts&gt;
</pre>
							</section>
							<section id="401">
								<div class="page-header">
									<h2>401 Unauthorized</h2>
								</div>
								<p>Your translation request token is expired, missing, or otherwise unusable. You should also check you API key.  It may have been revoked, or it is missing. If your translation request token expired, you will need to request another token, and start the process again. If your API key was revoked, then you will need to contact the system admin.</p>
								<h3>Response (JSON)</h3>
<pre>
{
    "vts": {
        "status": "error",
        "message": "Unauthorized.  Your token or api key has expired, became invalid, or is missing.",
        "details": "Your translation request token has expired."
    }
}
</pre>
								<h3>Response (XML)</h3>
<pre>
&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
&lt;vts&gt;
    &lt;status&gt;error&lt;/status&gt;
    &lt;message&gt;Unauthorized. Your token or api key has expired, became invalid, or is
        missing.&lt;/message&gt;
    &lt;details&gt;Your translation request token has expired.&lt;/details&gt;
&lt;/vts&gt;
</pre>
							</section>
							<section id="404">
								<div class="page-header">
									<h2>404 Not Found</h2>
								</div>
								<p>The resource you provide does not exist in the database. Please verify you passed the id for the resource, and the id is valid.</p>
								<h3>Response (JSON)</h3>
<pre>
{
    "vts": {
        "status": "error",
        "message": "Invalid resource id provided.",
        "details": "The translation request does not exist."
    }
}
</pre>
								<h3>Response (XML)</h3>
<pre>
&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
&lt;vts&gt;
    &lt;status&gt;error&lt;/status&gt;
    &lt;message&gt;Invalid resource id provided.&lt;/message&gt;
    &lt;details&gt;The translation request does not exist.&lt;/details&gt;
&lt;/vts&gt;
</pre>
							</section>
							<section id="405">
								<div class="page-header">
									<h2>405 Method Not Allowed</h2>
								</div>
								<p>The HTTP method you are passing is invalid. The methods should be:</p>
								<ul>
									<li>GET - list all or a single resources details</li>
									<li>POST - create a new resource</li>
									<li>PUT - modify a current resource.  You will need to do a POST with an attribute "_method=PUT", to use this method.</li>
									<li>DELETE - delete a current resource.  You will need to do a POST with an attribute "_method=DELETE", to use this method.</li>
								</ul>
								<h3>Response (JSON)</h3>
<pre>
{
    "vts": {
        "status": "error",
        "message": "Invalid http method provided.",
        "details": " requires a DELETE HTTP Method or a POST with a _method var set to DELETE."
    }
}
</pre>
								<h3>Response (XML)</h3>
<pre>
&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
&lt;vts&gt;
    &lt;status&gt;error&lt;/status&gt;
    &lt;message&gt;Invalid http method provided.&lt;/message&gt;
    &lt;details&gt;requires a DELETE HTTP Method or a POST with a _method var set to DELETE.&lt;/details&gt;
&lt;/vts&gt;
</pre>
							</section>
							<section id="500">
								<div class="page-header">
									<h2>500 Internal Server Error</h2>
								</div>
								<p>Our server had difficulty processing your request. Please try your request again.</p>
								<h3>Response (JSON)</h3>
<pre>
{
    "vts": {
        "status": "error",
        "message": "Sorry,  we have experienced a internal server error.",
        "details": "Server is down."
    }
}
</pre>
								<h3>Response (XML)</h3>
<pre>
&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
&lt;vts&gt;
    &lt;status&gt;error&lt;/status&gt;
    &lt;message&gt;Sorry, we have experienced a internal server error.&lt;/message&gt;
    &lt;details&gt;Server is down.&lt;/details&gt;
&lt;/vts&gt;
</pre>
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