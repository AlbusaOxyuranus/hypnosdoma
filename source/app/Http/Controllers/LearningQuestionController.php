<?php

namespace App\Http\Controllers;

use App\LearningQuestion;
use Illuminate\Http\Request;

class LearningQuestionController extends Controller
{
    public function store()
    {
        LearningQuestion::create();
        return back();
    }

    public function update(Request $request, LearningQuestion $learningQuestion)
    {
        $learningQuestion->update($request->all());
        return back();
    }

    public function delete(LearningQuestion $learningQuestion)
    {
        $learningQuestion->delete();
        return back();
    }
}
