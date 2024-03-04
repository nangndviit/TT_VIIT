const admin = [
    {
        path: "/admin",
        component: () => import("../admin/layouts/admin.vue"),
        children:[
            {
                path: "user",
                name: "admin-users",
                component: () => import("../admin/pages/users/users.vue")

            }
        ]
    }
];

export default admin;
