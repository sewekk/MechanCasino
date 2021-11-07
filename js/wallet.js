class Wallet {
    constructor(money){
        let _money = money;
        //dowloading current wallet value
        this.getWalletValue = () => _money;
        //check that user have a enought money for play
        this.checkCanPlay = (value) =>{
            if(_money >= value) return true;
            else {
                return false;
            }
        }
        this.changeWallet = (value, type="+")=>{
            if(typeof value === "number" && !isNaN(value)){
                if(type === "+"){
                    return _money +=value;
                }
                else if(type="-"){
                    return _money-= value;
                }
                else{
                    throw new Error("nieprawidłowy typ dzialania");
                }
            }
            else{
                console.log(typeof value);
                throw new Error ("nieprawidłowa liczba");
            }
        }

    }

}
