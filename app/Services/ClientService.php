<?php

namespace CodeDelivery\Services;

use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Repositories\UserRepository;

class ClientService
{
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var ClientRepository
     */
    private $clientRepository;


    /**
     * Client constructor.
     */
    public function __construct(ClientRepository $clientRepository, UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->clientRepository = $clientRepository;
    }

    public function update(array $data, $id)
    {
        $this->clientRepository->update($data, $id);

        $userId = $this->clientRepository->find($id, ['user_id'])->user_id;

        $this->userRepository->update($data['user'], $userId);

    }

    public function create(array $data)
    {
        $data['user']['password'] = bcrypt(str_random(10));
        $user = $this->userRepository->create($data['user']);

        $data['user_id'] = $user->id;

        return $this->clientRepository->create($data);
    }
}