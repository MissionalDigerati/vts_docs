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
$JSONDefintion = "JSON, or JavaScript Object Notation, is a text-based open standard designed for human-readable data interchange. It is derived from the JavaScript scripting language for representing simple data structures and associative arrays, called objects.<br><br><a href='http://en.wikipedia.org/wiki/JSON' target='_blank'>- Wikipedia</a>";
$XMLDefintion = "Extensible Markup Language is a markup language that defines a set of rules for encoding documents in a format that is both human-readable and machine-readable. It is defined in the XML 1.0 Specification produced by the W3C, and several other related specifications, all gratis open standards.<br><br><a href='http://en.wikipedia.org/wiki/XML' target='_blank'>- Wikipedia</a>";
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
			$taglineHeader = 'API Docs';
			$taglineText = 'A single access point for all your applications.';
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
								<li><a href="#configuration"><i class="icon-chevron-right"></i> Configuration</a></li>
								<li><a href="#licensing"><i class="icon-chevron-right"></i> Licensing</a></li>
							</ul>
						</div><!-- .span3 -->
						<div class="span8 docs">
							<div class="pull-right">
								<a class="btn btn-primary" href="https://github.com/MissionalDigerati/vts_api/tags" target="_blank"><i class="icon-download-alt icon-white"></i> Download on Github</a>
							</div>
							<div class="clearfix"></div>
							<section id="description">
								<p>An API is defined as a application programming interface, and provides a single interface for achieving a specific task from a wide array of devices. From an iPhone application, to a web based tool,  all devices can access this API regardless of the programming language.  Using a RESTful style of urls,  devices can make requests to the API,  and receive back information about the progress of the request.  This specific API provides a single interface for video manipulation.  Users can upload audio for a specific video clip,  and the API will merge the audio file with the video file.  As it merges the files,  it will also lengthen or shorten the video, by altering the frame rate, to match the audio length.  This API can also combine multiple clips into a single master recording.  The goal of the API is to create a single gateway for crowd-sourcing the translation of videos on the web.</p>
							
								<h3>HTTP-based</h3>
								<p>This API use the power of HTTP request protocols.  These are the supported HTTP request protocols:</p>
								<ul>
									<li>GET - retrieving information about a resource.</li>
									<li>POST - create a new resource.</li>
									<li>PUT - modify a current resource.  You will need to do a POST with an attribute "_method=PUT", to use this method.</li>
									<li>DELETE - delete a current resource.  You will need to do a POST with an attribute "_method=DELETE", to use this method.</li>
								</ul>
								<p>For more information,  check out <a href="http://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol#Request_methods" target="_blank">this article</a> on Wikipedia.</p>
								<h3>REST</h3>
								<p>This API conforms to the design principles of Representational State Transfer (REST). Simply change the format extension a request to get results in the format of your choice.  We currently accept the <a href="" rel="popover" class="popover_link" data-content="<?php echo $JSONDefintion; ?>" data-original-title="JSON">JSON</a> and <a href="" rel="popover" class="popover_link" data-content="<?php echo $XMLDefintion; ?>" data-original-title="XML">XML</a> format.</p>
								<h3>Form Based Parameters</h3>
								<p>Currently this API only accepts form based data submission.  All parameters should have a content type of <code>application/x-www-form-urlencoded</code> or <code>multipart/form-data</code>.</p>
							</section>
							<section id="requirements">
								<div class="page-header">
									<h2><a name="requirements"></a>Requirements</h2>
								</div>
								<p>This application has been designed for a Linux based server.  It is highly recommended **NOT** to put this on a shared server.  The FFMPEG library can be resource intensive, and get you banned from the hosting provider.  Your server will need to have the following libraries installed:</p>
								<ul>
									<li>PHP 5.2.8 or greater</li>
									<li>Linux</li>
									<li>MySQL (4 or greater)</li>
									<li><a href="http://pear.php.net/" target="_blank">PEAR</a></li>
									<li><a href="http://ffmpeg.org/" target="_blank">FFMPEG</a></li>
									<li><a href="https://github.com/char0n/ffmpeg-php" target="_blank">FFMPEG-PHP</a></li>
									<li><a href="http://gpac.wp.mines-telecom.fr/" target="_blank">MP4Box from GPAC library</a></li>
									<li>SSH Access to Web Server</li>
								</ul>
							</section>
							<section id="installation">
								<div class="page-header">
									<h2>Installation</h2>
								</div>
								<p>You will need to setup a web server with all the requirements listed above.  Once it is setup,  you will need to complete the following:</p>
								<ol>
										<li>Download the stable version of CakePHP 2.1 from the <a href="https://github.com/cakephp/cakephp/tags" target="_blank">CakePHP Github download page</a>.</li>
										<li>Download the latest version of the VTS API code from the <a href="https://github.com/MissionalDigerati/vts_api/tags/tags" target="_blank" title="VTS API Github download page">VTS API Github download page</a>.</li>
										<li>Extract both downloads.</li>
										<li>Rename the VTS API downloaded folder to <strong>app</strong>, and replace the <strong>app</strong> directory inside the CakePHP downloaded folder.</li>
										<li>Upload the CakePHP folder to your web server.</li>
										<li>Retrieve your server's path to the PHP PEAR library by logging into your web server using command line, and typing in the command <code>which pear</code>.  Copy the output, and save it temporarily for a later step.</li>
										<li>Copy <code>Config/core.php.default</code> to <code>Config/core.php</code>.  Open the file in your favorite text editor, and change the following settings:
											<ul>
												<li>Change <strong>debug</strong> to 0.
													<div>
														<pre>Configure::write('debug', 0);</pre>
													</div>
												</li>
												<li>Change <strong>Security.salt</strong> and <strong>Security.cipherSeed</strong>.  Security.salt should be a series of random letters and numbers.  The Security.cipherSeed should be a series of random numbers only.
													<div>
<pre>Configure::write('Security.salt', 'YOUR_SALT');
Configure::write('Security.cipherSeed', 'YOUR_CIPHER_SEED');</pre>
													</div>
												</li>
												<li>Set <strong>VTS.useCron</strong> for using a Cron Job (true) or Background Process (false).  You can find out more about this setting in the <a href="#configuration">Configuration</a> section of this document.
													<div>
														<pre>Configure::write('VTS.useCron',false);</pre>
													</div>
												</li>
												<li>Set <strong>VTS.translationRequest.expires</strong> if you want translation requests to expire.  You can find out more about this setting in the <a href="#configuration">Configuration</a> section of this document.
													<div>
														<pre>Configure::write('VTS.translationRequest.expires', false);</pre>
													</div>
												</li>
												<li>Set <strong>VTS.translationRequest.expiresIn</strong> to the number of days till a translation request expires.
													<div>
														<pre>Configure::write('VTS.translationRequest.expiresIn', 1);</pre>
													</div>
												</li>
												<li>Add your PHP PEAR path to the last line of the file.
													<div>
														<pre>putenv('PATH=' . getenv('PATH') . PATH_SEPARATOR . 'YOUR_PHP_PEAR_PATH');</pre>
													</div>
												</li>
											</ul></li>
											<li>Setup a database for the application according to your hosting provider's instruction.  Save your database name, database user, and password information.</li>
											<li>Copy <code>Config/database.php.default</code> to <code>Config/database.php</code>.  Open the file in your favorite text editor, and change the database settings:
										<div>
<pre>
public $default = array(
	'datasource' => 'Database/Mysql',
	'persistent' => false,
	'host' => 'localhost',
	'login' => 'YOUR_DATABASE_USERNAME',
	'password' => 'YOUR_DATABASE_PASSWORD',
	'database' => 'YOUR_DATABASE_NAME',
	'prefix' => '',
	'encoding' => 'utf8',
	'unix_socket' => 'YOUR_DATABASE_SOCKET',
);
</pre>
										</div>		
									</li>
									<li>Open the <code>Config/Schema/schema.php</code> and change the Administrators information.  <strong>Make sure to change the password, and that it matches the confirm password.</strong>
										<div>
<pre>$admin = array('User' => array(
				'password' => 'mypass*12', 
				'confirm_password' => 'mypass*12', 
				'email' => 'johnathan@missionaldigerati.org'
															)
);</pre>
										</div>
									</li>
									<li>We will now use CakePHP's batch script to generate the database.  Log into your server via command line,  and <a href="" rel="popover" class="popover_link" data-content="The cd command will allow you to change directories." data-original-title="cd (change directory)">cd</a> into the root directory of your application.  This is the directory that holds the <strong>app</strong> directory.  Use the following command to trigger the batch script:
									<div>
										<pre>lib/Cake/Console/cake schema create</pre>
									</div>
									Answer the following questions with the correct response:<br>
									<em>Are you sure you want to drop the table(s)?</em> <strong>y</strong><br>
									<em>Are you sure you want to create the table(s)? (y/n)</em> <strong>y</strong><br>
									</li>
									<li>Finally,  open your favorite web browser and visit the url of your video translator service application.  You should be greeted with the following screenshot:
										<div>
											<img src="/images/docs/api_login.png" alt="Api Login Page">
										</div>
									</li>
									<li>Verify that you can login, and then you can begin adding <a href="/docs/v1/api/api_keys" title="API Key Documentation">API Keys</a> to the video translator service.</li>
								</ol>
							</section>
							<section id="configuration">
								<div class="page-header">
									<h2>Configuration</h2>
								</div>
								<h3>Processing Videos: Cron Job or Background Process</h3>
								<p>The processing time for a single clip averages around 3 minutes for a 20 second clip.  Since this is a long time to keep a request open,  the system offers  two ways you can handle the processing.  You can either use a background process that is triggered by the code,  or setup a cron job to process every few minutes.  Here is some more information on the two choices.</p>
								<h4>Cron Job</h4>
								<p>To use the cron job method,  set the <strong>VTS.useCron</strong> in <code>Config/core.php</code> file equal to <strong>true</strong>.</p>
								<div>
									<pre>Configure::write('VTS.useCron',false);</pre>
								</div>
								<p>A cron job is a reoccurring task that runs at specific intervals during the day.  You will setup the task in the control panel of your web server, or on the command line.  Please ask your web service provider for directions on how to set up the cron job.  It is suggested to run the following command, from the API's <strong>app</strong> directory, every 5 minutes on your web server.</p>
								<div>
									<pre>php scripts/vts_processor.php</pre>
								</div>
								<p>The script will grab the latest clip and will process it.  If there are no clips,  then it will look for the latest master recording to process.  The script will only process one request at a time.</p>
								<h4>Background Process</h4>
								<p>To use the background processing method,  set the <strong>VTS.useCron</strong> in <code>Config/core.php</code> file equal to <strong>false</strong>.</p>
								<div>
									<pre>Configure::write('VTS.useCron',false);</pre>
								</div>
								<p>You will also need to setup the path to your PEAR library.  You can find the path by logging into your server via command line, and typing  in the command <code>which pear</code>.  Then you will need to add the path to the bottom of the <code>Config/core.php</code> file.</p>
								<div>
									<pre>putenv('PATH=' . getenv('PATH') . PATH_SEPARATOR . '/usr/local/bin');</pre>
								</div>
								<p>Whenever a request is received by the server,  the system will trigger a command line request to run the <code>trigger_bg_process.php</code> file, and then will continue processing the request.  The output of the command gets funneled to a log file in <code>tmp/logs/processor.log</code>,  which allows PHP to continue without waiting.</p>
								<h4>Which Should I Use?</h4>
								<p>It is recommended to use a cron job for handling these tasks.  This will help you keep control of server resources,  and protect your server from crashing.  Since background processes trigger when requested,  it is possible to overload the server with requests.  Also,  FFMPEG tends to be server intensive program.  Ultimately, it is a question of how many people would be using the system.  If it will only be a select few, then the background process will work fine.  For a large group of participants,  I recommend the cron job.</p>
								<h3>Expiring Translation Requests</h3>
								<p>If you would like to limit the length of time allowed to complete a translation, then you will most likely want to expire translation requests.  By default,  translation requests do not expire.  To setup the expiration of translation requests,  open the <code>Config/core.php</code> file.  You will want to set the <strong>VTS.translationRequest.expires</strong> to <strong>true</strong>.</p>
								<div>
									<pre>Configure::write('VTS.translationRequest.expires', true);</pre>
								</div>
								<p>Next you will need to decide the maximum number of days it should take to complete a translation request.  You will then set the <strong>VTS.translationRequest.expiresIn</strong> to the maximum number of days.</p>
								<div>
									<pre>Configure::write('VTS.translationRequest.expiresIn', 1);</pre>
								</div>
								<p>By setting an expiration on the translation requests,  <strong>ALL</strong> requests will be denied from an expired translation request.  Users will be required to request a new translation request token, and re submitted their audio files.</p>
							</section>
							<section id="licensing">
								<div class="page-header">
									<h2>Licensing</h2>
								</div>
								This API is released under the <a href="http://www.gnu.org/licenses/gpl-3.0-standalone.html" target="_blank">GNU General Public License v3</a>.
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