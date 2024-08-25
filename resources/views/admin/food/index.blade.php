<x-food-layout>
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Grammer</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.</p>
    </div>
    <div class="flex flex-wrap -m-2">
    @foreach ($grammer as $gra)
      <div class="p-2 lg:w-1/4 md:w-1/3 w-full">
        <a class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">{{ $gra->title }}</h2>
          </div>
        </a>
      </div>
    @endforeach
    </div>
  </div>
</section>

</x-food-layout>
