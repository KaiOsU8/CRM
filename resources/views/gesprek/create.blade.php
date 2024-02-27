<x-app-layout>
    <form action="{{ route('gesprek.store') }}" method="POST">
        @csrf
        <div class="flex justify-center flex-col items-center">
            <div class="mb-4">
                <select name="bedrijf_id">
                    @foreach($bedrijven as $bedrijf)
                        <option value="{{ $bedrijf->id }}" required>{{ $bedrijf->bedrijfsnaam }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="text-white" for="gesprekdatum">Gesprek Datum:</label>
                <input type="date" id="gesprekdatum" name="gesprekdatum" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="gesprektijd">Gesprek Tijd:</label>
                <input type="time" id="gesprektijd" name="gesprektijd" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="gesprokenmet">Gesproken Met:</label>
                <input type="text" id="gesprokenmet" name="gesprokenmet" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="notitiegesprek">Notitie Gesprek:</label>
                <input type="text" id="notitiegesprek" name="notitiegesprek" required>
            </div>
            
        <button class="text-white flex self-center" type="submit">Create</button>
        </div>
    </form>
</x-app-layout>