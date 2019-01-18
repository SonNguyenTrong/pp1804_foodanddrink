<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Product;
use Auth;
use Cart;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listUser = User::paginate(3);
        
        return view('admin.user.list', compact('listUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $listUser = $user->update($request->all());

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::destroy($id);

        return redirect()->route('users.index');
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        return view('user.profile.profile', compact('user'));
    }

    public function editprofile()
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        return view('user.profile.edit', compact('user'));
    }
    
    public function saveprofile(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $listUser = $user->update($request->all());

        return redirect()->route('home');
    }

    public function saveCart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        Cart::add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->prise,
            'quantity' => '1',

        ));

        \Log::info(Cart::getContent());
    
    }
    public function removeCart(Request $request,$product_id)

}
