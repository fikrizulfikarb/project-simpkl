<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Dataperusahaan;
use App\Models\SuperAdmin\MasterData\Module;
use App\Models\SuperAdmin\MasterData\Pegawai;
use App\Models\SuperAdmin\MasterData\Role;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_module'] = Module::withCount('role')->get();
        return view('admin.master-data.module.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master-data.module.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $module = new Module;
        $module->name = request('name');
        $module->tag = request('tag');
        $module->app = request('app');
        $module->title = request('title');
        $module->subtitle = request('name');
        $module->color = request('color');
        $module->menu = request('menu');
        $module->url = request('url');
        $module->save();

        return redirect('admin/master-data/module');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        $data['module'] = $module;
        $data['list_pegawai'] = Pegawai::all();
        $data['list_dataperusahaan'] = Dataperusahaan::all();

        return view('admin.master-data.module.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(module $module)
    {
        $data['module'] = $module;
        return view('admin.master-data.module.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(module $module)
    {

        $module->app = request('app');
        $module->name = request('name');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->url = request('url');
        $module->color = request('color');
        $module->tag = request('tag');
        $module->menu = request('menu');
        $module->save();

        return redirect('admin/master-data/module');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect('admin/master-data/module')->with('danger','berhasil di hapus');
    }

    public function addRole()
    {
        $role = new Role;
        $role->id_pegawai = request('id_pegawai');
        $role->id_module = request('id_module');
        $role->save();

        return back();
    }

    public function deleteRole(Role $role)
    {
        $role->delete();

        return back();
    }
}