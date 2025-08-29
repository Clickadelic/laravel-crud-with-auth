<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium text-slate-200 mb-3">{{ __("Blade Komponente: Button") }}</h3>
                    <h4 class="text-md text-slate-200 mb-3">{{ __("ShadCN Style-Button") }}</h4>
                    <hr class="my-5 border-slate-700">
                    <p class="text-md text-slate-200 font-medium mb-3">{{ __("Variants:") }}</p>
                    <p class="text-md text-slate-200 mb-5">{{ __("primary | secondary | danger | warning | success | default | ghost") }}</p>
                    <div class="flex justify-center gap-3">
                        <x-button variant="primary">Primary</x-button>
                        <x-button variant="secondary">Secondary</x-button>
                        <x-button variant="danger">Danger</x-button>
                        <x-button variant="warning">Warning</x-button>
                        <x-button variant="success">Success</x-button>
                        <x-button variant="default">Default</x-button>
                        <x-button variant="ghost">Ghost</x-button>
                    </div>
                    <hr class="my-5 border-slate-700">
                    <p class="text-md text-slate-200 font-medium mb-3">{{ __("Sizes: z.B. size='sm'") }}</p>
                    <p class="text-md text-slate-200 mb-3">{{ __("sm | md | lg | xl") }}</p>
                    <div class="flex justify-center gap-3">
                        <x-button variant="primary" size="sm">Primary</x-button>
                        <x-button variant="secondary" size="md">Secondary</x-button>
                        <x-button variant="danger" size="lg">Danger</x-button>
                        <x-button variant="warning" size="xl">Warning</x-button>
                        <x-button variant="success" size="lg">Success</x-button>
                        <x-button variant="default" size="md">Default</x-button>
                        <x-button variant="ghost" size="sm">Ghost</x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
