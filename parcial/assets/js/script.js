
function setImage(animals) {
    for (let i = 0; i < animals.length; i++) {
        const id = animals[i].id
        const image_source = `${baseDir}assets/img/animals/${id}.jpg`
        const img = document.createElement('img')
        img.src = image_source
        document.querySelectorAll('.animal__card__image')[i].appendChild(img)
    }
}

function setAudio(animals) {
    for (let i = 0; i < animals.length; i++) {
        const id = animals[i].id
        const audio_source = `${baseDir}assets/audio/${id}.mp3`
        const audio = document.createElement('audio')
        const source = document.createElement('source')
        source.src = audio_source
        audio.controls = true
        audio.appendChild(source)
        console.log(audio)
        document.querySelectorAll('.animal__card__actions')[i].appendChild(audio)
    }
}

function animalSetInfo () {
    
}

function redirect () {
    
}
(() => {
    
    const animals = document.querySelectorAll('.animal__card')
    
    setImage(animals)
    setAudio(animals)
}) ()