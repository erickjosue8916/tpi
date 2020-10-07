
function setImage(animals) {
    for (let i = 0; i < animals.length; i++) {
        const id = animals[i].id
        const image_source = `${baseDir}assets/img/animals/${id}.jpg`
        const img = document.createElement('img')
        img.src = image_source
        document.querySelectorAll('.animal__card__image')[i].appendChild(img)
    }
}

function setAudio(el) {
    
}

function animalSetInfo () {
    
}

function redirect () {
    
}
(() => {
    
    const animals = document.querySelectorAll('.animal__card')
    
    setImage(animals)
}) ()