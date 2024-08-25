<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Grammer;
use Illuminate\Http\Request;
use App\Http\Requests\FoodRequest;

class FoodController extends Controller
{
    public function index()
    {
        $grammer = Grammer::get();
        return view('admin.food.index', [
            'grammer' => $grammer,
        ]);
    }

    public function create()
    {
        return view('admin.food.create');
    }

    public function store(FoodRequest $request)
    {
        $grammer = new Grammer;
        $grammer->title = $request->title;
        $grammer->save();
        return redirect()->route('food.index');
    }
}
