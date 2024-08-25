<x-food-layout>
<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">英文法カテゴリー追加</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <form  method="POST" action="{{ route('food.store') }}" class="flex flex-wrap -m-2">
        @csrf
        <div class="p-2 w-full">
          <div class="relative">
            <label for="title" class="leading-7 text-sm text-gray-600">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          @error('title')
            <div class="alert alert-danger text-red-700">{{ $message }}</div>
          @enderror
        </div>

        <div class="p-2 w-full">
          <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
            登録
        </button>
        </div>
      </form>
    </div>
  </div>
</section>
</x-food-layout>