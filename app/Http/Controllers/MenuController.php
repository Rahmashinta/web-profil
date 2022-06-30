<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\MenuRequest;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.menu', [
            'menu' => Menu::orderBy('created_at', 'desc')->get(),
            'navbar' => User::where('id', Auth::user()->id)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\MenuRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        Menu::create($request->all());

        Alert::success('Berhasil', 'Data Menu Berhasil Ditambah');

        return redirect()->route('menu.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\MenuRequest;  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, $id)
    {
        Menu::find($id)->update($request->all());

        Alert::success('Berhasil', 'Data Menu Berhasil Diubah');

        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        Menu::destroy($menu->id);

        Alert::success('Berhasil', 'Data Menu Berhasil Dihapus');

        return redirect()->route('menu.index');
    }
}
