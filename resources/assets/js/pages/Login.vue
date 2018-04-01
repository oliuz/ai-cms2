<template>
    <button type="button" @click="login" :class="classComputed">
        <slot></slot>
    </button>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {};
  },
  computed: {
    classComputed() {
      return this.dataClass.split(" ");
    }
  },
  props: {
    dataClass: {
      type: String,
      default: "ui teal right labeled icon button fluid"
    },
    dataOauth: {
      type: String,
      required: true
    }
  },
  methods: {
    login() {
      let data = {
        client_id: 2,
        client_secret: "oRuuEFZH1Kb8pcnY8ubD2MMJBa7TnpyO5U49ueGq",
        grant_type: "password",
        scope: "*",
        username: $("#email").val(),
        password: $("#password").val()
      };

      axios.post(this.dataOauth, data).then(this.oauthResponse);
    },
    oauthResponse(response) {
      let data = response.data;

      window.localStorage.setItem("accessToken", data.access_token);
      window.localStorage.setItem("refreshToken", data.refresh_token);

      $("#form1").submit();
    }
  }
};
</script>