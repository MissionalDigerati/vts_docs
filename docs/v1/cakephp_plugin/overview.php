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
			$title = "CakePHP Plugin Overview";
			require_once('../../../partials/site_wide_css.inc.php'); 
		?>
	</head>
	<body data-spy="scroll" data-target=".docs-sidebar">
	  <?php 
			$taglineHeader = 'CakePHP Plugin Docs';
			$taglineText = 'The connection between your application and API.';
			require_once('../../../partials/main_nav.inc.php'); 
		?>
	  <div class="content">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="span3 docs-sidebar">
							<ul class="nav nav-list docs-sidenav affix-top">
								<li class="active"><a href="#description"><i class="icon-chevron-right"></i> Description</a></li>
								<li class=""><a href="#requirements"><i class="icon-chevron-right"></i> Requirements</a></li>
								<li class=""><a href="#installation"><i class="icon-chevron-right"></i> Installation</a></li>
								<li><a href="#licensing"><i class="icon-chevron-right"></i> Licensing</a></li>
							</ul>
						</div><!-- .span3 -->
						<div class="span8 docs">
							<div class="pull-right">
								<a class="btn btn-primary" href="https://github.com/MissionalDigerati/vts_cakephp_plugin/tags" target="_blank"><i class="icon-download-alt icon-white"></i> Download on Github</a>
							</div>
							<div class="clearfix"></div>
							<section id="description">
								<p>If you have a web application built on <a href="http://cakephp.org/" target="_blank">CakePHP 2</a>,  it is relatively easy to connect the application with your video translator service API.  Using CakePHP's plugin facility,  your application will be able to add new translations,  check the progress of the video processing, request a master recording, and much more.  The plugin contains models and datasources to communicate with every aspect of your API server.  It also includes validations to ensure the proper information is being sent to the API. You can find out more about CakePHP's plugin feature by checking out the documentation at <a href="http://book.cakephp.org/2.0/en/plugins.html" target="_blank">the CakePHP 2 documentation website</a>.</p>
							</section>
							<section id="requirements">
								<div class="page-header">
									<h2><a name="requirements"></a>Requirements</h2>
								</div>
								<p>This plugin requires a running video translator service API server, and a valid API key.  The plugin also expects all the requirements for a new CakePHP 2 application.</p>
								<ul>
									<li>A running instance of the <a href="/docs/v1/api/overview">video translator service API</a></li>
									<li><a href="http://cakephp.org/" target="_blank">CakePHP 2 Application</a></li>
									<li>HTTP Server</li>
									<li>PHP 5.2.8 or greater</li>
									<li>Linux</li>
									<li>MySQL (4 or greater), PostgreSQL, Microsoft SQL Server, or SQLite</li>
								</ul>
							</section>
							<section id="installation">
								<div class="page-header">
									<h2>Installation</h2>
								</div>
								<p>To install the CakePHP video translator service plugin,  you will first need to setup a video translator service server, and an API key for your application.  To learn how to do this,  please visit the <a href="/docs/v1/api/overview">API Docs Overview & Installation</a>.  Once the server is setup,  you will need to complete the following steps:</p>
								<ol>
									<li>If you are building a new CakePHP 2 application,  you will need to download the stable version of CakePHP 2.1 from the <a href="https://github.com/cakephp/cakephp/tags" target="_blank">CakePHP Github download page</a>.</li>
									<li>Download the latest version of the plugin code from the <a href="https://github.com/MissionalDigerati/vts_cakephp_plugin/tags" target="_blank">VTS CakePHP Plugin Github download page</a>.</li>
									<li>Rename the VTS CakePHP Plugin downloaded folder to <em>VideoTranslatorService</em>.</li>
									<li>Drop the <em>VideoTranslatorService</em> into the <code>app/Plugin</code> directory of the CakePHP 2.1 code you downloaded, or your existing application.</li>
									<li>Open the <code>app/Config/core.php</code> file, and add the following to the end of the file:
										<div>
<pre>
define("VTS_URL", "http://api.obs.local/");
define("VTS_API_KEY", "your_api_key");
</pre>
										</div>
										<em>Make sure to add your video translator service url and API key to this setting</em>.
									</li>
									<li>Open the <code>app/Config/database.php</code> file, and add the following code to the end of the file:
										<div>
<pre>
public $vtsTranslationRequest = array(
    'datasource' => 'VideoTranslatorService.TranslationRequestSource',
    'vtsUrl' => VTS_URL,
    'vtsApiKey' => VTS_API_KEY
);

public $vtsClip = array(
    'datasource' => 'VideoTranslatorService.ClipSource',
    'vtsUrl' => VTS_URL,
    'vtsApiKey' => VTS_API_KEY
);

public $vtsMasterRecording = array(
    'datasource' => 'VideoTranslatorService.MasterRecordingSource',
    'vtsUrl' => VTS_URL,
    'vtsApiKey' => VTS_API_KEY
);
</pre>
										</div>
										<em>You will not need to change any of these settings.</em>
									</li>
									<li>Finally, open the <code>app/Config/bootstrap.php</code> file, and add the following code to the end of the file:
										<div>
<pre>
CakePlugin::load('VideoTranslatorService');
</pre>
										</div>
									</li>
								</ol>
							</section>
							<section id="licensing">
								<div class="page-header">
									<h2>Licensing</h2>
								</div>
								This CakePHP Plugin is released under the <a href="http://www.gnu.org/licenses/gpl-3.0-standalone.html" target="_blank">GNU General Public License v3</a>.
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