import { createApp } from "https://unpkg.com/vue@3/dist/vue.esm-browser.js";

createApp({
  data() {
    return {
      // Vriables
      apiUrl: "http://localhost:8888/php-oop-2/index.php", // Api url adress
      productsList: [], // Store the all products list
      dogProductsList: [], // Store the dog products list
      catProductsList: [], // Store the cat products list
      email: "", // Store email from input
      submit: false, // Flag
    };
  },

  methods: {
    // Get api's
    getCategoriesList() {
      axios
        .get(this.apiUrl)
        .then((response) => {
          // handle success
          this.dogProductsList = response.data.dogProducts; // Store dog products
          this.catProductsList = response.data.catProducts; // Store dog products
          // Store all products list
          this.productsList = this.dogProductsList.concat(this.catProductsList);

          console.log(this.productsList); // Console Test
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

    // Set submiters
    isSubmit() {
      if (this.email && this.email.length > 2) {
        this.submit = true;
      }
    },

    // Get dog products list
    getDogProductsList() {
      this.productsList = this.dogProductsList;
      console.log(this.productsList);
    },
    // Get cat products list
    getCatProductsList() {
      this.productsList = this.catProductsList;
    },
  },

  created() {
    this.getCategoriesList();
  },
}).mount("#app");
