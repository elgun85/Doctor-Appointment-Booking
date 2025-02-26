<div>
      <form wire:submit="save" class="p-5">
        <!-- Name -->
        <div>
            <x-input-label for="speciality_name" :value="__('Speciality name')" />
            <x-text-input wire:model="speciality_name" id="speciality_name" class="block mt-1 w-full" type="text" name="speciality_name"
                autofocus autocomplete="speciality_name" />
            <x-input-error :messages="$errors->get('speciality_name')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent
             bg-red-600 text-white hover:bg-red-700 disabled:pointer-events-none" href="{{ route('admin.speciality') }}">
                {{ __('Cancel') }}

            </a>

            {{-- <x-danger-button class="ms-4">
                {{ __('Cancel') }}
            </x-danger-button> --}}
            <x-primary-button class="ms-4">
                {{ __('Save') }}
            </x-primary-button>
        </div>
    </form>
</div>
