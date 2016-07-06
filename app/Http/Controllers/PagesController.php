<?php
namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller  {
	function __construct() {
		
	}
	function getIndex(){
		$posts=Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages/welcome')->withPosts($posts);
	}
	function getContact(){
		return view('pages/contact');
	}
	function getabout(){
		$first='raj';
		$last='tandukar';
		$full=$first. " ".$last;
		$email='royal_raj@outlook.com';
		$data=[];
		$data['fullname']=$full;
		$data['email']=$email;
		//return view('pages/about')->with('fullname',$full);
		//return view('pages/about')->withFullname($full)->withEmail($email);
		return view('pages/about')->withData($data);
	}
}
