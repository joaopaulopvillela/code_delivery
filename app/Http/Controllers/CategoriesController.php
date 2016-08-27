<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Repositories\CategoryRepository;
use Illuminate\Http\Request;

use CodeDelivery\Http\Requests;

class CategoriesController extends Controller
{


    /**
     * CategoriesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(CategoryRepository $repository){

        $categories = $repository->paginate(5);

        return view('admin.categories.index', compact('categories'));
    }

    public function create(){

        return view('admin.categories.create');
    }
}
