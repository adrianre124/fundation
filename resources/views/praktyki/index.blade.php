@php
    $title = 'Praktyki';
    $route = ['Praktyki'];
@endphp

<x-main :title="$title" :route="$route">
    <div class="my-20">
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <h1 style="text-align: center;font-family:Abril Fatface;font-weight:400;font-style:normal"
                            class="text-4xl text-gray-600 font-bold">Praktyki uczelniane i pozauczelniane
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col space-y-5 my-10 text-lg py-8 px-4 bg-teal-600">
            <p style="text-align: center;"><span style="color: #ffffff;">Praktyki uczelniane i
                    nie tylko&#8230;</span></p>
            <p style="text-align: center;"><span style="color: #ffffff;"> Ideą przedsięwzięcia
                    jest umożliwienie wykorzystania posiadanej wiedzy w celu jej praktycznego
                    wykorzystania.</span></p>
            <p style="text-align: center;"><span style="color: #ffffff;">Pomagamy zdobyć
                    doświadczenie będące przepustką do przyszłej kariery i osiągnięcia
                    zaplanowanych celów.</span></p>
            <h2 style="text-align: center;"></h2>

        </div>
        <div class="flex flex-col space-y-5 my-10 text-lg py-8 px-4 bg-fuchsia-800">
            <p style="text-align: center;"><span
                    style="color: #ffffff; font-family: Verdana, Geneva, sans-serif; font-size: 18px; text-align: center;">Realizując
                    praktyki uczelniane uwzględniamy programy edukacyjne poszczególnych uczelni
                    zawarte w regulaminach praktyk.</span></p>
            <p style="text-align: center;"><span
                    style="color: #ffffff; font-family: Verdana, Geneva, sans-serif; font-size: 18px; text-align: center;">
                    Wystawiamy stosowne dokumenty.</span></p>
            <p style="text-align: center;"><span
                    style="color: #ffffff; font-family: Verdana, Geneva, sans-serif; font-size: 18px; text-align: center;">
                    Najlepsi otrzymują referencje i rekomendacje wraz z dokładnym opisem swoich
                    osiągnieć i umiejętności.</span></p>

        </div>
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="flex flex-col jusitfy-center items-center space-y-4">
                        <p style="font-size: 36px;color: #0a0a0a;text-align: center;font-family:Montserrat;font-weight:700;font-style:normal"
                            class="vc_custom_heading">Oferty Praktyk</p>
                        @foreach ($praktyki as $praktyka)
                            <div class="block w-full rounded bg-blue-400 text-center text-white hover:bg-blue-500">
                                <a class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-flat vc_btn3-block vc_btn3-color-info"
                                    href="/praktyki/{{ $praktyka->slug }}/" title="">
                                    <h1 class="py-4">{{ $praktyka->title }}</h1>
                                </a>
                            </div>
                        @endforeach
                        <div class="wpb_single_image wpb_content_element vc_align_left">

                            <figure class="wpb_wrapper vc_figure">
                                <a href="https://fundacjaglosmlodych.org/praktyki" target="_blank"
                                    class="vc_single_image-wrapper   vc_box_border_grey"><img fetchpriority="high"
                                        decoding="async" class="vc_single_image-img "
                                        src="https://fundacjaglosmlodych.org/wp-content/uploads/2021/04/infografika_inny_font.png"
                                        width="1080" height="566" alt="" title="" /></a>
                            </figure>
                        </div>

                        @auth
                            <div class="mb-10 bg-cyan-400 text-white p-4 text-center">
                                <a href="/praktyki/create">
                                    <p>Dodaj Praktyki</p>
                                </a>
                            </div>
                        @endauth

                        <div style="clear:both;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>
