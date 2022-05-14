<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\PostsExport;
use Illuminate\Http\Request;

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

    public function delete(Request $request)
    {
        $result = Post::where('id', $request->post)->delete();
        if (!$result) {
            return back()->with(['status' => 'error', 'message' => 'Post deletion failed.']);
        }
        return back()->with(['status' => 'success', 'message' => 'Post deleted successfully']);
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
