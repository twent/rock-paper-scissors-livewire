<?php

declare(strict_types=1);

namespace App\Models;

use PHPUnit\Event\InvalidArgumentException;

enum ChoiceType: string
{
    case Rock = 'rock';
    case Paper = 'paper';
    case Scissors = 'scissors';

    public function label(): string
    {
        return match ($this) {
            self::Rock => '🪨 Rock',
            self::Paper => '📄 Paper',
            self::Scissors => '✂️ Scissors',
        };
    }

    public function beats(): self
    {
        return match ($this) {
            self::Rock => self::Scissors,
            self::Paper => self::Rock,
            self::Scissors => self::Paper,
        };
    }
}
