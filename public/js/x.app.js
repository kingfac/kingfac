//import Alpine from 'alpinejs'
/* window.Alpine = Alpine;

Alpine.start();  */


function X_app() {
    return {
      toast : false,
      toastMessage : '',
      toastEtat : false,
      toastController(){
        this.toast = true;
        setTimeout(() => {
          this.toast = false;
        }, 1000);
      },
      scrolTop(){
        document.documentElement.scrollTo({
            top : 0,
            behavior : "smooth"
        })
        document.body.scrollTo({
            top : 0,
            behavior : "smooth"
        })
      },
      info : "<b>glodi</b>",
      lib: '',
      id : 0,
      command(commandName, commandArgument){
        console.log(this.descriInfo, commandName)
        //var commandButtons = document.querySelectorAll(".editor-commands a");
        //var commandName = e.target.getAttribute("data-command");
        if (commandName === "html") {
            //var commandArgument = e.target.getAttribute("data-command-argument");
            document.execCommand('formatBlock', false, commandArgument);
        } else {
            document.execCommand(commandName, false);
        }
        /* this.descriInfo = document.getElementById("Editor").innerHTML; */
        
      },
      infoDetaille(data, x){
        //document.querySelector('#info'+id).classList.remove('hidden')
        //this.info = infoDetaille
        //console.log(id);
        /* this.info = data.info;
        this.lib = data.lib;
        this.id = data.id; */
        //console.log(data);
        this.info = x.info;
        this.lib = data;
        //this.id = data.id;
        console.log(x);

        
        Livewire.on('Added', ()=>{
          alert('addd');
          this.toastEtat = true;
          this.toastMessage = "Enregistrement effectué avec succès";
          this.toastController();
        })
        
        Livewire.on('Updated', ()=>{
          this.info = '';
          this.lib = '';
          this.id = '';
          console.log('update');
          this.toastEtat = true;
          this.toastMessage = "Mise à jour effectuée avec succès";
          this.toastController();
        })
        Livewire.on('deleted', ()=>{
          this.info = '';
          this.lib = '';
          this.id = '';
          console.log('update');
          this.toastEtat = true;
          this.toastMessage = "Suppression effectuée avec succès";
          this.toastController();
        })
                  /* document.querySelector('#lib').value = this.lib;
          console.log(document.querySelector('#lib').value); */
      },
      
    }
}

/* document.getElementById("PreviewButton").addEventListener("click", function(e) {
  e.preventDefault();
  //document.getElementById("Preview").innerText = document.getElementById("Editor").innerHTML;
}); */