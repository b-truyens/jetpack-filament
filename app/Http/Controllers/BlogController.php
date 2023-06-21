<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

class BlogController extends Controller
{
    public function index()
    {
        // Fetch all posts, you may want to use pagination for this.
        $posts = PostModel::all();

        // Pass the posts to the view
        return view('blog.index', compact('posts'));
    }
}
