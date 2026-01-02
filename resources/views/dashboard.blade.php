<x-app-layout>
    
    <div class="max-w-5xl mx-auto px-6 mt-3">
        <ul class="flex flex-wrap text-sm font-medium text-center text-body border-b-2 border-b-black justify-center">
            <li class="me-2">
                <a href="#" aria-current="page" class="inline-block p-4 text-fg-brand bg-neutral-secondary-soft rounded-t-base active">All</a>
            </li>
            @foreach ($categories as $category)
            <li class="me-2">
                <a href="#" class="inline-block p-4 rounded-t-base hover:text-heading hover:bg-slate-200">{{$category->name}}</a>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="flex flex-wrap max-w-5xl justify-center mx-auto px-6 mt-6">
        @forelse ($posts as $post)
            <x-post-item :post="$post"/>
        @empty 
            <div class=" text-gray-400 py-10">
                No Posts Found
            </div>
        @endforelse 
    </div>
d
    <div class="max-w-5xl mx-auto gap-0 p-5">
        {{$posts->links()}}
    </div>


    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

</x-app-layout>
    