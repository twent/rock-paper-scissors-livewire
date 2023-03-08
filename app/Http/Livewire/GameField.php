<?php

namespace App\Http\Livewire;

use App\Models\ChoiceType;
use Illuminate\Contracts\View\View;
use InvalidArgumentException;
use Livewire\Component;

class GameField extends Component
{
    public string $userName = '';
    public ?ChoiceType $choice;
    public ?ChoiceType $opponentChoice;
    public ?string $result;

    public function mount()
    {
        $this->userName = session('username', '');
        $this->opponentChoice = $this->getRandomChoice();
    }

    public function choose(string $choice)
    {
        if (! $choice = ChoiceType::tryFrom($choice)) {
            throw new InvalidArgumentException('Wrong choice type!');
        }

        $this->choice = $choice;
        $this->result = $this->getResult();
    }

    public function render(): View
    {
        return view('livewire.game-field');
    }

    private function getRandomChoice(): ChoiceType
    {
        $choices = ChoiceType::cases();
        $key = array_rand($choices);
        return $choices[$key];
    }

    private function getResult(): string
    {
        if ($this->choice === $this->opponentChoice) {
            return 'Draw 🔁';
        }

        if ($this->choice->beats() === $this->opponentChoice) {
            return 'Win 🏆';
        }

        return 'Loose 💔';
    }
}
