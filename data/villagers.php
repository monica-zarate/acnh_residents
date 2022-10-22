<?php 

    // We are creating new instances from the Villager Class by using the keyword "new", the resulting objects are being stored into the villagers array;

    $blaire = new Villager([
        'name' => 'blaire',
        'img_url' => 'blaire.png',
        'phrase' => 'Practice makes perfect',
        'personality' => 'Snooty',
        'species' => 'Squirrel',
        'birthday' => 'July 3rd',
        'fun_facts' => ['Preferred colors: Brown & Orange.', 'Initial catch phrase is: "nutlet".', 'Coffee order: Blend, no milk, no sugar.']
    ]);
    
    $lyman = new Villager([
        'name' => 'lyman',
        'img_url' => 'lyman.png',
        'phrase' => 'Eucalyptus is the spice of life',
        'personality' => 'Jock',
        'species' => 'Koala',
        'birthday' => 'October 12th',
        'fun_facts' => ['Preferred colors: Aqua & Yellow.', 'Initial catch phrase is: "chips".', 'Coffee order: Mocha, no milk, no sugar.']
    ]);
    

    $fang = new Villager([
        'name' => 'fang',
        'img_url' => 'fang.png',
        'phrase' => 'You mess with the wolf, you get the fangs',
        'personality' => 'Cranky',
        'species' => 'Wolf',
        'birthday' => 'December 18th',
        'fun_facts' => ['Preferred colors: Aqua & White.', 'Initial catch phrase is: "cha-chomp".', 'Coffee order: Blend, lots of milk, Three spoonfuls of sugar.']
    ]);
    
    $julian = new Villager([
        'name' => 'julian',
        'img_url' => 'julian.png',
        'phrase' => 'Never trot when you can prance',
        'personality' => 'Smug',
        'species' => 'Horse',
        'birthday' => 'March 15th',
        'fun_facts' => ['Preferred colors: Blue & Purple.', 'Initial catch phrase is: "glitter".', 'Coffee order: Kilimanjaro, no milk, no sugar.']
    ]);
    
    $erik = new Villager([
        'name' => 'erik',
        'img_url' => 'erik.png',
        'phrase' => 'If you\'re afraid of wolves, don\'t go to the woods',
        'personality' => 'Lazy',
        'species' => 'Deer',
        'birthday' => 'July 27th',
        'fun_facts' => ['Preferred colors: Beige & Red.', 'Initial catch phrase is: "chow down".', 'Coffee order: Mocha, lots of milk, Three spoonfuls of sugar.']
    ]);

    $fuchsia = new Villager([
        'name' => 'fuchsia',
        'img_url' => 'fuchsia.png',
        'phrase' => 'It takes one to know one',
        'personality' => 'Sisterly',
        'species' => 'Deer',
        'birthday' => 'September 19th',
        'fun_facts' => ['Preferred color: Pink.', 'Initial catch phrase is: "precious".', 'Coffee order: Blue Mountain, no milk, no sugar.']
    ]);

    $poppy = new Villager([
        'name' => 'poppy',
        'img_url' => 'poppy.png',
        'phrase' => 'It\'s all about positive thinking',
        'personality' => 'Normal',
        'species' => 'Squirrel',
        'birthday' => 'August 5th',
        'fun_facts' => ['Preferred colors: Green & Yellow.', 'Initial catch phrase is: "nutty".', 'Coffee order: Kilimanjaro, a little bit of milk, one spoonful of sugar.']
    ]);

    $june = new Villager([
        'name' => 'june',
        'img_url' => 'june.png',
        'phrase' => 'Dream big, expect little',
        'personality' => 'Normal',
        'species' => 'Cub',
        'birthday' => 'May 21st',
        'fun_facts' => ['Preferred colors: Red & White.', 'Initial catch phrase is: "rainbow".', 'Coffee order: Blue Mountain, no milk, no sugar.']
    ]);

    $zucker = new Villager([
        'name' => 'zucker',
        'img_url' => 'zucker.png',
        'phrase' => 'There\'s no such thing as luck',
        'personality' => 'Lazy',
        'species' => 'Octopus',
        'birthday' => 'March 8th',
        'fun_facts' => ['Preferred colors: Blue & Yellow.', 'Initial catch phrase is: "rainbow".', 'Coffee order: Kilimanjaro, a little bit of milk, one spoonful of sugar.']
    ]);

    $ankha = new Villager([
        'name' => 'ankha',
        'img_url' => 'ankha.png',
        'phrase' => 'All that glitters is not gold',
        'personality' => 'Snooty',
        'species' => 'Cat',
        'birthday' => 'September 22nd',
        'fun_facts' => ['Preferred colors: Brown & Colorful.', 'Initial catch phrase is: "me meow".', 'Coffee order: Kilimanjaro, no milk, no sugar.']
    ]);

    $villagers = [$blaire, $lyman, $fang, $julian, $erik, $fuchsia, $poppy, $june, $zucker, $ankha];

?>