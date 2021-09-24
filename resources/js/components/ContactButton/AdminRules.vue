<template>
  <div>
    <div v-if="showModalOne">
      <div class="backdrop" @click.self="toggleModalOne">
        <div class="modal_div">
          <button v-on:click="showModalOne = !showModalOne">
            <div class="mdiv">
              <div class="md"></div>
            </div>
          </button>
          <b-container>
            <b-row>
              <b-col cols="12">
                <h3 class="text-center">ინსტრუქციები:</h3>
                <ol>
                  <li>
                    <b style="color: #f02849"
                      >ნებისმიერი კომპონენტის დამატებისას უნდა
                      გავითვალისწინოთ:</b
                    >
                    თითოეული კომპონენტი უნდა დავამატოთ სამივე ენაზე
                    თანმიმდევრობით
                  </li>
                  <li>
                    <b style="color: #f02849">
                      ნებისმიერი კომპონენტის წაშლისას უნდა გავითვალისწინოთ:</b
                    >
                    თითოეული კომპონენტი უნდა წავშალოთ სამივე ენაზე
                    თანმიმდევრობით
                  </li>
                  <li>
                    შევავსოთ ყველა სავალდებულო ველი,<b style="color: #f02849">
                      წინააღმდეგ შემთხვევაში კომპონენტი არ დაემატება</b
                    >
                  </li>
                  <li>
                    ფოტოების დამატების რაოდენობა <b style="color:#F02849">შეზღუდულია</b> ერთამდე გარდა
                    პროექტებისა
                  </li>
                </ol>
              </b-col>
            </b-row>
          </b-container>
        </div>
      </div>
    </div>

    <div class="soc_button">
      <button v-on:click="toggleModalOne" class="button">ინსტრუქცია</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "ContactButton",
  data() {
    return {
      showModalOne: false,
    };
  },
  methods: {
    toggleModalOne() {
      this.showModalOne = !this.showModalOne;
    },
  },
};
</script>

<style scoped>
/* scroll style */
::-webkit-scrollbar {
  width: 10px;
  display: none !important;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 20px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #a6998a;
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #747272;
}
/* scroll style */

::v-deep .owl-carousel {
  position: inherit !important;
}

.backdrop {
  top: 0;
  position: fixed !important;
  background: rgba(0, 0, 0, 0.5);
  width: 100%;
  height: 100%;
  z-index: 1050;
  overflow: auto;
  left: 0;
}
.modal_div {
  width: 500px;
  padding: 10px;
  margin: 100px auto;
  background: #f2f5fa;
  border-radius: 20px;
}
.modal_div button {
  width: 40px;
  height: 40px;
  font-size: 2vw;
  background: none;
  border: none;
  transition: 0.3s;
}
.modal_div li {
  margin-bottom: 20px;
}
.mdiv {
  height: 25px;
  width: 2px;
  margin-left: 12px;
  background-color: black;
  transform: rotate(45deg);
  z-index: 1;
}

.md {
  height: 25px;
  width: 2px;
  background-color: black;
  transform: rotate(90deg);
  z-index: 2;
}

.soc_button {
  position: fixed;
  text-align: right !important;
  right: 0;
  transform: translateY(-50%);
  top: 50%;
  color: white;
  z-index: 999;
  height: auto;
}
.button {
  background: #f02849;
  padding: 20px;
  cursor: pointer;
  border: none;
  transition: 0.5s;
  background-size: 200% auto;
  box-shadow: inset 8px 8px 8px #a01a30, inset -8px -8px 8px #f56f85;
  border-radius: 50px;
  display: block;
  color: white;
}

@media all and (max-width: 500px) {
  .modal_div {
    width: 400px;
  }
}
@media all and (max-width: 400px) {
  .modal_div {
    width: 300px;
  }
}
@media all and (max-width: 300px) {
  .modal_div {
    width: 250px;
  }
}
</style>