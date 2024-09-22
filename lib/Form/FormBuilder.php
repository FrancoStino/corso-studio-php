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
        <form action="{$action}" method="{$method}" name="{$name}">
        Form;
        return $this;
    }

    protected function buildFields()
    {

        foreach ( $this->fields as $fieldName => $fieldValue )
        {
            $this->htmlCode .= match ( $fieldValue[ 'attribute' ][ 'type' ] )
            {

                'text'     => $this->inputField( $fieldName, $fieldValue ),

                'email'    => $this->inputField( $fieldName, $fieldValue ),

                'password' => $this->inputField( $fieldName, $fieldValue ),

            };
        }
        return $this;
    }

    protected function inputField( string $fieldName, array $fieldValue ) : string
    {
        return <<<input
        <div><label for="{$fieldName}">{$fieldValue[ 'attribute' ][ 'placeholder' ]}</label></div>
        <div><input type="{$fieldValue[ 'attribute' ][ 'type' ]}" name="{$fieldName}" id="{$fieldName}" value="{$fieldValue[ 'attribute' ][ 'value' ]}"></div>
        input;
    }

    protected function endForm()
    {
        $this->htmlCode .= <<<Form
        <div><input type="submit" value="Invia form"></div>
        </form>
        Form;
        return $this;
    }
}
