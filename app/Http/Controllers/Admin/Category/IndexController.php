<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class IndexController  extends Controller
{
    public function __invoke(Category $category, Request $request): View
    {
        return view('admin/views/category/index', ['categories' => $category::all()]);
    }
}
