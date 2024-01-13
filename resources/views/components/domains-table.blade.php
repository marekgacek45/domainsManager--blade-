

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
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="{{$domain->site_url}}" target="_blank">{{$domain->name}}</a>
                </th>
                <td class="px-6 py-4">
                    <a href="{{$domain->host_url}}" target="_blank">{{$domain->host}}</a>
                </td>
                <td class="px-6 py-4">
                    {{$domain->start_date}}
                </td>
                <td class="px-6 py-4">
                             {{$domain->end_date}}

                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            @endforeach

          
           


        </tbody>
    </table>
    {{$domains->links()}}
</div>


