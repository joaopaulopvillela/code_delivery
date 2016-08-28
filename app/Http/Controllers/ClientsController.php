<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests\AdminClientRequest;
use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Services\ClientService;
use Illuminate\Http\Request;


class ClientsController extends Controller
{
    /**
     * @var ClientRepository
     */
    private $repository;

    /**
     * @var ClientService
     */
    private $clientService;


    /**
     * ClientsController constructor.
     * @param ClientRepository $repository
     */
    public function __construct(ClientRepository $repository, ClientService $clientService)
    {
        $this->repository = $repository;
        $this->clientService = $clientService;
    }

    public function index()
    {

        $clients = $this->repository->paginate();

        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {

        return view('admin.clients.create');
    }

    public function edit($id)
    {

        $client = $this->repository->find($id);

        return view('admin.clients.edit', compact('client'));
    }

    public function store(AdminClientRequest $request)
    {
        $this->clientService->create($request->all());

        return redirect()->route('admin.clients.index');
    }

    public function update(AdminClientRequest $request, $id)
    {

        $this->clientService->update($request->all(), $id);

        return redirect()->route('admin.clients.index');
    }
}
