<?php

use App\Models\ChoiceType;

?>

<div class="container">
    <h1 class="game__heading">
        Rock Paper Scissors Game
    </h1>

    <livewire:user-name />

    <div class="game__field">
        <div class="game__choice">
            <h2 class="choice__heading">Your choice</h2>
            <div>
                @include('livewire.partials.buttons.choice', [
                    'choiceName' => ChoiceType::Rock->value,
                    'label' => ChoiceType::Rock->label(),
                ])

                @include('livewire.partials.buttons.choice', [
                    'choiceName' => ChoiceType::Paper->value,
                    'label' => ChoiceType::Paper->label(),
                ])

                @include('livewire.partials.buttons.choice', [
                    'choiceName' => ChoiceType::Scissors->value,
                    'label' => ChoiceType::Scissors->label(),
                ])
            </div>
        </div>

        <div class="game__choice">
            <h2 class="choice__heading">Opponent choice</h2>
            <div>
                @include('livewire.partials.buttons.opponent-choice', [
                    'choiceName' => ChoiceType::Rock->value,
                    'label' => ChoiceType::Rock->label(),
                ])

                @include('livewire.partials.buttons.opponent-choice', [
                    'choiceName' => ChoiceType::Paper->value,
                    'label' => ChoiceType::Paper->label(),
                ])

                @include('livewire.partials.buttons.opponent-choice', [
                    'choiceName' => ChoiceType::Scissors->value,
                    'label' => ChoiceType::Scissors->label(),
                ])
            </div>

            @if ($result)
            <div class="opponent__choice">
                Opponent choice is {{ $opponentChoice }}
            </div>
            @endif
        </div>
    </div>

    @if ($result)
    <div class="game__result">
        {{ $userName }}, you are {{ $result }}
    </div>
    @endif
</div>
