function toggleMenu() {
    document.getElementById('primaryNav').classList.toggle("closed")
}

let x = document.getElementById('hamburgerBtn')
x.onclick = toggleMenu



let urlString = document.location.href

let urlArray = urlString.split('/')

let pageHREF = urlArray[urlArray.length - 1]
console.log('the final page href >>'+ pageHREF) 

let menu = document.querySelectorAll('ul#primaryNav li a')

if (pageHREF !== "") {
    let i;
    for (i=0; i<menu.length; i++) {
        let currentUrl = (menu[i].getAttribute("href"))

        if (currentUrl === pageHREF) {
            console.log("we have a match")

            if(menu[i].parentNode.parentNode.parentNode.tagName === 'LI') {
                menu[i].parentNode.parentNode.parentNode.className ="parent activ"
            } else {
                menu[i].parentNode.className = ""
            }
        }else {
            menu[i].parentNode.className="active"
        }
    }
}