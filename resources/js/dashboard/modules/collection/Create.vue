<template>
  <vue-form :title="$t('form.create_collection')">
    <template slot="buttons">
      <router-link :to="{ name: 'dashboard.collection' }" class="btn btn-sm btn-secondary" exact>{{ $t('form.back') }}</router-link>
    </template>
    <template slot="content">
      <collection-form></collection-form>
    </template>
  </vue-form>
</template>

<script>
import CollectionForm from './Form'

export default {
  components: { CollectionForm },
}
</script>
