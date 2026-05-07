@php
    $colorMap = [
        'gold'   => ['ring' => 'border-secondary-container',   'badge' => 'bg-secondary-container text-on-secondary-container'],
        'navy'   => ['ring' => 'border-primary-container',     'badge' => 'bg-primary text-on-primary'],
        'teal'   => ['ring' => 'border-tertiary-container',    'badge' => 'bg-tertiary text-on-tertiary'],
        'purple' => ['ring' => 'border-[#534AB7]',             'badge' => 'bg-[#534AB7] text-white'],
    ];
    $c = $colorMap[$color ?? 'navy'];
    $w = ($wide ?? false) ? 'min-w-[230px] max-w-xs' : 'min-w-[155px] max-w-[190px]';
@endphp

<div class="rounded-xl border {{ $c['ring'] }} bg-surface-container-lowest shadow-sm px-4 py-3 text-center {{ $w }}">
    <span class="inline-block text-[9.5px] font-extrabold tracking-wider uppercase {{ $c['badge'] }} px-3 py-1 rounded-full mb-2">
        {{ $role }}
    </span>
    <p class="text-[11.5px] leading-snug text-on-surface font-medium">
        {{ $name }}
    </p>
</div>