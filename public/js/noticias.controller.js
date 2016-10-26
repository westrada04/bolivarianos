(function() {
    'use strict';

    angular
        .module('app')
        .controller('NoticiasController', NoticiasController);

    function NoticiasController($http){
        var vm = this;
        vm.comentar = comentar;
        vm.noticia = noticia;

        function noticia(noticia){
            vm.noticia_id = noticia;
        }

        function comentar(){
            var objeto = {
                comentario: vm.comentario,
                noticia: vm.noticia_id
            };

            $http.post('http://localhost/bolivarianos/public/comentar',objeto)
                .then(function(data){
                    console.log(data);
                    location.reload();
                },function(){

                });
        }
    }

})();