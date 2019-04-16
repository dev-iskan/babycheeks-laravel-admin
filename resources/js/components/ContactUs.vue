<template>
  <div class="contactus__container">
    <div class="container d-flex flex-column-nowrap justify-center align-center py-3">
      <p class="text-center subtitle is-3 has-text-white">Свяжитесь с нами</p>
      <div class="control has-icons-left has-icons-right container-50 mg-auto-horizontal">
        <input class="input" type="email" placeholder="Введите ваш Email">
        <span class="icon is-small is-left">
          <i class="fas fa-envelope"></i>
        </span>
      </div>
      <div class="control has-icons-left has-icons-right container-50 mg-auto-horizontal mh-1">
        <input class="input" type="email" placeholder="Введите ваш номер телефона">
        <span class="icon is-small is-left">
          <i class="fas fa-phone"></i>
        </span>
      </div>
      <div class="control container-50">
        <textarea class="textarea is-rounded" placeholder="Добавте ваши комментарии"></textarea>
      </div>

      <a class="button is-danger is-rounded mh-3">Отправить</a>
    </div>
  </div>
</template>

<script>
  export default {

  }
</script>

<style lang="scss" scoped>

</style>
