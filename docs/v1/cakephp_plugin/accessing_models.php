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
			$title = "Accessing the Models";
			require_once('../../../partials/site_wide_css.inc.php'); 
		?>
	</head>
	<body>
	  <?php 
			$taglineHeader = 'Accessing the Models';
			$taglineText = 'Modeling simplicity.';
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
							<div class="pull-right">
								<a class="btn btn-primary" href="https://github.com/MissionalDigerati/vts_cakephp_plugin/tags" target="_blank"><i class="icon-download-alt icon-white"></i> Download on Github</a>
							</div>
							<div class="clearfix"></div>
							<p>The video translator service CakePHP plugin comes packaged with three models, 1) <a href="/docs/v1/cakephp_plugin/translation_requests" title="Translation Requests Documentation">TranslationRequest</a>, 2) <a href="/docs/v1/cakephp_plugin/clips" title="Clips Documentation">Clip</a>, and 3) <a href="/docs/v1/cakephp_plugin/master_recordings" title="Master Recordings Documentation">MasterRecording</a>.  In order to use any of these models in your CakePHP controllers or models,  you will need import the plugin model into your controller or model class. Here are some ways you can import the plugin model.</p>
							<div class="page-header">
								<h2>App Import Utility</h2>
							</div>
							<p>One way to access the plugin models in your application is to use CakePHP's App class.  This class offers a function called <em>import</em> that will include the model class into your code.  This method can be used in your controllers and models.  At the top of your controller/model, before the class definition, you can add the following code:
							<div>
								<pre>App::import('Model', 'VideoTranslatorService.NameOfPluginModel');</pre>
							</div>
							You will also need to initialize the plugin model class somewhere in your code.  Here is an example of how you can initialize a plugin model class:
							<div>
								<pre>$NameOfPluginModel = new NameOfPluginModel();</pre>
							</div>
							You can now access the model like any other CakePHP model object.  For example,  let us say we want to use the <em>TranslationRequest</em> model in our <em>Translation</em> model.  First,  we need to import the <em>TranslationRequest</em> model by adding the import statement to top of the <em>Translation</em> model.
							<div>
<pre>
&lt;?php
App::import('Model', 'VideoTranslatorService.TranslationRequest');
class Translation extends AppModel {
...
</pre>
							</div>
							Now we must initialize the new model class in our code somewhere.  Let's add a <code>createTranslationRequest</code> function for handling the saving of a <em>TranslationRequest</em>.
							<div>
<pre>
public function createTranslationRequest($data = array()) {
	$TranslationRequest = new TranslationRequest();
}
</pre>
							</div>							
							Now we can access the <a href="/docs/v1/cakephp_plugin/translation_requests" title="Translation Requests Documentation">CakePHP model methods</a> for the <em>TranslationRequest</em>.  For example, if we want to save a new <em>TranslationRequest</em>,  we can call the <code>save()</code> method on the <em>TranslationRequest</em> object like this:
							<div>
<pre>
public function createTranslationRequest($data = array()) {
	$TranslationRequest = new TranslationRequest();
	return $TranslationRequest->save($data);
}
</pre>
							</div>
							If you would like to find out more about cakePHP's <code>App::import</code> utility,  check out the <a href="http://book.cakephp.org/2.0/en/core-utility-libraries/app.html#including-files-with-app-import" target="_blank">CakePHP Documentation</a>.
							</p>
							<div class="page-header">
								<h2>Controller's $uses Attribute</h2>
							</div>
							<p>To access the plugin model in a CakePHP Controller,  you can use the <code>$uses</code> attribute of the controller.  You can add this attribute with the following code:
							<div>
								<pre>public $uses = array('VideoTranslatorService.NameOfPluginModel', 'YourModel');</pre>
							</div>
							If you are using other models for the controller,  they will also need to be added to the array.  You can now access the model like any other CakePHP model object.  For example,  let us say we want to use the <em>TranslationRequest</em> model in our <em>Translations</em> Controller.  We would add the <code>$uses</code> attribute to the Translations controller, which should look something like this:
							<div>
<pre>
&lt;?php
App::uses('AppController', 'Controller');
class TranslationsController extends AppController {
	public $uses = array('VideoTranslatorService.TranslationRequest', 'Translation');
...
</pre>
							</div>
							Now we can access the <a href="/docs/v1/cakephp_plugin/translation_requests" title="Translation Requests Documentation">CakePHP model methods</a> for the <em>TranslationRequest</em>.  For example, if we want to save a new <em>TranslationRequest</em>,  we can call the <code>save()</code> method on the <em>TranslationRequest</em> object like this:
							<div>
								<pre>$this->TranslationRequest->save(array());</pre>
							</div>
							To find out more about the <code>$uses</code> attribute,  check out the <a href="http://book.cakephp.org/2.0/en/controllers.html#components-helpers-and-uses" target="_blank">CakePHP Documentation</a>.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require_once('../../../partials/site_wide_js.inc.php'); ?>
	</body>
</html>