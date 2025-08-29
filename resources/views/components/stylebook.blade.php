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