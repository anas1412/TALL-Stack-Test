<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $result = 0;
    public $operand1 = 0;
    public $operand2 = 0;

    public function add()
    {
        $this->result = $this->operand1 + $this->operand2;
    }

    public function subtract()
    {
        $this->result = $this->operand1 - $this->operand2;
    }

    public function multiply()
    {
        $this->result = $this->operand1 * $this->operand2;
    }

    public function divide()
    {
        // Check for division by zero
        if ($this->operand2 != 0) {
            $this->result = $this->operand1 / $this->operand2;
        } else {
            $this->result = 'Error: Division by zero';
        }
    }

    public function resetResult()
    {
        $this->result = 0;
        $this->operand1 = 0;
        $this->operand2 = 0;
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
