Nova.booting((app, store) => {
  app.component('index-PermissionCheckBox', require('./components/IndexField'));
  app.component('detail-PermissionCheckBox', require('./components/DetailField'));
  app.component('form-PermissionCheckBox', require('./components/FormField'));
})
