<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Role;

class WorkerController extends Controller
{
    public function index()
    {
    
        $workers = Worker::todos_los_empleados();
    
        return view('workers.index',compact('workers'));

    }

    public function create()
    {
        return view('workers.create');
    }
    
    public function store(Request $request)
    {
        Worker::create([
            'company_name'=>$request->company_name,
            'address'=>$request->address,
            'phone'=>$request->phone
        ]);

        return redirect()->route('suppliers.index')
            ->with('success', 'Supplier creado exitosamente');
    }
        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('suppliers.show')
            ->with('suppliers', Supplier::supplier_por_id($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('suppliers.edit')
            ->with('suppliers', Supplier::supplier_por_id($id));
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
        dd($request);

        $suppliers = Supplier::supplier_por_id($id);

        $suppliers->update([
            'company_name' =>  $request->company_name,
            'address'   => $request->address,
            'phone'   =>  $request->phone
        ]);

        return redirect()->route('suppliers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suppliers = Supplier::supplier_por_id($id);

        $suppliers->update([
            'active'     =>  false,
        ]);
        

        return redirect()->route('suppliers.index');
    }
}
