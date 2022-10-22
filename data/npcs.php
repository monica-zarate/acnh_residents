<?php

    // We are creating new instances from the Npc Class by using the keyword "new", the resulting objects are being stored into the npcs array;

    $tom_nook = new Npc([
        'name' => 'tom nook',
        'img_url' => 'tom-nook.png',
        'phrase' => 'I\'ll be there with bells on! Ho ho!',
        'service' => 'Mortgage, Resident Services',
        'species' => 'Tanuki',
        'birthday' => 'May 30th',
        'fun_facts' => ['Favourite KK Slider song: KK Lament.', 'Has a lazy villager voice.', 'Coffee order: Kilimanjaro, lots of milk, one spoonful of sugar.']
    ]);

    $isabelle = new Npc([
        'name' => 'isabelle',
        'img_url' => 'isabelle.png',
        'phrase' => 'A good attitude will always take you further than a bad habit',
        'service' => 'Secretary',
        'species' => 'Dog (Shih Tzu)',
        'birthday' => 'December 20th',
        'fun_facts' => ['Digby is her twin.', 'Has a peppy villager voice.', 'Coffee order: Mocha, lots of milk, three spoonfuls of sugar.']
    ]);

    $blathers = new Npc([
        'name' => 'blathers',
        'img_url' => 'blathers.png',
        'phrase' => 'Eeek! A bug...! Ah, I beg your pardon! I just don\'t like handling these things much!',
        'service' => 'Museum Director, Paleontologist',
        'species' => 'Owl',
        'birthday' => 'September 24th',
        'fun_facts' => ['Has entomophobia: fear of insects.', 'Has a lazy villager voice.', 'He is very knowledgeable and informative, usually giving information on any object donated to the museum.']
    ]);

    $celeste = new Npc([
        'name' => 'celeste',
        'img_url' => 'celeste.png',
        'phrase' => 'Hitch your wagon to a star',
        'service' => 'Stargazing Aficionado',
        'species' => 'Owl',
        'birthday' => 'September 7th',
        'fun_facts' => ['Has entomophobia: fear of insects.', 'Has a lazy villager voice.', 'He is very knowledgeable and informative, usually giving information on any object donated to the museum.']
    ]);

    $npcs = [$tom_nook, $isabelle, $blathers, $celeste];

?>