<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return inertia(
            'Student/Index',
            ['students' => Student::all()]
        );
    }
}
