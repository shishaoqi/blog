<template>
  <div class="row">
    <form class="col-sm-6 offset-sm-2" @submit.prevent="onSubmit">
      <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label">{{ $t('form.collection_name') }}</label>
        <div class="col-sm-9">
          <input type="text" name="name" id="name" v-model="collection.name" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="path" class="col-sm-3 col-form-label">{{ $t('form.path') }}</label>
        <div class="col-sm-9">
          <input type="text" name="path" id="path" v-model="collection.path" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="editor" class="col-sm-3 col-form-label">{{ $t('form.description') }}</label>
        <div class="col-sm-9">
          <textarea id="editor" name="description" :placeholder="$t('form.collection_description')" v-model="collection.description" class="form-control"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-2 col-sm-9">
          <button type="submit" class="btn btn-info">{{ collection.id ? $t('form.edit') : $t('form.create') }}</button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import { stack_error } from 'config/helper'

export default {
  props: {
    collection: {
      type: Object,
      default () {
        return {}
      }
    }
  },
  computed: {
    mode() {
      return this.collection.id ? 'update' : 'create'
    },
  },
  methods: {
    onSubmit() {
      let url = 'collection' + (this.collection.id ? '/' + this.collection.id : '')
      let method = this.collection.id ? 'patch' : 'post'

      this.$http[method](url, this.collection)
        .then((response) => {
          toastr.success('You ' + this.mode + 'd the collection success!')

          this.$router.push({ name: 'dashboard.collection' })
        }).catch(({ response }) => {
          stack_error(response)
        })
    }
  }
}
</script>
