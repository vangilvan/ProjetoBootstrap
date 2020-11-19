function exibir_categoria(categoria){
    let elementos = document.getElementsByClassName("box_produto");
    for(i=0;i<elementos.length;i++){
       
        if(categoria == elementos[i].id){
            elementos[i].style = "display:inline-block";
        }
        else{
            elementos[i].style = "display:none"; 
        }
    }
}

let exibir_todos = () =>{
    let elementos = document.getElementsByClassName("box_produto");
    for(i=0;i<elementos.length;i++){
       elementos[i].style = "display:inline-block";
    }
};

let destaque = (imagem) =>{
   if(imagem.width == 240) imagem.width = 120;
   else imagem.width = 240;
};

let changeColor = (link) =>{
    link.style = "color:#000";
}
let backColor = (link) =>{
    link.style = "color:#fff";
}


let upProd = (item) => {    
    item.style="transform: scale(1.10); transition: transform 0.15s; background-color: #fff; box-shadow: 1px 2px 15px #fff";
}

let downProd = (item) => {
    item.style="transform: scale(1.0); transition: transform 0.2s;";
}

let sidebarUp = (categoria) =>{
    categoria.style = "text-decoration:underline";
}

let sidebarDown = (categoria) =>{
    categoria.style = "text-decoration:none";
}