@section('title')
    <title>{{ $post->title }}</title>
@endsection

<main class="flex w-full flex-col gap-4 bg-gray-100 p-4 lg:flex-row lg:p-8">

    <div class="mx-auto mb-4 h-full w-full rounded-md bg-white p-4 shadow-sm lg:mx-auto lg:w-8/12 lg:p-4">
        <div class="mb-4 h-full w-full rounded-md bg-white p-4 shadow-sm">
            <div class="mb-4 p-2">
                <img src="{{ url('storage/' . $post->image) }}" alt="{{ $post->title }}"
                    class="h-auto max-w-lg rounded-lg">
            </div>
            {{-- post info --}}
            <div class="mt-4 flex items-center justify-between">
                <div class="flex items-center justify-between rounded">
                    <span class="inline-block rounded-md px-4">Author:
                        {{ $post->user->name }}</span>
                    <span class="inline-block rounded-md px-4">Category:
                        {{ $post->post_category->name }}</span>
                    <span class="inline-block rounded-md px-4">Views:
                        {{ $post->views }}</span>
                </div>
            </div>
            {{-- post info --}}
            <div class="p-4">
                <a wire:navigate href="{{ route('post', $post->slug) }}">
                    <h1 class="mb-2 text-3xl font-bold tracking-tighter">{{ $post->title }}</h1>
                </a>
                <p class="text-gray-700">{!! nl2br(e($post->content)) !!}</p>

            </div>
            {{-- related --}}
            @if ($relatedPosts->count() > 0)
                <h3 class="mb-2 mt-2 font-semibold">Related Post:</h3>
                <ul class="list-none">
                    {{-- Loop untuk related posts --}}
                    @foreach ($relatedPosts as $relatedPost)
                        <li class="flex space-x-2 py-1">
                            <img src="{{ asset('storage/' . $relatedPost->image) }}" alt="{{ $relatedPost->title }}"
                                class="h-16 w-16 rounded object-cover">
                            <div class="flex flex-col justify-center p-4">
                                <a wire:navigate href="{{ route('post', $relatedPost->slug) }}"
                                    class="font-semibold text-gray-700 hover:text-blue-500">{{ $relatedPost->title }}</a>
                                <span class="text-sm text-gray-500">{{ $relatedPost->created_at }}</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="p-4">No related posts.</p>
            @endif
            <livewire:comments :model="$post" />
        </div>
    </div>

    <!-- Kolom untuk area sidebar -->
    <div class="ml-8 h-full w-full rounded-md bg-white p-4 shadow-sm md:ml-4 lg:ml-4 lg:w-4/12 lg:p-8">
        <div class="bg-white p-4">
            <h2 class="mb-2 text-3xl font-bold">Product</h2>
        </div>
        <ul class="list-none">
            @foreach ($products as $product)
                <li class="flex space-x-2 py-1">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                        class="h-16 w-16 rounded object-cover">
                    <div class="flex flex-col justify-center p-4">
                        <a wire:navigate href="{{ route('shop', $product->slug) }}"
                            class="font-semibold text-gray-700 hover:text-blue-500">{{ $product->name }}</a> <span
                            class="text-sm text-gray-500">{{ $product->created_at }}</span>
                    </div>
                </li>
            @endforeach

        </ul>

        <div class="bg-white p-4">
            <h2 class="mb-2 text-3xl font-bold">Posts</h2>
        </div>
        <ul class="list-none">
            @foreach ($posts as $post)
                <li class="flex space-x-2 py-1">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                        class="h-16 w-16 rounded object-cover">
                    <div class="flex flex-col justify-center p-4">
                        <a wire:navigate href="{{ route('post', $post->slug) }}"
                            class="font-semibold text-gray-700 hover:text-blue-500">{{ $post->title }}</a> <span
                            class="text-sm text-gray-500">{{ $post->created_at }}</span>
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
</main>
@push('script')
@endpush
