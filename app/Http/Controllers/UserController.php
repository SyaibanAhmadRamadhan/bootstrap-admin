<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Utils\Primitives\ListPageSize;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $pageSize = $request->query('page_size', ListPageSize::defaultPageSize());
        $searchKeyword = $request->query('search_keyword');

        $users = new User;
        if ($searchKeyword) {
            $users = $users->where(function ($query) use ($searchKeyword) {
                $query->whereRaw('LOWER(name) like ?', ['%' . strtolower($searchKeyword) . '%']);
                $query->orWhereRaw('LOWER(full_name) like ?', ['%' . strtolower($searchKeyword) . '%']);
                $query->orWhereRaw('LOWER(email) like ?', ['%' . strtolower($searchKeyword) . '%']);
                $query->orWhereRaw('LOWER(timezone) like ?', ['%' . strtolower($searchKeyword) . '%']);
                $query->orWhereRaw('LOWER(address) like ?', ['%' . strtolower($searchKeyword) . '%']);
                $query->orWhereRaw('LOWER(phone_number) like ?', ['%' . strtolower($searchKeyword) . '%']);
            });
        }
        $users = $users->paginate($pageSize)->appends($request->query());
        return view('user.index', [
            'title' => 'user',
            'users' => $users
        ]);
    }
}
