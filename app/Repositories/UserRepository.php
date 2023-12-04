<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    public function all($orderBy = 'created_at_desc', $limit = 10)
    {
        $users = User::query();
        switch ($orderBy) {
            case 'created_at_desc':
                $users = $users->latest();
                break;
            case 'created_at':
                $users = $users->orderBy('created_at');
                break;
        }
        $users = $users->paginate($limit);
        return $users;
    }

    public function store($data)
    {
        return User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'mobile' => $data['mobile'],
            'email' => $data['email'] ?? null,
            'password' => Hash::make($data['password']),
        ]);
    }
}
