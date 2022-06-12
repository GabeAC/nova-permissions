Nova.booting((Vue) => {
  Nova.inertia('index-PermissionCheckBox', require('./components/IndexField'));
  Nova.inertia('detail-PermissionCheckBox', require('./components/DetailField'));
  Nova.inertia('form-PermissionCheckBox', require('./components/FormField'));
})
