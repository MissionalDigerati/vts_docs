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
$crowdSourcingDefinition = "a process that involves outsourcing tasks to a distributed group of people. This process can occur both online and offline.<br><br><a href='http://en.wikipedia.org/wiki/Crowdsourcing' target='_blank'>- Wikipedia</a>";
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
			$taglineText = 'Crowdsourcing your video translation.';
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
								<p>Translation of videos can be difficult and costly.  By empowering volunteers with the right tool,  organizations can harness the power of <a href="" rel="popover" class="popover_link" data-content="<?php echo $crowdSourcingDefinition; ?>" data-original-title="Crowdsourcing">crowdsourcing</a> in the work of video translation, therefore alleviating the cost and difficulty of translation.  This sample web interface is a CakePHP website that helps organizations create a community of volunteers, provide them with an easy way to translate videos, and opens these translations to the world.  The interface uses the power of <a href="http://twitter.github.com/bootstrap/" target="_blank">Twitter Bootstrap</a> to provide a clean and organized experience to your members.  It integrates in our <a href="/docs/v1/cakephp_plugin/overview">CakePHP Plugin</a>, and interacts with a <a href="/docs/v1/api/overview">video translator service API</a> running on a separate server.  This website was originally created for the <a href="http://openbiblestories.com/" target="_blank">Open Bible Stories</a> project, so their information is currently in the configuration files.  Some of the features include:</p>
								<ul>
									<li><strong>Powered By <a href="" rel="popover" class="popover_link" data-content="<?php echo $crowdSourcingDefinition; ?>" data-original-title="Crowdsourcing">Crowdsourcing</a></strong> - Develop a community of volunteer translators.</li>
									<li><strong>Watch or Download</strong> - Watch or download any translations created by the community.</li>
									<li><strong>Multiple Video Translations</strong> - Multiple videos can be translated through one interface.</li>
									<li><strong>Multiple Languages</strong> - Internationalization support.</li>
									<li><strong>Record Via Browser</strong> - Members can record their audio via their favorite browser. (requires Flash)</li>
									<li><strong>User Administration</strong> - Manage the members of the the community.</li>
									<li><strong>Translation Administration</strong> - Manage all translations inside the community.</li>
									<li><strong>Powerful Framework</strong> - Built on, and powered by the <a href="http://www.cakephp.org" target="_blank">CakePHP Framework</a>.</li>
									<li><strong>Open Source</strong> - Released under the <a href="http://www.gnu.org/licenses/gpl-3.0-standalone.html" target="_blank">GNU General Public License v3</a>.</li>
								</ul>
							</section>
							<section id="requirements">
								<div class="page-header">
									<h2>Requirements</h2>
								</div>
								<p>This web interface requires:</p>
								<ul>
									<li>A running instance of the <a href="/docs/v1/api/overview">video translator service API</a></li>
									<li>HTTP Server with SSH Access</li>
									<li>PHP 5.2.8 or greater</li>
									<li>Linux</li>
									<li>MySQL (4 or greater), PostgreSQL, Microsoft SQL Server, or SQLite</li>
								</ul>
							</section>
							<section id="installation">
								<div class="page-header">
									<h2>Installation</h2>
								</div>
								<p>To install the web interface,  you will first need to setup a video translator service server, and an API key for your application.  To learn how to do this,  please visit the <a href="/docs/v1/api/overview">API Docs Overview & Installation</a>.  Once the server is setup,  you will need to complete the following steps:</p>
								<ol>
									<li>Download the stable version of CakePHP 2.1 from the <a href="https://github.com/cakephp/cakephp/tags" target="_blank">CakePHP Github download page</a>.</li>
									<li>In the CakePHP downloaded folder, delete the <code>app</code> directory.</li>
									<li>Download the latest version of the web interface code from the <a href="https://github.com/MissionalDigerati/vts_web_interface/tags" target="_blank">Web Interface Github download page</a>.</li>
									<li>Rename the downloaded folder to <code>app</code> and drop it into the CakePHP downloaded folder.</li>
									<li>Rename <code>app/Config/core.php.sample</code> to <code>app/Config/core.php</code>.</li>
									<li>Open the <code>app/Config/core.php</code> file in your favorite text editor:
										<ol>
											<li>Change the security salt <em>(letters & numbers)</em>:
												<div><pre>Configure::write('Security.salt', 'WWHTththtuu7675584499wqq9aa0sdllgkgkj');</pre></div>
											</li>
											<li>Change the cipher seed <em>(numbers only)</em>:
												<div><pre>Configure::write('Security.cipherSeed', '00988776664859593876256125273848945');</pre></div>
											</li>
											<li>Set the default language conforming to the <a href="http://www.loc.gov/standards/iso639-2/php/code_list.php" target="_blank">ISO 639-2 standard</a>:
												<div><pre>Configure::write('Config.language', 'eng');</pre></div>
											</li>
											<li>Set the url to the video translator service API:
												<div><pre>define("VTS_URL", "http://api.obs.local/");</pre></div>
											</li>
											<li>Set the domain name where this code will be hosted:
												<div><pre>Configure::write('Domain.name', 'http://apisample.obs.local/');</pre></div>
											</li>
										</ol>
									</li>
									<li>Setup a database for the application according to your hosting provider's instruction.  Save your database name, database user, and password information.</li>
									<li>Rename <code>app/Config/database.php.default</code> to <code>app/Config/database.php</code>.</li>
									<li>Open the <code>app/Config/database.php</code> file in your favorite text editor, and set the <code>$default</code> array to match your database settings.
										<div>
<pre>
public $default = array(
	'datasource' => 'Database/Mysql',
	'persistent' => false,
	'host' => 'YOUR_HOST',
	'login' => 'YOUR_USERNAME',
	'password' => 'YOUR_PASSWORD',
	'database' => 'YOUR_DATABASE_NAME',
	'prefix' => '',
	//'encoding' => 'utf8',
);
</pre>
										</div>
									</li>
									<li>Open the <code>app/Config/Schema/schema.php</code> and change the Administrators information.  <strong>Make sure to change the password, and that it matches the confirm password.</strong>
										<div>
<pre>$admin = array('User' => array(
				'password' => 'mypass*12', 
				'confirm_password' => 'mypass*12', 
				'email' => 'johnathan@missionaldigerati.org'
															)
);</pre>
										</div>
									</li>
									<li>Upload the code to your web server using your favorite FTP program.</li>
									<li>We will now use CakePHP's batch script to generate the database.  Log into your server via command line,  and <a href="" rel="popover" class="popover_link" data-content="The cd command will allow you to change directories." data-original-title="cd (change directory)">cd</a> into the root directory of your application.  This is the directory that holds the <strong>app</strong> directory.  Use the following command to trigger the batch script:
									<div>
										<pre>lib/Cake/Console/cake schema create</pre>
									</div>
									Answer the following questions with the correct response:<br>
									<em>Are you sure you want to drop the table(s)?</em> <strong>y</strong><br>
									<em>Are you sure you want to create the table(s)? (y/n)</em> <strong>y</strong><br>
									</li>
									<li>Now open your favorite browser, and visit the domain of the website.  You should be able to login with your administration account.</li>
								</ol>
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