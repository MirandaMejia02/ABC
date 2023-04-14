<?php
class Animal {
    public function roar(){
    echo "El";
    }
}

class Cat extends Animal {
    public $nombre;
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
    public function roar(){
        echo $this->nombre."miaguea, MIAU!! ";
    }
}
Class Dog extends Animal {
    public $nombre;
    public function __construct($nombre){
    $this->nombre = $nombre;
    }
        public function roar() {
        echo $this->nombre." Ladra , Wauu!!";
    }
}
Class vaca extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this -> nombre = $nombre;
    }
    public function roar()
    {
        echo $this-> nombre." le hace MUU!!";    
    }
}

class Abecedario extends Animal{
    public $nombre;
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
    public function roar(){
        echo $this->nombre." A,B,C,D,E,F,G,H,I,J,K,L,M,N,Ñ,O,P,Q,R,S,T,U,V,W,X,Y,Z"; 
    }
}


function roarAnimal(Animal $animal)
{
$animal-> roar();
}

$gato = new Cat("gato");
$perro = new Dog("perro");
$vaca= new vaca("Vaca");
$abecedario = new Abecedario("abecedario");

if (isset($_POST['gato'])){
    ?>
    <script>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($gato) ;?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
} else if (isset($_POST['perro'])){
    ?>
    <script>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($perro); ?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
} else if (isset($_POST['vaca'])){
    ?>
    <script>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($vaca); ?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}
 else if (isset($_POST['abecedario'])){
    ?>
    <script>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($abecedario); ?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}
?>
