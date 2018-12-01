var $$ = Dom7;

var app = new Framework7({
  // App root element
  root: '#app',
  // App Name
  name: 'ecoticket',
  // App id
  id: 'com.phonegap.ecoticket',

  touch: {
    disableContextMenu: false,
  },
  dialog: {

    buttonOk: 'OK',
    buttonCancel: 'Cancelar',
  },

  panel: {
    swipe: 'left',
  },
  pushState: true,

  routes: rotas,

  methods: {

  },
  on: {
    pageAfterIn: function () {
        

    }
  }

});

var mainView = app.views.create('.view-main');

document.addEventListener('backbutton', (evt) => {
  // on device back button go back

  var $url = app.view[0].router.currentRoute.url;

  if ($url == "/dashboard/") {
    $$('.icone_sair').trigger('click');
  } else if ($url == "/login/") {
    $$('.sair').trigger('click');
  } else {
    app.router.back();
  }


}, false)