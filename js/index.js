//index.js of the poll website I am creating

// A function that creates a new option with a correlating number
var count = 0;

function new_option(){
    count += 1;

    var label = document.createElement("label");
    label.for = 'option' + count;
    label.innerHTML = 'Option ' + count + ": ";
    document.getElementById("option-holder").appendChild(label);

    var input = document.createElement("input");
    input.type = 'text';
    input.id = 'option' + count;
    input.name = 'option' + count;
    document.getElementById("option-holder").appendChild(input);

    var _break = document.createElement("br");
    document.getElementById("option-holder").appendChild(_break);
    var _break = document.createElement("br");
    document.getElementById("option-holder").appendChild(_break);
}