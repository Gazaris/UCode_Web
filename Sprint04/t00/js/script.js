function transformation() {
    var lab = document.getElementById("lab");
    var hero = document.getElementById("hero");

    if(hero.innerText === `Bruce Banner`) {
        hero.innerText = `Hulk`;
        hero.style.fontSize = '130px';
        hero.style.letterSpacing = '6px';
        lab.style.backgroundColor = '#70964b';
    }
    else {
        hero.innerText = `Bruce Banner`;
        hero.style.fontSize = '60px';
        hero.style.letterSpacing = '2px';
        lab.style.backgroundColor = '#ffb300';
    }
}