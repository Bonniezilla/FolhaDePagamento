const listBtnEl = document.getElementById('listbutton_el')
const consultBtnEl = document.getElementById('consultbutton_el')
const menuBtnEl =  document.getElementById('menubtn_el')

listBtnEl.addEventListener('click', function() {
    window.location = "index.php?op=lista_func"
})

consultBtnEl.addEventListener('click', function() {
    window.location = "index.php?op=consult_func"
})

menuBtnEl.addEventListener('click', function() {
    window.location = "index.php"
})
