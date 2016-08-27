<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests\AdminCategorieRequest;
use CodeDelivery\Http\Requests\AdminProductRequest;
use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Repositories\ProductRepository;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    /**
     * @var ProductRepository
     */
    private $repository;
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;


    /**
     * ProductsController constructor.
     * @param ProductRepository $repository
     */
    public function __construct(ProductRepository $repository, CategoryRepository $categoryRepository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {

        $products = $this->repository->paginate();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = $this->categoryRepository->lists('name', 'id');

        return view('admin.products.create', compact('categories'));
    }

    public function edit($id)
    {

        $product = $this->repository->find($id);
        $categories = $this->categoryRepository->lists('name', 'id');

        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function store(AdminProductRequest $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('admin.products');
    }

    public function update(AdminProductRequest $request, $id)
    {

        $this->repository->update($request->all(), $id);

        return redirect()->route('admin.products');
    }
}
