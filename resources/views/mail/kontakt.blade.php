@php
    $title = 'Kontakt';
    $route = ['Kontakt'];
@endphp

<x-layout :title="$title">
    <x-route :route="$route"/>
    <main class="flex my-10 justify-center space-x-8">
        <div class="w-4/12">
            <div class="flex flex-row items-center">
                <div class="grow-0 text-xs">Kontakt</div>
                <div class="grow h-[1px] bg-gray-200"></div>
            </div>

            <div class="my-10 space-y-8 text-lg">
                <h1 class="font-bold text-xl">Fundacja na Rzecz Promocji i Rozwoju</h1>
                <p>
                    Józef Protasewicz - Prezes Zarządu Fundacji <br>
                    62-090 Rokietnica <br>
                    Ul. Rolan 17d <br>
                    Tel: 794 250 440 <br>
                    Tel: 733 636 477 <br>
                    Numer GG: 35208545 <br>
                    KRS 0000359598
                </p>
                <h1 class="font-bold text-xl">Adresy e-mail do Fundacji:</h1>
                <p>
                    kontakt@fundacjaglosmlodych.org <br>
                    rekrutacja@fundacjaglosmlodych.org <br>
                </p>
                <h1 class="font-bold text-xl">Konto bankowe:</h1>
                <p>
                    Fundacja na Rzecz Promocji i Rozwoju "Głos Młodych" <br>
                    konto - Bank Pekao S.A. Poznań ul. Masztalerska 8a <br>
                    Nr Konta 92 1240 1763 1111 0010 7475 8053 <br>
                    NIP 778-147-28-25 <br>
                    Regon 301479604
                </p>
            </div>
        </div>

        <div class="w-4/12">
            <div class="flex flex-row items-center">
                <div class="grow-0 text-xs">Formularz Kontaktowy</div>
                <div class="grow h-[1px] bg-gray-200"></div>
            </div>

            <div>
                <form action="/kontakt" method="POST">
                    @csrf

                    <x-form.input name="nazwa" placeholder="Imię i nazwisko *" required/>
                    <x-form.input name="firma" placeholder="Nazwa firmy"/>
                    <x-form.input name="tel" placeholder="Telefon"/>
                    <x-form.input type="email" name="email" placeholder="Adres email *" required/>
                    <x-form.input name="temat" placeholder="Temat *" required/>
                    <x-form.textarea name="tresc" placeholder="Treść wiadomości *" rows="8" required/>
                    <input type="checkbox" id="zgoda" name="zgoda" class="ml-4" required>
                    <label for="zgoda">Wyrażam zgode na przetwarzania moich danych osobowych w celu kontaktu ze mną.</label>

                    <p class="my-10 text-lg">* Pola oznaczone gwiazdką są wymagane</p>

                    <x-form.button>Wyślij formularz</x-form.button>
                </form>
            </div>
        </div>
    </main>

    <div class="my-10 w-10/12 bg-gray-700 mx-auto text-center text-white">
        <hr>
            <div class="w-full space-y-4 my-8">
                <h1 class="font-semibold text-lg">Dołącz do nas!</h1>
                <p>Przyłączenie się do Fundacji jest bardzo proste:</p>
                <ol class="list-decimal mx-8">
                    <li>Wystarczy zgłosić taką chęć (napisać bądź zadzwonić).</li>
                    <li>Następnie spotkamy się, żeby dowiedzieć się czegoś więcej o sobie nawzajem.</li>
                    <li>W końcu: będziemy mogli zacząć działać!.</li>
                </ol>
            </div>
        <hr>
    </div>
</x-layout>
