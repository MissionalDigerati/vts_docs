<?php
/**
 * This file is part of Missional Digerati Website.
 * 
 * Missional Digerati Website is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Missional Digerati Website is distributed in the hope that it will be useful,
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
/**
 * Basic settings for this web app
 *
 * @author Johnathan Pulos
 */
/**
 * The email settings for the website
 *
 * @var array
 * @author Johnathan Pulos
 */
$emailSettings = array(
												'submit_idea' => 
													array(	'to'=> 'email@yahoo.com', 
																	'from' => 'email@yahoo.com', 
																	'from_name' => 'Missional Digerati Website'
															),
												'contact_us' => 
													array(	'to'=> 'email@yahoo.com', 
																	'from' => 'email@yahoo.com', 
																	'from_name' => 'Missional Digerati Website'
															),
												'volunteer' => 
													array(	'to'=> 'email@yahoo.com', 
																	'from' => 'email@yahoo.com', 
																	'from_name' => 'Missional Digerati Website'
															)
												);
?>