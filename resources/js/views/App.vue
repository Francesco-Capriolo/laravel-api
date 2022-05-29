<template>
  <div>
    <postlist />
  </div>
</template>

<script>
import Postlist from "../components/Postlist.vue";

export default {
  name: "App",
  data: function () {
    return {
      postlist: [],
    };
  },
  components: {
    Postlist,
  },
};
</script>

<style lang="scss" scoped>
</style>
