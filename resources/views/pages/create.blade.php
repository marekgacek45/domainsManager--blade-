<x-layouts.master>

<div>

    <h1 class="text-xl font-bold mb-12 text-center dark:text-white">Dodaj nową domenę</h1>


    <form action="{{ route('store') }}" method="POST" class="max-w-lg mx-auto">
        @csrf

        <x-forms.field>
            <x-forms.label for="name">*Nazwa:</x-forms.label>
            <x-forms.input id="name" name="name" placeholder="np. MarketingMix" value="{{ old('name') }}"
                required />
            @error('name')
                <x-forms.error>{{ $message }}</x-forms.error>
            @enderror
        </x-forms.field>

        <x-forms.field>
            <x-forms.label for="site_url">*Adres Strony:</x-forms.label>
            <x-forms.input id="site_url" name="site_url" placeholder="np. marketingmix.pl"
                value="{{ old('site_url') }}" />
        </x-forms.field>


        <x-forms.field>
            <x-forms.label for="host">Host:</x-forms.label>
            <x-forms.input id="host" name="host" placeholder="np. cyberfolks" value="{{ old('host') }}" />
        </x-forms.field>
        <x-forms.field>
            <x-forms.label for="host_url">Adres Hosta:</x-forms.label>
            <x-forms.input id="host_url" name="host_url" placeholder="np. marketingmix.pl"
                value="{{ old('host_url') }}" />
        </x-forms.field>



        <x-forms.field>
            <x-forms.label for="start_date">Data Kupna:</x-forms.label>
            <x-forms.input id="start_date" name="start_date" type="date" value="{{ old('start_date') }}" />
        </x-forms.field>
        <x-forms.field>
            <x-forms.label for="end_date">Data Zakończenia:</x-forms.label>

            <x-UI.outline-button id="add-one">1 rok</x-UI.outline-button>
            <x-UI.outline-button id="add-two">2 lata</x-UI.outline-button>

            <x-forms.input id="end_date" name="end_date" type="date" value="{{ old('end_date') }}" />
        </x-forms.field>

        <x-UI.base-button type="submit">Dodaj</x-UI.base-button>
        <div class="mt-2">

            <span class="text-sm dark:text-white">*pola obowiązkowe</span>
        </div>
    </form>

</div>
</x-layouts.master>
