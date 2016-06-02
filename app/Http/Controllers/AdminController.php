<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }

    public function getLogin()
    {
    	return view('admin.login');
    }

    public function postLogin(Request $request)
    {
    	$this->validate($request, [
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $credentials['is_admin'] = 1;

    	if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect('admin');
        } else {
        	return redirect('admin/login')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('admin/login');
    }

    public function categories($categoryId)
    {
        $category = Category::find($categoryId);

        $subCategories = Category::where('parent_id', $categoryId)->get();

        return view('admin/category-list')->with([
            'category' => $category,
            'subCategories' => $subCategories,
        ]);
    }

    public function products($categoryId)
    {
        $category = Category::find($categoryId);

        return view('admin/product-list')->with([
            'category' => $category,
        ]);
    }
}
