<template>
  <div class="admin">
    <div class="control text-center">
      <div class="language_buttons"></div>
      <br />
      <div class="pages_buttons">
        <button
          @click="
            () => {
              first_seen = !first_seen;
            }
          "
        >
          ფიზიკური პირის ცნობარი
        </button>
      </div>
    </div>
    <div class="first_button" v-if="first_seen">
      <div class="first_button">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <ValidationObserver>
                <form
                  method="post"
                  action="/addapartment"
                  enctype="multipart/form-data"
                  name="apartment"
                >
                  <input type="hidden" name="_token" :value="csrf" />

                  <div class="form-floating" style="display: none">
                    <input
                      type="text"
                      name="id"
                      id="floatingInput1"
                      class="form-control"
                      v-model="id"
                    />
                  </div>

                  <ValidationProvider
                    rules="required|max:50|min:2"
                    v-slot="{ errors }"
                    name="username"
                  >
                    <div class="form-floating">
                      <input
                        type="text"
                        name="username"
                        id="floatingInput1"
                        class="form-control"
                        v-model="username"
                        placeholder="username"
                      />
                      <span>{{ errors[0] }}</span>
                      <label for="floatingInput">Username</label>
                    </div>
                  </ValidationProvider>
                  <ValidationProvider
                    name="lastname"
                    rules="required|max:50|min:2"
                    v-slot="{ errors }"
                  >
                    <div class="form-floating">
                      <input
                        type="text"
                        name="lastname"
                        id="floatingInput2"
                        class="form-control"
                        v-model="lastname"
                        placeholder="lastname"
                      />
                      <span>{{ errors[0] }}</span>
                      <label for="floatingInput">Lastname</label>
                    </div>
                  </ValidationProvider>

                  <ValidationProvider
                    name="gender"
                    rules="required|min:11|max:0"
                    v-slot="{ errors }"
                  >
                    <div class="form-floating">
                      <select
                        type="text"
                        name="gender"
                        id="floatingInput3"
                        class="form-control"
                        v-model="gender"
                        placeholder="gender"
                      >
                        <option value="woman">woman</option>
                        <option value="man">man</option>
                      </select>
                      <span>{{ errors[0] }}</span>
                      <label for="floatingInput">gender</label>
                    </div>
                  </ValidationProvider>

                  <ValidationProvider
                    name="private_number"
                    v-slot="{ errors }"
                    rules="required|min:11"
                  >
                    <div class="form-floating">
                      <input
                        type="text"
                        name="private_number"
                        id="floatingInput4"
                        class="form-control"
                        v-model="private_number"
                        placeholder="private_number"
                      />
                      <span>{{ errors[0] }}</span>
                      <label for="floatingInput">private_number</label>
                    </div>
                  </ValidationProvider>

                  <ValidationProvider
                    name="birth_date"
                    rules="required|between:18,200"
                    v-slot="{ errors }"
                  >
                    <div class="form-floating">
                      <input
                        name="birth_date"
                        type="number"
                        id="floatingInput5"
                        class="form-control"
                        v-model="birth_date"
                        placeholder="birth_date"
                      />
                      <span>{{ errors[0] }}</span>
                      <label for="floatingInput">birth_date</label>
                    </div>
                  </ValidationProvider>

                  <div class="phone" style="display: flex">
                    <ValidationProvider
                      style="width: 200px"
                      name="phone_type"
                      rules="required"
                      v-slot="{ errors }"
                    >
                      <div class="form-floating">
                        <select
                          type="text"
                          name="phone_type"
                          id="floatingInput3"
                          class="form-control"
                          v-model="phone_type"
                          placeholder="phone_type"
                        >
                          <option value="mobile">mobile</option>
                          <option value="office">office</option>
                          <option value="home">home</option>
                        </select>
                        <span>{{ errors[0] }}</span>
                        <label for="floatingInput">phone_type</label>
                      </div>
                    </ValidationProvider>

                    <ValidationProvider
                      name="phone"
                      rules="required|min:4|max:50"
                      v-slot="{ errors }"
                    >
                      <div class="form-floating">
                        <input
                          name="phone"
                          type="text"
                          id="floatingInput5"
                          class="form-control"
                          v-model="phone"
                          placeholder="phone"
                        />
                        <span>{{ errors[0] }}</span>
                        <label for="floatingInput">phone</label>
                      </div>
                    </ValidationProvider>
                  </div>

                  <div class="person" style="display: flex">
                    <ValidationProvider
                      style="width: 200px"
                      name="connection_type"
                      rules="required"
                      v-slot="{ errors }"
                    >
                      <div class="form-floating">
                        <select
                          type="text"
                          name="connection_type"
                          id="floatingInput3"
                          class="form-control"
                          v-model="connection_type"
                          placeholder="connection_type"
                        >
                          <option value="collegue">collegue</option>
                          <option value="acquaintance">acquaintance</option>
                          <option value="relative">Relative</option>
                          <option value="other">other</option>
                        </select>
                        <span>{{ errors[0] }}</span>
                        <label for="floatingInput">connection_type</label>
                      </div>
                    </ValidationProvider>

                    <ValidationProvider
                      name="person_number"
                      rules="required"
                      v-slot="{ errors }"
                    >
                      <div class="form-floating">
                        <input
                          name="person_number"
                          type="text"
                          id="floatingInput5"
                          class="form-control"
                          v-model="person_number"
                          placeholder="person_number"
                        />
                        <span>{{ errors[0] }}</span>
                        <label for="floatingInput">person_number</label>
                      </div>
                    </ValidationProvider>
                  </div>

                  <div class="language_buttons">
                    <button @click="add_apartment()">
                      {{ $t("add_submit") }}
                    </button>
                  </div>

                  <!-- <input
                    type="text"
                    v-model="lang"
                    name="lang"
                    style="display: none"
                  /> -->
                </form>
              </ValidationObserver>
            </div>
            <div class="col-lg-6">
              <div class="edit_delete">
                <ol>
                  <li
                    v-for="(post, index) in posts"
                    :key="index"
                    style="margin-bottom: 20px"
                  >
                    <p>
                      <b>username</b
                      >: {{ post.username }}
                    </p>
                    <p>
                      <b>lastname</b
                      >: {{ post.lastname }}
                    </p>
                    <p>
                      <b>gender</b
                      >: {{ post.gender }}
                    </p>
                    <p>
                      <b>private_number</b
                      >: {{ post.private_number }}
                    </p>
                    <p>
                      <b>birth_date</b
                      >: {{ post.birth_date }}
                    </p>
                    <p>
                      <b>phone_type</b
                      >: {{ post.phone_type }}
                    </p>
                    <p>
                      <b>phone</b
                      >: {{ post.phone }}
                    </p>
                    <p>
                      <b>connection_type</b
                      >: {{ post.connection_type }}
                    </p>
                    <p>
                      <b>person_number</b
                      >: {{ post.person_number }}
                    </p>
                    <button v-on:click="edit_data(post.id)">
                      {{ $t("edit") }}
                    </button>
                    <button v-on:click="delete_data(post.id, index)">
                      {{ $t("delete") }}
                    </button>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// import i18n from "../../i18n.js";
// import { localize } from "vee-validate";

export default {
  name: "adminpage",
  props: {
    posts: {
      type: Array,
      required: true,
    },
  },

  data() {
    return {
      //buildings data
      id: "",

      username: "",
      lastname: "",
      gender: "",
      private_number: "",
      phone_type: "",
      birth_date:"",
      phone: "",
      connection_type: "",
      person_number: "",

      update: false,
      update_blog: false,
      update_employees: false,
      update_ad: false,

      first_seen: "",

      //token to access post method
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
    };
  },
  mounted() {
    console.log(this.buildings);
    if (localStorage.getItem("lang") !== null) {
      this.lang = localStorage.getItem("lang");
      localStorage.setItem("pre_lang", this.lang);
      localStorage.removeItem("lang");
    } else {
      this.lang = "ka";
      if (localStorage.getItem("pre_lang") === "en") {
        this.lang = "en";
      } else if (localStorage.getItem("pre_lang") === "ru") {
        this.lang = "ru";
      }
    }
  },
  methods: {

    add_apartment() {
      if (this.update == false) {
        console.log("insert");
        document.apartment.action = "/addapartment";
      } else {
        console.log("update");
        document.apartment.action = "/updateapartment";
        this.update_data();
      }
    },

    delete_data(id, index) {
      var url = "http://127.0.0.1:8000/deleteapartment";
      var params = "id=" + id;
      var http = new XMLHttpRequest();

      http.open("POST", "/deleteapartment", true);
      http.setRequestHeader("Accept", "application/json");
      http.setRequestHeader("x-csrf-token", this.csrf);
      console.log(this.csrf);
      http.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded; charset=utf-8"
      );
      http.send(params);
      this.$router.go(0);
    },

    edit_data(id) {

      this.posts.forEach((element) => {
        if (element.id == id) {
          this.id = id;
          this.username = element.username;
          this.lastname = element.lastname;
          this.gender = element.gender;
          this.private_number = element.private_number;
          this.birth_date = element.birth_date;
          this.phone_type = element.phone_type;
          this.phone = element.phone;
          this.connection_type = element.connection_type;
          this.person_number = element.person_number;

          this.update = true;
        }
      });
    },

    update_data() {
      this.posts.forEach((element) => {
        if (element.id == this.id) {
          console.log(id);
          // const database_img_path = element.building_image
          //   .split("$")
          //   .slice(0, -1);
          // const input_img_path = this.building_image.split("$").slice(0, -1);

          // database_img_path.forEach((db_img) => {
          //   input_img_path.forEach((input_img) => {
          //     if (db_img == input_img) {
          //       delete_status = false;
          //     }
          //   });
          //   if (delete_status) {
          //     delete_img += db_img + "$";
          //   }
          // });
        }
      });
    },
  },
};
</script>

<style scoped>
.edit_delete li {
  margin: 20px;
  padding: 15px;
  width: 600px;
}
.edit_delete button {
  background: none;
  border: 2px solid #1b6572;
  border-radius: 10px;
  padding: 10px;
  color: black;
  transition: 0.3s;
}
.language_buttons button:hover,
.edit_delete button:hover {
  background: teal;
  border: 2px solid transparent;
  color: white;
  transition: 0.3s;
}

.pages_buttons button {
  display: block;
  border: 2px solid black;
  margin: auto;
  margin-bottom: 10px;
  padding: 10px;
  background: none;
  border-radius: 10px;
  color: black;
  transition: 0.3s;
  height: 50px;
  width: 300px;
}
.pages_buttons button:hover {
  background: teal;
  border: 2px solid transparent;
  color: white;
  transition: 0.3s;
}
input,
textarea,
select {
  margin-bottom: 20px;
}

input:focus,
select:focus {
  box-shadow: none;
}

.form-floating span {
  color: red;
}

.second_button input:focus,
textarea:focus {
  box-shadow: none;
  border: 1px solid #dadada;
}

textarea {
  width: 100%;
  height: 400px !important;
}
.rules {
  border-radius: 20px;
  margin: 20px;
  padding: 10px;
}
.rules ol {
  text-align: justify;
  margin: 30px;
}
</style>
