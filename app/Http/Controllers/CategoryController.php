<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(Request $request)
    {
        $categories = $this->categoryService->getAllCategories();
        return Inertia::render('Categories/Index', [
            'categories' => CategoryResource::collection($categories)->toArray($request),
        ]);
    }

    public function show($id)
    {
        $category = $this->categoryService->getCategoryById($id);
        return Inertia::render('Categories/Show', [
            'category' => new CategoryResource($category)
        ]);
    }

    public function store(Request $request)
    {
        $category = $this->categoryService->createCategory($request->all());
        return new CategoryResource($category);
    }

    public function update(Request $request, $id)
    {
        $category = $this->categoryService->updateCategory($id, $request->all());
        return new CategoryResource($category);
    }

    public function destroy($id)
    {
        $this->categoryService->deleteCategory($id);
        return response()->json(['message' => 'Category deleted successfully']);
    }
}
