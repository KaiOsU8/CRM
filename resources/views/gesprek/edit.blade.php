<x-app-layout>
<form action="{{ route('gesprek.update', $gesprek) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="flex justify-center flex-col items-center">
            <div class="mb-4">
                <label class="text-white" for="gesprekdatum">Gesprek Datum:</label>
                <input type="date" id="gesprekdatum" name="gesprekdatum" value="{{ $gesprek->gesprekdatum }}" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="gesprektijd">Gesprek Tijd:</label>
                <input type="time" id="gesprektijd" name="gesprektijd" value="{{ $gesprek->gesprektijd }}" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="gesprokenmet">Gesproken Met:</label>
                <input type="text" id="gesprokenmet" name="gesprokenmet" value="{{ $gesprek->gesprokenmet }}" required>
            </div>
            <div class="mb-4">
                <label class="text-white" for="notitiegesprek">Notitie Gesprek:</label>
                <input type="text" id="notitiegesprek" name="notitiegesprek" value="{{ $gesprek->notitiegesprek }}" required>
            </div>
            
        <button class="text-white flex self-center" type="submit">Update</button>
        </div>
    </form>
</x-app-layout>