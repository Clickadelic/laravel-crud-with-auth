@props([
    'icon' => null,
    'size' => null,
    'variant' => null,
    'uppercase' => false
])

@php

    $baseFocus = 'focus:outline-none focus:ring-2 focus:ring-offset-2';
    
    $variantClasses = match($variant) {
        'primary'   => "text-white bg-sky-600 hover:bg-sky-700 $baseFocus focus:ring-sky-600 shadow-sm",
        'secondary' => "text-white bg-slate-700 hover:bg-slate-800 $baseFocus focus:ring-slate-600 shadow-sm",
        'danger'    => "text-white bg-rose-600 hover:bg-rose-700 $baseFocus focus:ring-rose-600 shadow-sm",
        'warning'   => "text-white bg-amber-600 hover:bg-amber-700 $baseFocus focus:ring-amber-600 shadow-sm",
        'success'   => "text-white bg-emerald-600 hover:bg-emerald-700 $baseFocus focus:ring-emerald-600 shadow-sm",
        'default'   => "bg-neutral-700 hover:bg-neutral-800 $baseFocus focus:ring-neutral-500 shadow-sm",
        'ghost'     => "bg-transparent hover:bg-white/30 border border-transparent hover:text-slate-100 $baseFocus focus:ring-neutral-500",
        'outline'     => "bg-transparent border border-white/30 hover:bg-white/30 border border-transparent hover:text-slate-100 $baseFocus focus:ring-neutral-500",
        'red'       => "text-white bg-red-600 hover:bg-red-700 $baseFocus focus:ring-red-600 shadow-sm",
        'green'     => "text-white bg-green-600 hover:bg-green-700 $baseFocus focus:ring-green-600 shadow-sm",
        'blue'      => "text-white bg-blue-600 hover:bg-blue-700 $baseFocus focus:ring-blue-600 shadow-sm",
        'yellow'      => "text-white bg-yellow-600 hover:bg-yellow-700 $baseFocus focus:ring-yellow-600 shadow-sm",
        'slate'     => "text-white bg-slate-600 hover:bg-slate-700 $baseFocus focus:ring-slate-600 shadow-sm",
        'stone'     => "text-white bg-stone-600 hover:bg-stone-700 $baseFocus focus:ring-stone-600 shadow-sm",
        'zinc'      => "text-white bg-zinc-600 hover:bg-zinc-700 $baseFocus focus:ring-zinc-600 shadow-sm",
        'fuchsia'   => "text-white bg-fuchsia-600 hover:bg-fuchsia-700 $baseFocus focus:ring-fuchsia-600 shadow-sm",
        'purple'    => "text-white bg-purple-600 hover:bg-purple-700 $baseFocus focus:ring-purple-600 shadow-sm",
        'indigo'    => "text-white bg-indigo-600 hover:bg-indigo-700 $baseFocus focus:ring-indigo-600 shadow-sm",
        'amber'     => "text-white bg-amber-600 hover:bg-amber-700 $baseFocus focus:ring-amber-600 shadow-sm",
        'sky'       => "text-white bg-sky-600 hover:bg-sky-700 $baseFocus focus:ring-sky-600 shadow-sm",
        'cyan'      => "text-white bg-cyan-600 hover:bg-cyan-700 $baseFocus focus:ring-cyan-600 shadow-sm",
        'teal'      => "text-white bg-teal-600 hover:bg-teal-700 $baseFocus focus:ring-teal-600 shadow-sm",
        'rose'      => "text-white bg-rose-600 hover:bg-rose-700 $baseFocus focus:ring-rose-600 shadow-sm",
        default     => "bg-slate-600 hover:bg-slate-700 $baseFocus focus:ring-slate-600 shadow-sm",
    };

    $sizeClasses = match($size) {
        'sm' => 'h-8 rounded-lg px-3 text-xs',
        'md' => 'text-base rounded-lg h-9 px-4 py-2 text-sm',
        'lg' => 'h-10 rounded-lg px-4',
        'xl' => 'h-12 rounded-lg px-6',
        default => 'h-9 px-4 py-2',
    };

    $uppercaseClass = $uppercase ? 'uppercase' : '';
@endphp

<button {{ $attributes->merge([
    'class' => implode(' ', [
        'inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-sm font-medium transition-colors',
        'focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring',
        'disabled:pointer-events-none disabled:opacity-50',
        '[&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0',
        'focus:outline-none focus:ring-2 focus:ring-transparent focus:ring-offset-2',
        'hover:cursor-pointer',
        $sizeClasses,
        $uppercaseClass,
        $variantClasses
    ]),
    'type' => 'button'
]) }} aria-label="{{ $attributes->get('aria-label') ?? $attributes->get('title') }}">
    {{ $icon }}{{ $slot }}
</button>