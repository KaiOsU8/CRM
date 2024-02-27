<x-app-layout>
    <form action="/bedrijf" method="POST">
        @csrf
        <div class="flex justify-center flex-col items-center">
            <div>dfoghdouifghhsd</div>
            <div class="mb-4">
                <label class="text-white" for="bedrijfsnaam">Klant:</label>
                <input type="text" id="bedrijfsnaam" name="bedrijfsnaam" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="kvk_nummer">KvK Nummer:</label>
                <input type="text" id="kvk_nummer" name="kvk_nummer" min="8" max="8" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="isbedrijf">Is Bedrijf:</label>
                <input type="checkbox" id="isbedrijf" name="isbedrijf" >
            </div>
        <button class="text-white flex self-center" type="submit">Create</button>
        </div>
    </form>
</x-app-layout>