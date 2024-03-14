window.addEventListener("load", () => {
    main();
});

function main(){
    //Deklarace proměnných
    const firstNumber = document.getElementById("firstNumber");
    const secNumber = document.getElementById("secNumber");
    const thirdNumber = document.getElementById("thirdNumber");
    //Vypočítat
    const multiply = document.getElementById("multiply");
    //Výsledek - výstupní element
    const vysledek = document.getElementById("result");
    /**
     * Navázání klikacích eventu na tlačítka 
     */


    multiply.addEventListener("click", (e) => {
        calEverything()
    });
    

    function calEverything(){
        const a = firstNumber.value;
        const b = secNumber.value;
        const c = thirdNumber.value;

            result.innerHTML = a * (b / 100) * c;
            result.innerHTML = Math.round(result.innerHTML)
            result.innerHTML = "Vaše cesta Vás bude stát zhruba " + result.innerHTML + " Kč"

       

        
    }
}
