<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Models\Membership;
use App\Models\Order;
use App\Image;
use App\Imports\orderImport;
use App\Models\User;
use Cassandra\Date;
use App\Post;
use App\DataTables\CategoryDatatable;
use App\Exports\orderExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Facades\Image as ImageX;
use function App\Http\string_random;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $orders = Order::all();


        return view('admin.order.index')->with('orders', $orders);
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     * @throws ValidationException
     */

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function show(order $order)
    {
        return view('admin.order.show')->with('order', $order);
    }



}
