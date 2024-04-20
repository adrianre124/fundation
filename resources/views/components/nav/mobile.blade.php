<nav class="bg-black text-white md:hidden">
    <ul class=" items-center align-middle justify-center text-base text-nowrap py-auto min-h-12">
        <li x-data="{ open: false }"
            class="flex flex-col block z-50 relative box-border cursor-pointer transform duration-300 w-full h-full items-center">
            <span @click="open = !open" class=" items-center mx-auto h-12 w-full">
                <p class="text-center leading-[45px] h-full"><i class="fa-solid fa-xl mx-auto" :class="open ? 'fa-xmark' : 'fa-bars'"></i></p>
            </span>

            <!-- Dropdown menu -->
            <x-nav.mobile-dropdown>

                <x-nav.list-item route="/" name="STRONA GŁÓWNA" />

        <li x-data="{ open: false }" @click="open = !open" @mouseover="open = true" @mouseout="open = false"
            class="z-50 relative block cursor-pointer transform duration-300 w-full grow h-full items-center">
                <span class="block w-full">
                    <a :href="open ? '/o-fundacji' : 'javascript:void(0)'" class="py-4 inline-block h-full w-11/12"><span class="text-sm px-2">O FUNDACJI</span></a>
                    <i class="fa-solid fa-chevron-down fa-sm float-right mr-2 leading-5 pt-4"></i>
                </span>

            <!-- Dropdown menu -->
            <x-nav.mobile-dropdown>
                <x-nav.dropdown-item route="/statut-fundacji">STATUT FUNDACJI</x-nav.dropdown-item>
                <x-nav.dropdown-item route="/zarzad-fundacji">ZARZĄD FUNDACJI</x-nav.dropdown-item>
                <x-nav.dropdown-item route="/cele-i-zasady-dzialania">CELE I ZASADY DZIAŁANIA</x-nav.dropdown-item>
                <x-nav.dropdown-item route="/dzialalnosc-gospodarcza">DZIAŁALNOŚĆ GOSPODARCZA</x-nav.dropdown-item>
                <x-nav.dropdown-item route="/sprawozdania">SPRAWOZDANIA</x-nav.dropdown-item>
            </x-nav.mobile-dropdown>
        </li>

        <li x-data="{ open: false }" @click="open = !open" @mouseover="open = true" @mouseout="open = false"
            class="z-50 relative box-border cursor-pointer transform duration-300 w-full grow h-full items-center">
            <span class="block w-full">
                <a :href="open ? '#' : 'javascript:void(0)'" class="inline-block py-4 h-full w-11/12"><span class="text-sm px-2">PRACOWNICY FUNDACJI</span></a>
                <i class="fa-solid fa-chevron-down fa-sm float-right mr-2 leading-5 pt-4"></i>
            </span>

            <x-nav.mobile-dropdown>
                <x-nav.dropdown-item route="#">SPECJALIŚCI FUNDACJI</x-nav.dropdown-item>
                <x-nav.dropdown-item route="#">REDAKCJA PROTALU GLOSWSCHOD</x-nav.dropdown-item>
            </x-nav.mobile-dropdown>
        </li>


        <x-nav.list-item route="/praktyki" name="PRAKTYKI" />
        <x-nav.list-item route="/projekty" name="PROJEKTY" />
        <x-nav.list-item route="/aktualnosci" name="AKTUALNOŚCI" />
        <x-nav.list-item route="/galeria" name="GALERIA" />
        <x-nav.list-item route="/kontakt" name="KONTAKT" />
        </x-nav.mobile-dropdown>
        </li>
    </ul>
</nav>
