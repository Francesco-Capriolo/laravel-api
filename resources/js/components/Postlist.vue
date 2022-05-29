<template>
  <div class="container-fluid">
    <div class="row">
      <Post v-for="(post, index) in posts" :key="index" :post="post" />
    </div>
    <nav aria-label="Page navigation">
      <ul class="pagination">
        <li
          class="page-item"
          v-if="pagination.currentPage > 1"
          @click="getPosts(pagination.currentPage - 1)"
        >
          <a class="page-link">Previous</a>
        </li>

        <li class="page-item">
          <a class="page-link">{{ pagination.currentPage }}</a>
        </li>

        <li
          class="page-item"
          v-if="pagination.currentPage < pagination.lastPage"
          @click="getPosts(pagination.currentPage + 1)"
        >
          <a class="page-link">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
import Post from "./Post.vue";
export default {
  name: "Postlist",
  data() {
    return {
      posts: [],
      pagination: {},
    };
  },
  components: {
    Post,
  },
  methods: {
    //getPost: function(){}
    getPosts(page) {
      axios
        .get(`http://localhost:8000/api/posts?page=${page}`)
        // £ axios.get('http://localhost:8000/api/posts?page=' + page)
        .then((result) => {
          console.log(result.data);
          this.posts = result.data.data;
          const { current_page, last_page } = result.data;
          this.pagination = { currentPage: current_page, lastPage: last_page };
          console.log(this.posts);
        })
        .catch((error) => {
          console.warn(error);
        });
    },
  },
  created() {
    this.getPosts(1);
  },
};
</script>

<style lang="scss" scoped>
.pagination {
  justify-content: center;
}
</style>
