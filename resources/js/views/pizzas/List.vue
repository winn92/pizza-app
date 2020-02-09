<template>
  <div>
    <b-row>
      <b-col md="4" class="mt-2">
        <b-list-group>
          <!--<b-list-group-item active>Dapibus ac facilisis in</b-list-group-item>-->
          <b-list-group-item v-for="pizza in pizzas" :key="pizza.id"
            :active="selectedPizza&&selectedPizza.id==pizza.id"
            @click="getToppings(pizza.id)"
          >{{pizza.name}}</b-list-group-item>
        </b-list-group>
      </b-col>
      <b-col md="8" class="mt-2">
        <b-card 
          v-if="selectedPizza"
          bg-variant="light" text-variant="black" :header="selectedPizza.name" class="text-center">
          <b-card-text>{{textTopping}}</b-card-text>

          <b-form-group label="Add o remove topping">
            <b-form-checkbox-group id="checkbox-group-topping" name="toppings" v-model="selecteds">
              <b-form-checkbox :key="topping.id" :value="topping.id" 
                  @change="check($event,topping.id)"
                  v-for="topping in toppings">{{topping.name}}</b-form-checkbox>
            </b-form-checkbox-group>
          </b-form-group>


        </b-card>
      </b-col>
    </b-row>
  </div>
</template>

<script>
export default {
  data(){
    return {
      pizzas:[],
      toppings:[],
      selectedPizza:null,
      selecteds:[]
    }
  },

  mounted() {
    axios.get('/api/v1/pizzas').then(({data})=>{
          this.pizzas=data;
        },(error)=>{
            console.log(error)
        });

    axios.get('/api/v1/toppings').then(({data})=>{
          this.toppings=data;
        },(error)=>{
            console.log(error)
        });
  },
  methods: {
    getToppings(pizzaId){
      this.selecteds=[];
      axios.get("/api/v1/pizzas/"+pizzaId).then(({data})=>{
        this.selectedPizza=data;
        this.selectedPizza.toppings.forEach(topping => {
          this.selecteds.push(topping.id)
        });
      
      },(error)=>{
            console.log(error)
        });
    },
    check(e,toppingId) {
      if(e===toppingId){
        axios.post("/api/v1/pizzas/"+this.selectedPizza.id+"/toppings",{topping:toppingId}).then(({data})=>{
            this.selectedPizza=data; 
            this.selecteds=[];
            this.selectedPizza.toppings.forEach(topping => {
              this.selecteds.push(topping.id)
            });
        },(error)=>{
            console.log(error)
        });
      }else{
         axios.delete("/api/v1/pizzas/"+this.selectedPizza.id+"/toppings/"+toppingId).then(({data})=>{
            this.selectedPizza=data; 
            this.selecteds=[];
            this.selectedPizza.toppings.forEach(topping => {
              this.selecteds.push(topping.id)
            });
        },(error)=>{
            console.log(error)
        });
      }
    }
  },
  computed: {
    textTopping(){
      let text="it has no toppings";
      if(this.selectedPizza.toppings.length>0){
        text=this.selectedPizza.name+" - topping"+((this.selectedPizza.toppings.length>1)?"s ":": ");
        this.selectedPizza.toppings.forEach(topping =>text+=topping.name+", ");
        text=text.substring(0, text.length - 2);
      }
      return text;
    }
  }
};
</script>

<style lang="scss">
</style>
