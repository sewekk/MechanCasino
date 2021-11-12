class Game {
    constructor(start){
        this.stats = new Statistics();
        this.wallet = new Wallet(start);
        document.querySelector('.button i').addEventListener('click', this.startGame.bind(this));
        this.spanWallet =document.querySelector('h1.wallet');
        this.boards = [...document.querySelectorAll('.game article')];
        this.input = document.querySelector('.input input');
        

        this.render();

    }
    render(money = this.wallet.getWalletValue(), img=['logo.png','nerd.png','pila.png']){
     this.spanWallet.textContent = `Ilosc pieniędzy: ${money}`;
     ajaxcall(money);
     this.boards.forEach((board, index) =>{
         board.innerHTML = `<img src="bandytazdjecia/${img[index]}">`;
     })
     this.stats.showGameStatiscs();
    
    
    }
    startGame(){
        if(this.input.value <1) return alert("kwota która chcesz grac jest za mała");
        const bid = Math.floor(this.input.value);

        if(!this.wallet.checkCanPlay(bid)){
            return alert('masz za malo srodkow lub podana zostala nieprawidlowa wartosc');
        }
        this.wallet.changeWallet(bid, "-");
        this.draw = new Draw();
        const imgs =  this.draw.getDrawResult();
        const win = Result.checkWinner(imgs);
        const wonMoney = Result.moneyWinInGame(win,bid);
        this.wallet.changeWallet(wonMoney);
        this.stats.addGametoStatistics(win);

        this.render(this.wallet.getWalletValue(), imgs)
        
    }
}
