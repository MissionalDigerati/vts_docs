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
$mimeTypeDefinition = "a two-part identifier for file formats on the Internet.<br><br>ex. audio/mpeg<br><br><a href='http://en.wikipedia.org/wiki/Internet_media_type' target='_blank'>- Wikipedia</a>";
$curlDefinition = "a computer software project providing a library and command-line tool for transferring data using various protocols.<br><br><a href='http://en.wikipedia.org/wiki/CURL' target='_blank'>- Wikipedia</a>";
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
								<a class="btn btn-primary" href="https://github.com/MissionalDigerati/vts_cakephp_plugin/tags" target="_blank"><i class="icon-download-alt icon-white"></i> Download on Github</a>
							</div>
							<div class="clearfix"></div>
							<section id="description">
									<p>If you have read the <a href="/preparing_your_video" title="Preparing Your Video Section">Preparing Your Video</a> section on this website,  you will know that every video is dissected into smaller clips.  A clip is a smaller piece of video that will need to be merged with an audio file that you provide.  This audio file is the translation for the clip.  Once all clips have been submitted,  you will need to poll the <a href="#read_all">clips read all</a> to see if all of the clips were processed.  The server will respond with a variable <strong>ready_for_processing</strong>.  If it is set to <strong>YES</strong>,  then you are ready to process the final master recording.  Please visit the <a href="/docs/v1/api/workflow" title="Workflow Documentation">workflow</a> page for more details.</p>
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
									      <td>The absolute path to the local audio file.  mp3, wav, and caf files are accepted. <strong>* Required</strong></td>
									    </tr>
											<tr>
									      <td>mime_type</td>
									      <td>The <a href="" rel="popover" class="popover_link" data-content="<?php echo $mimeTypeDefinition; ?>" data-original-title="Mime Type">mime type</a> of the audio file. <strong>* Required</strong></td>
									    </tr>
											<tr>
									      <td>order_by</td>
									      <td>The position of this clip in the master recording. <strong>* Required</strong></td>
									    </tr>
									  </tbody>
								</table>
								<h3>Requirements</h3>
								<p>In order to create a new clip,  you will need to:</p>
								<ol>
									 <li>
										Encrypt your form with <strong>"multipart/form-data"</strong>.  If you are using the <a href="http://book.cakephp.org/2.0/en/core-libraries/helpers/form.html" target="_blank" title="CakePHP FormHelper Documentation">CakePHP FormHelper</a>,  you can set the type of the form equal to <em>file</em> like this:
										<div>
											<pre>&lt;?php echo $this->Form->create('YOUR_CONTROLLERS_MAIN_MODEL', array('type' => 'file')); ?&gt;</pre>
										</div>
										<em>Please change YOUR_CONTROLLERS_MAIN_MODEL to the main model for the current controller.</em>
									</li>
									<li>
										You will also need to add functionality to upload the file to the server, and to read the file's <a href="" rel="popover" class="popover_link" data-content="<?php echo $mimeTypeDefinition; ?>" data-original-title="Mime Type">mime type</a>. You can use a CakePHP plugin like <a href="http://milesj.me/code/cakephp/uploader" target="_blank">Miles Johnson's Uploader</a>.  I am using this plugin in the examples below.
									</li>
								</ol>
								<h3>Example Code</h3>
<div>
<pre>
// Reset model state
$this->Clip->create();
// upload file
if ($data = $this->Uploader->upload('audio_file')) {
	// the file was uploaded
	// remove the leading directory seperator
	$localFilePath = WWW_ROOT.substr($data['path'], 1);
	$mimeType = $this->Uploader->mimeType($localFilePath);
	// set the mime type
	// TranslationClip is the main model for my TranslationClipsController
	$this->request->data['TranslationClip']['mime_type'] = $mimeType;
	// set the absolute path to file
	$this->request->data['TranslationClip']['audio_file'] = $localFilePath;
	// Trigger CakePHP's save() method
	if($this->Clip->save($this->request->data['TranslationClip'])) {
		//The Clip has saved correctly
	}else {
		//There was a problem with the saving of the Clip
	}
}else {
	throw new CakeException(__('Unable to upload the clip.'));
}
</pre>
</div>
								<h3>Walkthrough Code</h3>
								<p>Now you can setup the controller/model to create the clip.</p>
								<ol>
									<li>Setup <a href="/docs/v1/cakephp_plugin/accessing_models" title="Documentation on How to Access the Plugin Models">access to the plugin model "Clip"</a>.  In this case,  I am using the <code>$uses</code> attribute in the controller.</li>
									<li>Reset the model state for saving the new information using <a href="http://book.cakephp.org/2.0/en/models/saving-your-data.html#model-create-array-data-array" target="_blank" title="CakePHP Documentation on Create Method">CakePHP's create method</a>.
										<div>
											<pre>$this->Clip->create();</pre>
										</div>
									</li>
									<li>Upload your audio file to the server.  Using <a href="http://milesj.me/code/cakephp/uploader" target="_blank">Miles Johnson's Uploader</a> plugin,  you can use this bit of code to manually upload the file:
										<div>
<pre>
if ($data = $this->Uploader->upload('audio_file')) {
	// the file was uploaded
}else {
	throw new CakeException(__('Unable to upload the clip.'));
}
</pre>
										</div>
										<em>Please note that the audio file input is titled "audio_file"</em>
									</li>
									<li>
										Now retrieve the <a href="" rel="popover" class="popover_link" data-content="<?php echo $mimeTypeDefinition; ?>" data-original-title="Mime Type">mime type</a> of the file, and save it to your <code>$this->request->data</code> array.  Using <a href="http://milesj.me/code/cakephp/uploader" target="_blank">Miles Johnson's Uploader</a> plugin,  you can use this bit of code to get the <a href="" rel="popover" class="popover_link" data-content="<?php echo $mimeTypeDefinition; ?>" data-original-title="Mime Type">mime type</a>:
										<div>
<pre>
// remove the leading directory seperator
$localFilePath = WWW_ROOT.substr($data['path'], 1);
$mimeType = $this->Uploader->mimeType($localFilePath);
$this->request->data['YOUR_CONTROLLERS_MAIN_MODEL']['mime_type'] = $mimeType;
</pre>
										</div>
										<em>Please change YOUR_CONTROLLERS_MAIN_MODEL to the main model for the current controller.</em>
									</li>
									<li>
										Now that the file has been uploaded,  you should set the <em>audio_file</em> in your <code>$this->request->data</code> array to the <strong>absolute path</strong> on your server.  The data source uses <a href="" rel="popover" class="popover_link" data-content="<?php echo $curlDefinition; ?>" data-original-title="cURL">cURL</a> to upload the file to the API, and requires the <strong>absolute path</strong>.  You can set it like this:
										<div>
											<pre>$this->request->data['YOUR_CONTROLLERS_MAIN_MODEL']['audio_file'] = $localFilePath;</pre>
										</div>
										<em>Please change YOUR_CONTROLLERS_MAIN_MODEL to the main model for the current controller.</em>
									</li>
									<li>Call <a href="http://book.cakephp.org/2.0/en/models/saving-your-data.html#model-save-array-data-null-boolean-validate-true-array-fieldlist-array" target="_blank" title="CakePHP Documentation on Save Method">CakePHP's save method</a> on the model object, and pass the <code>$this->request->data</code> as its first parameter:
										<div>
											<pre>$this->Clip->save($this->request->data['YOUR_CONTROLLERS_MAIN_MODEL']);</pre>
										</div>
										<em>Please change YOUR_CONTROLLERS_MAIN_MODEL to the main model for the current controller.</em><br><br>
										Since the save method returns a boolean value,  it is best to wrap the save method in an <code>if...else</code> clause to verify the save was completed.  Here is an example of the <code>if...else</code> clause.
										<div>
<pre>
if($this->Clip->save($this->request->data['YOUR_CONTROLLERS_MAIN_MODEL'])) {
	// The Clip has saved correctly
}else {
	// There was a problem with the saving of the Clip
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
								<p>Delete an existing clip.</p>
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
												<td>The unique identifier for the clip. <strong>* Required</strong></td>
									    </tr>
									    <tr>
									      <td>translation_request_token</td>
									      <td>The token associated with the translation request.  It cannot be expired. <strong>* Required</strong></td>
									    </tr>
									  </tbody>
								</table>
								<h3>Example Code</h3>
								<div>
<pre>
// Set the Clip.id for the clip to be deleted
$this->Clip->id = 1;
// Set the translation request token
$this->Clip->translation_request_token = 'tr0dc613163e045312e922dad9d';
// Trigger the CakePHP delete() method
if($this->Clip->delete()) {
	//The Clip has deleted correctly
}else {
	//There was a problem with the deleting of the Clip
}
</pre>
								</div>
								<h3>Walkthrough Code</h3>
								<p>To delete an existing clip,  you will need to:</p>
								<ol>
									<li>Setup <a href="/docs/v1/cakephp_plugin/accessing_models" title="Documentation on How to Access the Plugin Models">access to the plugin model "Clip"</a>.  In this case,  I am using the <code>$uses</code> attribute in the controller.</li>
									<li>Set the id attribute for the clip you wish to delete on the Clip object.
										<div>
											<pre>$this->Clip->id = 1;</pre>
										</div>
									</li>
									<li>Set the translation request token attribute for the clip.
										<div>
											<pre>$this->Clip->translation_request_token = 'tr0dc613163e045312e922dad9d';</pre>
										</div>
									</li>
									<li>Call <a href="http://book.cakephp.org/2.0/en/models/deleting-data.html#model-delete" target="_blank" title="CakePHP Documentation on Delete Method">CakePHP's delete method</a> on the model object:
										<div>
											<pre>$this->Clip->delete();</pre>
										</div>
										Since the save method returns a boolean value,  it is best to wrap the delete method in an <code>if...else</code> clause to verify the delete was completed.  Here is an example of the <code>if...else</code> clause.
										<div>
<pre>
if($this->Clip->delete()) {
	//The Clip has deleted correctly
}else {
	//There was a problem with the deleting of the Clip
}
</pre>
										</div>
									</li>
								</ol>
							</section>
							<section id="read">
								<div class="page-header">
									<h2>Read</h2>
								</div>
								<p>Get detailed information about an existing clip.</p>
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
												<td>The unique identifier for the clip. <strong>* Required</strong></td>
									    </tr>
									    <tr>
									      <td>translation_request_token</td>
									      <td>The token associated with the translation request.  It cannot be expired. <strong>* Required</strong></td>
									    </tr>
									  </tbody>
								</table>
								<h3>Example Code</h3>
								<div>
<pre>
// Add the translation request token to the conditions array
$conditions = array(
	'translation_request_token'	=> 'tr0dc613163e045312e922dad9d'
);
// Set the id of the Clip that you want to retrieve data for
$this->Clip->id = 1;
// Trigger the CakePHP's find method
$clip = $this->Clip->find('first', array('conditions' => $conditions));
</pre>
								</div>
								<h3>Walkthrough Code</h3>
								<p>To read an existing clip,  you will need to:</p>
								<ol>
									<li>Setup <a href="/docs/v1/cakephp_plugin/accessing_models" title="Documentation on How to Access the Plugin Models">access to the plugin model "Clip"</a>.  In this case,  I am using the <code>$uses</code> attribute in the controller.</li>
									<li>Set the translation request token attribute for the clip in a conditions array.
										<div>
<pre>
$conditions = array(
	'translation_request_token'	=> 'tr0dc613163e045312e922dad9d'
);
</pre>
										</div>
									</li>
									<li>Set the id attribute for the clip you wish to get details about on the Clip object.
										<div>
											<pre>$this->Clip->id = 1;</pre>
										</div>
									</li>
									<li>Call <a href="http://book.cakephp.org/2.0/en/models/retrieving-your-data.html#model-find-first" target="_blank" title="CakePHP Documentation on Read Method">CakePHP's find('first') method</a> on the model object, and pass in the conditions array:
										<div>
											<pre>$clip = $this->Clip->find('first', array('conditions' => $conditions));</pre>
										</div>
									</li>
								</ol>
								<p>The returned array will look like this:</p>
								<div>
<pre>
array('Clip' => array( 
	'id' => '2', 
	'translation_request_id' => '1', 
	'audio_file_location' => '/files/clips/a0bd7aa04c3776afeb0137bfe3ad5c.mp3', 
	'video_file_location' => '/files/master_files/example/the_compassionate_father.mp4', 
	'completed_file_location' => '/files/clips/completed/2_998d5e52044241087470.mp4', 
	'order_by' => '1', 
	'status' => 'COMPLETE', 
	'created' => '2012-08-27 12:57:52', 
	'modified' => '2012-08-27 12:57:52', 
	'completed' => '2012-08-27 13:40:22' 
	)
);
</pre>
								</div>
							</section>
							<section id="read_all">
								<div class="page-header">
									<h2>Read All</h2>
								</div>
								<p>Get detailed information about all clips associated with a translation request token.</p>
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
								<h3>Example Code</h3>
								<div>
<pre>
// Add the translation request token to the conditions array
$conditions = array(
	'translation_request_token'	=> 'tr0dc613163e045312e922dad9d'
);
// Trigger the CakePHP's find method
$clip = $this->Clip->find('all', array('conditions' => $conditions));
</pre>
								</div>
								<h3>Walkthrough Code</h3>
								<p>To read all clips associated with a translation request token,  you will need to:</p>
								<ol>
									<li>Setup <a href="/docs/v1/cakephp_plugin/accessing_models" title="Documentation on How to Access the Plugin Models">access to the plugin model "Clip"</a>.  In this case,  I am using the <code>$uses</code> attribute in the controller.</li>
									<li>Set the translation request token attribute in a conditions array.
										<div>
<pre>
$conditions = array(
	'translation_request_token'	=> 'tr0dc613163e045312e922dad9d'
);
</pre>
										</div>
									</li>
									<li>Call <a href="http://book.cakephp.org/2.0/en/models/retrieving-your-data.html#model-find-all" target="_blank" title="CakePHP Documentation on Read Method">CakePHP's find('all') method</a> on the model object, and pass in the conditions array:
										<div>
											<pre>$clips = $this->Clip->find('all', array('conditions' => $conditions));</pre>
										</div>
									</li>
								</ol>
								<p>The returned array will look like this:</p>
								<div>
<pre>
array('Clips' => array( 
	'0' => array( 
		'id' => '18', 
		'translation_request_id' => '3',
		'audio_file_location' => '/files/clips/b366c28e7a82d28aef656418a23c28.mp3', 
		'video_file_location' => '/files/master_files/example/compass_father.mp4',
		'completed_file_location' => '/files/clips/completed/18_14f07a7470c92f3.mp4',
		'order_by' => '1',
		'status' => 'COMPLETE',
		'created' => '2012-09-10 14:39:40',
		'modified' => '2012-09-10 14:39:41',
		'completed' => '2012-09-10 14:40:37'
	),
		'1' => array('id' => '19',
		'translation_request_id' => '3',
		'audio_file_location' => '/files/clips/214efcef091e2c2bee4dd9bc3dc826.mp3',
		'video_file_location' => '/files/master_files/example/compass_father.mp4',
		'completed_file_location' => '/files/clips/completed/19_729c97387f37e55.mp4',
		'order_by' => '2',
		'status' => 'COMPLETE',
		'created' => '2012-09-10 15:09:04',
		'modified' => '2012-09-10 15:09:05',
		'completed' => '2012-09-10 15:09:56 
	)
), 
'Translation' => array('ready_for_processing' => 'YES)
);
</pre>
								</div>
							</section>
							<section id="update">
								<div class="page-header">
									<h2>Update</h2>
								</div>

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