<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

final class StoreController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $category = Category::create([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
        ]);

        return redirect()->route('admin.category.index')->with('success', 'La catégorie: ' . $category->name . " a bien été ajouté");
    }
}
