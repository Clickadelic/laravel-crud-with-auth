<div class="p-6 text-gray-900 dark:text-gray-100">
    <h3 class="text-lg font-medium text-slate-200 mb-3">{{ __("Blade Komponenten") }}</h3>
    <hr class="my-5 border-slate-700">
    <h4 class="text-md font-medium text-slate-200 mb-3">{{ __("ShadCN Style-Button") }}</h4>
    <p class="text-md text-slate-200 font-medium mb-3">{{ __("Variants: z.B. variant='primary'") }}</p>
    <p class="text-md text-slate-200 mb-5">{{ __("primary | secondary | danger | warning | success | default | ghost | outline | red | green | blue | slate | stone | fuchsia | purple | zinc") }}</p>
    <div class="flex justify-start gap-3">
        <x-button variant="primary">Primary</x-button>
        <x-button variant="secondary">Secondary</x-button>
        <x-button variant="danger">Danger</x-button>
        <x-button variant="warning">Warning</x-button>
        <x-button variant="success">Success</x-button>
        <x-button variant="default">Default</x-button>
        <x-button variant="ghost">Ghost</x-button>
        <x-button variant="outline">Outline</x-button>
    </div>
    <hr class="my-5 border-slate-700">
    <div class="flex justify-start gap-3">
        <x-button variant="gray">Gray</x-button>
        <x-button variant="slate">Slate</x-button>
        <x-button variant="zinc">Zinc</x-button>
        <x-button variant="stone">Stone</x-button>
    </div>
    <hr class="my-5 border-slate-700">
    <div class="flex justify-start gap-3">
        <x-button variant="red">Red</x-button>
        <x-button variant="green">Green</x-button>
        <x-button variant="blue">Blue</x-button>
        <x-button variant="yellow">Yellow</x-button>
        <x-button variant="amber">Amber</x-button>
        <x-button variant="rose">Rose</x-button>
        <x-button variant="teal">Teal</x-button>
        <x-button variant="sky">Sky</x-button>
        <x-button variant="fuchsia">Fuchsia</x-button>
        <x-button variant="purple">Purple</x-button>
        <x-button variant="indigo">Indigo</x-button>
    </div>
    <hr class="my-5 border-slate-700">
    <p class="text-md text-slate-200 font-medium mb-3">{{ __("Sizes: z.B. size='sm'") }}</p>
    <p class="text-md text-slate-200 mb-3">{{ __("sm | md | lg | xl") }}</p>
    <div class="flex justify-start gap-3">
        <x-button variant="primary" size="sm">SM</x-button>
        <x-button variant="secondary" size="md">MD</x-button>
        <x-button variant="danger" size="lg">LG</x-button>
        <x-button variant="warning" size="xl">XL</x-button>
    </div>
    <hr class="my-5 border-slate-700">
    <p class="text-md text-slate-200 font-medium mb-3">{{ __("Mit SVG-Icon z.B <svg ... /></svg> Titel") }}</p>
    <div class="flex justify-start gap-3">
        <x-button variant="primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063q.068.062.132.129.065-.067.132-.129c3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3 3 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398"/>
            </svg>
            Favoriten
        </x-button>
        <x-button variant="secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063q.068.062.132.129.065-.067.132-.129c3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3 3 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398"/>
            </svg>
            Favoriten
        </x-button>
        <x-button variant="danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063q.068.062.132.129.065-.067.132-.129c3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3 3 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398"/>
            </svg>
            Favoriten
        </x-button>
        <x-button variant="indigo">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063q.068.062.132.129.065-.067.132-.129c3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3 3 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398"/>
            </svg>
            Favoriten
        </x-button>
    </div>
</div>