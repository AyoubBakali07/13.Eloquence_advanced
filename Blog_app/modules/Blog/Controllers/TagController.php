<?php

namespace Modules\Blog\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Models\TagBlog;

class TagController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $query = TagBlog::query();
    if($request->has('search') && $request->search != ''){
      $query->where('name', 'like', '%' . $request->search . '%');
    }

    $tags = $query->paginate(10);
    return view('blog::admin.tag.index', compact('tags'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('blog::admin.tag.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:255',
    ]);

    $tag = new TagBlog();
    $tag->name = $request->name;
    $tag->save();

    return redirect()->route('blog::tags.index')->with('success', 'Le tag a bien été créé');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {

    $tag = TagBlog::findOrFail($id);
    $tag->delete();

    return redirect()->route('blog::tags.index')->with('success', 'Le tag a bien été supprimé');
  }
}
