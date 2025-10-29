<?php

namespace App\Client;

use App\Models\Customer;

class ClientService
{
    public function getClients(){
        $clients = Customer::query();

        return $clients->get();
    }

    public function createClient(array $data){
        return Customer::create($data);
    }

    public function updateClient(Customer $client, array $data){
        $client->update($data);
        return $client;
    }


    public function deleteClient(Customer $client){
        return $client->delete();
    }
    
}
