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
$YAMLDefinition = "a human friendly data serialization standard for all programming languages.<br><br><a href='http://www.yaml.org/' target='_blank'>- YAML.org</a>";
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
								<h3>Adding Your Videos</h3>
								<p>All video settings are stored in <a href="" rel="popover" class="popover_link" data-content="<?php echo $YAMLDefinition; ?>" data-original-title="YAML">YAML</a>,  a simple to read markup language. The data structure of the YAML syntax is based on indentation.  More on this in a minute.  The files for setting up the videos are stored in <code>app/Locales/{language}/VIDEOS/videos.yml</code>.  Since the code that you downloaded has <strong>English (eng)</strong> as its default language,  you will find a sample in <code>app/Locales/eng/VIDEOS/videos.yml</code>.  If you open the file in your favorite text editor,  you will see the simplicity of YAML's syntax.</p>
								<div>
<pre>
videos:
  video_1:
    title: '22 - The Compassionate Father'
    settings_prefix: compass_father
</pre>
								</div>
								<p>As I said earlier,  the syntax gains its data structure base on its indentation.  So in this file we have videos with only 1 element.  The first video is titled '22 - The Compassionate Father', and its setting prefix is 'compass_father'.  So to add a second file,  your code will look like this:</p>
								<div>
<pre>
videos:
  video_1:
    title: '22 - The Compassionate Father'
    settings_prefix: compass_father
  video_2:
    title: '23 - The Hidden Treasure'
    settings_prefix: hidden_treasure
</pre>
								</div>
								<p>You are not limited to the number of videos you can use in the site.  Just continue to add them in a similar way.</p>
								<table class="table table-hover table-condensed table-bordered table-stripped">
									<caption>Parameters for videos.yml</caption>
									<thead>
									    <tr>
									      <th>Name</th>
									      <th>Description</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td>title</td>
									      <td>The title that will be displayed in a select box when adding a translation. <strong>* Required</strong></td>
									    </tr>
											<tr>
									      <td>settings_prefix</td>
									      <td>The prefix used for the file holding the specific settings for this video.  The settings file is stored in <code>app/Locales/{language}/VIDEOS/{settings_prefix}_settings.yml</code> <strong>* Required</strong></td>
									    </tr>
									  </tbody>
								</table>
								<h3>Adding Video Specific Settings</h3>
								<p>After you change the settings in <code>app/Locales/eng/VIDEOS/videos.yml</code> to match your need,  you will need to create a file at <code>app/Locales/{language}/VIDEOS/{settings_prefix}_settings.yml</code>.  This is a settings file for the specific video.  If you open the file <code>app/Locales/eng/VIDEOS/compass_father_settings.yml</code>,  you can see how it is setup.</p>
<div>
<pre>
clip_1:
  vts_video_file: /files/master_files/example/the_compassionate_father_1.mp4
  local_image_file: /img/clips/clip_1.jpg
  text: 'One day, Jesus was teaching many tax collectors and sinners who were with him.'
clip_2:
  vts_video_file: /files/master_files/example/the_compassionate_father_2.mp4
  local_image_file: /img/clips/clip_2.jpg
  text: 'The religious leaders were grumbling because Jesus was treating these people as friends. So Jesus told this story.'
clip_3:
  vts_video_file: /files/master_files/example/the_compassionate_father_3.mp4
  local_image_file: /img/clips/clip_3.jpg
  text: '"There was a man who had two sons. The younger son told his father, "Father, I want my inheritance now!" So the father divided his property between the two sons.'
...
</pre>
								</div>
								<p>If you prepared your videos by following the instructions on the <a href="/preparing_your_video">Preparing Your Video</a> page,  you should have several clips that make up your entire video.  These clips are defined in this settings file,  along with their transcript,  their location of a local image,  and the location of the video file on the video translator service API server.  You will need to set up a settings file for each video using the correct file naming convention.</p>
								<table class="table table-hover table-condensed table-bordered table-stripped">
									<caption>Parameters for {settings_prefix}_settings.yml</caption>
									<thead>
									    <tr>
									      <th>Name</th>
									      <th>Description</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td>vts_video_file</td>
									      <td>The location of the video file for this clip that will be merged with the audio.  This location is the path on the video translator service API server in the webroot folder. <strong>* Required</strong></td>
									    </tr>
											<tr>
									      <td>local_image_file</td>
									      <td>The location of an image file to display for this clip.  This location is the path in the webroot folder of web interface code.  <strong>* Required</strong></td>
									    </tr>
											<tr>
									      <td>text</td>
									      <td>The transcript for the single clip.  <strong>* Required</strong></td>
									    </tr>
									  </tbody>		
								</table>
								<h3>Internationalization</h3>
								<p>CakePHP has built in Internationalization which makes it easy to offer your site in multiple languages.  You can learn more about CakePHP's Internationalization in the <a href="http://book.cakephp.org/2.0/en/core-libraries/internationalization-and-localization.html#internationalizing-your-application" target="_blank">CakePHP 2.0 Book</a>.  In order to translate the video settings,  you will need to:</p>
								<ol>
									<li>Create a folder in <code>app/Locales/</code> using the <a href="http://www.loc.gov/standards/iso639-2/php/code_list.php" target="_blank">ISO 639-2</a> 3 letter language code.</li>
									<li>In that folder,  create a folder titled <code>VIDEOS</code></li>
									<li>Copy your files from <code>app/Locales/eng/VIDEOS/</code> to this folder.</li>
									<li>Translate the new files into the new language.</li>
								</ol>
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