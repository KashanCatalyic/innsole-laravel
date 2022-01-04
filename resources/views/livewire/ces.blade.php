<tr class="h-10">
    <td class="border border-gray-300">{{ $ces->ces_code }}</td>
    <td class="border border-gray-300">{{ $ces->name }}</td>
    <td class="border border-gray-300">{{ $ces->email }}</td>
    <td class="border border-gray-300">{{ $ces->company_name }}</td>
    <td class="border border-gray-300">{{ $ces->website }}</td>
    <td class="border border-gray-300"><a href="ces/{{$ces->id}}"
            class="px-4 py-2 ml-2 mr-2 text-sm text-white bg-blue-500 rounded-full shadow-md openModal hover:bg-blue-light hover:text-white">view</a>
    </td>
</tr>

