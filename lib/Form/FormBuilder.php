<?php

class FormBuilder
{

    protected array  $formAttribute = [];
    protected array  $fields        = [];
    protected string $htmlCode      = '';

    public function build( array $formAttribute, array $fields ) : string
    {
        $this->formAttribute = $formAttribute;
        $this->fields        = $fields;
        $this->startForm()->buildFields()->endForm();
        return $this->htmlCode;
    }

    protected function startForm()
    {
        $formAttribute = &$this->formAttribute;

        // Set default values if not provided
        $action = isset( $formAttribute[ 'action' ] ) ? $formAttribute[ 'action' ] : '';
        $method = isset( $formAttribute[ 'method' ] ) ? $formAttribute[ 'method' ] : 'post';
        $name   = isset( $formAttribute[ 'name' ] ) ? $formAttribute[ 'name' ] : '';

        $this->htmlCode .= <<<Form
        %result%
        <form action="{$action}" method="{$method}" name="{$name}" novalidate>
        Form;
        return $this;
    }

    protected function buildFields()
    {
        foreach ( $this->fields as $fieldName => $fieldValue )
        {
            $this->htmlCode .= match ( $fieldValue[ 'attribute' ][ 'type' ] )
            {
                'text', 'email', 'password' => $this->inputField( $fieldName, $fieldValue ),
            };
        }
        return $this;
    }

    protected function inputField( string $fieldName, array $fieldValue ) : string
    {
        $error = $this->fields[ $fieldName ][ 'error' ] ?? '';
        return <<<input
        <div>{$error}</div>
        <div><label for="{$fieldName}">{$fieldValue[ 'attribute' ][ 'placeholder' ]}</label></div>
        <div><input type="{$fieldValue[ 'attribute' ][ 'type' ]}" name="{$fieldName}" id="{$fieldName}" value="{$fieldValue[ 'attribute' ][ 'value' ]}"></div>
        input;
    }

    protected function endForm()
    {
        $btnText        = $this->formAttribute[ 'submitButtonText' ];
        $this->htmlCode .= <<<Form
        <div><input type="submit" value="{$btnText}"></div>
        </form>
        Form;
        return $this;
    }
}
