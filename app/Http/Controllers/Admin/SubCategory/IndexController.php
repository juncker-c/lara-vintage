<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\SubCategory;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(SubCategory $subCategory): View
    {
        return view('admin/views/sub-category/index', ['subCategories' => $subCategory::all()]);
    }
}
