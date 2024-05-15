@php
    $title = 'Opinie';
    $route = ['Opinie'];
@endphp

<x-main :title="$title" :route="$route">
    <div class="w-full">
        @if (session()->has('message'))
            <div class="border rounded-lg py-2 px-2 mt-2 bg-red-400 text-white">
                {{ session()->get('message') }}
            </div>
        @endif
        <form class="block" action="/reviews" method="POST">
            @csrf

            <x-form.input name='nickname' placeholder="Nazwa" />
            <x-form.textarea name='description' placeholder="Napisz swoją opinię" />
            <small class="text-gray-400">Maksymalna ilość znaków - 255</small>

            <div x-data="{
                rating: 0,
                hoverRating: 0,
                ratings: [{ 'amount': 1, 'label': 'Terrible' }, { 'amount': 2, 'label': 'Bad' }, { 'amount': 3, 'label': 'Okay' }, { 'amount': 4, 'label': 'Good' }, { 'amount': 5, 'label': 'Great' }],
                rate(amount) {
                    if (this.rating == amount) {
                        this.rating = 0;
                    } else this.rating = amount;
                },
                currentLabel() {
                    let r = this.rating;
                    if (this.hoverRating != this.rating) r = this.hoverRating;
                    let i = this.ratings.findIndex(e => e.amount == r);
                    if (i >= 0) { return this.ratings[i].label; } else { return '' };
                }
            }" class="flex flex-col items-center justify-center space-y-2 rounded m-2">
                <div class="flex space-x-0 bg-gray-100">
                    <template x-for="(star, index) in ratings" :key="index">
                        <span @click="rate(star.amount)" @mouseover="hoverRating = star.amount"
                            @mouseleave="hoverRating = rating" aria-hidden="true" :title="star.label"
                            class="rounded-sm text-gray-400 fill-current focus:outline-none focus:shadow-outline p-1 w-12 m-0 cursor-pointer"
                            :class="{
                                'text-gray-600': hoverRating >= star.amount,
                                'text-yellow-400': rating >= star.amount &&
                                    hoverRating >= star.amount
                            }">
                            <svg class="w-15 transition duration-150" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </span>
                        <input class="hidden" type="text" name="score" id="score" x-model="rating" />
                    </template>
                </div>
            </div>
            <x-form.button>Opublikuj</x-form.button>
        </form>

        <section class="py-24 relative">
            <div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto">
                <div class="grid grid-cols-12 py-6 border-y border-gray-200 mb-11">
                    <div class="col-span-12 lg:col-span-10 ">
                        <h5 class="font-manrope font-semibold text-2xl leading-9 text-black text-center">Opinie
                            <span
                                class="lg:hidden font-manrope font-semibold text-2xl leading-9 text-black text-center">
                                &
                                Oceny</span>
                        </h5>
                    </div>
                    <div class="col-span-12 lg:col-span-2 max-lg:hidden">
                        <h5 class="font-manrope font-semibold text-2xl leading-9 text-black text-center">Ocena</h5>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-8">
                    @foreach ($reviews as $review)
                        <div class="grid grid-cols-12 max-w-sm sm:max-w-full">
                            <div class="col-span-12 lg:col-span-10 ">
                                <div class="sm:flex gap-6">
                                    <div class="text">
                                        <p class="font-medium text-lg leading-8 text-gray-900 mb-2">
                                            {{ $review->nickname }}</p>
                                        <div class="flex lg:hidden items-center gap-2 lg:justify-between w-full mb-5">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($review->score >= $i)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                        height="30" viewBox="0 0 30 30" fill="none">
                                                        <g clip-path="url(#clip0_13624_2090)">
                                                            <path
                                                                d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                                                fill="#FBBF24" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_13624_2090">
                                                                <rect width="30" height="30" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                @else
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                        height="30" viewBox="0 0 30 30" fill="none">
                                                        <g clip-path="url(#clip0_13624_2090)">
                                                            <path
                                                                d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                                                fill="#888" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_13624_2090">
                                                                <rect width="30" height="30" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                @endif
                                            @endfor
                                        </div>
                                        <p class="font-normal text-base leading-7 text-gray-400 mb-4 lg:pr-8 break-all">
                                            {{ $review->description }} </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-span-12 lg:col-span-2 max-lg:hidden flex lg:items-center flex-row lg:flex-col justify-center max-lg:pt-6 ">
                                <div class="flex items-center gap-2 lg:justify-between w-full mb-5">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($review->score >= $i)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 30 30" fill="none">
                                                <g clip-path="url(#clip0_13624_2090)">
                                                    <path
                                                        d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                                        fill="#FBBF24" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_13624_2090">
                                                        <rect width="30" height="30" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 30 30" fill="none">
                                                <g clip-path="url(#clip0_13624_2090)">
                                                    <path
                                                        d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                                        fill="#888" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_13624_2090">
                                                        <rect width="30" height="30" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        @endif
                                    @endfor
                                </div>
                                <p class="font-medium text-lg leading-8 text-gray-400 lg:text-center whitespace-nowrap">
                                    {{ $review->created_at->format('d M Y') ?? '' }}</p>
                            </div>
                        </div>
                        @auth
                        <x-buttons.layout>
                            <x-buttons.delete route="/reviews/{{ $review }}"/>
                        </x-buttons.layout>
                        @endauth
                        <div class="border-b border-gray-100 w-full"></div>
                @endforeach
            </div>
            <div class="flex-start text-white w-full">
                {{ $reviews->links('pagination::tailwind') }}
            </div>
        </section>
    </div>
</x-main>
