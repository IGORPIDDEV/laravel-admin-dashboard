<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function getAllCategories()
    {
        return Category::root()->with('children')->get();
    }

    public function getCategoryById($id)
    {
        $category = Category::with('children')->findOrFail($id);
        $category->incrementViews();
        return $category;
    }

    public function createCategory($data)
    {
        $parent = Category::find($data['parent_id']);
        $newCategory = new Category($data);

        if ($parent) {
            $newCategory->left = $parent->right;
            $newCategory->right = $parent->right + 1;
            $newCategory->depth = $parent->depth + 1;
            $newCategory->parent_id = $parent->id;

            $this->shiftRightValues($parent->right);
        } else {
            $newCategory->left = 1;
            $newCategory->right = 2;
            $newCategory->depth = 0;
        }

        $newCategory->save();
        return $newCategory;
    }

    public function updateCategory($id, $data)
    {
        $category = Category::findOrFail($id);
        $category->update($data);
        return $category;
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $this->shiftLeftValues($category->right);
        $category->delete();
    }

    private function shiftRightValues($value)
    {
        Category::where('right', '>=', $value)->increment('right', 2);
        Category::where('left', '>', $value)->increment('left', 2);
    }

    private function shiftLeftValues($value)
    {
        Category::where('right', '>', $value)->decrement('right', 2);
        Category::where('left', '>', $value)->decrement('left', 2);
    }
}
