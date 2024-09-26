const submitButton = document.getElementById("submitButton");
submitButton.addEventListener("click", albumSubmit)


function albumSubmit(e) {
    const elements = e.target.form.elements;
    var alertText = "";
    for (let i = 0; i < elements.length; i++) {
        const inputElement = elements[i];
        if (inputElement.type === "radio" && !inputElement.checked) {
            continue;
        }
        if (inputElement.value) {
            alertText += inputElement.name + ": " + inputElement.value + "\n";
        }
    }
    alert(alertText + "\n" + "Submitted")
    e.preventDefault();
}

const addButton = document.getElementById("addButton");
addButton.addEventListener("click", addTrack);
let divCounter = 0;

function addTrack() {
    console.log("test")
    const element = document.getElementById("tracks");
    const newDiv = document.createElement("div");

    const newTrackInput = document.createElement("input");
    newTrackInput.setAttribute("type", "text"+divCounter);
    newTrackInput.setAttribute("name", "The track");
    newTrackInput.setAttribute("id", "tracks"+divCounter);

    const delButton = document.createElement("button");
    delButton.setAttribute("class","deleteButton");
    delButton.setAttribute("type","button");
    delButton.setAttribute("id","deleteButton");
    delButton.setAttribute("name","Delete the track");

    const delButtonImage = document.createElement("img");
    delButtonImage.setAttribute("src", "trash-can.png");
    delButtonImage.setAttribute("alt","Delete Button");

    delButton.appendChild(delButtonImage);
    newDiv.append(newTrackInput, delButton);
    element.append(newDiv);
}

const removeButton = document.getElementById("tracks");
removeButton.addEventListener("click", removeTrack);

function removeTrack(e){
    if (e.target.tagName == "BUTTON"){
        let parentDiv = e.target.parentElement;
        parentDiv.remove();
    }
}
