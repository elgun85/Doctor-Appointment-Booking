<div>
      <form wire:submit="register" class="p-5">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>














        <div class="flex items-center justify-end mt-4">


            <x-danger-button class="ms-4">
                {{ __('Cancel') }}
            </x-danger-button> <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div>
