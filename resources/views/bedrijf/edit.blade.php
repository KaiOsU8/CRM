<x-app-layout>
    <form action="/bedrijf/{{ $bedrijf->id }}" method="POST">
        @csrf
        @method('PUT')  
        <div class="flex justify-center flex-col items-center">
            <div class="mb-4">
                <label class="text-white" for="bedrijfsnaam">Klant:</label>
                <input type="text" id="bedrijfsnaam" name="bedrijfsnaam" value="{{ $bedrijf->bedrijfsnaam }}" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="kvk_nummer">KvK Nummer:</label>
                <input type="text" id="kvk_nummer" name="kvk_nummer" min="8" max="8" value="{{ $bedrijf->kvk_nummer }}" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="isbedrijf">Is Bedrijf:</label>
                <input type="checkbox" id="isbedrijf" name="isbedrijf" value="{{ $bedrijf->kvk_nummer }}">
            </div>
        <button class="text-white flex self-center" type="submit">Update</button>
        </div>
    </form>
</x-app-layout>