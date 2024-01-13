<x-layouts.master>



    <form action="{{ route('store') }}" method="POST" class="max-w-lg mx-auto">
       @csrf
        <div class="flex gap-5">
            <x-forms.field>
                <x-forms.label for="name">Nazwa:</x-forms.label>
                <x-forms.input id="name" name="name" placeholder="np. MarketingMix" required />
            </x-forms.field>
            <x-forms.field>
                <x-forms.label for="site_url">Adres Strony:</x-forms.label>
                <x-forms.input id="site_url" name="site_url" placeholder="np. marketingmix.pl" />
            </x-forms.field>
        </div>
        <div class="flex gap-5">
            <x-forms.field>
                <x-forms.label for="host">Host:</x-forms.label>
                <x-forms.input id="host" name="host" placeholder="np. cyberfolks" />
            </x-forms.field>
            <x-forms.field>
                <x-forms.label for="host_url">Adres Hosta:</x-forms.label>
                <x-forms.input id="host_url" name="host_url" placeholder="np. marketingmix.pl" />
            </x-forms.field>
        </div>


        <x-forms.field>
            <x-forms.label for="start_date">Data Kupna:</x-forms.label>
            <x-forms.input id="start_date" name="start_date" type="date" required />
        </x-forms.field>
        <x-forms.field>
            <x-forms.label for="end_date">Data Zakończenia:</x-forms.label>
            <x-forms.input id="end_date" name="end_date" type="date" required />
        </x-forms.field>

        <x-ui.base-button type="submit">Dodaj</x-ui.base-button>

    </form>


</x-layouts.master>
