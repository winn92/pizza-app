<template>
  <div>
    <b-row>
      <b-col md="4" class="mt-2" v-for="topping in toppings" :key="topping.id">
        <b-card-group deck>
          <b-card :title="topping.name" header-tag="header" footer-tag="footer">
            <b-button @click="deleteTopping(topping.id)" variant="danger">Delete</b-button>
          </b-card>
        </b-card-group>
      </b-col>
    </b-row>
  </div>
</template>

<script>
export default {
  data(){
    return {
      toppings:[],
      selectedPizza:null,
    }
  },

  mounted() {
    axios.get('/api/v1/toppings').then(({data})=>{
          this.toppings=data;
        },(error)=>{
            console.log(error)
        });
  },
  methods: {
    deleteTopping(toppingId){
      axios.delete("/api/v1/toppings/"+toppingId).then(({data})=>{
        this.toppings=this.toppings.filter(topping => topping.id != toppingId );
      },(error)=>{
            console.log(error)
        });  
      
    }
    
  },
  computed: {
    
  }
};
</script>

<style lang="scss">
</style>
