<?php

namespace App\Http\Controllers;

use App\Http\Requests\RolePost;
use App\Models\Role;
use Collective\Html\FormFacade;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    private $user;

    private $assign;

    private $role;

    public function __construct(Role $role){
        $this->middleware(function ($request, $next) {
            $this->user = auth()->user();
            return $next($request);
        });
        $this->role = $role;
        $this->assign = [];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$page_num = $request->input('page_num',15);
        $roles = $this->role->all();
        $this->assign['roles'] = $roles;
        return view('role.index',$this->assign);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,RolePost $rolePost)
    {
        $role = new Role();
        $role->name = trim($request->name);
        $role->display_name = trim($request->display_name);
        $role->description = trim($request->description);
        $role->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = $this->role->find($id);
        $this->assign['role'] = $role;
        return view('role.show',$this->assign);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = $this->role->find($id);
        $this->assign['role'] = $role;
        //dd(FormFacade::open());
        return view('role.edit',$this->assign);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,RolePost $rolePost,$id)
    {
        $role = $this->role->find($id);
        $role->name = trim($request->name);
        $role->display_name = trim($request->display_name);
        $role->description = trim($request->description);
        $role->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
