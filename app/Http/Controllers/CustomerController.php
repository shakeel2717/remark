<?php

namespace App\Http\Controllers;

use App\Models\addInventory;
use App\Models\Customer;
use App\Models\Rma;
use App\Models\rmahistory;
use App\Models\rmaRefunds;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.customer.index', [
            'allCustomers' => Customer::where('users_id', session('user')[0]->id)->where('type', 0)->paginate(10),
        ]);
    }

    public function supplier()
    {
        return view('dashboard.customer.index', [
            'allCustomers' => Customer::where('users_id', session('user')[0]->id)->where('type', 1)->paginate(10),
        ]);
    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 1;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'nullable|email|string',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'type' => 'required|boolean',
        ]);

        // inserting new Customer
        $task = new Customer();
        $task->users_id = session('user')[0]->id;
        $task->name = $validated['name'];
        $task->email = $validated['email'];
        $task->phone = $validated['phone'];
        $task->address = $validated['address'];
        $task->type = $validated['type'];
        $task->save();
        return redirect()->back()->with('message', 'Task successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $rmaHistory = rmahistory::where('users_id', session('user')[0]->id)->where('customers_id', $customer->id)->paginate(10);
        $rmaRefunds = rmaRefunds::where('users_id', session('user')[0]->id)->where('customers_id', $customer->id)->get();
        $addInventory = addInventory::where('users_id', session('user')[0]->id)->where('customers_id', $customer->id)->get();
        $totalRma = Rma::where(['users_id'=>session('user')[0]->id, 'customer_id' => $customer->id])->paginate(5);
        return view('dashboard.customer.show', [
            'customer' => $customer,
            'rmaHistories' => $rmaHistory,
            'addInventory' => $addInventory,
            'rmaRefunds' => $rmaRefunds,
            'totalRma' => $totalRma,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
