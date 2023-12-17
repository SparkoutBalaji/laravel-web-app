<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Emp;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Http;

Route::get('/{id}',[UserController::class,'show'])->where(['id'=>'[0-9]+']);
Route::view('/','home');

//CRUD

Route::view('/emp-create','Emp.EmpCreate');

Route::post('emp-store', function(Request $request){
    Emp::create($request->all());
    return redirect()->route('emp-list')->with('success','Successfully Stored');
})->name('emp-store');

Route::get('/emp-list', function()
{
    $emp = Emp::all();
    return view('Emp.EmpList', compact('emp'));
})->name('emp-list');

Route::delete('/emp/delete/{id}', function ($id) {
    $del = Emp::find($id);
    $del->delete();
    return back()->with('success','Emp Delete Successfully.!');
})->name('emp-delete');

Route::get('/emp/edit/{id}', function($id){
    $emp = Emp::find($id);
    return view('Emp.EmpEdit', compact('emp'));
});

Route::put('/emp/update/{id}', function(Request $request, $id){
    $emp = Emp::find($id);
    $emp->update($request->all());
    return redirect()->route('emp-list')->with('success','Successfully updated');
})->name('emp-update');

Route::get('/emp/show/{id}', function($id){
    $emp = Emp::find($id);
    return view('Emp.EmpShow', compact('emp'));
});

//API by Http Client
Route::get('api-list', function(){
    $api = Http::get('https://jsonplaceholder.typicode.com/posts');
    return view('Api.ApiList', ['api'=>json_decode($api)]);
});

//Route Model Binding
Route::get('/emp/{emp}', function(Emp $emp){
    return $emp;                                //emp id based return the data values
});
Route::get('/emp/{emp:name}', function(Emp $emp){
    return $emp;                                // name based emp data values return
});


