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
			$title = "Translation Requests";
			require_once('../../../partials/site_wide_css.inc.php'); 
		?>
	</head>
	<body data-spy="scroll" data-target=".docs-sidebar">
	  <?php 
			$taglineHeader = 'Translation Request';
			$taglineText = 'Handling all your translation needs.';
			require_once('../../../partials/main_nav.inc.php'); 
		?>
	  <div class="content">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="span3 docs-sidebar">
							<ul class="nav nav-list docs-sidenav affix-top">
								<li class="active"><a href="#description"><i class="icon-chevron-right"></i> Description</a></li>
								<li><a href="#create"><i class="icon-chevron-right"></i> Create</a></li>
								<li><a href="#delete"><i class="icon-chevron-right"></i> Delete</a></li>
								<li><a href="#read"><i class="icon-chevron-right"></i> Read</a></li>
							</ul>
						</div><!-- .span3 -->
						<div class="span8 docs">
							<div class="pull-right">
								<a class="btn btn-primary" href="https://github.com/MissionalDigerati/vts_api/tags" target="_blank"><i class="icon-download-alt icon-white"></i> Download on Github</a>
							</div>
							<div class="clearfix"></div>
							<section id="description">
									<p>A translation request is a request to begin the translation of a video.  When you make a call to the video translator service API to create a translation request,  the server will return a translation request token.  The token looks similar to an API key, because it is a hashed string of random numbers and letters.  Here is an example of a translation request token: <code>tr0dc613163e045312e922dad9d</code>.  These tokens always start with the letters <strong>tr</strong>.  This token acts as a unique identifier for your request to translate a video, so you will need to pass it into any subsequent requests for clips or master recordings.  The translation request token can expire, if you want to limit the time between requesting a token, and the completion of the video.  See the <a href="/docs/v1/api/overview">Overview & Installation Page</a> for more details.</p>
									<h3>Attributes</h3>
									<dl>
										<dt>id</dt>
									  <dd>The unique identifier for the translation request.</dd>
										<dt>api_key_id</dt>
									  <dd>The unique identifier for the API key.</dd>
										<dt>token</dt>
									  <dd>The unique token to be used for any API requests.</dd>
										<dt>created</dt>
									  <dd>The timestamp when the the master recording was created.</dd>
										<dt>modified</dt>
									  <dd>The timestamp when the the master recording was last modified.</dd>
										<dt>expires_at</dt>
									  <dd>The timestamp when the translation request will expire.  It sets to 0000-00-00 00:00:00 if it does not expire.</dd>
									</dl>
							</section>
							<section id="create">
								<div class="page-header">
									<h2>Create</h2>
								</div>
								<dl>
								  <dt>HTTP Request Protocol</dt>
								  <dd>POST</dd>
									<dt>Resource URL</dt>
								  <dd>/translation_requests.format (.json or .xml)</dd>
								</dl>
								<p>Create a new translation request, and receive a translation request token.</p>
								<table class="table table-hover table-condensed table-bordered table-stripped">
									<caption>Parameters</caption>
									<thead>
									    <tr>
									      <th>Name</th>
									      <th>Description</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td>api_key</td>
									      <td>The API key assigned to the requesting application. <strong>* Required</strong></td>
									    </tr>
									  </tbody>
								</table>
								<h3>Response (JSON)</h3>
								<p>POST /translation_requests.json</p>
<pre>
{
    "vts": {
        "status": "success",
        "message": "Your translation request has been created.",
        "translation_request": {
            "id": "5",
            "api_key_id": "1",
            "token": "tr37eaa9813ddacbc68fe12ce64",
            "created": "2012-08-24 15:59:29",
            "modified": "2012-08-24 15:59:29",
            "expires_at": "0000-00-00 00:00:00"
        }
    }
}
</pre>
								<h3>Response (XML)</h3>
								<p>POST /translation_requests.xml</p>
<pre>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;vts&gt;
    &lt;status&gt;success&lt;/status&gt;
    &lt;message&gt;Your translation request has been created.&lt;/message&gt;
    &lt;translation_request&gt;
        &lt;id&gt;6&lt;/id&gt;
        &lt;api_key_id&gt;1&lt;/api_key_id&gt;
        &lt;token&gt;tr14cdb61a8cdd6c37f7fa16dbf&lt;/token&gt;
        &lt;created&gt;2012-08-24 16:01:25&lt;/created&gt;
        &lt;modified&gt;2012-08-24 16:01:25&lt;/modified&gt;
        &lt;expires_at&gt;0000-00-00 00:00:00&lt;/expires_at&gt;
    &lt;/translation_request&gt;
&lt;/vts&gt;
</pre>
								
							</section>
							<section id="delete">
								<div class="page-header">
									<h2>Delete</h2>
								</div>
								<dl>
								  <dt>HTTP Request Protocol</dt>
								  <dd>POST</dd>
									<dt>Resource URL</dt>
								  <dd>/translation_requests/{id}.format (.json or .xml)</dd>
								</dl>
								<p>Delete the specific translation request.</p>
								<table class="table table-hover table-condensed table-bordered table-stripped">
									<caption>Parameters</caption>
									<thead>
									    <tr>
									      <th>Name</th>
									      <th>Description</th>
									    </tr>
									  </thead>
									  <tbody>
											<tr>
									      <td>id</td>
									      <td>The url must contain the id of the translation request you are wanting to delete.  You should have received this when you created the translation request. <strong>* Required</strong></td>
									    </tr>
									    <tr>
									      <td>api_key</td>
									      <td>The API key assigned to the requesting application. <strong>* Required</strong></td>
									    </tr>
									    <tr>
									      <td>_method=DELETE</td>
									      <td>Tell the server to use the HTTP request protocol DELETE. <strong>* Required</strong></td>
									    </tr>
									  </tbody>
								</table>
								<h3>Response (JSON)</h3>
								<p>POST /translation_requests/5.json</p>
<pre>
{
    "vts": {
        "status": "success",
        "message": "Your translation request has been deleted.",
        "translation_request": ""
    }
}
</pre>
								<h3>Response (XML)</h3>
								<p>POST /translation_requests/6.xml</p>
<pre>
&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
&lt;vts&gt;
    &lt;status&gt;success&lt;/status&gt;
    &lt;message&gt;Your translation request has been deleted.&lt;/message&gt;
    &lt;translation_request/&gt;
&lt;/vts&gt;
</pre>
							</section>
							<section id="read">
								<div class="page-header">
									<h2>Read</h2>
								</div>
								<dl>
								  <dt>HTTP Request Protocol</dt>
								  <dd>GET</dd>
									<dt>Resource URL</dt>
								  <dd>/translation_requests/{id}.format (.json or .xml)?api_key={your_api_key}</dd>
								</dl>
								<p>Retrieve the details of a specific translation request.</p>
								<table class="table table-hover table-condensed table-bordered table-stripped">
									<caption>Parameters</caption>
									<thead>
									    <tr>
									      <th>Name</th>
									      <th>Description</th>
									    </tr>
									  </thead>
									  <tbody>
											<tr>
									      <td>id</td>
									      <td>The url must contain the id of the translation request you are getting details about.  You should have received this when you created the translation request. <strong>* Required</strong></td>
									    </tr>
									    <tr>
									      <td>api_key</td>
									      <td>The API key assigned to the requesting application. <strong>* Required</strong></td>
									    </tr>
									  </tbody>
								</table>
								<h3>Response (JSON)</h3>
								<p>GET /translation_requests/5.json?api_key={your_api_key}</p>
<pre>
{
    "vts": {
        "status": "success",
        "message": "",
        "translation_request": {
            "id": "5",
            "api_key_id": "1",
            "token": "tr37eaa9813ddacbc68fe12ce64",
            "created": "2012-08-24 15:59:29",
            "modified": "2012-08-24 15:59:29",
            "expires_at": "0000-00-00 00:00:00"
        }
    }
}
</pre>
								<h3>Response (XML)</h3>
								<p>GET /translation_requests/6.xml?api_key={your_api_key}</p>
<pre>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;vts&gt;
    &lt;status&gt;success&lt;/status&gt;
    &lt;message/&gt;
    &lt;translation_request&gt;
        &lt;id&gt;6&lt;/id&gt;
        &lt;api_key_id&gt;1&lt;/api_key_id&gt;
        &lt;token&gt;tr14cdb61a8cdd6c37f7fa16dbf&lt;/token&gt;
        &lt;created&gt;2012-08-24 16:01:25&lt;/created&gt;
        &lt;modified&gt;2012-08-24 16:01:25&lt;/modified&gt;
        &lt;expires_at&gt;0000-00-00 00:00:00&lt;/expires_at&gt;
    &lt;/translation_request&gt;
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