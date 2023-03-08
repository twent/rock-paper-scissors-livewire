<button
    wire:click="choose('{{ $choiceName }}')"
    @class([
        'btn',
        'btn-error' => $choice && $choice !== $opponentChoice && $choice->beats() !== $opponentChoice,
        'btn-success' => $choice && $choice->beats() === $opponentChoice,
    ])
    @if($choice && $choice->value !== $choiceName) disabled @endif
>
    {{ $label }}
</button>
