<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\UserRepository;
use Illuminate\Http\Request;

use CodeDelivery\Http\Requests;

class OrdersController extends Controller
{
    /**
     * @var OrderRepository
     */
    private $repository;

    /**
     * OrdersController constructor.
     */
    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index()
    {

        $orders = $this->repository->paginate();

        return view('admin.orders.index', compact('orders'));
    }


    public function edit(UserRepository $userRepository, $id)
    {

        $list_status = [0 => 'Aguardando', 1 => 'Em transito', 2 => 'Entregue', 3 => 'Cancelado'];
        $order = $this->repository->find($id);
        $deliveryman = $userRepository->listsDeliveryman();


        return view('admin.orders.edit', compact('order', 'list_status', 'deliveryman'));
    }

    public function update(Request $request, $id)
    {

        $this->repository->update($request->all(), $id);

        return redirect()->route('admin.orders.index');
    }
}
