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
			$title = "Master Recordings";
			require_once('../../../partials/site_wide_css.inc.php'); 
		?>
	</head>
	<body data-spy="scroll" data-target=".docs-sidebar">
	  <?php 
			$taglineHeader = 'Master Recordings';
			$taglineText = 'Completing the task.';
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
								<li><a href="#update"><i class="icon-chevron-right"></i> Update</a></li>
							</ul>
						</div><!-- .span3 -->
						<div class="span8 docs">
							<div class="pull-right">
								<a class="btn btn-primary" href="https://github.com/MissionalDigerati/vts_api/tags" target="_blank"><i class="icon-download-alt icon-white"></i> Download on Github</a>
							</div>
							<div class="clearfix"></div>
							<section id="description">
									<p>A master recording is a video that is made up of multiple clips.  Once you have added all your clips, and the video translator service API has completed the clip processing,  you can request for a master recording to be created.  This recording will contain all your clips in ascending order based on the clip's order_by attribute.  Please remember that the server will need to respond with the variable <strong>ready_for_processing</strong> equal to<strong>YES</strong> on the <a href="/docs/v1/api/clips#read_all">clips -> read all</a> method,  if you want to request the processing of a master recording.  Please visit the <a href="/docs/v1/api/workflow" title="Workflow Documentation">workflow</a> page for more details.</p>
								<h3>Attributes</h3>
								<dl>
									<dt>id</dt>
								  <dd>The unique identifier for the master recording.</dd>
									<dt>translation_request_id</dt>
								  <dd>The unique identifier for the translation request.</dd>
									<dt>title</dt>
								  <dd>The title for the final master recording.</dd>
									<dt>language</dt>
								  <dd>The language for the final master recording.</dd>
								  <dt>final_filename</dt>
								  <dd>The master recording will be saved under this name.  The final file will be saved on the video translator service API server at <code>webroot/files/master_recordings/final_file_name/final_file_name.mp4</code>.</dd>
									<dt>status</dt>
								  <dd>The state of the processing of the master recording.</dd>
									<dt>created</dt>
								  <dd>The timestamp when the the master recording was created.</dd>
									<dt>modified</dt>
								  <dd>The timestamp when the the master recording was last modified.</dd>
									<dt>completed</dt>
								  <dd>The timestamp when the master recording was completed.</dd>
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
									      <td>Their was an error in the processing of the master recording.  Check the log file in <code>tmp/logs/processor.log</code> for more information.</td>
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
								  <dd>/master_recordings.format (.json or .xml)</dd>
								</dl>
								<p>Create a new master recording, and prepare it for processing.</p>
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
									      <td>title</td>
									      <td>The title for the final master recording. <strong>* Required</strong></td>
									    </tr>
											<tr>
									      <td>language</td>
									      <td>The language of the new master recording. <strong>* Required</strong></td>
									    </tr>
											<tr>
									      <td>final_filename</td>
									      <td>The name of the final file. <strong>* Required</strong></td>
									    </tr>
									  </tbody>
								</table>
								<h3>Response (JSON)</h3>
								<p>POST /master_recordings.json</p>
<pre>
{
    "vts": {
        "status": "success",
        "message": "Your master recording request has been submitted.",
        "master_recording": {
            "id": "9",
            "translation_request_id": "4",
            "title": "My Final File",
            "language": "English",
            "final_filename": "my_file",
            "status": "PROCESSING",
            "modified": "2012-08-27 10:06:41",
            "created": "2012-08-27 10:06:40",
            "completed": null
        }
    }
}
</pre>
								<h3>Response (XML)</h3>
								<p>POST /master_recordings.xml</p>
<pre>
&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
&lt;vts&gt;
    &lt;status&gt;success&lt;/status&gt;
    &lt;message&gt;Your master recording request has been submitted.&lt;/message&gt;
    &lt;master_recording&gt;
        &lt;id&gt;10&lt;/id&gt;
        &lt;translation_request_id&gt;4&lt;/translation_request_id&gt;
        &lt;title&gt;My Final File&lt;/title&gt;
        &lt;language&gt;English&lt;/language&gt;
        &lt;final_filename&gt;my_file&lt;/final_filename&gt;
        &lt;status&gt;PROCESSING&lt;/status&gt;
        &lt;modified&gt;2012-08-27 10:07:44&lt;/modified&gt;
        &lt;created&gt;2012-08-27 10:07:44&lt;/created&gt;
        &lt;completed/&gt;
    &lt;/master_recording&gt;
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
								  <dd>/master_recordings/{master_recording_id}.format (.json or .xml)</dd>
								</dl>
								<p>Delete the specific master recording.  This will also remove the file associated with the master recording.</p>
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
									      <td>master_recording_id</td>
									      <td>The url must contain the id of the master recording you are wanting to delete.  You should have received this when you created the master recording. <strong>* Required</strong></td>
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
								<p>POST /master_recordings/10.json</p>
<pre>
{
    "vts": {
        "status": "success",
        "message": "Your master recording has been deleted.",
        "master_recording": ""
    }
}
</pre>
								<h3>Response (XML)</h3>
								<p>POST /master_recordings/3.xml</p>
<pre>
&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
&lt;vts&gt;
    &lt;status&gt;success&lt;/status&gt;
    &lt;message&gt;Your master recording has been deleted.&lt;/message&gt;
    &lt;master_recording/&gt;
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
					  <dd>/master_recordings/{master_recording_id}.format (.json or .xml)?translation_request_token={your_translation_request_token}</dd>
					</dl>
					<p>Retrieve the details of a specific master recording.</p>
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
						      <td>master_recording_id</td>
						      <td>The url must contain the id of the master recording you wanting to delete.  You should have received this when you created the master recording. <strong>* Required</strong></td>
						    </tr>
								<tr>
						      <td>translation_request_token</td>
						      <td>The token associated with the translation request.  It cannot be expired. <strong>* Required</strong></td>
						    </tr>
						  </tbody>
					</table>
					<h3>Response (JSON)</h3>
					<p>GET /master_recordings/11.json?translation_request_token={your_translation_request_token}</p>
<pre>
{
    "vts": {
        "status": "success",
        "message": "",
        "master_recording": {
            "id": "11",
            "translation_request_id": "7",
            "title": "My Final File",
            "language": "English",
            "final_filename": "my_file",
            "status": "COMPLETE",
            "modified": "2012-08-27 10:16:37",
            "created": "2012-08-27 10:16:37",
            "completed": "2012-08-27 10:16:37"
        }
    }
}
</pre>
					<h3>Response (XML)</h3>
					<p>GET /master_recordings/11.xml?translation_request_token={your_translation_request_token}</p>
<pre>
&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
&lt;vts&gt;
    &lt;status&gt;success&lt;/status&gt;
    &lt;message/&gt;
    &lt;master_recording&gt;
        &lt;id&gt;11&lt;/id&gt;
        &lt;translation_request_id&gt;7&lt;/translation_request_id&gt;
        &lt;title&gt;My Final File&lt;/title&gt;
        &lt;language&gt;English&lt;/language&gt;
        &lt;final_filename&gt;my_file&lt;/final_filename&gt;
        &lt;status&gt;COMPLETE&lt;/status&gt;
        &lt;modified&gt;2012-08-27 10:16:37&lt;/modified&gt;
        &lt;created&gt;2012-08-27 10:16:37&lt;/created&gt;
        &lt;completed&gt;2012-08-27 10:16:37&lt;/completed&gt;
    &lt;/master_recording&gt;
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
								  <dd>/master_recordings/{master_recording_id}.format (.json or .xml)</dd>
								</dl>
								<p>Update an existing master recording, and reprocess it.</p>
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
									      <td>master_recording_id</td>
									      <td>The url must contain the id of the master recording you wanting to delete.  You should have received this when you created the master recording. <strong>* Required</strong></td>
									    </tr>
									    <tr>
									      <td>title</td>
									      <td>The title for the final master recording.</td>
									    </tr>
											<tr>
									      <td>language</td>
									      <td>The language of the new master recording.</td>
									    </tr>
											<tr>
									      <td>final_filename</td>
									      <td>The name of the final file.</td>
									    </tr>
									      <td>_method=PUT</td>
									      <td>Tell the server to use the HTTP request protocol UPDATE. <strong>* Required</strong></td>
									    </tr>
									  </tbody>
								</table>
								<h3>Response (JSON)</h3>
								<p>POST /master_recordings/{master_recording_id}.json</p>
<pre>
{
    "vts": {
        "status": "success",
        "message": "Your master recording has been modified.",
        "master_recording": {
            "id": "11",
            "translation_request_id": "7",
            "title": "New Title",
            "language": "English",
            "final_filename": "my_file",
            "status": "PENDING",
            "modified": "2012-08-27 10:26:04",
            "created": "2012-08-27 10:16:37",
            "completed": "2012-08-27 10:16:37"
        }
    }
}
</pre>
								<h3>Response (XML)</h3>
								<p>/master_recordings/{master_recording_id}.xml</p>
<pre>
&lt;?xml version="1.0" encoding="UTF-8" ?&gt;
&lt;vts&gt;
    &lt;status&gt;success&lt;/status&gt;
    &lt;message&gt;Your master recording has been modified.&lt;/message&gt;
    &lt;master_recording&gt;
        &lt;id&gt;11&lt;/id&gt;
        &lt;translation_request_id&gt;7&lt;/translation_request_id&gt;
        &lt;title&gt;New Title&lt;/title&gt;
        &lt;language&gt;English&lt;/language&gt;
        &lt;final_filename&gt;my_file&lt;/final_filename&gt;
        &lt;status&gt;PENDING&lt;/status&gt;
        &lt;modified&gt;2012-08-27 10:27:09&lt;/modified&gt;
        &lt;created&gt;2012-08-27 10:16:37&lt;/created&gt;
        &lt;completed&gt;2012-08-27 10:26:05&lt;/completed&gt;
    &lt;/master_recording&gt;
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