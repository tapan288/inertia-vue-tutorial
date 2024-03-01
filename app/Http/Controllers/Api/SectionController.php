<?php

namespace App\Http\Controllers\Api;

use App\Models\Section;
use App\Http\Controllers\Controller;
use App\Http\Requests\ListSectionsData;
use App\Http\Resources\SectionResource;

class SectionController extends Controller
{
    public function __invoke(ListSectionsData $request)
    {
        $class_id = $request->class_id;

        return SectionResource::collection(Section::where('class_id', $class_id)->get());
    }
}
