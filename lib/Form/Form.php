<?php

class Form
{
    protected array  $formAttribute;
    protected array  $fields;
    protected string $statusMsg     = '';

    public function __construct(
        protected string $formConfig,
        protected FormBuilder $formBuilder = new FormBuilder(),
        protected FormChecker $formChecker = new FormChecker(),
    ) {
        $this->init()->checkSubmit();
    }


    private function init() : Form
    {
        $config = require $this->formConfig;
        var_dump( $config );
        exit;
        return $this;
    }

    private function checkSubmit() : void
    {
        if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' )
        {
            $this->handleSubmit();
        }

    }

    private function handleSubmit() : void
    {
        // Valida i campi con la classe FormChecker

    }

    public function render()
    {
        // Costruzione form con la classe FormBuilder
        return "Devo renderizzare il form con questa configurazione: " . $this->formConfig;
    }
}
