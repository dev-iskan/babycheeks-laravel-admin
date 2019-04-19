<template>
  <div class="contactus__container">
    <form @submit.prevent="submit" class="container d-flex flex-column-nowrap justify-center align-center py-3">
      <p class="text-center subtitle is-3 page-color_blue">Свяжитесь с нами</p>
      <div class="control has-icons-left has-icons-right container-50 mg-auto-horizontal">
        <input
        v-model="form.name"
        class="input"
        :class="{'is-danger': $v.form.name.$error}"
        type="text"
        placeholder="Ваше имя"
        >
        <span class="icon is-small is-left">
          <i class="fas fa-user"></i>
        </span>
        <template v-if="$v.form.name.$error">
          <span class="icon is-small is-right">
            <i class="fas fa-exclamation-triangle"></i>
          </span>
          <p class="help is-danger">Поле обязательно</p>
        </template>
      </div>
      <div class="control has-icons-left has-icons-right container-50 mg-auto-horizontal mh-1">
        <input
        class="input"
        v-model="form.phone"
        :class="{'is-danger': $v.form.phone.$error}"
        type="tel"
        v-mask="'+998## ###-##-##'"
        placeholder="Номер телефона"
        >
        <span class="icon is-small is-left">
          <i class="fas fa-phone"></i>
        </span>
        <template v-if="$v.form.phone.$error">
          <span class="icon is-small is-right">
            <i class="fas fa-exclamation-triangle"></i>
          </span>
          <p class="help is-danger">Поле введено не верно</p>
        </template>
      </div>
      <div class="control container-50">
        <textarea
        class="textarea is-rounded"
        placeholder="Ваши комментарии"
        :class="{'is-danger': $v.form.text.$error}"
        v-model="form.text"
        ></textarea>
      </div>

      <button type="submit" class="button is-danger is-rounded mh-3" :class="{'is-loading' : loading}">Отправить</button>
    </form>
  </div>
</template>

<script>
  import {
    mask
  } from 'vue-the-mask'
  import {
    required,
    helpers
  } from 'vuelidate/lib/validators'
  const phoneRegExp = helpers.regex(
    'phoneRegExp',
    /^\+998\d{2}\s\d{3}-\d{2}-\d{2}$/
  )
  export default {
    data() {
      return {
        form: {
          name: '',
          phone: '',
          text: ''
        },
        loading: false
      }
    },
    validations: {
      form: {
        name: {
          required
        },
        phone: {
          required,
          phoneRegExp
        },
        text: {
          required
        }
      }
    },
    directives: {
      mask
    },
    methods: {
      submit() {
        this.$v.form.$touch()
        if (!this.$v.$invalid) {
          this.loading = true
          axios.post('/api/feedback', this.form)
          .then(response => {
            this.loading = false
            this.showAlert(response.data.status)
          })
          .finally(() => {this.clearForm()})
        }
      },
      clearForm () {
        this.form.name = ''
        this.form.phone = ''
        this.form.text = ''
        this.$v.$reset()
      },
      showAlert(text) {
        this.$swal({
          showConfirmButton: false,
          timer: 3000,
          type: 'success',
          text
        })
      }
    }
  }

</script>

<style lang="scss" scoped>

</style>
