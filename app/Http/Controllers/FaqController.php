<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('faqs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        // Explicitly pass only allowed fields
        Faq::create([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
        ]);

        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully!');
      
    }

    public function show(Faq $faq)
    {
        return view('faqs.show', compact('faq'));
    }

    public function edit(Faq $faq)
    {
        return view('faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        // Explicitly pass only allowed fields
        $faq->update([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
        ]);

        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully!');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully!');
    }


    public function showFaqsPage()
    {
        $faqs = Faq::all();
        return view('faqs.page', compact('faqs'));
    }
    





}
