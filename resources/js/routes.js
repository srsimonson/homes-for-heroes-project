import PersonsTable from './PersonsTable.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: PersonsTable
    },
    {
        name: 'add',
        path: '/add',
        component: PersonsTable
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: PersonsTable
    }
];