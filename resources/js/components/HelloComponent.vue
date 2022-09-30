<template>
  <div>string</div>
</template>

<script>
export default {
  created() {
    console.log('hello');
    this.hello();
  },
  methods: {
    async hello() {
      const res = await axios.get("/api/hello");
      console.log(res);
    },
  },
};
</script>