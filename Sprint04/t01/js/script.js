let characters = document.getElementById("characters").children;

for (let i = 0; i < characters.length; i++) {
    let classname = characters[i].getAttribute("class");
    if((!classname) || classname !== "good" && classname !== "evil" && classname !== "unknown") {
        characters[i].setAttribute("class", "unknown");
    }

    let data = characters[i].getAttribute("data-element");
    if(!data)
        characters[i].setAttribute("data-element", "none");

    
    characters[i].appendChild(document.createElement("br"));


    if (characters[i].getAttribute("data-element") === "none") {
        let circle = document.createElement("div");
        let line = document.createElement("div");

        circle.setAttribute("class", `elem none`);
        line.setAttribute("class", "line");

        characters[i].appendChild(circle);
        circle.appendChild(line);
        console.log("none ");
    }
    else {
        let elements = characters[i].getAttribute("data-element").split(' ');
        for(let j = 0; j < elements.length; j++) {
            let circle = document.createElement("div");
            circle.setAttribute("class", `elem ${elements[j]}`);
            characters[i].appendChild(circle);
        }
    }
}