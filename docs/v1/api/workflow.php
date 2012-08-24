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
			$title = "API Workflow";
			require_once('../../../partials/site_wide_css.inc.php'); 
		?>
	</head>
	<body>
	  <?php 
			$taglineHeader = 'API Workflow';
			$taglineText = 'Video translation done easy.';
			require_once('../../../partials/main_nav.inc.php'); 
		?>
		<div class="slider">
			<div class="inner">
				<div class="container">
					<div class="camera_wrap">
					   <!-- Slideshow Here -->
					</div>
				</div>
			</div>
		</div>
	  <div class="content">
			<div class="inner">
				<div class="container home">
					  <div class="padded_content">
							<p>The video translator service API offers an easy way for creating a fully translated video.  Here is an outline on how to develop a master recording of your new translation.</p>
							<ol>
								<li>First you will need to request a translation request token.  You accomplish this by passing your API key to the <a href="/docs/v1/api/translation_requests#create" title="Translation Requests Create Documentation">translation requests -> create</a> url.</li>
								<li>Once you have a translation request token, you use the token to begin passing audio files for each clip of your master recording.  You will use the <a href="/docs/v1/api/clips#create" title="Clips Create Documentation">clips -> create</a> url.</li>
								<li>If at any point you need to edit the processed clip,  you can send a request to the <a href="/docs/v1/api/clips#update" title="Clips Update Documentation">clips -> update</a> url.</li>
								<li>Once all of your audio files have been sent to the API,  you can poll the <a href="/docs/v1/api/clips#index" title="Clips Index Documentation">clips -> index</a> url.  The server will respond with a variable <strong>ready_for_processing</strong>.  If it is set to <strong>YES</strong>,  then you are ready to process the final video.  <strong>Please verify all clips have been added.  The API does not know the total number of clips it is expecting.</strong></li>
								<li>You can now request the master recording to be processed, by sending a request to the <a href="/docs/v1/api/master_recordings#create" title="Master Recordings Create Documentation">master recordings -> create</a> url.</li>
								<li>Once the request for a master recording has been sent,  you can poll the <a href="/docs/v1/api/master_recordings#read" title="Master Recordings Read Documentation">master recordings -> read</a> url.  Once the master recording's <strong>status</strong> is set to <strong>COMPLETE</strong>,  you will receive a <strong>final_file_name</strong>.  The completed file url will be http://your_api_server_domain/master_recordings/final_file_name/final_file_name.mp4.</li>
								<li>Enjoy your newly created video!</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require_once('../../../partials/site_wide_js.inc.php'); ?>
	</body>
</html>