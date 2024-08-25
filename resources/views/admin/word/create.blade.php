<x-word-layout>
<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">単語追加</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p>
        </div>

        <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <form method="POST" action="{{ route('word.store') }}" class="flex flex-wrap -m-2">
                @csrf
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="category" class="leading-7 text-sm text-gray-600">品詞</label>
                        <select id="category" name="categoryId" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @foreach($wordCategories as $wordCategory)
                                <option value="{{ $wordCategory->id }}" @selected($wordCategory->id == old('categoryId'))>
                                    {{ $wordCategory->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    {{-- カテゴリーのバリエーションエラーメッセージの表示 --}}
                        @error('categoryId')
                            <div class="alert alert-danger text-red-700">{{ $message }}</div>
                        @enderror
                </div>
                <div class="p-2 w-1/2">
                    <div class="relative">
                        <label for="word" class="leading-7 text-sm text-gray-600">単語</label>
                        <input type="text" id="word" name="word" 
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                value="{{ old('word') }}">
                    </div>
                    @error('word')
                            <div class="alert alert-danger text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                <div class="p-2 w-1/2">
                    <div class="relative">
                        <label for="mean" class="leading-7 text-sm text-gray-600">単語意味</label>
                        <input type="text" id="mean" name="mean" 
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                value="{{ old('mean') }}">
                    </div>
                    @error('mean')
                            <div class="alert alert-danger text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="example_sentence_en" class="leading-7 text-sm text-gray-600">例文（英語）</label>
                        <textarea id="example_sentence_en" name="example_sentence_en" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                        >{{ old('example_sentence_en') }}</textarea>
                    </div>
                    @error('example_sentence_en')
                            <div class="alert alert-danger text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="example_sentence_ja" class="leading-7 text-sm text-gray-600">例文（日本語）</label>
                        <textarea id="example_sentence_ja" name="example_sentence_ja" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                        >{{ old('example_sentence_ja') }}</textarea>
                    </div>
                    @error('example_sentence_ja')
                            <div class="alert alert-danger text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                <div class="p-2 w-full">
                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                    追加
                </button>
                </div>
            </form>
        </div>
    </div>
    </section>

    

</x-word-layout>