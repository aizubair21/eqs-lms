import './bootstrap';

// import "./jquery.min.js";
// import "./main_script";
import "../css/main_style.css";


//when wire vavigating
document.addEventListener('livewire:navigating', () => {
    document.getElementsByClassName('spinner')[0].style.display = "block";

})

//when navigate finished
document.addEventListener("livewire:navigated", () => {
    document.getElementsByClassName('spinner')[0].style.display = "none";
})
