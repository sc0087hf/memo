<x-word-layout>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">英単語</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">品詞一覧</p>
    </div>
    <div class="flex flex-wrap -m-2">
    @foreach($wordCategories as $wordCategry)
      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <a href="" class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">{{ $wordCategry->name }}</h2>
            <p class="text-gray-500">UI Designer</p>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>
</x-word-layout>