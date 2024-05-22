<div class="hidden lg:block">
    <aside class="min-w-[300px] mx-auto mt-2">
            <div class="mb-8 max-w-[250px]">
                <h3><span class="border-b border-b-black px-4 pb-2">Praktyki</span></h3>
                <br>
                <div>
                    <ul class="space-y-2 text-blue-700">
                        @foreach (\App\Models\Practice::all() as $practice)
                            <li class="transformation duration-200 hover:text-red-400"><a href="{{$practice->slug}}">{{$practice->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </aside>
</div>
