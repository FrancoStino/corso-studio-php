<?php

/**
 * La classe TestUnserializeSerialize è utilizzata per mostrare come si comporta
 * l'operazione di serializzazione e deserializzazione di un oggetto in PHP.
 *
 * L'operazione di serializzazione trasforma un oggetto in una stringa.
 * L'operazione di deserializzazione trasforma una stringa in un oggetto.
 */
class TestUnserializeSerialize
{
    /**
     * Campo privato $a.
     * @var int
     */
    private $a;

    /**
     * Campo privato $b.
     * @var string
     */
    private $b;

    /**
     * Metodo pubblico getA() per accedere al campo privato $a.
     * @return int il valore del campo $a
     */
    public function getA() {
        return $this->a;
    }

    /**
     * Metodo magico __sleep() viene chiamato durante la serializzazione.
     * Deve restituire un array di nomi di proprietà da serializzare.
     * In questo caso, viene serializzato solo il campo $b.
     * @return array un array con il nome della proprietà $b
     */
    public function __sleep() {
        return ['b'];
    }
}

// Creazione di un oggetto della classe TestUnserializeSerialize
$test = new TestUnserializeSerialize();

// Serialize l'oggetto
$serializedTest = serialize($test);

// Deserialize la stringa serializzata
$test2 = unserialize($serializedTest);

// Stampa il valore del campo privato $a dell'oggetto deserializzato
echo $test2->getA();


/* -------------------------------------------------------------------------- */
echo '<hr>';
/* -------------------------------------------------------------------------- */

/**
 * Questo script mostra l'uso di una classe di utilità FileManager per la lettura di un file.
 * La classe Test mostra l'uso del distruttore in PHP.
 */

class Test
{
    /**
     * Costruttore della classe Test.
     * Questo distruttore viene chiamato quando l'oggetto viene eliminato dalla memoria.
     *
     * @return void
     */
    public function __destruct() {
        echo "Distruttore della classe ".__CLASS__." invocato<br>";
    }
}

// Creazione di un oggetto della classe Test
$test = new Test();
echo "Test creato<br>";

// Rilascio dell'oggetto dalla memoria
unset($test);
echo "Test distrutto<br>";








/* -------------------------------------------------------------------------- */
echo '<hr>';
/* -------------------------------------------------------------------------- */








/**
 * Questa classe rappresenta un gestore di file.
 */
/**
 * Represents a file manager that provides methods for reading and serializing/deserializing file objects.
 *
 * The `FileManager` class encapsulates an `SplFileObject` instance and provides methods for reading the file contents
 * and serializing/deserializing the file object. The class has a constructor that takes the file name and mode, and
 * methods for reading the file contents, serializing the object, and deserializing the object.
 *
 * The `__sleep()` and `__wakeup()` methods are used to control the serialization and deserialization of the object,
 * ensuring that the file object is properly initialized when the object is deserialized.
 *
 * The `__serialize()` and `__unserialize()` methods provide an alternative way to serialize and deserialize the object,
 * storing only the file name and mode in the serialized data.
 */
class FileManager
{
    private SplFileObject $fileObj;

    public function __construct(
        protected string $filename,
        protected string $mode
    ) {
        $this->fileObj = new SplFileObject($filename, $mode);
    }

    public function read() {
        $fo = $this->fileObj;
        return $fo->fread($fo->getSize());
    }

    public function __sleep() {
        return ['filename', 'mode'];
    }

    public function __wakeup() {
        $this->fileObj = new SplFileObject($this->filename, $this->mode);
    }

    
    public function __serialize() {
        return [
            'filename' => $this->filename,
            'mode' => $this->mode
        ];
    }
    
    public function __unserialize(array $data) {
        $this->fileObj = new SplFileObject($data['filename'], $data['mode']);
    }
}

// Creazione di un oggetto della classe FileManager per il file "text.txt" in modalità lettura
$testfile = new FileManager("text.txt", "r");
$testfile2 = unserialize(serialize($testfile));
var_dump($testfile2);
serialize($testfile);
// Lettura del contenuto del file
echo $testfile->read();
