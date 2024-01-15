<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nazwa
                </th>
                <th scope="col" class="px-6 py-3">
                    Host
                </th>
                <th scope="col" class="px-6 py-3">
                    Data Kupna
                </th>
                <th scope="col" class="px-6 py-3">
                    Data Zakończenia
                </th>
                <th scope="col" class="px-6 py-3">

                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($domains as $domain)
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="{{ $domain->site_url }}" target="_blank">{{ $domain->name }}</a>
                    </th>
                    <td class="px-6 py-4">
                        <a href="{{ $domain->host_url }}" target="_blank">{{ $domain->host }}</a>
                    </td>
                    <td class="px-6 py-4">
                        {{ $domain->start_date }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $domain->end_date }}

                    </td>
                    <td class="px-6 py-4 flex justify-center items-center gap-4">
                        <a href="{{ route('show', $domain->id) }}"><svg class="w-6 h-6 text-gray-800 dark:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 14">
                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z" />
                                </g>
                            </svg></a>
                        <a href="{{ route('edit', $domain->id) }}"><svg class="w-6 h-6 text-gray-800 dark:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 18">
                                <path
                                    d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z" />
                                <path
                                    d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z" />
                            </svg></a>
                        <form action="{{ route('delete', $domain->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="sumbit">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
                                </svg>
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach





        </tbody>
    </table>
    {{ $domains->links() }}
</div>
