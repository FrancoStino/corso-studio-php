<?php

class Form
{
    public function __construct( protected string $formConfig ) {}

    public function render()
    {
        return "Devo renderizzare il form con questa configurazione: " . $this->formConfig;
    }
}
