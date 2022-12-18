<?php


namespace App\Controllers;

use App\Models\PostModel;

class Home extends BaseController
{
	public function index()
	{
		return view('pages/index');
	}
	public function about()
	{
		return view('pages/about');
	}
	public function contact()
	{
		return view('pages/contact');
	}
	public function blog()
	{
		$sess = session();
		$sess->start();
		$post_model = new PostModel();
		list($categories, $posts) = $post_model->getAllPost('default');
		$data['posts'] = $posts;
		$data['categories'] = $categories;
		// echo view('templates/header');
		// echo view('welcome_message', $data);
		// echo view('templates/footer');
		return view('pages/blog', $data);
	}
	public function blog_single($blog_id = 'default')
	{
		$sess = session();
		$sess->start();
		if (empty($blog_id) || is_null($blog_id) || $blog_id == 'default') {
			return redirect()->route('');
		} else {
			$post_model = new PostModel();
			list($blog, $category) = $post_model->getBlog($blog_id);
			if (is_null($blog) || is_null($category)) {
				throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
			} else {
				$data['blog'] = $blog;
				$data['category'] = $category;
				// dd($data);
				return view('pages/blog_single', $data);
				// echo view('templates/header');
				// echo view('pages/blog_single', $data);
				// echo view('templates/footer');
				// return view('pages/blog-single', $data);
			}
		}
	}
	public function blog_intro()
	{
		$sess = session();
		$sess->start();
		$post_model = new PostModel();
		list($categories, $posts) = $post_model->getAllPost('default');
		$data['posts'] = $posts;
		$data['categories'] = $categories;
		// echo view('templates/header');
		// echo view('welcome_message', $data);
		// echo view('templates/footer');
		return view('pages/blog-intro', $data);
	}
}
