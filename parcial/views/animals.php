<main class="animals">
    <div class="animals__banner">

    </div>
    <div class="animals__body container">
        <div class="animals__selection">
            <select name="species" id="species" onchange="location =  this.value">
                <option value="<?=BASE_DIR?>Mamiferos/showAnimals">Mamiferos
                </option>
                <option value="<?=BASE_DIR?>Aves/showAnimals">Aves
                </option>
                <option value="<?=BASE_DIR?>Reptiles/showAnimals">Reptiles
                </option>
                <option value="<?=BASE_DIR?>Peces/showAnimals">Peces
                </option>
            </select>
        </div>
        <section class="animals_gallery">
            <?php foreach ($animalList as $key => $value) { ?>
                <div class="animal__card" id="<?=$value->getName()?>">
                    <div class="animal__card__image">
                        
                        
                    </div>
                    <div class="animal__card__body">
                        <p><?=$value->getName();?></p>
                        <p><?=$value->getDescription();?></p>
                    </div>
                    <div class="animal__card__actions" >
                        
                    </div>
                </div>
            <?php } ?>
        </section>
    </div>
</main>