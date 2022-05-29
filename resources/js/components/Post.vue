<template>
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card m-2 p-2">
      <img
        :src="post.image_url"
        class="card-img-top"
        :alt="'image of ' + post.title"
      />
      <div class="card-body">
        <div class="card-title">
          {{ post.title }}
        </div>
        <div class="card-subtitle">
          {{ post.user_id }}
        </div>
        <div class="card-text">
          {{ post.content.substring(0, 200) }}
        </div>
        <div class="card-footer">
          Il post è stato creato il {{ post.created_at }}
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Post",
  props: ["post"],
};
</script>

<style lang="scss" scoped>
div.col-4 {
  img {
    width: 90%;
    margin: 0 auto;
  }
}
</style>
