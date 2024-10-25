<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpenseRequest;
use App\Http\Requests\UpdateExpenseRequest;
use App\Http\Resources\Expense as ResourcesExpense;
use App\Models\Expense;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenses = Expense::with('category')->get();

        dd(ResourcesExpense::collection($expenses)->json());

        $item = [];

        foreach( $expenses as $expense ) {
            $item[] = ResourcesExpense::collection($expense);
        }

        dd($item);

        // dd($expenses);

        return ResourcesExpense::collection($expenses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpenseRequest $request)
    {

        $validatedData = $request->validate([
            'name'             => 'required|string|max:255',
            'amount'           => 'required|numeric',
            'category_id'      => 'nullable|exists:categories,id',
            'transaction_date' => 'required|date',
            'notes'            => 'nullable|string',
        ]);

        $expense = Expense::create($validatedData);
        return response()->json($expense, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpenseRequest $request, Expense $expense)
    {
        $expense = Expense::findOrFail($expense);
        $expense->update($request->all());

        return response()->json([
            'message' => "Updated"
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
