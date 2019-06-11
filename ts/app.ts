function view_(){
    let btn_text = document.querySelector("#button_01");
    if (btn_text.innerHTML == "Mijn Keuze!")
    {
    document.querySelector("#p_01").innerHTML = "Mijn keuzedelen zijn: programmeren van microcontrollers, Drones - Techniek en de laatste weet ik nog niet";
    document.querySelector("#p_02").innerHTML = "Ik ga afstuderen als webdeveloper.";
    document.querySelector("#img_01").setAttribute("src", "./Foto's/Knipsel.png");
    }
 }