<template>
  <vue-form :title="$t('form.edit_collection')">
    <template slot="buttons">
      <router-link :to="{ name: 'dashboard.collection' }" class="btn btn-sm btn-secondary" exact>{{ $t('form.back') }}</router-link>
    </template>
    <template slot="content">
      <collection-form :collection="collection"></collection-form>
    </template>
  </vue-form>
</template>

<script>
import CollectionForm from './Form'

export default {
  components: { CollectionForm },
  data() {
    return {
      collection: undefined
    }
  },
  created() {
    this.loadCollection()
  },
  methods: {
    loadCollection() {
      this.$http.get('collection/' + this.$route.params.id + '/edit')
        .then((response) => {
          this.collection = response.data.data
        })
    },
  }
}
</script>
