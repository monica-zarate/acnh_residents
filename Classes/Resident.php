<?php

// This is a parent Class called Resident. It contains shared properties and different methods.

// This class has a constructor that expects a relational array to be able to create an instance from this Class.

// It has a Setter and a Getter function.
// The Setter Method checks for a minimum number of fun facts to be passed, and if the minimum of three items is not met, an Exception will be thrown and the user will see the error echoed into the browser.
// The Getter Method, will reach to the fun facts array and return a random one every time the function is called.

class Resident {

    // Properties
    public $name;
    public $img_url;
    public $phrase;
    public $species;
    public $birthday;
    protected $fun_facts;

    // Methods
    // Constructor
    public function __construct($args = []) {
        $this->name = $args['name'];
        $this->img_url = $args['img_url'] ?? 'incognito.png';
        $this->phrase = $args['phrase'];
        $this->species = $args['species'];
        $this->birthday = $args['birthday'];
        $this->description = $args['description'] ?? '';
        $this->appearance = $args['appearance'] ?? '';
        $this->set_ff($args['fun_facts']);
    }

    // Setter
    public function set_ff($arr){
        try {
            if (count($arr) < 2){
                throw new Exception('Please enter at least 3 fun facts');
            } else {
                $this->fun_facts = $arr;
            }
        } catch(Exception $e) {
            echo $e;
        }
    }

    // Getter
    public function get_ff(){
        try {
            if(!isset($this->fun_facts)){
                throw new Exception('Fun Facts must be set');
            } else {
                return $this->fun_facts[rand(0,2)];
            }
        } catch(Exception $e){
            echo $e;
        }
    }

    // Function that returns the Class Name of the object created with this parent class.
    public function get_class_name(){
        return static::class;
    }

}

?>