<?php

// We are importing the Resident Class, which we are declaring is the parent Class for Villager, so we can have access to all its Properties and Methods.
// This Class also has a particular property and a constructor that leverages the one coming from the parent Class.

require_once(get_project_path('/Classes/Resident.php'));

class Villager extends Resident {
    // Properties
    public $personality;

    // Methods
    // Constructor

    public function __construct($args = []) {
        parent::__construct($args);
        $this->personality = $args['personality'];
    }
}

?>