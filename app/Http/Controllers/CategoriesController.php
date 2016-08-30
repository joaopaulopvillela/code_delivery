<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests\AdminCategorieRequest;
use CodeDelivery\Repositories\CategoryRepository;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    /**
     * @var CategoryRepository
     */
    private $repository;


    /**
     * CategoriesController constructor.
     * @param CategoryRepository $repository
     */
    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {

        $categories = $this->repository->paginate();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {

        return view('admin.categories.create');
    }

    public function edit($id)
    {

        $category = $this->repository->find($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function store(AdminCategorieRequest $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('admin.categories.index');
    }

    public function update(AdminCategorieRequest $request, $id)
    {

        $this->repository->update($request->all(), $id);

        return redirect()->route('admin.categories.index');
    }
}
