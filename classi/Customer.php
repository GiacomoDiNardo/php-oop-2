<?php 

require_once __DIR__ . "/Cart.php";
require_once __DIR__ . "/GestorePagamenti.php";
require_once __DIR__ . "/../traits/Validation.php";


class Customer {

    use Validations;

    private $registered = false;
    private $name;
    private $lastname;
    public Cart $cart;
    public GestorePagamenti $gestorePagamenti;
    
    function __construct($_name = null, $_lastName = null) {

        $this->cart = new Cart;
        $this->gestorePagamenti = new GestorePagamenti;

        if (isset($_name) && isset($_lastName)) {
            $this->register($_name, $_lastName);
        }
    }


    /**
     * Get the value of registered
     */ 
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Set the value of registered
     *
     * @return  self
     */ 
    private function setRegistered($registered)
    {
        $this->registered = $registered;

        return $this;
    }

    public function register($_name, $_lastName) {
        $this->setName($_name);
        $this->setLastname($_lastName);
        $this->setRegistered(true);
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->isValid($name);
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->isValid($lastname);
        $this->lastname = $lastname;

        return $this;
    }

    public function checkout($indiceMetodo){
        $totale = $this->cart->getTotal();

        $discount = $this->registered ? 20 : 0;
        $totaleScontato = $totale - ($totale * 20 / 100);
        
        $metodo = $this->gestorePagamenti->getMetodo($indiceMetodo);
        if($metodo->checkScadenza()) {
            echo "pagamento riuscito di " . $totaleScontato . " euro";
        }else {
            echo "pagamento fallito";
        };
    }
}