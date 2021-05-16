<template>
   <div>
      {{hello}}
   </div>
</template>

<script>
import {mapState} from "vuex";

export default {
   name: "MkStructure",
   mounted: function() {
      let instance = axios.create({
         baseURL: '/',
         timeout: 15000,
         headers: {
            'Content-Type': 'application/json',
            'x-platform': 'WEB',
         },
      })
      instance.get('/mk/projects')
   },
   computed: mapState({
      hello: state => state.survey.hello,
   })
}
</script>

<style scoped>

</style>