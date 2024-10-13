import { createApp } from "https://unpkg.com/vue@3/dist/vue.esm-browser.js";

createApp({
  data() {
    return {
      // Vriables
      allProductsApiUrl:
        "http://localhost:8888/php-oop-2/api/AllProductsList.php", // Api url adress
      allProductsList: [], // Store all products
    };
  },

  methods: {
    // Get api's
    getAllProductsList() {
      axios
        .get(this.allProductsApiUrl)
        .then((response) => {
          // handle success
          console.log(response.data); // Console Test
          this.allProductsList = response.data;
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
    this.getAllProductsList();
  },
}).mount("#app");
