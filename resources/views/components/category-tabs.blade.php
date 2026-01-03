<ul class="flex flex-wrap text-sm font-medium text-center text-body border-b-2 border-b-black justify-center">
    <li class="me-2">
        <a href="#" aria-current="page" class="inline-block p-4 text-fg-brand bg-neutral-secondary-soft rounded-t-base active hover:rounded-t-lg hover:text-heading hover:bg-slate-200">All</a>
    </li>
    @foreach ($categories as $category)
        <li class="me-2">
            <a href="#" class="inline-block p-4 rounded-t-base hover:rounded-t-lg hover:text-heading hover:bg-slate-200">{{$category->name}}</a>
        </li>
    @endforeach
</ul>