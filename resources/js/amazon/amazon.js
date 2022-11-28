var app = angular.module('amazon', []);

app.controller('Categorycontroller', ['$scope', '$http', function($scope, $http){
    var category = this;

    category.loadFunc = (data)=>{
     category.selected = true;
     category.defaulted = false;
      category.categoryList = data;
         }

    category.addFunc = (routedata) => {
        
        category.selected = false;
        category.defaulted = true;
        category.spec = false;
        category.getid=routedata.data.id;
        category.getlist=routedata.data.category_list;

     
        $http({
            method: 'POST',
            url: '/amazon/'+category.getlist,
            data: {
                'id': category.getid,
                'name':category.getlist
            }
        }).then(function(response) {
            console.log(response.data)

            if(response.data)
            {
                category.productname=response.data
            }
        }, function() {
            alert('Failed');
        })
    }

    category.showFunc = ( routedatas ) => {
        category.defaulted=false;
        category.spec = true;
        // alert('hi')
        category.getid=routedatas.data.id;
        category.specification=routedatas.data.specification;


         console.log(category.specification)
        $http({
            method: 'POST',
            url: 'amazons/product'+category.specification,
            data: {
                'id': category.getid,
                'specification':category.specification
            }
        }).then(function(response) {
            // console.log(response.data)

            if(response.data)
            {
                category.specifications=response.data
                console.log(category.specifications);
            }
        }, function() {
            alert('Failed');
        })


    }



    



}]);
