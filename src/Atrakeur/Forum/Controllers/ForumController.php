<?php namespace Atrakeur\Forum\Controllers;

use \Atrakeur\Forum\Models\ForumCategory;

abstract class ForumController extends \Controller {

	public function index()
	{
		$categories = ForumCategory::whereTopLevel()->with('subcategories')->get();

		return \View::make('forum::index', compact('categories'));
	}

}