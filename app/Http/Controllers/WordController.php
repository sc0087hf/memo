<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWordRequest;
use App\Http\Requests\UpdateWordRequest;
use App\Models\Word;
use App\Models\WordCategory;
use App\Models\WordMean;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wordCategories = WordCategory::all();
        return view('admin.word.top', [
            'wordCategories' => $wordCategories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wordCategories = WordCategory::all();
        return view('admin.word.create', [
            'wordCategories' => $wordCategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWordRequest $request)
    {
        //先に単語を登録する
        $word = new Word();
        $word->word_category_id = $request->categoryId;
        $word->word = $request->word;
        $word->save();

        // 登録した単語のIDを取得する
        $wordId = Word::where('word', $request->word)->firstOrFail(); 

        //単語意味を登録する
        $wordMean = new WordMean();
        $wordMean->word_id = $wordId->id;
        $wordMean->mean = $request->mean;
        $wordMean->example_sentence_en = $request->example_sentence_en;
        $wordMean->example_sentence_ja = $request->example_sentence_ja;
        $wordMean->save();

        return redirect()->route('word.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Word $word)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Word $word)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWordRequest $request, Word $word)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Word $word)
    {
        //
    }
}
