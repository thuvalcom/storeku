<div>
    <section class="bg-gray-50 py-20 text-gray-500">
        <div class="container mx-auto px-4">
            <div class="-mx-4 flex flex-wrap justify-center">
                @foreach ($categories as $category)
                    <div class="w-full p-4 md:w-6/12 lg:w-4/12"><a href="#"
                            class="group relative block px-6 pb-12 pt-36">
                            <img src="{{ asset('storage/' . $category->image) }}"
                                class="absolute left-0 top-0 h-full w-full object-cover object-left group-hover:opacity-75"
                                alt="{{ $category->name }}" width="1080" height="720" />

                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</div>
