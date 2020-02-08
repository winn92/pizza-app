<template>
  <div>
    <b-row>
      <b-col md="4" class="mb-4">
        <b-list-group>
          <!--<b-list-group-item active>Dapibus ac facilisis in</b-list-group-item>-->
          <b-list-group-item v-for="pizza in pizzas">{{pizza.name}}</b-list-group-item>
        </b-list-group>
      </b-col>
    </b-row>
  </div>
</template>

<script>
export default {
  data(){
    return {
      pizzas:[]
    }
  },

  mounted() {
    axios.get('/api/v1/pizzas').then(({data})=>{
          this.pizzas=data;
        },(error)=>{
            console.log(error)
        })
  },
  methods: {
    
  },
  computed: {
    
  }
};
</script>

<style lang="scss">
</style>
