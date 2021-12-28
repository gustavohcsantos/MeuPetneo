function validar_campo(){

}

function calcular_tamanho_roupa_pet(){
    let pet = {
        torax:       parseFloat(document.getElementById("torax")),
        pescoco:     parseFloat(document.getElementById("pescoco")),
        comprimento: parseFloat(document.getElementById("comprimento")),
        peso:        parseFloat(document.getElementById("peso"))
    }

    let msg = "";

    if((pet.torax <= 26 ) &&
       (pet.comprimento <= 23) &&
       (pet.pescoco <= 20 ) &&
       (pet.peso <= 2)){
        msg = "TAMANHO: 01 | Pincher, Chihuahua, filhotes";
        return msg;
    }
    
    if(((pet.torax > 26) && (pet.torax <= 36 )) &&
       ((pet.comprimento > 23) && (pet.comprimento <= 25)) &&
       ((pet.pescoco > 20) && (pet.pescoco <= 24)) &&
       ((pet.peso > 2) && (pet.peso <= 4))){
        msg = "TAMANHO: 02 | Poodle Mini Toy, Yorkshire, Filhotes";
        return msg;
    }
    
    if(((pet.torax > 36) && (pet.torax <= 40 )) &&
       ((pet.comprimento > 25) && (pet.comprimento <= 31)) &&
       ((pet.pescoco > 24) && (pet.pescoco <= 26)) &&
       ((pet.peso > 4) && (pet.peso <= 6))){
        msg = "TAMANHO: 03 | Poodle Toy, Yorkshire, Shih-tzu, Maltês. Jack Russel";
        return msg;
    }
    
    if(((pet.torax > 40) && (pet.torax <= 48 )) &&
       ((pet.comprimento > 31) && (pet.comprimento <= 33)) &&
       ((pet.pescoco > 26) && (pet.pescoco <= 32)) &&
       ((pet.peso > 6) && (pet.peso <= 9))){
        msg = "TAMANHO: 04 | Poodle Toy, Yorkshire, Maltês, Lhasa, Dachshund, Bichon Frisé, Shih-tzu";
        return msg;
    }
    
    if(((pet.torax > 48) && (pet.torax <= 52) ) &&
       ((pet.comprimento > 33) && (pet.comprimento <= 36)) &&
       ((pet.pescoco > 32) && (pet.pescoco <= 35)) &&
       ((pet.peso > 9) && (pet.peso <= 12))){
        msg = "TAMANHO: 05 | Poodle, Buldog Francês, Pug, Bichon, Schnguzer, Beagle, Westie, SRD";
        return msg;
    }
    
    if(((pet.torax > 52) && (pet.torax <= 60)) &&
       ((pet.comprimento > 36) && (pet.comprimento <= 42)) &&
       ((pet.pescoco > 35) && (pet.pescoco <= 36)) &&
       ((pet.peso > 12) && (pet.peso <= 15))){
        msg = "TAMANHO: 06 | Buldog Francês, Cocker Espanhol, Beagle, SRD";
        return msg;
    }
    
    if(((pet.torax > 60) && (pet.torax <= 62)) &&
       ((pet.comprimento > 42) && (pet.comprimento <= 53)) &&
       ((pet.pescoco > 36) && (pet.pescoco <= 37)) &&
       ((pet.peso > 15) && (pet.peso <= 22))){
        msg = "TAMANHO: 07 | Pit Bull, Barder Collie, Boxer, Bull Terrier, SRD";
        return msg;
    }
    
    if(((pet.torax > 62) && (pet.torax <= 69)) &&
       ((pet.comprimento > 53) && (pet.comprimento <= 63)) &&
       ((pet.pescoco > 37) && (pet.pescoco <= 40)) &&
       ((pet.peso > 22) && (pet.peso <= 32))){
        msg = "TAMANHO: 08 | Pit Bull, Barder Collie, Boxer, Labrador, Golden Retriever, SRD";
        return msg;
    }
    
    if(((pet.torax > 69) && (pet.torax <= 80)) &&
       ((pet.comprimento > 63) && (pet.comprimento <= 73)) &&
       ((pet.pescoco > 40) && (pet.pescoco <= 48)) &&
       ((pet.peso > 32) && (pet.peso <= 55))){
        msg = "TAMANHO: 09 | Pastor Alemão, Boxer, Labrador, Golden Retriever, Bernese, SRD";
        return msg;
    }
    
    if(((pet.torax > 80) && (pet.torax <= 90)) &&
       ((pet.comprimento > 73) && (pet.comprimento <= 78)) &&
       ((pet.pescoco > 48) && (pet.pescoco <= 52)) &&
       ((pet.peso > 55) && (pet.peso <= 75))){
        msg = "TAMANHO: 10 | São Bernardo, Mastif";
        return msg;
    }
}