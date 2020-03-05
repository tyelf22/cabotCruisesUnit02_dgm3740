function toggleMenu() {
    document.getElementById('primaryNav').classList.toggle("closed")
}

let x = document.getElementById('hamburgerBtn')
x.onclick = toggleMenu



let test = location.href

console.log(test)