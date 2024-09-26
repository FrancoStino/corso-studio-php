<?php

class FormChecker
{

    protected array $errors   = [];
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
            foreach ( $fieldInfo[ 'rules' ] as $ruleType => $ruleValue )
            {
                match ( $ruleType )
                {
                    'required' => $this->checkRequired( $fieldName, $ruleValue ),
                    'email'    => $this->checkMail( $fieldName, $ruleValue ),
                    'min'      => $this->checkMim( $fieldName, $ruleValue ),
                };
            }


        }
        return $this->validate;
    }


    protected function checkRequired( string $fieldName, mixed $ruleValue )
    {
        echo "Il campo {$fieldName} è richiesto? {$ruleValue} <br>";
    }
    protected function checkMail( string $fieldName, mixed $ruleValue )
    {
        echo "Il campo {$fieldName} è di tipo email? {$ruleValue} <br>";

    }
    protected function checkMim( string $fieldName, mixed $ruleValue )
    {
        echo "Il campo {$fieldName} deve essere compilato con almeno {$ruleValue} caratteri <br>";

    }

}
