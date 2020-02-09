<template>
    <b-form inline class="ml-2 mt-2" @submit="onSubmit"
        autocomplete="off"
    >
        <label class="mr-sm-2" for="name">Name</label>
        <b-input type="text" id="name" 
            v-model="topping.name"
            aria-describedby="password-help-block"
            placeholder="Enter topping's name"
            auto
        ></b-input>

        <b-button type="submit" variant="primary" :disabled="topping.name.length==0">Save</b-button>
    </b-form>
</template>

<script>
export default {
  data(){
    return {
      topping:{
          name:""
      }
    }
  },

  mounted() {},
  methods: {
    onSubmit(evt) {
        evt.preventDefault()
        axios.post("/api/v1/toppings",this.topping).then(({data})=>{
            this.$router.push('/toppings')   
        },(error)=>{
            console.log(error)
        });
      },
    
  },
  computed: {
    
  }
};
</script>