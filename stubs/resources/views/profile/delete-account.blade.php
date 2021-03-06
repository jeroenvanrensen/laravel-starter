<div>
    <x-profile.section>
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
        </x-slot>

        <x-slot name="title">Delete account</x-slot>

        <x-slot name="description">Please enter your password to confirm you would like to permanently delete your account. </x-slot>

        <x-slot name="card">
            <!-- Password -->
            <x-forms.group>
                <x-forms.label for="password">Password</x-forms.label>
                <x-forms.input type="password" name="password" id="password" wire:model.lazy="password" />
                <x-forms.error name="password" />
            </x-forms.group>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <x-button wire:click="delete" loading="delete" color="red">Delete my account</x-button>
            </div>
        </x-slot>
    </x-profile.section>

    <x-modal name="showModal" title="Delete your account">
        <x-slot name="body">Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted.</x-slot>

        <x-button class="mr-4" color="gray" wire:click="$toggle('showModal')">Cancel</x-button>
        <x-button wire:click="destroy" color="red" loading="destroy">Delete my account</x-button>
    </x-modal>
</div>
