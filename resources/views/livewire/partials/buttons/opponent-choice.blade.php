<button
    @class([
        'btn',
    ])
    @if(! $result || $opponentChoice->label() !== $label) disabled @endif
>
    {{ $label }}
</button>
