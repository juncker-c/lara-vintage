<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

final class CreateController extends Controller
{
    public function __invoke(): View
    {
        return view('admin/views/category/create');
    }
}
