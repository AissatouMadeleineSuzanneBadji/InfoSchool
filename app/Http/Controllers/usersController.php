<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($n, $role)
    {
        if($role != 'total') {
            return $this->model
                ->with('role')
                ->whereHas('role', function ($q) use ($role) {
                    $q->whereSlug($role);
                })
                ->oldest('seen')
                ->latest()
                ->paginate($n);
        }
        return $this->indexSort('total');
    }

    /**
     * Display a listing of the resource.
     *
     * @param string $role
     * @return Response
     */
    public function indexSort($role)
    {
        $counts = $this->user_gestion->counts();
        $users = $this->user_gestion->index(4, $role);
        $links = $users->setPath('')->render();
        $roles = $this->role_gestion->all();
        return view('back.users.index', compact('users', 'links', 'counts', 'roles'));
    }

}
