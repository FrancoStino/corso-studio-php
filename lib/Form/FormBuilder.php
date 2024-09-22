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
        $this->htmlCode .= "Inizio Form<br>";
        return $this;
    }

    protected function buildFields()
    {
        $this->htmlCode .= "Definizione campi del form<br>";
        return $this;
    }

    protected function endForm()
    {
        $this->htmlCode .= "Fine Form <br>";
        return $this;
    }
}
