import { createApp } from "https://unpkg.com/vue@3/dist/vue.esm-browser.js";

createApp({
  data() {
    return {
      // Vriables
      productsList: [], // Store the all products list
      dogProductsList: [], // Store the dog products list
      catProductsList: [], // Store the cat products list
    };
  },
  methods: {
    getProductsList() {
      axios
        .get("http://localhost:8888/php-oop-2/index.php")
        .then(function (response) {
          // handle success
          this.productsList = response.data; // Store all products
          this.dogProductsList = response.data.dogProducts; // Store dog products
          this.dogProductsList = response.data.catProducts; // Store dog products

          console.log(response.data.catProducts); // Console Test
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        })
        .finally(function () {
          // always executed
          console.log("API geting successfuly");
        });
    },
  },

  created() {
    this.getProductsList();
  },
}).mount("#app");
