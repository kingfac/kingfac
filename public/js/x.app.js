//import Alpine from 'alpinejs'
/* window.Alpine = Alpine;

Alpine.start();  */


function X_app() {
    return {
      toast : false,
      toastMessage : '',
      toastEtat : false,
      init(){
        window.addEventListener('Updated', ()=>{
          this.info = '';
          this.descri = '';
          this.lib = '';
          this.id = ''; 
          console.log('Update');
          this.toastEtat = true;
          this.toastMessage = "Mise à jour effectuée avec succès";
          this.toastController();
        });
        window.addEventListener('Added', ()=>{
          this.info = '';
          this.lib = '';
          this.id = ''; 
          this.descri = '';
          console.log('Added');
          this.toastEtat = true;
          this.toastMessage = "Enregistrement effectué avec succès";
          this.toastController();
        });
        window.addEventListener('Deleted', ()=>{
          this.info = '';
          this.lib = '';
          this.id = ''; 
          this.descri = '';
          console.log('Deleted');
          this.toastEtat = true;
          this.toastMessage = "Suppression effectuée avec succès";
          this.toastController();
        });
      },
      toastController(){
        this.toast = true;
        setTimeout(() => {
          this.toast = false;
        }, 2000);
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
      descri : '',
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
      modal : false,
      modalTitle : '',
      modalButton : 0,
      modalMessage : '',
      modalController(b,t,m){
        this.modalButton = b;
        this.modalTitle = t;
        this.modalMessage = m;
        this.modal = true;
      },
      
    }
}

/* document.getElementById("PreviewButton").addEventListener("click", function(e) {
  e.preventDefault();
  //document.getElementById("Preview").innerText = document.getElementById("Editor").innerHTML;
}); */