<template>
  <div class="containter-fluid">
    <div
      class="row text-white"
      style="background-color: #888888; padding: 1rem"
    >
      <div
        class="col-1 d-flex d-sm-none align-items-center justify-content-center"
      >
        <span @click="showDrawer()">
          <font-awesome-icon icon="align-justify" />
        </span>
      </div>

      <div
        class="
          col-10 col-sm-9
          d-flex
          align-items-center
          justify-content-center justify-content-sm-start
        "
      >
        <img
          src="https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/ft-logo.webp"
          alt="Logo"
          height="70"
          width="200"
          class="ms-5 me-5"
        />
        <span class="d-none d-sm-flex">QUẢN TRỊ</span>
      </div>

      <div
        class="
          col-sm-3
          d-none d-sm-flex
          align-items-center
          justify-content-sm-end
        "
      >
        <span>Admin</span>
      </div>

      <div
        class="col-1 d-flex d-sm-none align-items-center justify-content-center"
      >
        <span @click="showDrawerUser()">
          <font-awesome-icon icon="user" />
        </span>
      </div>
    </div>
  </div>

  <a-drawer v-model:visible="visible" title="DANH MỤC" placement="left">
    <TheMenu />
  </a-drawer>

  <a-drawer v-model:visible="visible_user" title="ADMIN" placement="right">
    <p>Some contents...</p>
    <p>Some contents...</p>
    <p>Some contents...</p>
  </a-drawer>
</template>

<script>
import TheMenu from "../components/TheMenu.vue";
import { defineComponent, ref } from "vue";
export default defineComponent({
  components: {
    TheMenu,
  },
  setup() {
    const visible = ref(false);
    const visible_user = ref(false);

    const showDrawer = () => {
      visible.value = true;
    };

    const showDrawerUser = () => {
      visible_user.value = true;
    };

    return {
      visible,
      visible_user,
      showDrawer,
      showDrawerUser,
    };
  },
});
</script>