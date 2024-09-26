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
        if ( $this->checker->validate( $this->fields ) )
        {
            $this->statusMsg = 'Form inviato con successo';
        }
        else
        {
            $this->statusMsg = 'Errore durante l\'invio del form';
        }
    }

    public function render() : string
    {
        // Costruzione form con la classe FormBuilder
        $form = $this->builder->build( $this->formAttribute, $this->fields );
        return str_replace( '%result%', $this->statusMsg, $form );
    }
}
