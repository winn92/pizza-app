<template>
  <div id="app">
    <b-navbar type="dark" variant="dark">
      <b-navbar-nav>
        <b-nav-item href="#">UI</b-nav-item>

        <b-nav-item-dropdown text="Pizzas" left>
          <b-dropdown-item ex to="/pizzas">List</b-dropdown-item>
          <!--<b-dropdown-item to="/projects/create">Create</b-dropdown-item>-->
        </b-nav-item-dropdown>

        <b-nav-item-dropdown text="Toppings" left>
          <b-dropdown-item to="/toppings">List</b-dropdown-item>
          <b-dropdown-item to="/toppings/create">Create</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-navbar>
    <router-view />
  </div>
</template>

<script>
export default {
  methods: {},
  computed: {
    
  },
  components: {
    
  }
};
</script>

<style lang="scss"></style>
