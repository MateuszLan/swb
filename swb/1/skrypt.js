const image = document.querySelector('.overimage')
const area = document.querySelector('map[name="overimage"] > area')

function setCoords() {
 const width = image.clientWidth
 const height = image.clientHeight
 area.setAttribute('coords', `${width/4}, ${height/4}, ${3*width/4}, ${3*height/4}`)
}

setCoords()
new ResizeObserver(setCoords).observe(image)