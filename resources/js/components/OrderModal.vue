<template>
  <div class="description-part__modal mh-1">
    <button
      @click="openModal"
      class="button is-info is-large modal-button"
    >
      <i class="fa fa-shopping-cart"></i>
      Заказать
    </button>

    <div class="modal" ref="modal">
      <div class="modal-background"></div>

      <div class="modal-card pa-2">
        <header class="modal-card-head ">
          <p class="modal-card-title">Заполните Форму</p>
          <button @click.prevent="closeModal" class="delete"></button>
        </header>
        <section class="modal-card-body">
          <form @submit.prevent="submit">
            <div class="field">
            <p class="mh-1">Ваше имя: </p>
            <div class="control has-icons-left has-icons-right">
              <input
                class="input"
                v-model="form.name"
                :class="{'is-danger': $v.form.name.$error}"
                type="text"
                placeholder="Акбар"
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
            <p class="mh-1">Ваш номер: </p>
            <div class="control has-icons-left has-icons-right">
              <input
                class="input"
                v-model="form.phone"
                type="tel"
                :class="{'is-danger': $v.form.phone.$error}"
                v-mask="'+998## ###-##-##'"
                placeholder="+99890 999-99-99"
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
          </div>
          <vue-recaptcha
              ref="recaptcha"
              @verify="onCaptchaVerified"
              @expired="resetCaptcha"
              size="invisible"
              :sitekey="sitekey">
          </vue-recaptcha>
          <div class="d-flex flex-end">
            <button type="submit" class="button button-pink text-center" :class="{'is-loading' : loading}">
              Отправить
            </button>
          </div>
          </form>

        </section>
      </div>
    </div>
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
  import VueRecaptcha from 'vue-recaptcha'

  export default {
    data () {
      return {
        form: {
          name: '',
          phone: ''
        },
        visible: false,
        loading: false,
        root: document.documentElement
      }
    },
    components: {
      VueRecaptcha
    },
    props: {
      slug: {
        required: true,
        type: String
      },
      sitekey: {
        required: true
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
        }
      }
    },
    directives: {
      mask
    },
    mounted () {
      document.addEventListener('keydown', e => {
        if(this.visible && e.keyCode === 27) {
          this.closeModal()
        }
      })
    },
    methods: {
      openModal() {
        this.visible = true
        this.root.classList.add('is-clipped')
        this.$refs.modal.classList.add('is-active')
      },

      closeModal()  {
        this.visible = false
        this.clearForm()
        this.root.classList.remove('is-clipped')
        this.$refs.modal.classList.remove('is-active')
      },

      submit() {
        this.$v.form.$touch()
        if (!this.$v.$invalid) {
          this.loading = true
          this.$refs.recaptcha.execute()
        }
      },
      clearForm () {
        this.form.name = ''
        this.form.phone = ''
        this.$v.$reset()
      },
      showAlert(text) {
        this.$swal({
          showConfirmButton: false,
          timer: 3000,
          type: 'success',
          text
        })
      },
      onCaptchaVerified (token) {
        this.resetCaptcha()
        const form = {...this.form}
        form['g-recaptcha-response'] = token
        axios.post(`/api/order/${this.slug}`, form)
          .then(response => {
            this.loading = false
            this.closeModal()
            this.showAlert(response.data.status)
          })
          .catch(err => {
            this.loading = false
            console.log(err)
          })
          .finally(() => {this.clearForm()})
      },
      resetCaptcha () {
        this.$refs.recaptcha.reset()
      }
    }
  }
</script>

<style lang="scss">
  .grecaptcha-badge {
      visibility: hidden !important;
  }
</style>
