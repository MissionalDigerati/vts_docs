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
			$title = "API Overview";
			require_once('../../../partials/site_wide_css.inc.php'); 
		?>
	</head>
	<body data-spy="scroll" data-target=".docs-sidebar">
	  <?php 
			$taglineHeader = 'API Keys';
			$taglineText = 'The keys to your domain.';
			require_once('../../../partials/main_nav.inc.php'); 
		?>
	  <div class="content">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="span3 docs-sidebar">
							<ul class="nav nav-list docs-sidenav affix-top">
								<li class="active"><a href="#description"><i class="icon-chevron-right"></i> Description</a></li>
								<li><a href="#access_api_keys"><i class="icon-chevron-right"></i> Accessing the API Keys</a></li>
								<li><a href="#add_api_key"><i class="icon-chevron-right"></i> Add an API Key</a></li>
								<li><a href="#delete_api_key"><i class="icon-chevron-right"></i> Delete an API Key</a></li>
							</ul>
						</div><!-- .span3 -->
						<div class="span8 docs">
							<div class="pull-right">
								<a class="btn btn-primary" href="https://github.com/MissionalDigerati/vts_api" target="_blank"><i class="icon-download-alt icon-white"></i> Download on Github</a>
							</div>
							<div class="clearfix"></div>
							<section id="description">
								<p>In order to control your server resources, and protect your video translator service API server from outside attacks,  this server uses a hashed string, called an API key, to identify the source of every request.  The API key looks like this: <code>vts2c6f01edeaba45574b9dcbf21c</code>.  When a request is received for a translation,  the application must also pass along its API key.  If the API key is valid,  then the API server will hand back a translation request token.  If they do not use a valid API key,  the requester will receive an unauthorized error.  For more information on the workflow of the API,  check out the <a href="/docs/v1/api/workflow">workflow documentation</a>.  API keys also provide a way to track activity from a wide array of applications.  Each request is connected to the originating API key.  So you can setup an API key for your website, and another for your iPhone application.  Now you can access the database, and see the traffic you are receiving from each application.</p>
							</section>
							<section id="access_api_keys">
								<div class="page-header">
									<h2>Access the API Keys</h2>
									
								</div>
									<p>To access your current API keys,  open your favorite web browser and visit the location of your video translator service API web server.  You should see the following page:</p>
									<img src="/images/docs/api_login.png" alt="Api Login Page">
									<p>Using the credentials that you setup in the <a href="/docs/v1/api/overview">installation process</a>,  log into the website.  If you forgot your password,  you can click on the <strong>Forgot Password?</strong> button to request a password change.  Once you are logged in,  click on the <strong>API Keys</strong> link in the top right navigation.  You will be brought to the API key management page which looks like the following snapshot:</p>
									<img src="/images/docs/api_management.png" width="800" height="269" alt="Api Management">
									<p>From here you can add new API keys,  or revoke old API keys.  All applications using the video translator service API should have their own API key.  <strong>It is important to assign a new API key for each application, and to never give away the API key.  Do not store the API key in your public code repositories.</strong></p>
							</section>
							<section id="add_api_key">
								<div class="page-header">
									<h2>Add an API Key</h2>
								</div>
								<p>To add a new API key,  log into your video translator service API server and click the big, blue button titled <strong>Add an API Key</strong> in the top right of the page.  You will be brought to a form that looks like this:</p>
								<img src="/images/docs/add_key_form.png" width="800" height="163" alt="Add Key Form">
								<p>Fill out a unique application name, so you can identify it from other applications, and hit the <strong>Create API Key</strong> button.  Once the form is submitted,  you will be automatically redirect to the API key management page.  You can copy the new key, and add it to your application.</p>
								<img src="/images/docs/api_management.png" width="800" height="269" alt="Api Management">
							</section>
							<section id="delete_api_key">
								<div class="page-header">
									<h2>Delete an API Key</h2>
								</div>
									<p>To delete an API key,  thereby revoking access to your video translator service API server,  log in and visit the API key management page.  Next to each API key is a link titled <strong>Delete</strong>.  Click the link, next to the appropriate API key to revoke,  and the API key will be deleted permanently.  <strong>Warning!  Once deleted,  you will need to create a new API key in order to renew an application's access to the video translator service API server.</strong></p>
									<img src="/images/docs/api_management.png" width="800" height="269" alt="Api Management">
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