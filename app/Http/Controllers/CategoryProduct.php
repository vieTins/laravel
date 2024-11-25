<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

session_start();
class CategoryProduct extends Controller
{
    public function add_category_product()
    {
        return view('admin.add_category_product');
    }
    public function save_category_product(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_product_keywords'] = $request->category_product_keywords;
        $data['slug_category_product'] = $request->slug_category_product;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;

        DB::table('tbl_category_product')->insert($data);
        Session::put('message', 'Thêm danh mục sản phẩm thành công');
        return Redirect::to('add-category-product');
    }
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }
    public function all_category_product()
    {
        $this->AuthLogin();
        $all_category_product = DB::table('tbl_category_product')->get();
        $manager_category_product  = view('admin.all_category_product')->with('all_category_product', $all_category_product);
        return view('admin.admin_layout')->with(
            'admin.all_category_product',
            $manager_category_product
        );
    }
    public function unactive_category_product($category_product_id)
    {
        $this->AuthLogin();
        // ẩn danh mục sản phẩm là 0
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status' => 0]);
        Session::put('message', 'Ẩn danh mục sản phẩm, update thành công');
        return Redirect::to('all-category-product');
    }
    public function active_category_product($category_product_id)
    {
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status' => 1]);
        Session::put('message', 'Kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
}
