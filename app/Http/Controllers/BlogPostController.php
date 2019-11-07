<?php
/**
 * Store the incoming blog post.
 *
 * @param  StoreBlogPost  $request
 * @return Response
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    public function store(StoreBlogPost $request)
    {
        // The incoming request is valid...

        // Retrieve the validated input data...
        $validated = $request->validated();
    }
}
