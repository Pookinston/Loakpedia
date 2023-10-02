const Opsi = document.querySelector(".ongkir-menu"),
        sBtn = Opsi.querySelector(".ongkir-btn"),
        opti = Opsi.querySelectorAll(".opt"),
        oBtn_text = Opsi.querySelector(".oBtn-text");

sBtn.addEventListener("click", ()=> Opsi.classList.toggle("active"));

opti.forEach(opt =>{
    opt.addEventListener("click", ()=>{
        let selected = opt.querySelector(".opt-text").innerText;
        oBtn_text.innerText = selected;
        
        Opsi.classList.remove("active");
    })
})