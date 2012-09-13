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
								<a class="btn btn-primary" href="https://github.com/MissionalDigerati/vts_cakephp_plugin/tags" target="_blank"><i class="icon-download-alt icon-white"></i> Download on Github</a>
							</div>
							<div class="clearfix"></div>
							<section id="description">
									<p>A master recording is a video that is made up of multiple clips.  Once you have added all your clips, and the video translator service API has completed the clip processing,  you can request for a master recording to be created.  This recording will contain all your clips in ascending order based on the clip's order_by attribute.  Please remember that the server will need to respond with the variable <strong>ready_for_processing</strong> equal to<strong>YES</strong> on the <a href="l/docs/v1/cakephp_plugin/clips#read_all">Clips Read All</a> method,  if you want to request the processing of a master recording.  Please visit the <a href="/docs/v1/api/workflow" title="Workflow Documentation">workflow</a> page for more details.</p>
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
									      <td>Their was an error in the processing of the master recording.  Check the log file on the API server located at <code>tmp/logs/processor.log</code> for more information.</td>
									    </tr>
									  </tbody>
								</table>
							</section>
							<section id="create">
								<div class="page-header">
									<h2>Create</h2>
								</div>
								<p>Create a new master recording, and trigger the process of merging all clips associated with the translation request token ordered by Clip.order_by field.</p>

								<h3>Example Code</h3>
								<div>
<pre>
// Reset model state
$this->MasterRecording->create();
// Trigger CakePHP's save() method
if($this->MasterRecording->save($this->request->data['Translation'])) {
	//The MasterRecording has saved correctly
}else {
	//There was a problem with the saving of the MasterRecording
}
</pre>
								</div>
								<h3>Walkthrough Code</h3>
								<p>To create a new master recording,  you will need to:</p>
								<ol>
									<li>Setup <a href="/docs/v1/cakephp_plugin/accessing_models" title="Documentation on How to Access the Plugin Models">access to the plugin model "MasterRecording"</a>.  In this case,  I am using the <code>$uses</code> attribute in the controller.</li>
									<li>Reset the model state for saving the new information using <a href="http://book.cakephp.org/2.0/en/models/saving-your-data.html#model-create-array-data-array" target="_blank" title="CakePHP Documentation on Create Method">CakePHP's create method</a>.
										<div>
											<pre>$this->MasterRecording->create();</pre>
										</div>
									</li>
									<li>Call <a href="http://book.cakephp.org/2.0/en/models/saving-your-data.html#model-save-array-data-null-boolean-validate-true-array-fieldlist-array" target="_blank" title="CakePHP Documentation on Save Method">CakePHP's save method</a> on the model object, and pass the <code>$this->request->data</code> as its first parameter:
										<div>
											<pre>$this->MasterRecording->save($this->request->data['YOUR_CONTROLLERS_MAIN_MODEL']);</pre>
										</div>
										<em>Please change YOUR_CONTROLLERS_MAIN_MODEL to the main model for the current controller.</em><br><br>
										Since the save method returns a boolean value,  it is best to wrap the save method in an <code>if...else</code> clause to verify the save was completed.  Here is an example of the <code>if...else</code> clause.
										<div>
<pre>
if($this->MasterRecording->save($this->request->data['YOUR_CONTROLLERS_MAIN_MODEL'])) {
	// The MasterRecording has saved correctly
}else {
	// There was a problem with the saving of the MasterRecording
}
</pre>
										</div>
									</li>
								</ol>	
							</section>
							<section id="delete">
								<div class="page-header">
									<h2>Delete</h2>
								</div>
								<p>Delete an existing master recording.</p>
								
								<h3>Example Code</h3>
								<div>
<pre>
</pre>
								</div>
								<h3>Walkthrough Code</h3>
								<p>To delete an existing master recording,  you will need to:</p>
								<ol>
									<li>Setup <a href="/docs/v1/cakephp_plugin/accessing_models" title="Documentation on How to Access the Plugin Models">access to the plugin model "TranslationRequest"</a>.  In this case,  I am using the <code>$uses</code> attribute in the controller.</li>
								</ol>
							</section>
							<section id="read">
								<div class="page-header">
									<h2>Read</h2>
								</div>
								<p>Get information about an existing master recording.</p>
								<h3>Example Code</h3>
								<div>
									<pre></pre>
								</div>
								<h3>Walkthrough Code</h3>
								<p>To get information about an existing master recording,  you will need to:</p>
								<ol>
									<li>Setup <a href="/docs/v1/cakephp_plugin/accessing_models" title="Documentation on How to Access the Plugin Models">access to the plugin model "TranslationRequest"</a>.  In this case,  I am using the <code>$uses</code> attribute in the controller.</li>
								</ol>
								<p>The returned array will look like this:</p>
								<div>
<pre>
</pre>
								</div>
							</section>
							<section id="update">
								<div class="page-header">
									<h2>Update</h2>
								</div>
								<p>Update an existing master recording, and trigger the process of merging all clips associated with the translation request token ordered by Clip.order_by field.</p>

								<h3>Example Code</h3>
								<div>
<pre>
</pre>
								</div>
								<h3>Walkthrough Code</h3>
								<p>To update an existing master recording,  you will need to:</p>
								<ol>
									<li>Setup <a href="/docs/v1/cakephp_plugin/accessing_models" title="Documentation on How to Access the Plugin Models">access to the plugin model "MasterRecording"</a>.  In this case,  I am using the <code>$uses</code> attribute in the controller.</li>
								</ol>	
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