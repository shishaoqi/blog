export default [{
  path: 'collections',
  component: () => import('js/App.vue'),
  children: [{
    path: '/',
    name: 'dashboard.collection',
    component: () => import('./Collection')
  }, {
    path: 'create',
    name: 'dashboard.collection.create',
    component: () => import('./Create')
  }, {
    path: ':id/edit',
    name: 'dashboard.collection.edit',
    component: () => import('./Edit')
  }]
}]
