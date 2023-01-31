<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }
    public function showLoginForm()
    {
        return view('admin.index');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->intended('admin/index');
        }

        return back()->withErrors(['email' => 'These credentials do not match our records.']);
    }
//    public function customlogin(Request $request)
//    {
//
//        return view('admin.index');
//    }
    public function product()
    {
        return view('admin.product');
    }
    public function productUpload()
    {
        return view('admin.productUpload');
    }
    public function category()
    {
        return view('admin.category');
    }public function categoryUpload()
    {
        return view('admin.categoryUpload');
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
    public function store(Request $request)
    {
        $data=  new product;

        $image=$request->file;
        $imagename=time().$image->getClientOriginalName();
        $image->move(public_path('storage/story'), $imagename);
        $data->image =$imagename;
        $data->productname=$request->productname;
        $data->price=$request->price;
        $data->category=$request->category;
        $data->save();
        return redirect()->back()->with('success','Love Story Upload successfully!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
