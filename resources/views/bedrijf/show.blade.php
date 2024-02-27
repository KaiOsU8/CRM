<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class=" flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20 text-white">Klant overzicht</h1>
        <a class="text-center text-xl mb-20 text-white border-solid border-2 px-1 border-violet-500" href="{{ route('contact.create') }}">Voeg contact toe</a>
        <h1 class="text-center text-2xl mb-20 text-white">Contacten van {{ $bedrijf->bedrijfsnaam }}</h1>
            <table class="text-center flex justify-center">
                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Contact name</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Achternaam</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Straat</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Huisnummer</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Postcode</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Plaats</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Email</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Telefoonnummer</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Functie</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Bewerken</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Verwijderen</th>
                </tr>
                @foreach ($bedrijf->contacts as $contact)
                <tr>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $contact->voornaam }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $contact->achternaam }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $contact->straat }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $contact->huisnummer }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $contact->postcode }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $contact->plaats }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $contact->email }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $contact->telefoonnummer }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $contact->functie }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">
                        <a href="{{ route('contact.edit', $contact) }}">Edit</a>
                    </td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">
                    <form action="{{ route('contact.destroy', $contact) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <h1 class="text-center text-2xl m-20 text-white">Gesprekken van {{ $bedrijf->bedrijfsnaam }}</h1>
        <a class="text-center text-xl mb-20 text-white border-solid border-2 px-1 border-violet-500" href="{{ route('gesprek.create') }}">Voeg gesprek toe</a>
        <table class="text-center flex justify-center">
                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Gesprek datum</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Gesprek tijd</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Gesproken met</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Notities</th>
                    <th class="border-solid border-2 border-sky-400 text-white px-1">Bewerken</th>
                </tr>
                @foreach ($bedrijf->gespreks as $gesprek)
                <tr>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $gesprek->gesprekdatum }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $gesprek->gesprektijd }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $gesprek->gesprokenmet }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">{{ $gesprek->notitiegesprek }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500 text-white px-1">
                        <a href="{{ route('gesprek.edit', $gesprek) }}">Edit</a>
                    </tr>
                @endforeach
        </table>
    </div>
</x-app-layout>