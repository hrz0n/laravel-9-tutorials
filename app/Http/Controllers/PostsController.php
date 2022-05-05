<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PostsController extends Controller
{

    public function index(Request $request)
    {
        $post = [];
        if($request->ajax()) {
            $post = Posts::all();
            return DataTables::of($post)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0);" data-id="'.$row->id.'"  class="btn btn-warning btn-sm editPost">Edit</a> ';
                    $btn .= '<a href="javascript:void(0);" data-id="'.$row->id.'" class="btn btn-danger btn-sm deletePost">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('posts.index', compact('post'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);


        Posts::updateOrCreate(
            ['id' => $request->id],
            [
                'title' => $request->title,
                'description' => $request->description
            ]
        );
        return response()->json(['success'=>'Post saved successfully.']);
    }


    public function edit(Request $request)
    {
        $where = [
            'id' => $request->id
        ];
        $post  = Posts::where($where)->first();
        return response()->json($post);

    }


    public function destroy(Request $request)
    {
        $post = Posts::where('id', $request->id)->delete();
        return response()->json([
            'success'=>'Post deleted successfully.'
        ]);
    }
}
