let bandera = document.querySelectorAll(".idioma img");
let textoBandera = document.querySelectorAll(".idioma h3")


bandera.forEach(flag => {
    flag.addEventListener("mouseover", function(e){
        e.preventDefault()
        let parent = e.target.parentElement
        let textoFlag = parent.querySelector("h3")
        console.log(textoFlag);
        textoBandera.forEach(txt => txt.classList.remove("textoBanderaClick"))
        textoFlag.classList.add("textoBanderaClick")
    })
    flag.addEventListener("mouseout", function(e){
        e.preventDefault()
        let parent = e.target.parentElement
        let textoFlag = parent.querySelector("h3")
        console.log(textoFlag);
        textoBandera.forEach(txt => txt.classList.remove("textoBanderaClick"))
        
    })
})

