<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Emp;
use Symfony\Component\HttpFoundation\Request;

Route::get('/{id}',[UserController::class,'show'])->where(['id'=>'[0-9]+']);
Route::view('/','home');

// Route::get('/all', function()
// {
//     //$emp = Emp::where('id',11)->first();
//     $emp = Emp::find(11);
//     echo "<pre/>";
//     print_r($emp);
// });

Route::view('/emp-create','EmpCreate');

Route::post('emp-store', function(Request $request){
    Emp::create($request->all());
    return response()->json(['message' => 'Data saved successfully']);
})->name('emp-store');

Route::get('/emp-list', function()
{
    $emp = Emp::all();
    return view('EmpList', compact('emp'));
})->name('emp-list');

Route::delete('/emp/delete/{id}', function ($id) {
    $del = Emp::find($id);
    $del->delete();
    return back()->with('success','Emp Delete Successfully.!');
})->name('emp-delete');

Route::get('/emp/edit/{id}', function($id){
    $emp = Emp::find($id);
    return view('EmpEdit', compact('emp'));
});

Route::put('/emp/update/{id}', function(Request $request, $id){
    $emp = Emp::find($id);
    $emp->update($request->all());
    return redirect()->route('emp-list')->with('success','Successfully updated');
})->name('emp-update');

Route::get('/emp/show/{id}', function($id){
    $emp = Emp::find($id);
    return view('EmpShow', compact('emp'));
});
