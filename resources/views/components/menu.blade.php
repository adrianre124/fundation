<div class="hidden lg:block">
    <aside class="min-w-[300px] mx-auto mt-2">
        <div class="mx-auto">
            <div class="mb-8">
                <h3><span class="border-b border-b-black px-4 pb-2">O fundacji</span></h3>
                <br>
                <div>
                    <ul class="space-y-2 text-blue-700">
                        <li class="transformation duration-200 hover:text-red-400"><a href="/o-fundacji">O fundacji</a></li>
                        <li class="transformation duration-200 hover:text-red-400"><a href="/zarzad-fundacji">Zarząd fundacji</a></li>
                        <li class="transformation duration-200 hover:text-red-400"><a href="/statut-fundacji">Statut fundacji</a></li>
                        <li class="transformation duration-200 hover:text-red-400"><a href="/cele-i-zasady-dzialania">Cele i zasady działania</a></li>
                        <li class="transformation duration-200 hover:text-red-400"><a href="/dzialalnosc-gospodarcza">Działalność gospodarcza</a></li>
                        <li class="transformation duration-200 hover:text-red-400"><a href="/sprawozdania">Sprawozdania</a></li>
                    </ul>
                </div>
            </div>

            <div class="mb-8">
                <h3><span class="border-b border-b-black px-4 pb-2">Polub nas na FB</span></h3>
                <br>
                <div>
                    <div class="fb-page" data-href="https://www.facebook.com/Fundacja.Glos.Mlodych" data-tabs="timeline" data-width="240" data-height="130" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Fundacja.Glos.Mlodych" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Fundacja.Glos.Mlodych">Fundacja na rzecz promocji i rozwoju Głos Młodych</a></blockquote></div>
                </div>
            </div>

            <div class="mb-8 max-w-[250px]">
                <h3><span class="border-b border-b-black px-4 pb-2">Aktualności</span></h3>
                <br>
                <div>
                    <ul class="space-y-2 text-blue-700">
                        @foreach (\App\Models\Post::orderBy('created_at', 'desc')->take(3)->get() as $post)
                            <li class="transformation duration-200 hover:text-red-400"><a href="/posts/{{$post->slug}}">{{$post->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </aside>
</div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v19.0" nonce="7HaqFgLa"></script>
