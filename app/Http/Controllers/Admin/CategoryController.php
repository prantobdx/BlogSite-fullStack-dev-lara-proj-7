<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $category;

    public function addCategory()
    {
        return view( 'admin.category.add' );
    }

    public function newCategory( Request $request )
    {
        Category::saveCategory( $request );
        return redirect()->back()->with( 'message', 'Category created sucessfully' );
    }

    public function manageCategory()
    {
        return view( 'admin.category.manage', [
            'categories' => Category::all(),
        ] );
    }

    public function editCategory( $id )
    {

        return view( 'admin.category.edit', [
            'category' => Category::findOrFail( $id ),
        ] );
    }

    public function updateCategory( Request $request )
    {
        Category::updateCategory( $request );
        return redirect( '/manage-category' )->with( 'message', 'Product Update Sucessfully' );
    }

    public function deleteCategory( $categoryId )
    {
        $this->category = Category::findOrFail( $categoryId );

        if ( file_exists( $this->category->category_image ) )
        {
            unlink( $this->category->category_image );
        }
        $this->category->delete();
        return redirect()->back()->with( 'message', 'Product delete sucessfully' );
    }
}