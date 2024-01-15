{{-- <x-layouts.master>


   <div>
    
<h1 class="text-xl mb-12 text-center">Edytujesz domenę - {{$domain->site_url}}</h1>

    <form action="{{route('update',$domain->id)}}" method="POST" class="max-w-lg mx-auto">
       @csrf
       @method('PATCH')
        <div class="flex gap-5">
            <x-forms.field>
                <x-forms.label for="name"  >Nazwa:</x-forms.label>
                <x-forms.input id="name" name="name" placeholder="np. MarketingMix" value="{{$domain->name}}" required />
                @error('name')
                <x-forms.error>{{$message}}</x-forms.error>
            @enderror
            </x-forms.field>
           
            <x-forms.field>
                <x-forms.label for="site_url">Adres Strony:</x-forms.label>
                <x-forms.input id="site_url" name="site_url" placeholder="np. marketingmix.pl" value="{{$domain->site_url}}"/>
            </x-forms.field>
        </div>
        <div class="flex gap-5">
            <x-forms.field>
                <x-forms.label for="host">Host:</x-forms.label>
                <x-forms.input id="host" name="host" placeholder="np. cyberfolks" value="{{$domain->host}}"/>
            </x-forms.field>
            <x-forms.field>
                <x-forms.label for="host_url" >Adres Hosta:</x-forms.label>
                <x-forms.input id="host_url" name="host_url" placeholder="np. marketingmix.pl" value="{{$domain->host_url}}"/>
            </x-forms.field>
        </div>


        <x-forms.field>
            <x-forms.label for="start_date">Data Kupna:</x-forms.label>
            <x-forms.input id="start_date" name="start_date" type="date" required value="{{$domain->start_date}}"/>
        </x-forms.field>

        <x-forms.field>
            <button type="button" id="add-one-edit">1 rok</button>
            <button type="button" id="add-two-edit">2 lata</button>
            <x-forms.label for="end_date">Data Zakończenia:</x-forms.label>
            <x-forms.input id="end_date" name="end_date" type="date" required value="{{$domain->end_date}}"/>
        </x-forms.field>

        <x-ui.base-button type="submit">Edytuj</x-ui.base-button>

    </form>
</div> 

</x-layouts.master> --}}


<x-layouts.master>

    <div>

        <h1 class="text-xl font-bold mb-12 text-center dark:text-white">Edytujesz domenę - {{ $domain->site_url }}</h1>


        <form action="{{ route('update', $domain->id) }}" method="POST" class="max-w-lg mx-auto">
            @csrf
            @method('PATCH')

            <x-forms.field>
                <x-forms.label for="name">Nazwa:</x-forms.label>
                <x-forms.input id="name" name="name" placeholder="np. MarketingMix" value="{{ $domain->name }}"
                    required />
                @error('name')
                    <x-forms.error>{{ $message }}</x-forms.error>
                @enderror
            </x-forms.field>

            <x-forms.field>
                <x-forms.label for="site_url">Adres Strony:</x-forms.label>
                <x-forms.input id="site_url" name="site_url" placeholder="np. marketingmix.pl"
                    value="{{ $domain->site_url }}" />
            </x-forms.field>


            <x-forms.field>
                <x-forms.label for="host">Host:</x-forms.label>
                <x-forms.input id="host" name="host" placeholder="np. cyberfolks" value="{{ $domain->host }}" />
            </x-forms.field>

            <x-forms.field>
                <x-forms.label for="host_url">Adres Hosta:</x-forms.label>
                <x-forms.input id="host_url" name="host_url" placeholder="np. marketingmix.pl"
                    value="{{ $domain->host_url }}" />
            </x-forms.field>



            <x-forms.field>
                <x-forms.label for="start_date">Data Kupna:</x-forms.label>
                <x-forms.input id="start_date" name="start_date" type="date" required
                    value="{{ $domain->start_date }}" />
            </x-forms.field>

            <x-forms.field>
                <x-ui.outline-button type="button" id="add-one-edit">1 rok</x-ui.outline-button>
                <x-ui.outline-button type="button" id="add-two-edit">2 lata</x-ui.outline-button>
                <x-forms.label for="end_date">Data Zakończenia:</x-forms.label>
                <x-forms.input id="end_date" name="end_date" type="date" required value="{{ $domain->end_date }}" />
            </x-forms.field>

            <x-ui.base-button type="submit">Dodaj</x-ui.base-button>
            <div class="mt-2">

                <span class="text-sm dark:text-white">*pola obowiązkowe</span>
            </div>
        </form>

    </div>
</x-layouts.master>
