class Draw {
    constructor(){
        this.options = ['logo.png','nerd.png','pila.png'];
        let _result = this.drawResult();
        this.getDrawResult = ()=>{
            return _result;
        }
        
    }
    drawResult(){
        let imgs = [];
        for(let i=0;i<3;i++){
            const index = Math.floor(Math.random()*3);
            const img = this.options[index];
            
            imgs.push(img)
        }

        return imgs;
    }


}
