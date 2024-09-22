<?php

class Form
{
    protected array  $formAttribute;
    protected array  $fields;
    protected string $statusMsg     = '';

    public function __construct(
        protected string $formConfig,
        protected FormBuilder $builder = new FormBuilder(),
        protected FormChecker $checker = new FormChecker(),
    ) {
        $this->init()->checkSubmit();
    }


    private function init() : Form
    {
        extract( require $this->formConfig );
        $this->formAttribute = $formAttribute;
        $this->fields        = $fields;

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

    public function render() : string
    {
        // Costruzione form con la classe FormBuilder
        return $this->builder->build( $this->formAttribute, $this->fields );
    }
}
