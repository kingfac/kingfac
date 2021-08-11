function admin (){
    return {
        nav : [],
        side : false,
        index : 0,
        s : 0,
        step : 40,
        gallerie : false,
        sous_activite : false,
        initSide(max){
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
            this.side = true;
            /* A commenter */
            this.showSide();
            for(let i = 0; i < max ; i++){
                this.nav.push[false];
            }
            this.nav[/* this.index */4]=true;
        },
        naviguer(id){
            console.log(id);
            if(this.index == id) this.nav[id] = true;
            else {
                this.nav[this.index] = false;
                this.nav[id] = true;
                this.index = id;
            }
            //alert(this.nav[this.index])
        },
        showSide(){
            if(this.s == 0){
                this.side = false;
                this.animate();
            }
            else {
                this.animate2();
                //alert(444)
            }
            //this.side = !this.side ;
        },
        animate(){
            if(this.s < 4){
                setTimeout(() => {
                    this.s += 1;
                    this.animate();
                }, this.step);
            }           
        },
        animate2(){
            if(this.s > 0){
                setTimeout(() => {
                    this.s -= 1;
                    this.animate2();
                }, this.step);
            }
            else this.side = true;           
        },
    }
}
