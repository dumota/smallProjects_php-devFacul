export class Lista extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
       const ul = document.createElement('ul');
       let props = this.getAttribute('lista').split('.');
       props.map((f)=>{
        
        let template = `<li>${props[1]}</li>`;

        ul.innerHTML = template;
        
       })
       this.appendChild(ul);
    }
}