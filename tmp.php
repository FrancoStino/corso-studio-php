<?php

/**
 * La classe Test rappresenta un esempio di come si può definire un metodo magic __call
 * in PHP.
 */
class Test
{
    /**
     * La funzione fn1 somma due numeri interi.
     *
     * @param int $a Il primo numero.
     * @param int $b Il secondo numero.
     * @return void
     */
    private function fn1(int $a, int $b): void {
        echo $a + $b;
    }

    /**
     * Il metodo __call viene invocato quando viene chiamato un metodo che
     * non esiste nella classe.
     *
     * @param string $metodo Il nome del metodo chiamato.
     * @param array $args Gli argomenti passati al metodo.
     * @return mixed Il valore restituito dal metodo se esiste, altrimenti true.
     */
    public function __call(string $metodo, array $args): mixed {
        return true;
    }
}

// Creazione di un'istanza della classe Test.
$test = new Test();
// Chiamata del metodo fn1.
$test->fn1(1, 2);


/* -------------------------------------------------------------------------- */
echo "<hr>";
/* -------------------------------------------------------------------------- */

/**
 * La classe EmailService rappresenta un servizio di invio di email.
 */
class EmailService
{
    /**
     * Il metodo sendEmail invia un'email.
     *
     * @return void
     */
    public function sendEmail(): void {
        echo "Email inviata...";
    }
}

/**
 * La classe Corso rappresenta un corso di formazione.
 */
class Corso
{
    /**
     * Il costruttore accetta un'istanza di EmailService.
     *
     * @param EmailService $emailService L'istanza di EmailService.
     */
    public function __construct(public EmailService $emailService) {}

    /**
     * Il metodo __call viene invocato quando viene chiamato un metodo che
     * non esiste nella classe.
     *
     * @param string $metodo Il nome del metodo chiamato.
     * @param array $args Gli argomenti passati al metodo.
     * @return mixed Il valore restituito dal metodo se esiste, altrimenti true.
     */
    public function __call(string $metodo, array $args): mixed {
        // Controlla se il metodo esiste nell'istanza di EmailService.
        if(method_exists($this->emailService, $metodo)) {
            // Chiama il metodo sull'istanza di EmailService.
            $this->emailService->$metodo();
        }
        return true;
    }
}

// Creazione di un'istanza della classe Corso con un'istanza di EmailService.
$corso = new Corso(new EmailService());
// Chiamata del metodo sendEmail.
$corso->sendEmail();
