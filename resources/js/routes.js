import VueRouter from "vue-router";
import ExampleComponent from "./components/ExampleComponent";
import bookables from "./bookables/Bookables";


const routes = [
    {
        path: "/",
        component: bookables,
        name: "home",

    },
    {
        path: "/second",
        component: ExampleComponent,
        name: "second",
    },
];

const router = new VueRouter({
    mode: "history",
    routes: routes,
})

export default router;
