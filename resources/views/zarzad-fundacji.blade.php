@php
    $title = 'Zarząd fundacji';
    $route = ['Zarząd fundacji'];
    $description = "Zarząd Fundacji Głos Młodych";
@endphp

<x-main :title="$title" :route="$route" :description="$description">
    <div class="entry-content mt-20">
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-9">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper flex items-center">
                                <p><strong>
                                        <img fetchpriority="high" decoding="async" data-attachment-id="5596"
                                            class="size-medium wp-image-5596 alignleft shadow" src="{{asset('images/prezes.png')}}"
                                            alt="prezes fundacji w serwerowni" width="193" height="300" />
                                    </strong></p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p class="text-lg"><strong>Józef Protasewicz – prezes Zarządu Fundacji</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
</x-main>
