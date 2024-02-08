<article class="bg-white flex flex-col shadow my-4">
    <!-- Article Image -->
    <a href="{{ route('view', $post) }}" class="hover:opacity-75">
        <img src="{{ $post->getThumbnail()}}">
        {{--        <img src="/storage/{{ $post->thubnail }}">--}}
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        <div class="flex gap-4">
            @foreach($post->categories as $category)
                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
                    {{ $category->title }}
                </a>
            @endforeach
        </div>
        <a href="{{ route('view', $post) }}" class="text-3xl font-bold hover:text-gray-700 pb-4">
            {{ $post->title }}
        </a>
        <p href="#" class="text-sm pb-3">
            Автор: <a href="#" class="font-semibold hover:text-gray-800">
                {{ $post->user->name }}
            </a>
            <br/>
            Опубликовано в {{ $post->getFormattedDate() }} {{ $post->human_read_time }}
        </p>
        <a href="{{ route('view', $post) }}" class="pb-6">
            {{ $post->shortBody() }}
        </a>
        <a href="#" class=" text-gray-800 hover:text-black">
            Подробнее... <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</article>