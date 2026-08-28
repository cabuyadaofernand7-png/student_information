<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    // GET /api/departments
    public function index()
    {
        $departments = Department::with('employees')->get();

        return response()->json($departments);
    }

    // POST /api/departments
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:departments,name',
        ]);

        $department = Department::create($validated);

        return response()->json($department, 201);
    }

    // GET /api/departments/{id}
    public function show($id)
    {
        $department = Department::with('employees')->findOrFail($id);

        return response()->json($department);
    }

    // PUT /api/departments/{id}
    public function update(Request $request, $id)
    {
        $department = Department::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:departments,name,' . $id,
        ]);

        $department->update($validated);

        return response()->json($department);
    }

    // DELETE /api/departments/{id}
    public function destroy($id)
    {
        $department = Department::findOrFail($id);

        $department->delete();

        return response()->json([
            'message' => 'Department deleted successfully'
        ]);
    }
}

