<script>
export default {
  data() {
    return {
      selected: null,
      options: [],
      chooseCollection: null,
      collections: [],
      tags: null,
      allTag: [],
      startTime: {
        time: ''
      },
      option: {
        type: 'min',
        week: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
        month: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        format: 'YYYY-MM-DD HH:mm:ss',
        placeholder: 'Published At?',
        inputStyle: {
          'display': 'inline-block',
          'padding': '6px 6px 6px 10px',
          'height': '41px',
          'line-height': '22px',
          'font-size': '13px',
          'border': '1px solid #dce4ec',
          'border-radius': '6px',
          'color': '#5F5F5F'
        },
        color: {
          header: '#52697f',
          headerText: '#1abc9c'
        },
        buttons: {
          ok: 'Ok',
          cancel: 'Cancel'
        },
        overlayOpacity: 0.5,
        dismissible: true
      }
    }
  },
  mounted() {
    this.option.placeholder = this.$t('form.published_at')
  },
  created() {
    this.loadCategories()
    this.loadCollections()
    this.loadTags()
  },
  methods: {
    loadCategories() {
      this.$http.get('categories')
        .then((response) => {
          this.options = response.data.data
        })
    },
    loadCollections() {
      this.$http.get('collections')
        .then((response) => {
          var emptyObj = {
            "id": 0,
            "name": "未选择",
            "path": "",
            "description": "",
            "status": null,
            "created_at": null
          };
          response.data.data.unshift(emptyObj)
          this.collections = response.data.data
        })
    },
    loadTags() {
      this.$http.get('tags')
        .then((response) => {
          this.allTag = response.data.data
        })
    },
  },
}
</script>
