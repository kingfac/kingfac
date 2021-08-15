//import Alpine from 'alpinejs'
/* window.Alpine = Alpine;

Alpine.start();  */


function X_app() {
    return {
      toast : false,
      toastMessage : '',
      toastEtat : false,
      zoom:false, 
      img:'1',
      video:'',
      youtube:false,
      com : [],
      precedent : 0,
      startCom(data){
        window.addEventListener('Faqs', ()=>{
         this.com.push(false);
         alert('nouveau')
        });
        data.forEach(d => {
          this.com.push(false);
        });
      },
      navCom(id){
        
        if(id == 0 && this.precedent == 0) {
          this.com[id] = !this.com[id];
        }
        else if (this.precedent != id){
          this.com[id] = !this.com[id];
          this.com[this.precedent] = false;
          this.precedent = id;
        }
        else{
          this.com[id] = false;
          this.precedent = 0;
        }
      },
      voir(data){
        this.video = 'https://www.youtube.com/embed/'+data;
        this.youtube = true;
      },
      zoomer(path){
            return  path + '/' + this.img + '.png'
      },
      init(){
        
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