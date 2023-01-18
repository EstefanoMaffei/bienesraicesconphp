

const boxSobreNosotros = document.querySelector('.sobre-nosotros_boxes');
const departamentosCasasBox = document.querySelector('.departamentos-casas_box');
const crearHTML = document.querySelector('body');
const darkMode = document.getElementById('darkMode');
const btnHamburguesa = document.getElementById('menuHamburguesa');

const nombresDepartamentos = [

     departamento1 = 
          { nombre:           'Casa en el Lago',        
            precio :          3000000, 
            src :             'build/img/anuncio1.jpg', 
            baño:             3,
            estacionamiento:  1,
            dormitorio :      4,
          },

     departamento2 = 
          { nombre :          'Casa terminado de lujo', 
            precio :          2000000, 
            src :             'build/img/anuncio2.jpg', 
            baño:             3,
            estacionamiento:  1,
            dormitorio :      4,
          },

     departamento3 = 
          { nombre : 'Casa con Alberca', 
            precio : 2000000, 
            src : 'build/img/anuncio3.jpg', 
            baño:             3,
            estacionamiento:  1,
            dormitorio :      4,
          },
     
];

const crearHtmlCompleto = ()=>{
     crearBoxSobreNosotros();
     crearCasasEnVenta();
};

/* Adding an event listener to the btnHamburguesa element. When the element is clicked, it will toggle
the
mostrar class on the navegacion element. */
btnHamburguesa.addEventListener('click',()=>{
     navegacion = document.querySelector('.header-navegacion_ul');
     texto      = document.querySelector('header-texto');

     if(navegacion.classList.contains('mostrar')){
          navegacion.classList.remove('mostrar');
     }else{
          navegacion.classList.add('mostrar');



     }

})

/* Adding an event listener to the darkMode element. When the element is clicked, it will toggle the
darkMode class on the crearHTML element. */
darkMode.addEventListener('click',()=>{
     crearHTML.classList.toggle('darkMode');
})

/**
 * This function creates a div element, adds a class to it, and then adds some HTML to it. It then
 * appends the div to the boxSobreNosotros element.
 */

const crearBoxSobreNosotros = () => {
     for(let i = 1; i <= 3; i++){
          let box = document.createElement('div');
          box.classList.add('sobre-nosotros_box');

          box.innerHTML = `
               <img src="build/img/icono${i}.svg" alt="icono${i}">
               <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
          `
          
          boxSobreNosotros.appendChild(box);
     }


}

/**
 * It creates a div element, adds a class to it, then adds some HTML to it, and finally appends it to
 * the DOM.
 */
const crearCasasEnVenta = () => {

     nombresDepartamentos.forEach(e => {
          let box = document.createElement('div');
          box.classList.add('departamento-casas_completo');
          
          box.innerHTML = `
          
          <div class="departamento-img">
               <img src="${e.src}" alt="${e.nombre}">
          </div>
           <div class="departamento-texto"> 
               <h3>${e.nombre}</h3>
     
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil assumenda sequi dolore qui corrupti amet non quis ratione omnis. Provident unde fuga error in neque ducimus repellendus iste dolor? Delectus.</p>
     
               <h4>Precio: <span class="texto-verde">${e.precio}</span></h4>
          </div>

          <div class="departamento-icono">
               <div class="departamento-icono-dormitorio"> 
               <img src="build/img/icono_dormitorio.svg" alt="Anuncio 1"> <p>${e.dormitorio}</p>
               </div>
               <div class="departamento-icono-baño">
               <img src="build/img/icono_wc.svg" alt="Anuncio 1">     <p>${e.baño}</p>
               </div>
               <div class="departamento-icono-estacionamiento">
               <img src="build/img/icono_estacionamiento.svg" alt="Anuncio 1"><p>${e.estacionamiento}</p>
               </div>
          </div>

          <div>
               <button class="btn-verde">ver Anuncio</button>
          </div>
          `
          
          departamentosCasasBox.appendChild(box);
          
     });

}



crearHtmlCompleto();