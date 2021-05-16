import { createStore } from 'vuex'
import core from "./modules/core.ts";
import survey from "./modules/survey.ts";

const store = createStore({
   modules: {
      core,
      survey,
   },
})
export default store