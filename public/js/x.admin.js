function admin (){
    return {
        nav : [],
        side : false,
        index : 0,
        s : 0,
        step : 40,
        init(max){
            this.side = true;
            for(let i = 0; i < max ; i++){
                this.nav.push[false];
            }
            this.nav[/* this.index */3]=true;
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
