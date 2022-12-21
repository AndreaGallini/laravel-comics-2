import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

let delet = document.getElementById('del')
delet.addEventListener('click', function () {
    delet.className.toggle('secure_delete')
})
