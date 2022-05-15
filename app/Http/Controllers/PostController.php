<?php

namespace App\Http\Controllers;

use Faker\Factory;
use App\Models\Post;
use App\Enums\PostStatus;
use App\Exports\PostsExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Validation\Rules\Enum;

class PostController extends Controller
{
    /**
     * index
     * @return void
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts', compact('posts'));
    }

    public function create()
    {
        return view('createPost');
    }

    public function show(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        return view('showPost', compact('post'));
    }

    public function edit(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        return view('editPost', compact('post'));
    }

    public function store(Request $request)
    {
        $faker = Factory::create();
        $validated = $this->validate($request, [
            'name' => 'required|string|min:5|max:15',
            'email' => 'required|string|email|unique:posts,email',
            'amount' => 'required|integer|max:9999|min:1',
            'status' => new Enum(PostStatus::class),
        ]);
        $validated['code'] = $faker->unique()->regexify('[A-Z]{5}[0-4]{3}');
        $validated['image'] = 'https://i.pravatar.cc/150?u=' . $validated['name'] . '@pravatar.com';
        $result = Post::create($validated);
        if (!$result) {
            return to_route('posts')->with(['status' => 'error', 'message' => 'Post creation failed.']);
        }
        return to_route('posts')->with(['status' => 'success', 'message' => 'Post created successfully']);
    }

    public function delete(Request $request)
    {
        $result = Post::where('id', $request->post)->delete();
        if (!$result) {
            return to_route('posts')->with(['status' => 'error', 'message' => 'Post deletion failed.']);
        }
        return to_route('posts')->with(['status' => 'success', 'message' => 'Post deleted successfully']);
    }

    /**
     * downloadPdf
     * @param  mixed $request
     * @return void
     */
    public function downloadPdf(Request $request)
    {
        $posts = Post::all();
        $count = Post::sum('amount');
        $pdf = Pdf::loadView('pdf.post', compact('posts', 'count'));
        return $pdf->download('Posts.pdf');
    }

    /**
     * downloadExcel
     * @return void
     */
    public function downloadExcel()
    {
        return (new PostsExport)->download('Posts.xlsx');
    }
}
