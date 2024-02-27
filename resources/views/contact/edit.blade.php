<x-app-layout>
<form action="{{ route('contact.update', $contact) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="flex justify-center flex-col items-center">
            <div class="mb-4">
                <select name="bedrijf_id">
                    @foreach($bedrijven as $bedrijf)
                        <option value="{{ $bedrijf->id }}" {{ $contact->bedrijf_id == $bedrijf->id ? 'selected' : '' }}>{{ $bedrijf->bedrijfsnaam }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="text-white" for="voornaam">voornaam:</label>
                <input type="text" id="voornaam" name="voornaam" value="{{ $contact->voornaam }}" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="achternaam">achternaam:</label>
                <input type="text" id="achternaam" name="achternaam" value="{{ $contact->achternaam }}" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="straat">straat:</label>
                <input type="text" id="straat" name="straat" value="{{ $contact->straat }}" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="huisnummer">huisnummer:</label>
                <input type="number" id="huisnummer" name="huisnummer" value="{{ $contact->huisnummer }}" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="postcode">postcode:</label>
                <input type="text" id="postcode" name="postcode" value="{{ $contact->postcode }}" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="plaats">plaats:</label>
                <input type="text" id="plaats" name="plaats" value="{{ $contact->plaats }}" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="email">email:</label>
                <input type="email" id="email" name="email" value="{{ $contact->email }}" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="telefoonnummer">telefoonnummer:</label>
                <input type="tel" id="telefoonnummer" name="telefoonnummer" value="{{ $contact->telefoonnummer }}" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="functie">functie:</label>
                <input type="text" id="functie" name="functie" value="{{ $contact->functie }}" required>
            </div>
        <button class="text-white flex self-center" type="submit">Update</button>
        </div>
    </form>
</x-app-layout>