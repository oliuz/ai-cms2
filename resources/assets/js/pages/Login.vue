<template>
    <button type="button" @click="login" :class="classComputed">
        <slot></slot>
    </button>
</template>

<script>
import axios from "axios"
export default {
    data() {
        return {}
    },
    computed: {
        classComputed() {
            return this.dataClass.split(" ")
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
        submit() {
            $("#form1").submit()
        },
        login() {
            let data = {
                client_id: window.cliento.id,
                client_secret: window.cliento.secret,
                grant_type: "password",
                scope: "*",
                username: $("#email").val(),
                password: $("#password").val()
            }

            axios.post(this.dataOauth, data).then(this.oauthResponse)
        },
        oauthResponse(response) {
            let data = response.data

            window.localStorage.setItem("accessToken", data.access_token)
            window.localStorage.setItem("refreshToken", data.refresh_token)

            this.submit()
        }
    }
}
</script>