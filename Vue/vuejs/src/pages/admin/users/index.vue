<template>
    Đây là Trang quản lý User
</template>

<script>
import { useMenu } from "../../../stores/use-menu.js";
export default {
    setup() {
        useMenu().onSelectedKeys(["admin-users"]);
    },
}
</script>