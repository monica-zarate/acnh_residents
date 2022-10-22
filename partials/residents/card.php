<!-- This partial creates a card and fills out the information reading from an object, and checks if the resident its receiving comes from a Villager Class or not, in order to display the villagers personality type, or the npcs service accordingly -->

<article>
    <div class="flex bio">
        <h2><?php echo h(ucw($resident->name)); ?></h2>
        <img src="images/<?php echo h($resident->img_url); ?>" alt="<?php echo h($resident->name); ?>">
        <p><i>"<?php echo h($resident->phrase); ?>"</i></p>
    </div>
    <div class="flex details">
        <?php 
            if(get_class($resident) == 'Villager'):
        ?>
            <h3>Personality</h3>
            <p><?php echo h($resident->personality); ?></p>
        <?php 
        else:
        ?>
            <h3>Service</h3>
            <p><?php echo h($resident->service); ?></p>
        <?php endif?>
        <h3>Species</h3>
        <p><?php echo h($resident->species); ?></p>
        <h3>Birthday</h3>
        <p><?php echo h($resident->birthday); ?></p>
        <h3>Fun Fact</h3>
        <p><?php echo h ($resident->get_ff());?></p>
    </div>
</article>

