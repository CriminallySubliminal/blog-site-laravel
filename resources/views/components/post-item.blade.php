


<div class="w-full h-56 bg-neutral-primary-soft  mb-4 flex border border-default rounded-r-lg rounded-l-lg shadow-xs bg-slate-300">
    <div class="w-2/3 flex-shrink-0">
        <div class="p-5 w-full">
                <a href="#">
                    <h5 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading">{{$post->title}}</h5>
                </a>
                <p class="mb-4 text-sm">{{Str::words($post->content, 20)}}</p>
                <a href="#" class="inline-flex items-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                    Read more
                    <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                </a>
        </div>
    </div>
    <a href="#" class="w-1/3 flex-shrink-0">
        <img class="h-full w-full object-cover rounded-r-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
    </a>
</div>