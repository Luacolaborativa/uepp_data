<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpenseCategoriesRequest;
use App\Http\Requests\UpdateExpenseCategoriesRequest;
use App\Models\ExpenseCategories;

class ExpenseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpenseCategoriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ExpenseCategories $expenseCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExpenseCategories $expenseCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpenseCategoriesRequest $request, ExpenseCategories $expenseCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpenseCategories $expenseCategories)
    {
        //
    }
}
