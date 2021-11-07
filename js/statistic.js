const clearSpan = ()=>{
    document.querySelector('.history span ul').innerHTML = "";
    
}
class Statistics {
constructor(){
    this.gameResults = [];

}
addGametoStatistics(win){
    let gameResult = {
        win:win,
        
    }
    
    this.gameResults.push(gameResult);
    
}
removeLastTask(){
    this.gameResults.pop();
}


showGameStatiscs(){
    
    if(document.querySelector('.history p').offsetWidth + document.querySelector('.history span').offsetWidth > window.innerWidth-200){
        this.removeLastTask();
    }
    
     clearSpan();
     let spanContent = "";
    this.gameResults.forEach(item => {
        
        
        if(item.win == true){
            
            document.querySelector('.history span ul').innerHTML= `${spanContent} <li><i class="fas fa-trophy"></i></li>`;
             spanContent = document.querySelector('.history span ul').innerHTML;
            
            
        }
        else{
            
            document.querySelector('.history span ul').innerHTML= `${spanContent} <li><i class="fas fa-window-close"></i></li>`;
             spanContent = document.querySelector('.history span ul').innerHTML;
            
            
            
        }
    })
    
    
}



}



