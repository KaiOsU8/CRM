<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class=" flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20 text-white">Klanten in dienst</h1>
        <a class="text-center text-xl mb-20 text-white border-solid border-2 px-1 border-violet-500" href="bedrijf/create">Voeg klant toe</a>
            <table class="text-center flex justify-center">
                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Klant </th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">kvk_nummer</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Bedrijf</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Overzicht</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Edit</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Remove</th>
                </tr>
                @foreach ($bedrijfs as $bedrijf)
                <tr>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $bedrijf->bedrijfsnaam }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $bedrijf->kvk_nummer }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $bedrijf->isbedrijf == 1 ? 'yes' : 'no' }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">
                        <a href="/bedrijf/{{ $bedrijf->id }}">Show</a>
                    </td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">
                        <a href="/bedrijf/{{ $bedrijf->id }}/edit">Edit</a>
                    </td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">
                        <form action="/bedrijf/{{ $bedrijf->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>