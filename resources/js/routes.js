import { createRouterMatcher } from 'vue-router'

const Home = ()=> import('./components/Home.vue');
const contacto = ()=> import('./components/contacto.vue');

// Importamos los componentes del CRUD
const Crear = ()=> import('./components/matricula/Crear.vue');
const Mostrar = ()=> import('./components/matricula/Mostrar.vue');
const Eliminar = ()=> import('./components/matricula/Eliminar.vue');

export const routes =[
    {
        name:'home',
        path:'/',
        components:Home
    },

    {
        name:'contacto',
        path:'/contacto',
        components:Contacto
    },

    {
        name:'mostrarmatricula',
        path:'/matricula',
        components:MostrarMatricula
    },

    {
        name:'crearmatricula',
        path:'/crear',
        components:Crearmatricula
    },

    {
        name:'editarmatricula',
        path:'/editar/:id',
        components:Editarmatricula
    },



]
