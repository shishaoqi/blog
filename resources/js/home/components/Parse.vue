<template>
  <div class="markdown-body" v-html="rawHtml"></div>
</template>

<script>
import emojione from 'emojione'

export default {
  props: {
    content: {
      type: String,
      default () {
        return null
      }
    }
  },
  data() {
    return {
      rawHtml: ''
    }
  },
  created() {
    this.rawHtml = this.parse(this.content)
  },
  methods: {
    parse(content) {
      marked.setOptions({
        highlight: (code, lang) => {
          const language = hljs.getLanguage(lang) ? lang : 'plaintext';
          return hljs.highlight(code, { language }).value
          //return hljs.highlightAuto(code).value
        },
        //sanitize: true
        langPrefix: 'hljs language-', // highlight.js css expects a top-level 'hljs' class.
        pedantic: false,
        gfm: true,
        breaks: false,
        sanitize: false,
        smartLists: true,
        smartypants: false,
        xhtml: false
      });

      return emojione.toImage(marked.parse(content))
    },
  },
}

</script>
