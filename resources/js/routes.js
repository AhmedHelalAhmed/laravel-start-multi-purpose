import Dashboard from './components/Dashboard.vue'
import Test from './components/Test.vue'
import Users from './components/Users.vue'

export default [
    {
        path: "/dashboard",
        name: 'dashboard',
        component: Dashboard,
        meta: {
        }
    },
    {
        path: "/test",
        name: 'test',
        component: Test,
        meta: {
        }
    },
    {
        path: "/users",
        name: 'users.index',
        component: Users,
        meta: {
        }
    },

]
