<?php

class FormChecker
{

    // protected array $errors   = [];
    protected array $data     = [];
    protected array $fields;
    protected bool  $validate = true;

    public function __construct()
    {
        $this->data = $_POST;
    }

    public function validate( array &$fields ) : bool
    {
        $this->fields = &$fields;
        foreach ( $this->fields as $fieldName => $fieldInfo )
        {
            $this->fields[ $fieldName ][ 'attribute' ][ 'value' ] = $this->data[ $fieldName ];
            foreach ( $fieldInfo[ 'rules' ] as $ruleType => $ruleValue )
            {
                match ( $ruleType )
                {
                    'required' => $this->required( $fieldName, $ruleValue ),
                    'email'    => $this->mail( $fieldName, $ruleValue ),
                    'min'      => $this->min( $fieldName, $ruleValue ),
                };
            }
        }
        return $this->validate;
    }


    protected function required( string $fieldName, mixed $ruleValue )
    {

        if ( empty( $this->data[ $fieldName ] ) )
        {
            $this->setError( $fieldName, 'Campo richiesto' );
            $this->validate = false;
        }
    }
    protected function mail( string $fieldName, mixed $ruleValue )
    {
        if ( !filter_var( $this->data[ $fieldName ], FILTER_VALIDATE_EMAIL ) )
        {
            $this->setError( $fieldName, 'Email non valida' );
            $this->validate = false;
        }
    }
    protected function min( string $fieldName, mixed $ruleValue )
    {

        if ( strlen( $this->data[ $fieldName ] ) < $ruleValue )
        {
            $this->setError( $fieldName, 'Minimo ' . $ruleValue . ' caratteri' );
            $this->validate = false;
        }
    }

    protected function setError( string $fieldName, string $errorMsg )
    {
        $this->validate                        = false;
        $this->fields[ $fieldName ][ 'error' ] = $errorMsg . '<br>';
    }
}
