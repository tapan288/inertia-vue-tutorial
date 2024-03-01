<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return inertia(
            'Student/Index',
            [
                'students' => StudentResource::collection(Student::paginate(10))
            ]
        );
    }

    public function create()
    {
        return inertia('Student/Create');
    }
}
