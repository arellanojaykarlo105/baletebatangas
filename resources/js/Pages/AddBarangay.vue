<template>
  <form @submit.prevent="addBarangay">
    <div>
      <label for="name">Barangay Name:</label>
      <input type="text" id="name" v-model="barangayName">
    </div>
    <div>
      <label for="description">Description:</label>
      <textarea id="description" v-model="description"></textarea>
    </div>
    <div>
      <button type="submit">Add Barangay</button>
    </div>
  </form>
</template>

<script>
export default {
  data () {
    return {
      barangayName: '',
      description: '',
    };
  },
  methods: {
    addBarangay () {

      this.$inertia.post('/add-barangay', {
        name: this.barangayName,
        description: this.description,
      });
    },
  },
};
</script>
