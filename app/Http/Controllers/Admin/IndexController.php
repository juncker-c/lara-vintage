<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

final class IndexController extends Controller
{
    function __invoke(): View
    {
        return view('admin/views/index');
    }
}
