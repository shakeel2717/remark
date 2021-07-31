<?php

namespace App\Http\Controllers;

use App\Models\rmaRefunds;
use App\Imports\InventoryImport;
use App\Models\Rma;
use App\Models\rmahistory;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RmaRefundsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validated = $request->validate([
            'rma_id' => 'required|integer',
            'method' => 'required|string',
            'txid' => 'required|string',
            'note' => 'required|string',
            'amount' => 'required|string',
            'creditNote' => 'file|mimes:pdf',
        ]);

        if ($request->hasFile('creditNote')){
            $file = $validated['creditNote'];
            $filename = time() . rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $validated['creditNote']->move('creditNote', $filename);
        } else {
            $filename = Null;
        }

        // inserting new Customer
        $task = new rmaRefunds();
        $task->users_id = session('user')[0]->id;
        $task->rma_id = $validated['rma_id'];
        $task->amount = $validated['amount'];
        $task->txid = $validated['txid'];
        $task->note = $validated['note'];
        $task->method = $validated['method'];
        $task->creditNote = $filename;
        $task->save();

        $rMAID = $validated['rma_id'];
        $rmadate = $task->created_at;

        // Getting Customer ID
        $getCustomerID = Rma::find($validated['rma_id']);

        // inserting this RMA Creation History
        $task = new rmahistory();
        $task->users_id = session('user')[0]->id;
        $task->customers_id = $getCustomerID->customer_id;
        $task->rma_id = $rMAID;
        $task->title = "Refund Added into This RMA";
        $task->value = "Refund Added into RMA# $rMAID Successfully by ".session('user')[0]->fname." ".session('user')[0]->lname." on ".$rmadate."";
        $task->save();

        return redirect()->back()->with('message', 'Refund Amount Added Successfully');
    }

    public function import_rma_refund(Request $request)
    {
        $validated = $request->validate([
            'import_file' => 'required|max:10000|mimes:xlsx,xls',
        ]);
        $path = $request->file('import_file');
        Excel::import(new InventoryImport(), $path);
        return redirect()->back()->with('message', 'Import Successfully Complete');
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rmaRefunds  $rmaRefunds
     * @return \Illuminate\Http\Response
     */
    public function show(rmaRefunds $rmaRefunds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rmaRefunds  $rmaRefunds
     * @return \Illuminate\Http\Response
     */
    public function edit(rmaRefunds $rmaRefunds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rmaRefunds  $rmaRefunds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rmaRefunds $rmaRefunds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rmaRefunds  $rmaRefunds
     * @return \Illuminate\Http\Response
     */
    public function destroy(rmaRefunds $rmaRefunds)
    {
        //
    }
}
