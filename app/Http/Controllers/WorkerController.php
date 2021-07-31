<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Profession;
use App\Models\Worker;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workers=Worker::paginate(10);
        return view('workers.index',compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $courses=Cours::all();
    $professions=Profession::all();

        return view('workers.create',compact('courses','professions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Worker::create($this->validatedData());
        return redirect(route('workers.index'));
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker)
    {
    
        return view('workers.show',compact('worker',));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker)
    {
        $courses=Cours::all();
        $professions=Profession::all();
        return view('workers.edit',compact('worker','courses','professions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worker $worker)
    {
        $worker->update($this->validatedData());
        return redirect(route('workers.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        //
    }
    public function validatedData()
    {
        return request()->validate([
            'fullName'=>'required|min:6',
            'phone'=>'required|min:9|max:14',
            'password'=>'min:4|max:10',
            'salary'=>'required|min:2',
            'profession_id'=>'numeric',
            'cours'=>'numeric',
        ]);
        
    }
}
