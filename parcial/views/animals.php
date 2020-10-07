<main class="animals">
    <div class="animals__banner">

    </div>
    <div class="animals__body container">
        <div class="animals__selection">
            <select name="species" id="species">
                <option value="Mamiferos">
                    <a href="<?=BASE_DIR?>Mamiferos/showAnimals">Mamiferos</a>
                </option>
                <option value="Aves">
                <a href="<?=BASE_DIR?>Aves/showAnimals">Aves</a>
                </option>
                <option value="Reptiles">
                    <a href="<?=BASE_DIR?>Reptiles/showAnimals">Reptiles</a>
                </option>
                <option value="Peces">
                    <a href="<?=BASE_DIR?>Peces/showAnimals">Peces</a>
                </option>
            </select>
        </div>
        <section class="animals_gallery">
            <?php foreach ($animalList as $key => $value) { ?>
                <div class="animal__card">
                    <div class="animal__card__image">
                        
                        <!-- <img src="<?=BASE_DIR?>assets/img/animals/perro.jpg" alt=""> -->
                    </div>
                    <div class="animal__card__body">
                        <?=$value->getName();?>
                    </div>
                    <div class="animal__card__actions">
                        <audio controls>
                            <source src="<?=BASE_DIR?>assets/audio/perro.mp3" type='audio/mp3'>
                        </audio>
                    </div>
                </div>
            <?php } ?>
        </section>
    </div>
</main>