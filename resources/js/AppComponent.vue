<template>
  <div id="app">
    <b-navbar type="dark" variant="dark">
      <b-navbar-nav>
        <b-nav-item href="#">UI</b-nav-item>

        <!--<b-nav-item-dropdown text="Projects" left>
          <b-dropdown-item ex to="/projects">List</b-dropdown-item>
          <b-dropdown-item to="/projects/create">Create</b-dropdown-item>
        </b-nav-item-dropdown>

        <b-nav-item-dropdown text="Tasks" left>
          <b-dropdown-item to="/tasks">List</b-dropdown-item>
          <b-dropdown-item to="/tasks/create">Create</b-dropdown-item>
        </b-nav-item-dropdown>-->
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
