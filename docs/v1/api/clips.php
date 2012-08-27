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
			$title = "Clips";
			require_once('../../../partials/site_wide_css.inc.php'); 
		?>
	</head>
	<body data-spy="scroll" data-target=".docs-sidebar">
	  <?php 
			$taglineHeader = 'Clips';
			$taglineText = 'All the pieces make up the whole.';
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
								<li><a href="#read_all"><i class="icon-chevron-right"></i> Read All</a></li>
								<li><a href="#update"><i class="icon-chevron-right"></i> Update</a></li>
							</ul>
						</div><!-- .span3 -->
						<div class="span8 docs">
							<div class="pull-right">
								<a class="btn btn-primary" href="https://github.com/MissionalDigerati/vts_api" target="_blank"><i class="icon-download-alt icon-white"></i> Download on Github</a>
							</div>
							<div class="clearfix"></div>
							<section id="description">
									<p>If you have read the <a href="/preparing_your_video" title="Preparing Your Video Section">Preparing Your Video</a> section on this website,  you will know that every video is dissected into smaller clips.  A clip is a smaller piece of video that will need to be merged with an audio file that you provide.  This audio file is the translation for the clip.  Once all clips have been submitted,  you will need to poll the <a href="#read_all">clips -> read all</a> url to see if all of the clips were processed.  The server will respond with a variable <strong>ready_for_processing</strong>.  If it is set to <strong>YES</strong>,  then you are ready to process the final master recording.  Please visit the <a href="/docs/v1/api/workflow" title="Workflow Documentation">workflow</a> page for more details.</p>
								<h3>Attributes</h3>
								<dl>
									<dt>id</dt>
								  <dd>The unique identifier for the clip.</dd>
									<dt>translation_request_id</dt>
								  <dd>The unique identifier for the translation request.</dd>
									<dt>audio_file_location</dt>
								  <dd>The location of the received audio file relative to the <code>webroot</code> folder on the video translator service API server.</dd>
									<dt>video_file_location</dt>
								  <dd>The location of the received audio file relative to the <code>webroot</code> folder on the video translator service API server.</dd>
								  <dt>completed_file_location</dt>
								  <dd>The location of the final processed clip relative to the <code>webroot</code> folder on the video translator service API server.</dd>
									<dt>order_by</dt>
								  <dd>The position this clip resides in the master recording.  All clips are appended to the master recording in ascending order of this attribute.</dd>
									<dt>status</dt>
								  <dd>The state of the processing of the clip.</dd>
									<dt>created</dt>
								  <dd>The timestamp when the the clip was created.</dd>
									<dt>modified</dt>
								  <dd>The timestamp when the the clip was last modified.</dd>
									<dt>completed</dt>
								  <dd>The timestamp when the clip was completed.</dd>
								</dl>
								<table class="table table-hover table-condensed table-bordered table-stripped">
									<caption>Statuses</caption>
									<thead>
									    <tr>
									      <th>Status</th>
									      <th>Description</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <td>PENDING</td>
									      <td>Waiting to be processed.</td>
									    </tr>
											<tr>
									      <td>PROCESSING</td>
									      <td>It is currently being processed.</td>
									    </tr>
											<tr>
									      <td>COMPLETE</td>
									      <td>The processing is complete.</td>
									    </tr>
											<tr>
									      <td>ERROR</td>
									      <td>Their was an error in the processing of the clip.  Check the log file in <code>tmp/logs/processor.log</code> for more information.</td>
									    </tr>
									  </tbody>
								</table>
							</section>
							<section id="create">
								<div class="page-header">
									<h2>Create</h2>
								</div>
								<dl>
								  <dt>HTTP Request Protocol</dt>
								  <dd>POST</dd>
									<dt>Resource URL</dt>
								  <dd>/clips.format (.json or .xml)</dd>
								</dl>
								<p>Create a new translated clip, and prepare it for processing.</p>
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
									      <td>translation_request_token</td>
									      <td>The token associated with the translation request.  It cannot be expired. <strong>* Required</strong></td>
									    </tr>
											<tr>
									      <td>video_file_location</td>
									      <td>The location of the clip on your video translator service API server.  It should be relative to the <strong>webroot</strong> folder on the video translator service API server. <strong>* Required</strong></td>
									    </tr>
											<tr>
									      <td>audio_file</td>
									      <td>The actual audio file to merge with the video.  mp3, wav, and caf files are accepted. <strong>* Required</strong></td>
									    </tr>
											<tr>
									      <td>order_by</td>
									      <td>The position of this clip in the master recording. <strong>* Required</strong></td>
									    </tr>
									  </tbody>
								</table>
								<h3>Response (JSON)</h3>
								<p>POST /clips.json</p>
<pre>
{
    "vts": {
        "status": "success",
        "message": "Your clip has been submitted.",
        "clip": {
            "id": "17",
            "translation_request_id": "7",
            "audio_file_location": "\/files\/clips\/bb56ce63db9f75c57274d6bac19836.mp3",
            "video_file_location": "\/files\/master_files\/example\/the_compassionate_father_1.mp4",
            "completed_file_location": "",
            "status": "PENDING",
            "order_by": "1",
            "created": "2012-08-24 17:10:14",
            "modified": "2012-08-24 17:10:16",
            "completed": null
        }
    }
}
</pre>
								<h3>Response (XML)</h3>
								<p>POST /clips.xml</p>
<pre>
&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
&lt;vts&gt;
    &lt;status&gt;success&lt;/status&gt;
    &lt;message&gt;Your clip has been submitted.&lt;/message&gt;
    &lt;clip&gt;
        &lt;id&gt;19&lt;/id&gt;
        &lt;translation_request_id&gt;7&lt;/translation_request_id&gt;
        &lt;audio_file_location&gt;/files/clips/bb56ce63db9f75c57274d6bac19836.mp3&lt;/audio_file_location&gt;
        &lt;video_file_location&gt;/files/master_files/example/the_compassionate_father_1.mp4&lt;/video_file_location&gt;
        &lt;completed_file_location/&gt;
        &lt;status&gt;PENDING&lt;/status&gt;
        &lt;order_by&gt;1&lt;/order_by&gt;
        &lt;created&gt;2012-08-24 17:16:07&lt;/created&gt;
        &lt;modified&gt;2012-08-24 17:16:08&lt;/modified&gt;
        &lt;completed/&gt;
    &lt;/clip&gt;
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
								  <dd>/clips/{clip_id}.format (.json or .xml)</dd>
								</dl>
								<p>Delete the specific clip.  This will also remove the file associated with the clip.</p>
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
									      <td>clip_id</td>
									      <td>The url must contain the id of the clip you wanting to delete.  You should have received this when you created the clip. <strong>* Required</strong></td>
									    </tr>
											<tr>
									      <td>translation_request_token</td>
									      <td>The token associated with the translation request.  It cannot be expired. <strong>* Required</strong></td>
									    </tr>
									    <tr>
									      <td>_method=DELETE</td>
									      <td>Tell the server to use the HTTP request protocol DELETE. <strong>* Required</strong></td>
									    </tr>
									  </tbody>
								</table>
								<h3>Response (JSON)</h3>
								<p>POST /clips/17.json</p>
<pre>
{
    "vts": {
        "status": "success",
        "message": "Your clip has been deleted.",
        "clip": ""
    }
}
</pre>
								<h3>Response (XML)</h3>
								<p>POST /clip/19.xml</p>
<pre>
&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
&lt;vts&gt;
    &lt;status&gt;success&lt;/status&gt;
    &lt;message&gt;Your clip has been deleted.&lt;/message&gt;
    &lt;clip/&gt;
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
					  <dd>/clips/{clip_id}.format (.json or .xml)?translation_request_token={your_translation_request_token}</dd>
					</dl>
					<p>Retrieve the details of a specific clip.</p>
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
						      <td>clip_id</td>
						      <td>The url must contain the id of the clip you wanting to delete.  You should have received this when you created the clip. <strong>* Required</strong></td>
						    </tr>
								<tr>
						      <td>translation_request_token</td>
						      <td>The token associated with the translation request.  It cannot be expired. <strong>* Required</strong></td>
						    </tr>
						  </tbody>
					</table>
					<h3>Response (JSON)</h3>
					<p>GET /clips/18.json?translation_request_token={your_translation_request_token}</p>
<pre>
{
 "vts": {
     "status": "success",
     "message": "",
     "clip": {
         "id": "18",
         "translation_request_id": "7",
         "audio_file_location": "\/files\/clips\/bb56ce63db9f75c57274d6bac19836.mp3",
         "video_file_location": "\/files\/master_files\/example\/the_compassionate_father_1.mp4",
         "completed_file_location": "\/files\/clips\/completed\/18_1be2b78d433641bc4866.mp4",
         "status": "COMPLETE",
         "order_by": "1",
         "created": "2012-08-24 17:13:04",
         "modified": "2012-08-24 17:13:05",
         "completed": "2012-08-24 17:13:49"
     }
 }
}
</pre>
					<h3>Response (XML)</h3>
					<p>GET /clips/18.xml?translation_request_token={your_translation_request_token}</p>
<pre>
&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
&lt;vts&gt;
 &lt;status&gt;success&lt;/status&gt;
 &lt;message/&gt;
 &lt;clip&gt;
     &lt;id&gt;18&lt;/id&gt;
     &lt;translation_request_id&gt;7&lt;/translation_request_id&gt;
     &lt;audio_file_location&gt;/files/clips/bb56ce63db9f75c57274d6bac19836.mp3&lt;/audio_file_location&gt;
     &lt;video_file_location&gt;/files/master_files/example/the_compassionate_father_1.mp4&lt;/video_file_location&gt;
     &lt;completed_file_location&gt;/files/clips/completed/18_1be2b78d433641bc4866.mp4&lt;/completed_file_location&gt;
     &lt;status&gt;COMPLETE&lt;/status&gt;
     &lt;order_by&gt;1&lt;/order_by&gt;
     &lt;created&gt;2012-08-24 17:13:04&lt;/created&gt;
     &lt;modified&gt;2012-08-24 17:13:05&lt;/modified&gt;
     &lt;completed&gt;2012-08-24 17:13:49&lt;/completed&gt;
 &lt;/clip&gt;
&lt;/vts&gt;
</pre>
						</section>
						<section id="read_all">
							<div class="page-header">
								<h2>Read All</h2>
							</div>
							<dl>
							  <dt>HTTP Request Protocol</dt>
							  <dd>GET</dd>
								<dt>Resource URL</dt>
							  <dd>/clips.format (.json or .xml)?translation_request_token={your_translation_request_token}</dd>
							</dl>
							<p>Retrieve the details for all clips associated with the translation request token.  The server will respond with a variable <strong>ready_for_processing</strong>.  If it is set to <strong>YES</strong>,  then you are ready to process the final master recording.  <strong>Please verify all clips have been added before requesting the master recording.  The API does not know the total number of clips it is expecting.</strong></p>
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
								      <td>translation_request_token</td>
								      <td>The token associated with the translation request.  It cannot be expired. <strong>* Required</strong></td>
								    </tr>
								  </tbody>
							</table>
							<h3>Response (JSON)</h3>
							<p>GET /clips.json?translation_request_token={your_translation_request_token}</p>
<pre>
{
    "vts": {
        "status": "success",
        "message": "",
        "ready_for_processing": "YES",
        "clips": [{
            "id": "14",
            "translation_request_id": "4",
            "audio_file_location": "\/files\/clips\/c2771f90182b3ef63573c7ba0722a1.mp3",
            "video_file_location": "\/files\/master_files\/example\/the_compassionate_father_1.mp4",
            "completed_file_location": "\/files\/clips\/completed\/14_8e847e3b97d809c42296.mp4",
            "status": "COMPLETE",
            "order_by": "1",
            "created": "2012-08-21 15:21:36",
            "modified": "2012-08-21 15:21:36",
            "completed": "2012-08-21 15:24:54"
        }, {
            "id": "15",
            "translation_request_id": "4",
            "audio_file_location": "\/files\/clips\/cdd874d32924ad4def0f669b2248c1.mp3",
            "video_file_location": "\/files\/master_files\/example\/the_compassionate_father_2.mp4",
            "completed_file_location": "\/files\/clips\/completed\/15_def4f6801798bd9e5c39.mp4",
            "status": "COMPLETE",
            "order_by": "2",
            "created": "2012-08-21 15:21:49",
            "modified": "2012-08-21 15:21:49",
            "completed": "2012-08-21 15:26:21"
        }, {
            "id": "16",
            "translation_request_id": "4",
            "audio_file_location": "\/files\/clips\/95cbfe6ea27a7423c907e3ea2aac57.mp3",
            "video_file_location": "\/files\/master_files\/example\/the_compassionate_father_3.mp4",
            "completed_file_location": "\/files\/clips\/completed\/16_1837423fbbd6ea2a654c.mp4",
            "status": "COMPLETE",
            "order_by": "3",
            "created": "2012-08-21 15:22:09",
            "modified": "2012-08-21 15:22:10",
            "completed": "2012-08-21 15:26:41"
        }]
    }
}
</pre>
							<h3>Response (XML)</h3>
							<p>GET /clips.xml?translation_request_token={your_translation_request_token}</p>
<pre>
&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
&lt;vts&gt;
    &lt;status&gt;success&lt;/status&gt;
    &lt;message/&gt;
    &lt;ready_for_processing&gt;YES&lt;/ready_for_processing&gt;
    &lt;clips&gt;
        &lt;id&gt;14&lt;/id&gt;
        &lt;translation_request_id&gt;4&lt;/translation_request_id&gt;
        &lt;audio_file_location&gt;/files/clips/c2771f90182b3ef63573c7ba0722a1.mp3&lt;/audio_file_location&gt;
        &lt;video_file_location&gt;/files/master_files/example/the_compassionate_father_1.mp4&lt;/video_file_location&gt;
        &lt;completed_file_location&gt;/files/clips/completed/14_8e847e3b97d809c42296.mp4&lt;/completed_file_location&gt;
        &lt;status&gt;COMPLETE&lt;/status&gt;
        &lt;order_by&gt;1&lt;/order_by&gt;
        &lt;created&gt;2012-08-21 15:21:36&lt;/created&gt;
        &lt;modified&gt;2012-08-21 15:21:36&lt;/modified&gt;
        &lt;completed&gt;2012-08-21 15:24:54&lt;/completed&gt;
    &lt;/clips&gt;
    &lt;clips&gt;
        &lt;id&gt;15&lt;/id&gt;
        &lt;translation_request_id&gt;4&lt;/translation_request_id&gt;
        &lt;audio_file_location&gt;/files/clips/cdd874d32924ad4def0f669b2248c1.mp3&lt;/audio_file_location&gt;
        &lt;video_file_location&gt;/files/master_files/example/the_compassionate_father_2.mp4&lt;/video_file_location&gt;
        &lt;completed_file_location&gt;/files/clips/completed/15_def4f6801798bd9e5c39.mp4&lt;/completed_file_location&gt;
        &lt;status&gt;COMPLETE&lt;/status&gt;
        &lt;order_by&gt;1&lt;/order_by&gt;
        &lt;created&gt;2012-08-21 15:21:49&lt;/created&gt;
        &lt;modified&gt;2012-08-21 15:21:49&lt;/modified&gt;
        &lt;completed&gt;2012-08-21 15:26:21&lt;/completed&gt;
    &lt;/clips&gt;
    &lt;clips&gt;
        &lt;id&gt;16&lt;/id&gt;
        &lt;translation_request_id&gt;4&lt;/translation_request_id&gt;
        &lt;audio_file_location&gt;/files/clips/95cbfe6ea27a7423c907e3ea2aac57.mp3&lt;/audio_file_location&gt;
        &lt;video_file_location&gt;/files/master_files/example/the_compassionate_father_3.mp4&lt;/video_file_location&gt;
        &lt;completed_file_location&gt;/files/clips/completed/16_1837423fbbd6ea2a654c.mp4&lt;/completed_file_location&gt;
        &lt;status&gt;COMPLETE&lt;/status&gt;
        &lt;order_by&gt;1&lt;/order_by&gt;
        &lt;created&gt;2012-08-21 15:22:09&lt;/created&gt;
        &lt;modified&gt;2012-08-21 15:22:10&lt;/modified&gt;
        &lt;completed&gt;2012-08-21 15:26:41&lt;/completed&gt;
    &lt;/clips&gt;
&lt;/vts&gt;
</pre>
								</section>
								<section id="update">
									<div class="page-header">
										<h2>Update</h2>
									</div>
									<dl>
									  <dt>HTTP Request Protocol</dt>
									  <dd>POST</dd>
										<dt>Resource URL</dt>
									  <dd>/clips/{clip_id}.format (.json or .xml)</dd>
									</dl>
									<p>Update an existing translated clip, and reprocess it.</p>
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
										      <td>clip_id</td>
										      <td>The url must contain the id of the clip you wanting to update. You should have received this when you created the clip. <strong>* Required</strong></td>
										    </tr>
										    <tr>
										      <td>translation_request_token</td>
										      <td>The token associated with the translation request.  It cannot be expired. <strong>* Required</strong></td>
										    </tr>
												<tr>
										      <td>video_file_location</td>
										      <td>The location of the clip on your video translator service API server.  It should be relative to the <strong>webroot</strong> folder on the video translator service API server. <strong>* Required</strong></td>
										    </tr>
												<tr>
										      <td>audio_file</td>
										      <td>The actual audio file to merge with the video.  mp3, wav, and caf files are accepted. <strong>* Required</strong></td>
										    </tr>
												<tr>
										      <td>order_by</td>
										      <td>The position of this clip in the master recording. <strong>* Required</strong></td>
										    </tr>
												<tr>
										      <td>_method=PUT</td>
										      <td>Tell the server to use the HTTP request protocol UPDATE. <strong>* Required</strong></td>
										    </tr>
										  </tbody>
									</table>
									<h3>Response (JSON)</h3>
									<p>POST /clips/{clip_id}.json</p>
<pre>
{
    "vts": {
        "status": "success",
        "message": "Your clip has been modified.",
        "clip": {
            "id": "18",
            "translation_request_id": "7",
            "audio_file_location": "\/files\/clips\/bb56ce63db9f75c57274d6bac19836.mp3",
            "video_file_location": "\/files\/master_files\/example\/the_compassionate_father_4.mp4",
            "completed_file_location": "",
            "status": "PENDING",
            "order_by": "1",
            "created": "2012-08-24 17:13:04",
            "modified": "2012-08-27 09:18:18",
            "completed": "2012-08-24 17:13:49"
        }
    }
}
</pre>
									<h3>Response (XML)</h3>
									<p>POST /clips/{clip_id}.xml</p>
<pre>
&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
&lt;vts&gt;
    &lt;status&gt;success&lt;/status&gt;
    &lt;message&gt;Your clip has been modified.&lt;/message&gt;
    &lt;clip&gt;
        &lt;id&gt;18&lt;/id&gt;
        &lt;translation_request_id&gt;7&lt;/translation_request_id&gt;
        &lt;audio_file_location&gt;/files/clips/bb56ce63db9f75c57274d6bac19836.mp3&lt;/audio_file_location&gt;
        &lt;video_file_location&gt;/files/master_files/example/the_compassionate_father_4.mp4&lt;/video_file_location&gt;
        &lt;completed_file_location/&gt;
        &lt;status&gt;PENDING&lt;/status&gt;
        &lt;order_by&gt;1&lt;/order_by&gt;
        &lt;created&gt;2012-08-24 17:13:04&lt;/created&gt;
        &lt;modified&gt;2012-08-27 09:23:14&lt;/modified&gt;
        &lt;completed&gt;2012-08-27 09:19:10&lt;/completed&gt;
    &lt;/clip&gt;
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