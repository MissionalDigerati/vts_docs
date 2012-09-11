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
			$title = "Translation Requests";
			require_once('../../../partials/site_wide_css.inc.php'); 
		?>
	</head>
	<body data-spy="scroll" data-target=".docs-sidebar">
	  <?php 
			$taglineHeader = 'Translation Request';
			$taglineText = 'Handling all your translation needs.';
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
							</ul>
						</div><!-- .span3 -->
						<div class="span8 docs">
							<div class="pull-right">
								<a class="btn btn-primary" href="https://github.com/MissionalDigerati/vts_cakephp_plugin/tags" target="_blank"><i class="icon-download-alt icon-white"></i> Download on Github</a>
							</div>
							<div class="clearfix"></div>
							<section id="description">
									<p>A translation request is a request to begin the translation of a video.  When you make a call to the video translator service API to create a translation request,  the server will return a translation request token.  The token looks similar to an API key, because it is a hashed string of random numbers and letters.  Here is an example of a translation request token: <code>tr0dc613163e045312e922dad9d</code>.  These tokens always start with the letters <strong>tr</strong>.  This token acts as a unique identifier for your request to translate a video, so you will need to pass it into any subsequent requests for clips or master recordings.  The translation request token can expire, if the video translator service API was configured with expiring translation request tokens.</p>
									<h3>Attributes</h3>
									<dl>
										<dt>id</dt>
									  <dd>The unique identifier for the translation request.</dd>
										<dt>api_key_id</dt>
									  <dd>The unique identifier for the API key.</dd>
										<dt>token</dt>
									  <dd>The unique token to be used for any API requests.</dd>
										<dt>created</dt>
									  <dd>The timestamp when the the master recording was created.</dd>
										<dt>modified</dt>
									  <dd>The timestamp when the the master recording was last modified.</dd>
										<dt>expires_at</dt>
									  <dd>The timestamp when the translation request will expire.  It sets to 0000-00-00 00:00:00 if it does not expire.</dd>
									</dl>
							</section>
							<section id="create">
								<div class="page-header">
									<h2>Create</h2>
								</div>
								<p>Create a new translation request, and receive a translation request token.</p>
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
									      <td colspan="2">No parameters needed.</td>
									    </tr>
									  </tbody>
								</table>
								<h3>Example Code</h3>
								<div>
<pre>
$this->TranslationRequest->create();
if($this->TranslationRequest->save(array())) {
	//The TranslationRequest has saved correctly
}else {
	//There was a problem with the saving of the TranslationRequest
}
</pre>
								</div>
								<h3>Walkthrough Code</h3>
								<p>To create a new translation request,  you will need to:</p>
								<ol>
									<li>Setup <a href="/docs/v1/cakephp_plugin/accessing_models" title="Documentation on How to Access the Plugin Models">access to the plugin model "TranslationRequest"</a>.  In this case,  I am using the <code>$uses</code> attribute in the controller.</li>
									<li>Reset the model state for saving the new information using <a href="http://book.cakephp.org/2.0/en/models/saving-your-data.html#model-create-array-data-array" target="_blank" title="CakePHP Documentation on Create Method">CakePHP's create method</a>.
										<div>
											<pre>$this->TranslationRequest->create();</pre>
										</div>
									</li>
									<li>Call <a href="http://book.cakephp.org/2.0/en/models/saving-your-data.html#model-save-array-data-null-boolean-validate-true-array-fieldlist-array" target="_blank" title="CakePHP Documentation on Save Method">CakePHP's save method</a> on the model object:
										<div>
											<pre>$this->TranslationRequest->save(array());</pre>
										</div>
										The translation request does not expect any parameters, so you can send an empty array for the first parameter of the save function call.  Since the save method returns a boolean value,  it is best to wrap the save method in an <code>if...else</code> clause to verify the save was completed.  Here is an example of the <code>if...else</code> clause.
										<div>
<pre>
if($this->TranslationRequest->save(array())) {
	//The TranslationRequest has saved correctly
}else {
	//There was a problem with the saving of the TranslationRequest
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
								<p>Delete an existing translation request.</p>
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
												<td>The unique identifier for the translation request. <strong>* Required</strong></td>
									    </tr>
									  </tbody>
								</table>
								<h3>Example Code</h3>
								<div>
<pre>
$this->TranslationRequest->id = 1;
if($this->TranslationRequest->delete()) {
	//The TranslationRequest has deleted correctly
}else {
	//There was a problem with the deleting of the TranslationRequest
}
</pre>
								</div>
								<h3>Walkthrough Code</h3>
								<p>To delete an existing translation request,  you will need to:</p>
								<ol>
									<li>Setup <a href="/docs/v1/cakephp_plugin/accessing_models" title="Documentation on How to Access the Plugin Models">access to the plugin model "TranslationRequest"</a>.  In this case,  I am using the <code>$uses</code> attribute in the controller.</li>
									<li>Set the id attribute for the translation request you wish to delete on the TranslationRequest object.
										<div>
											<pre>$this->TranslationRequest->id = 1;</pre>
										</div>
									</li>
									<li>Call <a href="http://book.cakephp.org/2.0/en/models/deleting-data.html#model-delete" target="_blank" title="CakePHP Documentation on Delete Method">CakePHP's delete method</a> on the model object:
										<div>
											<pre>$this->TranslationRequest->delete();</pre>
										</div>
										Since the save method returns a boolean value,  it is best to wrap the delete method in an <code>if...else</code> clause to verify the delete was completed.  Here is an example of the <code>if...else</code> clause.
										<div>
<pre>
if($this->TranslationRequest->delete()) {
	//The TranslationRequest has deleted correctly
}else {
	//There was a problem with the deleting of the TranslationRequest
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
								<p>Get information about an existing translation request.</p>
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
												<td>The unique identifier for the translation request. <strong>* Required</strong></td>
									    </tr>
									  </tbody>
								</table>
								<h3>Example Code</h3>
								<div>
									<pre>$translationRequest = $this->TranslationRequest->read(null, 5);</pre>
								</div>
								<h3>Walkthrough Code</h3>
								<p>To get information about an existing translation request,  you will need to:</p>
								<ol>
									<li>Setup <a href="/docs/v1/cakephp_plugin/accessing_models" title="Documentation on How to Access the Plugin Models">access to the plugin model "TranslationRequest"</a>.  In this case,  I am using the <code>$uses</code> attribute in the controller.</li>
									<li>Call <a href="http://book.cakephp.org/2.0/en/models/retrieving-your-data.html#model-read" target="_blank" title="CakePHP Documentation on Read Method">CakePHP's read method</a> on the model object:
										<div>
											<pre>$translationRequest = $this->TranslationRequest->read(null, 5);</pre>
										</div>
										The first parameter, which is an array of fields you want to retrieve, should always be set to null.  The plugin always gives back all data for the translation request.  The second parameter is the id for the translation request your getting information for.  The id is required.
									</li>
								</ol>
								<p>The returned array will look like this:</p>
								<div>
<pre>
array('TranslationRequest' => array(
		'id' => '5',
		'api_key_id'	=> '1', 
		'token'		=> 'tr73402779879c1af31fc964e76', 
		'created'	=> '2012-09-11 11:24:38', 
		'modified'	=> '2012-09-11 11:24:38', 
		'expires_at'	=> '0000-00-00 00:00:00'
	) 
);
</pre>
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