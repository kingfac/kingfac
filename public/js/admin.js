/* var commandButtons = document.querySelectorAll(".editor-commands a");
for (var i = 0; i < commandButtons.length; i++) {
    commandButtons[i].addEventListener("mousedown", function (e) {
        e.preventDefault();

        //var editor = document.getElementById("editor");
        var commandName = e.target.getAttribute("data-command");
        if (commandName === "html") {
            var commandArgument = e.target.getAttribute("data-command-argument");
            document.execCommand('formatBlock', false, commandArgument);
        } else {
            document.execCommand(commandName, false);
        }
    });
}


document.getElementById("PreviewButton").addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("Preview").innerText = document.getElementById("Editor").innerHTML;
}); */


function infoDetaille(data){
    //console.log(data);
    let info = document.querySelector('#info');
    let editor = document.querySelector('#editor');
    let lib = document.querySelector('#lib');
    lib.value = data.lib;
    editor.innerHTML = data.info;
    info.value = data.info;
    /* console.log(lib.value); */
}

function toastController(){
    
    setTimeout(() => {
      
    }, 1000);
  }
