<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        showing data
    </h2>
</x-slot>

            <table class="w-full table-fixed">
                <thead>
                    <tr class="bg-gray-100">

                        <th class="px-4 py-2">name</th>
                        <th class="px-4 py-2">password</th>

                    </tr>
                </thead>
                <tbody>


                        @foreach($data as $d)
                        <tr>

                            <td class="px-4 py-2 border">{{ $d->name }}</td>
                            <td class="px-4 py-2 border">{{ $d->password }}</td>
      <td><p> <a href="{{route('view')}}">Edit</a></p>

    </td>


                        </tr>
                        @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

