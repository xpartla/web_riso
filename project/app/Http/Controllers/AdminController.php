<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use App\Models\Sections;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $articles = Article::with('categories')->orderBy('id')->get(); // Order articles by ID
        $sections = Sections::all();
        return view('admin.index', compact('articles', 'categories', 'sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|array',
            'category_id.*' => 'exists:categories,id'
        ]);

        $article = Article::create([
            'name' => $validatedData['name']
        ]);

        if($request->has('category_id')){
            $article->categories()->attach($validatedData['category_id']);
        }

        return redirect()->route('admin.index')->with('success', 'Article created successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function editArticle($id)
    {
        $article = Article::with('categories', 'sections')->findOrFail($id);
        $categories = Category::all();
        $article->sections = $article->sections->sortBy('order');
        return view('admin.articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateArticle(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|array',
            'category_id.*' => 'exists:categories,id',
            'sections' => 'array',
            'sections.*.title' => 'required|string|max:255',
            'sections.*.content' => 'required|string',
            'sections.*.image' => 'nullable|url',
            'sections.*.order' => 'required|integer'
        ]);

        $article->update(['name' => $validatedData['name']]);
        $article->categories()->sync($validatedData['category_id']);

        if (isset($validatedData['sections'])) {
            foreach ($validatedData['sections'] as $sectionId => $sectionData) {
                $section = Sections::findOrFail($sectionId);
                $section->update($sectionData);
            }
        }


        return redirect()->route('admin.index')->with('success', 'Article updated successfully');
    }
    public function addSection(Request $request, $articleId)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|url',
            'order' => 'required|integer'
        ]);

        $article = Article::findOrFail($articleId);
        $article->sections()->create($validatedData);

        return redirect()->back()->with('success', 'Section added successfully');
    }
    public function deleteSection($id)
    {
        $section = Sections::findOrFail($id);
        $section->delete();

        return redirect()->back()->with('success', 'Section deleted successfully');
    }



    /**
     * Show the form for renaming the specified resource.
     */
    public function renameArticle($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.rename', compact('article'));
    }

    /**
     * Update the specified resource's name in storage.
     */
    public function updateRenameArticle(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $article->update(['name' => $validatedData['name']]);

        return redirect()->route('admin.index')->with('success', 'Article renamed successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteArticle($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.index')->with('success', 'Article deleted successfully');
    }

    public function createArticle()
    {
        $categories = Category::all();
        return view('admin.articles.create', compact('categories'));
    }


}
