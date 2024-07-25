<?php

namespace App\Repositories;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserRepositories
{
    public function create(array $datas){
        $datas['password'] = $this->hashPassword($datas['password']);
        $user = User::create($datas);
        return $user;
    }
    public function getAll(){
        
        $users = User::all();
        return $users;
    }
    private function hashPassword($password)
    {
        return Hash::make($password);
    }
}
